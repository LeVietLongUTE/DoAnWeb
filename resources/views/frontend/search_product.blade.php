@extends('welcome')
@section('content')
<div id="search" class="features_items"><!--features_items-->
    <h2 class="title text-center">Kết quả tìm kiếm</h2>
    @foreach($search_product as $key => $prod)
        <a href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}">
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="100px" height="300px"  src="{{asset('public/uploads/products/'.$prod->product_image_main)}}" alt="" />
                                <h4>{{number_format($prod->product_price).' '.'VNĐ'}}</h4>
                                <p>{{$prod->product_name}}</p>
                                @foreach ($breed_data as $item)
                                    {{-- @if ($item->breed_id == $prod->breed_id) --}}
                                    <p>{{$item->breed_name}}</p>
                                    {{-- @endif --}}
                                @endforeach
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                            </div>
                            
                    </div>
                <!-- <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div> -->
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
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="150px" height="200px" src="{{asset('public/uploads/products/'.$relate->product_image_main)}}" alt="" />
                                <p>{{$relate->product_name}}</p>
                                <p>{{$relate->breed_name}}</p>
                                <h2>$56</h2>
                                
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="item ">	
                @foreach ($related as $key => $relate)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="150px" height="200px" src="{{asset('public/uploads/products/'.$relate->product_image_main)}}" alt="" />
                                <p>{{$relate->product_name}}</p>
                                <p>{{$relate->breed_name}}</p>
                                <h2>$56</h2>
                                
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
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