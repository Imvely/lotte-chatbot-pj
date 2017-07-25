$(document).ready(function() {
	
	//Click event to scroll to top
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#btn_top').fadeIn();
		} else {
			$('#btn_top').fadeOut();
		}
	});	
	$('#btn_top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
    //ie 하위버젼 placeholder 대체 스크립트
    var agt = navigator.userAgent.toLowerCase();
    if (agt.indexOf("msie") != -1) {
        $('input[placeholder]').each(function(){
            var input = $(this);
            $(input).val(input.attr('placeholder'));
            $(input).css("color" , "#a9a9a9");
            $(input).focus(function(){
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
            $(input).blur(function(){
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.val(input.attr('placeholder'));
                }
            });
        });
    };

    // 각 페이지별 메인 이미지, 활성탭 제어 12.13 각 페이지별로 나눠놓음
    /*var url = location.href;
    var pageArray = ["index" , "lohbs_mobile" , "lohbs_store" , "lohbs_customer"];
    $.each(pageArray, function(i, val){
        var menu = $(".lohbsGnb ul li");
        var Mhead = $("#lohbsHead");
        var Mimg = $("#lohbsHead .lohbsMimg");       
        if (url.indexOf(val) > -1){
            if(val == "index"){
                menu.eq(0).addClass("on");
                Mimg.eq(0).css("display","block");
            }else if(val == "lohbs_mobile"){
                menu.eq(1).addClass("on");
                Mimg.eq(1).css("display","block");
            }else if(val == "lohbs_store"){
                menu.eq(2).addClass("on");
                Mimg.eq(2).css("display","block");
                Mhead.css("height","295px");
            }else{
                menu.eq(3).addClass("on");
                Mimg.eq(3).css("display","block");
                Mhead.css("height","295px");
            };
        }
    });*/

    //hover images
    $(".downJpgFile img").hover(
		function(){$(this).attr("src","images/btn/ci0_over.png");},
		function(){$(this).attr("src","images/btn/ci0.png");}
	);
	$(".downAiFile img").hover(
		function(){$(this).attr("src","images/btn/ci1_over.png");},
		function(){$(this).attr("src","images/btn/ci1.png");}
	);
	$(".recruit_pop").hover(
		function(){$(this).css("background","#1f1f20");},
		function(){$(this).css("background","#fff");}
	);
	$(".lohbsFamily img").hover(
		function(){$(this).attr("src","images/btn/btn_family_over.png");},
		function(){$(this).attr("src","images/btn/btn_family.png");}
	);
	$(".lohbsTerms ul li").hover(			
		function(){$(this).css("border","#000;");},
		function(){$(this).css("border","1px solid #b5b5b7;");}
	);
	$(".goGoogleStore img").hover(
		function(){$(this).attr("src","images/btn/googlestore_over.png");},
		function(){$(this).attr("src","images/btn/googlestore.png");}
	);
	$(".goAppStore img").hover(
		function(){$(this).attr("src","images/btn/appstore_over.png");},
		function(){$(this).attr("src","images/btn/appstore.png");}
	);
	$(".appStore img").hover(
		function(){$(this).attr("src","images/btn/app_over.png");},
		function(){$(this).attr("src","images/btn/app.png");}
	);
	$(".googleStore img").hover(
			function(){$(this).attr("src","images/btn/android_over.png");},
			function(){$(this).attr("src","images/btn/android.png");}
		);

	$(".facebook img").hover(			
		function(){$(this).fadeOut(200, function(){			
				$(this).attr("src","images/sns/s2_over.png");
				$(this).fadeIn(200);
			});
		},function(){$(this).fadeOut(200, function(){
				$(this).attr("src","images/sns/s2.png");
				$(this).fadeIn(200);
			});
		}
	);	
	$(".kakao img").hover(			
		function(){$(this).fadeOut(200, function(){			
				$(this).attr("src","images/sns/s3_over.png");
				$(this).fadeIn(200);
			});
		},function(){$(this).fadeOut(200, function(){
				$(this).attr("src","images/sns/s3.png");
				$(this).fadeIn(200);
			});
		}
	);	
	$(".insta img").hover(			
		function(){$(this).fadeOut(200, function(){			
				$(this).attr("src","images/sns/s5_over.png");
				$(this).fadeIn(200);
			});
		},function(){$(this).fadeOut(200, function(){
				$(this).attr("src","images/sns/s5.png");
				$(this).fadeIn(200);
			});
		}
	);
	$(".youtube img").hover(			
			function(){$(this).fadeOut(200, function(){			
					$(this).attr("src","images/sns/s9_over.png");
					$(this).fadeIn(200);
				});
			},function(){$(this).fadeOut(200, function(){
					$(this).attr("src","images/sns/s9.png");
					$(this).fadeIn(200);
				});
			}
	);
	$(".blog img").hover(			
		function(){$(this).fadeOut(200, function(){			
				$(this).attr("src","images/sns/s6_over.png");
				$(this).fadeIn(200);
			});
		},function(){$(this).fadeOut(200, function(){
				$(this).attr("src","images/sns/s6.png");
				$(this).fadeIn(200);
			});
		}
	);	
	$(".tvcast img").hover(			
		function(){$(this).fadeOut(200, function(){			
				$(this).attr("src","images/sns/s8_2_over.png");
				$(this).fadeIn(200);
			});
		},function(){$(this).fadeOut(200, function(){
				$(this).attr("src","images/sns/s8_2.png");
				$(this).fadeIn(200);
			});
		}
	);
	$(".lohbsFamily img").click(function(){
		$(".familyList").fadeToggle( "fast", "linear" );
	});	
	
	//popup	
	$(".recruit_pop").click(function(){
		$("body").addClass("modal-open");
		$("#popContents").css("display" , "block");
		$("#popContents").load("inc/recruite.jsp");
		$(".pop_bg").css("display" , "block");
	});
	
	$(".provision01").click(function(){
		$("body").addClass("modal-open");
		$("#popContents").css("display" , "block");
		$("#popContents").load("inc/provision01.jsp");
		$(".pop_bg").css("display" , "block");
	});
	
	$(".provision02").click(function(){
		$("body").addClass("modal-open");
		$("#popContents").css("display" , "block");
		$("#popContents").load("inc/provision02.jsp");
		$(".pop_bg").css("display" , "block");
	});
	
	$(".provision03").click(function(){
		$("body").addClass("modal-open");
		$("#popContents").css("display" , "block");
		$("#popContents").load("inc/provision03.jsp");
		$(".pop_bg").css("display" , "block");
	});
	
	$(".pop_bg").click(function(){
		$("body").removeClass("modal-open");
		$("#popContents").css("display" , "none");
		$(".pop_bg").css("display" , "none");
	});
	
	//lohbs mobile page scroll animation
	$(".mobileShop").addClass("over");
	$(window).scroll(function(){
		var scrollH = $(window).scrollTop();
		if (scrollH > 0 && scrollH < 800) {
			$(".mobileLpoint").addClass("over");
		}else if (scrollH > 800 && scrollH < 1600) {
			$(".mobileCoupon").addClass("over");
		}else if (scrollH > 1600 && scrollH < 2200) {
			$(".mobileShopping").addClass("over");
		}else if (scrollH > 2200 && scrollH < 3000) {
			$(".mobileDeal").addClass("over");
		}else if (scrollH > 3000 && scrollH < 3800) {
			$(".mobileTip").addClass("over");
		}else if (scrollH > 3800) {
			$(".mobileMap").addClass("over");
		}
    })
	
});

