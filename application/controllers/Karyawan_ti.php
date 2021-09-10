<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_ti extends CI_Controller {

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
        $this->load->model('Karyawan_ti_model');
        $this->load->library('form_validation');
    }

  public function data_asn()
  {
        $data['judul'] = 'Daftar ASN PN Tanjung Balai Karimun';
        $data['usr'] = $this->Karyawan_ti_model->tampilDataHakim();
        $this->load->view('templates/header1', $data);
    		$this->load->view('karyawan_ti/data_asn', $data);
    		$this->load->view('templates/footer1');
  }

	public function duk()
	{
        $data['judul'] = 'Daftar Urut Kepangkatan';
        $data['usr'] = $this->Karyawan_ti_model->tampilDataHakim();
        $this->load->view('templates/header', $data);
    		$this->load->view('karyawan_ti/duk', $data);
    		$this->load->view('templates/footer');
	}

  public function honorer()
	{
        $data['judul'] = 'Daftar Honorer';
        $data['usr'] = $this->Karyawan_ti_model->tampilDataHonorer();
        $this->load->view('templates/header', $data);
    		$this->load->view('karyawan_ti/honorer', $data);
    		$this->load->view('templates/footer');
	}


  public function registerasn()
    {
          $data['judul'] = 'Tambah Data ASN';
          $data['usr'] = $this->Karyawan_ti_model->getAllUser2();
          $data['usr1'] = $this->Karyawan_ti_model->getAllJabatan();
          $data['usr2'] = $this->Karyawan_ti_model->getAllPanggol();

          $this->form_validation->set_rules('nama', '', 'required|trim|is_unique[user2.nip]',
          [
            'required' => 'Kolom Nama Tidak Boleh Kosong!',
            'is_unique' => 'NIP Sudah Pernah Digunakan!.'
          ]);
          $this->form_validation->set_rules('nip', '', 'required|trim|min_length[18]|max_length[18]',
          [
            'required' => 'Kolom NIP Tidak Boleh Kosong!',
            'min_length' => 'NIP Tidak Kurang Dari 18 Digit!',
            'max_length' => 'NIP Tidak Lebih Dari 18 Digit!',
          ]);

        if ( $this->form_validation->run() == FALSE ){
          $this->load->view('templates/header', $data);
          $this->load->view('karyawan_ti/register', $data);
          $this->load->view('templates/footer');
        }
        else {
          $this->Karyawan_ti_model->addDataHakim();
          $this->session->set_flashdata('flash','DITAMBAH');
          redirect('Karyawan_ti/hakim');
        }
    }

    public function hapushakim1($id){
        $this->Karyawan_ti_model->hapusDataHakim($id);
        $this->session->set_flashdata('flash', 'DIHAPUS');
        redirect('Karyawan_ti/hakim');
    }

    public function ubahhakim1($id){
      $data['judul'] = "Detail Pegawai";
      $data['datauser'] = $this->Karyawan_ti_model->getHakimByID($id);

      $data['st'] = $this->Karyawan_ti_model->getAllPanggol();
      $data['st1'] = $this->Karyawan_ti_model->getAllAktivasi();
      $data['st2'] = $this->Karyawan_ti_model->getAllJabatan();

      $this->form_validation->set_rules('nama', '', 'required|trim',
      [
        'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',
        'min_length' => 'Password Tidak Kurang Dari 5 Digit!'
      ]);

      $this->form_validation->set_rules('nip', '', 'required|trim|min_length[18]|max_length[18]',
      [
        'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',

        'min_length' => 'Password Tidak Kurang Dari 18 Digit!',
        'max_length' => 'Password Tidak Lebih Dari 18 Digit!'
      ]);

    if ( $this->form_validation->run() == FALSE ){
      $this->load->view('templates/header', $data);
      $this->load->view('karyawan_ti/detail_hakim', $data);
      $this->load->view('templates/footer');
    }

    else {
      $this->Karyawan_ti_model->ubahDataHakim();
      $this->session->set_flashdata('flash','DIUBAH');
      redirect('karyawan_ti/hakim');
    }
  }

  public function registerhonorer()
  {
        $data['judul'] = 'Tambah Data Honorer';
        $data['usr'] = $this->Karyawan_ti_model->getAllUser2();
        $data['usr1'] = $this->Karyawan_ti_model->getAllJabatan();
        $data['usr2'] = $this->Karyawan_ti_model->getAllPanggol();

        $this->form_validation->set_rules('nama', '', 'required|trim|is_unique[user2.nip]',
        [
          'required' => 'Kolom Nama Tidak Boleh Kosong!',
          'is_unique' => 'NIP Sudah Pernah Digunakan!.'
        ]);
        $this->form_validation->set_rules('nip', '', 'required|trim|min_length[18]|max_length[18]',
        [
          'required' => 'Kolom NIP Tidak Boleh Kosong!',
          'min_length' => 'NIP Tidak Kurang Dari 18 Digit!',
          'max_length' => 'NIP Tidak Lebih Dari 18 Digit!',
        ]);

      if ( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/header', $data);
        $this->load->view('karyawan_ti/register', $data);
        $this->load->view('templates/footer');
      }
      else {
        $this->Karyawan_ti_model->addDataHonorer();
        $this->session->set_flashdata('flash','DITAMBAH');
        redirect('Karyawan_ti/honorer');
      }
  }

  public function hapushonorer1($id){
      $this->Karyawan_ti_model->hapusDataHonorer($id);
      $this->session->set_flashdata('flash', 'DIHAPUS');
      redirect('Karyawan_ti/honorer');
  }

  public function ubahhonorer1($id){
    $data['judul'] = "Detail Honorer";
    $data['datauser'] = $this->Karyawan_ti_model->getHonorerByID($id);

    $data['st'] = $this->Karyawan_ti_model->getAllPanggol();
    $data['st1'] = $this->Karyawan_ti_model->getAllAktivasi();
    $data['st2'] = $this->Karyawan_ti_model->getAllJabatan();

    $this->form_validation->set_rules('nama', '', 'required|trim',
    [
      'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',
      'min_length' => 'Password Tidak Kurang Dari 5 Digit!'
    ]);

    $this->form_validation->set_rules('nip', '', 'required|trim|min_length[18]|max_length[18]',
    [
      'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',

      'min_length' => 'Password Tidak Kurang Dari 18 Digit!',
      'max_length' => 'Password Tidak Lebih Dari 18 Digit!'
    ]);

  if ( $this->form_validation->run() == FALSE ){
    $this->load->view('templates/header', $data);
    $this->load->view('karyawan_ti/detail_honorer', $data);
    $this->load->view('templates/footer');
  }

  else {
    $this->Karyawan_ti_model->ubahDataHonorer();
    $this->session->set_flashdata('flash','DIUBAH');
    redirect('karyawan_ti/pegawai');
  }

}
}
