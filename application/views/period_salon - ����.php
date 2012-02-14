<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/salon.css" />
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
                   <p><img src="<?php echo base_url();?>images/salon/occupancy_login.jpg" width="189" height="74" /></p>
                   <p class="attention"><img src="<?php echo base_url();?>images/salon/btn_attention.jpg" width="119" height="33" /></p>
                   <p class="apply">已有120人报名</p>
                </div>
                <div class="activity_txt">
					<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
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
            	<ul class="salon_guests_tab">
				<?php if(isset($rows1)) {
						foreach($rows1 as $r) { ?>
                	<li class="cur"><a href=""><?php echo $r->title;?></a></li>
				
                </ul>
                <div class="guests_txt">
                	<div class="guestsbox">
                    	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85"/>
                        <div class="guests_writing">
                          <p>主将嘉宾: <?php echo $r->lecturer;?></p>
                            <p>主将内容: <?php echo $r->content;?></p>
                            <p class="mes">50条留言</p>
                            <p class="down"><a href="">MySQL Relication技术深入.ppt</a></p>
                        </div>
                    </div>
                </div><?php }}?>
            </div>
            <!-- /切换嘉宾介绍-->
            <!--BBS内容开始-->
            <div class="salonbbs">
            	<div class="salonbbs_top"></div>
                <div class="salonbbs_conn">
                	<h4>沙龙讨论区</h4>
                    <ul class="salon_tab">
					
					<?php if(isset($rows21)) {
											foreach($rows21 as $r) { ?>
						<li><button style="BORDER-RIGHT: #7b9ebd 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #7b9ebd 1px solid; PADDING-LEFT: 2px; FONT-SIZE: 12px; FILTER: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr=#ffffff, EndColorStr=#cecfde); BORDER-LEFT: #7b9ebd 1px solid; CURSOR: hand; COLOR: black; PADDING-TOP: 2px; BORDER-BOTTOM: #7b9ebd 1px solid
" type="button" onclick="data_all(this.value)" value="<?php echo $r->fromsalon;?>">全部</button></li><?php }}?>
								
					  <?php if(isset($rows2)) {
											foreach($rows2 as $r) { ?>
					  <button type="button" onclick="data(this.value)" value="<?php echo $r->classid;?>"><?php echo $r->title;?></button><?php }}?>
                    </ul>
					<div id=mycon><!-- my-->
                    <ul class="salonlist clearfix">
					<?php if(isset($rows3)) {
						foreach($rows3 as $r) { ?>
                    	<li>
                        	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                        	<div class="salon_bbsbox">
                            	<p class="salonlist_tit"><em><?php echo $r->commid;?></em> - <?php echo $r->time;?> </p>
                                <p class="salonlist_txt"><?php echo $r->content;?></p>
                            </div>
                        </li><?php }}?>
						  
						</ul><!-- 分页-->
						
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
					<!-- 评论-->
				   <form action='<?php echo base_url();?>index.php/add_comm/do' method='post'>
                    <div class="enter_comment">
                        <p class="textareabox"><textarea name="content" id="textarea" cols="45" rows="5">#来说两句吧#</textarea>
                        </p>
                        <p class="enter_btn"><a href="#"><input name="submit" type="submit" value="发表评论" /></a></p>					
                    </div>
					</form>
					
                    <!-- /评论-->
                  </div>		
<SCRIPT type=text/javascript>
var xmlHttp

function data(str)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="<?php echo base_url();?>index.php/ajax/period_salon_comm"
url=url+"?q="+str
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function data_all(str)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="<?php echo base_url();?>index.php/ajax/period_salon_comm1"
url=url+"?q="+str
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("mycon").innerHTML=xmlHttp.responseText 
 } 
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
</SCRIPT>       
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
