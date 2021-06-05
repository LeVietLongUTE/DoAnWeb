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
 	
    <h2 style="text-align: center; color:orange; font-weight: 800">Cảm ơn bạn. Đơn hàng của bạn đã chuyển về hệ thống <br> Vui Lòng chờ xét duyệt</h2>
    
        <?php 
       
            $content = Cart::content();            // echo '<pre>';
            // print_r();
            // echo '</pre>';
        ?>
        

    <!-- // -->
        
       
        </table>
        <div style="width: 80%; margin: 50px auto; display: flex; justify-content: space-around; border: 1px solid black;">
            <div style="padding: 40px; width: 50%; justify-content: center ">
                <form action="{{URL::to('/save-bill')}}" method="POST">
                    {{ csrf_field() }}
                    <center><h3>Thông tin người nhận</h3></center>
                    <div style="margin-top: 30px" class="form-group">
                       
                            <h4 >Tên người nhận:  <span style="color: red;"><?php echo Session::get('tenNN') ?></span> </h4>
                       
                        </div>
                        <div class="form-group">
                            <h4 >SĐT: <span style="color: red;"><?php echo Session::get('sodienthoai') ?></span></h4>
                      
                        </div>
                        <div class="form-group">
                            <h4 >Địa chỉ:  <span style="color: red;"><?php echo Session::get('address') ?></span></h4>
                      
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