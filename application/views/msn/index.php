<?php
header("Content-type: text/html; charset=utf-8");
$msn_id = $_GET["id"];
$name = $_GET["name"];

$sql="SELECT * FROM dili_u_c_guest WHERE username = '".$msn_id."' ";
$result = mysql_query($sql);
if(mysql_num_rows($result) == 0)
{
	$this->session->set_userdata('isfirst',0);
}
else{
	while($row = mysql_fetch_array($result))
	{
		$this->session->set_userdata('username',$row['nickname']);
		$this->session->set_userdata('pic','null');
	}
	$this->session->set_userdata('isfirst',1);
	
}

	
?>