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
	<header id="header"><!--header-->
		
<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-calendar-alt"></i>  T2 - CN</a></li>
                        <li><a href="#"><i class="fa fa-clock"></i> 8:00 - 21:00</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header_top-->

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo pull-left">
                    <a href="{{URL::to('/trang-chu')}}" ><img style="width: 120px" src="{{('public/frontend/images/logo_pet.png')}}" alt="" /></a>
                </div>
                
            </div>
            <div class="col-sm-6">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        <li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class="header-bottom" style="font-weight: 800;"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
                        <li class="dropdown"><a href="#">Giới thiệu<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Product Details</a></li> 
                                <li><a href="#">Checkout</a></li> 
                                <li><a href="#">Cart</a></li> 
                                <li><a href="#">Login</a></li> 
                            </ul>
                        </li> 
                        <li class="dropdown"><a href="#">Tin tức</a>
                            
                        </li> 
                        <li><a href="C:/xampp/htdocs/ShopThuCung/404.html">404</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
	</header><!--/header-->

	
	<section id="slider"><!--slider-->
	
		<center>
		<div class="slide_view">
					<div id="myslide" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myslide" data-slide-to="0" class="active"></li>
							<li data-target="#myslide" data-slide-to="1"></li>
					
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{('public/frontend/images/slideshow_1.jpg')}}"  alt="" />
							</div>
							<div class="item">
								
							
									<img src="{{('public/frontend/images/slideshow_2.jpg')}}"  alt="" />
								
							</div>
						</div>
						
						<a class="left carousel-control" href="#myslide" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myslide" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
		</div>
	</center>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Thể Loại</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								@foreach($category as $key => $cate)    
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/danhmucsanpham/'.$cate->category_id)}}" >{{$cate->category_name}} </a></h4>
									</div>
								@endforeach
								
								@foreach($breed as $key => $dmc)   
									<div class="panel-body">
										<ul>
											<li><a href="#">{{$dmc->breed_name}}</a></li>
											
										</ul>
									</div>
									@endforeach
								
							</div>
							
							
						</div><!--/category-products-->
					
						{{-- <div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products--> --}}
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('public/frontend/images/banner_1.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="lienhe">
			<h2>Liên hệ</h2>
			<div class="item">
				<div class="icon_lh">
					<i class="fa fa-map-marker-alt"></i>
				</div>
				<div class="title">
					<p>48 Cao Thắng <br> Trường đại học sư phạm kỹ thuật</p>
				</div>
			</div>
			<div class="item">
				<div class="icon_lh">
					<i class="fas fa-phone-square-alt"></i>
				</div>
				<div class="title">
					<p>(+84)383425354 <br>(+84)702076081</p>
				</div>
			</div>
			<div class="item">
				<div class="icon_lh">
					<i class="fas fa-envelope-open-text"></i>
				</div>
				<div class="title">
					<p>ute@ute.udn.vn <br>ute123@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="account">
			<h2>Tài khoản</h2>
			<p><a href="#"><i class="fa fa-caret-right"></i>Tài khoản</a></p>
			<p><a href="#"><i class="fa fa-caret-right"></i>Giở hàng</a></p>
			<p><a href="#"><i class="fa fa-caret-right"></i>Đăng nhập</a></p>
			<p><a href="#"><i class="fa fa-caret-right"></i>Thanh toán</a></p>
		</div>
		<div class="Danhmuc">
			<h2>Danh mục</h2>
			<p><a href="#"><i class="fa fa-caret-right"></i>PETS</a></p>
			<p><a href="#"><i class="fa fa-caret-right"></i>Thức ăn</a></p>
			<p><a href="#"><i class="fa fa-caret-right"></i>Phụ kiện</a></p>
		</div>
		<div class="mxh">
			<h2>Mạng xã hội</h2>
			<div class="icon_mxh">
				<a href="#"><img src="{{('public/frontend/images/facebook_ic.jpg')}}"></a>
			</div>
			<div class="icon_mxh">
				<a href="#"><img src="{{('public/frontend/images/instagram_ic.png')}}"></a>
			</div>
			<div class="icon_mxh">
				<a href="#"><img src="{{('public/frontend/images/zalos_ic.png')}}"></a>
			</div>
		</div>
	</footer>

  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>