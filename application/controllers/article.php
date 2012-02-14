<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {
      function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
        $this->load->model('tao_model');
		$this->load->helper('str_cut');
		 //加载分页类
  		$this->load->library('pagination');
    }
	function index()//具体文章
	{
		$aid=$this->uri->segment(3);
		$data['rows'] = $this->tao_model->article($aid);//获取文章数据
		$data['rows1'] = $this->tao_model->comment($aid);//获取文章评论
		$this->load->view('article',$data);
	}
	function all()//所有文章列表
	{
		$data['rows'] = $this->tao_model->all_article();
		$this->load->view('all_article',$data);
	}
	
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
