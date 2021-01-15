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

<body>
@include('frontend.header')
	
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					
					{{-- <ul class="text-left">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <a href="#"><span> // </span>gioithieu</a>
						
                    </ul> --}}
                    <h2>Giới Thiệu Thông Tin PET & FRIEND</h2>
				</div>
			</div>
		</div>
	</div>
</div>
    
<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<p>
                    PET&FRIEND là thương hiệu trong lĩnh vực nhân giống, kinh doanh thú cưng và các loại phụ kiện vật nuôi của Công ty Cổ phần Dogily Việt Nam.
                    </p></br>
                    <p>
                    Khởi nguồn từ trang trại chó giống Dogily Kennel trực thuộc Hiệp hội những người nuôi chó giống tại Việt Nam từ năm 2017. Cho đến nay,  PET&FRIEND  đã phát triển mạnh mẽ với hệ thống cửa hàng, điểm giao dịch tại cả Hà nội, Tphcm, Biên Hòa, Đà Lạt, Nam Định, Gia Lai… và nhiều tỉnh thành khác trên cả nước.
                    </p>
                    <img src="{{('public/frontend/images/abbca.jpg')}}"  alt="" />
                    </br>
                    </br>
                    <p>
                    Thương hiệu Dogily bắt nguồn từ slogan “My Dog is family, my dog is not a pet” với ý nghĩa chó là thành viên trong gia đình, không chỉ là thú cưng. Từ trang trại nhân giống Dogily Kennel đầu tiên chuyên nhập khẩu và nhân giống các dòng chó cảnh cao cấp như  Alaska, Husky, Samoyed, Bulldog, Border Collie, … Từ đầu năm 2018, chúng tôi đã mở rộng sang lĩnh vực nhân giống mèo cảnh (mèo Anh lông ngắn, lông dài, ba tư, sphynx…).
                    </p>
                    </br>
                    <p>
                    Bên cạnh việc mở rộng quy mô và lĩnh vực hoạt động với mục tiêu trở thành doanh nghiệp nhân giống và kinh doanh thú cưng hàng đầu tại Việt nam. Công ty Cổ phần Dogily Việt nam cũng phát triển mạng truyền thông Dogily Social mạnh mẽ để khách hàng có thể dễ dàng tiếp cận và chọn mua với website: dogily.vn và các kênh Facebook Fanpage, Youtube, twitter, Instagram, Pinterest… và hàng chục mạng xã hội phổ biến khác.
                    </p>
                    </br>
                    <h2>Thông tin hệ thống Dogily PET&FRIEND.</h2>
                    <img src="{{('public/frontend/images/image1.jpg')}}"  alt="" />
                    </br></br>
                    <img src="{{('public/frontend/images/image2.jpeg')}}"  alt="" />
                    </br></br>
                    <img src="{{('public/frontend/images/image3.jpg')}}"  alt="" /></br>
                    <h2>Cam kết trách nhiệm.</h2>
                    <p>Dogily đang cung cấp cho các gia đình những thú cưng mà họ chưa từng gặp mặt. Đó là một trách nhiệm to lớn đòi hỏi chúng tôi phải thực hiện rất nghiêm túc. Chính vì vậy, trong nhiều năm qua chúng tôi đã sàng lọc, lựa chọn và phát triển mối quan hệ hợp tác với các nhà nhân giống chuyên nghiệp, trung thực ở cả trong và ngoài nước (Nga, Ucraina, Ba Lan, Pháp…). Từ đó có thể chọn lọc và đem đến những thú cưng có phẩm chất tốt nhất đến cho khách hàng.</p>
                    </br>
                    <p>Chúng tôi chịu trách nhiệm tiêm vắc xin đầy đủ cũng như chuẩn bị các tài liệu cần thiết và sắp xếp việc vận chuyển, kiểm tra y tế và làm thủ tục hành chính với các cơ quan, chính quyền (nếu cần) để đưa cún cưng nhanh nhất về với gia đình mới.</p>
                    </br>
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