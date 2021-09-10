<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	 public function __construct()
	 {
			 parent::__construct();

			 $this->load->model('Admin_model');
			 $this->load->library('form_validation');
	 }

	public function index()
	{
        $data['judul'] = 'E-Lakse Admin';
				$data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
				$data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();

					/** echo 'Selamat Datang ' . $data['user1']['nama'] . '(' . $data['user']['id_user'] .')' ; */

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
	  		$this->load->view('admin/index', $data);
				$this->load->view('templates/admin_footer');

	}

  /*============================================================================*/
  /*============================== Bagian IT ===================================*/
  /*============================================================================*/

  public function report_it()
  {
        $data['judul'] = 'laporan Kerusakan Perangkat IT';
        $data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
        $data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
				$data['total'] = $this->Admin_model->hitungJumlahMasalah();
	 			$data['total_masuk1'] = $this->Admin_model->totalFormMasukBulan1(); $data['total_masuk2'] = $this->Admin_model->totalFormMasukBulan2();
				$data['total_masuk3'] = $this->Admin_model->totalFormMasukBulan3();	$data['total_masuk4'] = $this->Admin_model->totalFormMasukBulan4();
				$data['total_masuk5'] = $this->Admin_model->totalFormMasukBulan5();	$data['total_masuk6'] = $this->Admin_model->totalFormMasukBulan6();
				$data['total_masuk7'] = $this->Admin_model->totalFormMasukBulan7();	$data['total_masuk8'] = $this->Admin_model->totalFormMasukBulan8();
				$data['total_masuk9'] = $this->Admin_model->totalFormMasukBulan9();	$data['total_masuk10'] = $this->Admin_model->totalFormMasukBulan10();
				$data['total_masuk11'] = $this->Admin_model->totalFormMasukBulan11();	$data['total_masuk12'] = $this->Admin_model->totalFormMasukBulan12();

				$data['total_proses1'] = $this->Admin_model->totalFormProsesBulan1(); $data['total_proses2'] = $this->Admin_model->totalFormProsesBulan2();
				$data['total_proses3'] = $this->Admin_model->totalFormProsesBulan3();	$data['total_proses4'] = $this->Admin_model->totalFormProsesBulan4();
				$data['total_proses5'] = $this->Admin_model->totalFormProsesBulan5();	$data['total_proses6'] = $this->Admin_model->totalFormProsesBulan6();
				$data['total_proses7'] = $this->Admin_model->totalFormProsesBulan7();	$data['total_proses8'] = $this->Admin_model->totalFormProsesBulan8();
				$data['total_proses9'] = $this->Admin_model->totalFormProsesBulan9();	$data['total_proses10'] = $this->Admin_model->totalFormProsesBulan10();
				$data['total_proses11'] = $this->Admin_model->totalFormProsesBulan11();	$data['total_proses12'] = $this->Admin_model->totalFormProsesBulan12();

				$data['total_selesai1'] = $this->Admin_model->totalFormSelesaiBulan1(); $data['total_selesai2'] = $this->Admin_model->totalFormSelesaiBulan2();
				$data['total_selesai3'] = $this->Admin_model->totalFormSelesaiBulan3();	$data['total_selesai4'] = $this->Admin_model->totalFormSelesaiBulan4();
				$data['total_selesai5'] = $this->Admin_model->totalFormSelesaiBulan5();	$data['total_selesai6'] = $this->Admin_model->totalFormSelesaiBulan6();
				$data['total_selesai7'] = $this->Admin_model->totalFormSelesaiBulan7();	$data['total_selesai8'] = $this->Admin_model->totalFormSelesaiBulan8();
				$data['total_selesai9'] = $this->Admin_model->totalFormSelesaiBulan9();	$data['total_selesai10'] = $this->Admin_model->totalFormSelesaiBulan10();
				$data['total_selesai11'] = $this->Admin_model->totalFormSelesaiBulan11();	$data['total_selesai12'] = $this->Admin_model->totalFormSelesaiBulan12();

				$data['total_tolak1'] = $this->Admin_model->totalFormTolakBulan1(); $data['total_tolak2'] = $this->Admin_model->totalFormTolakBulan2();
				$data['total_tolak3'] = $this->Admin_model->totalFormTolakBulan3();	$data['total_tolak4'] = $this->Admin_model->totalFormTolakBulan4();
				$data['total_tolak5'] = $this->Admin_model->totalFormTolakBulan5();	$data['total_tolak6'] = $this->Admin_model->totalFormTolakBulan6();
				$data['total_tolak7'] = $this->Admin_model->totalFormTolakBulan7();	$data['total_tolak8'] = $this->Admin_model->totalFormTolakBulan8();
				$data['total_tolak9'] = $this->Admin_model->totalFormTolakBulan9();	$data['total_tolak10'] = $this->Admin_model->totalFormTolakBulan10();
				$data['total_tolak11'] = $this->Admin_model->totalFormTolakBulan11();	$data['total_tolak12'] = $this->Admin_model->totalFormTolakBulan12();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/a_report_it', $data);
        $this->load->view('templates/admin_footer');
  }

  public function detail_report_it($id_bulan)
  {
       $data['judul'] = 'Laporan Pemeliharaan Perangkat IT';
			 $data['bulan'] = $this->db->get_where('ref_bulan', ['id_bulan' => $id_bulan])->row_array();
       $data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
       $data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
			 $data['id_bulan'] = $id_bulan;

       $data['personilpn'] = $this->Admin_model->getAllPersonilPN();
			 $data['bagian'] = $this->Admin_model->tampilDataBagian();
       $data['masalah'] = $this->Admin_model->tampilDataMasalah();
       $data['form_masuk'] = $this->Admin_model->tampilDataFormMasuk($id_bulan);
       $data['form_proses'] = $this->Admin_model->tampilDataFormProses($id_bulan);
       $data['form_selesai'] = $this->Admin_model->tampilDataFormSelesai($id_bulan);
			 $data['form_tolak'] = $this->Admin_model->tampilDataFormTolak($id_bulan);
			 $data['total'] = $this->Admin_model->hitungJumlahMasalah();
			 $data['total_masuk'] = $this->Admin_model->totalDataFormMasuk($id_bulan);
			 $data['total_masuk_1'] = $this->Admin_model->totalDataFormMasuk1($id_bulan);
			 $data['total_proses'] = $this->Admin_model->totalDataFormProses($id_bulan);
			 $data['total_selesai'] = $this->Admin_model->totalDataFormSelesai($id_bulan);
			 $data['total_tolak'] = $this->Admin_model->totalDataFormTolak($id_bulan);

			 $data['total_masuk1'] = $this->Admin_model->totalFormMasukBulan1(); $data['total_masuk2'] = $this->Admin_model->totalFormMasukBulan2();
			 $data['total_masuk3'] = $this->Admin_model->totalFormMasukBulan3();	$data['total_masuk4'] = $this->Admin_model->totalFormMasukBulan4();
			 $data['total_masuk5'] = $this->Admin_model->totalFormMasukBulan5();	$data['total_masuk6'] = $this->Admin_model->totalFormMasukBulan6();
			 $data['total_masuk7'] = $this->Admin_model->totalFormMasukBulan7();	$data['total_masuk8'] = $this->Admin_model->totalFormMasukBulan8();
			 $data['total_masuk9'] = $this->Admin_model->totalFormMasukBulan9();	$data['total_masuk10'] = $this->Admin_model->totalFormMasukBulan10();
			 $data['total_masuk11'] = $this->Admin_model->totalFormMasukBulan11();	$data['total_masuk12'] = $this->Admin_model->totalFormMasukBulan12();

       $this->load->view('templates/admin_header', $data);
       $this->load->view('templates/admin_sidebar', $data);
       $this->load->view('admin/a_detail_report_it', $data);
       $this->load->view('templates/admin_footer');
  }

  public function addformmasuk($id_bulan){

		$this->Admin_model->addformmasuk1();
		redirect('admin/detail_report_it/'.$id_bulan);
		//penambahan TITIK dan variable $id_bulan pada REDIRECT digunakan agar bisa kembali dimenu sebelumnya sesuai dengan bulan yang dipilih
  }

