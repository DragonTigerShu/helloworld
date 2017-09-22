<link rel="stylesheet" href="css/details_pro_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-pro-nav.html') ?>
	<div class="pro-tech">
		<div class="con top">
			<div class="text">
				<h1>用玩者之心<br>精益求精</h1>
				<p>
					每一处你看得到和看不到的地方，<br>
					我们都一样用心制造。
				</p>
			</div>
		</div>
		<div class="con bracket">
			<div class="text">
				<h1>赛车级分体式车架</h1>
				<span>轻盈 结实 安全 缺一不可</span>
				<p>
					为了实现小巧轻便、结实耐用和长时间骑乘的舒适性，
					我们最终选用了只在大排量摩托车
					才会配置的分体式环抱车架作为解决方案。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-tech/bracket-img.jpg">
		<div class="con bracket01">
			<div class="text">
				<h1>碳素钢主车架</h1>
				<p>
					无缝焊接，过渡自然圆滑
					电泳工艺处理，色泽饱满，不
					易掉漆生锈总成焊接后精镗
					前立管，操控转向稳定
				</p>
			</div>
		</div>
		<div class="con bracket02">
			<div class="text">
				<h1>铝合金副车架</h1>
				<p>
					负载可达150kg
					车身稳固坚实
					车辆自重降低，更易于操控
				</p>
			</div>
		</div>
		<div class="con rocker">
			<div class="text">
				<h1>锻造级后摇臂<br>经得起打磨的匠心</h1>
				<p>
					后摇臂与主车架采用同样的材质，达到理想抗扭转性。
					后端块采用锻造工艺，完美保留车辆金属流线与机械性能，
					同时新增两个安装点，便于个性化改装或增加后挡泥板。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-tech/rocker.jpg">
		<div class="con wire">
			<div class="text">
				<h1>汽车级线束</h1>
				<span>提高整车全天候安全性能</span>
				<p>
					全车采用汽车级AVS和AVSS导线，<br>
					阻抗更低，抗氧化级别更高，<br>
					配以全新防水插件，安全性及耐用性俱佳。
				</p>
			</div>
		</div>
		<img class="img-con" src="images/pro-tech/wire.jpg">
		<div class="con safe">
			<div class="text first">
				<h1>氩弧焊鱼鳞纹</h1>
				<span>立体饱满 精巧美观</span>
				<p>
					副车架与后摇臂均采用了机器人氩弧焊工艺。<br>
					焊缝错落有致，鱼鳞纹立体饱满，<br>
					提升整体美感。
				</p>
			</div>
			<div class="text second">
				<h1>“禁锢”你的安全</h1>
				<p>
					采用BMW的TORX螺栓，对主副车架、后减震器进行固定，
					美观同时，实现了内六角螺栓不易达到的大扭矩，
					安全系数更高。
				</p>
			</div>
			<div class="text third">
				<h1>涂装工艺 有膜更有样</h1>
				<p>采用双重固化工艺，&nbsp;显著提高硬化膜
				   固化后的附着力，柔韧性及耐磨性，
				   使ABS件光泽度强，丰满度高，鲜艳
				   性佳。相较于普通涂装，耐候、
				   耐酸、耐碱、耐水及耐汽
				   油性亦大幅提升。
				</p>
			</div>
		</div>
		<div class="con plate">
			<div class="text">
				<h1>注塑 能屈能伸 亦刚亦柔</h1>
				<p>
					采用耐冲击PP玻纤材料、高强度ABS覆盖件，
					最大程度抵抗物理冲击，长久使用也不易破裂变形。
					塑件精度高、无飞边，
					亦贴心地将边缘做圆角处理。
				</p>
			</div>
		</div>
		<img style="margin:3em 0;" class="img-con" src="images/pro-tech/plate-img.jpg">
	</div>
<?php require('footer.html') ?>
<script>
	$(function(){
		$("#index").html(getStorage("index5").split(",")[0]);
 	 	$("#tc-btn").html(getStorage("index5").split(",")[1])
	})
</script>