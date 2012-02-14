<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Per_article extends CI_Controller {
      function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
        $this->load->model('tao_model');
		
		//$this->load->helper('str_cut');
		
		 //¼ÓÔØ·ÖÒ³Àà
  		$this->load->library('pagination');
    }
	function index()
	{
		$data['rows'] = $this->tao_model->admin();
		$this->load->view('home',$data);
	}
	
	function _do_post()
	{
		$data['title'] = $this->input->post('title',true);
		$data['content'] = $this->input->post('content',true);
		$data['summary'] = $this->input->post('summary',true);
		$data['type'] = $this->input->post('type',true);
		$data['virtue'] = $this->input->post('virtue',true);
		$data['ispass'] =0;
		date_default_timezone_set("PRC");
		$data['createtime']=date("Y-m-d H:i:s");
		//$data['virtue'] = NOW();
		if($this->session->userdata('username'))
		{
			$data['author'] =$this->session->userdata('username');
				
		}
		$this->tao_model->do_add_article($data);
		redirect('person/article');		
	}
	function _do1_post()
	{
		$data['title'] = $this->input->post('title',true);
		$data['content'] = $this->input->post('content',true);
		$data['summary'] = $this->input->post('summary',true);
		$data['type'] = $this->input->post('type',true);
		$data['virtue'] = $this->input->post('virtue',true);
		$data['ispass'] = $this->input->post('ispass',true);
		$id=$this->input->post('articleid',true);
		date_default_timezone_set("PRC");
		$data['createtime']=date("Y-m-d H:i:s");
		//$data['virtue'] = NOW();
		if($this->session->userdata('username'))
		{
			$data['author'] =$this->session->userdata('username');
				
		}
		$this->tao_model->do_edit_article($data,$id);
		redirect('person/article');		
	}
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
