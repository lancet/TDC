<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/salon.css" />
<script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="<?php echo base_url();?>js/idTabs.min.js"></script>	
	<base href="<?php echo base_url()?>"/>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#send1").click(function(event) {
			<?php if($this->session->userdata('username'))
		{?>
				var status = $('#status1');
				var content = $("#content1").val();
				var fromid = $("#fromid1").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/periodcomm",
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
<script type="text/javascript">
		$(document).ready(function(){	
			$("#send2").click(function(event) {
			<?php if($this->session->userdata('username')){?>
				var status = $('#status2');
				var content = $("#content2").val();
				var fromid = $("#fromid2").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/periodcomm",
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
<script type="text/javascript">
		$(document).ready(function(){	
			$("#send3").click(function(event) {
			<?php if($this->session->userdata('username'))
		{?>
				var status = $('#status3');
				var content = $("#content3").val();
				var fromid = $("#fromid3").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/periodcomm",
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
<script type="text/javascript">
		$(document).ready(function(){	
			$("#apply").click(function(event) {
			<?php if($this->session->userdata('username'))
		{?>
				var status = $('#statusapp');
				
				var slid = $("#slid").val();
				$.ajax({
					url : "<?php echo base_url()?>index.php/ajax/guanzhu",
					data : {
						
						slid : slid
					},
					type : "GET",
					beforeSend : function() {
						status.text("正在发送...");
					},
					success : function(data,success) {
						status.fadeIn().after(data);
					},
					error : function(error) {
						status.fadeIn().text("报名失败").fadeOut(3000);
					}
				});		
<?php }else {?>window.alert("请先登录");<?php }?>				
			});
		});	
	</script>	
<STYLE type=text/css>


.tagContent {
	 DISPLAY: none; 
}
#tagContent DIV.selectTag {
	DISPLAY: block
}
</STYLE>
<title>本期沙龙</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--往期沙龙内容开始-->
   	  	<div class="salon">
        	<div class="activity_ad period">
                <div class="pagename w_texta">所有沙龙 ><span class="w_textc"> MySQL可用</span></div>
                <!-- 活动介绍-->
              <div class="activity clearfix">
                <div class="activity_logo">
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?><input type="text" id="slid" name="slid" value="<?php echo $r->classid;;?>" style="display:none;" />
                   <p><img src="<?php echo base_url();?>images/salon/occupancy_login.jpg" width="189" height="74" /></p>
                  
				   <?php
				   if($this->session->userdata('username')){
$qt=$r->classid;
$qn=$this->session->userdata('username') ;
$sql="SELECT * FROM dili_u_c_guanzhu WHERE slid = '".$qt."' and name = '".$qn."' ";
$result = mysql_query($sql);
 ?><?php if(mysql_num_rows($result) != 0) echo '已关注'; else echo " <p class=\"attention\"><button type=\"submit\" id=\"apply\" style=\"background:url(".base_url()."images/salon/btn_attention.jpg);width:119px;height:33px;\"></button><div id=\"statusapp\"></div></p>";}else echo " <p class=\"attention\"><button type=\"submit\" id=\"apply\" style=\"background:url(".base_url()."images/salon/btn_attention.jpg);width:119px;height:33px;\"></button><div id=\"statusapp\"></div></p>";?>
                   <p class="apply">已有120人报名</p>
                </div>
                <div class="activity_txt">
					
                  <h4><p><?php echo $r->theme;?><span class="tips"><img src="<?php echo base_url();?>images/salon/ico_tips.jpg" width="33" height="33" alt="杭州" /></span></p></h4>
                  	<dl class="clearfix">
                      <dt>时间：</dt>
                        <dd class="w_textc"><?php echo $r->stime;?></dd>
                    </dl>
                    <dl class="clearfix">
                      <dt>地点：</dt>
                        <dd><p class="add"><?php echo $r->location;?><span class="map"><img src="<?php echo base_url();?>images/salon/ico_map.png" width="27" height="40" /></span></p></dd>
                    </dl>
                      <dl class="clearfix">
                        <dt>介绍：</dt>
                        <dd class="introduce"><?php echo $r->introduction;?></dd>
                        </dl>
                        <dl class="clearfix">
                          <dt></dt>
                            <dd class="introduce w_texta">也可点击查看<a href="" class="w_textc">当月沙龙</a>哦。 </dd>
                      </dl>
                        <p class="share">快速分享到：</p>
						<?php }}?>
                    </div>
              </div>
            </div>
            <!-- /活动介绍-->
            <!-- 切换嘉宾介绍-->
			
            <div class="salon_guests">
            	<ul class="idTabs"> <?php if(isset($rows2)) {
						foreach($rows2 as $r) { ?>
				<li><a href="<?php echo "#jq".$r->classid;?>"><?php echo $r->title;?></a></li><?php }}?>
				</ul>
                <div class="guests_txt">
                	<div class="guestsbox">
                    	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85"/>
                        <div class="guests_writing">
						<?php if(isset($rows2)) {
						foreach($rows2 as $r) { ?>
                             <div id="<?php echo "jq".$r->classid;?>">
							 
							 <?php
$q=$r->lecturer;
$sql="SELECT * FROM dili_u_c_guest WHERE classid = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>						主讲嘉宾：<?php echo $row['nickname'];?><?php }?><br />
							 主讲内容：<?php echo $r->content;?></div><?php }}?>	
                        </div>
                    </div>
                </div>
            </div>
            <!-- /切换嘉宾介绍-->
            <!--BBS内容开始-->
            <div class="salonbbs">
            	<div class="salonbbs_top"></div>
                <div class="salonbbs_conn">
                	<h4>沙龙讨论区</h4>
				
<UL id=tags class="salon_tab">
<LI class=selectTag><A onClick="selectTag('tagContent0',this)" href="javascript:void(0)" class="culb_btn"><span>全部</span></A> </LI>
<?php if(isset($rows2)) {
											foreach($rows2 as $r) { static $i=1; ?>
<LI><A onClick="selectTag('tagContent<?php echo $i;?>',this)" href="javascript:void(0)" class="culb_btn"><span><?php echo $r->title;?></span></A> </LI><?php $i++;}}?>

</UL>
<DIV id=tagContent>
<DIV class="tagContent selectTag" id=tagContent0>
<ul class="salonlist clearfix">
<?php if(isset($rows3)) {
						foreach($rows3 as $r) { ?>
						<li>
                        	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                        	<div class="salon_bbsbox">
                            	<p class="salonlist_tit"><em><?php echo $r->commid;?></em> - <?php echo $r->time;?> </p>
                                <p class="salonlist_txt"><?php echo $r->content;?></p>
                            </div>
                        </li><?php }}?></ul>
						</DIV>
<?php if(isset($rows2)) {
											foreach($rows2 as $r) { static $j=1; ?>

<DIV class=tagContent id=<?php echo 'tagContent'.$j;?>>
 <ul class="salonlist clearfix">
                        <?php
$q=$r->classid;
$sql="SELECT * FROM dili_u_c_childcomm WHERE fromid = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?><li>
                        	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                        	<div class="salon_bbsbox">
                            	<p class="salonlist_tit"><em><?php echo $row['commid'];?></em> -<?php echo $row['time'];?></p>
                                <p class="salonlist_txt"> <?php echo $row['content'];?></p>
                            </div>
                        </li><?php }?>
                    </ul>

 <div class="enter_comment">
						<input type="text" id="<?php echo 'fromid'.$j;?>" name="fromid" value="<?php echo $r->classid;;?>" style="display:none;" />
                        <p class="textareabox"><textarea name="content" id="<?php echo 'content'.$j;?>" cols="45" rows="5">#<?php echo $r->title;?>#</textarea>
                        </p>
                        <p class="enter_btn"><button type="submit" id="<?php echo 'send'.$j;?>">发送</button><div id="<?php echo 'status'.$j;?>"></div></p>			
                    </div></DIV><?php $j++;}}?>
</DIV>

  <SCRIPT type=text/javascript>
function selectTag(showContent,selfObj){
	// 操作标签
	var tag = document.getElementById("tags").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "selectTag";
	// 操作内容
	for(i=0; j=document.getElementById("tagContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
	
	
}
</SCRIPT>

                   <!-- 分页-->
						
                    <div class="pages clearfix">
                        <span class="pre">共40页</span>
                        <ul>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                        </ul>
                    </div>
                    <!-- /分页-->
					
                </div>
                <div class="salonbbs_bottom"></div>
            </div>
            <!--/BBS结束-->
        </div>
      	<!--/往期沙龙内容结束-->
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
