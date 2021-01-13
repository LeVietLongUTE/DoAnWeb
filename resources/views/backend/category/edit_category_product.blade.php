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
                    Chỉnh sửa danh mục sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_category as $key =>$category)
                        <form role="form" action="{{URL::to('/update-category-product/'.$category->category_id)}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nameCategory">Tên danh mục</label>
                                <input type="text" class="form-control" name="nameCategory" id="nameCategory" placeholder="" 
                                value="{{$category->category_name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea style="resize: none" cols="5" class="form-control" name="description" id="description" placeholder=""
                                >{{$category->category_descript}}</textarea>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: space-around">
                                <button type="submit" name="edit_category" class="btn btn-info">Chỉnh sửa danh mục</button>
                                <a class="button_a btn btn-info"   href="{{URL::to('/list-category')}}" >Danh sách danh mục sản phẩm</a>
                                <a class="button_a btn btn-info"   href="{{URL::to('/add-category-product')}}" >Thêm danh mục sản phẩm</a>
                            </div>
                        @endforeach
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection