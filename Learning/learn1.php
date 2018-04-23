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
						$("<i>",{class:"fa fa-home cb"}),
						$("<div>",{class:"pl-6"}).append(
						["Giới Thiệu","Tin Tức & Thông Báo","Tuyển Sinh","Đào Tạo","Sinh Viên","Đối Ngoại","Khoa Học Công Nghệ","Liên Hệ"
						].map(function(v,i){
							return $("<div>",{text:v,class:"m-xanh onsl"}).append(
								$("<div>",{class:"po dn"}).append(
									[[" >> Tổng Quan"," >> Cơ Sở Vật chất"],[" >> Tin Tức"," >> Thông Báo"],[" >> Đại Học"," >> Cao Đẳng"],[" >> Chính Quy"," >> Vừa Làm Vừa Học"],[" >> Hoạt Động"," >> Hỗ Trợ"],[" >> Chương Trình Quốc Tế"," >> Dự Án Quốc Tế"],[" >> Tin KHCN"," >> Hội Nghị & Hội Thảo"],[]][i].map(function(a,b){
									return $("<div>",{class:"bb"}).append(
											$("<div>",{class:"pr onsls",text:a}),
										)
									})
								)
							)
						})//
					)
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
				$("<div>",{class:"new"}).append(
					$("<div>",{class:"new1"}).append(
						$("<div>",{class:"new2"}).append(
							[
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNDUWhpbfR08tAW7IzkmNgg1-oDvM8L32xujCXeqyVV2QPH24e",
									t:"Đại học thủy lợi đoạt giải nhất bóng đá sinh viên "
								},
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTL2BVcvBtOfJLxUcHS2ft6e78CSCsl7Fs-dq20hbuh-I_pWcY",
									t:"Đại học thủy lợi trao giải thưởng và bằng khen cho giáo viên ưu tú"
								},
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG0oZGGEH-bzX1Qc5uoy3PvrB4tvhGJteQGTqlxU2_BbnS7Rre",
									t:"Gặp mặt giao lưu các khoa trong trường"
								},
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrdRuIxY1g3tQjqgKpnsK53ptVJ0MWcxXeAnLKKOPn--sMRNdD7A",
									t:"Đại học thủy lợi hợp tác giao lưu phát triển với Nhật Bản"
								},
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk6T1UtNBUqhywLFdCjedG0oq0dySsBwiEgeHlWkAyz9NnJ9rQ",
									t:"Gặp mặt giao lưu sinh viên các cơ sở của Đại Học Thủy Lợi"
								},
								{
									img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzK8H4BVWBaO2Pe_UJGFMLb5bzzRjZ7KqOX2ehgqLefst2MeBY",
									t:"Chung kết cuộc thi Mr and Mrs Đại học thủy lợi"
								}
							].map(function(v,i){
								return $("<div>",{class:"otin"}).append(
									$("<img>",{class:"otinanh",src:v.img}),
									$("<div>",{class:"otinchude",text:v.t})
									)
								})
							),
						$("<div>",{class:"new3"}).append(
							$("<div>",{class:"otin3",text:"Thông Báo"}),
							[
								"thông báo tuyển sinh năm học mới 2019",
								"sinh viên trao đổi",
								"họp lớp kì tháng 6 năm 2018",
								"ngày hội việc làm cho sinh viên với sự hợp tác của các doanh nghiệp",
								"Chương trinhg hợp tác với các trường đại học"
							].map(function(v,i){
								return $("<div>",{class:"otin3to"}).append(
									$("<div>",{class:"otin3span"}),
									$("<div>",{class:"otin3chude",text:v})
									)
								}),
							$("<img>",{class:"otin3img",src:"http://www.tlu.edu.vn/portals/0/Images/2018/Islt2018Banner.jpg"})
							)
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
					$("<span>",{text:"©  2018   - TRƯỜNG ĐẠI HỌC THỦY LỢI"}).addClass('spanfooter')
				),//kt footertop
				$("<div>",{class:"footermiddle"}).append(
					$("<div>",{class:"footermiddle1"}).append(
						$("<div>",{class:"footerdiv"}).append(
							$("<div>",{class:"ftsd"}).append(
								$("<div>",{class:"ftss"}).append(
									$("<img>",{src:"https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-1/p50x50/10453365_1661644284109889_130186908521712753_n.jpg?_nc_cat=0&oh=767d42913cbb546ad1470d44c02b5ed3&oe=5B62DD54"}).css({"box-shadow": "0 1px 6px rgba(0, 0, 0, .5)"}),
									$("<div>").css({"display":"inline-block","vertical-align":"top"}).append(
										$("<a>",{class:"aa gc",text:"ĐẠI HỌC THỦY LỢI",href:"https://www.facebook.com/daihocthuyloi1959/"}),
										$("<div>",{class:"ab",text:"40,245 likes"})
										),
									)
								),
							$("<div>",{class:"hw"}).append(
								$("<div>").css({})
								)
						),//
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