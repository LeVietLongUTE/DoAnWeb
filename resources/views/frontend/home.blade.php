@extends('welcome')
@section('content')
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
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản phẩm Mới</h2>
    @foreach($product as $key => $prod)
        <a href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}">
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="100px" height="300px" src="{{asset('public/uploads/products/'.$prod->product_image_main)}}" alt="" />
                                <h5 style="color:orange">Tên PET: {{$prod->product_name}}</h5>
                                <h5 style="color:red">Giống PET: {{$prod->breed_name}}</h5>
                                <h4>{{number_format($prod->product_price).' '.'VNĐ'}}</h4>
                                
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                            </div>
                            
                    </div>
                </div>
            
            </div>
        </a>
    @endforeach
    
</div><!--features_items-->


<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Sản phẩm đề xuất</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
            <div class="item active">	
                @foreach ($related as $key => $relate)
                <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="150px" height="200px" src="{{asset('public/uploads/products/'.$relate->product_image_main)}}" alt="" />
                                <p style="font-weight: 800">Tên PET: {{$relate->product_name}}</p>
                                <p style="font-weight: 800">Giống PET: {{$relate->breed_name}}</p>
                                <h2  style="color: red">{{number_format($relate->product_price).' '.'VNĐ'}}</h2>
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            <div class="item ">	
                @foreach ($related as $key => $relate)
                <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="150px" height="200px" src="{{asset('public/uploads/products/'.$relate->product_image_main)}}" alt="" />
                                <p style="font-weight: 800">{{$relate->product_name}}</p>
                                <p style="font-weight: 800">{{$relate->breed_name}}</p>
                                <h2 style="color: red">{{number_format($relate->product_price).' '.'VNĐ'}}</h2>
                                
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
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
@endsection