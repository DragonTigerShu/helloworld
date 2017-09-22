(function ($) {
    $(function () {
        $('.index-head').height(window.innerHeight)
        //轮播图start
		function next(dotsActive,UlImgs,dotsLi,elseText) {
			var v_width=$(window).width();
            var index = dotsActive.index();
            var nextIndex = index + 1 >= UlImgs.find('li').length+1 ? 0 : index + 1;
			if(nextIndex==UlImgs.find('li').length){
				return;
			}
            dotsLi.eq(nextIndex).addClass("active").siblings().removeClass("active");
            UlImgs.animate({left:-nextIndex * v_width},500);
			elseText.animate({left:-nextIndex * v_width},500);
        }
        function prev(dotsActive,UlImgs,dotsLi,elseText) {
			var v_width=$(window).width();
            var index = dotsActive.index();
            var prevIndex = index - 1 < -1 ? UlImgs.find('li').length-1 : index - 1;
			if(prevIndex==-1){
				return;
			}
            dotsLi.eq(prevIndex).addClass("active").siblings().removeClass("active");
			UlImgs.animate({left:-prevIndex * v_width},500);
			elseText.animate({left:-prevIndex * v_width},500);
        }
		$(".team .dots li").click(function(){
			var v_width=$(window).width();
			var index=$(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".team .members").animate({left:-index * v_width},500);
			$(".team-inf .inf").animate({left:-index * v_width},500);
		})
       
        //手势向右滑动
        $(".team").on("swipeRight",function(){
            prev($(".team .dots .active"),$(".team .members"),$(".team .dots li"),$(".team-inf .inf"));
        });
        //手势向左滑动
        $(".team").on("swipeLeft",function(){
            next($(".team .dots .active"),$(".team .members"),$(".team .dots li"),$(".team-inf .inf"));
        });
		
		//手势向右滑动        //////规格
		$(".specif .color-tab").on("swipeRight",function(){
			prev($(".specif .color-tab .dots ul li.active"),$(".specif .color-tab .pics "),$(".specif .color-tab .dots li"));
		});
		//手势向左滑动
		$(".specif .color-tab").on("swipeLeft",function(){
			next($(".specif .color-tab .dots ul li.active"),$(".specif .color-tab .pics"),$(".specif .color-tab .dots li"));
		});  
		$(".specif .color-tab .dots ul li").click(function(){
			var v_width=$(window).width();
			var index=$(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".specif .color-tab .pics").animate({left:-index * v_width},500);
		})
		
		
	
       
		function nextMem() {
			var v_width=$(window).width();
            var index = $(".about .members-pics .dots .active").index();
            var nextIndex = index + 1 >= 4 ? 0 : index + 1;
			if(nextIndex==3){
				return;
			}
            $(".about .members-pics .dots ul li").eq(nextIndex).addClass("active").siblings().removeClass("active");
            $(".about .members-pics .imgs").animate({left:-nextIndex * v_width},500);
			
			
        }
        function prevMem() {
			var v_width=$(window).width();
            var index = $(".about .members-pics .dots .active").index();
            var prevIndex = index - 1 < -1 ? 3 : index - 1;
			if(prevIndex==-1){
				return;
			}
            $(".about .members-pics .dots ul li").eq(prevIndex).addClass("active").siblings().removeClass("active");
            $(".about .members-pics .imgs").animate({left:-prevIndex * v_width},500);
        }
			$(".about .members-pics .dots ul li").click(function(){
				var v_width=$(window).width();
				var index=$(this).index();
				$(this).addClass("active").siblings().removeClass("active");
				$(".about .members-pics .imgs").animate({left:-index * v_width},500);
			})
		$(".about .members-pics").on("swipeRight",function(){
            prevMem();
        });
        //手势向左滑动
        $('.about .members-pics').on("swipeLeft",function(){
            nextMem();
        });
        //轮播图end

    });
})(Zepto);