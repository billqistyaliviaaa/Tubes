<?<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_home extends CI_Model
{
	function menu(){
		return $this->db->query('select * from loker')->result();
	}
}
?>