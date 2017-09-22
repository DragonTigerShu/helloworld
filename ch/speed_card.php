<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_card">
				   <div class="contain speed_card_top"> 
				   </div>
				 <div class="speed_card_bottom">
				 	<div class="text icon1" >
                    <input type="text" placeholder="请输入您的身份证号"/>
                   </div>
				 	<button data-rippleria class="btn btn-lg btn-sample button ">查询</button>
				 	
				 </div>
	        </div>
		</div>
<?php require('footer.html') ?>
<script>
//	$(function(){
// 	 	$("#tc-btn").html(getStorage("index3").split(",")[1]);
//	})
$(function(){
	  var wW = $(window).width();  //浏览器高度
	  var ppr=285/320; 
	  $(".speed_card .speed_card_top").height(Math.floor(wW*ppr));
})
</script>