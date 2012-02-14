<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<title>嘉宾主页</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--嘉宾主页内容开始-->
   	  	<div class="guests">
        	<div class="guests_left">
                <div class="about_top"></div>
                <div class="about_conn">
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
                  <dl>
                    	<dt><span><?php echo $r->title;?></span><em>发表时间：<?php echo $r->createtime;?></em></dt>
                        <dd>摘要：<?php echo $r->summary;?><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>" class="more">查看全文&gt;&gt;</a></dd>
                  </dl> <?php }}?>
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
            	<div class="guests_top"></div>
                	<div class="guests_conn">
                    	<div class="info_user">
						<?php if(isset($rows1)) {
						foreach($rows1 as $r) { ?>
                            <img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                            <p><?php echo $r->nickname;?></p>
                        </div>
                    	<p class="info_txt"><?php echo $r->instruction;?></p>
                        <div class="guestslist_top"></div>
                        <div class="guestslist_conn clearfix">
                        	<h6>Ta的最新文章</h6>
                            <ul class="clearfix">
							<?php
$q=$r->nickname;
$sql="SELECT * FROM dili_u_c_article WHERE author = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>             				<li><a href="<?php echo base_url();?>index.php/article/index/<?php echo $row['classid'];?>"><?php echo $row['title'];?></a></li><?php }?>
                                
                            </ul>
                            <h6>Ta的话题</h6>
                            <ul class="clearfix">
							<?php
$t=$r->classid;
$sql="SELECT * FROM dili_u_c_childtopic WHERE lecturer = '".$t."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                            	<li><a href="#"><?php echo $row['title'];?></a></li><?php }?>
                               
                            </ul>
                        </div>
                        <div class="guestslist_bottom"></div>
                        <h6>Ta的微博</h6>
                        <p class="weiboadd"><a href="#">http://weibo/wushuo</a></p>
                    </div><?php }}?>
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
