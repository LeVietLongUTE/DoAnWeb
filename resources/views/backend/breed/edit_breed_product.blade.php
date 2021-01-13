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
                        @foreach ($edit_breed as $key =>$breed)
                        <form role="form" action="{{URL::to('/update-breed-product/'.$breed->breed_id)}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select name="category_name" class="form-control input-sm m-bot15">
                                    @foreach ($list_category as $key => $category)
                                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nameBreed">Tên loại sản phẩm</label>
                                <input type="text" class="form-control" name="nameBreed" id="nameBreed" placeholder="" 
                                value="{{$breed->breed_name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea style="resize: none" cols="5" class="form-control" name="description" id="description" placeholder=""
                                >{{$breed->breed_description}}</textarea>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: space-around">
                                <button type="submit" name="edit_breed" class="btn btn-info">Chỉnh sửa danh mục</button>
                                <a class="button_a btn btn-info"   href="{{URL::to('/list-breed')}}" >Danh sách loại sản phẩm</a>
                                <a class="button_a btn btn-info"   href="{{URL::to('/add-breed-product')}}" >Thêm loại sản phẩm</a>
                            </div>
                        @endforeach
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection