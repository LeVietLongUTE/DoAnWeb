@extends('admin_layout')
@section('content_dashboard')
<h3>Chao admin 

    <?php
        $id = Session::get('id');
        echo $id;
        $level = Session::get('level');
        echo $level;
        ?>    
</h3>
<div class="market-updates" style="display: flex; justify-content: space-around">

   
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Số lượng chó còn hàng</h4>
           
                <h3>
                    <?php $i=0; ?>
                     @foreach ($product as $prod)
                        @if($prod->category_id == 1 && $prod->product_status==1)
                           <?php $i++ ; ?>
                        @endif
                            @endforeach
                        <?php echo $i?>
                </h3>
               
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
  
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Số lượng mèo còn hàng</h4>
           
                <h3>
                    <?php $i=0; ?>
                     @foreach ($product as $prod)
                        @if($prod->category_id == 2 && $prod->product_status==1)
                           <?php $i++ ; ?>
                        @endif
                            @endforeach
                        <?php echo $i?>
                </h3>
               
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Số lượng khách hàng</h4>
           
                <h3>
                    <?php $i=0; ?>
                     @foreach ($user as $userKH)
                        @if($userKH->level == 0)
                           <?php $i++ ; ?>
                        @endif
                            @endforeach
                        <?php echo $i?>
                </h3>
               
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="market-updates" style="display: flex; justify-content: space-around">
   
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Số lượng nhân viên</h4>
           
                <h3>
                    <?php $i=0; ?>
                     @foreach ($user as $userKH)
                        @if($userKH->level == 2)
                           <?php $i++ ; ?>
                        @endif
                            @endforeach
                        <?php echo $i?>
                </h3>
               
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Doanh thu tháng này</h4>
                <h3>0</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Hóa đơn chưa duyệt</h4>
                <h3>0</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
        </div>
    
</div>
@endsection