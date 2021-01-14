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
            
            <th>Tên loại sản phẩm</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
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
          @foreach ($list_breed as $key => $breed)
          <tr>
            
            
            <td>{{$breed->breed_name}}</td>
            <td>{{$breed->category_name}}</td>
            <td>{{$breed->breed_description}}</td>
            <td><span class="text-ellipsis">
               <?php
                  if ($breed->breed_status==1){
                    ?>
                  <a style="text-decoration: none" href="{{URL::to('/unactive-breed/'.$breed->breed_id)}}">Hiện</a>
                  <?php
                  }else {
                    ?>
                   <a style="text-decoration: none" href="{{URL::to('/active-breed/'.$breed->breed_id)}}">Ẩn</a>
                  <?php
                  }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-breed/'.$breed->breed_id)}}" style="font-size: 20px" class="active " ui-toggle-class="">
                <i class="icon fa fa-pencil text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này hay không?')" href="{{URL::to('/delete-breed/'.$breed->breed_id)}}" style="font-size: 20px" class="active ui-toggle-class="" >
                <i class="icon fa fa-times text-danger text"></i></a>
            </td>
          </tr>       
        </tbody>
        @endforeach
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <a class=" btn btn-info"   href="{{URL::to('/add-breed-product')}}" >Thêm loại sản phẩm</a>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection