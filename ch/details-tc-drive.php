<link rel="stylesheet" href="css/details_tc_mobile.css"/>
<?php require('header.html') ?>
<?php require('header-tc-nav.html') ?>
      <div class="details">
      	   <div class="details-drive-one details-page text white text-right">
      	   	  <h1>跑的更远</br> 一切尽在掌握之中</h1>
      	   </div>
      	   <div class="details-drive-two details-page">
      	   	    <img src="images/tc/drive/drive_03.jpg">
      	   </div>
      	   <div class="details-kseimg">
      	   	  <img src="images/tc/drive/drive_04.jpg" >
      	   </div>
      	   <div class="details-drive-three details-page">    
      	   	 <div class="checlk text-center">
	  	  	 	<h1>BMS智能电池管理系统</h1>
	  	  	 	<h2 style="margin-left: auto;width: 22%;">高效节能</h2>
	  	  	 	<p style="padding-right: 1em;">精准的SOCO算法，为电池提供多重保护， 自动同步电池信息，为您合理规划行程。 </p>
			
	  	  	 </div>
			 	<img src="images/tc/drive/drive_icon01.png">
      	   </div>
      	   <div class="details-drive-four details-page">
      	   	   <img src="images/tc/drive/drive_05.jpg">
      	   </div>
      	   <div class="details-drive-five details-page">
      	   	   	 <div class="checlk text-center back">
	  	  	 	<h1>抗干扰充电器</h1>
	  	  	 	<h2 style="margin-left: auto;width: 43%;">实时掌握充电进度</h2>
	  	  	 	<p style="padding-right: 1em;">新增人性化电量提醒功能，有效抗电磁波干扰。便于合理安排您的行程。</p>
	  	  	 </div>
      	   </div>
      	   <div class="details-drive-six">
			  	   <div class="drive-six-cen white">
			  	  	 	<h1>加强型挡泥板</h1>
			  	  	 	<h2 style="font-size:0.9em;">挡掉骑行路上的泥泞</h2>
			  	  	 	</br></br>
			  	  	 	<p>PP工程塑料，韧性强</br>不易破裂；防水角度增加至65°</p>
			  	  	 </div>
      	   </div>
      	   <div class="clear"></div>
      </div>

<?php require('footer.html') ?>	
 <script type="text/javascript">
 	$(function(){
 	 	$("#index").html(getStorage("index3").split(",")[0]);
            $("#tc-btn").html(getStorage("index3").split(",")[1])
 	})
 </script>