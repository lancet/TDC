<?php
include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );
$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}
$_SESSION['token'] = $token;
setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
$ms  = $c->home_timeline();
$uid_get = $c->get_uid();
$wb_id = $uid_get['uid'];
$user_message = $c->show_user_by_id($wb_id);
$link = $user_message['domain'];
$wb_screen_name = $user_message['screen_name'];
$wb_avatar_large = $user_message['avatar_large'].'jpg';

$sql="SELECT * FROM dili_u_c_guest WHERE username = '".$qq_id."' ";
$result = mysql_query($sql);
if(mysql_num_rows($result) == 0)
{
	//$this->session->set_userdata('isfirst',0);
	redirect('dclub/firstlogin');
}
else{
	while($row = mysql_fetch_array($result))
	{
		$this->session->set_userdata('username',$row['wb_screen_name']);
		//$this->session->set_userdata('pic',$row['wb_avatar_large']);
	}redirect('dclub');
	//$this->session->set_userdata('isfirst',1);
	
}