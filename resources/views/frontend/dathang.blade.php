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
	<link href="{{asset('public/frontend/css/main2.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
   {{-- [if lt IE 9] --}}
    <script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->       
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head><!--/head-->
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
                $content = Cart::content();      
            ?>

            
 @include('frontend.header')
 	
    <h2 style="text-align: center; color:orange; font-weight: 800">Giỏ hàng</h2>
    
        <?php 
       
            $content = Cart::content();            // echo '<pre>';
            // print_r();
            // echo '</pre>';
        ?>
        <table id="cart" class="table table-hover " style="width: 80%; margin: 0 auto "> 
        <thead> 
        <tr> 
            <th style="width:25% ">Thông tin sản phẩm</th> 
            <th style="width:5%">Giá</th>  
            <th style="width:2%">Thao tác </th> 
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
            <tr><td ><a href="{{URL::to('/')}}" class="btn btn-warning"><i class="fa fa-angle-left hidden-xs"></i> Tiếp tục mua hàng</a>
            </td>  
                <td colspan="2" class="hidden-xs text-center"><strong>Tổng tiền <span>{{Cart::priceTotal().' '. 'VNĐ'}}</span></strong>
            </td> </tr>
        </tbody> 

    <!-- // -->
        
       
        </table>
        <div style="width: 80%; margin: 50px auto; display: flex; justify-content: space-around; border: 1px solid black;">
            <div style="padding: 40px; width: 50%; justify-content: center ">
                <form action="{{URL::to('/save-bill')}}" method="POST">
                    {{ csrf_field() }}
                    <center><h3>Thông tin người nhận</h3></center>
                    <div class="form-group">
                       
                            <label for="nameNN">Tên người nhận: </label>
                            <input type="text" class="form-control" name="nameNN" id="nameNN" placeholder=""
                            value="">
                        </div>
                        <div class="form-group">
                            <label for="sdt">SĐT: </label>
                            <input type="tel" class="form-control" name="sdt" id="sdt" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ:  </label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="">
                        </div>
        
                        <div class="form-group" style="display: flex; justify-content: space-around" >
                            <button type="submit" name="order" class="btn btn-info">Đặt hàng</button>
                        </div>
                </form>
            </div>
            <div style="padding: 40px; width: 50%; margin-top: 20px">
                <center><h3>Hóa đơn</h3></center>
                <table class="table table-striped b-t b-light">
                    <tbody>
                      <tr>
                        <td style="width: 50%">Sản phẩm</td>
                        <td>Thành tiền</td>
                      </tr>
                      @foreach ($content as $item)
                      <tr>
                          <td> <h4 class="nomargin">Tên PET: {{$item->name}}</h4> </td>
                          <td> <h4 style="color: red" data-th="Price">{{number_format($item->price)}} VNĐ</h4></td> 
                      </tr>
                      @endforeach
                      <tr>
                        <td>Giảm giá:  </td>   
                        <td>0%</td>
                     </tr> 
                        <tr>
                            <td>Vận chuyển: </td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>VAT : </td>
                            <td>0 VNĐ</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><td colspan="2" class="hidden-xs text-center"><strong>Tổng tiền <span>{{Cart::priceTotal().' '. 'VNĐ'}}</span></strong></td>
                        </tr>
                    </tbody>
         
                  </table>
            </div>
        </div>

@include('frontend.footer')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script type='text/javascript'>
    var maxWidth = (document.body.clientWidth);
    var maxHeight = (document.body.clientHeight);
    function changeActive() {
        document.getElementById("link").style.color = 'red';
    }
    </script>
    
</body>
</html>