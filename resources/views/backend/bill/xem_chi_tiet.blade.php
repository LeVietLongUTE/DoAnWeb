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
      Danh sách hóa đơn
    </div>
    <div style="margin: 20px; display: flex; justify-content: space-around">
        <a href="{{URL::to('/list-bill/hd-da-duyet')}}"><button type="button" class="btn btn-warning">Hóa đơn đã duyệt</button></a>
        <a href="{{URL::to('/list-bill/hd-chua-duyet')}}"><button type="button" class="btn btn-warning">Hóa đơn chưa duyệt</button></a>
    </div>
    <div class="table-responsive" style="border-top: 1px solid gray">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
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
          @foreach ($list_data as $key => $item)
          <tr>
            
            
            <td>{{$item->product_name}}</td>
            <td>{{number_format($item->DonGia)}}</td>
            <td>{{1}}</td>
            <td>{{number_format($item->DonGia)}}</td>
            <td>
              @if($item->TrangThai == '0')
                <a href="{{URL::to('/active-bill/'.$item->MaHD)}}" style="font-size: 20px;" class="active " ui-toggle-class="">
                  <button  type="button" class="btn btn-success">Duyệt đơn</button>
                </a>
                
                <a onclick="return confirm('Bạn có chắc muốn xóa hóa đơn này hay không?')" href="{{URL::to('/list-bill/delete-don-hang/'.$item->MaHD)}}" style="font-size: 20px" class="active ui-toggle-class="" >
                  <button type="button" class="btn btn-danger">Xóa</button>
              </a>
              @endif
              </td>
            
  
          </tr>      
        </tbody>
      
        
        @endforeach
      </table>
      
      <div class="row" style="display: flex; justify-content: center; margin-top:10px" >{{$list_data->links()}}</div> 
    </div>
    <footer class="panel-footer">
 
    
      </div>
    </footer>
  </div>
</div>

@endsection