@extends('admin_layout')
@section('content_dashboard')
<div class="table-agile-info">
<div class="panel panel-default">
    <div class="panel-heading">
      Danh sách sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Tên danh mục sản phẩm</th>
            <th>Tên loại sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Tuổi</th>
            <th>Giá</th>
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
          @foreach ($list_product as $key => $product)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            
            <td>{{$product->product_name}}</td>
            <td>{{$product->category_name}}</td>
            <td>{{$product->breed_name}}</td>
            <td><img src="public/uploads/products/{{$product->product_image}}" height="100" width="100"></td>
            <td>{{$product->product_age}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_description}}</td>
            <td><span class="text-ellipsis">
               <?php
                  if ($product->product_status==1){
                    ?>
                  <a style="text-decoration: none" href="{{URL::to('/unactive-product/'.$product->product_id)}}">Hiện</a>
                  <?php
                  }else {
                    ?>
                   <a style="text-decoration: none" href="{{URL::to('/active-product/'.$product->product_id)}}">Ẩn</a>
                  <?php
                  }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-product/'.$product->product_id)}}" style="font-size: 20px" class="active " ui-toggle-class="">
                <i class="icon fa fa-pencil text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này hay không?')" href="{{URL::to('/delete-product/'.$product->product_id)}}" style="font-size: 20px" class="active ui-toggle-class="" >
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
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
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