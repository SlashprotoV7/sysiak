<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptip extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){
       parent::__construct();
       $this->load->model('Ptip_model');
       $this->load->library('form_validation');
   }

	public function index()
	{
        $data['judul'] = 'laporan Kerusakan Perangkat Elektronik';
        $this->load->view('templates/header', $data);
	  		$this->load->view('ptip/report_it', $data);
				$this->load->view('templates/footer');
	}

	public function report_it()
	{
				$data['judul'] = 'laporan Kerusakan Perangkat Elektronik';
				$data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
				$data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
				

				$this->load->view('templates/header', $data);
				$this->load->view('ptip/report_it', $data);
				$this->load->view('templates/footer');
	}

	public function detail_report_it()
	{
			 $data['judul'] = 'Laporan Pemeliharaan Perangkat IT';
			 $data['hakim_a'] = $this->Ptip_model->getAllHakim();
			 $data['hakim'] = $this->Ptip_model->tampilDataHakim();
			 $data['pegawai'] = $this->Ptip_model->tampilDataPegawai();
			 $data['honorer'] = $this->Ptip_model->tampilDataHonorer();
			 $data['masalah'] = $this->Ptip_model->tampilDataMasalah();
			 $data['form_masuk'] = $this->Ptip_model->tampilDataFormMasuk();
			 $data['form_proses'] = $this->Ptip_model->tampilDataFormProses();
			 $data['form_selesai'] = $this->Ptip_model->tampilDataFormSelesai();
			 $this->load->view('templates/header', $data);
			 $this->load->view('ptip/detail_report_it', $data);
			 $this->load->view('templates/footer');
	}



}
