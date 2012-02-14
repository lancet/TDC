<?php 
	class Email_mdl extends CI_Model{
		
		function __construct()
		{
			parent::__construct();	
		}
		
		function get_email()
		{
			$this->db->select();
            $this->db->from('dili_u_c_guest');
            $this->db->where('isrss',1);
			 
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
			     foreach ($query->result() as $row) {
	             $data[] = $row;
				}
			}
			return $data;
		}
		
		
		function check_plugin_name($name)
		{
			return $this->db->select('id')->where('name',$name)->get('dili_plugins')->row();
		}
		
		function get_plugin_by_id($id)
		{
			return $this->db->where('id',$id)->get('dili_plugins')->row();	
		}
		
		function add_plugin($data)
		{
			$this->db->insert('dili_plugins',$data);
		}
		
		function edit_plugin($plugin_id , $data)
		{
			$this->db->where('id' , $plugin_id)->update('dili_plugins',$data);	
		}
		
		function sent_email($id )
		{
			echo $id[0];
			//$this->db->where_in('id' , $id)->set('active',$status)->update('dili_plugins');
		}
		
		function del_plugin($ids)
		{
			$this->db->where_in('id',$ids)->delete('dili_plugins');
		}	
		
		function export_plugin($ids)
		{
			$plugins = $this->db->where_in('id',$ids)->get('dili_plugins')->result();
			foreach($plugins as $plugin)
			{
				$xml = '<?xml version="1.0" encoding="UTF-8"?><root name="DiliCMS"><plugin><name>'.$plugin->name.'</name><title>'.$plugin->title.'</title><version>'.$plugin->version.'</version><description>'.$plugin->description.'</description><author>'.$plugin->author.'</author><link>'.$plugin->link.'</link><copyrights>'.$plugin->copyrights.'</copyrights><access>'.$plugin->access.'</access></plugin></root>';
				file_put_contents(FCPATH.'plugins/'.$plugin->name.'/plugin_'.$plugin->name.'_install.xml',$xml);
			}
		}	
		
	}