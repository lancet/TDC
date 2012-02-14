<?php
	class Email extends Admin_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->_check_permit();
			$this->load->model('dili/email_mdl');
			
		}
		
		function view()
		{
			$data['list'] = $this->email_mdl->get_email();
			$this->_template('email_list',$data);
		}
		
		function add()//发送邮件
		{
			$this->_add_post();
		}
		
		function _add_post()
		{	
			$id = $this->input->get_post('id');
			if(!is_array($id))
			{
				$id = array($id);
			}
			$this->session->set_userdata('idrss',$id);
			$this->_template('email_add');	
		}
		
		function sent()
		{
			$this->_sent_post();
		}
		
		function _sent_post()
		{
			$ids=$this->session->userdata('idrss');
			//echo $ids[2];echo 'ee';
			$config['protocol'] = 'smtp';//采用smtp方式，方便租用主机的用户
			$config['smtp_host'] = 'smtp.163.com';
			$config['smtp_user'] = 'developerclub@163.com';//邮箱帐号为[email]mytest4126@126.com[/email]
			$config['smtp_pass'] = 'taobao';
			//$config['charset'] = 'iso-8859-1';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = "html";

			$this->load->library('email');
			$this->email->initialize($config);
			$this->email->from('developerclub@163.com', 'Lancet');
			$this->email->to($ids);//收件人
			
			$this->email->subject($this->input->post('title',true));
			$this->email->message($this->input->post('content',true));
			if($this->email->send())
			{
				//echo $this->email->print_debugger();			
				$this->_message('邮件发送成功!','plugin/view/',true);
			}	
		}

				
	}