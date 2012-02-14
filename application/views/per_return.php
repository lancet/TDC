<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/club.css" />
<title>评论回复</title>
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
                <!--通知列表-->
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
                <div class="commentlist clearfix bg_line">
                	<p class="notice"><em>你的评论被回复：</em><span>2011-10-10</span></p>
                    <div class="userface">
                    	<img src="<?php echo base_url();?>images/temp/temp_face.gif"  class="user" />
                    </div>
                    <div class="comment_txt">
                    	<span class="arrow"></span>
                        <dl>
                            <dt><b class="w_textc">评论人：<?php echo $r->comeid;?></b></dt>
                            <dd> <?php echo $r->content;?></dd>
                        </dl>
                        
                    </div>
                </div><?php }}?>
             
                <!--/通知列表-->
                <!--分页-->
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
                <!--/分页-->
            </div>
            <div class="club_info">
                <div class="title log_tit">
                    已关注的沙龙
                    <div class="btn_arrow more"><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_top.png"></a><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_down.png"></a></div>
            	</div>
                <ul class="club_infolist">
                	<li class="ppt">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em><span class="tips"><img src="<?php echo base_url();?>images/common/ico_month.gif" width="24" height="15" /></span></div>
                	</li>
                    <li class="exl">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em><span class="tips"><img src="<?php echo base_url();?>images/common/ico_month.gif" width="24" height="15" /></span></div>
                	</li>
                    <li class="ppt">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                    <li class="exl">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                    <li class="ppt">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em><span class="tips"><img src="<?php echo base_url();?>images/common/ico_news.gif" width="24" height="15" /></span></div>
                	</li>
                    <li class="exl">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                    <li class="exl">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                    <li class="ppt">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                    <li class="exl">
                    	<div class="club_info_txt"><em><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></em></div>
                	</li>
                </ul>
                <div class="title log_tit">
                    可能感兴趣的沙龙
                    <div class="btn_arrow more"><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_top.png"></a><a href="#"><img src="<?php echo base_url();?>images/common/btn_arrow_down.png"></a></div>
            	</div>
                <ul class="club_infolist02">
                	<li><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></li>
                    <li><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></li>
                    <li><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></li>
                    <li><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></li>
                    <li><a href="#">《浅谈HTML在网页游戏中的应用的应》</a></li>
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
