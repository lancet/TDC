<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/conf/login.css" />
<title>个人页面-登录</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--退出登录开始-->
   	  	<div class="login_quit clearfix">
        	<div class="account">
            	<h3>您可以使用下列帐号登陆:</h3>
                <ul class="app_list">
                	<li class="weibo"><a href="<?php echo $weibo;?>">微博账号</a></li>
                    <li class="msn"><a href="<?php echo $msn;?>">MSN账号</a></li>
                    <li class="twitter"><a href="<?php echo base_url();?>index.php/login/twitter">twitter账号</a></li>
                    <li class="taobao"><a href="#">淘宝账号</a></li>
                    <li class="qq"><a href="<?php echo $qq;?>">QQ账号</a></li>
                    <li class="douban"><a href="<?php echo base_url();?>douban/request_token.php">豆瓣账号</a></li>
					
                </ul>
			  <form action='<?php echo base_url();?>index.php/login/do' method='post'>
              <p class="app_registration">
			  
			  用户名：<input name="username" type="text" id="textfield" value="" /><br /><br />
			  密&nbsp;&nbsp;&nbsp;码：<input name="password" type="password" id="textfield" value="" /><br /><br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="submit" class="smt" value="登陆" />  &nbsp;&nbsp;&nbsp;<input name="" type="reset" class="smt" value="重填" /></p>
			  </form>
            </div>
            <div class="pic_list">
            	<ul>
                	<li><img src="<?php echo base_url();?>images/temp/temp_01.jpg" width="150" height="150" alt="" /></li>
                    <li><img src="<?php echo base_url();?>images/temp/temp_02.jpg" width="150" height="150" alt="" /></li>
                    <li><img src="<?php echo base_url();?>images/temp/temp_03.jpg" width="150" height="150" alt="" /></li>
                    <li><img src="<?php echo base_url();?>images/temp/temp_02.jpg" width="150" height="150" alt="" /></li>
                    <li><img src="<?php echo base_url();?>images/temp/temp_03.jpg" width="150" height="150" alt="" /></li>
                    <li><img src="<?php echo base_url();?>images/temp/temp_01.jpg" width="150" height="150" alt="" /></li>
                </ul>
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
