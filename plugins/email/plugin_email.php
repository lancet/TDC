<?php

	class plugin_email extends Dili_plugin
	{
		function __construct($name)
		{
			parent::__construct($name);	
		}
		
		
		
		//这个函数必须用如下格式返回数据
		function register_left_menu()
		{
			return   array( 'menu_name' => '邮件订阅插件',
							'sub_menus' => array(
												  0=>array('class_name'=>$this->_name,'method_name'=>'welcome','menu_name'=>'邮件管理')								  
												)
						  );
		}
		
		function welcome()
		{
			echo"<script language=javascript> location.href = \"http://localhost/dili/index.php/admin/email/view\"</script>";
		}
	}