<?php

	//此类型插件对全局模型有效，所以需要自己在其中判断当前的模型是否是你想操作的模型，以免误操作，切记切记!
	class plugin_model_helloworld extends Dili_model_plugin
	{
		function __construct($name)
		{
			parent::__construct($name);
		}// name是当前插件的名字
		
		//注册模型信息插入前操作
		function register_before_insert(& $data)
		{
			echo '1';
		}//参数是插入数据引用
		
		//注册模型信息插入后操作
		function register_after_insert(& $data , $id)
		{echo '1';}//参数是插入数据引用,以及插入后记录的id
		
		//注册模型信息修改前操作
		function register_before_update(& $data , $id)
		{echo '1';}//参数是更新数据的引用，以及记录的id		
		
		//注册模型信息修改后操作
		function register_after_update(& $data , $id)
		{echo '1';}////参数是更新数据的引用，以及记录的id
		
		//注册模型信息插入前操作
		function register_before_delete($ids)
		{echo '1';}//参数是待删除记录的id，类型为array
		
		//注册模型信息插入前操作
		function register_after_delete($ids)
		{echo '1';}//参数是待删除记录的id，类型为array
	}