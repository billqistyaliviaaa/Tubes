<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model {	
	public function checkUserPerusahaan($data)
	{
		$q = $this->db->select('*');
		$q = $this->db->where('username', $data['full_name']);
		$q = $this->db->where('password', md5($data['password']));
		$q = $this->db->from('perusahaan');
		$q = $this->db->get();
		return $q;
	}
	public function checkUserPelamar($data)
	{
		$q = $this->db->select('*');
		$q = $this->db->where('username', $data['full_name']);
		$q = $this->db->where('password', md5($data['password']));
		$q = $this->db->from('pelamar');
		$q = $this->db->get();
		return $q;	
	}

}

/* End of file loginM.php */
/* Location: ./application/models/loginM.php */