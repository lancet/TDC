<?php

 class Index extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	  header('Content-Type:text/html;charset=utf-8');
	}
	
	function index()
	{
		$data['page_title']='email';
	    $this->load->view('head',$data);
	    $this->load->view('index');
        $this->load->view('foot');		
	}
	
	function huati()
	{
		$data['page_title']='email';
	    $this->load->view('head',$data);
	    $this->load->view('huati');
        //$this->load->view('foot');			
	}
	
	function send()//发表评论
	{
	    $this->load->view('send');	
	}
	
	function submit()
	{
		$data['page_title']='submit';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.163.com';
		$config['smtp_user'] = 'developerclub@163.com';
		$config['smtp_pass'] = 'taobao';
		$config['smtp_port'] = 25;
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['priority'] = 1;
		$config['validate'] = TRUE;        
		$this->email->initialize($config);
		$email_from = "developerclub@163.com";
		$email_nick = "蝎紫";
		$email_to = $this->input->post('email_to');
		$email_subject = $this->input->post('email_subject');
		$email_message = $this->input->post('email_message');
		$this->email->from($email_from, $email_nick);
		$this->email->to($email_to);
		$this->email->subject($email_subject);
		$this->email->message($email_message);       	
		$this->load->view('head',$data);
	    if($this->email->send()){
			$data['submit'] = '发送成功';}else{
			$data['submit'] = '发送不成功';}
		$this->load->view('submit',$data);
        $this->load->view('foot');
	}
	function add(){
	    $email_title = $this->input->post('email_title');
	    $email_moban = $this->input->post('email_moban');
		if ( ! write_file('./application/views/moban/'.$email_title.'.php', $email_moban))
		{echo 'Unable to write the file';}else{echo 'File written!';}	
	}
}