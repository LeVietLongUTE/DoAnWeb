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
                    Thêm banner
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-banner')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="imageBanner">Hình ảnh của banner</label>
                                <input type="file" class="form-control" name="imageBanner" id="imageBanner" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <select name="banner_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: space-around">
                                <button type="submit" name="add_banner" class="btn btn-info">Thêm banner</button>
                                <a class="btn btn-info"   href="{{URL::to('/list-banner')}}" >Danh sách banner</a>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection