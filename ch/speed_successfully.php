<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_card spec_fully">
				    <div class="succes_card" >
                      <img src="images/speedBao/succespage.png" width="22" height="21"><span>提交成功</span>
                  </div>
                  <p>我们将在10个工作日内为您完成保险申请，请耐心等待，成功后将第一时间短信通知您。感谢您对soco速珂的支持！</p>
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