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
            <th>Mã banner</th>
            <th>Ảnh banner</th>
            <th>Ghi chú</th>
            <th>Hiển thị</th>
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
          @foreach ($list_banner as $key => $banner)
          <tr>
            
            
            <td>{{$banner->banner_id}}</td>
            <td><img width="200px" height="100px" src="public/uploads/products/{{$banner->banner_image}}" alt="banner"></td>
            <td><span class="text-ellipsis">
              <?php
                 if ($banner->banner_note==1){
                   echo 'Slide';
                 }else {
                   echo 'Banner đứng';
                 }
               ?>
           </span></td>
            <td><span class="text-ellipsis">
               <?php
                  if ($banner->banner_status==1){
                    ?>
                  <a style="text-decoration: none" href="{{URL::to('/unactive-banner/'.$banner->banner_id)}}">Hiện</a>
                  <?php
                  }else {
                    ?>
                   <a style="text-decoration: none" href="{{URL::to('/active-banner/'.$banner->banner_id)}}">Ẩn</a>
                  <?php
                  }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-banner/'.$banner->banner_id)}}" style="font-size: 20px" class="active " ui-toggle-class="">
                <i class="icon fa fa-pencil text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc muốn xóa banner này hay không?')" href="{{URL::to('/delete-banner/'.$banner->banner_id)}}" style="font-size: 20px" class="active ui-toggle-class="" >
                <i class="icon fa fa-times text-danger text"></i></a>
            </td>
          </tr>       
        </tbody>
        @endforeach
      </table>
      <div class="row" >{{$list_banner->links()}}</div> 
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class=" text-center">
          <a class=" btn btn-info"   href="{{URL::to('/add-banner')}}" >Thêm banner</a>
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