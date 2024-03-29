<?php
	class Plugin extends Admin_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->_check_permit();
			$this->load->model('dili/plugin_mdl');
		}
		
		function view()
		{
			$data['list'] = $this->plugin_mdl->get_plugins();
			$this->_template('plugin_list',$data);
		}
		
		function add()
		{
			$this->_add_post();
		}
		
		function _add_post()
		{	
			if($this->_validate_model_form() == TRUE)
			{
				
				//新增分类模型
				$this->plugin_mdl->add_plugin($this->_get_post_data());
				//更新缓存
				update_cache('plugin');
				
				$this->_message('插件添加成功!','plugin/view',true);
			}
			else
			{
				$this->_template('plugin_add');
			}
		}
		
		function edit( $id = 0 )
		{
			$this->_edit_post($id);
		}
		
		function _edit_post( $id = 0)
		{
			$target_plugin = $this->plugin_mdl->get_plugin_by_id($id);
			!$target_plugin && $this->_message('不存在的插件!','',false);
			if($this->_validate_model_form($target_plugin->name) == TRUE)
			{
				$this->plugin_mdl->edit_plugin($target_plugin->id,$this->_get_post_data());
				update_cache('plugin');
				$this->_message('插件修改成功!','plugin/edit/'.$target_plugin->id,true);
			}
			else
			{
				$this->_template('plugin_edit',array('plugin'=>$target_plugin));
			}
		}
		
		function _validate_model_form($name = '' , $load_form = true)
		{
			$this->load->library('form_validation');
			$callback = '|callback__check_plugin_name';
			if( $name && $name == trim($this->input->post('name')) )
			{
				$callback = '';
			}
			$this->form_validation->set_rules('name', '插件标识' , 'trim|required|alpha_dash|min_length[3]|max_length[20]'.$callback);
			$this->form_validation->set_rules('title', '插件名称' , 'trim|required|max_length[50]');
			$this->form_validation->set_rules('version', '插件版本' , 'trim|required|max_length[5]');
			$this->form_validation->set_rules('description', '插件描述' , 'trim|max_length[200]');
			$this->form_validation->set_rules('author', '插件作者' , 'trim|required|max_length[20]');
			$this->form_validation->set_rules('link', '插件网址' , 'trim|max_length[100]');
			$this->form_validation->set_rules('copyrights', '插件版权' , 'trim|max_length[100]');
			$this->form_validation->set_rules('access', '是否root可用' , 'trim');

  			if ($this->form_validation->run() == FALSE)
  			{
				$load_form && $this->load->library('dili/form');
				return FALSE;
  			}
			else
			{
				return TRUE;
			}
		}
		
		function _get_post_data()
		{
			//获取表单数据
			$data['name'] = $this->input->post('name');
			$data['title'] = $this->input->post('title');
			$data['version'] = $this->input->post('version');
			$data['description'] = $this->input->post('description');
			$data['author'] = $this->input->post('author');
			$data['link'] = $this->input->post('link');
			$data['copyrights'] = $this->input->post('copyrights');
			$data['access'] = $this->input->post('access');
			return $data;
		}
		
		function del()
		{
			$this->_del_post();
		}
		
		function _del_post()
		{
			$ids = $this->input->get_post('id');
			if(!is_array($ids))
			{
				$ids = array($ids);	
			}
			$this->plugin_mdl->del_plugin($ids);
			update_cache('plugin');
			$this->_message('插件卸载成功!','plugin/view/',true);
		}
		
		function _export_post()
		{
			$ids = $this->input->get_post('id');
			if(!is_array($ids))
			{
				$ids = array($ids);	
			}
			$this->plugin_mdl->export_plugin($ids);
			$this->_message('插件导出成功!','plugin/view/',true);	
		}
		
		function _check_plugin_name($name)
		{
			if($this->plugin_mdl->check_plugin_name($name))
			{
				$this->form_validation->set_message('_check_plugin_name', '已经存在的插件标识！');	
				return false;	
			}
			else
			{
				return true;
			}
		}
		
		function active()
		{
			$this->_active_post();
		}
		
		function _active_post()
		{
			$id = $this->input->get_post('id');
			if(!is_array($id)){$id = array($id);}
			$this->plugin_mdl->active_plugins($id,1);
			update_cache('plugin');
			$this->_message('插件启用成功!','plugin/view/',true);
		}
		
		function deactive()
		{
			$this->_deactive_post();
		}
		
		function _deactive_post()
		{
			$id = $this->input->get_post('id');
			if(!is_array($id)){$id = array($id);}
			$this->plugin_mdl->active_plugins($id,0);
			update_cache('plugin');
			$this->_message('插件禁用成功!','plugin/view/',true);
		}
		
		function import()
		{
			$this->_template('plugin_import');	
		}
		
		function _import_post()
		{
			$plugin = $this->input->post('plugin');
			!class_exists('SimpleXMLElement') && $this->_message('检测到服务器不支持SimpleXMLElement类，请开启后重试！','plugin/import/',true);
			libxml_use_internal_errors(true); 
			try{ 
				$plugin_xml = new SimpleXMLElement($plugin,NULL,true); 
				if((string)$plugin_xml->attributes() === 'DiliCMS' && ($plugin_info = (array)$plugin_xml->plugin[0]))
				{
					$_POST = & $plugin_info;
					if($this->_validate_model_form('',false))
					{
						//新增分类模型
						$this->plugin_mdl->add_plugin($_POST);
						//更新缓存
						update_cache('plugin');
						
						$this->_message('插件安装成功!','plugin/view',true);
					}
					else
					{
						$this->_message(validation_errors(),'plugin/import/',true);	
					}
				}
				else
				{
					$this->_message('不合法的安装XML文件!','plugin/import/',true);	
				}
			} catch (Exception $e){ 
				$this->_message('XML文件读取失败，请检查地址!','plugin/import/',true);
			} 
		}
				
	}