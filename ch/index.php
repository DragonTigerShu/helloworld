<?php require('header.html') ?>
   	<div class="content index-con" id="banner">
		
	</div>
<?php require('footer.html') ?>
	<script>
	function getData(pid){   
		$.ajax({
			type: 'POST',
			url: 'http://wx.supersoco.com:8070/index.php?c=GetData&m=getCon&pid='+pid+'',
			dataType:'json',
			success: function(data){
				var str = '';
				for(var i = 0;i<data.length;i++){
					str += '<a href="http://' +data[i].url+ '"><div class="indexcon"> <img src="http://wx.supersoco.com:8070/uploads/' +data[i].pic_ori+ '" width="100%"/></div></a>';
				}
				$('#banner').append(str);
			}
		});
	}
	$(function(){
		getData(2);
		$("#tc-btn").html('首页');
 	 	//$("#tc-btn").html(getStorage("index0").split(",")[1])
	})
</script>

