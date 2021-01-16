<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Gloudemans\Shoppingcart\Facades\Cart;
class CarController extends Controller
{
    public function save_cart(Request $request) {
        $productid= $request->productid_hidden;
    
        $product_info = DB::table('tb_product')
        ->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')
        ->where('product_id',$productid)->get()->first();
        
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_product = DB::table('tb_product')->where('product_status',1)->orderby('product_id','desc')->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();
        $data__ = Cart::content();

        //  echo '<pre>';
        // print_r($productid);
        // echo '</pre>';

        foreach ($data__ as $key => $value) {
            # code...
            if($value->id == $productid){
                Session::put('messenger','Sản phẩn đã tồn tại trong giỏ hàng');
                return Redirect()->back();

            }

        }
        
        $data['id'] = $product_info->product_id;
        $data['qty'] = 1;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = '1';
        $data['options']['image'] = $product_info->product_image_main;
        $data['options']['breed_name'] = $product_info->breed_name;

        // Cart::add([
        //     ['id' => $product_info->product_id, 'name' => $product_info->product_name, 'qty' => 1, 'price' =>$product_info->product_price, 'weight' => 550, 'options' => ['image' => $product_info->product_image_main]]
        //   ]);

        Cart::add($data);

     
        return view('frontend.show_cart')->with('category',$list_category)->with('breed',$list_breed)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('product',$list_product);
    }
    public function show_cart()
    {

        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_product = DB::table('tb_product')->where('product_status',1)->orderby('product_id','desc')->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();
        return view('frontend.show_cart')->with('category',$list_category)->with('breed',$list_breed)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('product',$list_product);
    }
    public function delete_to_cart($rowId) {
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_product = DB::table('tb_product')->where('product_status',1)->orderby('product_id','desc')->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();

        Cart::update($rowId,0);
        return view('frontend.show_cart')->with('category',$list_category)->with('breed',$list_breed)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('product',$list_product);;
    }
}
