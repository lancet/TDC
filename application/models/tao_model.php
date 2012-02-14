<?php

class Tao_model extends CI_Model {
	function __construct()
	{
        parent::__construct();
        //$this->load->database('developerclub');
		$this->load->library('session');
    }

	function article($aid)//查看具体文章
	{
		$this->db->select();
        $this->db->from('dili_u_c_article');
		$this->db->where('classid',$aid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function all_article()//查看所有文章
	{
		$this->db->select();
        $this->db->from('dili_u_c_article');
		$this->db->where('ispass',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function comment($aid)//查看文章评论
	{
		$this->db->select();
        $this->db->from('dili_u_c_art_comm');
		$this->db->where('fromid',$aid);
		$this->db->order_by("time", "desc");
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
    function admin()
	{
        $this->db->select();
        $this->db->from('dili_u_c_guest');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function person()
	{
		if($this->session->userdata('username_uid'))
		{
			$this->db->select();
            $this->db->from('dili_u_c_guest');
			$this->db->where('username',$this->session->userdata('username_uid'));
		    $query = $this->db->get();
		    if ($query->num_rows() > 0) 
			{
			    foreach ($query->result() as $row) 
				{
					$data[] = $row;	
				}
				return $data;
			}
		}
		
	}
	
	 function person1()//输出来自的分会
	 {
		if($this->session->userdata('username_uid'))
		{
			$this->db->select('name');
            $this->db->from('dili_u_c_branch');			
			$this->db->join('dili_u_c_guest','dili_u_c_branch.classid=dili_u_c_guest.ident');
			$this->db->where('username',$this->session->userdata('username_uid'));
		    $query = $this->db->get();
		    if ($query->num_rows() > 0) 
			{
			    foreach ($query->result() as $row) 
				{
					$data[] = $row;
					
				}
				return $data;
			}
		}
		
	}
	function do_edit_person($data)
	{
			if($this->session->userdata('username'))
			{
				$this->db->where('username', $this->session->userdata('username'));
				$this->db->update('dili_u_c_guest', $data);
			}
			
	}
	function do_edit_article($data,$id)
	{
			if($this->session->userdata('username'))
			{
				$this->db->where('classid', $id);
				$this->db->update('dili_u_c_article', $data);
			}
			
	}
	function do_add_article($data)
	{
		$this->db->insert('dili_u_c_article', $data); 
	}
	function application()
	{
	if($this->session->userdata('username_uid')){
		$abc=$this->session->userdata('username_uid');
		$query = $this->db->query("SELECT theme,classid FROM dili_u_c_salon WHERE classid not in (select slid from dili_u_c_application where username =  '$abc')");
		return $query->result();
	}
	
		
	}
	function application1()
	{
		if($this->session->userdata('username_uid')){
			$abc=$this->session->userdata('username_uid');
			$query = $this->db->query("SELECT theme,classid FROM dili_u_c_salon WHERE classid in (select slid from dili_u_c_application where username =  '$abc')");
		return $query->result();
		}
		
	}
	function al_apply()
	{
		if($this->session->userdata('username_uid'))
		{
			$this->db->select('theme');
            $this->db->from('dili_u_c_salon');			
			$this->db->join('dili_u_c_application','dili_u_c_salon.classid=dili_u_c_application.slid');
			$this->db->where('username',$this->session->userdata('username_uid'));
		    $query = $this->db->get();
		    if ($query->num_rows() > 0) 
			{
			    foreach ($query->result() as $row) 
				{
					$data[] = $row;
					
				}
				return $data;
			}
		}
	}
	function apply($i)
	{	
		$data['slid']=$i;	
		if($this->session->userdata('username_uid'))
		{
			$data['username']=$this->session->userdata('username_uid');
		}
		$this->db->insert('dili_u_c_application', $data); 
	}
	function apply_del($i)
	{		
		if($this->session->userdata('username_uid'))
		{
			$this->db->where('slid', $i);
			$this->db->where('username', $this->session->userdata('username_uid'));
			$this->db->delete('dili_u_c_application'); 
		}
	}
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
