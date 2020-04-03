<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class loginn extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginM');
		$this->load->model('PelamarM');
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'perusahaan') {
				redirect('perusahaan');
			}elseif ($_SESSION['role'] == 'pelamar') {
				redirect('pelamar');
			}
		}
	}
	public function login()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header-login');
		$this->load->view('login/header');
		$this->load->view('login/login');
		$this->load->view('layout/footer');
	}
	public function loginAction()
	{
		$this->form_validation->set_rules('full_name','Full Name','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == false){
			$this->login();
		}else{
			$data = [
				'full_name' => $this->input->post('full_name'),
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role')
			];
			if ($data['role'] == 'perusahaan') {
				$q = $this->loginM->checkUserPerusahaan($data);
				$dataSess = $q->result();
				foreach ($dataSess as $key => $value) {
					$session = [
						'id_perusahaan' => $value->id_perusahaan,
						'full_name' => $value->username,
						'role' => 'perusahaan'
					];
					$this->session->set_userdata($session);
				}
				if ($q->num_rows() == 1) {
					redirect('perusahaan');
				}else{
					$this->session->set_flashdata('errors', 'User Not Found !');
					$this->login();
				}
			}else{
				$q = $this->loginM->checkUserPelamar($data);
				$dataSess = $q->result();
				foreach ($dataSess as $key => $value) {
					$session = [
						'id_pelamar' => $value->id_pelamar,
						'full_name' => $value->name,
						'role' => 'pelamar'
					];
					$this->session->set_userdata($session);
				}
				if ($q->num_rows() == 1) {
					redirect('pelamar');
				}else{
					$this->session->set_flashdata('errors', 'User Not Found !');
					$this->login();
				}
			}
		}
	}
	
	public function register()
	{
		$this->form_validation->set_rules('full_name','Full Name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('your_email','Email','required');
		$this->form_validation->set_rules('instansi','Instansi','required');
		$this->form_validation->set_rules('prodi','Prodi','required');
		$this->form_validation->set_rules('handphone','Handphone','required');
		$this->form_validation->set_rules('ttl','Tanggal Lahir','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('comfirm_password','Confirm Password','required|matches[password]');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/head');
			$this->load->view('layout/header-login');
			$this->load->view('login/registrasi');
			$this->load->view('layout/footer');	
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('your_email'),
				'instansi' => $this->input->post('instansi'),
				'program_studi' => $this->input->post('prodi'),
				'no_telepon' => $this->input->post('handphone'),
				'tgl_lahir' => $this->input->post('ttl'),
			];
			$q = $this->PelamarM->register($data);
			if ($q == 1) {
				redirect('loginn/login','refresh');
			}
		}
	}
}

 ?>
