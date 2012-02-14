<?php

class Dclub_mdl extends CI_Model {
	function __construct()
	{
        parent::__construct();
        //$this->load->database('developerclub');
		$this->load->library('session');
		$this->load->helper('url');
    }
	function salon()
	{	
		$this->db->select();
        $this->db->from('dili_u_c_salon');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function guanzhu($data)
	{
		$this->db->insert('dili_u_c_guanzhu', $data); 
	}
	function all_guest()//���н�ʦ
	{
		$this->db->select();
        $this->db->from('dili_u_c_guest');
		$this->db->where('type',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function guest($sid)//��ʦ��ҳ
	{
		$this->db->select();
        $this->db->from('dili_u_c_guest');
		$this->db->where('classid',$sid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function guest_art($sid)//��ʦ��������
	{
		$query = $this->db->query("SELECT * FROM dili_u_c_article WHERE dili_u_c_article.author in(select nickname from dili_u_c_guest where dili_u_c_guest.classid =  '$sid') ");
		return $query->result();
	}
	function salon1()//����ɳ��
	{	
		$this->db->select();
        $this->db->from('dili_u_c_salon');
		$this->db->where('showtime',0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function salon2()
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
	function salon3()
	{	
		$this->db->select();
        $this->db->from('dili_u_c_salon');
		$this->db->where('showtime',2);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function api_get($url){
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($c);
		curl_close($c);
		return json_decode($data);
	}
function getAvatar($email, $size = '24')
{
	if (!is_numeric($size))
	{
		$size = '24';
	}
	if (!empty($email))
	{
		$out = 'http://www.gravatar.com/avatar/' . md5(strtolower($email)) . '?s=' . $size;
		$avatar = $out;
	}
	else
	{
		$avatar = $email;
	}
 
	return $avatar;
}
	function members($sid)//��ȡ��Ӧ����Ȧ��Ϣ
	{
		$this->db->select();
        $this->db->from('dili_u_c_branch');
		$this->db->where('name',$sid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function members_salon($sid)//��ȡ��Ӧ����Ȧ��Ϣ
	{
		$query = $this->db->query("SELECT * FROM dili_u_c_salon WHERE dili_u_c_salon.fhid in(select classid from dili_u_c_branch where dili_u_c_branch.name =  '$sid') ");
		return $query->result();
	}
	function members_news($sid)
	{
		$query = $this->db->query("SELECT * FROM dili_u_c_salon WHERE dili_u_c_salon.fhid in(select classid from dili_u_c_branch where dili_u_c_branch.name =  '$sid') order by stime limit 1");
		return $query->result();
	}
	function members_guests($sid)
	{
		$query = $this->db->query("SELECT * FROM dili_u_c_guest WHERE dili_u_c_guest.ident in(select classid from dili_u_c_branch where dili_u_c_branch.name =  '$sid') ");
		return $query->result();
	}
	function members_articles($sid)
	{
		$query = $this->db->query("SELECT * FROM dili_u_c_article WHERE dili_u_c_article.type in(select classid from dili_u_c_branch where dili_u_c_branch.name =  '$sid') ");
		return $query->result();
	}
	function period_salon($sid)//��ȡ����ɳ����ϸ����
	{
		$this->db->select();
        $this->db->from('dili_u_c_salon');
		$this->db->where('classid',$sid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function period_lecturer($sid)//��ȡ����ɳ���ݽ�
	{
		$this->db->select();
        $this->db->from('dili_u_c_lecture');
		$this->db->where('fsalon',$sid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function period_topic($sid)//��ȡ����ɳ������
	{
		$this->db->select();
        $this->db->from('dili_u_c_childtopic');
		$this->db->where('fromsalon',$sid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function period_topic1($sid)//��ȡ����ɳ����������ɳ��id
	{
		$this->db->select();
        $this->db->from('dili_u_c_childtopic');
		$this->db->where('fromsalon',$sid);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function period_comm($sid)//��ȡ����ɳ����������
	{
		$query = $this->db->query("SELECT classid,commid,content,time FROM dili_u_c_childcomm WHERE dili_u_c_childcomm.fromid in(select classid from dili_u_c_childtopic where dili_u_c_childtopic.fromsalon =  '$sid') order by time desc ");
		return $query->result();
		
		
	}
	function budao()//��������ʦ
	{
		$this->db->select();
        $this->db->from('dili_u_c_guest');
		$this->db->where('type',1);
		$this->db->limit(10);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function jishu_iDataForum()//������־iDataForum
	{
		$this->db->select();
        $this->db->from('dili_u_c_article');
		$this->db->where('ispass',1);
		$this->db->where('type',2);
		$this->db->limit(3);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function jishu_D2()//������־D2
	{
		$this->db->select();
        $this->db->from('dili_u_c_article');
		$this->db->where('ispass',1);
		$this->db->where('type',1);
	    $this->db->limit(5);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function question()//����Q&A
	{
		$this->db->select();
        $this->db->from('dili_u_c_question');
	    $this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function add_comm($data)//�ύ���ۣ�����ɳ�������£�
	{
			$this->db->insert('dili_u_c_childcomm', $data); 
	}
	function return_comm($data)//�û��ظ�
	{
			$this->db->insert('dili_u_c_return', $data); 
	}
	function art_comm($data)//�ύ���ۣ��������ۣ�
	{
			$this->db->insert('dili_u_c_art_comm', $data); 
	}
	function period_addcomm($data)
	{
		$this->db->insert('dili_u_c_childcomm', $data); 
	}
	function salon_comm($q)//����ɳ����������ajax
	{
		$this->db->select();
        $this->db->from('dili_u_c_childcomm');
		$this->db->where('fromid',$q);
		$this->db->order_by("time", "desc");
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function salon_comm1($q)//����ɳ����������ajax1
	{
		$query = $this->db->query("SELECT classid,commid,content,time FROM dili_u_c_childcomm WHERE dili_u_c_childcomm.fromid in(select classid from dili_u_c_childtopic where dili_u_c_childtopic.fromsalon = '".$q."' )  order by time desc ");
		return $query->result();
	}
	function callback()
	{
		include_once( 'weibo/config.php' );
		include_once( 'weibo/weibooauth.php' );

		$o = new WeiboOAuth( WB_AKEY , WB_SKEY , $this->session->userdata['keys']['oauth_token'] , $this->session->userdata['keys']['oauth_token_secret']  );

		$last_key = $o->getAccessToken(  $_REQUEST['oauth_verifier'] ) ;
		$this->session->set_userdata('last_key', $last_key);


		$c = new WeiboClient( WB_AKEY , WB_SKEY , $this->session->userdata['last_key']['oauth_token'] , $this->session->userdata['last_key']['oauth_token_secret']  );
		$ms  = $c->home_timeline(); // done
		$me = $c->verify_credentials();
		$this->session->set_userdata('username_uid', $me['id']);
		$this->session->set_userdata('nickname', $me['name']);
		
		$this->db->select();
        $this->db->from('dili_u_c_guest');
		$this->db->where('username',$me['id']);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			redirect('/dclub');
		}
		else
			redirect('/dclub/firstlogin');
	}
	function addnew($data)
	{
		$this->db->insert('dili_u_c_guest', $data);
	}
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
