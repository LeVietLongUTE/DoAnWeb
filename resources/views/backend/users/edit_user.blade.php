use Illuminate\Support\Facades\DB;
@extends('admin_layout')
@section('content_dashboard')

<div class="row">
    <div class="col-lg-12">
    <?php 
        $error = Session::get('error');
        $message = Session::get('message');
        if($error){
            echo '<script>alert("'.$error.'");</script>';
            Session::put('error',null);
        }else {
            if($message){
			echo '<script>alert("'.$message.'");</script>';
			Session::put('message',null);
		    }	
        }
	?>
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh sửa tài khoản người dùng
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_user as $key =>$user)
                        <form role="form" action="{{URL::to('/update-user/'.$user->id)}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Tên người dùng</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" 
                                value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" disabled class="form-control" name="email" id="email" placeholder="" value="{{$user->email}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="" value="{{($user->password)}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="level">Quyền</label>
                                <select name="level" class="form-control input-sm m-bot15">
                                    <option value="1">Admin</option>
                                    <option value="0">Khách hàng</option>
                                    <option value="2">Nhân viên</option>
                                </select>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: space-around">
                                <button type="submit" name="edit_user" class="btn btn-info">Chỉnh sửa tài khoản</button>
                                <a class="button_a btn btn-info"   href="{{URL::to('/list-user')}}" >Danh sách tài khoản người dùng</a>
                                <a class="button_a btn btn-info"   href="{{URL::to('/add-user')}}" >Thêm tài khoản</a>
                            </div>
                        @endforeach
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection