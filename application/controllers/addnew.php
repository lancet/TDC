<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addnew extends CI_Controller {
    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
        $this->load->model('tao_model');
		$this->load->model('comment_mdl');
		$this->load->model('dclub_mdl');
		$this->load->helper('url');
		
		//$this->load->helper('str_cut');
		
		 //加载分页类
  		$this->load->library('pagination');
    }
	function index()
	{
		$data['rows'] = $this->dclub_mdl->salon();
		$data['rows1'] = $this->dclub_mdl->salon1();//本期沙龙
		$data['rows2'] = $this->dclub_mdl->salon2();//预期沙龙
		$data['rows3'] = $this->dclub_mdl->salon3();//往期沙龙
		$this->load->view('dclub',$data);
	}
	function _do_post()//提交评论
	{
		$data['nickname']=$this->session->userdata('nickname');
		$data['username']=$this->session->userdata('username_uid');
		$data['email']=$this->input->post('email',true);
		$data['phone']=$this->input->post('phone',true);
		$data['company']=$this->input->post('company',true);
		$data['position']=$this->input->post('position',true);
		$data['city']=$this->input->post('city',true);
		$data['workyear']=$this->input->post('workyear',true);
		$data['attention']=$this->input->post('attention',true);
		$data['label']=$this->input->post('label',true);
		$data['plant']=1;
		$data['type']=0;
		$this->dclub_mdl->addnew($data);
		$this->load->view('do_edit_per');
		
	}  
	
	function addnew()
	{
		
		$this->load->view('do_edit_per');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
