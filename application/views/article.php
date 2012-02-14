<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<link href="<?php echo base_url();?>css/core.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<script src="<?php echo base_url();?>js/jquery.1.3.2.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo base_url();?>js/popup_layer.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript" charset="utf-8"></script>		
	<base href="<?php echo base_url()?>"/>
    <script language="javascript">
		$(document).ready(function() {
		$("input.button").click(function(){
     nameValue = $(this).attr("name");
     //alert(nameValue);
})			
$("#sendta").click(function(event) {
			<?php if($this->session->userdata('username'))
		{?>
				var status = $('#statusta');
				var content = $("#contentta").val();
				var fromid = nameValue;
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/sendta",
					data : {
						content : content,
						fromid : fromid
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
<?php }else {?>window.alert("请先登录");<?php }?>				
			});
			//示例9，综合效果
			var t9 = new PopupLayer({trigger:".tigger",popupBlk:".blk",closeBtn:".closeBtn",useOverlay:true,useFx:true,
				offsets:{
					x:0,
					y:-41
				}
			});
			t9.doEffects = function(way){
				if(way == "open"){
					this.popupLayer.css({opacity:0.3}).show(400,function(){
						this.popupLayer.animate({
							left:($(document).width() - this.popupLayer.width())/2,
							top:(document.documentElement.clientHeight - this.popupLayer.height())/2 + $(document).scrollTop(),
							opacity:0.8
						},1000,function(){this.popupLayer.css("opacity",1)}.binding(this));
					}.binding(this));
				}
				else{
					this.popupLayer.animate({
						left:this.trigger.offset().left,
						top:this.trigger.offset().top,
						opacity:0.1
					},{duration:500,complete:function(){this.popupLayer.css("opacity",1);this.popupLayer.hide()}.binding(this)});
				}
			}
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){	
			$("#send").click(function(event) {
			<?php if($this->session->userdata('username'))
		{?>
				var status = $('#status');
				var content = $("#content").val();
				var fromid = $("#fromid").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/send",
					data : {
						content : content,
						fromid : fromid
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
<?php }else {?>window.alert("请先登录");<?php }?>				
			});
		});	
	</script>
		
<title>嘉宾文章</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--嘉宾主页内容开始-->
   	  	<div class="guests">
        	<div class="guests_left">
                <div class="about_top clearfix"></div>
                <div class="about_conn articlelist">
                  <dl><?php if(isset($rows)) {
						foreach($rows as $r) { ?>
                    	<dt><span><?php echo $r->title;?></span><em>发表时间：<?php echo $r->createtime;?></em></dt>
                        <dd>
                        	<div class="article">
                            	<h5><?php echo $r->summary;?></h5>
                                <p class="article_txt"><?php echo $r->content;?></p>
								<input type="text" id="fromid" name="fromid" value="<?php echo $r->classid;;?>" style="display:none;" />
                            </div>
                           
                        </dd>
                        <dd class="article_share">快速分享此文章至：</dd>
                  	</dl><?php }}?>
                  	<div class="comment clearfix">
                        <div class="enter_comment">
                       	  	<p class="tit">共6条评论</p>
                            <p class="textareabox"><textarea name="textarea" id="content" cols="45" rows="5"></textarea></p>
                            <p class="enter_btn"><button type="submit" id="send">发送</button><div id="status"></div></p>
                      </div>
                       
						<?php if(isset($rows1)) {
						foreach($rows1 as $r) { static $tt=1;?>
                        <div class="commentlist clearfix">
                            <div class="userface">
                            	<img src="<?php echo base_url();?>images/temp/temp_face.gif"  class="user" />
                             	<p>						
        <div id="ele9" class="tigger"><input type="button" name="<?php echo $r->comeid;?>" class="button" value="回复"></div>
       
        
   
								</p>
                            </div>
                            <div class="comment_txt">
                            	<span class="arrow"></span>
                                <dl>
                                	<dt><span class="tit"><b><?php echo $r->comeid;?></b><span class="time">16小时前</span></span><em><?php echo $tt;?>F</em></dt>
                                  <dd><?php echo $r->content;?> </dd>
                                </dl>
                            </div>
                        </div><?php $tt++;}}?>
						<!-- 回复个人 -->
						<div class="clr"></div>
						<div id="blk9" class="blk" style="display:none;">
						<div class="head"><div class="head-right"></div></div>
						<div class="main">
						<h2>回复TA:</h2>
						<a href="javascript:void(0)" id="close9" class="closeBtn">关闭</a>
					   <p class="textareabox"><textarea name="textarea" id="contentta" cols="45" rows="5"></textarea></p>
									<p class="enter_btn"><button type="submit" id="sendta">发送</button><div id="statusta"></div></p>
					</div>
					<div class="foot"><div class="foot-right"></div></div>
						</div>
                      <!-- 回复个人 -->
                      
                       
                      
                    </div>
                </div>
                <div class="about_bottom"></div>
                <div class="pages">
                	<span class="pre">共40页</span>
                    <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>
                </div>
            </div>
            <div class="guests_info">
            	<div class="guests_top clearfix"></div>
                	<div class="guests_conn">
					<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
						<?php
$q=$r->author;
$sql="SELECT * FROM dili_u_c_guest WHERE nickname = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                    	<div class="info_user">
                            <img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                            <p><?php echo $row['nickname'];?></p>
                        </div>
                    	<p class="info_txt"><?php echo $row['instruction'];?></p><?php }?><?php }}?>
                        <div class="guestslist_top"></div>
                        <div class="guestslist_conn clearfix">
                        	<h6>Ta的最新文章</h6>
                            <ul class="clearfix">
							<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
						<?php
