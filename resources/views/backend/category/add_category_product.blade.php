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
                    Thêm danh mục sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nameCategory">Tên danh mục</label>
                            <input type="text" class="form-control" name="nameCategory" id="nameCategory" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea style="resize: none" cols="5" class="form-control" name="description" id="description" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <select name="category_status" class="form-control input-sm m-bot15">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <div class="form-group" style="display: flex; justify-content: space-around">
                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                            <a class="btn btn-info"   href="{{URL::to('/list-category')}}" >Danh sách danh mục sản phẩm</a>
                        </div>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection