<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'qituyou_root', 'lancet123');
@mysql_query("set names utf8");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("developerclub", $con);

echo $q;

$result = mysql_query($sql);




?>