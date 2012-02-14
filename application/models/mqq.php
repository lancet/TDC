<?php

	class Mqq extends CI_Model {
		function __construct()
        {
			parent::__construct();
        }
		
		function url()
		{
			$url = "http://developerclub.taobao.com/qq/oauth/redirect_to_login.php";
			return $url;
		}	
		
	}	
