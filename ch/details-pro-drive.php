<link rel="stylesheet" href="css/details_pro_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-pro-nav.html') ?>
	<div class="pro-drive">
		<div class="con top">
			<div class="text">
				<h1>带上充沛能量出发</h1>
				<p>
					170节18650锂电芯，<br>
					不仅满足都市日常通勤，<br>
					周末远郊出行也无顾虑。
				</p>
			</div>
		</div>
		<div class="con battery">
			<div class="text">
				<span>总续航可达<img class="img-text" src="images/pro-drive/200km.png"></span>
				<h1>超大容量锂电池包</h1>
				<p>
					通过UN38.3*多项极端测试，全面符合联合国安全标准；
					采用高容量 松下/三星／LG 18650电芯，充分实现高能量供给，
					放电性能和安全性俱佳。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-drive/battery.jpg">
		<div class="con pack">
			<div class="text">
				<h1>分布式PACK方案</h1>
				<span>延长电池使用寿命</span>
				<p>
					独特的分子结构电芯布局，通过严格的排布电芯间距，
					辅以高等级的封装材料，更好地发挥电芯性能。
					采用保险丝契焊工艺，每颗电芯都单独配有PTC。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-drive/pack-bg.jpg">
		<div class="con shell">
			<div class="text">
				<h1>航空级电池外壳</h1>
				<p>
					采用航空级铝材，高压成型，机械强度高、导热性能佳。
					每个螺丝孔包裹配套密封圈，有效提升外壳防水性能，
					大幅度提升电池包的安全性。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-drive/shell-bg.jpg">
		<div class="con bms">
			<div class="text">
				<h1>BMS智能电池管理系统</h1>
				<span>有效提高电池利用率</span>
				<p>
					采用精确的SOC算法，随时监控电池状态，
					为电池提供多重保护，SOCO APP将自动同步电池信息，
					让您能够合理规划每一次行程。
				</p>
			</div>
			<img class="img-con" src="images/pro-drive/icons.png">
		</div>
		<div class="con interfere">
			<div class="text">
				<h1>抗干扰充电器</h1>
				<span>高效充电 省时节能</span>
				<p>
					达到欧规认证标准，充电快速高效；<br>
					新增人性化电量提醒功能，有效抗电磁波干扰。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-drive/interfere.jpg">
		<div class="con hand">
			<div class="text">
				<h1>高精度调速转把</h1>
				<span>精确掌控速度</span>
				<p>
					采用霍尔传感技术，<br>
					可进行高精度流量调节。
				</p>
			</div>
		</div>
	</div>
<?php require('footer.html') ?>
<script>
	$(function(){
		$("#index").html(getStorage("index3").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index3").split(",")[1])
	})
</script>