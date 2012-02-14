<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<title>所有讲师页面</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--退出登录开始-->
   	  	<div class="lecturer clearfix">
        	<!--分页-->
        	<div class="pages clearfix">
                <ul>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
				 <span class="pre">共40页</span>
            </div>
            <!--/分页-->
            <div class="lecturer_l clearfix">
            	<ul class="letter_1">
                	<li><a href="#">数据</a></li>
                    <li><a href="#">前段</a></li>
                    <li><a href="#">测试</a></li>
                    <li><a href="#">系统</a></li>
                    <li><a href="#">无线</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">交互</a></li>
                    <li><a href="#">运维</a></li>
                </ul>
                <ul class="letter">
                	<li><a href="#">A</a></li>
                    <li><a href="#">B</a></li>
                    <li><a href="#">C</a></li>
                    <li><a href="#">D</a></li>
                    <li><a href="#">E</a></li>
                    <li><a href="#">F</a></li>
                    <li><a href="#">G</a></li>
                    <li><a href="#">H</a></li>
                    <li><a href="#">I</a></li>
                    <li><a href="#">J</a></li>
                    <li><a href="#">K</a></li>
                    <li><a href="#">L</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">N</a></li>
                    <li><a href="#">O</a></li>
                    <li><a href="#">P</a></li>
                    <li><a href="#">Q</a></li>
                    <li><a href="#">R</a></li>
                    <li><a href="#">S</a></li>
                    <li><a href="#">T</a></li>
                    <li><a href="#">U</a></li>
                    <li><a href="#">V</a></li>
                    <li><a href="#">W</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Z</a></li>
                </ul>
            </div>
            
            <div class="lecturer_r">
			<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
            	<div class="lecturerbox">
                    <div class="about_top"></div>
                    <div class="about_conn">
                        <div class="user"><img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" alt="" /><p><?php echo $r->nickname;?></p></div>
                        <p class="txt"><?php echo $r->instruction;?></p>
                        <ol>
                            <li><strong>主讲沙龙：</strong><p>
							<?php
$q=$r->classid;
$sql="SELECT * FROM dili_u_c_childtopic WHERE lecturer = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?><?php echo $row['title'];?>、<?php }?></p></li>
                          <li><strong>技术日志：</strong><p><?php
$t=$r->nickname;
$sql="SELECT * FROM dili_u_c_article WHERE author = '".$t."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?><?php echo $row['title'];?>、<?php }?></p></li>
                        </ol>
                        <p class="btn"><a href="<?php echo base_url();?>index.php/dclub/guests/<?php echo $r->classid;?>"><img src="<?php echo base_url();?>images/common/btn_tahome.jpg" width="114" height="33" /></a></p>
                    </div>
                    <div class="about_bottom"></div>
                </div><?php }}?>
              
             
                <!--分页-->
                <div class="pages clearfix">
                    <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                    </ul>
					 <span class="pre">共40页</span>
                </div>
                <!--/分页-->
            </div>
        </div>
      	<!--/退出登录结束-->
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
