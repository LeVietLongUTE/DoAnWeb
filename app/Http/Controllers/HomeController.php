<?php

namespace App\Http\Controllers;

use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();
class HomeController extends Controller
{
    //
    public function index(){
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')
        ->where('breed_status',1)->get();
        $list_product = DB::table('tb_product')->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')->where('product_status',1)->orderby('product_id','desc')->limit(8)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get();
        $list_product2 = DB::table('tb_product')->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')->where('product_status',1)->orderby('product_id','desc')->limit(3)->get();
        return view('frontend.home')->with('category',$list_category)->with('breed',$list_breed)->with('product',$list_product)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('related',$list_product2);
    }
    public function gioithieucho() {
        return view('frontend.gioithieu.cho');
    }
    public function gioithieumeo() {
        return view('frontend.gioithieu.meo');
    }
    public function gioithieu() {
        return view('frontend.gioithieu.gioithieus');
    }
    public function lienhe() {
        return view('frontend.lienhe');
    }
    public function details_product($product_id) {
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();

        return view('frontend.show_details')->with('breed',$list_breed)->with('product',$list_category);
    }
    public function slide(){
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();
        return view('frontend.slide')->with('list_slide',$list_slide)->with('bannerD',$list_bannerD);
    }

    public function search(Request $request) {
        $keywords = $request->Inputsearch;

        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')
        ->where('breed_status',1)->get();



        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();
        $list_product2 = DB::table('tb_product')->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')->where('product_status',1)->orderby('product_id','desc')->limit(3)->get();

        $search_product = DB::table('tb_product')->where('product_name','like','%'.$keywords.'%')->get();
        
        foreach ($search_product as $key => $value) {
            # code...
            $breed_id = $value->breed_id;
        }
        if(empty($breed_id)){
            
       
            Session::put('error','Không có thú cưng bạn muốn tìm');
            return Redirect()->back()->with('category',$list_category)->with('breed',$list_breed)
            ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('related',$list_product2)
            ->with('search_product',$search_product);
        }else {
            $data_breed = DB::table('tb_breed_product')->where('breed_id',$breed_id)->get('breed_name');
            return view('frontend.search_product')->with('category',$list_category)->with('breed',$list_breed)
            ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('related',$list_product2)
            ->with('search_product',$search_product)->with('breed_data',$data_breed);
        }
        
    }
    
    public function store($category_name, $breed_name){
        
        $breed = DB::table('tb_breed_product')->where('breed_name',$breed_name)->get();
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')
        ->where('breed_status',1)->get();
        foreach ($breed as $key => $breed) {
            # code...
            $product = DB::table('tb_product')->where('breed_id',$breed->breed_id)->where('product_status',1)->paginate(4);
        }
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_product2 = DB::table('tb_product')->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')->where('product_status',1)->orderby('product_id','desc')->limit(3)->get();
        return view('frontend.store')->with('product',$product)->with('list_slide',$list_slide)->with('category',$list_category)
        ->with('breed',$list_breed)->with('breed_name',$breed_name)->with('related',$list_product2);

    }
    public function store_product() {
        
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')
        ->where('breed_status',1)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $product = DB::table('tb_product')
        ->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')->select('tb_product.*','tb_breed_product.breed_name')
        ->where('product_status',1)->paginate(4);
        $list_product2 = DB::table('tb_product')->join('tb_breed_product','tb_breed_product.breed_id','=','tb_product.breed_id')
        ->select('tb_product.*','tb_breed_product.breed_name')->where('product_status',1)->orderby('product_id','desc')->limit(3)->get();
        return view('frontend.store')->with('product',$product)->with('list_slide',$list_slide)->with('category',$list_category)
        ->with('breed',$list_breed)->with('related',$list_product2);
    }


    public function show_dat_hang() {
        $data__ = Cart::content();
        foreach ($data__ as $key => $value) {
            # code...
            

        }
        return view('frontend.dathang');
    }

}
