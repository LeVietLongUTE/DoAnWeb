<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class billController extends Controller
{
    //
    public function save_bill(Request $request) {
        
        if (Session::get('id')){
            
            $content = Cart::content();  

            if(Cart::priceTotal()>0) {
            $data = array();
            //$data__ = DB::table('tb_category_product')->where('category_name',$request->category_name)->get();
            
            $id_ND = Session::get('id');
            $maHD = DB::table('tb_bill')->orderBy('id', 'desc')->get('id')->first();
    
            $data = [
                'idND' =>Session::get('id'), 
                'NgayLap' => Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString(),
                'NguoiNhan' => $request->nameNN,
                'sdt' => $request->sdt,
                'DiaChi' => $request->address,
                'TongTien' => Cart::priceTotal(),
                'TrangThai' => 0
            ];
            Session::put('tenNN', $request->nameNN);
            Session::put('sodienthoai',$request->sdt);
            Session::put('address',$request->address);
    
           
            // foreach ($maHD as $key => $value) {
            //     # code...
           
            // }
            $ma = $maHD->id;
            foreach ($content as $item) {
                # code...
                $data__ = [
                    'MaHD' => $ma +1,
                    'MaSP' => $item->id,
                    'SoLuong' => 1,
                    'DonGia' => $item->price,
                    
                ];
                if (empty($request->nameNN) or empty($request->sdt) or empty($request->address)){
                    Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
                    return Redirect::to('/dat-hang');
                }else {
                    DB::table('tb_chi_tiet_bill')->insert($data__);
                }
            
                    // echo '<pre>';
                    // print_r($data__);
                    // echo '</pre>';
            }
            
            
            if (empty($request->nameNN) or empty($request->sdt) or empty($request->address)){
                Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/dat-hang');
            }else
                {
                    DB::table('tb_bill')->insert($data);
                    Session::put('message','Vui lòng chờ đợi hệ thống duyệt đơn hàng');
                    return view('frontend.orderComplete');
                }
            }else {
                return Redirect()->back()->with('message','Bạn chưa có sản phẩm nào trong giỏ hàng!');
            }
        }else {
            return Redirect()->back()->with('message','Bạn chưa đăng nhập tài khoản vui lòng kiểm tra lại');
        }
        
       

        
    }


    public function show_listBill() {
        
        $list_bill = DB::table('tb_bill')
        ->join('users','users.id','=','tb_bill.idND')
        ->select('tb_bill.*','users.name')->orderBy('id','desc')->paginate(8);
        $manager_bill = view('backend.bill.list_bill')->with('list_bill',$list_bill);
 
         if(Session::get('id') and Session::get('level')==1 )
         {
             return view('admin_layout')->with('backend.bill.list_bill',$manager_bill);
         }
         else
            return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');
    }

    public function da_duyet() {
        $list_bill = DB::table('tb_bill')
        ->join('users','users.id','=','tb_bill.idND')
        ->select('tb_bill.*','users.name')->where('TrangThai','1')->orderBy('id','desc')->paginate(8);
        $manager_bill = view('backend.bill.da_duyet')->with('list_bill',$list_bill);

        if(Session::get('id') and Session::get('level')==1 )
        {
            return view('admin_layout')->with('backend.bill.da_duyet',$manager_bill);
        }
        else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');
    }
    
    public function chua_duyet() {
        $list_bill = DB::table('tb_bill')
        ->join('users','users.id','=','tb_bill.idND')
        ->select('tb_bill.*','users.name')->where('TrangThai','0')->orderBy('id','desc')->paginate(8);
        $manager_bill = view('backend.bill.chua_duyet')->with('list_bill',$list_bill);

        if(Session::get('id') and Session::get('level')==1 )
        {
            return view('admin_layout')->with('backend.bill.chua_duyet',$manager_bill);
        }
        else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');
    }

    public function view_don_hang($MaHD) {
        $list_data = DB::table('tb_chi_tiet_bill')->join('tb_bill','tb_bill.id','=','tb_chi_tiet_bill.MaHD')
        ->join('tb_product','tb_product.product_id','=','tb_chi_tiet_bill.MaSP')
        ->select('tb_chi_tiet_bill.*','tb_bill.TongTien','tb_product.product_name','tb_bill.TrangThai')->where('tb_chi_tiet_bill.MaHD',$MaHD)->paginate(5);
        $manager_bill = view('backend.bill.xem_chi_tiet')->with('list_data',$list_data);
        if(Session::get('id') and Session::get('level')==1 )
        {
            return view('admin_layout')->with('backend.bill.xem_chi_tiet',$manager_bill);
        }
        else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.'); 
    }

 
     public function delete_bill($MaHD) {
         DB::table('tb_bill')->where('id',$MaHD)->delete();
         DB::table('tb_chi_tiet_bill')->where('MaHD',$MaHD)->delete();
         Session::put('message','Xóa đơn hàng thành công');
         return Redirect::to('list-bill');
     }

     public function active_bill($MaHD) {
        DB::table('tb_bill')->where('id',$MaHD)->update(['TrangThai'=>'1']);
        Session::put('message','Duyệt đơn thành công');
        return Redirect::to('list-bill');
    }
}
