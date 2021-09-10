<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

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

      $this->load->model('Surat_model');
      $this->load->library('form_validation');
      /*$this->load->library('pdf');*/
  }

  public function index(){
      $data['judul'] = 'Menu Kelola Surat';
      $this->load->view('templates/header', $data);
      $this->load->view('surat/menu_surat', $data);
      $this->load->view('templates/footer');
  }

  public function surat_tugas(){
     $data['judul'] = 'Menu Surat Tugas';
     $data['user'] = $this->Surat_model->getAllUser2();

     if ( $this->form_validation->run() == FALSE ) {
       $this->load->view('templates/header', $data);
       $this->load->view('surat/surat_tugas', $data);
       $this->load->view('templates/footer');
     } else {
       echo 'aaaaaaaaaaaaa';
     }
  }

  public function cetaksurat_tugass(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(25,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nim,1,0);
            $pdf->Cell(85,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->no_hp,1,0);
            $pdf->Cell(25,6,$row->tanggal_lahir,1,1);
        }
        $pdf->Output();
    }

    public function surat_izin1(){
       $data['judul'] = 'Menu Surat Izin Keluar Kantor';
       $data['user'] = $this->Surat_model->getAllUser2();

       if ( $this->form_validation->run() == FALSE ) {
         $this->load->view('templates/header', $data);
         $this->load->view('surat/surat_izin1', $data);
         $this->load->view('templates/footer');
       } else {
         echo 'aaaaaaaaaaaaa';
       }

    }

    public function surat_izin2(){
       $data['judul'] = 'Menu Surat Izin Tidak Masuk Kerja';
       $data['user'] = $this->Surat_model->getAllUser2();

       if ( $this->form_validation->run() == FALSE ) {
         $this->load->view('templates/header', $data);
         $this->load->view('surat/surat_izin2', $data);
         $this->load->view('templates/footer');
       } else {
         echo 'aaaaaaaaaaaaa';
       }

    }

}
