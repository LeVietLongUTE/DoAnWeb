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
                    Chỉnh sửa loại sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_product as $key =>$product)
                        <form role="form" action="{{URL::to('/update-product/'.$product->product_id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select name="breed_name" class="form-control input-sm m-bot15">
                                    @foreach ($list_breed as $key => $breed)
                                    <option value="{{$breed->breed_id}}">{{$breed->breed_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nameProduct">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="nameProduct" id="nameProduct" placeholder="" 
                                value="{{$product->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="ageProduct">Tuổi </label>
                                <input type="text" class="form-control" name="ageProduct" id="ageProduct" placeholder="" 
                                value="{{$product->product_age}}">
                            </div>
                            <div class="form-group">
                                <label for="priceProduct">Giá </label>
                                <input type="text" class="form-control" name="priceProduct" id="priceProduct" placeholder="" 
                                value="{{$product->product_price}}">
                            </div>
                            <div class="form-group">
                                <label for="imageProduct">Hình ảnh </label>
                                <input type="file" class="form-control" name="imageProduct" id="imageProduct" placeholder=""
                                value="{{$product->product_image}}">
                                <p>{{$product->product_image}}</p>
                                <div>
                                    <img src="public/uploads/products/{{$product->product_image}}" height="100" width="100">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea style="resize: none" cols="5" rows="5" class="form-control" name="description" id="description" placeholder=""
                                >{{$product->product_description}}</textarea>
                            </div>
                            <button type="submit" name="edit_product" class="btn btn-info">Chỉnh sửa sản phẩm</button>
                        @endforeach
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection