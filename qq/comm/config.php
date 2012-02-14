<?php

define("QQDEBUG", true);
if (defined("QQDEBUG") && QQDEBUG)
{
    @ini_set("error_reporting", E_ALL);
    @ini_set("display_errors", TRUE);
}

include_once("session.php");

$_SESSION["appid"]    = 100244504; 

$_SESSION["appkey"]   = "b4a9ed93badade58d83cc28ca2bd1a54"; 

$_SESSION["callback"] = "http://developerclub.taobao.com/qq/oauth/get_access_token.php"; 

?>
