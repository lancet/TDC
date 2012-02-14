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
		
		 //���ط�ҳ��
  		$this->load->library('pagination');
    }
	function index()
	{
		//$data['rows'] = $this->dclub_mdl->salon();
		$data['rows1'] = $this->dclub_mdl->salon1();//����ɳ��
		$data['rows2'] = $this->dclub_mdl->salon2();//����ɳ��
		$data['rows3'] = $this->dclub_mdl->budao();//��������ʦ
		$data['rows4'] = $this->dclub_mdl->jishu_iDataForum();//������־
		$data['rows5'] = $this->dclub_mdl->jishu_D2();//������־
		$data['rows6'] = $this->dclub_mdl->question();//����Q&A
		//$data['rows3'] = $this->dclub_mdl->salon3();//����ɳ��
		//$data['wurl'] = $this->mweibo->url();
		$this->load->view('dclub',$data);
	}
	function period_salon()//����ɳ������
	{
		$sid=$this->uri->segment(3);
		//echo $sid;
		$data['rows'] = $this->dclub_mdl->period_salon($sid);//��ȡ����ɳ����ϸ����
		$data['rows1'] = $this->dclub_mdl->period_lecturer($sid);//��ȡ����ɳ���ݽ�
		$data['rows2'] = $this->dclub_mdl->period_topic($sid);//��ȡ����ɳ������
		$data['rows21'] = $this->dclub_mdl->period_topic1($sid);//��ȡ����ɳ����������ɳ��id
		$data['rows3'] = $this->dclub_mdl->period_comm($sid);//��ȡ����ɳ������
		//$data['wurl'] = $this->mweibo->url();
		$this->load->view('period_salon',$data);
	}
	function about()//��������
	{
		$this->load->view('about');
	}
	function all_salon()//����ɳ��
	{
		$data['rows'] = $this->dclub_mdl->salon();//��ȡ����ɳ����ϸ����
		$this->load->view('all_salon',$data);
	}
	function all_guest()//���н�ʦ
	{
		$data['rows'] = $this->dclub_mdl->all_guest();//��ȡ����ɳ����ϸ����
		$this->load->view('all_guest',$data);
	}
	function guests()//��ʦ��ҳ
	{
		$sid=$this->uri->segment(3);
		$data['rows'] = $this->dclub_mdl->guest_art($sid);//��ȡ����ɳ����ϸ����
		$data['rows1'] = $this->dclub_mdl->guest($sid);//��ȡ����ɳ����ϸ����
		$this->load->view('guests',$data);
	}
	function login()//��½
	{
		$data['msn'] = $this->mmsn->url();$data['qq'] = $this->mqq->url();$data['weibo'] = $this->mweibo->url();
		$this->load->view('login',$data);
	}
	function firstlogin()//
	{
		$this->load->view('firstlogin');
	}
	function registe()//ע��
	{
		$this->load->view('registe');
	}
	function members($sid)//����Ȧ
	{
		$sid=$this->uri->segment(3);
		$data['rows'] = $this->dclub_mdl->members($sid);//��ȡ��Ӧ����Ȧ��Ϣ
		$data['rows1'] = $this->dclub_mdl->members_salon($sid);//��ȡ��Ӧ����Ȧ��Ϣ
		$data['rows2'] = $this->dclub_mdl->members_guests($sid);//��ȡ��Ӧ����Ȧ��������ʦ��Ϣ
		$data['rows3'] = $this->dclub_mdl->members_articles($sid);//��ȡ��Ӧ����Ȧ����������Ϣ
		$data['rows4'] = $this->dclub_mdl->members_news($sid);//��ȡ��Ӧ����Ȧ����ɳ����Ϣ
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
	function _do_post()//�ύ����
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
