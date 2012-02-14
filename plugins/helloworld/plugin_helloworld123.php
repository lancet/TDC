<?php

	class plugin_helloworld123 extends Dili_plugin
	{
		function __construct($name)
		{
			parent::__construct($name);	
		}
		
		//用于导航栏链接的
		function register_navigation()
		{
			echo '<a href="'.backend_url('module/run','plugin=helloworld123&action=welcome').'" class="selected"><span>测试</span></a>';
		}
		
		function save()
		{
		return $this->_template('views/list',array(),false);
			echo 'save';
		}
		
		//这个函数必须用如下格式返回数据
		function register_left_menu()
		{
			return   array( 'menu_name' => 'Hello World lancet 插件',
							'sub_menus' => array(
												  0=>array('class_name'=>$this->_name,'method_name'=>'welcome','menu_name'=>'lancet欢迎'),
												  1=>array('class_name'=>$this->_name,'method_name'=>'model','menu_name'=>'模型')
												)
						  );
		}
		
		//自定函数的必须最终用return返回view数据
		function model()
		{
		echo 'hee';
		}
		function welcome()
		{
			//return  '<div class="content_box"><div class="content"><b>Hello World lancet Plugin</b></div></div>';
			//或者使用插件自带的函数加载视图，比如该插件文件夹下有views文件夹，里面有个test.php的视图可以使用
			
			return $this->_template('views/list',array(),false);	
			//前2个参数类似ci的load->view
			//第三个参数是控制视图数据是输出还是返回的，在这里需要设为false，然后return
		}
	}