@extends('welcome')
@section('content')
<div id="search" class="features_items"><!--features_items-->
    
    <h2 class="title text-center">Danh sách thú cưng hiện có thể giao dịch</h2>

    @foreach($product as $key => $prod)
   
      
        <a  href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}">
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                            <div class="productinfo text-center">
                                <img width="150px" height="300px"  src="{{asset('public/uploads/products/'.$prod->product_image_main)}}" alt="" />
                                <p style="color:orange">Tên PET:{{$prod->product_name}}</p>
                                
                                    @if (isset($breed_name))
                                        <p style="color:red">Giống PET: {{$breed_name}}</p>
                                    @else
                                    <p style="color:red">Giống PET: {{$prod->breed_name}}</p>
                                    @endif
              
                                 
                                <h2>{{number_format($prod->product_price).' '.'VNĐ'}}</h2>
                                
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$prod->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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
<div class="row" >{{$product->links()}}</div> 
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