@extends('admin_layout')
@section('content_dashboard')
<div class="table-agile-info">
<div class="panel panel-default">
    <div class="panel-heading">
      Danh sách loại sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Password(md5)</th>
            <th>Quyền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
              $message = Session::get('message');
              if($message){
                echo '<script>alert("'.$message.'");</script>';
			          Session::put('message',null);
              }  
          ?>
          @foreach ($list_user as $key => $user)
          <tr>
            
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><span class="text-ellipsis">
               <?php
                  if ($user->level==1){

                  echo 'Admin';
             
                  }else {
                      if ($user->level ==0) {
                          echo 'Khách hàng';
                      }
                   else {
                       echo 'Nhân viên';
                   }
                  }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-user/'.$user->id)}}" style="font-size: 20px" class="active " ui-toggle-class="">
                <i class="icon fa fa-pencil text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc muốn xóa tài khoản này hay không?')" href="{{URL::to('/delete-user/'.$user->id)}}" style="font-size: 20px" class="active ui-toggle-class="" >
                <i class="icon fa fa-times text-danger text"></i></a>
            </td>
          </tr>       
        </tbody>
        @endforeach
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class=" text-center">
          <a class=" btn btn-info"   href="{{URL::to('/add-user')}}" >Thêm loại sản phẩm</a>
        </div>
        {{-- <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div> --}}
      </div>
    </footer>
  </div>
</div>

@endsection