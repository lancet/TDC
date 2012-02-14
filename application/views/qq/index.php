<?php
	header("Content-type: text/html; charset=utf-8");
	$qq_id = $_GET['qq_id'];
	$nick = $_GET['nick'];
	$avatar = $_GET['avatar'];
	//$this->session->set_userdata('username',$qq_id);
	$sql="SELECT * FROM dili_u_c_guest WHERE username = '".$qq_id."' ";
$result = mysql_query($sql);
if(mysql_num_rows($result) == 0)
{
header("Location:http://developerclub.taobao.com/index.php/dclub/firstlogin");
}
else{
	while($row = mysql_fetch_array($result))
	{
		$this->session->set_userdata('username',$row['nickname']);
	}
	header("Location:http://developerclub.taobao.com");
}
?>