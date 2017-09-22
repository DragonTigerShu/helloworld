<link rel="stylesheet" href="css/details_pro_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-pro-nav.html') ?>
	<div class="pro-intell">
		<div class="con top">
			<div class="text">
				<h1>智能探索生活</h1>
				<p style="text-align: left;float: right;">
					智慧大脑ECU、BMOS智<br>
					能交互系统、SOCO云平<br>
					台及SOCO APP环环相扣<br>
					实现人与人、人与
					车之间<br>的良性交互联系。
				</p>
			</div>
		</div>
		<div class="con wisdom">
			<div class="text">
				<h1>智慧大脑</h1>
				<span>
					自主研发的BMOS智慧交互系统<br>
					运用创新科技让人、车、云端三者互联。
				</span>
				<p>
					<i></i>全新的ECU<br>
					<i></i>更高的耐压等级<br>
					<i></i>更稳定的数据传输能力<br>
					<i></i>更优秀的防水性能<br>
					<i></i>更便捷的OTA远程升级能力
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-intell/intell-img.jpg">
		<img class="img-con" src="images/pro-intell/ecu.jpg">
		<div class="con app">
			<div class="text">
				<h1>同类聚首 终结孤单</h1>
				<span>
					<i></i>好友约跑&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i></i>骑行成就&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i></i>记录分享
				</span>
				<p>
					开启移动社交，以全新的方式实现人与人之间的交流，
					玩转线下骑行乐趣。
				</p>
			</div>
		</div>
		<div class="con app-more">
			<div class="text">
				<h1>智能驾驭 随心所欲</h1>
				<p>
					车况检查、定位防盗、故障预警、移动轨迹、维修服务，
					</br>多维度获取骑行信息，了如指掌。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-intell/app-img.jpg">
		<img class="img-con" src="images/pro-intell/else-img.jpg">
	</div>
<?php require('footer.html') ?>
<script>
	$(function(){
		$("#index").html(getStorage("index4").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index4").split(",")[1])
	})
</script>