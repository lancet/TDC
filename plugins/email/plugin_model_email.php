<?php

	//此类型插件对全局模型有效，所以需要自己在其中判断当前的模型是否是你想操作的模型，以免误操作，切记切记!
	class plugin_model_email extends Dili_model_plugin
	{
		function __construct($name)
		{
			parent::__construct($name);
		}// name是当前插件的名字
		
		//注册模型信息插入前操作
		function register_before_insert(& $data)
		{}//参数是插入数据引用
		
		
	}