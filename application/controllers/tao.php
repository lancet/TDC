<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tao extends CI_Controller {
      function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
        $this->load->model('tao_model');
		$this->load->model('comment_mdl');
		
		//$this->load->helper('str_cut');
		
		 //加载分页类
  		$this->load->library('pagination');
    }
	function index()
	{
		$data['rows'] = $this->tao_model->admin();
		$this->load->view('home',$data);
	}
	function person()
	{
		$data['rows'] = $this->tao_model->person();
		$data['rows1'] = $this->tao_model->person1();//输出来自的分会
		if($this->tao_model->article())
			$data['rows2'] = $this->tao_model->article();//输出文章
		$data['rows3'] = $this->tao_model->al_apply();
		$this->load->view('person',$data);
	}
	function edit_per()
	{
		$this->load->view('edit_per');
	}	
	function _do_post()//更改个人信息
	{
		$data['nickname'] = $this->input->post('nickname',true);
		$data['email'] = $this->input->post('email',true);
		$data['position'] = $this->input->post('position',true);
		$data['company'] = $this->input->post('company',true);
		$this->session->unset_userdata('nickname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('position');
		$this->session->unset_userdata('company');
		$this->tao_model->do_edit_person($data);
		$this->load->view('do_edit_per');
	}
	function article()
	{
		$this->load->view('article');
	}
	function application()
	{
		if($this->tao_model->application())//未报名沙龙
			$data['rows'] = $this->tao_model->application();
		if($this->tao_model->application1())//已报名沙龙
			$data['rows1'] = $this->tao_model->application1();
		$this->load->view('application',$data);
	}
	function apply($a)
	{
		$i=$a;
		$data['rows'] = $this->tao_model->apply($i);
		$this->load->view('do_edit_per');
	}
	function apply_del($a)
	{
		$i=$a;
		$data['rows'] = $this->tao_model->apply_del($i);
		$this->load->view('do_edit_per');
	}
	function comment()
	{
		$data['rows'] = $this->comment_mdl->comment();
		$this->load->view('comment',$data);
	}
	
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
