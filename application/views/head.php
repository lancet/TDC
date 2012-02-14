<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php echo $page_title?></title>	 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>		
	<base href="<?php echo base_url()?>"/>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#send").click(function(event) {
				var status = $('#status');
				var content = $("#content").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/index/send",
					data : {
						content : content
					},
					type : "GET",
					beforeSend : function() {
						status.text("正在发送...");
					},
					success : function(data,success) {
						status.fadeIn().after(data);
					},
					error : function(error) {
						status.fadeIn().text("发送失败").fadeOut(3000);
					}
				});				   
			});
		});	
	</script>	
</head>
<body>