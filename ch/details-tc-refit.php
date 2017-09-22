<link rel="stylesheet" href="css/details_tc_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-tc-nav.html') ?>
	<div class="details">
		<div class="details-refit-one details-page white text text-center">
			<h1>改装可以想的更多</h1>
		</div>
		<div class="details-refit-two details-page"></div>
		<div class="details-refit-cen text text-center" >
			<h1>领略灵魂的改装魅力  未来更具可能</h1>
			<p>它并不是专属玩物</br> 是一种时尚，一种态度</br> 血液中无时无刻不涌动着个性</p>
			<small></small>
		</div>
		<div class="details-refit-three details-page">
			<img src="images/tc/refit/refit_02.jpg">
		</div>
		<div class="details-refit-four details-page">
			<img src="images/tc/refit/refit_04.jpg">
		</div>
		
		<div class="details-refit-five text text-left ">
			<img src="images/tc/refit/refit_06.jpg">
			<p>改装文化的意义</br> 只有深入其中才懂为何入魔</p>
		</div>
		<div class="details-refit-six details-page">
			<img src="images/tc/refit/refit_07.jpg">
		</div>
	</div> 
<?php require('footer.html') ?>	
<script src="js/custom/picPlay.js"></script>
 <script type="text/javascript">
 	$(function(){
 	 	$("#index").html(getStorage("index5").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index5").split(",")[1])
 	})
 </script>