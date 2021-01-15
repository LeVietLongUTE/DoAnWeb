@extends('welcome')
@section('content')
				
					@foreach ($product as $key => $prod)
					<div class="product-details"><!--product-details-->
		
						<div class="col-sm-5">
						
							<div class="view-product">
								<img src="{{asset('public/uploads/products/'.$prod->product_image_main)}}" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
									<div class="item active" style="display: flex; justify-content: space-around">
										@if($prod->product_image1)
									  		<a href=""><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image1)}}" alt=""></a> 
										@endif
										@if($prod->product_image2)
									  		<a href=""><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image2)}}" alt=""></a> 
										@endif
										@if($prod->product_image3)
									  		<a href=""><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image3)}}" alt=""></a> 
										@endif
									</div>
								</div>
								  <!-- Controls -->
								 
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Tên: {{$prod->product_name}}</h2>
								<h5>Loại vật nuôi: {{$prod->category_name}}</h5>
								<p>Giống : {{$prod->breed_name}}</p>
								<p>Giới tính: 
									@if ($prod->product_gender==1)
										<?php echo 'Đực' ?>
									@else 
									<?php echo 'Cái' ?>
									@endif

								</p>
								<p>Tiêm chủng (lần): {{$prod->product_tiem}} </p>
								<p>Tháng tuổi: {{$prod->product_age}} </p>
								<p>Mô tả thêm: {{$prod->product_description}}</p>
								<p>Tình trạng: 
									@if ($prod->product_status==1)
										<?php echo 'còn hàng'?>
									@else
									<?php echo 'hết hàng'?>
									@endif

								</p>
								<img src="{{asset('public/frontend/images/product-details/rating.png')}}" alt="" />
								
								<div>
									<p>US $59</p>
								
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</div>
					
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						
						</div>
					</div><!--/product-details-->
					@endforeach
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">

								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">

							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm đề xuất</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('public/frontend/images/home/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('public/frontend/images/home/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('public/frontend/images/home/recommend2.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('public/frontend/images/home/recommend3.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn_slide">
								<a class="left recommended-item-control prev_slide" href="#recommended-item-carousel" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right recommended-item-control next_slide" href="#recommended-item-carousel" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>	
							</div>		
						</div>
					</div><!--/recommended_items-->
				</div>
@endsection