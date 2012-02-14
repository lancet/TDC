<?php
	
	define('DiliCMS_VERSION','V1.0 Beta3');
	define('DiliCMS_BUILDTIME','2011年8月13日 14:48:58');
	
	abstract class Dili_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('dili/settings');
			$this->load->helper('url');
		}
		
		function _theme_switcher($button = 'on' , $theme = 'default' ,$path = 'templates/'){
			if($button == 'on')
			{
				$this->load->_ci_view_path = FCPATH.$path.$theme.'/';
			}
		}
			
	}
	abstract class Dclub_Controller extends CI_Controller
	{
	}
	//前台控制器扩展例子
	abstract class Front_Controller extends Dili_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->_theme_switcher('on',setting('site_theme'));
		}
		
		function _template($template, $data = array())
		{
			$data['tpl'] = $template;
			$this->load->view('default',$data);
		}

	}
	
	//后台控制器扩展，如果您不了解其作用，请不要随意更改此处
	abstract class Admin_Controller extends Dili_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->settings->load('backend');
			$this->_theme_switcher('on',setting('backend_theme'),'admincp/');
			//设置session参数
			$this->config->set_item('sess_cookie_name' ,'dili_session');
			$this->config->set_item('sess_expiration' , 7200);
			$this->config->set_item('sess_expire_on_close' ,FALSE);
			$this->config->set_item('sess_encrypt_cookie' ,FALSE);
			$this->config->set_item('sess_use_database' ,TRUE);
			$this->config->set_item('sess_table_name' ,'dili_sessions')	;
			$this->config->set_item('sess_match_ip' ,FALSE)	;
			$this->config->set_item('sess_match_useragent' ,TRUE)	;
			$this->config->set_item('sess_time_to_update' ,300)	;
			//
			$this->load->database();
			$this->load->library('session');
			$this->_check_login();
			$this->load->library('dili/acl');
			$this->load->library('dili/plugin_manager');
			
		}
		
		function _check_login()
		{
			if(! $this->session->userdata('uid'))
			{
				redirect(setting('backend_access_point').'/login');
			}
			else
			{
				$this->_admin = $this->db->select('dili_admins.uid , dili_admins.username, dili_admins.role , dili_roles.name')
								  		->from('dili_admins')
								  		->join('dili_roles','dili_roles.id = dili_admins.role')
								  		->where('dili_admins.uid' , $this->session->userdata('uid') )
								  		->get()
								  		->row();
			}
		}
		
		function _template($template, $data = array())
		{
			$data['tpl'] = $template;
			$this->load->view('sys_entry',$data);
		}
		
		function _check_permit($action = '')
		{
			if(!$this->acl->permit($action))
			{
				$this->_message('对不起，你没有访问这里的权限！','',false);
			}
		}
		
		function _message($msg, $goto = '',$auto = true,$fix = '')
		{
			if($goto == '')
			{
				$goto = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url();
			}
			else
			{
				$goto = strpos($goto,'http') !== false ? $goto : backend_url($goto);	
			}
			$goto .= $fix;
			$this->_template('sys_message',array('msg'=>$msg,'goto'=>$goto,'auto'=>$auto));
			echo $this->output->get_output();
			exit();
		}
	}
	
	//后台URI生成函数
	function backend_url($uri,$qs = '')
	{
		return site_url(setting('backend_access_point').'/'.$uri).($qs == '' ? '' : '?'.$qs);
	}