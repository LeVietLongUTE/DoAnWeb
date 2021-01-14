<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use function Ramsey\Uuid\v1;

class breedController extends Controller
{
    public function show_formAddBreed() {
        $list_category = DB::table('tb_category_product')->get();
        $manager_category = view('backend.breed.add_breed_product')->with('list_category',$list_category);
        return view('admin_layout')->with('backend.breed.add_breed_product',$manager_category);
    }

    public function save_breedProduct(Request $request) {

        $data = array();
        //$data__ = DB::table('tb_category_product')->where('category_name',$request->category_name)->get();
        if(!$request->description){
            $request->description='';
        }
        $data = [
            'category_id' =>$request->category_id, 
            'breed_name' => $request->nameBreed,
            'breed_description' => $request->description,
            'breed_status' => $request->breed_status
        ];
        if( empty($request->nameBreed) ){
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
        
       $list_breed = DB::table('tb_breed_product')
       ->join('tb_category_product','tb_breed_product.category_id','=','tb_category_product.category_id')
       ->select('tb_breed_product.*','category_name')->get();
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
        $edit_breed = DB::table('tb_breed_product')
        ->join('tb_category_product','tb_breed_product.category_id','=','tb_category_product.category_id')
        ->select('tb_breed_product.*','category_name')-> where('breed_id',$breed_product_id)->get();
        $manager_breed = view('backend.breed.edit_breed_product')->with('edit_breed',$edit_breed)->with('list_category',$list_category);
       
        return view('admin_layout')->with('backend.breed.edit_breed_product',$manager_breed);

    }
    public function update_breedProduct ( Request $request, $breed_product_id) {
        $data__ = DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->get('breed_name');
        
        $data = [
            'category_id' => $request->category_name,
            'breed_name' => $request->nameBreed,
            'breed_description' =>$request->description
        ];
        foreach ($data__ as $key => $data__) {
            # code...
       
        if (empty($request->nameBreed)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/edit-breed/'.$breed_product_id);
        }else {
            if (DB::table('tb_breed_product')->where('breed_name',$request->nameBreed)->first() && ($request->nameBreed != $data__->breed_name)){
                Session::put('error','Tên loại sản phẩm đã tồn tại!');
                return Redirect::to('/edit-breed/'.$breed_product_id);
            }else{
                DB::table('tb_breed_product')->where('breed_id',$breed_product_id)->update($data);
                Session::put('message','Cập nhật loại sản phẩm thành công');
                return Redirect::to('list-breed');
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
