<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class TrainingCenter extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_home');
		if (isset($_SESSION['role']) == 'pelamar') {
			redirect('pelamar');
		}elseif (isset($_SESSION['role']) == 'perusahaan') {
			redirect('perusahaan');
		}
	}
	
	public function cek()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('content/content');
		$this->load->view('layout/footer');
	}


	public function login()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header-login');
		$this->load->view('login/registrasi');
		$this->load->view('layout/footer');
	}
	
	public function kategori()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('content/isikategori');
		$this->load->view('layout/footer');
	}
	public function paket()
	{
		$this->load->view('layout/headpaket');
		$this->load->view('layout/header');
		$this->load->view('content/paket');
		$this->load->view('layout/footer');
	}
	public function contact()
	{
		$this->load->view('layout/headcontacus');
		$this->load->view('layout/header');
		$this->load->view('content/contacus');
		$this->load->view('layout/footer');
	}
	
}
 ?>