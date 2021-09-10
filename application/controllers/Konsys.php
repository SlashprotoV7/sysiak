<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsys extends CI_Controller {

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

      $this->load->model('Konsys_model');
      $this->load->model('Karyawan_ti_model');
      $this->load->library('form_validation');
  }

	public function index()
	{
        $data['judul'] = 'Konfigurasi SySiak';
        $data['datasystem'] = $this->Konsys_model->getSystem();
        $this->load->view('templates/header', $data);
				$this->load->view('konsys/system', $data);
				$this->load->view('templates/footer');
    }

    public function manage_user(){

            $data['judul'] = 'Manajemen User';
            $data['j1'] = $this->Konsys_model->getJoinData1();
            if ( $this->input->post('keyword')) {
                $data['j1'] = $this->Konsys_model->cariDataUser();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('konsys/manage_user', $data);
            $this->load->view('templates/footer');

    }

    public function register() {
          $data['judul'] = 'Manajemen User';
          $data['usr'] = $this->Konsys_model->getAllUser3();
          $data['usr2'] = $this->Karyawan_ti_model->getAllUser2();
          $data['usr1'] = $this->Konsys_model->getAllUser1();

          $this->form_validation->set_rules('password1', 'Password', 'required');
          $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password1]');

          if ( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('konsys/register', $data);
            $this->load->view('templates/footer');
          }
          else {
            $this->Konsys_model->TambahUser();
            $this->session->set_flashdata('flash','DITAMBAH');
            redirect('Konsys/manage_user');
          }
    }

    public function hapus1($id){
        $this->Konsys_model->hapusDataUser($id);
        $this->session->set_flashdata('flash', 'DIHAPUS');
        redirect('Konsys/manage_user');
    }

    public function ubah1($id){
      $data['judul'] = "Detail User";
      $data['datauser'] = $this->Konsys_model->getUserByID($id);

      $data['st'] = $this->Konsys_model->getAllUser1();
      $data['st1'] = $this->Konsys_model->getAktivasi();

      $this->form_validation->set_rules('password1', '', 'required|trim|min_length[5]',
      [
        'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',
        'min_length' => 'Password Tidak Kurang Dari 5 Digit!'
      ]);
      $this->form_validation->set_rules('password2', '', 'required|trim|matches[password1]',
      [
        'required' => 'Kolom KONFIRMASI PASSWORD Tidak Boleh Kosong!',
        'matches' => 'Kolom KONFIRMASI PASSWORD isinya Harus Sama Dengan PASSWORD!'
      ]);

    if ( $this->form_validation->run() == FALSE ){
      $this->load->view('templates/header', $data);
      $this->load->view('konsys/detail_user', $data);
      $this->load->view('templates/footer');
    }
    else {
      $this->Konsys_model->ubahDataUser();
      $this->session->set_flashdata('flash','DIUBAH');
      redirect('Konsys/manage_user');
    }
  }
}