public function terimaFormMasuk($id_bulan, $id){

		$this->Admin_model->terimaFormMasuk1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function tolakFormMasuk($id_bulan){

		$this->Admin_model->tolakFormMasuk1();
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function batalFormTolak($id_bulan, $id){
		$this->Admin_model->batalFormTolak1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function hapusFormMasuk($id_bulan, $id){
		$this->Admin_model->hapusFormMasuk1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function batalFormProses($id_bulan, $id){
		$this->Admin_model->batalFormProses1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function tolakFormProses($id_bulan, $id){
		$this->Admin_model->tolakFormProses1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function terimaFormProses($id_bulan, $id){
		$this->Admin_model->terimaFormProses1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function tarikForm($id_bulan, $id){
		$this->Admin_model->tarikForm1($id);
		redirect('admin/detail_report_it/'.$id_bulan);
}

public function cetakForm($id_bulan, $id){
	$data['judul'] = 'Laporan Kerusakan Perangkat IT';
	$data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
	$data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
	$data['id_bulan'] = $id_bulan;

	$this->db->select('d_laporan_pemeliharaan.*, ref_jabatan.jabatan as jabatans');
	$this->db->join('ref_jabatan', 'ref_jabatan.id = d_laporan_pemeliharaan.id_jabatan');

	$this->db->select('d_laporan_pemeliharaan.*, ref_bagian.bagian as bagians');
	$this->db->join('ref_bagian', 'ref_bagian.id = d_laporan_pemeliharaan.id_bagian');

	$this->db->select('d_laporan_pemeliharaan.*, ref_masalah.masalah as masalahs');
	$this->db->join('ref_masalah', 'ref_masalah.id = d_laporan_pemeliharaan.id_masalah');

	$this->db->select('d_laporan_pemeliharaan.*, ref_status.status as statuss');
	$this->db->join('ref_status', 'ref_status.id = d_laporan_pemeliharaan.status_form');

	$this->db->select('d_laporan_pemeliharaan.*, a_personilpn.nama as namas');
	$this->db->join('a_personilpn', 'a_personilpn.nip = d_laporan_pemeliharaan.id_pengaju');


	$data['pdf'] = $this->db->get_where('d_laporan_pemeliharaan', ['id1' => $id])->row_array();


	$this->load->view('templates/admin_header', $data);
	$this->load->view('templates/admin_sidebar', $data);
	$this->load->view('admin/a_pdf_it', $data);
	$this->load->view('templates/admin_footer');
}
  /*============================================================================*/
  /*============================= Bagian ATK ===================================*/
  /*============================================================================*/

	public function atk()
	{
			 $data['judul'] = 'Menu Permintaan ATK';
			 $data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
			 $data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
			 $this->load->view('templates/admin_header', $data);
       $this->load->view('templates/admin_sidebar', $data);
       $this->load->view('admin/b_atk', $data);
       $this->load->view('templates/admin_footer');
	}

	public function detail_atk()
	{
			 $data['judul'] = 'Detail Data Permintaan ATK';
			 $data['bulan'] = 'JANUARI';
			 $data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
			 $data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();
			 $data['total'] = $this->Admin_model->hitungJumlahMasalah();
			 $this->load->view('templates/admin_header', $data);
       $this->load->view('templates/admin_sidebar', $data);
       $this->load->view('admin/b_detail_atk', $data);
       $this->load->view('templates/admin_footer');

	}

  /*============================================================================*/
  /*========================= Bagian Kepegawaian ===============================*/
  /*============================================================================*/

	public function a_data_personilpn()
	{
				$data['judul'] = 'Daftar ASN PN Tanjung Balai Karimun';
				$data['usr'] = $this->Admin_model->tampilDataPersonilPN();
				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('admin/a_data_personilpn', $data);
				$this->load->view('templates/admin_footer');
	}

	public function a_duk()
	{
				$data['judul'] = 'Daftar Urut Kepangkatan';
				$data['usr'] = $this->Admin_model->GetDuk();
				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('admin/a_duk', $data);
				$this->load->view('templates/admin_footer');
	}

	public function honorer()
	{
				$data['judul'] = 'Daftar Honorer';
				$data['usr'] = $this->Karyawan_ti_model->tampilDataHonorer();
				$this->load->view('templates/header', $data);
				$this->load->view('karyawan_ti/honorer', $data);
				$this->load->view('templates/footer');
	}

	public function a_registerpersonilpn(){

				$data['judul'] = 'Register Personil PN';
				$data['jabatan'] = $this->Admin_model->getAllJabatan();
				$data['golongan'] = $this->Admin_model->getAllPanggol();
				$data['ijazah'] = $this->Admin_model->getAllIjazah();
				$data['status_nikah'] = $this->Admin_model->getAllStatusNikah();
				$data['gender'] = $this->Admin_model->getAllGender();
				$data['total1'] = $this->Admin_model->totalHakim();
				$data['total2'] = $this->Admin_model->totalPegawai();
				$data['total3'] = $this->Admin_model->totalHonorer();
				$data['total4'] = $this->Admin_model->totalCPNS();
				$data['bln_now'] = $this->Admin_model->getBulanNow();

				$this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/a_registerpersonilpn', $data);
        $this->load->view('templates/admin_footer');

	}

	public function a_registerasn(){

			$this->form_validation->set_rules('nama1', '', 'required|trim',
			[
				'required' => 'Kolom Nama Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('tl1', '', 'required|trim',
			[
				'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('tl2', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Tanggal Lahir!'
			]);

			$this->form_validation->set_rules('gender1', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Jenis Kelamin!'
			]);

			$this->form_validation->set_rules('status2', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Status Pernikahan!'
			]);

			$this->form_validation->set_rules('email1', '', 'required|trim|valid_email|is_unique[a_personilpn.nip]',
			[
				'required' => 'Kolom Email Tidak Boleh Kosong!',
				'valid_email' => 'Penulisan Email Tidak Benar!',
				'is_unique' => 'Alamat Email Sudah Pernah Digunakan!'
			]);

			$this->form_validation->set_rules('nohp1', '', 'required|trim|numeric',
			[
				'required' => 'Kolom No. HP Tidak Boleh Kosong!',
				'numeric' => 'Kolom No. HP Hanya Boleh Diisikan ANGKA Saja!'
			]);

			$this->form_validation->set_rules('univ1', '', 'required|trim',
			[
				'required' => 'Kolom Nama Perguruan Tinggi Tidak Boleh Kosong! (Isikan - Jika Tidak Kuliah)',
				'numeric' => 'Kolom Nama Perguruan Tinggi Hanya Boleh Diisikan ANGKA Saja!'
			]);

			$this->form_validation->set_rules('ijazah1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Ijazah!'
			]);

			$this->form_validation->set_rules('pend_tahun1', '', 'required|trim',
			[
				'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules
			('nip1', 'NIP', 'required|trim|min_length[18]|max_length[18]|is_unique[a_personilpn.nip]',
			[
				'required' => 'Kolom NIP Tidak Boleh Kosong!',
				'min_length' => 'NIP Tidak Kurang Dari 18 Digit!',
				'max_length' => 'NIP Tidak Lebih Dari 18 Digit!',
				'is_unique' => 'NIP Sudah Pernah Digunakan!'
			]);

			$this->form_validation->set_rules('golongan1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
			]);

			$this->form_validation->set_rules('tmt1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom TMT Golongan!'
			]);

			$this->form_validation->set_rules('jabatan1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
			]);

			$this->form_validation->set_rules('tmt2', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom TMT Jabatan!'
			]);

			$this->form_validation->set_rules('latihan1', '', 'required|trim',
			[
				'required' => 'Kolom Latihan Jabatan Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('latihan_tahun1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Tahun Pelatihan Dilaksanakan!'
			]);

			$this->form_validation->set_rules('kgb1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom KGB!'
			]);

			$this->form_validation->set_rules('kpk1', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom KPK!'
			]);

			$this->form_validation->set_rules('mutasi1', '', 'required|trim',
			[
				'required' => 'Kolom Mutasi Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('mutasi2', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Tahun Mutasi!'
			]);

			if ( $this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('addpersonil1','Data ASN Tidak Berhasil Dimasukan, Silahkan Cek Kembali Form Pengisian Datanya!');
				redirect('admin/a_registerpersonilpn');
			}
			else {
				$this->Admin_model->registerASN();
				redirect('admin/a_registerpersonilpn');
			}
	}

	public function hapuspersonilpn($id){

			$this->Admin_model->hapusPersonilPN1($id);
			$this->session->set_flashdata('delpersonil', 'Data <b>'.$n.'</b> Berhasil DiHapus!');
			redirect('admin/a_data_personilpn');
	}

	public function a_registerhonorer(){

			$this->form_validation->set_rules('nama2', '', 'required|trim',
			[
				'required' => 'Kolom Nama Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('tl3', '', 'required|trim',
			[
				'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('tl4', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Tanggal Lahir!'
			]);

			$this->form_validation->set_rules('gender2', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Jenis Kelamin!'
			]);

			$this->form_validation->set_rules('status3', '', 'required',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Status Pernikahan!'
			]);

			$this->form_validation->set_rules('email2', '', 'required|trim|valid_email|is_unique[a_personilpn.nip]',
			[
				'required' => 'Kolom Email Tidak Boleh Kosong!',
				'valid_email' => 'Penulisan Email Tidak Benar!',
				'is_unique' => 'Alamat Email Sudah Pernah Digunakan!'
			]);

			$this->form_validation->set_rules('nohp2', '', 'required|trim|numeric',
			[
				'required' => 'Kolom No. HP Tidak Boleh Kosong!',
				'numeric' => 'Kolom No. HP Hanya Boleh Diisikan ANGKA Saja!'
			]);

			$this->form_validation->set_rules('univ2', '', 'required|trim',
			[
				'required' => 'Kolom Nama Perguruan Tinggi Tidak Boleh Kosong! (Isikan - Jika Tidak Kuliah)',
				'numeric' => 'Kolom Nama Perguruan Tinggi Hanya Boleh Diisikan ANGKA Saja!'
			]);

			$this->form_validation->set_rules('ijazah2', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Ijazah!'
			]);

			$this->form_validation->set_rules('pend_tahun2', '', 'required|trim',
			[
				'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
			]);

			$this->form_validation->set_rules('jabatan2', '', 'required|trim',
			[
				'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
			]);

			if ( $this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('addpersonil1','Data Honorer Tidak Berhasil Dimasukan, Silahkan Cek Kembali Form Pengisian Datanya!');
				redirect('admin/a_registerpersonilpn');
			}
			else {
				$this->Admin_model->registerHonorer();
				redirect('admin/a_registerpersonilpn');
			}
	}


