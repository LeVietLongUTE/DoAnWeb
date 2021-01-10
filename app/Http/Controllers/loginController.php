<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class loginController extends Controller
{
    //chuyen tran login
    public function index() {
        return view('login');
    }
    public function loginadmin(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_pass);
        $result = DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->where('level',1)->first();
        if ($result){
            Session::put('name',$result->name);
            return Redirect::to('/dashboard');
          
        }else{
            Session::put('message','Đăng nhập thất bại');
            return Redirect::to('/login');
        }
    }
    public function logout(){
        Session::put('name',null);
        return Redirect::to('/login');
    }
}
?>