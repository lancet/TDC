<?php
	$content = $_GET['content'];
	$first = strpos($content,"#");
	$last = strrpos($content,"#");
	if($last-$first>0){
		$str = substr($content,$first,$last-$first+1);
		$sub = "<a href='./'>".$str."</a>";		
		$content = str_ireplace($str,$sub,$content);	
		//话题存入数据库操作
	}
	echo $content;