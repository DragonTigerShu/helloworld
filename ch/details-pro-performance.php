<link rel="stylesheet" href="css/details_pro_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-pro-nav.html') ?>
	<div class="pro-per">
		<div class="con top">
			<div class="text">
				<h1>澎湃动力</h1>
				<p>
					输出功率提升10%<br>
					17寸大轮径动力电机<br>
					升级版3速比例<br>
					起步瞬间强劲有力
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-per/num-per.jpg">
		<div class="con foc">
			<div class="text">
				<h1>FOC矢量控制器<img class="img-text" src="images/pro-per/2.0.png"></h1>
				<p>
					具有核心技术的FOC矢量控制器<br>
					与自主研发的BMOS智慧交互系统无缝对接<br>
					输入功率大幅提升10%<br>
					能效转换率高达92%<br>
					全新动力系统升级<br>
					更符合不同用户的骑行习惯
				</p>
			</div>
		</div>
		<div class="con boosh">
			<div class="text">
				<img class="img-text" src="images/pro-per/boosh-logo.png">
				<h1>高性能博世<img class="img-text" src="images/pro-per/17.png">寸动力电机</h1>
				<p>
					联合BOSCH开发的国内首款17寸<br>大轮径高性能动力电机<br>
					峰值扭矩可达120N·m<br>
					起步瞬间带来的澎湃动力&nbsp;&nbsp;让你一路遥遥领先
				</p>
			</div>
		</div>
		<div class="con brake">
			<div class="text">
				<h1>
					高效碟刹制动系统<br>
					制动效率更高
				</h1>
				<p>
					刹车系统采用前220mm浪花碟刹，双活塞浮动卡钳后
					180mm浪花碟刹，单活塞浮动卡钳，高速刹车时依然能够迅速制动
					散热效果也优于鼓式刹车。新增铁芙龙油管及高分子制动蹄片
					提升抗膨胀系数的同时降低噪音
				</p>
			</div>
		</div>
		<div class="con shake">
			<div class="text">
				<h1>
					可调式中置前减震
				</h1>
				<span>提高驾乘舒适性</span>
				<p>
					全新调校可调式中置减震器感应灵敏柔和<br>
					更好地吸收地面冲击<br>
					转向时左右更加平衡<br>
					在确保安全的前提下<br>
					最大程度保持车辆运动性能
				</p>
			</div>
		</div>
		<div class="con shake01">
			<div class="text">
				<h1>
					倒置式液压前减震
				</h1>
				<span>消除一路颠簸</span>
				<p>
					采用赛车级35mm倒置式液压前减震，<br>
					拖拽距缩短，路面反应更灵敏，操控更灵活。<br>
					粗壮的外套筒与赛车级车架强势连结，<br>
					亦具备更强的抗扭性。
				</p>
			</div>
		</div>
		<div class="con wading">
			<div class="text">
				<h1>
					整车通过性
				</h1>
				<span>涉水深度高达280mm</span>
				<p>
					整车符合国际电工委员会制定的<br>IP65防水防尘标准，<br>
					内部采用汽车级接插件及线束。<br>
					17寸轮毂具有更强的通过性。
				</p>
			</div>
		</div>
	</div>
<?php require('footer.html') ?>
<script>
	$(function(){
		$("#index").html(getStorage("index2").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index2").split(",")[1])
	})
</script>