$t=$r->author;
$sql="SELECT * FROM dili_u_c_article WHERE author = '".$t."' and ispass=1  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                            	<li><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>"><?php echo $row['title'];?></a></li><?php }?><?php }}?>
                                
                            </ul>
                            <h6>Ta的话题</h6>
                            <ul class="clearfix">
							<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
						<?php
$p=$r->author;
$sql="SELECT * FROM dili_u_c_childtopic WHERE lecturer in (select classid from dili_u_c_guest where nickname =  '".$p."')   ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                            	<li><a href="#"><?php echo $row['title'];?></a></li><?php }?><?php }}?>
                                
                            </ul>
                        </div>
                        <div class="guestslist_bottom"></div>
                        <h6>Ta的微博</h6>
						<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
						<?php
$t1=$r->author;
$sql="SELECT * FROM dili_u_c_guest WHERE nickname = '".$t1."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                        <p class="weiboadd"><a href="#"><?php echo $row['blog'];?></a></p><?php }?><?php }}?>
                    </div>
                <div class="guests_bottom"></div>
            </div>
        </div>
      	<!--/嘉宾主页内容结束-->
    </div>
</div>
<!-- /内容 -->
<!-- foot -->
<div class="footer">
	<div class="foot_bg">
    	<div class="font_weibo">
        	<div class="atten_left">
            	<p class="attention">关注我们的官方微博<img src="<?php echo base_url();?>images/common/ico_weibo.jpg" width="26" height="24" align="top" /></p>
                <div class="attentionbox"><img src="<?php echo base_url();?>images/temp/temp_user.jpg" width="46" height="46" />
                	<div class="club_foot">
                    	<p>技术俱乐部</p>
                        <div class="btn"><a href="" class="W_addbtn"><img src="<?php echo base_url();?>images/common/transparent.gif" alt="" class="addicon">加关注</a></div>
                    </div>
                </div>
       	    </div>
            <div class="pagetop"><a href="#"><img src="<?php echo base_url();?>images/common/page_top.gif" width="63" height="64" /></a></div>
        </div>
    </div>
    <p class="address">联系我们：developerclub@taobao.com</p>
</div>
<!--/foot-->
</body>
</html>
