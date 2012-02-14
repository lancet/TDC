<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		//$this->settings->load('backend');
		$this->load->library('session');
		//$this->_theme_switcher('on',setting('backend_theme'),'admincp/');
		$this->load->database();
		$this->load->model('user_mdl');
		$this->load->helper('url');
	}
	function index()
	{
		$this->load->view('login');
	}
	function info()//msn info
	{
	
	}
	function twitter()
	{
		$this->load->view('twitter/redirect');		
	}

	function first()
	{
		if($this->session->userdata('isfirst')==0)
			redirect('dclub/firstlogin');
		else 
			redirect('dclub');
	}
	function _do_post()
	{
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			
			if($username && $password)
			{
				$admin = $this->user_mdl->get_full_user_by_username( $username );
				if($admin)
				{
					if( $admin->password ==$password )
					{
							$this->session->set_userdata('username',$admin->username);
							redirect('/dclub');		
					}
					else
					{
						$this->session->set_flashdata('error', "密码不正确!");
						redirect('/dclub/login');
					}
				}
				else
				{
					$this->session->set_flashdata('error', '不存在的用户!');
					redirect('/dclub/login');
				}
			}
			else
			{
				$this->session->set_flashdata('error', '用户名和密码不能为空!');
				redirect('/dclub/login');	
			}				
	}
	function quit()
	{	
		$this->session->unset_userdata('username');
		//$this->session->unset_userdata('nickname');
		redirect('/dclub');
	}	
	
}