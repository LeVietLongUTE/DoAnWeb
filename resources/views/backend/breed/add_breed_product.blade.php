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
                    Thêm loại sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-breed-product')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select name="category_name" class="form-control input-sm m-bot15">
                                @foreach ($list_category as $key => $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nameBreed">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" name="nameBreed" id="nameBreed" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea style="resize: none" cols="5" class="form-control" name="description" id="description" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <select name="breed_status" class="form-control input-sm m-bot15">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="add_breed_product" class="btn btn-info">Thêm loại sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection