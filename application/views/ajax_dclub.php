<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'qituyou_root', 'lancet123');
@mysql_query("set names utf8");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("developerclub", $con);

$sql="SELECT * FROM dili_u_c_childtopic WHERE fromsalon = '".$q."'";

$result = mysql_query($sql);
?>
 
					<?php while($row = mysql_fetch_array($result))
 { ?>
                    	<li>
                        	<?php echo $row['title'];?>
                        </li><?php }mysql_close($con);?>
						  
						