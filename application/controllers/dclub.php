<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Dclub extends Dclub_Controller {
    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
        $this->load->model('tao_model');
		$this->load->model('comment_mdl');
		$this->load->model('dclub_mdl');
		$this->load->model('mweibo');$this->load->model('mmsn');$this->load->model('mqq');
		$this->load->helper('url');
		$this->load->helper('str_cut');
		$this->load->helper(array('form', 'url'));
		
		
		//$this->load->helper('str_cut');
		
		 //加载分页类
  		$this->load->library('pagination');
    }
	function index()
	{
		//$data['rows'] = $this->dclub_mdl->salon();
		$data['rows1'] = $this->dclub_mdl->salon1();//本期沙龙
		$data['rows2'] = $this->dclub_mdl->salon2();//精彩沙龙
		$data['rows3'] = $this->dclub_mdl->budao();//技术布道师
		$data['rows4'] = $this->dclub_mdl->jishu_iDataForum();//技术日志
		$data['rows5'] = $this->dclub_mdl->jishu_D2();//技术日志
		$data['rows6'] = $this->dclub_mdl->question();//技术Q&A
		//$data['rows3'] = $this->dclub_mdl->salon3();//往期沙龙
		//$data['wurl'] = $this->mweibo->url();
		$this->load->view('dclub',$data);
	}
	function period_salon()//本期沙龙详情
	{
		$sid=$this->uri->segment(3);
		//echo $sid;
		$data['rows'] = $this->dclub_mdl->period_salon($sid);//获取本期沙龙详细数据
		$data['rows1'] = $this->dclub_mdl->period_lecturer($sid);//获取本期沙龙演讲
		$data['rows2'] = $this->dclub_mdl->period_topic($sid);//获取本期沙龙话题
		$data['rows21'] = $this->dclub_mdl->period_topic1($sid);//获取本期沙龙话题来自沙龙id
		$data['rows3'] = $this->dclub_mdl->period_comm($sid);//获取本期沙龙评论
		//$data['wurl'] = $this->mweibo->url();
		$this->load->view('period_salon',$data);
	}
	function about()//关于我们
	{
		$this->load->view('about');
	}
	function all_salon()//所有沙龙
	{
		$data['rows'] = $this->dclub_mdl->salon();//获取所有沙龙详细数据
		$this->load->view('all_salon',$data);
	}
	function all_guest()//所有讲师
	{
		$data['rows'] = $this->dclub_mdl->all_guest();//获取所有沙龙详细数据
		$this->load->view('all_guest',$data);
	}
	function guests()//讲师主页
	{
		$sid=$this->uri->segment(3);
		$data['rows'] = $this->dclub_mdl->guest_art($sid);//获取所有沙龙详细数据
		$data['rows1'] = $this->dclub_mdl->guest($sid);//获取所有沙龙详细数据
		$this->load->view('guests',$data);
	}
	function login()//登陆
	{
		$data['msn'] = $this->mmsn->url();$data['qq'] = $this->mqq->url();$data['weibo'] = $this->mweibo->url();
		$this->load->view('login',$data);
	}
	function firstlogin()//
	{
		$this->load->view('firstlogin');
	}
	function registe()//注册
	{
		$this->load->view('registe');
	}
	function members($sid)//技术圈
	{
		$sid=$this->uri->segment(3);
		$data['rows'] = $this->dclub_mdl->members($sid);//获取相应技术圈信息
		$data['rows1'] = $this->dclub_mdl->members_salon($sid);//获取相应技术圈信息
		$data['rows2'] = $this->dclub_mdl->members_guests($sid);//获取相应技术圈技术布道师信息
		$data['rows3'] = $this->dclub_mdl->members_articles($sid);//获取相应技术圈技术文章信息
		$data['rows4'] = $this->dclub_mdl->members_news($sid);//获取相应技术圈最新沙龙信息
		$this->load->view('members',$data);
	}
	function kaiyuan()
	{
		$data['hot_user']=$this->dclub_mdl->api_get("http://code.taobao.org/api/hot_users/");
		$data['hot_prjs']=$this->dclub_mdl->api_get("http://code.taobao.org/api/hot_prjs/");
		$data['new_prjs']=$this->dclub_mdl->api_get("http://code.taobao.org/api/new_prjs/");
		$data['last_logs']=$this->dclub_mdl->api_get("http://code.taobao.org/api/last_logs/");
		$this->load->view('kaiyuan',$data);
	}
	function _do_post()//提交评论
	{
		$data['tid'] = $this->input->post('slid',true);
		$data['content'] = $this->input->post('content',true);
		if($this->session->userdata('username_uid'))
		{
			$data['username']=$this->session->userdata('username_uid');
			$this->dclub_mdl->comment($data);
			$this->load->view('do_edit_per');
		}
		else
		{
			$this->session->set_flashdata('error', 'login first!');
			redirect('/tao');	
		}
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
