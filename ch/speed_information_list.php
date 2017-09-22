<?php require('header.html') ?>
		<div class="content index-con">
			 	<div class="speed_infor ">
				    <div class="infor_list">
				      <ul class="list">
		               <li>
		                 <label>&nbsp;*申报人姓名:<sup></sup></label><input type="text" name="soco_name" value="" placeholder="请输入您真实姓名" id="soco" class="" /><span></span>
		               </li>
		                <li>
		                 <label>&nbsp;申报人身份证:<sup></sup></label><input type="text" name="soco_card" value="" placeholder="请输入您的身份证" id="soco" class="" /><span></span>
		               </li>
		                <li>
		                 <label>&nbsp;手机号:<sup></sup></label><input type="tel" id="box" name="soco_tel" value="" placeholder="请输入您的手机号" id="soco" class="" /><span></span>
		               </li>
                       </ul>
				    </div>
					<div class="infor_list">
						<ul class="list">
		               <li>
		                 <label>&nbsp;*车辆型号:<sup></sup></label>
                            <select  class="select" name="" id="" onchange="">
								<option value="0">请选择城市</option>
								<option value="320100">南京市</option>
								<option value="320200">无锡市</option>
								<option value="320300">徐州市</option>
								<option value="320400">常州市</option>
								<option value="320500">苏州市</option>
								<option value="320600">南通市</option>
								<option value="320700">连云港市</option>
								<option value="320800">淮安市</option>
								<option value="320900">盐城市</option>
								<option value="321000">扬州市</option>
								<option value="321100">镇江市</option>
								<option value="321200">泰州市</option>
								<option value="321300">宿迁市</option>
							</select>
		               </li>
		                <li>
		                 <label>&nbsp;速珂码:<sup></sup></label><input type="text" name="soco_imme" value="" placeholder="" id="soco" class="" /><span></span>
		               </li>
		                <li>
		                 <label>&nbsp;速珂车架号:<sup></sup></label><input type="text" name="soco_imme" value="" placeholder="" id="soco" class="" /><span></span>
		               </li>
		                <li>
		                 <label>&nbsp;购买价格:<sup></sup></label><input type="text" name="soco_imme" value="" placeholder="请输入购买价格/元" id="soco" class="" /><span></span>
		               </li>
                       </ul>
					</div>
					<div class="infor_list">
						<div class="">
							 <label>备注:</label>
							 <textarea></textarea>
						</div>
					</div>
					<div class="file_list" >
						<h4>＊递交车辆认证照片</h4>
						<p>上传以下三类的合照：身份证原件，车架号（位于车头转处），发票头部（体现发票号及开票日期）</p>						
                        <div class="content_img">
                           <img src="images/speedBao/fileimg.png" style="width:100%">
                       </div>
                      <div class="file_img">
					      <input id="input-file" type="file" name="file" accept="image/*"/>
					      <div class="file-center"><img src="images/speedBao/file.png" width="20"><span>重新上传</span></div>
				  	  </div>
				  	  
					</div>
				 <div class="speed_card_bottom speed_card_to speed_card_es" >
				 	<button data-rippleria class="btn btn-lg btn-sample button ">递交资料</button> 
				 </div>
	        </div>
		</div>
<?php require('footer.html') ?>

<script>

$(function(){
	$("input[type='file']").on('change', function () {
    $('#form').submit();
   var oFReader = new FileReader();
   var file = document.getElementById('input-file').files[0];
   oFReader.readAsDataURL(file);
   oFReader.onloadend = function(oFRevent){
    var src = oFRevent.target.result;
    $('.content_img').html('<img src="'+src+'" style="width:100%">')
    // alert(src)
   }
});
});
</script>