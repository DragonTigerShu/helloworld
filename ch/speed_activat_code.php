<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_card">
				 <div class="speed_card_bottom speed_cards" >
				 	<div class="text icon2" >
                     <input type="text" placeholder="请输入速珂激活码"/><i class="icon_x"></i>
                    </div>
				 	<div class="spec_active"><h1>开始激活</h1></div>
				 </div>
	        </div>
	      <!--遮罩end-->
	      <div class="vote-masker hide"></div>
	      <div class="big-img" style="display: none;">
			 	<div class="t-top">
				  <span class="cl"></span>
		       </div>
		      <img src="images/speedBao/Group.png">
		      <div class="v-center">
		  		<label class="">
		      	 	<h2>激活码粘贴在随车发放的《使用指南》内</h2>
		      	 	<div  data-rippleria class="btn btn-lg btn-sample button-pops">我知道了</div>
		      	 </label>
		      </div>
          </div>
	      <!--遮罩begin-->  
		</div>
<?php require('footer.html') ?>
<script>
//	$(function(){
// 	 	$("#tc-btn").html(getStorage("index3").split(",")[1]);
//	})
$(function(){
	  var wW = $(window).width();  //浏览器高度
	  var ppr= 285/320; 
	  $(".speed_card .speed_card_top").height(Math.floor(wW*ppr));
	  $(".speed_card_bottom .icon_x").click(function(){
		 if($(this)){
		 	showCkucje();
		 }
	  });
     $(".big-img .t-top, .big-img .button-pops").click(function(){
     	 hideCkucje();
     });
})

</script>