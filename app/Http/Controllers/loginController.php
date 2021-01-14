<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

session_start();
class loginController extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('id');
        $level = Session::get('level');
        if ($admin_id && $level == 1){
            return Redirect::to('dashboard');
            
        }else{
            return Redirect::to('login');
        }
        // if (Auth::check()&&$level==1)
        //     {
        //         return Redirect::intended('dashboard');
        //     }else{
        //         return Redirect::intended('login');
        //     }
    }

    //move den trang tong quan cua admin
    public function show_dashboard() {
        $this->AuthLogin();
        return view('backend.dashboard');
    }

    //chuyen tran login
    public function show_login() {
        return view('login');
    }
    public function loginadmin(Request $request) {
       
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_pass);
        $result = DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->where('level',1)->first();
        $result1 = DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->where('level',0)->first();
        if ($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            Session::put('level',1);
            return Redirect::to('/dashboard');
          
        }else{
            if ($result1){
                Session::put('name',$result1->name);
                Session::put('id',$result1->id);
                Session::put('level',0);
                return Redirect::to('/trang-chu');
            }else {
            Session::put('message','Đăng nhập thất bại');
            return Redirect::to('/login');
            }
        }
    }
    public function logout(){
        $this->AuthLogin();
        // Session::put('name',null);
        // Session::put('id',null);
        Session::flush();
        return Redirect::to('/login');
    }
    public function show_register() {
        return view('register');
    }
    public function register(Request $request)
    {
        # code...
        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        
        // return User::create(Request([
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     'name' => $data['name'],
        //     'level' => 0
        // ]));

        $data = [
            'email' => $request->email,
            'password' => md5($request->password),
            'name' => $request->name,
            'level' => 0
        ];
        if( empty($request->name) or empty($request->email) or empty($request->password)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/register');
        }else{
            if (DB::table('users')->where('email',$request->email)->first()){
                Session::put('error','email người dùng đã tồn tại!');
                return Redirect::to('/register');
            }else{
                DB::table('users')->insert($data);
                Session::put('message','Đăng ký tài khoản thành công');
                return Redirect::to('/register');
            }
        }


    }

    public function show_formAddUser() {
        return view('backend.users.add_user');
    }

    public function save_User(Request $request) {

        $data = array();
        $data = [
            'name' =>$request->name, 
            'email' => $request->email,
            'password' => md5($request->password),
            'level' => $request->level
        ];
        if( empty($request->name) or empty($request->email) or empty($request->password)){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/add-user');
        }else{
            if (DB::table('users')->where('email',$request->email)->first()){
                Session::put('error','email người dùng đã tồn tại!');
                return Redirect::to('/add-user');
            }else{
                DB::table('users')->insert($data);
                Session::put('message','Thêm tài khoản thành công');
                return Redirect::to('/add-user');
            }
        }
    }

    public function show_listUser() {
        
       $list_user = DB::table('users')->get();
       $manager_user = view('backend.users.list_user')->with('list_user',$list_user);
        return view('admin_layout')->with('backend.users.list_user',$manager_user);
    }


    //Chỉnh sửa người dùng
    public function edit_user($user_id) {

        $edit_user = DB::table('users')->where('id',$user_id)->get();
        $manager_user = view('backend.users.edit_user')->with('edit_user',$edit_user);
       
        return view('admin_layout')->with('backend.user.edit_user',$manager_user);

    }
    public function update_user ( Request $request, $user_id) {
        $data = [
            'name' => $request->name,
            'password' =>md5($request->password),
            'level' => $request->level
        ];
        if (empty($request->name) or empty(md5($request->password))){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/edit-user/'.$user_id);
        }else {
            if (DB::table('users')->where('email',$request->email)->first()){
                Session::put('error','Email người dùng đã tồn tại!');
                return Redirect::to('/edit-user/'.$user_id);
            }else{
                DB::table('users')->where('id',$user_id)->update($data);
                Session::put('message','Cập nhật tài khoản thành công');
                return Redirect::to('list-user');
            }
        }
        if (empty($request->name) or empty(md5($request->password))){
            Session::put('error','Bạn đã nhập rỗng dữ liệu không được phép');
            return Redirect::to('/edit-user/'.$user_id);
        }else {
            if (DB::table('users')->where('email',$request->email)->first()){
                Session::put('error','Email người dùng đã tồn tại!');
                return Redirect::to('/edit-user/'.$user_id);
            }else{
                DB::table('users')->where('id',$user_id)->update($data);
                Session::put('message','Cập nhật tài khoản thành công');
                return Redirect::to('list-user');
            }
        }
    }

    public function delete_user($user_id) {
        DB::table('users')->where('id',$user_id)->delete();
        Session::put('message','Xóa tài khoản thành công');
        return Redirect::to('list-user');
    }
}