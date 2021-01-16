<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PET&FRIEND</title>
	{{-- <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">

	<link href="{{asset('public/frontend/css/main1.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main2.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
   {{-- [if lt IE 9] --}}
    <script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->       
    
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head><!--/head-->
<style>

</style>
<body>
	
@include('frontend.header')
@include('frontend.slide')	

	<section>
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
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								@foreach($category as $key => $cate)   
									<div class="panel-heading">
										<h4 class="panel-title"><a onclick="return false;" style="color: orange" disabled="true"  href="{{URL::to('/danhmucsanpham/'.$cate->category_id)}}" >
											<?php
											echo $cate->category_name;
										?>
							
											@foreach($breed as $key => $dmc)   
												@if($cate->category_id == $dmc->category_id)
												<div class="panel-body">
									
														<a onclick="changeActive()" id="link" href="{{URL::to('/cua-hang/'.$cate->category_name.'/'.$dmc->breed_name)}}" onclick="">
															{{$dmc->breed_name}}
														</a>
														
													</ul>
												</div>
												@endif
											@endforeach
										
									 </a></h4>
									</div>
								@endforeach
								
								
							</div>

						</div><!--/category-products-->
					
					
						
						<div style="margin-bottom: 50px" class="shipping text-center"><!--shipping-->
							<img src="{{asset('public/frontend/images/banner_1.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	@include('frontend.footer')
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script type='text/javascript'>
		var maxWidth = (document.body.clientWidth);
		var maxHeight = (document.body.clientHeight);
		function changeActive() {
			document.getElementById("link").style.color = 'red';
		}
		</script>
		
</body>
</html>