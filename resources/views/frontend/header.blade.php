
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
						<a href="#" ><img style="width: 120px" src="{{asset('public/frontend/images/logo_pet.png')}}" alt="" /></a>
					</div>
					
				</div>
				<div class="col-sm-6">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
						<li style="margin-top: 5px"><a href="{{URL::to('cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
							@if (Session::get('id'))
								<li class="dropdown" style="background: white">
									<a style="background: white"  data-toggle="dropdown" class="dropdown-toggle" href="#">
										<img style="width: 30px" alt="" src="{{asset('public/backend/images/2.png')}}">
										<span class="username">
										<?php 
											$name = Session::get('name');
											$id = Session::get('id');
											if($name){
												// echo '<script>alert('.$message.');</script>';
												echo $name.'';
						
												Session::put('message',null);
											}	
										?>
										</span>
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu extended logout">
										
										@if (Session::get('id') and Session::get('level')==1 )
											<li><a href="{{URL::to('/dashboard')}}"><i class="fa fa-cog"></i> Trang quản trị</a></li>
										@else 
										
										@endif
										
										<li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
									</ul>
								</li>
							@else
							
							<li style="margin-top: 5px"><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a>
							@endif
							</ul>
						</li>
					</ul>
						
							</li>
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
							<li><a href="{{URL::to('/')}}" class="active">Trang Chủ</a></li>					
							<li><a href="{{URL::to('cua-hang')}}">Cửa hàng</a></li> 						
							<li><a href="{{URL::to('dat-hang')}}">Thanh Toán</a></li> 
							
							<li class="dropdown"><a href="{{URL::to('/gioithieus')}}">Giới thiệu<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
									<li><a href="{{URL::to('/cho')}}">Chó</a></li> 
									<li><a href="{{URL::to('/meo')}}">Mèo</a></li> 
										
								</ul>
							
							</li> 
							<li><a href="{{URL::to('/lienhe')}}">Liên Hệ</a>	</li> 			
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<form action="{{URL::to('/tim-kiem')}}" method="POST">
						{{ csrf_field() }}
						<div class="search_box pull-right">
							<input type="text" name="Inputsearch"  placeholder="Tìm kiếm sản phẩm"/>
							<a  href='javascript:window.scrollTo(maxWidth,maxHeight/2)'><button type="submit" class="btn btn-warning btn-sm" >Tìm kiếm</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->
