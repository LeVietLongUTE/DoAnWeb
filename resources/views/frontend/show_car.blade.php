@extends('welcome')
@section('content')
				

            <table id="cart" class="table table-hover "> 
            <thead> 
            <tr> 
                <th style="width:20%">Tên sản phẩm</th> 
                <th style="width:5%">Giá</th>  
                <th style="width:5%">Xóa </th> 
            </tr> 
           <!-- // -->
            </thead> 
            <tbody><tr> 
                
            <td data-th="Product">   
               
            <div class="col-xs-3"><img src="{{asset('public/uploads/products/'.$prod->product_image_main)}}" alt="Sản phẩm 1" class="img-responsive">
                </div> 
                <div class="col-xs-5"> 
                <h4 class="nomargin">ten san pham</h4> 
              
                <p>Loại sản phẩm:<a>aa</a></p> 
               
                </div>       
            </td> 
            <td data-th="Price">10000</td>   
            <td class="actions" data-th="">   
                <button class=" btn-danger btn-sm"><i class="icon fa fa-times text-danger text"></i>
                </button>
            </td> 
        <!-- // -->
            <tr> 
                <td><a href="{{URL::to('/')}}" class="btn btn-warning"><i class="fa fa-angle-left hidden-xs"></i> Tiếp tục mua hàng</a>
                </td>   
                <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                </td> 
                <td><a  class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td> 
            </tr> 
            </table>
       
     @endsection