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
					<h2>Giới Thiệu Thông Tin Về Những Chú Mèo Cưng</h2>
					{{-- <ul class="text-left">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <a href="{{URL::to('/gioithieus')}}"><span> // </span>gioithieu</a>
						<a><span> // </span>meo</a>
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
            <li class="active"><a href="#MunchKin" data-toggle="tab">MunchKin</a></li>
            <li><a href="#MeoLongNgan" data-toggle="tab">MeoLongNgan</a></li>
            <li><a href="#MeoLongDai" data-toggle="tab">MeoLongDai</a></li>
            <li><a href="#meoxiem" data-toggle="tab">meoxiem</a></li>
            
        </ul>
    </div>
    <div class="container">
         <div class="row">
            <div class="tab-content ">
            <div class="tab-pane fade  active in" id="MunchKin" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc mèo MunchKin</h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Mèo Munchkin là một giống mèo khá mới từ Mỹ. Chính vì thế, Munchkin còn khá mới lạ ở Việt Nam. Đối với những người yêu mèo, Munchkin cat rất được yêu thích, ưa chuộng bởi 4 chân ngắn chũn chĩn với khuôn mặt tròn ngây thơ vô cùng. Trong bài viết này, Petroom sẽ đề cập rõ hơn về nguồn gốc, cách nuôi và một số lưu ý khi chăm sóc cũng như mức giá bán hiện nay của giống mèo này để bạn có thể tham khảo.</p>
                            </p>  
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Mèo Munchkin chân ngắn đáng yêu - Nguồn gốc, cách nuôi và giá bán</a></div>
                            </div>
                           
                        </br></br>
                        <h2>(1) Nguồn gốc giống mèo Munchkin</h2> 
                            <p>Nhắc đến Munchkin, người ta nghĩ ngay đến những chú mèo bụ bẫm với 4 chân ngắn “một mẩu” đốn tim bất kỳ ai yêu mèo. Giống mèo này có nguồn gốc từ nước Mỹ, được phát hiện cách đây chưa lâu nên còn khá mới mẻ với nhiều người. Người ta tìm thấy những chú Munchkin cat đầu tiên vào những năm 40 của thế kỷ trước. Thế nhưng, loài mèo này đã biến mất trong khoảng thời gian của thế chiến thứ hai và mãi cho đến năm 1983, người Mỹ mới tìm lại được chúng. Mèo Munchkin được nuôi và chăm sóc đặc biệt tại bang Louisiana của Hoa Kỳ trước khi chúng được công bố rộng rãi toàn thế giới vào năm 1991. Do đó, Munchkin phát triển như một giống mèo đặc chủng của Louisiana. </p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nguồn gốc mèo Munchkin từ Mỹ</a></div>
                            </div>
                           
                        </br></br>
                            <p>Tiêu chí để đánh giá mèo Munchkin thuần chủng chủ yếu nằm ở 4 chân. Chân của Munchkin cực kỳ ngắn, phổ biến chỉ khoảng 7.5cm. Và dù có bộ lông ngắn hay lông dài thì vẫn được coi là Munchkin cat thuần chủng nếu chúng có 4 chân ngắn “lũn chũn”. Một điểm rất đặc biệt của giống mèo này nữa đó chính là tên gọi. Tên Munchkin thực chất xuất phát từ một nhân vật nổi tiếng được rất nhiều trẻ em yêu mến trong bộ truyện phù thủy xứ Oz. Sau này, bộ truyện này đã được chuyển thể thành phim. Bên cạnh đó, mèo Munchkin còn được gọi với một số cái tên khác cũng rất đáng yêu như:  Dachshund, Wiener hay Mini. </p>
                            
                        
                        <h2>(2) Đặc điểm ngoại hình và tính cách của mèo Munchkin</h2> 
                        <p>Do có ngoại hình cực kỳ dễ thương, mèo Munchkin ngày càng được biết đến rộng rãi hơn và nhiều người yêu mèo ở Việt Nam cũng đang săn đón gắt gao giống mèo này để nuôi làm thú cưng trong nhà. Để nhận biết và có thể phân biệt được mèo Munchkin thuần chủng, trước hết chúng ta cần tìm hiểu những đặc điểm nổi bật về ngoại hình cũng như tính cách của chúng nhé.</p>
                        <br>
                        <h4>(2.1) Những đặc điểm về ngoại hình mèo Munchkin</h4> 

                            <p>Những người đã từng nuôi mèo Munchkin nói vui rằng những chú mèo này nổi bật với đôi chân ngắn cũn, dáng đi “điệu chảy nước” và cực kỳ “õng ẹo”. Chính những đặc điểm đáng yêu ấy đã đốn tim bao người và khiến Munchkin cat trở thành một trong những giống mèo được yêu thích nhất trên thế giới. </p>
                            <p>Về kích thước cơ thể, mèo Munchkin thường có chiều dài gấp khoảng 2.5 lần so với chiều cao của cơ thể. Cùng với đó, cân nặng của một chú Munchkin trưởng thành cũng chỉ dao động trong khoảng từ 3 đến 5 kg. Một đặc điểm chỉ có ở mèo Munchkin đó chính là 4 chân của chúng luôn giữ ở trạng thái khum khum, không bao giờ duỗi thẳng. Lúc mèo Munchkin di chuyển, nhìn đôi chân ngắn của chúng cứ như đang nhún nhảy, dáng đi điệu đà, õng ẹo dễ thương vô cùng. </p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin3.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Mèo Munchkin chân ngắn đáng yêu</a></div>
                            </div></br></br>
                            <p>Không chỉ có dáng người bụ bẫm với 4 chân chũn chĩn đáng yêu mà khuôn mặt bầu bĩnh của Munchkin cũng là đặc điểm khiến bất kỳ ai cũng muốn cưng nựng, yêu thương. Khuôn mặt của Munchkin cat tròn xoe, đôi mắt long lanh, lúc nào cũng “ngây thơ vô số tội”, ánh mắt tựa như biết nói, chính điều ấy đã giúp giống mèo này chiếm được cảm tình của nhiều người ngay từ cái nhìn đầu tiên. </p>
                            <p>Về bộ lông, như đã đề cập ở trên, dù lông ngắn hay lông dài thì cũng đều được coi là thuần chủng và tiêu chí đánh giá quan trọng nhất chính là đôi chân ngắn. Nhìn chung Munchkin có khá nhiều màu lông. Trong đó phổ biến nhất vẫn là những màu lông như: trắng, đen, vàng, kem, xám, socola. Phần lông đuôi bao giờ cũng dài hơn một chút so với lông ở những bộ phận khác. Bộ lông dày mềm mại chính là đặc điểm giúp điều chỉnh thân nhiệt, giữ cho Munchkin sống khỏe mạnh trong môi trường dù có điều kiện khắc nghiệt. </p>
                           
                           
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin4.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Khuôn mặt “ngây thơ vô số tội”</a></div>
                            </div></br></br>
                            <h4>(2.2) Đặc điểm về tính cách mèo Munchkin</h4> 
                            <p>Cũng giống như ngoại hình, tính cách mèo Munchkin vô cùng dễ thương khiến những người yêu mèo phải “tan chảy”. Đặc điểm chung về tính cách của mèo Munchkin là khá tinh nghịch, lém lỉnh, lúc nào cũng vui tươi nhưng cũng không kém phần ngọt ngào, nũng nịu với chủ nhân. </p>
                            <p>Theo đánh giá của nhiều người, Munchkin cat còn là giống mèo có tính cách rất tốt, hiền lành, dễ tính, thông minh và sống tình cảm nhất so với những giống mèo cảnh phổ biến hiện nay. Điều này thể hiện rõ qua sự yêu thương chúng dành cho chủ nhân, lúc nào cũng quấn quýt, muốn được cưng nựng, âu yếm. Và đặc biệt, những chú Munchkin cực kỳ hòa đồng, dễ gần với các em nhỏ. Do đó, bạn có thể hoàn toàn yên tâm nếu để trẻ chơi cùng với giống mèo này.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin5.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Munchkin cat thông minh, thân thiện</a></div>
                            </div></br></br>
                            <p>Bên cạnh đó, do có đặc điểm 4 chân rất ngắn, mèo Munchkin cũng không quá nghịch ngợm quậy phá, không nhảy, bật lên cao hay chạy nhảy nhiều nên khi nuôi Munchkin trong nhà bạn sẽ cảm thấy rất thoải mái nhưng cũng không kém phần vui nhộn. Nhìn chung, Munchkin là giống mèo vui vẻ, thông minh, thân thiện và khá ngoan nên rất phù hợp để nuôi mọi gia đình, ngay cả những gia đình có bé nhỏ cũng có thể mua mèo Munchkin về làm thú cưng. </p>
                            <h2>(3)  Giá mèo Munchkin - Tiêu chí quyết định giá bán mèo Munchkin</h2> 
                            <p>Là một giống mèo đáng yêu, được nhiều người yêu thích, săn đón và cũng chưa xuất hiện quá nhiều ở Việt Nam, do đó, giá mèo Munchkin tương đối cao. Thông thường, một chú Munchkin thuần chủng có mức giá thấp nhất cũng dao động từ khoảng từ 15 triệu. </p>
                            <h4>(3.1) Một số tiêu chí quyết định mức giá mèo Munchkin</h4> 
                            <p>Giá mèo Munchkin dao động từ 15 triệu cho đến 40-50 triệu đồng. Vậy, dựa vào những tiêu chí nào mà giá bán của giống mèo này lại có nhiều phân khúc như vậy? Điều này phụ thuộc vào giới tính, gia phả bố mẹ, ngoại hình,... Cụ thể:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Giới tính là một trong những tiêu chí ảnh hưởng đến giá mèo Munchkin. Thông thường, giá bán mèo Munchkin cái sẽ cao hơn so với mèo đực một chút. Nguyên nhân là nếu mua mèo cái, chủ nhân có thể dùng chính chú mèo đó để nhân giống, cho ra những đàn Munchkin con.</p> 
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin6.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Giá bán mèo Munchkin</a></div>
                            </div></br></br>
                            <p>- Không để sẵn thức ăn trong chuồng cho chó Husky. Bạn cần cho tập cho chúng thói quen ăn uống đúng giờ. Đồng thời, phải thường xuyên vệ sinh bát ăn khay uống của chó Husky.</p>
                                <p>- Bạn giảm bữa ăn của chó Husky trưởng thành xuống 2-3 bữa/ 1 ngày thì đồng thời phải tăng lượng thức ăn lên để phù hợp với độ tuổi. Tránh tình trạng giữ nguyên lượng thức ăn cũ khiến chó Husky có thể bị đói.</p>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <p>Thông thường, yếu tố quan trọng và ảnh hưởng nhiều nhất đến giá bán mèo Munchkin đó là nguồn gốc, gia phả. Do tiêu chí này mà mức giá của Munchkin cat sẽ có sự chênh lệch rõ rệt, còn những tiêu chí khác thường không ảnh hưởng quá lớn đến mức giá. Chính vì thế, Petroom sẽ cập nhật đến bạn giá Munchkin thuần chủng chia theo nguồn gốc để bạn tham khảo, nếu đang có nhu cầu mua mèo Munchkin. </p>
                           
                            <h4>(3.2) Mèo Munchkin nhân giống trong nước</h4> 
                            <p>Nguồn cung, bán mèo Munchkin nhân giống trong nước có mức giá hợp lý, phù hợp với túi tiền của đa số khách hàng. Trung bình, giá mua mèo Munchkin thuần chủng xuất xứ tại Việt Nam sẽ có mức giá dao động từ 15 đến 20 triệu đồng. Nhìn chung, những chú chó này có bố mẹ bình thường, đều sinh ra trong nước và không có nhiều đặc điểm nổi trội về ngoại hình hay tính cách. </p>
                            <p>Cùng với đó, tùy thuộc vào ngoại hình, màu lông và sức khỏe mà giá mèo Munchkin có thể sẽ cao hơn một chút. Những chú mèo bình thường sẽ có giá thấp nhất khoảng 15 triệu, theo đó thì nếu sức khỏe tốt hơn hay ngoại hình nổi trội hơn thì giá sẽ cao hơn đến 20 triệu đồng. Tuy nhiên, do chưa thực sự phổ biến nên nguồn cung, bán mèo Munchkin trong nước còn khá ít. </p>
                            
                            <h4>(3.3) Mèo Munchkin nhập khẩu</h4> 
                            <p>Do nguồn cung mèo Munchkin trong nước còn khá hạn chế hoặc những người thực sự yêu thích loài mèo này, muốn mua mèo Munchkin thuần chủng nhất, gia phả chất lượng thì có thể lựa chọn mèo nhập khẩu. Thông thường mèo Munchkin nhập sẽ có nguồn gốc từ Châu Âu. Tuy rằng giống mèo này khá phổ biến ở thị trường nước ngoài nhưng do các chi phí vận chuyển, chứng thực không hề rẻ nên giá mèo Munchkin nhập khẩu theo đó cũng rất cao.</p>
                            <p>Thông thường, mua mèo Munchkin nhập khẩu Châu Âu sẽ có mức giá dao động từ 40 đến 50 triệu đồng. Tuy mức giá cao nhưng bạn có thể hoàn toàn yên tâm về chú mèo sẽ có sức khỏe, ngoại hình lẫn tính cách nổi trội, có giấy tờ chứng thực đảm bảo. .</p>
                            <h2>(4)  Cách nuôi, chăm sóc mèo Munchkin</h2>
                            <h4>(4.1) Mèo Munchkin ăn gì?</h4> 
                            <p>Mèo Munchkin có sở thích ăn những loại thức ăn giàu protein, lipid,... ví dụ như thức ăn từ thịt, cá,... Tuy nhiên, để chúng có thể phát triển tốt nhất, bạn nên xây dựng cho Munchkin một chế độ ăn khoa học, cân bằng giữa chất béo, chất đạm với lượng vitamin từ rau củ. Một số lưu ý khi lựa chọn thức ăn cho mèo Munchkin theo giai đoạn tuổi như sau:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>- Mèo Munchkin dưới từ 1 đến 2 tháng tuổi: Đây là giai đoạn Munchkin đã bắt đầu có răng và có thể ăn thức ăn ngoài sữa mẹ. Bạn có thể kết hợp cho chúng uống sữa ngoài, ăn các loại thức ăn mềm như nội tạng, gan, cháo,...</p>
                            
                                <p>- Munchkin từ 2 tháng đến 1 năm tuổi: Lúc này, mèo Munchkin đang có sự phát triển mạnh mẽ về hệ thống xương, bộ lông, các cơ,... Do đó, bạn cần có chế độ ăn giàu dinh dưỡng, chứa nhiều đạm. Đồng thời cũng cần bổ sung thêm vitamin từ rau củ để chúng phát triển toàn diện.…</p>
                                <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin7.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Thức ăn cho mèo Munchkin</a></div>
                            </div></br></br>
                                <p>- Mèo Munchkin trên 1 tuổi: Ở giai đoạn trên 1 tuổi, mèo Munchkin đã phát triển cơ thể tương đối hoàn thiện. Vì thế, bạn nên bổ sung dinh dưỡng một cách cân bằng, đủ chất, nên bổ sung thêm nhiều vitamin từ các loại rau củ. </p>
                                
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <h4>(4.2) Cách chăm sóc mèo Munchkin</h4> 
                            <p>Do bản tính mèo Munchkin khá hiền lành, không chạy nhảy phá phách nên việc chăm sóc chúng cũng tương đối dễ dàng. Nhìn chung, quan trọng nhất khi nuôi mèo Munchkin đó là chăm sóc bộ lông. Lợi thế là giống mèo này lông không quá dài, ôm sát cơ thể nên ít rụng và chăm sóc cũng nhẹ nhàng hơn. </p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/munchkin8.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Lưu ý khi chăm sóc</a></div>
                            </div></br></br>
                            <p>Bạn nên thường xuyên chải lông cho Munchkin bằng lược chuyên dụng, thi thoảng đưa chúng đi cắt tỉa lông nếu cần thiết hoặc nếu trời quá nóng. Bên cạnh đó, chú ý vệ sinh các khu vực hốc mắt, tai,... do các khu vực này mèo không tự làm sạch được, dễ tích tụ vi khuẩn, chất bẩn gây bệnh. Khi tắm cho mèo Munchkin, tuyệt đối không ngâm nước lâu, chúng sẽ dễ bị ốm. Bạn có thể sử dụng các loại sữa tắm dành riêng cho mèo để đảm bảo chăm sóc bộ lông của chúng mềm mượt nhất, đồng thời không làm ảnh hưởng đến làn da yếu ớt. Nên xả nước nhẹ nhàng, tránh dội vào đầu để không làm Munchkin sợ hãi, hoảng loạn. Cuối cùng, sau khi tắm sạch cần lau khô và sấy khô ngay nhé!</p>
                            </br></br>
                        </div>    
                    </div>
                </div>
                <div class="tab-pane    in" id="MeoLongNgan" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc mèo Lông Ngắn</h3>
                        <div class="mx-4 p-2  " >
                            
                            <p class="bg-secondary text-light  ">
                        <p class="text-center ">Mèo Anh lông ngắn có tên gọi tắt là mèo Aln, là giống mèo cổ nhất thế giới hiện nay. Xuất hiện vào khoảng năm 100 sau công nguyên, từ khi người La Mã tiến hành khai phá và xâm chiếm các hòn đảo thuộc Vương Quốc Anh. Trong quá trình xâm chiếm họ đã mang theo chú mèo Aln theo.</p>
                            </p>   
                           
                            <p>Không chỉ sinh sống và phát triển rất tốt ở Anh Quốc, mèo Anh lông ngắn còn được nuôi để làm thú cưng trong rất nhiều các gia đình quý tộc ở Anh. Nhưng kể từ khi mèo Ba Tư có mặt tại Anh nói riêng và các nước châu Âu nói chung, mèo Anh lông ngắn dẫn bị “thất sủng’. Số lượng mèo Aln theo đó cũng giảm dần theo thời gian.</p>
                           <p>Sau thế chiến thứ nhất, mèo lông ngắn Anh gần như bị tuyệt chủng. Cho đến những năm 60, các nhà lai tạo mới thực hiện thành công việc tạo ra một chú mèo Anh lông ngắn thuần chủng. Kết quả này đã được Hiệp hội mèo Mỹ (CFA) và Hiệp hội mèo Quốc Tế (TICA) công nhận</p>
                           <p>Mèo lông ngắn Anh có mặt tại Việt Nam vào cuối năm 2008 và cho đến nay giống mèo này được rất nhiều người yêu thích. Do số lượng mèo Aln không nhiều nên giá của các chú mèo này vẫn rất đắt đỏ, từ khoảng 4.5-8 triệu đồng/con. Cách chăm sóc mèo Aln cũng gặp nhiều khó khăn do sự khác biệt về khí hậu của Việt Nam với Anh quốc.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongngan1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Mèo Anh lông ngắn là giống mèo cổ nhất thế giới hiện nay</a></div>
                            </div></br></br>
                          <h4>Các loại thức ăn cho mèo Anh lông ngắn phát triển tốt nhất</h4>
                           <p>Về vấn đề thức ăn cho mèo Anh lông ngắn, bạn có thể kết hợp cả hai hình thức là cho mèo ăn thức ăn đóng hộp được chế biến sẵn hoặc tự mua thực phẩm tươi về cho mèo Aln ăn. Bạn cũng có thể kết hợp cả hai loại thức ăn này để thay đổi khẩu vị cho các chú mèo Aln ăn ngon miệng hơn. Cụ thể:</p>
                           <a>Thức ăn chế biến sẵn cho mèo Anh lông ngắn</a>
                           <p>Có khá nhiều sản phẩm thức ăn chế biến sẵn dành riêng cho các chú mèo như: Me-o, Royal Canin, Whiskas, Nutri Source Weight Management, Cat Eye Kitten & Cat, Home Cat, O’fresh – Cat care, Whiskas tuna…  Đây đều là những thương hiệu nổi tiếng trên thế giới, chất lượng của các sản phẩm đều đã vượt qua những kiểm định của các cơ quan, tổ chức uy tín nên bạn có thể hoàn toàn yên tâm mua về cho chú mèo của mình ăn.Để mua được các loại thức ăn chế biến sẵn dành riêng cho mèo, bạn nên tìm đến các cửa hàng bán đồ ăn cho thú cưng uy tín và có tiếng trên thị trường. Tuy nhiên, giá cả sẽ là một vấn đề khiến bạn phải băn khoăn đắn đo xem nên mua thức ăn sẵn cho mèo hay không. So với việc tự mua thực phẩm tươi về nấu cho mèo Aln thì mua thức ăn sẵn tốn kém chi phí hơn rất nhiều.</p>
                           <p>Ưu điểm lớn nhất của thức ăn chế biến sẵn cho mèo đó là giúp tiết kiệm thời gian và công sức cho mèo ăn. Mèo vẫn được cung cấp đủ các chất dinh dưỡng cần thiết để phát triển. Thức ăn đóng hộp dành cho mèo cũng rất đa dạng, có nhiều loại khác nhau, từ khô đến cứng, từ ướt đến mềm nên phù hợp với các chú mèo Anh lông ngắn ở từng độ tuổi khác nhau.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongngan2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Thức ăn đóng hộp, chế biến sẵn dành riêng cho mèo</a></div>
                            </div></br></br>
                           <a>Thức ăn cho mèo Anh lông ngắn tự nấu</a>
                            <p>Nếu bạn có thời gian thì đừng ngại ngần đi chợ mua thực phẩm tươi về nấu cho các chú mèo Anh lông ngắn ăn nhé. 

Thịt bò, thịt gà, thịt vịt, thịt lợn, cá, tôm… là những thức ăn phù hợp và tốt nhất cho các chú mèo Aln. Bên cạnh đó, rau củ quả cung cấp chất xơ và vitamin cũng là những thức ăn cần thiết giúp các chú mèo tăng đề kháng, cải thiện hệ miễn dịch, tiêu hóa và hấp thụ thức ăn tốt hơn để luôn khỏe mạnh. Nếu các chú mèo lười ăn rau, bạn hãy xay nhỏ rau sau đó trộn với thịt rồi cho chúng ăn.</p>
                           <p>Để hạn chế tình trạng mèo Anh lông ngắn bị béo phì do ăn uống quá nhiều và lười vận động, bạn nên hạn chế cho chúng ăn cơm nhé. Việc ăn cơm quá nhiều, quá thường xuyên và liên tục sẽ khiến cân nặng của các chú mẹo tăng lên chóng mặt đấy.</p>
                           <p>Ưu điểm của việc tự nấu ăn cho mèo Anh lông ngắn đó là tiết kiệm được khá nhiều chi phí so với việc mua thức ăn sẵn, thực phẩm tươi ngon hương vị hấp dẫn hơn. Hạn chế lớn nhất của hình thức tự chế biến thức ăn cho mèo đó là tốn thời gian. Nếu công việc của bạn quá bận rộn thì đây thực sự là một nhiệm vụ bất khả thi. Bên cạnh đó, việc phải cân đối dinh dưỡng, các dưỡng chất trong mỗi bữa ăn hàng ngày để giúp mèo phát triển toàn diện, không bị béo phì cũng không phải dễ dàng.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongngan3.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Mèo Anh lông ngắn rất thích ăn thịt</a></div>
                            </div></br></br>
                           <p>Bạn có thể lựa chọn một trong 2 hình thức ăn uống trên. Nhưng tốt hơn cả là nên kết hợp cả 2 loại thức ăn đóng hộp và tự nấu cho mèo Anh lông ngắn. Lúc bận rộn bạn có thể cho mèo ăn thức ăn chế biến sẵn; còn lúc rảnh rối có thời gian bạn có thể mua đồ ăn về chế biến cho chúng. Việc thay đổi mùi vị món ăn thường xuyên cũng giúp các chú mèo Anh lông ngắn ăn ngon miệng hơn đấy.</p>
                           <h4>Mèo Anh lông ngắn không nên ăn gì?</h4>
                           <p>Bên cạnh những thức ăn cho mèo Anh lông ngắn tốt thì có một số loại thức ăn nguy hiểm mèo Aln không nên ăn như:

Khoai tây sống: Lá và vỏ khoai tây chứa hóa chất độc hại có thể gây độc cho mèo. Hệ thống tiêu hóa và dạ dày là 2 bộ phận sẽ bị ảnh hưởng đầu tiên nếu bạn cho mèo Aln ăn khoai tây.

Tỏi và hành tây: Đây là 2 loại thức ăn tối kỵ với mèo. Chỉ cần ăn hành tây và tỏi với lượng nhỏ các chú mèo sẽ bị suy nhược, nôn mửa, tiêu chảy, thiếu máu thậm chí là tử vong.</p>
                           <p>Trứng sống: Không chỉ chứa nhiều vi khuẩn gây bệnh, trứng sống còn chứa avidin gây cản trở hấp thu vitamin B, gây ảnh hưởng nghiêm trọng tới sức khỏe của mèo Aln.

Thịt và cá sống: Mèo Anh lông ngắn có thể bị ngộ độc khi ăn thịt sống và cá sống. Do vậy hãy nấu chín thịt và cá để loại bỏ các vi khuẩn gây hại cho sức khỏe của mèo bạn nhé.</p>
                           <p>Cá hồi: Chú mèo cũng thích ăn cá. Nhưng cá hồi thì tuyệt đối không nên cho các chú mèo ăn bạn nhé. Hàm lượng chất béo lớn cùng với thủy ngân trong cá hồi có thể gây hại đến các chú mèo Aln của bạn.

Thức ăn của chó: Nhu cầu dinh dưỡng của mèo và chó là hoàn toàn khác nhau. Nếu để mèo ăn thức ăn của chó trong thời gian dài mèo sẽ bị thiếu chất dẫn tới nhiều bệnh lý phức tạp.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongngan4.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Không nên cho mèo Anh lông ngắn ăn trứng sống</a></div>
                            </div></br></br>
<p>Thức ăn cho mèo Anh lông ngắn không quá khác biệt so với các giống mèo khác nên bạn hoàn toàn có thể tìm mua các loại thức ăn mà chúng ưa thích tại các cửa hàng, siêu thị hoặc các khu chợ. Tình yêu cùng với sự am hiểu về chế độ ăn uống cũng như cách chăm sóc chính là bí quyết giúp các chú mèo Anh lông ngắn của bạn lớn nhanh và luôn khỏe mạnh.</p>
</br></br>
                        </div>    
                    </div>
                </div>
                    <div class="tab-pane in" id="MeoLongDai" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc Mèo Lông Dài</h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Mèo Anh lông dài bắt đầu xuất hiện ở Việt Nam vào năm 2009 đã tạo ra cơn sốt vô cùng lớn với cộng đồng người yêu mèo. Ngoại hình dễ thương, tính cách thân thiện, gần gũi đã “đốn tim” biết bao nhiêu người. Tuy nhiên, vì đây là giống mèo có nguồn gốc từ nước ngoài nên cách chăm sóc mèo Anh lông dài cũng gặp rất nhiều khó khăn. Đặc biệt với những bạn nuôi mèo Anh lông dài lai qua nhiều đời và giống mèo khác nhau còn gặp nhiều vấn đề hơn nữa. Đừng lo lắng, đón đọc ngay những chia sẻ về cách chăm sóc mèo Anh lông dài ngay trong bài viết dưới đây.</p>
                            </p>  
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai1.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Cách chăm sóc mèo Anh lông dài</a></div>
                            </div> </br></br>
                            <h2>(1)  Mèo Anh lông dài đến từ đâu?</h2> 
                            <p>Mèo Anh lông dài hay còn gọi là mèo Ald là sản phẩm con lai của mèo Anh lông ngắn và giống mèo Ba Tư. Phép lai xảy ra vì mèo Anh lông ngắn từng đứng trước bờ vực tuyệt chủng, trong khi đây là giống mèo quý và có giá trị cao. Ngay lúc đó, sự xuất hiện của mèo Ba Tư tại châu Âu đã cứu nguy tình trạng này. Mèo Anh lông ngắn được cho lai với rất nhiều giống mèo thuần chủng khác nhau và cuối cùng mèo Ba Tư thuần chủng được chọn. Cũng vì được lai như vậy nên cách chăm sóc mèo Anh lông dài cũng chịu ảnh hưởng không nhỏ từ cách nuôi mèo Anh lông ngắn và mèo Ba Tư..</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai2.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Tổ tiên của mèo Anh lông dài là mèo Ba Tư và mèo Anh lông ngắn</a></div>
                            </div> </br></br>
                            <p>TICA đã công nhận mèo Anh lông dài là giống mèo độc lập nhưng CFA không chấp nhận điều này, chỉ coi như một nhánh nhỏ của mèo Anh lông ngắn thuần chủng.</p>
                            <h2>(2)  Những đặc điểm của mèo Anh lông dài</h2> 
                           <p>Để nắm được cách chăm sóc mèo Anh lông dài phát triển tốt nhất, trước hết chúng ta cần tìm hiểu kỹ về những đặc điểm ngoại hình, tính cách của chúng nhé!</p>
                           <h4>(2.1)  Những đặc điểm của mèo Anh lông dài</h4> 
                           <p>Vẻ ngoài của mèo Anh lông dài rất nổi bật, có phần khác biệt so với nhiều giống mèo khác. Chúng có bộ lông dài mềm mại, phần lông ở đuôi rất dày. Thân hình chắc nịch nhưng mềm mại, dáng đi uyển chuyển, linh hoạt. Mèo Anh lông dài gây xuyến xao với đôi mắt tròn xoe như hòn bi ve lúc nào cũng mở to ngây ngô. Khuôn mặt giống mèo này tròn trĩnh, bầu bĩnh khác hẳn với mèo nhà mặt dài.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai3.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Nét xinh xắn đáng yêu của mèo Anh lông dài</a></div>
                            </div> </br></br>
                           <p>Chân của mèo Ald không dài, nhưng bù lại rất săn chắc. Những bước đi bình thường chậm rãi, thướt tha nhưng trong trường hợp cần tốc độ và khả năng leo trèo thì mèo Anh lông dài không thua kém gì những “vận động viên điền kinh” mèo nhà.</p>
                           <p>Đặc điểm được coi là đắt giá nhất trên cơ thể giống mèo này chính là bộ lông của chúng. Nó không chỉ bóng bẩy, mượt mà mà còn có nhiều màu sắc như trắng, đen, tím hoa cà, nâu vàng, đỏ,… Tuy nhiên xám xanh vẫn là màu xuất hiện nhiều nhất ở giống mèo này. Ngoài ra, có những chú mèo Ald xuất hiện màu lông pha trộn 2, 3 màu với nhau, có khoang hoặc lốm đốm hoa tiêu.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai4.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Bộ lông dài, dày của mèo Aldn</a></div>
                            </div> </br></br>
                           <p>Bộ lông dày vừa khiến chúng trở nên hấp dẫn, vừa bảo vệ cơ thể khỏi thời tiết lạnh giá khắc nghiệt nhưng cũng gây không ít khó khăn cho những người mới nuôi mèo, chưa nắm rõ cách chăm sóc mèo Anh lông dài.</p>
                           <h4>(2.2)  Về tính cách</h4> 
                           <p>Mèo Anh lông dài rất hiền lành, thân thiện và quấn quýt chủ. Khi còn nhỏ chúng tỏ ra rất tinh nghịch, hiếu động cũng rất dễ làm quen với con người. Bạn sẽ dễ dàng kết thân với mèo Ald nhỏ.</p>
                           <p>Một đặc điểm đáng quý của mèo Anh lông dài là khả năng tự chơi một mình, thích độc lập khi lớn lên. Nếu bạn bận rộn không có thời gian nhiều để chơi với chúng thì mèo Ald cũng tự tìm những thú vui chơi riêng, không gây sự chú ý bằng cách phá phách, nghịch ngợm. Nhờ vậy mà cách nuôi mèo Anh lông dài không còn quá phức tạp nữa.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai5.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Càng lớn, mèo Anh lông dài càng trầm tính</a></div>
                            </div> </br></br>
                            <h4>(2.3)  Tuổi thọ trung bình</h4> 
                            <p>Một lý do nữa mà nhiều người thích nuôi mèo Anh lông dài đó là tuổi thọ trung bình của loài này khá cao, từ 10 - 15 năm. Nhưng nếu biết cách chăm sóc mèo Anh lông dài tốt thì tuổi thọ trung bình có thể lên tới 20 năm.</p>
                            <h4>(2.4)  Tuổi thọ trung bình</h4> 
                           <p>Nhờ vào khẩu phần ăn và cách nuôi mèo Anh lông dài hợp lý, cân nặng của loài này được xếp vào hàng khủng. Cân nặng của con cái là 5 – 6 kg, con đực là 8kg và những con non mới sinh có thể nặng tới 1kg. Trong khi đó những con mèo bình thường chỉ nặng từ 3 – 4 kg.</p>
                           <h2>(3)  Cách chăm sóc mèo Anh lông dài tốt nhất</h2> 
                           <p>Cách chăm sóc mèo Anh lông dài tốt nhất</p>
                           <h4>(3.1)  Chế độ dinh dưỡng cho mèo Anh lông dài</h4> 
                           <p>Tương tự như cách nuôi mèo Anh lông ngắn, những chú mèo Ald có thể ăn uống những loại thức ăn cho mèo từ đóng hộp cho đến tự chế biến. Tuy nhiên, đồ ăn cho mèo Anh lông dài cần phải được đảm bảo vệ sinh an toàn thực phẩm, có nguồn gốc xuất xứ rõ ràng và tránh những món nguy hiểm cho đường ruột của mèo như sữa tươi có đường, socola, đồ lên men,…</p>

                           <p>Bạn có thể bổ sung một số chất sau cho mèo Ald:</p>
                           <div class="col-sm-10 text-break centerBlock ">
                                <p>- Protein:  có trong thịt gà, thịt bò, cá, pate,… trộn cùng với</p> 
                                <p>- Vitamin, chất xơ: bổ sung thông qua các loại rau củ quả, phomai, đồ ăn khô,...</p> 
                              
                            </div><br><br><br><br>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai6.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Thịt bò rất tốt cho mèo Anh lông dài</a></div>
                            </div> </br></br>
                           <p>Tuy nhiên hạt thức ăn sẵn nên được hạn chế vì dễ gây các bệnh về thận cho mèo. Không chỉ mèo Ald mà loài mèo nói chung không nhận thức được việc phải uống nước đầy đủ. Cách chăm sóc mèo Anh lông dài tốt nhất là bạn nên đặt bát nước ngay cạnh chỗ ăn của chúng và thay nước liên tục.</p>
                           <h4>(3.2)  Phân bổ khẩu phần ăn của mèo Anh lông dài</h4>
                           <p>Mèo Anh lông dài khi béo trông vô cùng dễ thương, khuôn mặt mũm mĩm xinh xắn. Tuy nhiên các bác sĩ thú ý cho biết, những chú mèo Ald béo phì sẽ có tuổi thọ giảm đi còn 2/3 so với bình thường. Vì thế, khẩu phần ăn của mèo Anh lông dài nên được phân bổ như sau: chia nhỏ thành 4 – 5 bữa/ngày nhưng lượng thức ăn ít đi. Tạo cho chúng thói quen ăn uống đúng giờ, không ăn vào buổi tối.</p>
                           <h4>(3.3)  Chăm sóc mèo Anh lông dài với chế độ vận động</h4>
                           <p>Loài mèo này nổi tiếng làm biếng khi lớn lên, lười vận động giống như những chú mèo Ba Tư. Vì thế sức đề kháng của mèo Anh lông dài không tốt, dễ mắc các bệnh về hệ tim mạch, béo phì, thận,… Phòng bệnh hơn chữa bệnh, cách nuôi mèo Anh lông dài đem lại ích lợi tốt nhất cho chúng chính là thường xuyên đưa mèo ra ngoài đi dạo, cho chơi với các món đồ chơi như cần câu mèo, bóng tròn, cuộn len.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai7.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Cho mèo tham gia nhiều hoạt động vui chơi, đi dạo để tránh tình trạng béo phì</a></div>
                            </div> </br></br>
                            <h4>(3.4)  Chăm sóc lông cho mèo Anh lông dài</h4>
                            <p>Khi nuôi mèo Ald bạn sẽ phải chấp nhận có những khoảng thời gian rụng lông của mèo. Để hạn chế tình trạng này bạn nên chải lông thường xuyên cho mèo, gỡ những chỗ bết, rối và tắm rửa khoảng 1 lần/tuần. Nếu mèo rụng lông đi kèm với các biểu hiện khác lại như da mẩn đỏ, sưng tấy,… cần đem ngay đến cơ sở chăm sóc chó mèo gần nhất để được thăm khám.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai8.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Lông mèo là phần cần được chăm sóc thường xuyên nhất</a></div>
                            </div> </br></br>
                            <h4>(3.5)  Chăm sóc lông cho mèo Anh lông dài</h4>
                            <p>Những vị trí như tai, mũi, miệng hay kẽ chân mèo khó tiếp xúc để làm sạch. Bạn cần thường xuyên rửa mũi, tai cho mèo để tránh có vi khuẩn xấu bám vào gây hại cho hệ hô hấp của mèo. Dùng khăn mềm lau sạch rỉ lâu ngày và nước đọng lại sau khi tắm cho mèo. Sử dụng kem tẩy mảng bám trên răng của mèo, hạn chế tình trạng mùi hôi phát ra từ miệng. Sử dụng bông tăm có tẩm dung dịch vệ sinh tai dành riêng cho mèo.</p>
                             <h4>(3.6)  Chăm sóc lông cho mèo Anh lông dài</h4>
                             <p>Không chỉ mèo Ald thuần chủng mà những chú mèo Anh lông dài lai đều phải được tiêm phòng đầy đủ, định kỳ 1 lần/năm. Với những chú mèo nhỏ cần phải tiêm trước khi chúng bước sang 1 tuổi. Các mũi tiêm sẽ là: phòng bệnh dại, 4 bệnh thường gặp ở mèo. Mèo Anh lông dài lai cần được để ý và chăm nuôi đặc biệt hơn vì hầu như chúng không mang gen trội nên dễ bị ốm hơn.</p>
                             <h4>(3.7)  Chăm sóc lông cho mèo Anh lông dài</h4>
                           <p>Khi có ý định phối giống mèo Anh lông dài, bạn cần chuẩn bị cả tiền bạc lẫn thời gian. Để cho ra được mèo con mang tính trạng thuần chủng bạn sẽ tốn một khoản tiền kha khá lên tới cả chục triệu đồng cho một lần lấy giống con đực. Sau đó cũng cần tìm hiểu cách chăm sóc mèo Anh lông dài khi sinh nở, những bất lợi khi sinh,… Tốt hơn hết vẫn là nhờ đến sự tư vấn của các chuyên gia thú y.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meolongdai9.jpg')}}"  alt="" /> </br>  
                            <div class="pages-title-text text-center">
                            <a >Lưu ý khi phối giống mèo Anh lông dài</a></div>
                            </div> </br></br>
                           <p>Trước khi phối giống mèo Anh lông dài, cần phải đảm bảo thú cưng của bạn đủ không mắc chứng bệnh nào nghiêm trọng liên quan đến di truyền, đồng thời được tiêm phòng đầy đủ. Ngoài ra, cần phải nắm rõ gia phả của cả bố và mẹ mèo Anh lông dài, tránh trường hợp giao phối cận huyết xảy ra.</p>
                           <p>Có thể thấy cách nuôi mèo Anh lông dài cũng đơn giản như cách nuôi mèo Anh lông ngắn. Việc chăm sóc cũng không có nhiều công đoạn, chỉ cần thực hiện các bước cơ bản mà Petroom gợi ý là chú mèo của bạn sẽ luôn trong tình trạng khỏe mạnh. Nếu có thắc mắc hoặc muốn tìm hiểu thêm thông tin về những giống chó mèo khác, hãy truy cập ngay vào website của Petroom nhé!</p>
                           

                            </br></br>
                        </div>    
                    </div>
                </div>
               
                <div class="tab-pane in" id="meoxiem" >
                    <div class="col-sm-12 text-break centerBlock ">
                    <h3>Hướng Dẫn Cách Nuôi Dưỡng & Chăm Sóc mèo Xiêm </h3>
                        <div class="mx-4 p-2 " >
                            
                            <p class="bg-secondary text-light  ">
                                 <p>Mèo Xiêm thích những nơi khô ráo, ấm áp và sạch sẽ. Chúng thích được vuốt ve và nằm phơi nắng. Mặc dù có lông khá dài nhưng lông chúng rất ít khi bị rụng.

Để lông mèo Xiêm luôn mượt mà, bạn cần chải lông cho chúng thường xuyên, thi thoảng tắm để lông được sóng, sạch.</p>
                            </p>  
                           
                            <p>Chúng có thể chơi đùa với chăn bông một mình cả ngày mà không biết chán hay ườn mình ra, đón nắng sớm bình minh.</p>
                           
                            <p>Người nuôi cần phải chú ý vào sở thích này đáp ứng để đời sống tinh thần của các em mèo được tốt hơn, cảm nhận được sự quan tâm từ chủ nhân là điều khiến mèo Xiêm rất vui và sẽ đáp trả lại bằng tấm lòng trung thành, yêu thương bạn vô điều kiện.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem.jpg')}}"  alt="" /> </br>   </br>
                            </div>

                            <p>Ngoài ra, chạy nhảy hay các hoạt động mạnh làm ấm cơ thể cũng là một trong những nhu cầu cần thiết của mèo Xiêm mà người nuôi dưỡng cần phải lưu ý.</p>
                            
                            
                            <p>1 con mèo Xiêm nuôi tại Việt Nam thường rất ít bệnh bởi phù hợp thời tiết và thổ nhưỡng, đây là lợi thể đáng kể mà không phải giống mèo nào cũng có thể sở hữu.</p>
                        
                            <p>Để sở hưu một chú mèo tốt thì giá của mèo xiêm thái cũng đắt đỏ , vì vậy khi chăm sóc những bé mèo Xiêm này, các bạn cần phải lưu ý những vấn đề sau.</p>
                            <h3>Khí Hậu Nào Đối Với Mèo Xiêm Thái</h3>
                            <p>Giống mèo này thích sống ở những nơi ấm áp, thường hay cuộn mình lại hoặc nằm phơi nắng vào những buổi sáng, vô cùng thích hợp với khí hậu Việt Nam. Ngoài ra chúng còn có thể thích nghi tốt với nhiều môi trường sống khác nhau.</p>
                            <h3>Thức Ăn Nào Mèo Xiêm Thái Ưa Thích Nhất</h3>
                            <p>Cũng giống như những giống mèo khác, mèo Xiêm Thái rất ưa những thực phẩm ngọt và các món ăn phổ biến như: cá, mỡ, thịt.</p>
                           
                            <p>Đây là giống mèo khá dễ chăm và nuôi nấng. Tuy nhiên đừng vì thế mà bạn cho chúng ăn bừa bãi sẽ ảnh hưởng đến cân năng và tình trạng sức khỏe, tốt nhất là mỗi ngày phối hợp khẩu phần sao cho lượng dinh dưỡng đạm, tinh bột, protein đầy đủ..</p>
                            <p>Nên kết hợp việc tập luyện, vận động sau khi ăn khoảng 30 phút. Thông thường, những ngôi nhà chung cư có ít diện tích hẹp và không có khoảng sân vườn để các em thú cưng có thể vui chơi.</p>
                            
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem1.jpg')}}"  alt="" /></div> </br>  
                            </br>
                            
                           <p>Mèo Xiêm con sức khỏe còn yếu, nếu bạn mua 1 chú mèo Xiêm con khi vừa mới dứt sữa mẹ từ 3- 4 tháng tuổi phải chú tâm cho chúng ăn dặm khoảng thời gian đầu.</p>
                           <p>Khẩu phần ăn trong giai đoạn này có thể là thức ăn xoay nhuyễn hoặc cháo, sữa mỗi ngày ít nhất 3 bữa.</p>
                           <p>Từ 6- 7 tháng tuổi chế độ ăn cho mèo Xiêm nên hạn chế lại và cố định thời gian để các em ấy duy trì mãi thói quen ấy tận đến khi trưởng thành.</p>
                           <p>Bấy giờ khi đã khá khỏe mạnh bạn đã có thể bắt đầu cho các em ấy ăn những thức ăn nấu chín đã qua chế biến dưới dạng miếng nhỏ.</p>
                           <p>Nếu là thức ăn khô thì nên chú ý về thành phần và quan tâm đến nhà sản xuất trong lúc chọn mua, khi cho ăn nên kèm với sữa tươi để thức ăn mềm và dưỡng chất đầy đủ.</p>
                           <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem2.jpg')}}"  alt="" /> </div></br>  
                           </br>
                           <h3>Cách Vệ Sinh Cho Mèo Xiêm Thái</h3>

                            <p>Lông không rụng nhiều, hàng tuần cần chải chuốt để loại bỏ đi những sợi lông chết. Cần chú ý đến việc vệ sinh mắt mũi và tai thường xuyên để tránh tình trạng nhiễm bệnh tật tại những vùng nhạy cảm.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem3.jpg')}}"  alt="" /> </div></br>  
                            </br>
                          <a>Chải lông thường xuyên</a>
                            <p>Lông của mèo Xiêm ngắn nên vấn đề rụng lông hay chăm sóc đều không đáng kể hay tốn quá nhiều thời gian.</p>
                           <p>Dù vậy hàng ngày bạn vẫn nên dùng lược chải lông chuyên dụng để chải chuốt cho các em ấy, đôi khi có thể vì mải mê chạy nhảy mà chúng bị lấm bẩn hay rối.</p>
                           <p>Loài mèo thường có bản tính sạch sẽ, chúng ưa vệ sinh và thường ghét sự dơ bẩn. Chính vì vậy mà nếu để ý thì hành động né những vũng nước bẩn hay liếm láp cơ thể từ đầu tới chân đều là minh chứng cho tính cách này.</p>
                           <p>Bên cạnh việc vệ sinh lông cho mèo, bạn cần chú ý đến việc vệ sinh tai, mắt, miệng và mũi cho mèo để tránh mèo bị các bệnh ngoài da hoặc nhiễm trùng nhé.</p>
                           <div class="col-12 text-center">
                           <img src="{{('public/frontend/images/meoxiem6.jpg')}}"  alt="" /></div> </br>  
                            </br>
                           <a>Tắm rửa định kỳ cho mèo</a>
                            <p>Hốc mắt là nơi thường xuyên hứng những giọt nước mắt hàng ngày của mèo sau mỗi buổi sáng thức dậy, nếu để lâu vùng lông sẽ trở nên khô cứng và khó làm sạch dẫn đến viêm nhiễm và 1 số bệnh về mắt.</p>
                            <p>Tương tự như vậy, tai hay mũi cũng của mèo cũng gặp trường hợp tương tự đó là khó làm sạch. Vậy chúng ta nên giúp chúng vệ sinh bằng cách nào?</p>
                            <p>Hàng ngày hoặc mỗi tuần đều đặn từ 2- 3 lần nếu bạn là người không có thời gian, hãy dùng khăn ấm lau nhẹ nhàng vết bẩn giúp các em ấy. Tuyệt đối cẩn thận và không được làm mạnh ở vùng tai.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem4.jpg')}}"  alt="" /></div></br>  
                            </br>
                            <a>Cắt tỉa móng chân cho mèo Xiêm</a>
                            <p>Vấn đề tắm và cắt móng chân cho mèo Xiêm không cầu kỳ như ở 1 số giống khác, nhờ vào bộ lông ngắn nên chúng khá sạch sẽ.</p>

                            <p>Tuy vậy, bạn vẫn nên dẫn các em ấy đi tắm bằng xà phòng chuyên dụng đều đặn 1 tuần 1 lần hoặc có thể thưa hơn.</p>
                            <p>Thói quen này phải được hình thành ngay khi các em ấy vẫn còn đang trong độ tuổi nhỏ khoảng 6- 7 tháng tuổi, nếu để trưởng thành mới huấn luyện thì sẽ khó khăn và gặp sự cự tuyệt quyết liệt.</p>
                            <p>Móng chân của mèo Xiêm không nên để quá dài tránh tình trạng các em ấy cào xước những vật dụng trong nhà hay làm tổn thương trẻ nhỏ. Để bảo đảm an toàn và tăng tính thẩm mỹ, nên dẫn mèo Xiêm đến các tiệm spa mỗi tháng 1 lần.</p>
                            <div class="col-12 text-center">
                            <img src="{{('public/frontend/images/meoxiem5.jpg')}}"  alt="" /></div> </br>  
                            </br> 
                            <a>Những Bệnh Mà Mèo Xiêm Thường Gặp Phải</a>
                            <p>Mèo Xiêm rất dễ bị một số chứng bệnh về gan bệnh hen suyễn cùng với một số khuyết tật tim bẩm sinh nên bạn cần phải đưa chúng đến bác sĩ thú y kiểm tra định kỳ.</p>
                            <p>Kinh nghiệm:</p>
                            <div class="col-sm-10 text-break centerBlock ">
                                <p>-  Loài mèo này có thể sống đến 20 năm.</p> 
                                <p>- Chúng thích nghi với môi trường tốt và nhanh chóng hòa nhập với các giống mèo khác..</p> 
                              
                            </div><br><br><br><br>
                            <p>Hi vọng với những thông tin chia sẻ hôm nay đã giúp bạn có thêm kinh nghiệm hay về cách nhận biết các đặc điểm, cách nuôi giống mèo Xiêm một cách chuẩn xác nhất.</p>
                            <br><br>
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