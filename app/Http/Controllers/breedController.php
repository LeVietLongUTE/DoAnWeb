<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class breedController extends Controller
{
    public function show_formAddBreed() {
        $list_category = DB::table('tb_category_product')->get();
        $manager_category = view('backend.breed.add_breed_product')->with('list_category',$list_category);
        return view('admin_layout')->with('backend.breed.add_breed_product',$manager_category);
    }

    public function save_breedProduct(Request $request) {

        $data = array();
        $data = [
            'category_name' =>$request->category_name, 
            'breed_name' => $request->nameBreed,
            'breed_description' => $request->description,
            'breed_status' => $request->breed_status
        ];
        if( empty($request->nameBreed) or empty($request->description)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/add-breed-product');
        }else{
            if (DB::table('tb_breed_product')->where('breed_name',$request->nameBreed)->first()){
                Session::put('error','Tên danh mục đã tồn tại!');
                return Redirect::to('/add-breed-product');
            }else{
                DB::table('tb_breed_product')->insert($data);
                Session::put('message','Thêm danh mục sản phẩm thành công');
                return Redirect::to('/add-breed-product');
            }
        }
    }

    public function show_listBreed() {
        
       $list_breed = DB::table('tb_breed_product')->get();
       $manager_breed = view('backend.breed.list_breed_product')->with('list_breed',$list_breed);
        return view('admin_layout')->with('backend.breed.list_breed_product',$manager_breed);
    }
    //Thay đổi ẩn hiện breed
    public function un_active_breed($breed_product_id) {
        DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->update(['breed_status'=>0]);
        Session::put('message','Ẩn danh mục thành công');
        return Redirect::to('list-breed');
    }

    public function active_breed($breed_product_id) {
        DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->update(['breed_status'=>1]);
        Session::put('message','Hiện danh mục thành công');
        return Redirect::to('list-breed');
    }

   
    //Chỉnh sửa breed
    public function edit_breed_product($breed_product_id) {
        $list_category = DB::table('tb_category_product')->get();
        $manager_category = view('backend.breed.edit_breed_product')->with('list_category',$list_category);

        $edit_breed = DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->get();
        $manager_breed = view('backend.breed.edit_breed_product')->with('edit_breed',$edit_breed);
      
        return view('admin_layout')->with('backend.breed.edit_breed_product',$manager_breed);

    }
    public function update_categoryProduct ( Request $request, $category_product_id) {
        $data = [
            'category_name' => $request->nameCategory,
            'category_descript' =>$request->description
        ];
        if (DB::table('tb_category_product')->where('category_name',$request->nameCategory)->first()){
            Session::put('error','Tên danh mục đã tồn tại!');
            return Redirect::to('/edit-category/'.$category_product_id);
        }else{
            DB::table('tb_category_product')->where('category_id',$category_product_id)->update($data);
            Session::put('message','Cập nhật danh mục sản phẩm thành công');
            return Redirect::to('list-category');
        }
    }

    public function delete_breed_product($breed_product_id) {
        DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-breed');
    }
}
