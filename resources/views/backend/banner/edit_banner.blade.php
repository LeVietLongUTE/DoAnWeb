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
                    Chỉnh sửa banner
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_banner as $key =>$banner)
                        <form role="form" action="{{URL::to('/update-banner/'.$banner->banner_id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- <div class="form-group">
                                <label>Mã banner</label>
                                <select name="category_name" class="form-control input-sm m-bot15">
                                    @foreach ($list_category as $key => $category)
                                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label>Mã banner</label>
                                <input type="text" class="form-control" name="idBanner" id="idBanner" placeholder="" 
                                value="{{$banner->banner_id}}">
                            </div>
                            <div class="form-group">
                                <label for="imageBanner">Hình ảnh chính</label>
                                <input type="file" class="form-control" name="imageBanner" id="imageBanner" placeholder=""
                                value="{{$banner->banner_image}}">
                                <p>{{$banner->banner_image}}</p>
                                <div>
                                    <img src="../public/uploads/products/{{$banner->banner_image}}" height="100" width="200">
                                </div>

                            </div>
                            <div class="form-group" style="display: flex; justify-content: space-around">
                                <button type="submit" name="edit_banner" class="btn btn-info">Chỉnh sửa banner</button>
                                <a class="button_a btn btn-info"   href="{{URL::to('/list-banner')}}" >Danh sách banner</a>
                                <a class="button_a btn btn-info"   href="{{URL::to('/add-banner')}}" >Thêm banner</a>
                            </div>
                        @endforeach
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection