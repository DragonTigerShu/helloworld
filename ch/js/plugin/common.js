(function ($) {
    $(function () {
		var slide=false;
        //菜单显示隐藏 start
		var ch=$(window).height();
        $(".navs-btn").on("click", function () {
			if($(".wrap").hasClass('moveleft')){
				$(".wrap").removeClass('moveleft');
				$(".wrap").css('height','auto');
			}else{
				$(".wrap").addClass('moveleft');
				$(".wrap").height(ch);
				slide=true;
			}
        });
		$(document).on('swipeRight',function(){
			if(slide){
				$(".wrap").removeClass('moveleft');
				$(".wrap").css('height','auto');
			};
			slide=false;
		});
		$('.footer .share a:nth-of-type(1)').click(function(){
			if($('.footer .share .we-code').hasClass('show')){
				$('.footer .share .we-code').removeClass('show');
			}else{
				$('.footer .share .we-code').addClass('show');
			}	
		})
		$(document).bind("click",function(e){
			var target = $(e.target);
			if(target.closest(".footer .share a:nth-of-type(1)").length == 0){
				$('.footer .share .we-code').removeClass('show');
			}
		})
   }); 
   //跳转首页
   $("#logo").click(function(){
   	   location.href="http://www.supersoco.com";
   })
   //var hs = parseInt($(window).height()-$(".tab").height()-$(".footer").height());
   // $(".content").css("min-height",hs+"px");
    var index =0;
    var arr =['概述','设计','性能','电驱','智能','改装','规格'];//setStorage("key",1);
    var NavArr =['首页','SOCO TC','SOCO LITE/PRO','官方商城','联系我们','公司介绍'];
    
    $(".nav-left h2").html(arr[0]);
    $(".nav-bottom").hide();
    $(".nav-left").click(function(){
    	index++;
    	if(index%2==1){
    		$(".nav-bottom").show();
    	}else{
    		$(".nav-bottom").hide();
    	}
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(1) a").html()){
          	$(".nav-bottom ul li:nth-of-type(1)").hide();
       }
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(2) a").html()){
          	$(".nav-bottom ul li:nth-of-type(2)").hide();
       }
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(3) a").html()){
          	$(".nav-bottom ul li:nth-of-type(3)").hide();
       }
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(4) a").html()){
          	$(".nav-bottom ul li:nth-of-type(4)").hide();
       }
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(5) a").html()){
          	$(".nav-bottom ul li:nth-of-type(5)").hide();
       }
       if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(6) a").html()){
          	$(".nav-bottom ul li:nth-of-type(6)").hide();
       }
        if($(".nav-left h2").html()==$(".nav-bottom ul li:nth-of-type(7) a").html()){
          	$(".nav-bottom ul li:nth-of-type(7)").hide();
       }
    });

    /**
     *点击出发事件
     */
    $(".nav-bottom-tc ul li").click(function(){
    	var index = $(this).index();
    	setStorage("index"+index,[arr[index],NavArr[1]]);
    	switch(index) {
		case 0:
		  location.href="details-tc-sum.php";
		  break;
		case 1:
		 location.href="details-tc-design.php";
		  break;
		  case 2:
		  location.href="details-tc-performance.php";
		  break;
		  case 3:
		   location.href="details-tc-drive.php";
		  break;
		  case 4:
		 location.href="details-tc-intell.php";
		   break;
		  case 5:
		 location.href="details-tc-refit.php";
		  break;
		   case 6:
		 location.href="details-tc-standard.php";
		  break;
		  default: 
		}
    });
     $(".nav-bottom-pro ul li").click(function(){
    	var index = $(this).index();
    	if(index==5){
    		setStorage("index"+index,['工艺',NavArr[2]]);
    	}else{
    		setStorage("index"+index,[arr[index],NavArr[2]]);

    	}
    	
    	switch(index) {
		case 0:
		  location.href="details-pro-sum.php";
		  break;
		case 1:
		 location.href="details-pro-design.php";
		  break;
		  case 2:
		  location.href="details-pro-performance.php";
		  break;
		  case 3:
		   location.href="details-pro-drive.php";
		  break;
		  case 4:
		 location.href="details-pro-intell.php";
		   break;
		  case 5:
		 location.href="details-pro-tech.php";
		  break;
		   case 6:
		 location.href="details-pro-standard.php";
		  break;
		  default: 
		}
    });
    $(".pro-sum>a").click(function(){
    	var index = $(this).index();

    	if(index==4){
    		setStorage("index"+(index+1),['工艺',NavArr[2]]);
    	}else{
    		setStorage("index"+(index+1),[arr[index],NavArr[2]]);
    	}
    	
    	switch(index) {
		case 0:
		   location.href="details-pro-design.php";
		   break;
		case 1:
			location.href="details-pro-performance.php";
		    break;
		  case 2:
		   location.href="details-pro-drive.php";
		   break;
		  case 3:
		  location.href="details-pro-intell.php";
		  break;
		  case 4:
		  location.href="details-pro-tech.php";
		   break;
		  default: 
		}
    });
    $(".sum-tc>div").click(function(){
    	var index = $(this).index();
    	setStorage("index"+index,[arr[index],NavArr[1]]);
    	switch(index) {
		case 0:
		 // location.href="details-tc-sum.php";
		  break;
		case 1:
		 location.href="details-tc-design.php";
		  break;
		  case 2:
		  location.href="details-tc-performance.php";
		  break;
		  case 3:
		   location.href="details-tc-drive.php";
		  break;
		  case 4:
		 location.href="details-tc-intell.php";
		   break;
		  case 5:
		 location.href="details-tc-refit.php";
		  break;
		   case 6:
		// location.href="details-tc-standard.php";
		  break;
		  default: 
		}
    });
 	$('.fixed-navs .names li').click(function(){
 		var navName = $(this).find('a').html();
 	    var navindex = $(this).index();
 	    if($(this).index()=="1" || $(this).index()=="2"){
 	    	setStorage("index"+index,['概述',navName]);
 	    }else{
 	    	setStorage("index"+navindex,['概述',navName]);
 	    }
 		//setStorage("index"+index,['概述',navName]);
 	})
})(Zepto);
