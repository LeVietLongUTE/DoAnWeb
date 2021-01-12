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
	<link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
   {{-- [if lt IE 9] --}}
    <script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->       
    
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head><!--/head-->

<body>
@include('frontend.header')
	<!--/??-->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giới Thiệu Thông Tin Về Những Chú Chó Cưng</h2>
					<ul class="text-left">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <a href="{{URL::to('/gioithieus')}}"><span> // </span>gioithieu</a>
						<a><span> // </span>cho</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
    <!--/??-->
    
    <div class="col-sm-12 ">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tshirt" data-toggle="tab">Alaska</a></li>
            <li><a href="#blazers" data-toggle="tab">Husky</a></li>
            <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
            <li><a href="#kids" data-toggle="tab">Kids</a></li>
            <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>          
        </div>

	@include('frontend.footer')
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>