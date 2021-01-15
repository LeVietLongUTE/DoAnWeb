<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
class CarController extends Controller
{
    public function save_car(Request $request) {
        $productid= $request->productid_hidden;
        $data = DB::table('tb_product')->where('product_id',$productid)->get();
       $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
       $list_product = DB::table('tb_product')->where('product_status',1)->orderby('product_id','desc')->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_slide = DB::table('tb_banner')->where('banner_status',1)->get();
        $list_bannerD = DB::table('tb_banner')->where('banner_status',1)->where('banner_note',0)->get()->first();
        return view('frontend.show_car')->with('category',$list_category)->with('breed',$list_breed)
        ->with('list_slide',$list_slide)->with('bannerD',$list_bannerD)->with('product',$list_product);
    }
}
