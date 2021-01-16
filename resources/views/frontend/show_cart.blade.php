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
				
    <h2 style="text-align: center; color:orange; font-weight: 800">Giỏ hàng</h2>
        <?php 
            $content = Cart::content();            // echo '<pre>';
            // print_r();
            // echo '</pre>';
        ?>
            <table id="cart" class="table table-hover "> 
            <thead> 
            <tr> 
                <th style="width:25% ">Thông tin sản phẩm</th> 
                <th style="width:5%">Giá</th>  
                <th style="width:1%">Xóa </th> 
            </tr> 
           <!-- // -->
            </thead> 
            <tbody>
                @foreach ($content as $item)
  
            <tr> 
            <td data-th="Product" style="width: 100%; display: flex; justify-content: space-around;">   

                <div  style="display: block; width: 40%">
                    <img style="display: block" width="200px" height="200px" src="{{asset('public/uploads/products/'.$item->options->image)}}" alt="">
                    {{-- <img style="display: block" width="200px" height="100px" src="public/frontend/images/alaska1.jpg" alt=""> --}}
                </div> 
                <div style="width:60%">

                    <h4 class="nomargin">Tên PET: {{$item->name}}</h4> 
                    <p>Giống PET: {{$item->options->breed_name}}</p> 
                
                </div>       
            </td> 
            <td data-th="Price">{{number_format($item->price)}}</td>   
            <td class="actions" data-th="">
                <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng không?')" href="{{URL::to('/delete-to-cart/'.$item->rowId)}}">
                <button class="btn-danger btn-sm"><i class="icon fa fa-times text-danger text"></i>
                </button>
                </a>
            </td>
            </tr>
                @endforeach
                {{-- <div class="row" >{{$content->links()}}</div>  --}}
            </tbody> 
  
        <!-- // -->
            <tr  style=" width: 132%; display: flex; justify-content: space-around"> 
                <td ><a href="{{URL::to('/')}}" class="btn btn-warning"><i class="fa fa-angle-left hidden-xs"></i> Tiếp tục mua hàng</a>
                </td>   
                <td class="hidden-xs text-center"><strong>Tổng tiền <span>{{Cart::priceTotal().' '. 'VNĐ'}}</span></strong>
                </td> 
                <td ><a  class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td> 
            </tr> 
            </table>
       
     @endsection