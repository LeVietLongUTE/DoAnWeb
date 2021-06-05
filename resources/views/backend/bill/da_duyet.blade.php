@extends('admin_layout')
@section('content_dashboard')
<div class="table-agile-info">
<div class="panel panel-default">
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
    <div class="panel-heading" >
      Danh sách hóa đơn đã duyệt
    </div>
    <div style="margin: 20px; display: flex; justify-content: space-around">
        {{-- <a href=""><button type="button" class="btn btn-warning">Hóa đơn đã duyệt</button></a> --}}
        <a href="{{URL::to('/list-bill/hd-chua-duyet')}}"><button type="button" class="btn btn-warning">Hóa đơn chưa duyệt</button></a>
    </div>
    <div class="table-responsive" style="border-top: 1px solid gray">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên khách hàng đặt</th>
            <th>Tên khách hàng nhận</th>
            <th>Ngày đặt hàng</th>
            <th>Tổng tiền</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th style="width:30px;">Thao tác</th>
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
          @foreach ($list_bill as $key => $item)
          <tr>
     
                <td>{{$item->name}}</td>
                <td>{{$item->NguoiNhan}}</td>
                <td>{{$item->NgayLap}}</td>
                <td>{{$item->TongTien}}</td>
                <td>{{$item->DiaChi}}</td>
                <td>{{$item->sdt}}</td>
                <td>
                <?php
                  if ($item->TrangThai=='1'){
                    ?>
                  Đã xét duyệt
                  <?php
                  }else {
                    ?>
                   Chưa xét duyệt
                  <?php
                  }
                ?>
                </td>
  
            <td>
              <a href="{{URL::to('/list-bill/view-don-hang/'.$item->id)}}" style="font-size: 20px;" class="active " ui-toggle-class="">
                <button  type="button" class="btn btn-success">Xem chi tiết</button>
              </a>
              {{-- <a onclick="return confirm('Bạn có chắc muốn xóa hóa đơn này hay không?')" href="{{URL::to('/list-bill/delete-don-hang/'.$item->id)}}" style="font-size: 20px" class="active ui-toggle-class="" >
                <button type="button" class="btn btn-danger">Xóa</button>
            </a> --}}
            </td>
           

           

          </tr> 
          @endforeach    
        </tbody>
     
      </table>
      <div class="row" style="display: flex; justify-content: center; margin-top:10px" >{{$list_bill->links()}}</div> 
    </div>
    <footer class="panel-footer">
      <div class="row">
       
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