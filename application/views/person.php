<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/club.css" />
<title>消息中心</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--俱乐部主页内容开始-->
   	  	<div class="club">
        	<div class="club_left">
                <ul class="clubtab">
					<li class="cur"><a href="http://localhost/dili/index.php/person">个人中心</a></li>
                	<li><a href="#">俱乐部动态</a></li>
                    <li><a href="#">站内信</a></li>
                    <li><a href="http://localhost/dili/index.php/person/per_return">评论/回复</a></li>
                </ul>
                <!--消息中心列表-->
                <ul class="noticelist nom">
                	<li>
                    	<p><a href="http://localhost/dili/index.php/person/article">文章管理</a></p>
                 
                    </li>
                    <li>
                    	<p><a href="http://localhost/dili/index.php/person/up_article">发表文章</a></p>
                      
                    </li>
                    <li>
                    	<p>更改资料</p>
                        
                    </li>
            
           
                   
                </ul>
                <!--/消息中心列表-->
            
            </div>
            <div class="club_info">
                <div class="title log_tit">
                    已关注的沙龙
                    <div class="btn_arrow more"><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_top.png"></a><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_down.png"></a></div>
            	</div>
                <ul class="club_infolist">
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
				<?php
$q=$r->slid;
$sql="SELECT * FROM dili_u_c_salon WHERE classid = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                	<li class="ppt">
                    	<div class="club_info_txt"><em><?php echo $row['theme'];?></em>
						<?php  if($row['showtime']==0){?><span class="tips"><img src="<?php echo base_url();?>images/common/ico_month.gif" width="24" height="15" /></span><?php }?></div>
                	</li><?php }?><?php }}?>
                   
                  
                </ul>
                <div class="title log_tit">
                    可能感兴趣的沙龙
                    <div class="btn_arrow more"><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_top.png"></a><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_down.png"></a></div>
            	</div>
                <ul class="club_infolist02">
				<?php if(isset($rows1)) {
						foreach($rows1 as $r) { ?>
                	<li><?php echo $r->theme;?></li><?php }}?>
                    
                </ul>
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
