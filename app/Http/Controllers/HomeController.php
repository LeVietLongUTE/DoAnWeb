<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend.home');
        
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
}
?>