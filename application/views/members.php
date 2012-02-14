<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/index.css" />
<title>首页</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main pt02">
		<div class="banner banner02" style="display:">
        	<div class="banner_tit">
            	<img src="<?php echo base_url();?>images/common/ico_d2.gif" width="151" height="122" />
        	  	<ul>
                    <li><div class="newslist">最新沙龙
					<?php if(isset($rows4)) {
						foreach($rows4 as $r) { ?>
					<b><?php echo $r->theme;?></b><span class="new"></span></div></li><?php }}?>
                    <li><div class="newslist">资料下载<b>《配合zookeeper的快速切换》</b></div></li>
                    <li><div class="newslist">人气文章<b>《配合zookeeper的快速切换》</b></div></li>
              	</ul>
          	</div>
			<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
            <p class="intor"><?php echo $r->introduce;?></p><?php }}?>
      </div>
   	  <!--左侧内容开始-->
   	  	<div class="sideleft">
          <div class="title">
                  精彩沙龙
                  <div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          </div>
          	<div class="saloncontent">
                <div class="sharelist02">
                	<div class="share">
					<?php if(isset($rows1)) {
						foreach($rows1 as $r) { ?>
                    	<img src="<?php echo base_url();?>images/temp/temp02.jpg" width="182" height="126" />
						
                	    <dl>
                	    <dt><a href="<?php echo base_url();?>index.php/dclub/period_salon/<?php echo $r->classid;?>"><?php echo $r->theme;?></a>   <span>2011-11-21</span></dt>
                              <dd>
                                <ul>
								<?php
$q=$r->classid;
$sql="SELECT * FROM dili_u_c_childtopic WHERE fromsalon = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                                  <li><?php echo $row['title'];?></li><?php }?>
                                     
                                </ul>
                              </dd>
                              <dd class="mas">留言：<span>51</span> 资料下载：<span>23</span></dd>
                        </dl><?php }}?>
                  </div>
                  
                </div>
            </div>
            <!--技术师开始-->
            <div class="title">
                  技术文章
                  <div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
            </div>
            <div class="log">
                <ul>
				<?php if(isset($rows3)) {
						foreach($rows3 as $r) { ?>
                    <li><div class="loglist"><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>"><?php echo $r->title;?></a>
					<?php if($r->ishot==1){?><span class="hot"><img src="<?php echo base_url();?>images/common/tips_hot.gif" width="34" height="17" alt="hot" /></span><?php }?></div>
                    </li><?php }}?>
                    
                 
                </ul>
          	</div>
            <div class="pages">
                <ul>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
            </div>
            <!--/技术师结束-->
  	  	</div>
      	<!--/左侧内容结束-->
        <!--右侧内容开始-->
        <div class="sideright">
        	<!--布道师开始-->
       	  	<div class="title log_tit">
            	技术布道师
            	<div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
            </div>
            <div class="therapist clearfix">
            	<div class="therapist_list">
            		<ul>
					<?php if(isset($rows2)) {
						foreach($rows2 as $r) { ?>
               	  	<li>
                        <div class="therapist_pic">
                            <img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                            <p><?php echo $r->nickname;?></p>
                        </div>
                  	</li><?php }}?>
                   
                   
                   
                </ul>
                </div>
          	</div>
            <!--/布道师结束-->
            <!--最热下载开始-->
          	<div class="title log_tit">
            	最热下载
            	<div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          	</div>
            <div class="hotdown">
                <ul>
                    <li><span>1.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>2.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>3.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>4.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>5.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>6.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>7.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>8.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>9.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                    <li><span>10.</span><a href="">MySQL Relication 技术深入技术深.ppt</a></li>
                </ul>
          	</div>
            <!--/最热下载结束-->
        </div>
        <!--/左侧内容结束-->
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
