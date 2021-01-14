<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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
            'product_gender' =>$request->product_gender, 
            'product_name' => $request->nameProduct,
            'product_tiem' => $request->tiemProduct,
            'product_xuatxu' => $request->xuatxuProduct,
            // 'product_image' => $request->file('imageProduct'),
            'product_age' => $request->ageProduct,
            'product_price' => $request->priceProduct,
            'product_description' => $request->description,
            'product_status' => $request->product_status
        ];
        $get_img = $request->file('imageProductMain');
        $get_img1 = $request->file('imageProduct1');
        $get_img2 = $request->file('imageProduct2');
        $get_img3 = $request->file('imageProduct3');
        if($get_img){
            $new_img =$request->nameProduct.'_chính_'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            if ($get_img1) {
                $new_img1 = $request->nameProduct.'_phụ1_'.rand(0,99).'.'.$get_img1->getClientOriginalExtension();
                $get_img1->move('public/uploads/products',$new_img1);
                $data['product_image1'] = $new_img1;
            }else{
                $data['product_image1'] = '';
            }
            if ($get_img2) {
                $new_img2 = $request->nameProduct.'_phụ2_'.rand(0,99).'.'.$get_img2->getClientOriginalExtension();
                $get_img2->move('public/uploads/products',$new_img2);
                $data['product_image2'] = $new_img2;
            }else{
                $data['product_image2'] = '';
            }
            if ($get_img3) {
                $new_img3 = $request->nameProduct.'_phụ3_'.rand(0,99).'.'.$get_img3->getClientOriginalExtension();
                $get_img3->move('public/uploads/products',$new_img3);
                $data['product_image3'] = $new_img3;
            }else{
                $data['product_image3'] = '';
            }
            $get_img->move('public/uploads/products',$new_img);
            $data['product_image_main'] = $new_img;
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct) or empty($request->tiemProduct) or empty($request->xuatxuProduct) or empty($request->description)){
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
            // $data['product_image_main'] = '';
            Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/add-product');
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
        Session::put('message','Chuyển đôi trạng thái hết hàng');
        return Redirect::to('list-product');
    }

    public function active_product($product_id) {
        DB::table('tb_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Chuyển đôi trạng thái còn hàng');
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
        $data__ = DB::table('tb_product')->where('product_id',$product_id)->get('product_name');
        $data = [
            'breed_id' => $request->breed_name,
            'product_name' => $request->nameProduct,
            'product_gender' => $request->product_gender,
            'product_tiem' =>$request->tiemProduct,
            'product_xuatxu' =>$request->xuatxuProduct,
            'product_age' => $request->ageProduct,
            'product_price' => $request->priceProduct,
            'product_description' =>$request->description
        ];
        foreach ($data__ as $key => $data__) {
            # code...
       
        $get_img = $request->file('imageProductMain');
        $get_img1 = $request->file('imageProduct1');
        $get_img2 = $request->file('imageProduct2');
        $get_img3 = $request->file('imageProduct3');
        if($get_img){
            $new_img =$request->nameProduct.'_chính_'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            if ($get_img1) {
                $new_img1 = $request->nameProduct.'_phụ1_'.rand(0,99).'.'.$get_img1->getClientOriginalExtension();
                $get_img1->move('public/uploads/products',$new_img1);
                $data['product_image1'] = $new_img1;
            }else{
                $data['product_image1'] = '';
            }
            if ($get_img2) {
                $new_img2 = $request->nameProduct.'_phụ2_'.rand(0,99).'.'.$get_img2->getClientOriginalExtension();
                $get_img2->move('public/uploads/products',$new_img2);
                $data['product_image2'] = $new_img2;
            }else{
                $data['product_image2'] = '';
            }
            if ($get_img3) {
                $new_img3 = $request->nameProduct.'_phụ3_'.rand(0,99).'.'.$get_img3->getClientOriginalExtension();
                $get_img3->move('public/uploads/products',$new_img3);
                $data['product_image3'] = $new_img3;
            }else{
                $data['product_image3'] = '';
            }
            $get_img->move('public/uploads/products',$new_img);
            $data['product_image_main'] = $new_img;
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct) or empty($request->tiemProduct) or empty($request->xuatxuProduct) ){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/edit-product/'.$product_id);
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first() && ($request->nameProduct != $data__->product_name)){
                    Session::put('error','Tên sản phẩm đã tồn tại!');
                    return Redirect::to('/edit-product/'.$product_id);
                }else{
                    DB::table('tb_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','Chỉnh sửa sản phẩm thành công');
                    return Redirect::to('/list-product');
                }
            }
        }else{
            if ($get_img1) {
                $new_img1 = $request->nameProduct.'_phụ1_'.rand(0,99).'.'.$get_img1->getClientOriginalExtension();
                $get_img1->move('public/uploads/products',$new_img1);
                $data['product_image1'] = $new_img1;
            }else{
                $data['product_image1'] = '';
            }
            if ($get_img2) {
                $new_img2 = $request->nameProduct.'_phụ2_'.rand(0,99).'.'.$get_img2->getClientOriginalExtension();
                $get_img2->move('public/uploads/products',$new_img2);
                $data['product_image2'] = $new_img2;
            }else{
                $data['product_image2'] = '';
            }
            if ($get_img3) {
                $new_img3 = $request->nameProduct.'_phụ3_'.rand(0,99).'.'.$get_img3->getClientOriginalExtension();
                $get_img3->move('public/uploads/products',$new_img3);
                $data['product_image3'] = $new_img3;
            }else{
                $data['product_image3'] = '';
            }
            if( empty($request->nameProduct) or empty($request->ageProduct) or empty($request->priceProduct) or empty($request->tiemProduct) or empty($request->xuatxuProduct) ){
                Session::put('message','Bạn đã nhập rỗng dữ liệu không được phép');
                return Redirect::to('/edit-product/'.$product_id);
            }else{
                if (DB::table('tb_product')->where('product_name',$request->nameProduct)->first() && ($request->nameProduct != $data__->product_name)){
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
    }

    public function delete_product($product_id) {
        DB::table('tb_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('list-product');
    }
    public function view_product($product_id) {
        $list_product = DB::table('tb_product')
       ->join('tb_breed_product','tb_product.breed_id','=','tb_breed_product.breed_id')
       ->join('tb_category_product','tb_breed_product.category_id','=','tb_category_product.category_id')
       ->select('tb_product.*','category_name','breed_name')->where('product_id',$product_id)->get();
       $manager_product = view('backend.product.view_product')->with('list_product',$list_product);
        return view('admin_layout')->with('backend.product.view_product',$manager_product);
    }


//end admin

    public function details_product($product_id) {
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_product = DB::table('tb_product')->where('product_status',1)->limit(4)->get();

        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();

        return view('frontend.show_details')->with('category',$list_category)->with('breed',$list_breed)->with('product',$list_product)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD);


    }
}





