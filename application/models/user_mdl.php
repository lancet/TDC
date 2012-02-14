<?php 
	class User_mdl extends CI_Model{
		
		function __construct()
		{
			parent::__construct();	
		}
		
		function get_full_user_by_username( $username = '' )
		{
			return $this->db->select('username , password ')
								  ->from('dili_u_c_guest')
								  
								  ->where('username' , $username)
								  ->get()
								  ->row();
		}
		function already_salon()
		{
			$this->db->select();
			$this->db->from('dili_u_c_guanzhu');
			$this->db->where('name',$this->session->userdata('username'));
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}	
		function interest_salon()
		{
			$this->db->select();
			$this->db->from('dili_u_c_salon');
			$this->db->where('isWonderful',1);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
		function per_return()
		{
			$this->db->select();
        $this->db->from('dili_u_c_return');
	  $this->db->where('fromid',$this->session->userdata('username'));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		}
		function article()
		{
			$abc=$this->session->userdata('username');
			$this->db->select();
			$this->db->from('dili_u_c_article');
			$this->db->where('author',$abc);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}
		
	}