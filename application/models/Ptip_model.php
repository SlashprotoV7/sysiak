<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptip_model extends CI_model {

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

/*============================================================================*/
/*=========================== Panggil Semua Data User ========================*/
/*============================================================================*/

	public function getAllHakim()
	{
       return $this->db->get('a_hakim')->result_array();
	}

	public function getAllPegawai()
	{
       return $this->db->get('a_pegawai')->result_array();
	}

	public function getAllHonorer()
	{
			return $this->db->get('a_honorer')->result_array();
	}

	public function getAllBarang()
	{
			return $this->db->get('ref_barang')->result_array();
	}

  public function getAllSatuan()
  {
      return $this->db->get('ref_satuan')->result_array();
  }

  public function getAllBagian()
  {
      return $this->db->get('ref_Bagian')->result_array();
  }

	public function getAllBulan()
	{
			return $this->db->get('ref_bulan')->result_array();
	}

	public function getAllHari()
	{
			return $this->db->get('ref_hari')->result_array();
	}

	public function getAllTahun()
	{
			return $this->db->get('ref_tahun')->result_array();
	}

	public function getAllTgl()
	{
			return $this->db->get('ref_tgl')->result_array();
	}

	public function getAllMasalah()
	{
			return $this->db->get('ref_masalah')->result_array();
	}

	public function getAllPerangkat()
	{
			return $this->db->get('ref_perangkat')->result_array();
	}

	public function getAllRuangan()
	{
			return $this->db->get('ref_ruangan')->result_array();
	}

	public function getAllStatus()
	{
			return $this->db->get('ref_status')->result_array();
	}

	public function getAllLaporan()
	{
			return $this->db->get('d_laporan_kerusakan')->result_array();
	}
		public function getAllsystem()
	{
			return $this->db->get('ref_sistem')->result_array();
	}

	public function getAllUser()
	{
			return $this->db->get('ref_user')->result_array();
	}

/*============================================================================*/
/*============================= Data Umum  ===================================*/
/*============================================================================*/




	public function getHakimByID($id){
		return $this->db->get_where('a_hakim', ['nip' => $id])->row_array();
	}

	public function tampilDataHakim()
	{
		$this->db->select('a_hakim.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_hakim.jabatan');

		$this->db->select('a_hakim.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = a_hakim.bagian');

		$this->db->select('a_hakim.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = a_hakim.status');

		return $this->db->get('a_hakim')->result_array();
	}

	public function getPegawaiByID($id){
		return $this->db->get_where('a_pegawai', ['nip' => $id])->row_array();
	}

	public function tampilDataPegawai()
	{
		$this->db->select('a_pegawai.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_pegawai.jabatan');

		$this->db->select('a_pegawai.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = a_pegawai.bagian');

		$this->db->select('a_pegawai.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = a_pegawai.status');

		return $this->db->get('a_pegawai')->result_array();
	}

	public function getHonorerByID($id){
		return $this->db->get_where('a_honorer', ['id' => $id])->row_array();
	}

	public function tampilDataHonorer()
	{
		$this->db->select('a_honorer.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_honorer.jabatan');

		$this->db->select('a_honorer.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = a_honorer.bagian');

		$this->db->select('a_honorer.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = a_honorer.status');

		return $this->db->get('a_honorer')->result_array();
	}


	public function tampilDataMasalah()
	{
		return $this->db->get('ref_masalah')->result_array();
	}


	public function getLaporan1ByID($id){
		return $this->db->get_where('d_laporan_pemeliharaan', ['id' => $id])->row_array();
	}

	public function tampilDataFormMasuk()
	{

		$this->db->select('d_laporan_pemeliharaan.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = d_laporan_pemeliharaan.id_jabatan');

		$this->db->select('d_laporan_pemeliharaan.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = d_laporan_pemeliharaan.id_bagian');

		$this->db->select('d_laporan_pemeliharaan.*, ref_masalah.masalah as masalahs');
		$this->db->join('ref_masalah', 'ref_masalah.id = d_laporan_pemeliharaan.id_masalah');

		$this->db->select('d_laporan_pemeliharaan.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = d_laporan_pemeliharaan.status_form');

		return $this->db->get_where('d_laporan_pemeliharaan', ['status_form' => 5])->result_array();
	}

	public function tampilDataFormProses()
	{

		$this->db->select('d_laporan_pemeliharaan.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = d_laporan_pemeliharaan.id_jabatan');

		$this->db->select('d_laporan_pemeliharaan.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = d_laporan_pemeliharaan.id_bagian');

		$this->db->select('d_laporan_pemeliharaan.*, ref_masalah.masalah as masalahs');
		$this->db->join('ref_masalah', 'ref_masalah.id = d_laporan_pemeliharaan.id_masalah');

		$this->db->select('d_laporan_pemeliharaan.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = d_laporan_pemeliharaan.status_form');

		return $this->db->get_where('d_laporan_pemeliharaan', ['status_form' => 6])->result_array();
	}

	public function tampilDataFormSelesai()
	{

		$this->db->select('d_laporan_pemeliharaan.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = d_laporan_pemeliharaan.id_jabatan');

		$this->db->select('d_laporan_pemeliharaan.*, ref_bagian.bagian as bagians');
		$this->db->join('ref_bagian', 'ref_bagian.id = d_laporan_pemeliharaan.id_bagian');

		$this->db->select('d_laporan_pemeliharaan.*, ref_masalah.masalah as masalahs');
		$this->db->join('ref_masalah', 'ref_masalah.id = d_laporan_pemeliharaan.id_masalah');

		$this->db->select('d_laporan_pemeliharaan.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = d_laporan_pemeliharaan.status_form');

		return $this->db->get_where('d_laporan_pemeliharaan', ['status_form' => 7])->result_array();
	}

	public function totalFormMasuk(){

		//$thn = date("Y");
		$vthn = strtotime(date("Y"));

	 $this->db->where('Year(tgl_pengajuan)', $vthn);
	 $this->db->from('d_laporan_pemeliharaan');
	 return $this->db->count_all_results();


	}
