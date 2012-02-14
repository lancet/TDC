<?php

	class Mmsn extends CI_Model {
		function __construct()
        {
			parent::__construct();
        }
		
		function url()
		{
			$url = 'https://oauth.live.com/authorize?client_id=00000000480877DB&display=popup&locale=en&redirect_uri=http%3A%2F%2Fdeveloperclub.taobao.com%2Fmsn%2Findex.php&response_type=token&scope=wl.basic&state=display%3Dpopup%26request_ts%3D1321185008701%26response_type%3Dtoken';
			return $url;
		}	
		
	}	
