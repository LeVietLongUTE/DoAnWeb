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

?>
<body>
@include('frontend.header')
	<!--/??-->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giới Thiệu Thông Tin Về Những Chú Chó Cưng</h2>
					{{-- <ul class="text-left">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <a href="{{URL::to('/gioithieus')}}"><span> // </span>gioithieu</a>
						<a><span> // </span>cho</a>
					</ul> --}}
				</div>
			</div>
		</div>
	</div>
</div>
    <!--/??-->
    <div class="category-tab">
    <div class="col-sm-12 ">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#alaska" data-toggle="tab">Alaska</a></li>
            <li><a href="#husky" data-toggle="tab">Husky</a></li>
            <li><a href="#Corgi" data-toggle="tab">Corgi</a></li>
            <li><a href="#Pug" data-toggle="tab">Pug</a></li>
            
        </ul>
    </div>
    <div class="container">
         <div class="row">
            <div class="tab-content ">
            <div class="tab-pane fade  active in" id="alaska" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc Chó ALASKA</h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Alaska là loại chó được yêu thích trên toàn thế giới bởi dáng vẻ oai hùng nhưng không kém phần đáng yêu. Kế thừa bộ gen của dòng chó sói tuyết hoang dã và được thuần hoá bởi tộc Malamute, Alaska nhanh chóng trở thành một trong những giống chó được nhiều người yêu thích nhất. Để hiểu rõ hơn về giống chó Alaska huyền thoại này, hãy cùng Petroom tìm hiểu tất tần tật các thông tin về chúng qua bài viết dưới đây. </p>
                            </p>  
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Tất tần tật về siêu chó Alaska</a></div>
                            </div>
                           
                        </br></br>
                        <h2>(1) Nguồn gốc, xuất xứ “siêu khuyển” Alaska</h2> 
                            <p>Chó Alaska hay còn gọi là chó Alaska Malamute là tổ tiên giống chó sói tuyết hoang, được thuần hoá bởi tộc Malamute để trở thành vật nuôi. Tuy nhiên, trước khi trở thành thú nuôi phổ biến trong nhà, chó Alaska cũng đã phải trải qua một quá trình đầy gian nan, thử thách.</p>
                            <p>Nhiều tư liệu cho rằng chính những người Eskimo du mục đã phát hiện ra thể chất dẻo dai và bền bỉ của giống chó này để lai tạo chúng với một số giống chó khác và cho ra đời thế hệ chó Alaska to lớn, khỏe mạnh nhằm phục vụ mục đích chính là kéo xe trên tuyết.</p>
                            <p>Về sau, giống chó này được những người dân Alaska nuôi dưỡng và huấn luyện và dần trở nên phổ biến trên toàn nước Mỹ. Năm 1935, chó Alaska được AKC - Hiệp hội chó Hoa Kỳ công nhận là một giống chó chính thức trên toàn thế giới. </p>
                            <p>Giai đoạn thế chiến thứ 2 từ năm 1940 - 1945 được coi là thời kỳ đen tối nhất của chó Alaska khi chúng được quân đội Mỹ mang đi tham chiến trên khắp các chiến trường.</p>
                            <p>Chiến tranh kết thúc, số lượng chó Alaska bị suy giảm nhiều đến nỗi chúng đứng trước nguy cơ với nạn tuyệt chủng vĩnh viễn. Chỉ đến khi ấy, những người Mỹ mới nhận ra vấn đề đã trở nên nghiêm trọng đến mức nào và bắt đầu cho nhân giống loại chó quý giá này để bảo vệ nòi giống. </p>
                            <p>Cuối cùng, trải qua bao thăng trầm và thế kỷ, cho đến ngày hôm nay chó Alaska đã được phổ biến trên toàn cầu và trở thành một trong những loài vật nuôi được nhiều người yêu thích nhất đồng thời vẫn giữ vai trò là “kẻ kéo xe vĩ đại” trên các con đường tuyết. Có thể nói, hiếm loài chó nào có bề dày lịch sử cùng quá trình tồn tại mạnh mẽ như Alaska.</p>
                            <a>     -- Chó Alaska Wiki</a>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nguồn gốc, xuất xứ “siêu khuyển” Alaska</a></div>
                            </div>
                           
                        </br></br>
                        <h2>(2) Đặc điểm của chó Alaska</h2> 
                        <br>
                        <h4>(2.1) Đặc điểm về ngoại hình</h4> 

                            <p>Vì có tổ tiên là chó sói tuyết nên ngoại hình của chó Alaska có khá nhiều nét tương đồng. Những chú chó Alaska thường cao lớn, dũng mãnh. Chó Alaska được chia làm 3 loại chính:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Chó Alaska Standard.</p>
                                <p>- Chó Alaska Large Standard.</p>
                                <p>- Chó Alaska Giant.</p>
                            </div><br><br><br><br><br><br>
                            <p>Chiều cao, cân nặng trung bình của loài chó này rơi vào khoảng 65 đến 70cm và 45 đến 50kg. Đối với những Alaska Giant có thể cao tới 1m và nặng 80kg. Nhìn chung, loại chó này có thân hình khá cân đối, khung xương lớn với các khớp chân cực kỳ chắc chắn do đã được tôi luyện bởi công việc kéo xe từ xa xưa.</p>
                            <p>Bộ lông của chó Alaska cũng là điểm đáng lưu ý. Chó Alaska sở hữu nhiều màu lông đa dạng như: Trắng, đen trắng, nâu đỏ, vàng đồng, hồng phấn,... Tuy nhiên dù thân hình chúng có màu gì đi chăng nữa thì phần mõm và 4 chân của chúng luôn có màu trắng đặc trưng không thay đổi. Đây cũng là dấu hiệu để nhận biết chó Alaska thuần chủng.</p>
                            <p>Tương tự như loài chó Husky, chó Alaska cũng có 2 bộ lông để thích nghi với thời tiết lạnh giá bao gồm lớp lông dày bên trong giúp giữ cho cơ thể được ấm áp và lớp lông bên ngoài dài hơn, bông xù để chống thấm nước.</p>
                            <p>Khi nhìn trực diện những chú chó Alaska bạn sẽ thấy chúng toát lên vẻ dễ thương vô cũng bởi 2 bên má bạnh to, mắt hình quả hạnh nhân xiên chéo lên trên hộp sọ, Mắt Alaska thuần chủng thương có màu nâu đen hoặc hạt dẻ, ngược lại nếu chó Alaska có mắt màu xanh sẽ được coi là không thuần chủng. 2 chiếc tai của chúng có độ to vừa phải và có lông tơ ở vành tai.</p>
                            <p>Mõm chó Alaska không quá dài cũng không quá ngắn, thậm chí trông còn hơi mập, lông ở phần mõm của chúng có màu trắng. Phần lỗ mũi khá to và có màu hồng phớt ở giữa trông cực kỳ đáng yêu. </p>
                            <p>Về phần đuôi, có lẽ đây là phần dễ thương nhất trên cơ thể chó Alaska bởi nhìn chúng giống như chiếc chổi bông lau với lớp lông siêu dày và xù. Đuôi của chó Alaska thường cuộn tròn người về phía thân. Nếu bạn nhìn thấy một chú chó Alaska mà đuôi của nó cụp xuống dưới thì chứng tỏ chú chó Alaska này đã bị lai giống.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska3.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Một số đặc điểm về ngoại hình của chó Alaska</a></div>
                            </div></br></br>
                            <h4>(2.2) Đặc điểm về tính cách</h4> 
                            <p>Trải qua quá trình thuần hoá và lai tạo, ngày này chó Alaska đã bớt đi bản tính hung hăng, tinh ranh vốn có. Thay vào đó chúng trở nên hiền hoà, dễ bảo và thân thiện hơn với con người.</p>
                            <a>Tính trung thành</a></br>
                            <p>Có lẽ đây là bản tính mà bất kỳ loài chó nào cũng sở hữu. Thế nhưng với chó Alaska thì đây lại là bản tính đặc biệt nhất của chúng. Chó Alaska cực kỳ trung thành, chúng coi chủ nhân của mình như một vị “thủ lĩnh” đầu đàn và sẵn sàng tuân theo mọi mệnh lệnh, thậm chí hy sinh cả tính mạng vì chủ nhân.</p>
                            <p>Chó Alaska có tổ tiên là giống chó sói tuyết hoang dã và tinh ranh. Nhưng trải qua bao nhiêu năm bị thuần hóa và lai tạo, Alaska ngày nay đã mất đi bản tính hung hăng, thay vào đó là một chú chó hiền lành, thân thiện và vâng lời.</p>
                            <a>Tính thông minh</a></br>
                            <p>Chó Alaska rất thông minh. Chúng có khả năng tư duy và nhận thực được mối nguy hiểm xảy ra xung quanh. Nếu chó Alaska có biểu hiện gầm gừ hay kéo áo, bạn nên cẩn thận quan sát xung quanh để nhận biết tình hình và phòng tránh.</p>
                            <p>Thêm nữa, với tập tính kéo xe đã trở thành bản năng trong quá khứ. Chó Alaska rất giỏi tìm đường và định hướng không gian xung quanh. Chính vì vậy nếu chẳng may chú chó Alaska của bạn chạy đi mất thì cũng đừng quá lo lắng bởi chúng sẽ trở về ngay thôi.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska4.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Alaska cực kỳ trung thành và coi chủ nhân của mình như một vị “thủ lĩnh” đầu đàn</a></div>
                            </div></br></br>
                            <a>Tính hiếu động nhanh nhẹn</a></br>
                            <p>Vì bản chất là động vật hoang dã nên chó Alaska rất hiếu động. Chúng thích hoạt động trong vùng không gian rộng lớn. Đây cũng là lời khuyên cho những ai định nuôi chó Alaska, các bạn đừng nên nhốt hay để chúng ở không gian chật hẹp bởi làm như vậy chó Alaska sẽ không giải phóng được năng lượng tích tụ trong người, lâu dần chúng sẽ trở nên điên cuồng và dữ tợn hơn.</p>
                            <p>Chó Alaska là loài ưa lao động, thích được tập luyện và thử thách với những trò chơi thể lực mạnh như kéo lốp xe, kéo tạ, chạy đua đường dài,... Chính vì vậy nếu bạn đang có ý định chơi đùa với chúng bằng những trò thông thường như ném bắt bóng thì hãy bỏ ý định đó ngay đi bởi sẽ không có hiệu quả gì đâu.</p>
                            <a>Tính thân thiện</a>
                            <p>Alaska là loài chó nền tính. Chúng ít khi gây gổ hay đánh nhau với con người hay các loài khác. Đặc biệt, chó Alaska rất yêu quý trẻ em và coi chúng như những người bạn thân thiết. Chính vì thế đây là loài chó cực kỳ phù hợp đối với những gia đình có nuôi con nhỏ.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska5.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Một số đặc điểm về tính cách của chó Alaska</a></div>
                            </div></br></br>
                            <h2>(3)  Cách chăm sóc chó Alaska</h2> 
                            <p>Chó Alaska có tuổi thọ trung bình khá cao, 14 - 16 năm ở những nơi có khí hậu lạnh giá và suy giảm tuổi thọ khoảng 3 năm khi về những nước có môi trường nóng ẩm như ở Việt Nam (10 - 12 năm).</p>
                            <p>Tuy tuổi thọ của chó Alaska khá cao nhưng bạn không nên vì thế mà lơ là trong việc chăm sóc chúng. Sau đây là một số đầu mục cần nhớ để chăm sóc chó Alaska.</p>
                            <h4>(3.1) Môi trường sống</h4> 
                            <p>Chó Alaska xuất thân từ những vùng đất lạnh giá trải dài ngút tầm mắt. Vì thế nên chúng ưa thích sống trong môi trường rộng rãi để có thể thỏa sức nô đùa, chạy nhảy. Bạn cần hạn chế để chúng ở trong nhà quá lâu bởi với bản tính vốn có chó Alaska sẽ rất dễ tăng xông tức giận. Điều này cực kỳ nguy hiểm bởi chúng sẽ trở nên hung và mất kiểm soát.</p>
                            <p>Thêm một điểm cần lưu ý nữa đó chính là nhiệt độ tại nơi chó Alaska ở. Thông thường ở Việt Nam chó Alaska sẽ dễ mắc bệnh sốc nhiệt vì thời tiết nóng và ẩm. Để tránh điều này bạn nên để chúng trong môi trường thoáng mát, có nhiệt độ khoảng từ 20 đến 25 độ C và thỉnh thoảng chườm khăn lạnh vào vùng đệm chân giúp chúng cân bằng nhiệt độ cơ thể.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska6.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Alaska ưa thích sống trong môi trường rộng rãi để có thể thỏa sức nô đùa, chạy nhảy</a></div>
                            </div></br></br>
                            <h4>(3.3) Chế độ ăn của chó Alaska</h4> 
                            <p>Chó Alaska không hề kén ăn nhưng trong mỗi bữa ăn của thức ăn cho chó Alaska cần đảm bảo có đầy đủ protein. Bạn có thể cung cấp protein cho chúng bằng thịt gà hoặc thịt bò, trứng vịt lộn,... Cũng đừng quên bổ sung chất xơ, canxi như rau củ quả, sữa tươi cho chúng để cân bằng dinh dưỡng, giúp cải thiện hệ tiêu hoá đường ruột.</p>
                            <p>Thông thường chó Alaska ăn khoảng 3 đến 4 bữa/ngày. Khi còn nhỏ, chó Alaska thường nên ăn nhiều bữa trong ngày. Tuy nhiên khi lớn lên, số lượng bữa ăn có thể giảm bớt xuống còn khoảng 2-3 bữa/ngày để đảm bảo chúng phát triển cân đối, tránh bị thừa cân hay mắc các bệnh về đường ruột do ăn quá nhiều.</p>
                            <a>Thức ăn cho chó Alaska trong từng giai đoạn</a>
                            <h4>Thức ăn tốt cho chó Alaska dưới 2 tháng tuổi</h4>
                            <p>Trong giai đoạn này, cũng giống với con người, thức ăn chủ yếu của những chú chó con là sữa mẹ, chính vì vậy, việc bồi bổ cho chó mẹ thức ăn và các chất cần thiết là vô cùng quan trọng để chó mẹ có thể có được nguồn sữa dồi dào cũng như chất lượng để nuôi chó con.</p>
                            <p>Từ 1 tháng tuổi trở lên, khi chó con đã bắt đầu cứng cáp hơn, các bạn có thể cho chó con làm quen với các loại cháo thịt mềm, thịt băm và hãy chia các bữa ăn của chó con ra thành nhiều bữa nhỏ, điều này giúp dạ dày của chó con tập thói quen tiêu hóa thức ăn.</p>
                            <h4>Thức ăn cho chó Alaska 2 đến 6 tháng tuổi</h4>
                            <p>Trong thời gian này, các bạn nên cho chó cưng của mình làm quen dần với các loại cơm trộn thịt mềm, bổ sung trứng thêm dinh dưỡng và bắt đầu cho chó con tiếp xúc với các loại hạt mềm để chó con có thể phát triển răng và các cơ nhai trong miệng.</p>
                            <p>Bên cạnh đó, việc tăng độ cứng của thức ăn là điều vô cùng quan trọng trong thực đơn thức ăn cho chó con, mục đích để giúp các bé có một hàm răng chắc khỏe và có được độ sắc nhọn vừa đủ. Một mẹo nhỏ cho các bạn chủ đó chính là thay vì sử dụng thịt băm trộn với cơm, các bạn hoàn toàn có thể sử dụng một miếng thịt to trộn vào cơm cùng với các hạt có độ cứng vừa phải.</p>
                            <p>Ngoài ra, đây là giai đoạn cần phải chú ý về vấn đề tiêu hóa cũng như dạ dày của chó con, việc bổ sung men tiêu hóa vào thực đơn để hỗ trợ cũng là một việc nên làm.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska7.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Thịt tươi xay tốt cho chó alaska con</a></div>
                            </div></br></br>
                            <h4>Thức ăn cho chó Alaska từ 6 tháng tuổi trở lên</h4>
                            <p>Cũng giống với các loài chó khác, ở độ tuổi này, chó Alaska gần như đã trưởng thành hoặc đang trong giai đoạn trưởng thành. Trong thời gian này, bạn có thể giảm bớt số lượng bữa ăn trong ngày của chúng, thay vào đó là một thực đơn tăng cường chất dinh dưỡng thiết yếu cho sự phát triển của chó Alaska như canxi, một số loại rau củ và bắt đầu có thể tăng cường cho ăn các miếng thịt to.</p>
                            <p>Ngoài ra, việc cho chó Alaska gặm xương cũng khá quan trọng, việc làm này giúp làm khỏe cơ hàm cũng như mài răng cho chó Alaska. Trứng vịt lộn là món ăn có thể bổ sung thêm vào thực đơn nếu bạn muốn chú chó của mình có một bộ lông dày và mượt.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/alaska8.jpg')}}"  alt="" /> </br>  
                        
                            </div></br></br>
                            <h4>Lưu ý khi lựa chọn thức ăn khô cho chó Alaska</h4>
                           
                            <p>Nếu là một người yêu thương chú chó của mình thật sự và là một người chủ tốt, việc nắm bắt thực đơn và các chất dinh dưỡng cho thú cưng của mình là điều vô cùng quan trọng. Giống chó Alaska vốn đã không quen với môi trường nhiệt đới ẩm của nước ta, vậy nên việc để ý đến thức ăn cho chó Alaska  từ khi chúng còn bé cho đến khi trưởng thành là một việc làm cần thiết giúp cho chú chó của bạn được khỏe mạnh và phát triển tốt. </p>
                            <p>Trên đây Pet Master đã cung cấp cho các bạn những thông tin cụ thể và chi tiết về chế độ ăn phù hợp cho chó Alaska qua từng giai đoạn, độ tuổi phù hợp. </p>
                            </br></br>
                        </div>    
                    </div>
                </div>
                <div class="tab-pane    in" id="husky" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc Chó HUSKY</h3>
                        <div class="mx-4 p-2  " >
                            
                            <p class="bg-secondary text-light  ">
                        <p class="text-center ">Husky là một trong những giống chó được nuôi phổ biến nhất ở Việt Nam. Tuy nhiên, cách nuôi chó Husky như thế nào để đạt được hiệu quả cao nhất thì không phải ai cũng biết. Hiểu được điều này, Siêu Pet sẽ hướng dẫn các bạn cách nuôi và huấn luyện chó Husky đơn giản dễ thực hiện nhất thông qua bài viết dưới đây. </p>
                            </p>   
                            <h4>(1) Chế độ dinh dưỡng hợp lý dành cho chó Husky</h4>   
                            <p>Husky là giống chó lao động, ưa thích vận động cường độ mạnh nên chế độ dinh dưỡng dành cho Husky thật sự rất quan trọng. Thông thường, với mỗi độ tuổi khác nhau của chó Husky đều cần một chế độ dinh dưỡng cũng khác nhau. </p>
                            <img src="{{('public/frontend/images/image4.jpg')}}"  alt="" /> 
                            <div class="pages-title-text text-center">
                            <a >Chế độ dinh dinh dưỡng hợp lý cho chó Husky</a></div> 
                            <h4>Với chó Husky 1- 2 tháng tuổi</h4>
                            <p>Cách nuôi chó Husky con trong giai đoạn này cần bạn phải dành khá nhiều thời gian. Chó Husky 1 tháng tuổi đa phần chưa mọc răng đủ. Do đó, bạn chỉ nên cho chúng ăn cháo nấu với nước hầm xương chẳng hạn. Hạn chế cho cún ăn thức ăn quá cứng. Chó Husky tuổi này cũng ăn được thức ăn khô. Tuy nhiên, bạn phải ngâm mềm thức ăn khoảng 5 phút với sữa hoặc nước.</p>
                            </br>
                            <p>Lượng thức của cún bạn nên chia thành 4-5 bữa, mỗi bữa các đều nhau đểu cún tiêu hóa dễ dàng hơn. Siêu Pet xin lưu ý với bạn một điều rằng tuyệt đồi không được cho cún ăn quá no với cường độ các bữa ăn quá dày hoặc quá thưa. </p>
                            <h4>Với chó Husky từ 3-6 tháng tuổi</h4>
                            <p>Thời gian này, quá trình chăm sóc trở nên dễ dàng hơn. Husky bắt đầu trưởng thành và đạt trạng thái sức khỏe tốt nhất. Ở khoảng thời gian nuôi dưỡng này, bạn nên cho chó ăn 2-3 bữa mỗi ngày.</p>
                            <img src="{{('public/frontend/images/image5.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nên cho chó Husky trên 6 tháng tuổi ăn như chó trưởng thành</a></div>
                        </br></br>
                            <p>Khẩu phần ăn vào độ tuổi này của chó Husky cần phải tăng lên. Nên chú trọng các thực phẩm bổ sung canxi cho chúng. Các loại thực phẩm hay được người nuôi dưỡng dùng như: Thịt, cá, nội tạng động vật, xương,… Ngoài ra, chó Husky cũng cần được bổ sung các loại rau, đậu như: Củ dền, rau chân vịt, cải, bí,…</p>
                            <p>Nếu bạn muốn chó Husky tuổi này phát triển cơ hàm khỏe mạnh thì nên cho chúng ăn các các loại xương và đồ ăn cứng. Ngoài ra, để Husky có một bộ lông bóng mượt, bạn có thể cho chúng ăn 2-3 quả trứng vịt lộn mỗi tuần. Có thể luộc sơ qua rồi cho chúng ăn là được.</p>
                            <h4>Một số lưu ý khi cho chó Husky ăn</h4>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Nước uống cho chó cần phải luôn đầy. Bạn nên thay nước 3 lần/ ngày để hạn chế mầm bệnh và kí sinh trùng phát triển.</p>
                            
                                <p>- Hạn chế cho chó Husky ăn các loại tinh bột, các chất béo, các chất tanh sống và tuyệt đối không cho ăn đồ ôi thiu. Những đồ ăn này có thể làm cho chó cưng mắc các bệnh về đường ruột như: Tiêu chảy, kiết lỵ, …</p>
                                <p>- Không để sẵn thức ăn trong chuồng cho chó Husky. Bạn cần cho tập cho chúng thói quen ăn uống đúng giờ. Đồng thời, phải thường xuyên vệ sinh bát ăn khay uống của chó Husky.</p>
                                <p>- Bạn giảm bữa ăn của chó Husky trưởng thành xuống 2-3 bữa/ 1 ngày thì đồng thời phải tăng lượng thức ăn lên để phù hợp với độ tuổi. Tránh tình trạng giữ nguyên lượng thức ăn cũ khiến chó Husky có thể bị đói.</p>
                            </div><br><br><br><br><br><br><br><br><br>
                            <h2>(2) Cách nuôi chó Husky khỏe mạnh nhất</h2>  
                            <h3>Cách chăm sóc để hạn chế những bệnh liên quan đến lông và da</h3>
                            <p>Với mỗi chú chó, việc chăm sóc lông để tránh những căn bệnh ngoài da là rất cần thiết. Việc tắm rửa thường xuyên giúp bạn kiểm tra định kỳ tình trạng da của cún. Các vấn đề sẽ được phát hiện kịp thời nếu chó Husky có dấu hiệu bất thường như: Ghẻ, bọ chét hay da nổi mụn đỏ, …</p>
                            <img src="{{('public/frontend/images/image6.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nên tắm cho chó Husky thường xuyên</a></div>
                        </br></br>
                            <p>Bạn nên chăm sóc lông cho chó Husky thường xuyên, cắt tỉa gọn gàng để các loại vi khuẩn và bọ không có cơ hội trú ẩn trong lông. Đặc biệt, khi nuôi dưỡng chó Husky bạn cũng phải chú ý đến độ ẩm của lông vì nó là nguyên nhân gây ra các bệnh nấm.</p>
                            <h4>Tắm và chăm sóc lông cho chó Husky</h4>
                            <p>Trong quá trình chăm sóc chó Husky, bạn nên tắm cho chúng 1-2 lần mỗi tháng. Nếu tắm quá nhiều sẽ khiến da chúng bị khô, lông có thể trở nên xơ xác. Tắm quá ít thì việc vệ sinh lông lại không được đảm bảo. Khi tắm, bạn có thể sử dụng sản phẩm sữa tắm dành riêng cho chó để lông chó Husky luôn óng ả và mượt mà.</p>
                            <p>Khi tắm rửa cho chó Husky xong, bạn phải sấy khô lông cho chúng ngay lập tức. Hoặc khi thời tiết ẩm ướt, mưa kéo dài, lông chó dày và khó thoát hơi nước, bạn cũng phải chú ý đến việc sấy khô lông. Tránh để lông ẩm ướt quá lâu, chó Husky có thể bị cảm lạnh.</p>
                            <p>Bạn cũng nên cắt tỉa lông cho chó Husky thường xuyên để chúng có bộ lông đẹp và gọn gàng. Việc cắt tỉa lông không chỉ mang tính thẩm mỹ cao mà còn ngăn cản sự phát triển của các vi khuẩn gây bệnh. Bạn có thể tự cắt tỉa lông tại nhà hoặc đưa chó Husky tới các cửa hàng chăm sóc thú cưng. Họ sẽ cho chó Husky nhà bạn một diện mạo ấn tượng nhất.</p>
                            <h4>Một số lưu ý về cách nuôi chó Husky ở Việt Nam</h4>
                            <p>Husky là loài chó tuyết có nguồn gốc từ vùng đất lạnh giá. Chính vì thế, chúng quen sống với khí hậu băng tuyết, khắc nghiệt nhiều hơn. Khi chó Husky  được nuôi dưỡng ở Việt Nam, sự thay đổi môi trường sống làm chúng hay mắc những bệnh nhiệt đới như: Cảm, sốt, … Chính vì thế, điều đầu tiên khi nuôi dưỡng một chú chó Husky là bạn phải cho chúng một nơi ở mát mẻ, thoáng đãng nhất có thể.</p>
                            <img src="{{('public/frontend/images/image7.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nên cho chó Husky ở những nơi mát mẻ</a></div>
                        </br></br>
                            <p>Đồng thời, nơi ở của chó Husky phải luôn sạch sẽ. Trong những ngày nhiệt độ tăng cao bạn có thể cho chúng nằm quạt để giảm nhiệt độ xuống. Ngoài ra bạn có thể cho chúng ăn những loại thực phẩm làm mát cho cơ thể nhằm thanh lọc và giải độc.</p>
                            <p>Nếu những ngày nắng nóng quá, bạn không nên cho chó Husky ra ngoài chơi vào giữa trưa nóng. Bạn có thể chờ đến tối muộn, khi nhiệt độ giảm xuống thấp nhất để đưa chúng ra ngoài chạy nhảy sau.</p>
                            <h2>(3) Các cách huấn luyện chó Husky</h2>                            
                            <p>Chó Husky là loài chó tuyết kéo xe nên chúng có sức khỏe vượt trội hơn nhiều so với các giống chó cảnh khác. Chúng là loài chó ưa vận động mạnh, thích chạy nhảy và hơi ương bướng nên việc huấn luyện đôi khi sẽ gặp phải nhiều khó khăn. Bạn nên chú ý huấn luyện chó Husky ngay từ khi còn nhỏ để dễ kiểm soát hơn.</p>
                           <h2>Huấn luyện chó Husky thực hiện các mệnh lệnh cơ bản</h2>
                            <p>Các lệnh cơ bản mà chó Husky nên được dạy đó là : Đứng, nằm, ngồi, biết chạy về mỗi khi được gọi, … Những mệnh lệnh này giúp bạn dễ dàng hơn trong việc quản lý chó Husky, đồng thời giảm công chăm sóc và giúp chó Husky đi vào nguyên tắc hơn.</p>
                            <img src="{{('public/frontend/images/image8.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Huấn luyện chó Husky thực hiện các mệnh lệnh cơ bản</a></div>
                        </br>
                            <p>Cách huấn luyện những câu lệnh này khá đơn giản. Ví dụ như câu lệnh dạy chó Husky ngồi có những bước như sau:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Cho chó Husky đứng bên cạnh bạn. Hô to rõ ràng “ngồi xuống “.</p>
                            
                                <p>- Khi hô, tay bạn đồng thời ấn chúng xuống trong tư thế ngồi. Giữ nguyên tư thế đó trong vòng 10-15s.</p>
                                <p>- Sau đó, bạn hô to “đứng lên”, đồng thời nhấc người chúng lên trong tư thế đứng. Cũng giữ nguyên tư thế trong vòng 10-15s.</p>
                                <p>- Lặp đi lặp lại nhiều lần như thế, trong nhiều ngày. Chó Husky rất thông minh, chúng sẽ nhanh chóng học được chỉ sau vài lần được dạy.</p>
                            </div><br><br><br><br><br><br><br>
                           
                            <p>Bạn cũng có thể tập tương tự với các mệnh lệnh khác như: “nằm xuống”, “ngừng sủa”, “đứng im”, …</p>
                          <h4>Những lưu ý khi huấn luyện chó Husky</h4>
                          
                          <p>Với mỗi động tác thực hiện mệnh lệnh, bạn nên sử dụng những câu lệnh đơn giản và dễ hiểu. Biểu đạt cho chúng cách thực hiện các lệnh đó bằng những hành động cụ thể. Từ đó thiết lập cho chó những phản xạ có điều kiện.</p>
                          <p>Trong quá trình huấn luyện, bạn nên cho chó những phần thưởng và lời động viên khích lệ. Chúng sẽ tác động trực tiếp vào cảm xúc của chó Husky kích thích chúng ham học và thực hiện nhanh hơn.</p>
                          <p>Các hoạt động liên quan nhiều đến thể chất sẽ giúp cho chó Husky phát triển cơ bắp và trở nên khỏe mạnh hơn. Các hoạt động như đạp xe, ném bóng, nhặt đĩa… nên được áp dụng với chúng nhất là vào độ tuổi trưởng thành.</p>
                            <p>Chó Husky khi lớn khá ngang bướng. Do đó, bạn nên thực hiện bài tập ngay khi chúng còn nhỏ, để lớn lên vào những bài tập huấn luyện chúng đã biết nghe lời bạn giúp bạn dễ quản lý hơn.</p>
                            <h2>(4) Một số bệnh chó Husky hay gặp phải</h2>  
                           
                            <p>Những bệnh chó Husky hay gặp phải là các bệnh về đường tiêu hóa và các bệnh về da. Các bệnh này xuất phát từ chế độ sinh hoạt và ăn uống của cún. Để phòng ngừa các bệnh nói trên, bạn nên cho chó tẩy giun sán theo đúng định kỳ và sự chỉ dẫn của bác sỹ.</p>
                            <img src="{{('public/frontend/images/image9.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Husky hay mắc phải các bệnh liên quan về da</a></div>
                        </br>
                            <p>Những căn bệnh về mắt mà chó Husky hay mắc phải như: Đục thủy tinh thể, teo võng mạc, suy giáp, mờ mắt,… Bạn cần để ý và chăm sóc cún đúng cách để ngăn chặn những bệnh nói trên.</p>
                            <p>Bệnh dại là căn bệnh vô cùng nguy hiểm. Chó Husky rất dễ bị mắc nếu chúng không được tiêm phòng dại định kì. Tốt nhất là mỗi năm một lần vì sự an toàn của bạn và những người xung quanh.</p>
 
                        </div>    
                    </div>
                </div>
                    <div class="tab-pane in" id="Corgi" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc Chó Corgi</h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Corgi - giống cảnh khuyển xứ lạnh thuộc Top những giống chó ngoại được yêu thích nhất tại Việt Nam. Do đó, nhu cầu về chăm sóc, chế độ ăn... của cún được rất nhiều bạn đọc quan tâm. Tại bài viết này, Siêu Pet sẽ bật mí cho bạn cách nuôi Corgi đơn giản mà đạt hiệu quả nhất.. </p>
                            </p>  
                            <h2>(1)  Thức ăn cho chó Corgi</h2> 
                            <p>Để cún cưng Corgi có thể phát triển khỏe mạnh, Siêu Pet khuyên bạn nên chú ý đến chế độ dinh dưỡng cùng khẩu phần hợp lý mỗi ngày. Vì thức ăn đóng vai trò quan trọng trong sự phát triển toàn diện của cảnh khuyển.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/corgi1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Bạn nên chú ý nhiều hơn đến chế độ dinh dưỡng của chó Corgi</a></div>
                            </div> </br></br>
                        <h4>Chế độ dinh dưỡng của Corgi</h4> 
                            <p>Sở hữu thân hình nhỏ bé nhưng khá tinh nghịch, Corgi đòi hỏi bạn phải cung cấp đầy đủ các chất dinh dưỡng. Theo đó, các chất bắt buộc phải có trong khẩu phần ăn của cún là:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Protein: Có trong các loại thịt, nhiều nhất là thịt bò, sau đó là đến thịt gà, thịt lợn, trứng vịt lộn,….</p>
                            
                                <p>- Chất béo: Thường đã có sẵn trong các loại thịt chứa protein, bạn không cần cần bổ sung thêm vì dễ khiến Corgi bị béo phì..</p>
                                <p>- Chất xơ: Trong các loại rau củ quả, trong đó tốt nhất vẫn là cà rốt. Chất xơ cực kì tốt cho hệ tiêu hóa và bộ lông của Corgi.</p>
                                <p>- Vitamin, khoáng chất: Các loại vitamin thường có nhiều trong thực phẩm tươi như: Cà rốt, tôm, ngao, ốc,….</p>
                                <p>- Tinh bột: Có nhiều trong cơm, cháo, khoai tây, khoai lang, sắn,…</p>
                            </div><br><br><br><br><br><br><br>
                            <h4>Khẩu phần ăn của Corgi theo độ tuổi</h4>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Corgi từ 1-2 tháng tuổi: Giai đoạn này hê tiêu hóa của cún còn rất kém. Bạn nên chú ý cho chúng dùng thức ăn mềm như: Cháo loãng, sữa, thức ăn khô ngâm mềm, khoai tây nghiền,… Đồng thời, bạn nên cho Corgi ăn thành nhiều bữa: Khoảng 4-5 bữa + 200mi sữa ấm một ngày.</p>
                            
                                <p>- Corgi từ 3-6 tháng tuổi: Corgi tuổi này đã bắt đầu ăn được thịt, tôm, cá, rau,… Nhưng thức ăn cũng phải được cắt nhỏ và làm mềm, đề phòng Corgi bị hóc. Bạn có thể giảm xuống còn 3-4 bữa một ngày, sữa thì nên uống 200-300ml.</p>
                                <p>- Corgi trên 6 tháng tuổi: Cún Corgi lúc này đang vào độ tuổi phát triển mạnh nhất. Bạn nên cho chúng ăn đa dạng các loại thức ăn từ thịt, tôm, cá đến khoai, mì,… để cung cấp đầy đủ các chất. Ở giai đoạn này, bạn chỉ cần cho cún ăn 2-3 bữa một ngày, sữa có thể uống có thể không. Nếu muốn bộ lông của Corgi bóng mượt thì bạn có thể cho ăn 2-3 quả trứng vịt lộn mỗi tuần..</p>
                        
                            </div><br><br><br><br><br><br><br>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/corgi2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Khẩu phần ăn của chó Corgi theo độ tuổi</a></div>
                            </div> </br></br>
                            <h4>Một số chú ý khi cho Corgi ăn</h4>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Không cho ăn quá nhiều trong một bữa hoặc quá nhiều chất béo bởi Corgi rất dễ bị béo phì..</p>
                                <p>- Vệ sinh bát và khay đựng sạch sẽ, không ăn thức ăn thừa.</p>
                                <p>- Thức ăn tươi phải được nấu chín, không cho ăn đồ tanh sống.</p>
                                <p>- Tuyệt đối không cho cún ăn các loại xương cứng, nhỏ, nhất là xương gà..</p>
                        
                            </div><br><br><br><br><br><br><br>
                            <h2>(2)  Huấn luyện cho chó Corgi</h2> 
                            <p>Corgi là giống chó săn cực kì ưa vận động, thích chạy nhảy, nô đùa. Do đó, Siêu Pet khuyên bạn nên dành 25-30 phút mỗi ngày để dắt chúng đi dạo đồng thời luyện tập thêm các bài tập đơn giản như: Đuổi bắt, ném bóng, trốn tìm,…</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/corgi3.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Huấn luyện cho chó Corgi</a></div>
                            </div> </br></br>
                           
                            <p>Giống cảnh khuyển chân ngắn xứ Wales không cần tập những bài huấn luyện đòi hỏi độ khó và nhiều thể lực. Bạn chỉ cần cho chúng tập luyện để giải phóng năng lượng thừa, bớt phá phách lung tung, giảm nguy cơ béo phì. Đối với Corgi, Sieupet.com khuyên bạn nên tập trung nhiều vào các bài huấn luyện giúp cún ngoan ngoãn hơn.</p>
                            <p>Corgi thông minh nhưng cũng rất khó bảo và cần được bạn dạy dỗ ngay từ khi còn bé bằng các bài tập: Đi vệ sinh đúng chỗ, biết chạy lại khi chủ gọi, bảo ngừng sủa là ngừng sủa,… Nếu bạn để khi chúng lớn mới bắt đầu tập thì Corgi sẽ khó vào khuôn khổ.</p>
                            <p>Trong quá trình huấn luyện cho Corgi, bạn không được quá vội vàng và nóng giận bởi công việc này đòi hỏi sự kiên nhẫn. Lúc Corgi làm đúng, bạn nên có phần thưởng để khích lệ.</p>
                            <p>Nếu cún làm sai, bạn nên có hình phạt để chúng biết sợ, tránh việc bỏ qua dễ dàng. Việc huấn luyện Corgi giúp bạn giảm công chăm sóc và dễ dàng quản lý chúng mỗi khi ra ngoài.</p>
                            <h2>(3)   Chăm sóc và vệ sinh cho chó Corgi</h2>
                            <p>Corgi là giống cảnh khuyển xứ lạnh nên chúng khó có thể phát triển toàn diện tại khí hậu nắng nóng của Việt Nam. Trong quá trình nuôi dưỡng cún, bạn cần lưu ý đến cách chăm sóc và vệ sinh để Corgi có thể phòng tránh một số bệnh không đáng có.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/corgi4.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chăm sóc và vệ sinh cho Corgi</a></div>
                            </div> </br></br>
                            <h4>Chăm sóc bộ lông cho chó Corgi</h4>
                            <p>Sở hữu bộ lông dày 2 lớp với tác dụng giữ nhiệt nên khi du nhập vào Việt Nam, công dụng này không còn phù hợp với cún. Để Corgi có thể thoải mái phát triển, Siêu Pet nhắc bạn nên chú ý cắt tỉa lông khoảng 2-3 tháng một lần.</p>
                            <p>Ngoài việc cắt tỉa, bạn cũng nên tắm cho cún thường xuyên. Đồng thời, dùng lược chải lông cho Corgi mỗi ngày để loại bỏ phần lông chết. Nếu lông Corgi ẩm ướt, bạn nên dùng máy sấy sấy khô, tránh để vi khuẩn có cơ hội phát triển.</p>
                            <p>Nếu không có thời gian chăm sóc lông cho Corgi, bạn có thể đưa chúng đến các Spa thú cưng.</p>
                          <h4>Vệ sinh cho chó Corgi</h4>
                            <p>Trong quá trình vệ sinh cho cún, người nuôi nên chú ý một số điều sau:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Tắm cho Corgi 2-3 lần mỗi tuần để tránh các bệnh về lông và da.</p>
                                <p>- Nếu lông Corgi bị bẩn nhẹ, bạn có thể lấy khăn ướt lau qua, không nhất thiết phải tắm.</p>
                                <p>- Để ý vệ sinh những ngóc ngách nhiều vi khuẩn như: Kẽ tai, kẽ chân, nách chân,…</p>
                                <p>- Bạn có thể đánh răng cho Corgi nếu có thời gian..</p>
                        
                            </div><br><br><br><br><br><br><br>
                            <h2>(4)  Tiêm phòng cho chó Corgi</h2>
                            <p>Corgi thuộc vào nhóm những giống cảnh khuyển có tuổi thọ khá cao: Khoảng 12-15 năm. Để cún cưng được khỏe mạnh với số tuổi lâu hơn, bạn nên thực hiện tiêm phòng cho chúng định kỳ.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/corgi5.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nên tiêm phòng cho Corgi để phòng một số bệnh</a></div>
                            </div> </br></br>
                            <p>Vaccine dành cho Corgi thường có 3 loại là: 3 in 1, 5 in 1 và 7 in 1. Trong đó, loại 3 trong 1 bây giờ ít khi được sử dụng do có hiệu quả không cao. Các phòng khám thú y thường khuyên bạn dùng 2 loại 5 trong 1 và 7 trong 1. Các loại vaccine đó có thể phòng ngừa một số bệnh như: Care, Pravo, gan truyền nhiễm, cúm,…</p>
                            <p>Theo kinh nghiệm của Siêu Pet, bạn nên bắt đầu tiêm phòng cho Corgi từ khi còn nhỏ, khoảng 3 tuần tuổi là bắt đầu mũi thứ nhất. Sau đó, liệu trình sẽ kéo dài đến khi chúng khoảng 3 tháng tuổi là kết thúc mũi cuối. Giá vaccine cũng không đắt, chỉ từ 120k – 200k một mũi, tùy từng loại thuốc.</p>
                            <p>Khi cảnh khuyên chân ngắn Corgi được 8 tháng tuổi thì nên được tiêm phòng dại. Khi tiêm phòng thì bạn cũng nên hỏi các bác sĩ cho cún uống thuốc tẩy giun sán đều đặn.</p>
                            <p>Xem thêm bài viết nếu bạn muốn sở hữu một bé cún Corgi thuần chủng chất lượng: "Mua Bán Chó Corgi Uy Tín Và Chất Lượng"</p>
                            </br></br>
                        </div>    
                    </div>
                </div>
               
                <div class="tab-pane in" id="Pug" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc Chó Pug “mặt xệ” </h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Với cái tên đáng yêu “chó mặt xệ" - Pug sở hữu thân hình mũm mĩm, tròn, mập mạp với 4 chân ngắn tũn vô cùng đáng yêu. Tuy nhiên, cách nuôi chó Pug có một vài điểm mà bạn cần lưu ý để đảm bảo chúng vui vẻ và khoẻ mạnh. Không đơn thuần là chế độ ăn uống, vui chơi, luyện tập mà bạn cũng phải chú ý đến các khâu vệ sinh cũng như theo dõi thể trạng của chúng theo từng giai đoạn. Hãy cùng Petroom khám phá cách nuôi chó Pug một cách hiệu quả trong bài viết dưới đây nhé!</p>
                            </p>  
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Hướng dẫn cách nuôi chó pug “mặt xệ”</a></div></br>
                            </div>
                           
                        </br></br>
                        <h2>(1) Cách nuôi chó Pug con</h2> 
                            <p>Thông thường bất kì ai muốn nhận nuôi chó thì đều được khuyên nên nhận nuôi từ bé để chúng có thời gian làm quen chủ cũng như dễ hòa nhập hơn. Chó Pug cũng vậy, nếu bạn có nhu cầu mua chó Pug con thì nên lựa chọn những chú từ 2 tháng tuổi trở lên. Đây là giai đoạn chó Pug đã cai sữa mẹ và cứng cáp, khỏe mạnh hơn. Lúc này, cách nuôi chó Pug con cũng dễ chịu hơn nhiều và giảm thiểu được những rủi ro không đáng có.</p>
                            <h4>(1.1) Cách nuôi chó Pug con</h4> 
                            <p>(1.1.1)  Đối với chó Pug từ 2 đến 3 tháng tuổi</p>
                            <p>Giai đoạn này là giai đoạn chó Pug con mới bắt đầu tập ăn. Petroom khuyên bạn nên cho chúng ăn đồ loãng và xay nhuyễn, bao gồm: tinh bột (cơm/cháo), thịt nạc và rau/củ/quả. Sau mỗi bữa ăn, bạn có thể bổ sung thêm sữa ấm cho chúng. Khẩu phần ăn giai đoạn này là 4 bữa/ngày, thời gian các bữa ăn cần cách đều nhau.</p>
                            <p>Một chú ý nhỏ, bạn tuyệt đối không cho chúng ăn đồ sống/tái. Những thực phẩm như tôm/cua/cá/… và xương cũng không được cho chúng ăn.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Pug con ngoài sữa mẹ thì cần tập ăn những thức ăn mềm và dễ hấp thu</a></div>
                            </div> </br></br>
                            <p>(1.1.2)  Đối với chó Pug từ 3 đến 6 tháng tuổi</p>
                            <p>Cách nuôi chó Pug con giai đoạn này vẫn cần một chế độ dinh dưỡng nghiêm ngặt. Chúng vẫn chưa ăn được xương và không thể ăn quá nhiều. Hệ tiêu hoá chưa ổn định khiến việc nạp quá nhiều thực phẩm sẽ làm chúng bị đau bụng và tiêu chảy. “Mặt xệ" chỉ nên ăn 2-3 bữa/ngày, bao gồm các thức ăn sau: cơm nhão, rau/củ/quả xay nhuyễn, thịt băm. Giai đoạn này bạn có thể cho chúng ăn thêm tôm/cua/cá...</p>
                            <p>(1.1.3)  Huấn luyện chó Pug con</p>
                           
                            <p>Đứng lên, ngồi xuống hay đi vệ sinh đúng chỗ là những bài huấn luyện cơ bản bạn cần luyện tập cho chúng giai đoạn này. Việc này giúp chúng có những phản xạ có điều kiện, dễ dàng cho việc chăm sóc cho chúng sau này.</p>
                            <p>Chú ý trong bạn cần kiên trì trong quá trình huấn luyện cho chúng, Tuyệt đối không quá cưng chiều hoặc quá khắt khe với chúng trong quá trình luyện tập, huấn luyện.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug3.jpeg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Việc huấn luyện chó Pug con đòi hỏi sự kiên trì</a></div>
                            </div> </br></br>
                            <h3>(2) Cách nuôi chó Pug trưởng thành</h3> 
                            <h4>(2.1) Chế độ dinh dưỡng và khẩu phần ăn</h4> 
                            <p>Chế độ dinh dưỡng:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Protein: chiếm khoảng 20-25%. Thường có nhiều trong thịt, cá, nội tạng động vật.</p>
                                <p>- Chất béo: chiếm khoảng 10-15%. Thường có sẵn trong thịt, không cần cung cấp thêm.</p>
                                <p>- Tinh bột: chiếm khoảng 10-15%. Thường có trong cơm, khoai tây, khoai lang…</p>
                                <p>- Chất xơ, canxi, vitamin và các khoáng chất khác: còn lại. Có trong rau/củ/quả, tôm/cua/ngao/…</p>
                        
                            </div><br><br><br><br><br><br><br>
                            
                            <p>Chó Pug trong giai đoạn này rất dễ bị béo phì, vì vậy bạn cần kiểm soát khối lượng thức ăn cho chó bởi chúng rất phàm ăn, cho ăn bao nhiêu hết bấy nhiêu. Thông thường, chỉ cần cho Pug ăn 2 bữa/ngày. Theo các nhà nghiên cứu, một chú chó Pug trưởng thành cần nạp lượng thức ăn từ 3 đến 4% trọng lượng cơ thể. Ví dụ: nếu cún cưng nhà bạn nặng khoảng 8kg thì mỗi bữa ăn khoảng 200g thức ăn.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug4.jpeg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Pug trưởng thành cần nạp lượng thức ăn tương đương 3-4% trọng lượng cơ thể</a></div>
                            </div> </br></br>
                            <h4>(2.2)  Cách huấn luyện</h4> 
                            <p>Theo khuyến cáo từ các chuyên gia, bạn nên huấn luyện chó Pug từ khi chúng còn nhỏ. Khi đã huấn luyện chúng biết nghe lời và hiểu một số mệnh lệnh cơ bản thì giai đoạn này chỉ cần luyện tập thêm một số bài tập nhẹ để tăng cường sức khỏe. </p>
                            <p>Bạn nên cho chúng ra ngoài tập thể dục hoặc đi dạo tối thiểu từ 15 đến 20 phút mỗi ngày. Giống chó này bản chất rất lười biếng, chúng có thể chỉ ăn và ngủ cả ngày. Vậy nên việc kích thích chúng vận động để tránh béo phì và khỏe mạnh hơn. Một số trò chơi kích thích vận động như: đuổi bắt, ném gậy, bắt bóng… </p>
                            <p>Bạn không nên cho chúng luyện tập các bài tập nặng như: kéo lốp, chạy bền hay nâng tạ,… Chó Pug có sức bền kém, chúng rất nhanh mệt và cũng không phải giống chó lao động nên nếu ép chúng luyện tập nặng sẽ khiến chúng bị nôn mửa, khó thở.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug5.jpeg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó Pug trưởng thành nên được vận động tối thiểu 15-20 phút mỗi ngày</a></div>
                            </div> </br></br>
                            <h2>(3)  Cách nuôi chó Pug trong thời kỳ sinh sản</h2>                        
                            <h4>(3.1)  Dấu hiệu nhận biết chó Pug mang thai</h4> 
                            <p>Những tuần đầu tiên của thai kỳ, thông thường, chó Pug mẹ sẽ có biểu hiện gì khác thường. Phải đến sau 9 tuần, chó mẹ mới có các biểu hiện rõ rệt ra ngoài. Các đặc điểm thường thấy như: bầu vú nở hơn, có tiết dịch màu trắng, hơi nhầy, phần eo và phần hông của chúng phình to hơn, kích cỡ bụng cũng to lên.</p>
                            <p>Tuy nhiên, những biểu hiện trên chỉ là đánh giá khách quan. Tốt nhất sau khi cho chúng phối giống từ 1 đến 2 tuần, bạn nên đưa Pug đến các cơ sở thú y để được các bác sĩ ở đây kiểm tra và đánh giá, kết luận cho chính xác nhất.</p>
                            <h4>(3.2)  Cách nuôi chó Pug khi mang thai</h4> 
                            <p>Không khác gì con người, giai đoạn mang thai là giai đoạn cả chó mẹ và chó con trong bụng cần được chủ nhân quan tâm và theo dõi chặt chẽ. Điều đầu tiên mà bạn cần chú ý trong cách nuôi chó mặt xệ trong giai đoạn này là chế độ dinh dưỡng cung cấp vào cơ thể chúng thông qua các khẩu phần ăn hàng ngày. Vì lúc này chất dinh dưỡng sẽ cung cấp cho cả mẹ và con nên khẩu phần ăn hàng ngày sẽ cần chọn lọc kỹ càng hơn. Bạn có thể cho cún cưng của mình ăn từ 150-200g thịt (bò/gà/lợn nạc) cùng 1 quả trứng gà và sữa tươi.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug6.jpeg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó pug giai đoạn mang thai cần được chú ý chế độ dinh dưỡng</a></div>
                            </div> </br></br>
                            <p>Trong những giai đoạn đầu của thai kỳ, bạn có thể cho “mặt xệ" ăn 3 bữa/ngày. Khẩu phần ăn sẽ tăng dần thành 4 bữa/ngày. Khoảng cách giữa các bữa ăn từ 3 đến 4 tiếng. Trong giai đoạn này, “ăn chín uống sôi" là điều nhất nhất phải tuân thủ. Ngoài ra bạn nên cho chó Pug mẹ tiêm phòng thai kỳ và khám thai định kỳ, đầy đủ tại các cơ sở khám/chữa bệnh thú y uy tín.</p>
                            <h4>(3.3)  Cách nuôi chó Pug mới sinh</h4> 
                            <p>Thời gian mang thai trung bình của chó Pug giao động từ 65 đến 70 ngày. Điều này còn tuỳ thuộc vào việc chúng mang thai nhiều con hay ít con. Bạn cần ghi chép chính xác và cẩn thận từ ngày cho chó Pug đi phối giống. Cũng như thời gian bắt đầu có những biểu hiện thai kỳ để dự đoán được ngày dự sinh của chúng. Khi chúng sắp sinh thường sẽ có một số dấu hiệu như: rên rỉ (do đau đớn), hô hấp nhanh, bỏ ăn khoảng 1 ngày, đi lại tìm ổ/chỗ đẻ,…</p>
                            <p>Nếu như cún cưng của bạn xuất hiện những dấu hiệu trên. Bạn nên sắp xếp và vệ sinh sạch sẽ chỗ đẻ cho chúng. Khu vực đẻ cần kín đáo và ấm áp. Ngay khi chó Pug mẹ chuyển dạ, tốt nhất bạn nên gọi ngay bác sĩ thú y đến hỗ trợ phòng trường hợp khó sinh xảy ra. Thông thường trong trường hợp khi chó Pug mẹ chuyển dạ từ 1 đến 1,5 tiếng mà vẫn chưa sinh, bác sĩ thú y sẽ tiến hành mổ đẻ để đảm bảo an toàn cho cả chó mẹ và chó con.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/pug7.jpeg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Chó pug mới sinh cần được bú mẹ sớm nhất</a></div>
                            </div> </br></br>
                            <p>Sau khi chúng sinh xong, chó mẹ cần được vệ sinh sạch sẽ, lúc này bạn nên cho chúng uống một chút sữa ấm. Bạn cũng nên cho chó con bú mẹ sớm nhất có thể để chúng tăng khả năng đề kháng từ những giọt sữa non đầu tiên. </p>
                            <p>Thực đơn của chó “mặt xệ" sau khi mới sinh chủ yếu là cháo thịt băm cùng sữa ấm, từ 4 đến 5 bữa một ngày. Trong tháng đầu tiên, chó Pug con cần được bú mẹ hoàn toàn. Chúng có thể sẵn sàng đến với chủ mới sau 2 tháng tuổi.</p>
                            <p>Vậy là trên đây Petroom đã chia sẻ với bạn các thông tin tổng hợp về cách nuôi chó Pug đúng phương pháp và hiệu quả. Nếu còn bất kì băn khoăn nào đừng ngại liên hệ với chúng tôi để được hỗ trợ nhé. Petroom rất vui nếu được chia sẻ cùng bạn những khoảnh khắc đáng yêu của cún cưng ngay bên dưới bài viết này nhé!</p>
                            </br></br>
                        </div>    
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
	@include('frontend.footer')
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>