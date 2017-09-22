<link rel="stylesheet" href="css/details_pro_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-pro-nav.html') ?>
	<div class="pro-design">
		<div class="con top">
			<div class="text">
				<h1>这是一件艺术品</h1>
				<p>
					简洁流畅的线条勾勒出气派轮廓<br>
					智能科技内在带来完美跃动感受<br>
					全新升级款<br>
					全面升级您的骑行体验感
				</p>
			</div>
		</div>
		<div class="con decals">
			<div class="text">
				<h1>个性贴花 表达年轻力量</h1>
				<p>
					鲜明的色彩搭配融合潮流元素极富张力，<br>
					给予您不同的个性选择。
				</p>
			</div>
		</div>
		<div class="figure">
			<ul class="pics">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<ul class="dots">
				<li class="active">
					<i></i>
					<span>TS PRO 蔚空蓝</span>
				</li>
				<li>
					<i></i>
					<span>TS PRO 闪电银</span>
				</li>
				<li>
					<i></i>
					<span>TS PRO 迷幻紫</span>
				</li>
				<li>
					<i></i>
					<span>TS LITE 雅致黑</span>
				</li>
				<li>
					<i></i>
					<span>TS LITE 迷彩鲨</span>
				</li>
				<li>
					<i></i>
					<span>TS LITE 闪电银</span>
				</li>
				<li>
					<i></i>
					<span>TS LITE 极地白</span>
				</li>
			</ul>
		</div>
		<div class="con init-light">
			<div class="text">
				<h1>智能光敏感应技术</h1>
				<span>轻松驾驭各种昼夜路况</span>
				<p>
					车辆会根据周围光线的<br>
					强弱变化自动调节仪表亮度、<br>
					大大提升了行车安全性。
				</p>
			</div>
		</div>
		<div class="con big-light">
			<div class="text">
				<h1>动态LED光感式前大灯</h1>
				<p>
					欧规认证动态LED大灯，造型前卫简约，<br>
					极富动感，相较于传统大灯亮度更高，照明<br>区域更宽广。
					骑行路上，为你把前路照亮。
				</p>
			</div>
		</div>
		<div class="con last-light">
			<div class="text">
				<h1>一体环绕式LED后尾灯</h1>
				<p>
					极富设计感的一体环绕式LED后尾灯，<br>
					可视范围超过270°，<br>
					夜间骑行更安全。
				</p>
			</div>
		</div>
		<div class="con led-light">
			<div class="text">
				<h1>LCD智能光感仪表<img class="img-text" src="images/pro-design/02.png"></h1>
				<span>随时掌握整车信息</span>
				<p>
					欧规EEC标准全新升级光感仪表，<br>
					采用防眩弧形镜面、全系白色背光，<br>
					造型简约大气，界面显示更清晰。<br>智能光感系统，
					自动调节仪表背光亮度，<br>
					配以更高级别的防水性能，任何天气状况下，清晰度俱佳。
				</p>
			</div>
		</div>
		<div class="con hand">
			<div class="text">
				<h1>人体化按键布局</h1>
				<span>驾驶乐趣 一手把握</span>
				<p>
					经过升级改进后的手把开关防水等级高<br>
					手感更舒适，操控更灵敏
				</p>
				<img class="img-text" src="images/pro-design/03.png">
			</div>
		</div>
		<div class="con three-dot">
			<div class="text">
				<h1>人体工程三点坐姿</h1>
				<span>稳定支撑 自然舒适</span>
				<p>
					按照人体工程学标准设定科学三点坐姿<br>便于操控车体
					同时减轻腰椎负担<br>提升骑乘适意感
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-design/foot-img.jpg">
		<div class="con wheel">
			<div class="text">
				<h1><img class="img-text" src="images/pro-design/05.png">运动型轮胎</h1>
				<span>提升整车跃动形态</span>
				<p>
					沿袭TS的仿生鸟头胎纹<br>
					并采用更为宽大的110/70-17后轮胎<br>
					不仅提升车辆整体美感<br>
					而且有效提高轮胎抓地性能，刹车更稳定
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-design/details.jpg">
	</div>
<?php require('footer.html') ?>
<script src="js/picPlay.js"></script>
<script>
	$(function(){
		picPlay($('.figure .pics'),$('.figure .dots'));
		$("#index").html(getStorage("index1").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index1").split(",")[1])
	})
</script>