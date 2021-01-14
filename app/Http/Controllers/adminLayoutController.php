<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class adminLayoutController extends Controller
{
    //chuyen trang chinh admin
    public function index()
    {
        # code...
        return view('admin_layout');
    }
    public function AuthLogin() {
        $admin_id = Session::get('id');
        if ($admin_id) {
            return Redirect::to('backend.dashboard');
        }else {
            Redirect::to('login');
        }
    }

    
    //Category controller
    public function show_formAddCategory() {
        return view('backend.category.add_category_product');
    }
    public function save_categoryProduct(Request $request) {
        $data = array();
        $data = [
            'category_name' => $request->nameCategory,
            'category_descript' => $request->description,
            'category_status' => $request->category_status
        ];
        if( empty($request->nameCategory) or empty($request->description)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/add-category-product');
        }else{
            if (DB::table('tb_category_product')->where('category_name',$request->nameCategory)->first()){
                Session::put('error','Tên danh mục đã tồn tại!');
                return Redirect::to('/add-category-product');
            }else{
                DB::table('tb_category_product')->insert($data);
                Session::put('message','Thêm danh mục sản phẩm thành công');
                return Redirect::to('/add-category-product');
            }
        }
    }

    public function show_listCategory() {

       $list_category = DB::table('tb_category_product')->get();
       $manager_category = view('backend.category.list_category_product')->with('list_category',$list_category);

        return view('admin_layout')->with('backend.category.list_category_product',$manager_category);
    }
    //Thay đổi ẩn hiện category
    public function un_active_category($category_product_id) {
        DB::table('tb_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Ẩn danh mục thành công');
        return Redirect::to('list-category');
    }

    public function active_category($category_product_id) {
        DB::table('tb_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Hiện danh mục thành công');
        return Redirect::to('list-category');
    }

    //Chỉnh sửa category
    public function edit_category_product($category_product_id) {
        $edit_category = DB::table('tb_category_product')->where('category_id',$category_product_id)->get();
        $manager_category = view('backend.category.edit_category_product')->with('edit_category',$edit_category);

        return view('admin_layout')->with('backend.category.edit_category_product',$manager_category);

    }
    public function update_categoryProduct ( Request $request, $category_product_id) {
        $data = [
            'category_name' => $request->nameCategory,
            'category_descript' =>$request->description
        ];
        if (empty($request->nameCategory)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép!');
            return Redirect::to('/edit-category/'.$category_product_id);
        }else{
            if (DB::table('tb_category_product')->where('category_name',$request->nameCategory)->first()){
                Session::put('error','Tên danh mục đã tồn tại!');
                return Redirect::to('/edit-category/'.$category_product_id);
            }else{
                DB::table('tb_category_product')->where('category_id',$category_product_id)->update($data);
                Session::put('message','Cập nhật danh mục sản phẩm thành công');
                return Redirect::to('list-category');
            }
        }
    }

    public function delete_category_product($category_product_id) {
        DB::table('tb_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-category');
    }
}
