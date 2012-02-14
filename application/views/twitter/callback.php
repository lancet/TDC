<?php
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
$_SESSION['access_token'] = $access_token;
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);
$_SESSION['status'] = 'verified';
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$content = $connection->get('account/verify_credentials');
$twitter_id = $content->id_str;
$description = $content->description;
$screen_name = $content->screen_name;
$avatar = $content->profile_image_url;

$sql="SELECT * FROM dili_u_c_guest WHERE username = '".$qq_id."' ";
$result = mysql_query($sql);
if(mysql_num_rows($result) == 0)
{
redirect('dclub/firstlogin');
}
else{
	while($row = mysql_fetch_array($result))
	{
		$this->session->set_userdata('username',$row['wb_screen_name']);
		
	}
	redirect('dclub');
	
}