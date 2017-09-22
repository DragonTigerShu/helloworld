
function picPlay(Imgs,Dots/*,prevBtn,nextBtn*/){
	var n=0;											//索引值	
	var auto_time=5000;             					//设定自动轮播间隔时间
	var firstChildCon=Imgs.find('li:first-child').html();
	Imgs.append('<li>'+firstChildCon+'</li>');    //复制第一个元素插入到最后
	var oLi=Imgs.children('li');

	Imgs.css('width',oLi.length*100+"%");   //计算出所有图片总宽度

	var img_w=1/(oLi.length);              
	oLi.css('width',img_w*100+"%");		///计算出每张图片的宽度所占的百分比
	function nextPic(){
		if(n == -oLi.length+1){
			n=0;
			Imgs.css({'left':n*100+"%"});
		}
		n--;
		Imgs.animate({'left':n*100+"%"},500)
		Dots.find('li').eq(-n).addClass('active').siblings().removeClass('active');
		if(n == -oLi.length+1){
			
			Dots.find('li').eq(0).addClass('active').siblings().removeClass('active');
		}
	}
	function prevPic(){
		if(n == 0){
			n = -oLi.length+1;
			Imgs.css({'left':n*100+"%"});
		}
		n++;
		Imgs.animate({'left':n*100+"%"},500)
		Dots.find('li').eq(-n).addClass('active').siblings().removeClass('active');
	}
	
	var t=setInterval(function(){
		nextPic();
	},auto_time);

	/*prevBtn.click(function(){
		clearInterval(t);
		t=setInterval(function(){
			nextPic();
		},auto_time);
		prevPic();
	})
	nextBtn.click(function(){
		clearInterval(t);
		t=setInterval(function(){
			nextPic();
		},auto_time);
		nextPic();
	})*/
	Imgs.on("swipeRight",function(){
		clearInterval(t);
		prevPic();
		t=setInterval(function(){
			nextPic();
		},auto_time);
		
	})
	Imgs.on("swipeLeft",function(){
		clearInterval(t);
		nextPic();
		t=setInterval(function(){
			nextPic();
		},auto_time);
	})
	Dots.find('li').click(function(){
		clearInterval(t);
		n=$(this).index();
		
		$(this).addClass("active").siblings().removeClass("active");
		Imgs.animate({'left':-n*100+"%"},500)
		t=setInterval(function(){
			nextPic();
		},auto_time);
		n=-n;
	});
	/*Dots.find('li').mouseover(function(){
		clearInterval(t);
		n=$(this).index();
		console.log(n);
		$(this).addClass("active").siblings().removeClass("active");
		Imgs.animate({'left':-n*100+"%"},500)
		t=setInterval(function(){
			nextPic();
		},auto_time);
		n=-n;
	})*/
}