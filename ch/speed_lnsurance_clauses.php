<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_card">
				  <div class="speed_cla_bottom">
				  	 <div class="speed_clauses"><img src="images/speedBao/iconfile.png"></div>
				     <div class="speed_cla_list">
				     	<label>
            				<section>
            					<span>保险单号：</span>
            					<span></span>
            				</section>
            				<section>
            					<span>保险状态：</span>
            					<span>保障中</span>
            				</section>
            				<section>
            					<span>保险公司：</span>
            					<span>中国人寿</span>
            				</section>
            				<section>
            					<span>保险类型：</span>
            					<span>TS Lite 458 团体险</span>
            				</section>
            			 </label>
            			 <label>
            				<section>
            					<span>受保人：</span>
            					<span>张三</span>
            				</section>
            				<section>
            					<span>身份证号：</span>
            					<span>341221199308087847</span>
            				</section>
            				<section>
            					<span>购车金额：</span>
            					<span>5000元</span>
            				</section>
            				<section>
            					<span>SN号：</span>
            					<span>865067024844808</span>
            				</section>
            				<section>
            					<span>车架号：</span>
            					<span>210521600103408</span>
            				</section>
            			 </label>
            			  <label>
            				<section>
            					<span>单生效日期：</span>
            					<span></span>
            				</section>
            				<section>
            					<span>保单失效日期：</span>
            					<span>341221199308087847</span>
            				</section>
            				<section>
            					<span>保险范围及金额</span>
            					<span style="float: right;"><a href="speed_compensation.php"><img src="images/speedBao/right.png" width="32"></a></span>
            				</section>
            				<section>
            					<span>理赔热线</span>
            					<span></span>
            				</section>
            				<section>
            					<span>速珂宝官方服务热线	</span>
            					<span>210521600103408</span>
            				</section>
            			 </label>
				     </div>
				     
				  </div>
				  <div class="speed_card_bottom details-des-six">
				  	 <h3 class="data-tab">查看<a href="#">《保险条款》</a></h3>
				     <button data-rippleria class="btn btn-lg btn-sample button " style="width: 55%;">返回</button>  
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