<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {
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
	function send()
	{
		
		$content = $_GET['content'];
		$first = strpos($content,"#");
		$last = strrpos($content,"#");
		if($last-$first>0){
			$str = substr($content,$first,$last-$first+1);
			$sub = "<a href='./'>".$str."</a>";		
		}
		else{
			$sub=$content;
		}
		
			$data['content'] = $sub;
			$data['comeid']=$this->session->userdata('username');
			date_default_timezone_set("PRC");
			$data['time']=date("Y-m-d H:i:s");
			$data['fromid'] = $_GET['fromid'];
			//echo $data['fromid'];echo $content;
			$this->dclub_mdl->art_comm($data);
			$this->load->view('do_edit_per');
		
		
	}
	function guanzhu()//关注
	{
		
			$data['name']=$this->session->userdata('username');
			date_default_timezone_set("PRC");
			$data['time']=date("Y-m-d H:i:s");
			$data['slid'] = $_GET['slid'];
			//echo $data['fromid'];echo $content;
			$this->dclub_mdl->guanzhu($data);
			$this->load->view('do_edit_per');
	}
	function sendta()
	{
		
		$content = $_GET['content'];
		$first = strpos($content,"#");
		$last = strrpos($content,"#");
		if($last-$first>0){
			$str = substr($content,$first,$last-$first+1);
			$sub = "<a href='./'>".$str."</a>";		
		}
		else{
			$sub=$content;
		}
		
			$data['content'] = $sub;
			$data['comeid']=$this->session->userdata('username');
			date_default_timezone_set("PRC");
			$data['time']=date("Y-m-d H:i:s");
			$data['fromid'] = $_GET['fromid'];
			echo $data['fromid'];echo $content;
			$this->dclub_mdl->return_comm($data);
			$this->load->view('do_edit_per');
		
		
	}
	function periodcomm()//本期沙龙话题评论ajax
	{
		$content = $_GET['content'];
		$first = strpos($content,"#");
		$last = strrpos($content,"#");
		if($last-$first>0){
			$str = substr($content,$first,$last-$first+1);
			$sub = "<a href='./'>".$str."</a>";		
		}
		else{
			$sub=$content;
		}
		
			$data['content'] = $content;
			$data['commid']=$this->session->userdata('username');
			date_default_timezone_set("PRC");
			$data['time']=date("Y-m-d H:i:s");
			$data['fromid'] = $_GET['fromid'];
			//echo $data['fromid'];
			//echo $content;
			$this->dclub_mdl->add_comm($data);
			$this->load->view('do_edit_per');
	}
	function period_salon_comm()//本期沙龙话题评论ajax
	{
		$q=$_GET["q"];
		$data['rows_comm']=$this->dclub_mdl->salon_comm($q);
		$this->load->view('getcomm',$data);	
	}  
	function period_salon_comm1()//本期沙龙话题评论ajax1
	{
		$q=$_GET["q"];
		$data['rows_comm']=$this->dclub_mdl->salon_comm1($q);
		$this->load->view('getcomm_all',$data);	
	}  
	function add_comm()
	{
		$this->load->view('add_comm');	
	}
	function sendtest()
	{
		$content = $_GET['content'];
		$first = strpos($content,"#");
		$last = strrpos($content,"#");
		if($last-$first>0){
			$str = substr($content,$first,$last-$first+1);
			$sub = "<a href='./'>".$str."</a>";		
		}
		else{
			$sub=$content;
		}
		
			$data['content'] = $sub;
			$data['comeid']=$this->session->userdata('username');
			date_default_timezone_set("PRC");
			$data['time']=date("Y-m-d H:i:s");
			//$data['fromid'] = $_GET['fromid'];
			//echo $data['fromid'];
			echo $content;
			//$this->dclub_mdl->art_comm($data);
			//$this->load->view('do_edit_per');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
