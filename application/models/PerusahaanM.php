<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerusahaanM extends CI_Model {

	public function getActiveUser($id)
	{
		$q = $this->db->select('*');
		$q = $this->db->from('perusahaan');
		$q = $this->db->where('id_perusahaan', $id);
		return $q;
	}
	public function tambahPekerjaan($data)
	{
		return $this->db->insert('pekerjaan', $data);
	}
	public function getPerusahaan($id)
	{
		// $q = $this->db->get_where('pekerjaan', ['id_perusahaan' => '$id']);
		$q = $this->db->query("SELECT * FROM `pekerjaan` WHERE `id_perusahaan`='$id'");
		return $q;
	}
	public function getPekerjaanDetail($id)
	{
		$q = $this->db->query("SELECT * FROM `pekerjaan` WHERE `id_pekerjaan`='$id'");
		return $q;	
	}
	public function updatePekerjaan($id,$data)
	{
		$q = $this->db->where('id_pekerjaan', $id);
		$q = $this->db->update('pekerjaan', $data);
		return $q;
	}
	public function hapusPekerjaan($id)
	{
		$this->db->where('id_pekerjaan', $id);
		$this->db->delete('pekerjaan');
	}
}

/* End of file PerusahaanM.php */
/* Location: ./application/models/PerusahaanM.php */