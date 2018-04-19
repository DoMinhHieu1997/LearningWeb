<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="learn1.css">
	<script>
		$(document).ready(function(){
			$("body").css({"margin":"0px","width":"100%"});
			$(".wrap").append(
				$("<div>").addClass('top').append(
					$("<img>",{src:"http://www.tlu.edu.vn/dhtl/images/front/logo.png"}).addClass('imgtop')
				),
				$("<div>").addClass('slider').append(
					$("<div>",{class:"slide"}).addClass('imgslider').append(
						[
							"http://www.tlu.edu.vn/Portals/0/Images/2018/doithoai.png",
							"http://www.tlu.edu.vn/Portals/0/Images/2017/bia7.jpg"
						].map(function(v,i){
							return $("<li>",{class:"slide1"}).css({
								background: "url("+v+")",
								backgroundSize: "cover",
								width: "100%",
								height: "100%",
								backgroundPosition:"center",
								backgroundRepeat:"none",
								display: "inline-block",
							})
						})
					),
					$("<div>",{class:"onslide"}).append(
						$("<i>",{class:"fa fa-home"}),
						// $("<div>",{class:"pl-6"}).append(
						["Giới Thiệu","Tin Tức & Thông Báo","Tuyển Sinh","Đào Tạo","Sinh Viên","Đối Ngoại","Khoa Học Công Nghệ","Liên Hệ"
						].map(function(v,i){
							return $("<div>",{text:v,class:"m-xanh onsl"}).append(
								$("<div>",{class:"po dn"}).append(
									[[" >> Tổng Quan"," >> Cơ Sở Vật chất"],[" >> Tin Tức"," >> Thông Báo"],[" >> Đại Học"," >> Cao Đẳng"],[" >> Chính Quy"," >> Vừa Làm Vừa Học"],[" >> Hoạt Động"," >> Hỗ Trợ"],[" >> Chương Trình Quốc Tế"," >> Dự Án Quốc Tế"],[" >> Tin KHCN"," >> Hội Nghị & Hội Thảo"],[]][i].map(function(a,b){
									return $("<div>",{class:"bb"}).append(
											$("<div>",{class:"pr",text:a}),
											$("<div>",{class:"af"})
										)
									})
								)
							)
						})//
						// )
					),		
					$("<div>",{class:"prev nut-sl m-trang"}).append(
						$("<i>",{class:"fa fa-chevron-circle-left"})
					),
					$("<div>",{class:"next nut-sl m-trang"}).append(
						$("<i>",{class:"fa fa-chevron-circle-right"})
					),
										// $("<img>",{src:"http://www.tlu.edu.vn/Portals/0/Images/2018/doithoai.png"}).addClass('imgslider')
					// $("<img>",{src:""+a[i]+""}).addClass('imgslider')
					//
					// var i, alength; 
					// var a=["http://www.tlu.edu.vn/Portals/0/Images/2018/doithoai.png","http://www.tlu.edu.vn/Portals/0/Images/2017/bia7.jpg"];
					// alength = a.length;
				),
				$("<div>").addClass('panel').append(
					$("<div>").addClass('smallpanel').append(
						[
							{img:"http://www.tlu.edu.vn/portals/0/Images/2018/Quality-Assurance.jpg",t:"Đảm bảo chất lượng"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/www.jpg",t:"Khoa, Viện"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/2017/gear_box.jpg",t:"Việc làm"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/thuVien.jpg",t:"Thư viện"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/email.jpg",t:"TLU Mail"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/Wru-email.jpg",t:"WRU Mail"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/lichcongtac.jpg",t:"Lịch công tác"},
							{img:"http://www.tlu.edu.vn/portals/0/Images/1/dangky.jpg",t:"Đăng ký học"},
						].map(function(v,i){
							return $("<div>").append(
										$("<img>",{src:v.img}).addClass('imglicss'),
										$("<div>",{text:v.t}).css({"color":"#a90000"})
									).addClass('licss')
						}),
						$("<hr>").css({"color":"#ddd"}),
						$("<h1>",{text:"Tin Tức"}).addClass('textlicss')
					)
				),
				$("<div>").addClass('new').append(
					$("<div>").addClass('new1').append(
						$("<div>").addClass('new2'),
						$("<div>").addClass('new3')
					)//kt new1
				),//kt new
				$("<div>").addClass('td').append(
					$("<div>").addClass('td1').append(
						$("<h1>",{text:"Tiêu Điểm"}).addClass('textlicss')
					)//kt td1
				),//kt td
				$("<div>").addClass('new4').append(
					$("<div>").addClass('new1')//kt new1
				),//kt new
				$("<div>").addClass('footertop').append(
					$("<span>",{text:"©  2018   - Trường đại học Thủy Lợi"}).addClass('spanfooter')
				),//kt footertop
				$("<div>").addClass('footermiddle').append(
					$("<div>").addClass('footermiddle1').append(
						$("<div>").addClass(''),//
						$("<div>").addClass('footerdiv').append(
							$("<div>",{text:"TRƯỜNG ĐẠI HỌC THỦY LỢI"}),
							$("<div>",{text:"Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI."}),
							$("<div>",{text:"Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351"}),
							$("<div>",{text:"phonghcth@tlu.edu.vn"}),
							$("<hr>",{class:"hrf"}),
							$("<br>"),
							$("<div>",{text:"TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2"}),
							$("<div>",{text:"Địa chỉ : Số 2 - Đường Trường Sa - P.17 - Q.Bình Thạnh - Tp.Hồ Chí Minh"}),
							$("<div>",{text:"Điện thoại: (84)028.38 400 532 - Fax: (84)028.38 400542"}),
							$("<div>",{text:"cs2@tlu.edu.vn"}),
							),//
						$("<div>").addClass('footerdiv').append(
							$("<div>",{text:"TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2"}),
							$("<div>",{text:"Phường An Thạnh - TX Thuận An - Tỉnh Bình Dương"}),
							$("<div>",{text:"Điện thoại: (84).650.3748 620"}),
							$("<div>",{text:"Fax:(84).650.3833 489"}),
							$("<hr>",{class:"hrf"}),
							$("<br>"),
							$("<div>",{text:"TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2"}),
							$("<div>",{text:"Địa chỉ : Số 2 - Đường Trường Sa - P.17 - Q.Bình Thạnh - Tp.Hồ Chí Minh"}),
							$("<div>",{text:"Điện thoại: (84)028.38 400 532 - Fax: (84)028.38 400542"}),
							$("<div>",{text:" trungtamdh2@tlu.edu.vn"}),
						)//
					)//kt footermiddle1
				)//kt footermiddle
			);
			//kt wrap
			chay = function(){
				interval = setInterval(function(){
					$(".next").click()
						},3000)
			};
			dung = function(){
				clearInterval(interval);
			};
			$(".slide1").on("mouseenter",function(){
				dung();
			});
			$(".slide1").on("mouseleave",function(){
				chay();
			});
			chay();
			$(".slide1:first").addClass('dang');
			$(".nut-sl").on("click",function(){
				var a=$(this),
					b=a.hasClass("next"),
					tiep = b? $(".dang").next() : $(".dang").prev();
				if(!tiep.length)
				{
					(b? $(".slide1:first").appendTo(".slide"):$(".slide1:last").prependTo(".slide")).addClass("dang").siblings().removeClass("dang");
					$(".slide").scrollLeft((b? $(".slide1").length - 2 : 1) * $(".slide1").width());
				};
				$(".slide").animate({
					scrollLeft:(b? "+=" : "-=")+ $(".slide").width()
				});
				tiep.addClass("dang").siblings().removeClass("dang");	
			});//kt function slide
			$(".onsl").on("mouseenter",function(){
				$(this).children().addClass('onslc').show();
			});
			$(".onsl").on("mouseleave",function(){
				$(this).children().hide();
			})
		})
	</script>
</head>
<body>
	<div class="wrap"></div>
</body>
</html>