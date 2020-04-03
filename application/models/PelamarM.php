<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelamarM extends CI_Model {
	
	public function register($data)
	{
		return $this->db->insert('pelamar', $data);
	}
	public function getActiveUser($id)
	{
		$q = $this->db->select('*');
		$q = $this->db->from('pelamar');
		$q = $this->db->where('id_pelamar', $id);
		return $q;
	}
}

/* End of file PelamarM.php */
/* Location: ./application/models/PelamarM.php */