<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Person extends Dclub_Controller {
    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('username'))
		{  redirect('/dclub');	}
        $this->load->model('tao_model');
		$this->load->model('comment_mdl');
		$this->load->model('user_mdl');
		$this->load->model('mweibo');
		$this->load->helper('url');
		$this->load->helper('str_cut');
		$this->load->helper(array('form', 'url'));
		
		//$this->load->helper('str_cut');
		
		 //加载分页类
  		$this->load->library('pagination');
    }
	function index()
	{
		$data['rows'] = $this->user_mdl->already_salon();//获取已关注沙龙
		$data['rows1'] = $this->user_mdl->interest_salon();//获取可能感兴趣沙龙
		$this->load->view('person',$data);
	}
	function per_return()//回复
	{
		$data['rows'] = $this->user_mdl->per_return();//获取个人文章信息
		$this->load->view('per_return',$data);
	}
	function article()//个人中心-文章管理
	{
		$data['rows'] = $this->user_mdl->article();//获取个人文章信息
		$this->load->view('per_article',$data);
	}
	function up_article()//文章上传
	{
		$this->load->view('up_article');
	}
	function edit_article()//编辑文章
	{
		$aid=$this->uri->segment(3);
		$data['rows'] = $this->tao_model->article($aid);//获取文章数据
		$this->load->view('edit_article',$data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
