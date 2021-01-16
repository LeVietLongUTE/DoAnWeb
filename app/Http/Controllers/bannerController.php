<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class bannerController extends Controller
{
    public function show_formAddBanner() {
        return view('backend.banner.add_banner');
    }
    public function save_Banner(Request $request) {
        $data = array();
        $data = [
            'banner_note' => $request->banner_note,
            'banner_status' => $request->banner_status
        ];
        $get_img = $request->file('imageBanner');
        if($get_img){
            $new_img =time().'banner'.'_chính_'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/uploads/products',$new_img);
            $data['banner_image'] = $new_img;
            DB::table('tb_banner')->insert($data);
            Session::put('message','Thêm banner thành công');
            return Redirect::to('/add-banner');
        }
        else {
            Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/add-banner');
        }
    }

    public function show_listBanner() {

       $list_banner = DB::table('tb_banner')->paginate(5);
       $manager_banner = view('backend.banner.list_banner')->with('list_banner',$list_banner);

        return view('admin_layout')->with('backend.banner.list_banner',$manager_banner);
    }
    //Thay đổi ẩn hiện banner
    public function un_active_banner($banner_id) {
        DB::table('tb_banner')->where('banner_id',$banner_id)->update(['banner_status'=>0]);
        Session::put('message','Ẩn banner thành công');
        return Redirect::to('list-banner');
    }

    public function active_banner($banner_id) {
        DB::table('tb_banner')->where('banner_id',$banner_id)->update(['banner_status'=>1]);
        Session::put('message','Hiện banner thành công');
        return Redirect::to('list-banner');
    }

    //Chỉnh sửa banner
    public function edit_banner($banner_id) {
        $edit_banner = DB::table('tb_banner')->where('banner_id',$banner_id)->get();
        $manager_banner = view('backend.banner.edit_banner')->with('edit_banner',$edit_banner);

        return view('admin_layout')->with('backend.banner.edit_banner',$manager_banner);

    }
    public function update_banner ( Request $request, $banner_id) {
        $get_img = $request->file('imageBanner');
        if($get_img){
            $new_img =time().'banner'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/uploads/products',$new_img);
            $data['banner_image'] = $new_img;

                    DB::table('tb_banner')->where('banner_id',$banner_id)->update($data);
                    Session::put('message','Chỉnh sửa banner thành công');
                    return Redirect::to('/list-banner');
            }else {
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/edit-banner/'.$banner_id);
            }
            
        }
            
  

    public function delete_banner($banner_id) {
        DB::table('tb_banner')->where('banner_id',$banner_id)->delete();
        Session::put('message','Xóa banner thành công');
        return Redirect::to('list-banner');
    }
}
