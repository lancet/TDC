<?php

class Comment_mdl extends CI_Model {
	function __construct()
	{
        parent::__construct();
        //$this->load->database('developerclub');
		$this->load->library('session');
    }
	function comment()
	{	
		if($this->session->userdata('username_uid'))
		{
			$abc=$this->session->userdata('username_uid');
			$query = $this->db->query("SELECT DISTINCT topic,dili_u_c_comment.content FROM dili_u_c_salon,dili_u_c_comment WHERE dili_u_c_salon.classid in (select tid from dili_u_c_comment where username =  '$abc') AND dili_u_c_comment.username='$abc' AND dili_u_c_salon.classid=tid");
			return $query->result();
		}
	}
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
