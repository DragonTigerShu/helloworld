<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_card">
				    <div class="contain  speed_card_top"></div>
				 <div class="speed_card_bottom speed_card_to">
				 	<button data-rippleria class="btn btn-lg btn-sample button ">激活</button> 
				 	<button data-rippleria class="btn btn-lg btn-sample button ">速珂宝查询</button> 
				 </div>
	        </div>
		</div>
<?php require('footer.html') ?>
<script>

$(function(){
	  var wW = $(window).width();  //浏览器高度
	  var ppr=285/320; 
	  $(".speed_card .speed_card_top").height(Math.floor(wW*ppr));
})
</script>