<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PerusahaanM');
		if (empty($_SESSION['role'])) {
			redirect('loginn/login');
		}elseif ($_SESSION['role']=='pelamar') {
			redirect('pelamar');
		}
	}
	public function index()
	{
		$data['perusahaan'] = $this->PerusahaanM->getActiveUser($_SESSION['id_perusahaan'])->get()->result()[0];
		// print_r($data['perusahaan']);
		$data['username'] = $data['perusahaan']->username;
		// echo $data['username'];
		$this->load->view('perusahaan/header', $data);
		$this->load->view('perusahaan/sidebar');
		$this->load->view('perusahaan/index', $data);
	}
	public function profile()
	{
		$data['perusahaan'] = $this->PerusahaanM->getActiveUser($_SESSION['id_perusahaan'])->get()->result()[0];
		$data['p'] = [
			"username" => $data['perusahaan']->username,
			"email" => $data['perusahaan']->email,
			"nama_perusahaan" => $data['perusahaan']->nama_perusahaan,
			"detail" => $data['perusahaan']->detail
		];
		$this->load->view('perusahaan/header', $data);
		$this->load->view('perusahaan/sidebar');
		$this->load->view('perusahaan/profile', $data);
	}
	public function kelolaPekerjaan()
	{
		$data['perusahaan'] = $this->PerusahaanM->getActiveUser($_SESSION['id_perusahaan'])->get()->result()[0];
		$id = $data['perusahaan']->id_perusahaan;
		$this->load->view('perusahaan/header');
		$this->load->view('perusahaan/sidebar');
		$data['pekerjaan'] = $this->PerusahaanM->getPerusahaan($id)->result();
		// print_r($data['pekerjaan']);
		$this->load->view('perusahaan/kelolaPerusahaan', $data);
	}
	public function editPekerjaan($id)
	{	
		$data['pekerjaan_detail'] = $this->PerusahaanM->getPekerjaanDetail($id)->row();
		$this->load->view('perusahaan/header');
		$this->load->view('perusahaan/sidebar');	
		$this->load->view('perusahaan/editPekerjaan', $data);
	}
	public function editPekerjaanAction()
	{
		$data = [
			'posisi_pekerjaan' => $this->input->post('posisi_pekerjaan'), 
			'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'), 
			'tingkat_jabatan' => $this->input->post('tingkat_jabatan'), 
			'spesifikasi_pekerjaan' => $this->input->post('spesifikasi_pekerjaan'), 
			'tugas_pekerjaan' => $this->input->post('tugas_pekerjaan'), 
			'lokasi_pekerjaan' => $this->input->post('lokasi_pekerjaan'), 
			'gaji_bulanan' => $this->input->post('gaji_bulanan'), 
			'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'), 
			'lama_pengalaman'=> $this->input->post('lama_pengalaman'), 
			'keahlian'=> $this->input->post('keahlian')
		];
		$id = $this->input->post('id_pekerjaan');
		// print_r($id);
		$this->PerusahaanM->updatePekerjaan($id, $data);
		redirect('perusahaan/kelolaPekerjaan');
	}
	public function hapusPekerjaan($id)
	{
		$this->PerusahaanM->hapusPekerjaan($id);
		redirect('perusahaan/kelolaPekerjaan');
	}
	public function getPekerjaanDetail($id)
	{
		$data['pekerjaan_detail'] = $this->PerusahaanM->getPekerjaanDetail($id);
		echo json_encode($data['pekerjaan_detail']);
	}
	public function kelolaPelamar()
	{
		$this->load->view('perusahaan/header');
		$this->load->view('perusahaan/sidebar');
		$this->load->view('perusahaan/kelolaPelamar');
	}
	public function tambahPekerjaan()
	{
		$data['perusahaan'] = $this->PerusahaanM->getActiveUser($_SESSION['id_perusahaan'])->get()->result()[0];
		$data = [
			'id_perusahaan' => $data['perusahaan']->id_perusahaan, 
			'posisi_pekerjaan' => $this->input->post('posisi_pekerjaan'), 
			'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'), 
			'tingkat_jabatan' => $this->input->post('tingkat_jabatan'), 
			'spesifikasi_pekerjaan' => $this->input->post('spesifikasi_pekerjaan'), 
			'tugas_pekerjaan' => $this->input->post('tugas_pekerjaan'), 
			'lokasi_pekerjaan' => $this->input->post('lokasi_pekerjaan'), 
			'gaji_bulanan' => $this->input->post('gaji_bulanan'), 
			'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'), 
			'lama_pengalaman'=> $this->input->post('lama_pengalaman'), 
			'keahlian'=> $this->input->post('keahlian')
		];
		$q = $this->PerusahaanM->tambahPekerjaan($data);
		if ($q == 1) {
			redirect('perusahaan/kelolaPekerjaan');
			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
					<strong>Success - </strong> Berhasil Tambah Pekerjaan !
				</div>
				'
			);
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('loginn/login');
	}
}

/* End of file Perusahaan.php */
/* Location: ./application/controllers/Perusahaan.php */