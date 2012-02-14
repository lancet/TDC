<?php
require('OAuth.php');
require('config.inc');
$oauth_token = $_REQUEST['oauth_token'];
session_start();
$oauth_token_secret = $_SESSION['request_token_secret'];
$consumer = new OAuthConsumer($api_key, $api_key_secret);
$request_token = new OAuthConsumer($oauth_token, $oauth_token_secret);
$acc_req = OAuthRequest::from_consumer_and_token($consumer, $request_token, "GET", $access_token_url);
$acc_req->sign_request($sig_method, $consumer, $request_token);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $acc_req->to_url());
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
$result=explode("=",$result);
$douban_id = $result[3];//id
$url = "http://api.douban.com/people/".$douban_id;
$obj = simplexml_load_file($url);
$name = $obj->title;
$name = ''.$name;//nickname
$a = $obj->link[1]->attributes();
$describe = $a[0];
$describe = ''.$describe;
$b = $obj->link[2]->attributes();
$avatar = $b[0];//pic

$sql="SELECT * FROM dili_u_c_guest WHERE username = '".$douban_id."' ";
$result = mysql_query($sql);
if(mysql_num_rows($result) == 0)
{
header("Location:http://developerclub.taobao.com/index.php/dclub/firstlogin");
}
else{
	while($row = mysql_fetch_array($result))
	{
		$this->session->set_userdata('username',$row['wb_screen_name']);
		
	}
	header("Location:http://developerclub.taobao.com");
	
}

?>
