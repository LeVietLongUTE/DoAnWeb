<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    //
    public function index(){
        $list_category = DB::table('tb_category_product')->where('category_status',1)->get();
        $list_breed = DB::table('tb_breed_product')->where('breed_status',1)->get();
        $list_product = DB::table('tb_product')->where('product_status',1)->orderby('product_id','desc')->limit(8)->get();
        return view('frontend.home')->with('category',$list_category)->with('breed',$list_breed)->with('product',$list_product);
        
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
}
?>