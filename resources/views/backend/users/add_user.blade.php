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
                    Thêm Tài khoản
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-user')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <select name="level" class="form-control input-sm m-bot15">
                                <option value="1">Admin</option>
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                            </select>
                        </div>
                        <div class="form-group" style="display: flex; justify-content: space-around">
                            <button type="submit" name="add_user" class="btn btn-info">Thêm tài khoản</button>
                            <a class="btn btn-info"   href="{{URL::to('/list-user')}}" >Danh sách tài khoản</a>
                        </div>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection