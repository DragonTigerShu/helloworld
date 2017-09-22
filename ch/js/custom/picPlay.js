function picPlay(Imgs,Dots){
	var v_width=$(window).width();  					//获取窗口宽度
    var container=Imgs.parent();
	container.width(v_width);							//设置容器宽度
	var n=0;											//索引值	
	var oLi=Imgs.children('li');						//获取li对象
	oLi.width(v_width); 	            				//设置li宽度
	var oLi_w=oLi.width();								//获取li宽度
	var oUl_w=Imgs.width(oLi_w*oLi.length);				//设置ul宽
	var m_oUl_w=oUl_w.width()/2;       					//获取ul对象的一半的宽度
	var A_time=500;                 					//设定左右滑动动画运动时间
	var auto_time=5000;             					//设定自动轮播间隔时间
	function nextPic(){
		if(n<=-oLi.length/2){
			n=0;
			Imgs.css({'left':'0'});
		}
		n--;
		setTimeout(function(){
			Imgs.animate({left:n*oLi_w},A_time);
		},10);
		if(-n==oLi.length/2){
			Dots.find('li').eq(0).addClass('active').siblings().removeClass('active');
		}
		Dots.find('li').eq(-n).addClass('active').siblings().removeClass('active');
	}
	function prevPic(){
		if(n>=0){
			n=-oLi.length/2;
			Imgs.css('left',-m_oUl_w);
		}
		n++;
		setTimeout(function(){
			Imgs.animate({left:n*oLi_w},A_time);
		},10);
		if(-n==0){
			Dots.find('li').eq(0).addClass('active').siblings().removeClass('active');
		}
		Dots.find('li').eq(-n).addClass('active').siblings().removeClass('active');
	}
	container.on("swipeRight",function(){
		clearInterval(t);
		prevPic();
		t=setInterval(function(){
			nextPic();
		},auto_time);
	})
	container.on("swipeLeft",function(){
		clearInterval(t);
		nextPic();
		t=setInterval(function(){
			nextPic();
		},auto_time);
	})
	var t=setInterval(function(){
		nextPic();
	},auto_time);
	Dots.find('li').click(function(){
		clearInterval(t);
		n=$(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		//Imgs.animate({left:-n*oLi_w},A_time);
		Imgs.css('left',-n*oLi_w);
		t=setInterval(function(){
			nextPic();
		},auto_time);
		n=-n;
	})
}