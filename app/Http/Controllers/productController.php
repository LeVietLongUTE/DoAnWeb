<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    public function show_formAddProduct() {
        $list_breed = DB::table('tb_breed_product')->get();
        $manager_breed = view('backend.product.add_product')->with('list_breed',$list_breed);
        return view('admin_layout')->with('backend.add_product',$manager_breed);
    }

    public function save_Product(Request $request) {

        $data = array();
        //$data__ = DB::table('tb_category_product')->where('category_name',$request->category_name)->get();
        $data__ = DB::table('tb_breed_product')->where('breed_id',$request->breed_id)->get()->first();
        $data = [
            'category_id' => $data__->category_id,
            'breed_id' => $request->breed_id, 
            'product_name' => $request->nameProduct,
            // 'product_image' => $request->file('imageProduct'),
            'product_age' => $request->ageProduct,
            'product_price' => $request->priceProduct,
            'product_description' => $request->description,
            'product_status' => $request->product_status
        ];
        $get_img = $request->file('imageProduct');
        if($get_img){
            $new_img =$request->nameProduct.' '.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/uploads/products',$new_img);
            $data['product_image'] = $new_img;
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct)){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/add-product');
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first()){
                    Session::put('error','Tên sản phẩm đã tồn tại!');
                    return Redirect::to('/add-product');
                }else{
                    DB::table('tb_product')->insert($data);
                    Session::put('message','Thêm sản phẩm thành công');
                    return Redirect::to('/add-product');
                }
            }
        }else {
            $data['product_image'] = '';
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct)){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/add-product');
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first()){
                    Session::put('error','Tên sản phẩm đã tồn tại!');
                    return Redirect::to('/add-product');
                }else{
                    DB::table('tb_product')->insert($data);
                    Session::put('message','Thêm sản phẩm thành công');
                    return Redirect::to('/add-product');
                }
            }
        }
    }

    public function show_listProduct() {
        
       $list_product = DB::table('tb_product')
       ->join('tb_breed_product','tb_product.breed_id','=','tb_breed_product.breed_id')
       ->join('tb_category_product','tb_breed_product.category_id','=','tb_category_product.category_id')
       ->select('tb_product.*','category_name','breed_name')->get();
       $manager_product = view('backend.product.list_product')->with('list_product',$list_product);
        return view('admin_layout')->with('backend.product.list_product',$manager_product);
    }
    //Thay đổi ẩn hiện product
    public function un_active_product($product_id) {
        DB::table('tb_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Ẩn sản phẩm thành công');
        return Redirect::to('list-product');
    }

    public function active_product($product_id) {
        DB::table('tb_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Hiện sản phẩm thành công');
        return Redirect::to('list-product');
    }

   
    //Chỉnh sửa product
    public function edit_product($product_id) {
        $list_breed = DB::table('tb_breed_product')->get();
        $edit_product = DB::table('tb_product')
        ->join('tb_breed_product','tb_product.breed_id','=','tb_breed_product.breed_id')
        ->select('tb_product.*','breed_name')-> where('product_id',$product_id)->get();
        $manager_product = view('backend.product.edit_product')->with('edit_product',$edit_product)->with('list_breed',$list_breed);
      
        return view('admin_layout')->with('backend.product.edit_product',$manager_product);

    }
    public function update_product ( Request $request, $product_id) {
        $data = [
            'breed_id' => $request->breed_name,
            'product_name' => $request->nameProduct,
            'product_age' => $request->ageProduct,
            'product_price' => $request->priceProduct,
            'product_description' =>$request->description
        ];
        $get_img = $request->file('imageProduct');
        if($get_img){
            $new_img =$request->nameProduct.' '.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/uploads/products',$new_img);
            $data['product_image'] = $new_img;
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct)){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/edit-product/'.$product_id);
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first()){
                    Session::put('error','Tên sản phẩm đã tồn tại!');
                    return Redirect::to('/edit-product/'.$product_id);
                }else{
                    DB::table('tb_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','chỉnh sửa sản phẩm thành công');
                    return Redirect::to('/list-product');
                }
            }
        }else {
            $data['product_image'] = '';
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct)){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/edit-product/'.$product_id);
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first()){
                    Session::put('error','Tên sản phẩm đã tồn tại!');
                    return Redirect::to('/edit-product/'.$product_id);
                }else{
                    DB::table('tb_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','Chỉnh sửa sản phẩm thành công');
                    return Redirect::to('/list-product');
                }
            }
        }
       
    }

    public function delete_breed_product($breed_product_id) {
        DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-breed');
    }
}
