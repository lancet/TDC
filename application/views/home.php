<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost/dilicms/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php 
if ($this->session->userdata('username_uid')) 
{
	echo 'welcome come back!';
	echo '<br />';
	echo '<a href="http://localhost/dili/index.php/tao/person">'.$this->session->userdata('username_uid').'</a>'; 
	echo '<br />';
	echo '<a href="http://localhost/dili/index.php/login/quit">login out</a>';
}
else {
 ?><b><?php echo $this->session->flashdata('error'); ?></b>
	<form action='http://localhost/dili/index.php/login/do' method='post'>
      <!--Left Block Starts -->
      <div id="left_block"> <span class="blk1_lp"> <span class="our">Member Login</span> <span class="usr" style="margin-top:12px;">User Login</span>
        <input name="username" type="text" class="txbx" />
        <span class="usr">Password</span>
        <input name="password" type="password" class="txbx" />
        <span class="chk">
        <input name="" type="checkbox" value="" />
        <span>Remember me</span> </span> <span class="usr">No Account Yet? <a href="#">Register</a></span>
        <input name="" type="submit" class="smt" value="" />
        </span><?php }?>
	</form>
	
	
</body>
</html>
