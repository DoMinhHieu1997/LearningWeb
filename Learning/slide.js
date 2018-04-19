	$("<div>",{class:"slide pr"}).css({
			height:"90vh",
		}).append(
			$("<div>",{class:"ông h1"}).append(
				$("<div>",{class:"ảnh wsn oh h1"}).append(
					[1,2,3].map(function(v,i){
						return $("<div>",{class:"chứa-ảnh dib vat brn wh1"}).css({
							background:"url("+"img/slide-"+v+".png"+")",
							backgroundSize:"cover",
							backgroundPosition:"center",
							backgroundRepeat:"none",
							display: "inline-block",
						}).append(
							$("<div>",{class:"nd-bt wh1"}).append(
								$("<div>",{class:"khung w50 tac pr tối"}).css({
									margin:" 25px auto"
								}).append(
									$("<div>",{class:"cf fs3 text-title pt25" , text:"Modern Asset In Town"}),
									$("<div>",{class:"text-content w50 giữa"}).append(
										$("<p>",{text:"Sed ut perspiciatis unde omnis iste natus"}),
										$("<p>",{text:"error sit"})
									),
									$("<div>",{class:"t-h tac l50 giữa pa b0"}).css({
										width:"20%",
									}).append(
										$("<div>",{class:"cf text-bấm hv-trắng" , text:"tìm hiểu"})
									)	
								)
							)
						)
					})
				)
			),
			$("<div>",{class:"prev pa l0 t50 bấmĐc bd1sf z1 nút-sl ml50 ngừng tối"}).append(
				$("<i>",{class:"fa fa-arrow-left cf ứ"})
			),
			$("<div>",{class:"next pa t50 bấmĐc bd1sf z1 r0 nút-sl mr50 ngừng tối"}).append(
				$("<i>",{class:"fa fa-arrow-right cf ứ"})
			),
			$("<div>",{class:"owl-dots r0 t50 pr15"}).css({
				position:"absolute",
			}).append(

	chạy = function(){
		Interval = setInterval(function(){
			$(".next").click();
		},3450)
	};
	dừng = function(){
		clearInterval(Interval);
	};
	$(".slide").on("mouseenter",function(){
		dừng();
	});
	$(".slide").on("mouseleave",function(){
		chạy();
	});
	chạy();
	$(".bấm").eq(0).addClass("xanh");
	$(".nút-sl").on("click",function(){
		var a = $(this),
			b = a.hasClass("next"),
			c = $(".chứa-ảnh").index();
		tiếp = b? $(".đang").next() : $(".đang").prev();
		if(!tiếp.length){
			(b? $(".chứa-ảnh:first").appendTo(".ảnh"):$(".chứa-ảnh:last").prependTo(".ảnh"))
			.addClass("đang").siblings().removeClass("đang");
			$(".ảnh").scrollLeft((b? $(".chứa-ảnh").length - 2 : 1) * $(".chứa-ảnh").width());
		};
		$(".ảnh").animate({
			scrollLeft:(b? "+=" : "-=")+ $(".ảnh").width()
		});
		tiếp.addClass("đang").siblings().removeClass("đang");
	});