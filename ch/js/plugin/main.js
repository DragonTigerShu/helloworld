   /**
    *获取浏览器内容区域高度
    *
    */
   //本地存储
var lcstor = window.localStorage;
function setStorage(key,value){
    if(lcstor)
        lcstor[key] = value;
    else
        alert('localStorage error');
}
function getStorage(key){
    if(lcstor){
        for(i in lcstor){
            if(i==key)
                return lcstor[i];
        }
    }else
        alert('localStorage error');
}
function clearStorage(key){
    if(lcstor){
        if(key)
            lcstor.removeItem(key);
        else
            lcstor.clear();
    }
    else
        alert('localStorage error');
}

/***
 *  速珂宝安全问题判断
 * 
 * */
$(function(){
   $(".speed-nav li").click(function(){
   	 var $index = $(this).index();
	  $(this).addClass("active").siblings().removeClass("active");
	  if($index==0){
	  	$(".section1").show();
	  	$(".section2").hide();
	  	return true;
	  }else if($index==1){
	  	$(".section1").hide();
	  	$(".section2").show();
	  	return true;
	  }
	  
   })
})
function showCkucje(){
	$(".vote-masker").show();
	$(".big-img").show();
}
function hideCkucje(){
	$(".vote-masker").hide();
	$(".big-img").hide();
}
