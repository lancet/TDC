<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_comm extends CI_Controller {
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
	function _do_post()//提交评论（本期沙龙讨论下）
	{
		if($this->session->userdata('username'))
		{
		$data['content']=$this->input->post('content',true);
		$data['fromid']=$this->input->post('fromid',true);
		$data['commid']=$this->session->userdata('username');
		
		date_default_timezone_set("PRC");
		$data['time']=date("Y-m-d H:i:s");
		$this->dclub_mdl->add_comm($data);
		echo "<script>window.history.back();</script>";
		}
		else{
		echo "<script>window.alert(\"请先登录\"); </script>";

			echo "<script>window.history.back();</script>";}
		
	}  
	
	function addnew()
	{
		
		$this->load->view('do_edit_per');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
