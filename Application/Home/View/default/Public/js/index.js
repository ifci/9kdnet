
$(function() {
	$('.flexslider').hover(function() {			//幻灯片左右按钮显示隐藏
		$('.flex-direction-nav li a.prev,.flex-direction-nav li a.next').stop(true,true).show();
	},function(){
		$('.flex-direction-nav li a.prev,.flex-direction-nav li a.next').stop(true,true).hide();
	})
	$(".diamond li").hover(function(){
		$(this).addClass('diamond_on').siblings().removeClass('diamond_on');
	})
	$(".nav li:first").css('margin-left', '0');
	$(".cont_ty21 li:first").css('margin-left', '0');
	$(".cont_ty29 li:first").css('margin-left', '0');
	$(".cont_ty32 li:first").css('margin-left', '0');
	$(".service_ul li:first").css('margin-left', '0');
	$(".cont_ty44 li:nth-child(5n+1)").css('margin-left', '1px');
	$(".cont_ty45 li:last").css('width', '6%');
	$(".introduction_ty5 li:first").css('margin-left', '10px');
	$(".introduction_ty9 li:first").css('margin-left','0');
	$(".introduction_ty12 li:first").css('margin-left','0');
	$(".kvideo_ty12 li:eq(0),.kvideo_ty12 li:eq(1)").css('margin-top','0');
	$(".kvideo_ty12 li:nth-child(2n+1)").css('margin-left','0');
	$(".nav2 li:first").css('border-top', 'none');
	$(".nav li").hover(function(){
		$(this).children('.nav2').stop(true).fadeToggle();
		})
	$(".introduction_ty21").each(function() {
		$(this).children('li').first().css('margin-left','0');
	});
	$(".introduction_ty9 li").each(function() {
		$(this).children('.introduction_ty11').first().css('border-top', 'none');
	});
	$(".introduction_ty12 li").each(function() {
		$(this).children('p').first().css('border-top', 'none');
	});

	var city_gt = $(".city_ul li:gt(0)")
	city_gt.hide();
	$(".city_ul li").click(function(event){
		city_gt.toggle();
		event.stopPropagation();
	})
	$(document).click(function(event){
		city_gt.hide();
	})
	$(".xyfx li").hide();
	$(".xyfx li:first").show();
	$(".cont_ty29 li").click(function(){
		var tindex = $(this).index();
		$(".xyfx li").eq(tindex).fadeIn().siblings().hide();
	})
	function ckdx(){
		var ckkd = $(document.body)[0].clientWidth;
		var ckmin = $(".main_mid").width();
		var mainkd=Math.floor((ckkd-ckmin)/2)+"px";
		var mainkd2=Math.floor((ckkd-ckmin)/2)-2+"px";
		$(".main_left").width(mainkd);
		$(".main_right").width(mainkd2);
	}
	run();
	var interval;
	function run() {  
		interval = setInterval(ckdx, 100); 
	}
	var int;
	var img1 = "<img src='images/jkd_20.png' class='tcircle' />";
	var img2 = "<img src='images/jkd_21.png' class='tcircle' />";
	$(".introduction_ty5 li").hover(function() {
		$(this).children('.introduction_ty6').children('.tcircle').remove();
		$(this).children('.introduction_ty6').append(img2);
		var rotation2 = function (abc){
		   abc.rotate({
		      angle:0, 
		      animateTo:360, 
		      // callback: rotation2,
		      easing: function (x,t,b,c,d){
		          return c*(t/d)+b;
		      }
	   		});
		}
		var aaa = $(this).children('.introduction_ty6').children('.tcircle');
		rotation2(aaa);
		int = setInterval(function(){
			rotation2(aaa);
		},1000)
	},function(){
		$(this).children('.introduction_ty6').children('.tcircle').remove();
		$(this).children('.introduction_ty6').append(img1);
		clearTimeout(int);
	})
	$(".kvideo_ty13 li").hover(function() {
		$(this).addClass('kvideo_ty25').siblings('li').removeClass('kvideo_ty25');
		$(this).children('.kvideo_ty21').stop(true).animate({height: '+=85px','padding-top':'10px',width:'270px','margin-left': '-10px'}, 800).addClass('kvideo_ty24');
		$(this).children().children('.kvideo_ty22').stop(true).animate({top: '10px'},500);
	}, function() {
		$(this).children('.kvideo_ty21').stop(true).animate({height: '155px','padding-top':'0px',width:'250px','margin-left': '0px'}, 300).removeClass('kvideo_ty24');
		$(this).children().children('.kvideo_ty22').stop(true).animate({top: '0px'},300);
	});
	var int2;
	var rotation3;
	var angle = 0;
	$(".kvideo_ty12 li .kvplayer,.kvideo_ty3 .kvplayer").hover(function() {
		var aaa = $(this).children('a').children('.kvplayer_a').children('.kvplayer_c');
		int2 = setInterval(function(){
			angle+=5;
			aaa.rotate(angle);
		},50);
	},function(){
		clearTimeout(int2);
	})
	$(".album .album_i").hover(function() {
		var album_src = $(this).children('img').attr('src');
		// $(this).parent().siblings('.album_l').children('img').attr('src', album_src);
		$(this).parent().siblings('.album_l').children('img').attr('src', album_src).fadeIn();
	});
});
$(window).scroll(function() {
	if($(window).scrollTop()>=540){
		$(".scrollnav").addClass("rnfix");
	}else{
		$(".scrollnav").removeClass("rnfix");
	} 
});	

