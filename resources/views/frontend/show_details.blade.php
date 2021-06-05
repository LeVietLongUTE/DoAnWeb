
@extends('welcome')
@section('content')
<style>
	a.add-to-cart:: hover {
		color:black;
	}
</style>

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

									  		<a class="icon_mxh" href="#"><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image1)}}" alt=""></a> 
										@endif
										@if($prod->product_image2)
									  		<a class="icon_mxh" href="#"><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image2)}}" alt=""></a> 
										@endif
										@if($prod->product_image3)
									  		<a class="icon_mxh" href="#"><img style="display: inline; padding:10px" src="{{asset('public/uploads/products/'.$prod->product_image3)}}" alt=""></a> 

									  		
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
								<h2>Loại vật nuôi: {{$prod->category_name}}</h2>
								<h4>Giống : {{$prod->breed_name}}</h4>
								<h4>Giới tính: 
									@if ($prod->product_gender==1)
										<?php echo 'Đực' ?>
									@else 
									<?php echo 'Cái' ?>
									@endif

								</h4>
								<h4>Tiêm chủng (lần): {{$prod->product_tiem}} </h4>
								<h4>Tháng tuổi: {{$prod->product_age}} </h4>
								<h4>Mô tả thêm: {{$prod->product_description}}</h4>
								<h4>Tình trạng: 
									@if ($prod->product_status==1)
										<?php echo 'còn hàng'?>
									@else
									<?php echo 'hết hàng'?>
									@endif

								</p>
								<img src="{{asset('public/frontend/images/product-details/rating.png')}}" alt="" /></br></br>
								<h4>Giá: {{number_format($prod->product_price).' '.'VNĐ'}}</h4>
						

								<div>
									
								<form  action="{{URL::to('/save-cart')}}" method="post">
								@csrf

									<!-- Equivalent to... -->
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<input name="productid_hidden" type="hidden" value="{{$prod->product_id}}">
									<button type="submit" class="btn btn-fefault cart" >

										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng 
									</button>
									
								

								</form>
									
								</div>
					
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						
						</div>
					</div><!--/product-details-->
				
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">

								<li class="active"><a href="#reviews" data-toggle="tab">Đánh Giá</a></li>
							</ul>
						</div>
						<div class="tab-content">

							<div class="tab-pane fade active in" id="reviews" >
								
								<div class="col-sm-12">
									@foreach ($list_danhgia as $key2 => $danhgia)
									<ul>
										<li><a href=""><i class="fa fa-user"></i>{{$danhgia->name}}</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>{{$danhgia->NgayLap}}</a></li>
										
									</ul>
									<p>{{$danhgia->NoiDung}}</p>
									<?php 
										// echo '<pre>';
										// print_r($danhgia);
										// echo '</pre>';
									?>
										@endforeach
									<?><b>Viết nội dung đánh giá của bạn</b></?>
									
									<form action="{{URL::to('/save-danh-gia/'.$prod->product_id)}}" method="POST">
										{{ csrf_field() }}
										<textarea name="noidung" ></textarea>
										<button type="submit" class="btn btn-default pull-right">
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
									@foreach ($related_product as $key1 => $related)
									<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}">
									<div class="col-sm-4">
									
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													
														<img width="100px" height="300px" style="display: inline" src="{{asset('public/uploads/products/'.$related->product_image_main)}}" alt="" />
														<h3 style=" font-weight: 600; color: black">{{$related->product_name}}</h3>
														<h4 style=" font-weight: 600; color: black">{{$related->breed_name}}</h4>
														<h4 style="color: red">
														 {{number_format($related->product_price).' '.'VNĐ'}}
															</h4>
														<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a> 
													
												</div>
											</div>
										</div>
										
									</div>
									</a>
									@endforeach	
									
									
								</div>
								<div class="item">	
									@foreach ($related_product as $key1 => $related)
									<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}">
									<div class="col-sm-4">
									
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													
														<img width="100px" height="300px" style="display: inline" src="{{asset('public/uploads/products/'.$related->product_image_main)}}" alt="" />
														<h3 style=" font-weight: 600; color: black" >{{$related->product_name}}</h3>
														<h4 style=" font-weight: 600; color: black">{{$related->breed_name}}</h4>
														<h4 style="color: red">
															
														 {{number_format($related->product_price)}}
															
															VND</h4>
														<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a> 
												
												</div>
											</div>
										</div>
										
									</div>
									</a>
									@endforeach	
									
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
					@endforeach
				</div>
@endsection