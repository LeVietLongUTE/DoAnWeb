@extends('admin_layout')
@section('content_dashboard')
<div class="table-agile-info">
<div class="panel panel-default">
    <div class="panel-heading">
      Danh sách sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
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
            <td>Tên sản phẩm: </td>
            <td>{{$product->product_name}}</td>
          </tr> 
          <tr>
            <td>Tên danh mục sản phẩm: </td>   
            <td>{{$product->category_name}}</td>  
         </tr> 
            <tr>
                <td>Tên loại sản phẩm: </td>
                <td>{{$product->breed_name}}</td>
            </tr>     
            <tr>
                <td>Hình ảnh chính: </td>
                <td><img src="../public/uploads/products/{{$product->product_image_main}}" height="100" width="100"></td>
            </tr>
            <tr>
                <td>Hình ảnh phụ 1: </td>
                <td>
                <?php 
                    if($product->product_image1) { ?>
                        <td><img src="../public/uploads/products/{{$product->product_image1}}" height="100" width="100"></td>
                <?php    
                    }else {
                        echo 'chưa chèn ảnh';
                    }
                ?>
                </td>
                
            </tr>
            <tr>
                <td>Hình ảnh phụ 2: </td>
                <td>
                <?php 
                    if($product->product_image1) { ?>
                        <td><img src="../public/uploads/products/{{$product->product_image2}}" height="100" width="100"></td>
                <?php    
                    }else {
                        echo 'chưa chèn ảnh';
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>Hình ảnh phụ 3: </td>
                <td>
                <?php 
                    if($product->product_image1) { ?>
                        <td><img src="../public/uploads/products/{{$product->product_image2}}" height="100" width="100"></td>
                <?php    
                    }else {
                        echo 'chưa chèn ảnh';
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>Tuổi: </td>
                <td>{{$product->product_age}}</td>
            </tr>
            <tr>
                <td>Giá: </td>
                <td>{{$product->product_price}}</td>
            </tr>
            <tr>
                <td>Giới tính: </td>
                <td><span class="text-ellipsis">
                    <?php
                       if ($product->product_gender==1){
                        echo 'Đực';
                       }else {
                         echo 'Cái';
                       }
                     ?>
                 </span></td>
            </tr>
            <tr>
                <td>Tiêm chủng: </td>
                <td>{{$product->product_tiem}} mũi</td>
            </tr>
            <tr>
                <td>Xuất xứ: </td>
                <td>{{$product->product_xuatxu}}</td>
            </tr>
            <tr>
                <td>Mô tả thêm:  </td>
                <td>{{$product->product_description}}</td>
            </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class=" text-center" style="display:flex; justify-content: space-around">
          <a class="button_a btn btn-info"   href="{{URL::to('/add-product')}}" >Thêm sản phẩm</a>
          <a class="button_a btn btn-info"   href="{{URL::to('/edit-product/'.$product->product_id)}}" >Chỉnh sửa sản phẩm</a>
          <a class="btn btn-info"   href="{{URL::to('/list-product')}}" >Danh sách sản phẩm</a>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection