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
                    Thêm sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-product')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select name="breed_id" class="form-control input-sm m-bot15">
                                @foreach ($list_breed as $key => $breed)
                                <option value="{{$breed->breed_id}}">{{$breed->breed_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="nameProduct" id="nameProduct" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="ageProduct">Tuổi </label>
                            <input type="text" class="form-control" name="ageProduct" id="ageProduct" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="priceProduct">Giá </label>
                            <input type="text" class="form-control" name="priceProduct" id="priceProduct" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="imageProduct">Hình ảnh </label>
                            <input type="file" class="form-control" name="imageProduct" id="imageProduct" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea style="resize: none" cols="5" rows="5" class="form-control" name="description" id="description" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Thêm loại sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection