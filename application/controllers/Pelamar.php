<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PelamarM');
		if (empty($_SESSION['role'])) {
			redirect('loginn/login');
		}elseif ($_SESSION['role']=='perusahaan') {
			redirect('perusahaan');
		}
	}

	public function index()
	{
		$data['pelamar'] = $this->PelamarM->getActiveUser($_SESSION['id_pelamar'])->get()->result()[0];
		$data['username'] = $data['pelamar']->username;
		$this->load->view('layout/head');
		$this->load->view('pelamar/header', $data);
		$this->load->view('pelamar/isikategori');
		$this->load->view('pelamar/footer');
		// $this->load->view('pelamar/index');		
		// $this->load->view('pelamar/index', $data);

	}
	public function kategori()
	{
		$data['pelamar'] = $this->PelamarM->getActiveUser($_SESSION['id_pelamar'])->get()->result()[0];
		$data['username'] = $data['pelamar']->username;
		$this->load->view('layout/head');
		$this->load->view('pelamar/header', $data);
		$this->load->view('pelamar/isikategori');
		$this->load->view('pelamar/footer');
	}
	public function paket()
	{
		$data['pelamar'] = $this->PelamarM->getActiveUser($_SESSION['id_pelamar'])->get()->result()[0];
		$data['username'] = $data['pelamar']->username;
		$this->load->view('layout/head');
		$this->load->view('pelamar/header', $data);
		$this->load->view('pelamar/paket');
		$this->load->view('pelamar/footer');
	}
	public function contact()
	{
		$data['pelamar'] = $this->PelamarM->getActiveUser($_SESSION['id_pelamar'])->get()->result()[0];
		$data['username'] = $data['pelamar']->username;
		$this->load->view('layout/head');
		$this->load->view('pelamar/header', $data);
		$this->load->view('pelamar/contacus');
		$this->load->view('pelamar/footer');
	}
	public function logout()
	{
		session_destroy();
		redirect('loginn/login');
	}
}

/* End of file Pelamar.php */
/* Location: ./application/controllers/Pelamar.php */