public function a_ubahpersonilpn($st2, $nip){

	$data['judul'] = 'Ubah Data Personil PN';
	$data['datapersonil'] = $this->Admin_model->getPersonilByID($st2, $nip);
	$data['jabatan'] = $this->Admin_model->getAllJabatan();
	$data['golongan'] = $this->Admin_model->getAllPanggol();
	$data['status'] = $this->Admin_model->getStatus();
	$data['ijazah'] = $this->Admin_model->getAllIjazah();
	$data['status_nikah'] = $this->Admin_model->getAllStatusNikah();
	$data['gender'] = $this->Admin_model->getAllGender();
	$data['bln_now'] = $this->Admin_model->getBulanNow();


	if ( $st2 == 21 || $st2 == 22 || $st2 == 23 ){
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/a_ubahpersonil1pn', $data);
		$this->load->view('templates/admin_footer');
	}
	else {
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/a_ubahpersonil2pn', $data);
		$this->load->view('templates/admin_footer');
	}
}

public function a_ubahpersonilpn1(){

	$this->form_validation->set_rules('nama1', '', 'required|trim',
	[
		'required' => 'Kolom Nama Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('tl1', '', 'required|trim',
	[
	  'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('tl2', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Tanggal Lahir!'
	]);

	$this->form_validation->set_rules('gender1', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Jenis Kelamin!'
	]);

	$this->form_validation->set_rules('status1', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Status Pernikahan!'
	]);

	$this->form_validation->set_rules('email1', '', 'required|trim|valid_email|is_unique[a_personilpn.nip]',
	[
	  'required' => 'Kolom Email Tidak Boleh Kosong!',
	  'valid_email' => 'Penulisan Email Tidak Benar!',
	  'is_unique' => 'Alamat Email Sudah Pernah Digunakan!'
	]);

	$this->form_validation->set_rules('nohp1', '', 'required|trim|numeric',
	[
	  'required' => 'Kolom No. HP Tidak Boleh Kosong!',
	  'numeric' => 'Kolom No. HP Hanya Boleh Diisikan ANGKA Saja!'
	]);

	$this->form_validation->set_rules('univ1', '', 'required|trim',
	[
	  'required' => 'Kolom Nama Perguruan Tinggi Tidak Boleh Kosong! (Isikan - Jika Tidak Kuliah)',
	  'numeric' => 'Kolom Nama Perguruan Tinggi Hanya Boleh Diisikan ANGKA Saja!'
	]);

	$this->form_validation->set_rules('ijazah1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Ijazah!'
	]);

	$this->form_validation->set_rules('pend_tahun1', '', 'required|trim',
	[
	  'required' => 'Kolom Tahun Pendidikan Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('golongan1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
	]);

	$this->form_validation->set_rules('tmt1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom TMT Golongan!'
	]);

	$this->form_validation->set_rules('jabatan1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
	]);

	$this->form_validation->set_rules('tmt2', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom TMT Jabatan!'
	]);

	$this->form_validation->set_rules('latihan1', '', 'required|trim',
	[
	  'required' => 'Kolom Latihan Jabatan Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('latihan_tahun1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Tahun Pelatihan Dilaksanakan!'
	]);

	$this->form_validation->set_rules('kgb1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom KGB!'
	]);

	$this->form_validation->set_rules('kpk1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom KPK!'
	]);

	$this->form_validation->set_rules('mutasi1', '', 'required|trim',
	[
	  'required' => 'Kolom Mutasi Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('mutasi2', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Tahun Mutasi!'
	]);


	if ( $this->form_validation->run() == FALSE ){
		$this->session->set_flashdata('ubahpersonil1','Data ASN Tidak Berhasil Diubah, Silahkan Cek Kembali Form Pengisian Datanya!');
		redirect('admin/a_data_personilpn');
	}
	else {
		$this->Admin_model->ubahASN();
		redirect('admin/a_data_personilpn');
	}
}

