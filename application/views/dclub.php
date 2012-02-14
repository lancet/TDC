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
	<div class="main pt">
		<div class="banner" style="display:">
        	<div class="news">
                 <div class="news_txt">ios 5的新功能？<br /> 一点也不新哦！<span class="tip" style=""><img src="<?php echo base_url();?>images/common/ico_tip.gif" width="34" height="36" alt="2012" /></span></div>
          </div>
            <div class="circle">
                <a href="<?php echo base_url();?>index.php/dclub/members/TCon"><img class="ico_ico ico_ico01" title="" src="<?php echo base_url();?>images/common/transparent.gif"></a>
                <a href="<?php echo base_url();?>index.php/dclub/members/iDevOps"><img class="ico_ico ico_ico02" title="" src="<?php echo base_url();?>images/common/transparent.gif"></a>
                <a href="<?php echo base_url();?>index.php/dclub/members/iDataForum"><img class="ico_ico ico_ico03" title="" src="<?php echo base_url();?>images/common/transparent.gif"></a>
                <a href="<?php echo base_url();?>index.php/dclub/members/D2"><img class="ico_ico ico_ico04" title="" src="<?php echo base_url();?>images/common/transparent.gif"></a>
                <a href="<?php echo base_url();?>index.php/dclub/members/aDev"><img class="ico_ico ico_ico05" title="" src="<?php echo base_url();?>images/common/transparent.gif"></a>
            	<div class="circle_tit">我们的技术圈</div>
            </div>
        </div>
   	  <!--左侧内容开始-->
   	  	<div class="sideleft">
          <div class="title">
                  精彩沙龙
                  <div class="btn_arrow"><a href="<?php echo base_url();?>index.php/dclub/all_salon"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          </div>
          	<div class="saloncontent">
                <img src="<?php echo base_url();?>images/common/img_banner01.jpg" width="160" height="428" />
                <div class="sharelist">
					<?php if(isset($rows2)) {
						foreach($rows2 as $r) { ?>
                	<dl>
                    	<dt><a href="<?php echo base_url();?>index.php/dclub/period_salon/<?php echo $r->classid;?>"><?php echo $r->theme;?></a>   <span><?php echo str_cut($r->stime,10);?></span></dt>
                        <dd>
                        	<ul>
<?php
$q=$r->classid;
$sql="SELECT * FROM dili_u_c_childtopic WHERE fromsalon = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?>
                            	
                                <li>话题：<?php echo $row['title'];?></li><?php }?>
                            </ul>
                        </dd>
                        <dd class="mas">留言：<span>51</span> 资料下载：<span>23</span></dd>
                    </dl><?php }}?>
                    
                    
                </div>
            </div>
            <!--技术师开始-->
            <div class="title">
                  技术布道师
                  <div class="btn_arrow"><a href="<?php echo base_url();?>index.php/dclub/all_guest"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
            </div>
            <div class="therapist clearfix">
            	<ul>
				<?php if(isset($rows3)) {
						foreach($rows3 as $r) { ?>
               	  <li>
                   	<div class="therapist_pic">
                        	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                        	<p><a href="<?php echo base_url();?>index.php/dclub/guests/<?php echo $r->classid;?>"><?php echo $r->nickname;?></a></p>
                    </div>
                    	<div class="introduct">
                        	<p class="course"><?php echo $r->chenghao;?></p>
                            <p><?php echo $r->instruction;?></p>
                        </div>
                  </li><?php }}?>
                  
                   
                 
                </ul>
          	</div>
            <!--/技术师结束-->
            <!--我爱开源开始-->
          <div class="title">
                  我爱开源
                  <div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          </div>
            <div class="opensource">
            	<ul>
                	<li>
                    	<div class="open_pic">
                            <img src="<?php echo base_url();?>images/temp/pic_temp01.jpg" width="153" height="108" />
                            <span class="ico_new"></span>                        </div>
                        <p class="open_tit">配合zookeeper的快速切换</p>
                        <p class="open_conn">以"Enjoy Testing"为话题， 测试专业人士、开发者及爱者带来极具价值的行业视点。</p>
                        <p class="open_mas">留言 <span>501</span></p>
                    </li>
                    <li>
                    	<div class="open_pic">
                            <img src="<?php echo base_url();?>images/temp/pic_temp01.jpg" width="153" height="108" />
                            <span class="ico_new"></span>                        </div>
                        <p class="open_tit">配合zookeeper的快速切换</p>
                        <p class="open_conn">以"Enjoy Testing"为话题， 测试专业人士、开发者及爱者带来极具价值的行业视点。</p>
                        <p class="open_mas">留言 <span>501</span></p>
                    </li>
                    <li class="open_banner"><img src="<?php echo base_url();?>images/common/img_banner02.jpg" width="88" height="290" alt="" /></li>
                    <li class="lst">
                    	<div class="open_pic">
                            <img src="<?php echo base_url();?>images/temp/pic_temp01.jpg" width="153" height="108" />
                            <span class="ico_new"></span>                        </div>
                        <p class="open_tit">配合zookeeper的快速切换</p>
                        <p class="open_conn">以"Enjoy Testing"为话题， 测试专业人士、开发者及爱者带来极具价值的行业视点。</p>
                        <p class="open_mas">留言 <span>501</span></p>
                    </li>
                </ul>
          </div>
            <!--/我爱开源结束-->
  	  </div>
      	<!--/左侧内容结束-->
        <!--右侧内容开始-->
        <div class="sideright">
        	<!--本期沙龙开始-->
       	  <div class="title">本期沙龙</div>
            <div class="period">
            	<div class="period_t"></div>
              <div class="period_conn">
					<?php if(isset($rows1)) {
						foreach($rows1 as $r) { ?>
                	<h4><?php echo $r->theme;?></h4>
                    <p class="conn"><?php echo $r->location;?></p>
                    <p><?php echo $r->introduction;?></p>
                    <p>时间 : <?php echo str_cut($r->stime,10);?>>><a href="<?php echo base_url();?>index.php/dclub/period_salon/<?php echo $r->classid;?>">details</a></p>
					<?php }}?>
                   
              </div>
                <div class="period_bg"></div>
                <div class="attention">
                    <p>敬请关注下期idata技术沙龙</p>
                    <p class="station"><a href="">北京站</a><a href="">杭州站</a></p>
              </div>
                <div class="period_bt"></div>
          </div>
            <!--/本期沙龙结束-->
            <!--技术日志开始-->
          <div class="title log_tit">
            	技术日志
            	<div class="btn_arrow"><a href="<?php echo base_url();?>index.php/article/all"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          </div>
            <div class="log">
			<?php if(isset($rows4)) {
						foreach($rows4 as $r) { ?>
            	<h5><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>">[ iData ] <?php echo $r->title;?></a></h5>
                <p><?php echo $r->summary;?></p><?php }}?>
               
                <ul><?php if(isset($rows5)) {
						foreach($rows5 as $r) { ?>
                	<li><div class="loglist"><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>">[ D2 ] <?php echo $r->title;?></a><?php if($r->ishot==1) echo "<span class=\"hot\"><img src=\"".base_url()."images/common/tips_hot.gif\" width=\"34\" height=\"17\" alt=\"hot\" /></span>";?></div>
                	</li><?php }}?>
                  
                </ul>
            </div>
            <!--/技术日志结束-->
            <!--/技术Q&A-->
            <div class="title log_tit">
            	技术日志
            	<div class="btn_arrow more"><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_top.png" /></a><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_down.png" /></a></div>
            </div>
            <div class="q_and_a">
            	<dl>
				<?php if(isset($rows6)) {
						foreach($rows6 as $r) { ?>
                	<dt><img src="<?php echo base_url();?>images/common/ico_q.gif" /></dt>
                    <dd><?php echo $r->question;?></dd>
                    <dt><img src="<?php echo base_url();?>images/common/ico_a.gif" /></dt>
                    <dd><?php echo $r->answer;?></dd>
                </dl>
                <p class="quote">——《<span>配合zookeeper的快速切换</span>》</p>
          </div><?php }}?>
            <!--/技术Q&A结束-->
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
