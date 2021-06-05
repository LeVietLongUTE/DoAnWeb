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
   
    //move den trang tong quan cua admin
    public function show_dashboard() {
        // $this->AuthLogin();
        $product = DB::table('tb_product')->get();
        $user = DB::table('users')->get();
        $donH = DB::table('tb_bill')->get();
        if(Session::get('id') and Session::get('level')==1 )
        {
            return view('backend.dashboard')->with('product',$product)->with('user',$user)->with('bill',$donH);
        }
        else
            return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');

       
    }

    //chuyen tran login
    public function show_login() {
        return view('login');
    }
    public function loginadmin(Request $request) {
       


            // $admin_email = $request->admin_email;
            // $admin_password = md5($request->admin_pass);

        
            $email= $request->admin_email;
            $password=md5($request->admin_pass);
            
            $session= User::where('email',$email)->where('password',$password)->get();
            if(count($session)>0)
            {
                $request->session()->put('id',$session[0]->id);
                $request->session()->put('name',$session[0]->name);
                $request->session()->put('level',$session[0]->level);
                // return view('Đăng nhập thành công');
                if ($request->session()->get('level',1)){
                    return Redirect::to('/dashboard');
                }else {
                    return Redirect::to('/');
                }
               
            }
            else{
                // return view('Đăng nhập thất bại');
                return Redirect::to('/login')->with('message','Đăng nhập lỗi');
            }
    }
    public function logout(){
        Session::flush();
        echo '<pre>';
        print_r(Session::get('id'));
        print_r(Session::get('name'));
        print_r(Session::get('level'));
   
        echo '</pre>';
        return Redirect::to('/login');
    }
    public function show_register() {
        return view('register');
    }
    public function register(Request $request)
    {

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
                return Redirect::to('/login');
            }
        }


    }

    public function show_formAddUser() {
        if(Session::get('id') and Session::get('level')==1 )
       {
        return view('backend.users.add_user');
       }
       else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');
        
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
        
       $list_user = DB::table('users')->paginate(5);
       $manager_user = view('backend.users.list_user')->with('list_user',$list_user);
       if(Session::get('id') and Session::get('level')==1 )
       {
        return view('admin_layout')->with('backend.users.list_user',$manager_user);
       }
       else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');

    }


    //Chỉnh sửa người dùng
    public function edit_user($user_id) {

        $edit_user = DB::table('users')->where('id',$user_id)->get();
        $manager_user = view('backend.users.edit_user')->with('edit_user',$edit_user);
        
        if(Session::get('id') and Session::get('level')==1 )
        {
            return view('admin_layout')->with('backend.user.edit_user',$manager_user);
        }
       else
           return Redirect()->back()->with('message','Bạn không có quyền truy cập vào trang này.');
        

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