public function a_ubahpersonilpn2(){

	$this->form_validation->set_rules('nama1', '', 'required|trim',
	[
		'required' => 'Kolom Nama Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('tl1', '', 'required|trim',
	[
	  'required' => 'Kolom Tempat Lahir Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('tl2', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Tanggal Lahir!'
	]);

	$this->form_validation->set_rules('gender1', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Jenis Kelamin!'
	]);

	$this->form_validation->set_rules('status1', '', 'required',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Status Pernikahan!'
	]);

	$this->form_validation->set_rules('email1', '', 'required|trim|valid_email|is_unique[a_personilpn.nip]',
	[
	  'required' => 'Kolom Email Tidak Boleh Kosong!',
	  'valid_email' => 'Penulisan Email Tidak Benar!',
	  'is_unique' => 'Alamat Email Sudah Pernah Digunakan!'
	]);

	$this->form_validation->set_rules('nohp1', '', 'required|trim|numeric',
	[
	  'required' => 'Kolom No. HP Tidak Boleh Kosong!',
	  'numeric' => 'Kolom No. HP Hanya Boleh Diisikan ANGKA Saja!'
	]);

	$this->form_validation->set_rules('univ1', '', 'required|trim',
	[
	  'required' => 'Kolom Nama Perguruan Tinggi Tidak Boleh Kosong! (Isikan - Jika Tidak Kuliah)',
	  'numeric' => 'Kolom Nama Perguruan Tinggi Hanya Boleh Diisikan ANGKA Saja!'
	]);

	$this->form_validation->set_rules('ijazah1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Ijazah!'
	]);

	$this->form_validation->set_rules('pend_tahun1', '', 'required|trim',
	[
	  'required' => 'Kolom Tahun Pendidikan Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('jabatan1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom Golongan!'
	]);

	$this->form_validation->set_rules('tmt2', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Dikolom TMT Jabatan!'
	]);

	if ( $this->form_validation->run() == FALSE ){
		$this->session->set_flashdata('ubahpersonil1','Data ASN Tidak Berhasil Diubah, Silahkan Cek Kembali Form Pengisian Datanya!');
		redirect('admin/a_data_personilpn');
	}
	else {
		$this->Admin_model->ubahNONASN();
		redirect('admin/a_data_personilpn');
	}
}

