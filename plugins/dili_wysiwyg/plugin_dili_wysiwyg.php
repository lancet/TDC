<?php

	class plugin_dili_wysiwyg extends Dili_plugin
	{
		
		function __construct($name)
		{
			parent::__construct($name);
		}
		
		function register_left_menu()
		{
			return  array(  'menu_name' => '随变编辑器',
							'sub_menus' => array(
												  0=>array('class_name'=>$this->_name,'method_name'=>'config','menu_name'=>'编辑器设置')
												)
						  );	
		}
		
		function config()
		{
			return include($this->_path.'include/list.inc.php');
		}
		
		
		function save()
		{
			$editors = array();
			$tmp = $this->_ci->input->post('editors');
			$data = $tmp['list'];
			if($data['_new_']['id'])
			{
				$data[$data['_new_']['id']]	= $data['_new_'];
			}
			unset($data['_new_']);
			$editors['list'] = $data;
			if($this->_ci->input->post('default'))
			{
				$editors['default'] = $_POST['default'];	
			}
			else
			{
				$editors['default'] = '';	
			}
			file_put_contents($this->_path.'include/config.inc.php',$this->_arrayeval('editors',$editors));
			$this->_ci->_message('编辑器配置修改成功！','',true);
		}
		
		function _arrayeval($name, $array)
		{
			return '<?php '.PHP_EOL . '$' . $name . '=' . var_export($array,true).';'; 
		}
	}