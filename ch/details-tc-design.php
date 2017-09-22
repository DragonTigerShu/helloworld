<link rel="stylesheet" href="css/details_tc_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-tc-nav.html') ?>
	  <div class="details">
	  	  <div class="details-design-one white details-page">
	  	  	 <div class="text text-center design-one">
	  	  	 	<h1>复古和现代相碰撞 </br>经典与创新相融合</h1>
	  	  	 </div>
	  	  </div>
	  	  <div class="details-design-two details-page">
	  	  		 	<div class="contain" style="position:relative;height:43.75em;">
		 		<div class="bigPic">
		 			<ul class="pics">
		 				<li></li>
		 				<li></li>
		 				<li></li>	
		 				<li></li>
		 				<li></li>
		 				<li></li>
		 				<li></li>	
		 				<li></li>
		 			</ul>
		 		</div>
		 		<div class="smallPic">
		 			<p class="text-center color_clo">加高复古车把，宽厚咖啡坐垫，经典圆灯造型，复古圆形仪表，完美流线型...独属于café racer的经典元素从50年代英国伦敦的街头一路穿行到现代，依然保留着强烈的存在感。</p>
          <div class="dots">
			 			<ul class="pic-dots">
			 				<li class="active"><i></i><span>复古绿</span></li>
							<li><i></i><span>深海蓝</span></li>
							<li><i></i><span>亮钻黑</span></li>
							<li><i></i><span>卡其黄</span></li>
			 			</ul>
		 			</div>
		 		</div>
		 	</div>
	  	  	
	  	  </div>
	  	  <div class="details-design-three details-page">
	  	  	 <div class="checlk">
	  	  	 	<h1>智能光敏感应技术</h1>
	  	  	 	<i>轻松驾驭各种昼夜路况</i>
	  	  	 </div>
	  	  </div>
	  	  <div class="details-design-four details-page">
	  	  	<img src="images/tc/design/design_03.jpg" >
	  	  </div>
	  	  <div class="details-design-five details-page">
	  	   <div class="checlk text-center" >
	  	  	 	<h1>LCD电子指针液晶仪表</h1>
	  	  	 	<h2 style="margin-left: auto;width: 50%;">科技与复古巧妙融合</h2>
	  	  	 	<p>承袭café racer经典机械指针印象，更具品味，白色背光简约大气，提升细节质感。</p>
	  	  	 </div>
	  	  </div>
	  	  <div class="contain details-cen cen-hight text-center">
	  	  	<h1>黄金比例三点坐姿 操控感更佳</h1>
	  	  	<p>按照人体工程学标准设定黄金比例三点坐姿，易于操控，最大限度减轻腰椎负担，造就更舒适的驾驶体验。<p>
	  	  </div>
	  	  <div class="details-design-six details-page">
	  	  	<img src="images/tc/design/design_05.jpg">
	  	  </div>
	  	  <div class="details-design-seven details-page">
	  	  		<div class="five-cen text-seven white text-right">
	  	  		<h1>便捷后扶手</br> 贴心保障后乘员安全</h1>
	  	  		<p>便于后座乘员抓握及车辆移位推行</p>
	  	  	</div>
	  	  </div>
	  	  <div class="details-design-night details-page">
	  	  	 <div class="checlk">
	  	  	 	<h1>加强型挡泥板</h1>
	  	  	 	<h2>挡掉骑行路上的泥泞</h2>
	  	  	 	<p>PP工程塑料，韧性强</br>不易破裂；防水角度增加至65°</p>
	  	  	 </div>
	  	  </div>
	  	   <div class="contain details-cen cen-hight text-center">
	  	  	<h1>细节极致 相辅相成</h1>
	  	  	<p>细节的把握程度是对品质苛责的态度<p>
	  	  </div>
	  	  <div class="details-design-nine details-page">
	  	  	<img src="images/tc/design/design_08.jpg">
	  	  </div>
	  	  <div class="clear"></div>
	  </div>
<?php require('footer.html') ?>	
	<script src="js/custom/picPlay.js"></script>
 <script type="text/javascript">
 	$(function(){
 		picPlay($('.bigPic .pics'),$('.dots'));
 	 	$("#index").html(getStorage("index1").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index1").split(",")[1])
 	})
 </script>