public function a_surat(){
		$data['judul'] = 'Menu Surat Kepegawaian';
		$data['datapersonil'] = $this->Admin_model->getAllPersonilPN();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/a_menu_surat', $data);
		$this->load->view('templates/admin_footer');
}

public function a_surattugas(){
		$data['judul'] = 'Menu Surat Tugas';
		$data['datapersonil'] = $this->Admin_model->getAllPersonilPN();
		$data['bulannow'] = $this->Admin_model->getBulanNow();
		$data['refsurat'] = $this->Admin_model->getRefSurat();
		$data['lastid'] = $this->Admin_model->getLastIDSurat();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/a_surat_tugas', $data);
		$this->load->view('templates/admin_footer');
}

public function registerSuratTugas(){

	$this->form_validation->set_rules('pg1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Pegawainya!'
	]);

	$this->form_validation->set_rules('uraian1', '', 'required|trim',
	[
	  'required' => 'Kolom Uraian Pertimbangan & Sadar Hukum Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('uraian2', '', 'required|trim',
	[
	  'required' => 'Kolom Uraian Alasan Pembuatan Surat Tugas Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('dipa', '', 'required|trim',
	[
	  'required' => 'Silahkan Dipilih Kode DIPAnya!'
	]);

	if ( $this->form_validation->run() == FALSE ){
		$this->session->set_flashdata('addsurat1','Surat Tugas Tidak Berhasil Ditambahan, Silahkan Cek Kembali Form Pengisian Suratnya!');
		redirect('admin/a_surattugas');
	}
	else {
		$this->Admin_model->addSuratTugas();
		redirect('admin/a_surat');
	}
}

public function a_suratizin1(){
	 	$data['judul'] = 'Menu Surat Izin Keluar Kantor';
	 	$data['datapersonil'] = $this->Admin_model->getAllPersonilPN();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/a_surat_izin1', $data);
		$this->load->view('templates/admin_footer');

}

public function registerSuratIzin1(){

	$this->form_validation->set_rules('pg1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Pegawainya!'
	]);

	$this->form_validation->set_rules('tgl_surat', '', 'required|trim',
	[
	  'required' => 'Kolom  Pemilihan Tanggal Surat Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('jam1', '', 'required|trim',
	[
	  'required' => 'Kolom Pemilihan Jam (Mulai Pukul) Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('jam2', '', 'required|trim',
	[
	  'required' => 'Silahkan Pemilihan Jam (Hingga Pukul) Tidak Boleh Kosong!'
	]);

	$this->form_validation->set_rules('uraian1', '', 'required|trim',
	[
	  'required' => 'Kolom Uraian Alasan Pembuatan Surat Izin Tidak Boleh Kosong!'
	]);

	if ( $this->form_validation->run() == FALSE ){
		$this->session->set_flashdata('addsurat1','Surat Izin Tidak Berhasil Ditambahan, Silahkan Cek Kembali Form Pengisian Suratnya!');
		redirect('admin/a_suratizin1');
	}
	else {
		$this->Admin_model->addSuratIzin1();
		redirect('admin/a_surat');
	}
}

public function a_suratizin2(){
	 $data['judul'] = 'Menu Surat Izin Tidak Masuk Kerja';
	 $data['datapersonil'] = $this->Admin_model->getAllPersonilPN();
	 $this->load->view('templates/admin_header', $data);
	 $this->load->view('templates/admin_sidebar', $data);
	 $this->load->view('admin/a_surat_izin2', $data);
	 $this->load->view('templates/admin_footer');

}

public function registerSuratIzin2(){

	$this->form_validation->set_rules('pg1', '', 'required|trim',
	[
	  'required' => 'Silahkan Pilih Satu Pegawainya!'
	]);

	$this->form_validation->set_rules('tgl_surat', '', 'required|trim',
	[
	  'required' => 'Kolom  Pemilihan Tanggal Surat Tidak Boleh Kosong!'

	]);

	$this->form_validation->set_rules('uraian1', '', 'required|trim',
	[
	  'required' => 'Kolom Uraian Alasan Pembuatan Surat Izin Tidak Boleh Kosong!'
	]);

	if ( $this->form_validation->run() == FALSE ){
		$this->session->set_flashdata('addsurat1','Surat Izin Tidak Berhasil Ditambahan, Silahkan Cek Kembali Form Pengisian Suratnya!');
		redirect('admin/a_suratizin1');
	}
	else {
		$this->Admin_model->addSuratIzin2();
		redirect('admin/a_surat');
	}
}






















	public function hapushonorer1($id){
			$this->Karyawan_ti_model->hapusDataHonorer($id);
			$this->session->set_flashdata('flash', 'DIHAPUS');
			redirect('Karyawan_ti/honorer');
	}

	public function hapushakim1($id){
			$this->Karyawan_ti_model->hapusDataHakim($id);
			$this->session->set_flashdata('flash', 'DIHAPUS');
			redirect('Karyawan_ti/hakim');
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

	//public function hapushonorer1($id){
		//	$this->Karyawan_ti_model->hapusDataHonorer($id);
		//	$this->session->set_flashdata('flash', 'DIHAPUS');
		//	redirect('Karyawan_ti/honorer');
	//}

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






	/*============================================================================*/
	/*=========================== Bagian Settings ================================*/
	/*============================================================================*/

	public function systemc()
	{
				$data['judul'] = 'E-Lakse SysInfo';
				$data['datasystem'] = $this->Admin_model->getAllsystem();

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('admin/sysinfo', $data);
				$this->load->view('templates/admin_footer');
		}

}
