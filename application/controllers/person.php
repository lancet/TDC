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
		
		 //���ط�ҳ��
  		$this->load->library('pagination');
    }
	function index()
	{
		$data['rows'] = $this->user_mdl->already_salon();//��ȡ�ѹ�עɳ��
		$data['rows1'] = $this->user_mdl->interest_salon();//��ȡ���ܸ���Ȥɳ��
		$this->load->view('person',$data);
	}
	function per_return()//�ظ�
	{
		$data['rows'] = $this->user_mdl->per_return();//��ȡ����������Ϣ
		$this->load->view('per_return',$data);
	}
	function article()//��������-���¹���
	{
		$data['rows'] = $this->user_mdl->article();//��ȡ����������Ϣ
		$this->load->view('per_article',$data);
	}
	function up_article()//�����ϴ�
	{
		$this->load->view('up_article');
	}
	function edit_article()//�༭����
	{
		$aid=$this->uri->segment(3);
		$data['rows'] = $this->tao_model->article($aid);//��ȡ��������
		$this->load->view('edit_article',$data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
