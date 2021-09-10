<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

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

	public function getAllPersonilPN()
	{
			 $this->db->where('status', 11);
			 $this->db->order_by('jabatan ASC');
       return $this->db->get('a_personilpn')->result_array();
	}

	public function getAllJabatan()
	{
       return $this->db->get('ref_jabatan')->result_array();
	}

	public function getAllPanggol()
	{
			$this->db->not_like('id', 18);
       return $this->db->get('ref_panggol')->result_array();
	}

	public function getAllGender()
	{
			$this->db->not_like('id', '-');
       return $this->db->get('ref_gender')->result_array();
	}

	public function getAllStatusNikah(){
		$this->db->where('kode', 'h');
		 return $this->db->get('ref_status')->result_array();
	}

	public function getAllIjazah(){
		$this->db->not_like('id', '-');
		 return $this->db->get('ref_ijazah')->result_array();
	}

	public function getStatus()
	{
			return $this->db->get('ref_status')->result_array();
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

	public function getBulanNow()
	{
			$bln_1 = Date('m');
			$this->db->where('id_bulan', $bln_1);
			return $this->db->get('ref_bulan')->row_array();
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

	public function getRefSurat()
	{
			return $this->db->get('ref_surat1')->result_array();
	}

	//fungsi last id surat bln kelar
	public function getLastIDSurat()
	{
			$maxid = 0;
			$row = $this->db->query('SELECT MAX(no_surat) AS maxid FROM b_surat')->row();
			if ($row) {
			    return $maxid = $row->maxid + 1;
			}
	}

	public function getAllsystem()
	{
			return $this->db->get('ref_system')->result_array();
	}

	//ATK adasds

/*============================================================================*/
/*============================= Data Report IT ===============================*/
/*============================================================================*/

public function tampilDataMasalah()
{
  return $this->db->get('ref_masalah')->result_array();
}

public function hitungJumlahMasalah(){
	return $this->db->count_all('d_laporan_pemeliharaan');
}

public function hitungFormProses(){
	return $this->db->get_where('d_laporan_pemeliharaan', ['status_form' => 6])->row_array();
}

public function hitungFormSelesai(){
	return $this->db->get_where('d_laporan_pemeliharaan', ['status_form' => 7])->row_array();
}

public function tampilDataBagian()
{
  return $this->db->get('ref_bagian')->result_array();
}

public function getLaporan1ByID($id){
  return $this->db->get_where('d_laporan_pemeliharaan', ['id1' => $id])->row_array();
}

public function tampilDataFormMasuk($id_bulan)
{
	$thn = Date('Y');

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

	$this->db->where('status_form', 5);
	$this->db->like('tgl_pengajuan', $id_bulan);
	$this->db->like('tgl_pengajuan', $thn);
  return $this->db->get('d_laporan_pemeliharaan')->result_array();
}

public function totalDataFormMasuk($id_bulan){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan', $id_bulan);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalDataFormMasuk1($id_bulan){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan', $id_bulan);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan1(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',1);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan2(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',2);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan3(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',3);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan4(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',4);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan5(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',5);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan6(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',6);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan7(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',7);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan8(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',8);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan9(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',9);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan10(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',10);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan11(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',11);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormMasukBulan12(){
	$thn = Date('Y');
	//$this->db->where('status',1);
	$this->db->where('bulan',12);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan1(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',1);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan2(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',2);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan3(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',3);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan4(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',4);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan5(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',5);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan6(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',6);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan7(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',7);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan8(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',8);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan9(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',9);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan10(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',10);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan11(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',11);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function totalFormProsesBulan12(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',12);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_masuk_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan1(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',1);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan2(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',2);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan3(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',3);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan4(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',4);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan5(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',5);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan6(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',6);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan7(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',7);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan8(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',8);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan9(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',9);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan10(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',10);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan11(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',11);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormSelesaiBulan12(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',12);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan1(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',1);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan2(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',2);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan3(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',3);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan4(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',4);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan5(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',5);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan6(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',6);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan7(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',7);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan8(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',8);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan9(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',9);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan10(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',10);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan11(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',11);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function totalFormTolakBulan12(){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan',12);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}

public function tampilDataFormProses($id_bulan)
{
	$thn = Date('Y');

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

	$this->db->where('status_form', 6);
	$this->db->like('tgl_pengajuan', $id_bulan);
	$this->db->like('tgl_pengajuan', $thn);
	return $this->db->get('d_laporan_pemeliharaan')->result_array();
}

public function totalDataFormProses($id_bulan){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan', $id_bulan);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_proses_report_it");
  return $this->db->count_all_results();
}

public function tampilDataFormSelesai($id_bulan)
{
	$thn = Date('Y');

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

	$this->db->where('status_form', 7);
	$this->db->like('tgl_pengajuan', $id_bulan);
	$this->db->like('tgl_pengajuan', $thn);
	return $this->db->get('d_laporan_pemeliharaan')->result_array();
}

public function totalDataFormSelesai($id_bulan){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan', $id_bulan);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_selesai_report_it");
  return $this->db->count_all_results();
}

public function tampilDataFormTolak($id_bulan)
{
	$thn = Date('Y');

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

	$this->db->where('status_form', 14);
	$this->db->like('tgl_pengajuan', $id_bulan);
	$this->db->like('tgl_pengajuan', $thn);
	return $this->db->get('d_laporan_pemeliharaan')->result_array();
}

public function totalDataFormTolak($id_bulan){
	$thn = Date('Y');
	$this->db->where('status',1);
	$this->db->where('bulan', $id_bulan);
	$this->db->where('tahun', $thn);
	$this->db->from("d_count_tolak_report_it");
  return $this->db->count_all_results();
}



public function addformmasuk1()
{
	$ambil = $this->input->post('id_pengaju');
	$getjabatan = $this->db->get_where('a_personilpn', ['nip' => $ambil])->row_array();

	$getlaporan = $this->db->get('d_laporan_pemeliharaan')->row_array();
	$thn1 = Date('Y', strtotime($getlaporan['tgl_pengajuan']));


	$getidlaporan = $this->db->select('id_form')->limit(1)->order_by('id1',"DESC")->get('d_laporan_pemeliharaan')->row();

	$this->db->select_max('id1','max_id');
	$getmaxid = $this->db->get('d_laporan_pemeliharaan')->row_array();

	$thn = Date('Y');

	if ( $thn > $thn1 ){
		$id_form = 1;
	}
	else {
		$id_form = $getidlaporan + 1;

	}

	if ( $getmaxid['max_id'] == 0 ){
		$id = 1;
	}
	else {
		$id = $getmaxid['max_id'] + 1;

	}

	//inval untuk convert integer to strinng dan di akhir tambahkan "->result_array" biar datanya tidak salah
	//$konversi = intval( $this->db->get_where('a_personilpn', ['nip' => $ambil]) );

	$data = [
			'id1' => $id,
			'id_form' => $id_form,
			'id_pengaju' => $this->input->post('id_pengaju', true),
			'id_jabatan' => $getjabatan['jabatan'],
			'id_bagian' => $this->input->post('id_bagian', true),
			'tgl_pengajuan' => Date('Y-m-d'),
			'bulan' => Date('m'),
			'id_masalah' => $this->input->post('id_masalah', true),
			'uraian_masalah' => $this->input->post('uraian_masalah', true),
			'status_form' => 5,
			'id_pemeriksa' => 0,
			'tgl_pemeriksaan' => 0,
			'hasil_pemeriksaan' => '',
			'id_acc' => 0,
			'tgl_tolak' => 0,
			'id_penolak' => '',
			'ket_tolak' => ''
	];

	$data1 = [
			'id' => $id,
			'id_form' => $id_form,
			'bulan' => Date('m'),
			'tahun' => Date('Y'),
			'status' => '1'
	];

	$data2 = [
			'id' => $id,
			'id_form' => $id_form,
			'bulan' => Date('m'),
			'tahun' => Date('Y'),
			'status' => '0'
	];

	$this->db->insert('d_laporan_pemeliharaan', $data);
	$this->db->insert('d_count_masuk_report_it', $data1);
	$this->db->insert('d_count_proses_report_it', $data2);
	$this->db->insert('d_count_selesai_report_it', $data2);
	$this->db->insert('d_count_tolak_report_it', $data2);
	$this->session->set_flashdata('report_it1', 'Data Pengajuan Berhasil Dimasukan!');
}

public function terimaFormMasuk1($id){

	$data = [
		'status_form' => 6,
		'id_pemeriksa' => $this->session->userdata('id_user'),
		'tgl_pemeriksaan' => Date('Y-m-d')
	];

	$data1 = [
			'status' => 0
	];

	$data2 = [
			'status' => 1
	];


	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_masuk_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_proses_report_it', $data2);

}

public function tolakFormMasuk1(){

	$id = $this->input->post('id-sx');
	$data = [
		'status_form' => 14,
		'tgl_tolak' => Date('Y-m-d'),
		'id_penolak' => $this->session->userdata('id_user'),
		'ket_tolak' => $this->input->post('alasan-tolak')
	];

	$data1 = [
			'status' => 0
	];

	$data2 = [
			'status' => 1
	];

	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_masuk_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_tolak_report_it', $data2);

}

public function batalFormTolak1($id){
	$data = [
		'status_form' => 5,
		'tgl_tolak' => 0,
		'id_penolak' => 0
	];

	$data1 = [
			'status' => '1'
	];

	$data2 = [
			'status' => '0'
	];

	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_masuk_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_tolak_report_it', $data2);
}

public function hapusFormMasuk1($id){
	$this->db->where('id1', $id);
	$this->db->delete('d_laporan_pemeliharaan');

	$this->db->where('id', $id);
	$this->db->delete('d_count_masuk_report_it');

	$this->db->where('id', $id);
	$this->db->delete('d_count_proses_report_it');

	$this->db->where('id', $id);
	$this->db->delete('d_count_selesai_report_it');

	$this->db->where('id', $id);
	$this->db->delete('d_count_tolak_report_it');
}

public function batalFormProses1($id){
	$data = [
		'status_form' => 5,
		'id_pemeriksa' => 0,
		'tgl_pemeriksaan' => 0
	];

	$data1 = [
			'status' => '1'
	];

	$data2 = [
			'status' => '0'
	];

	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_masuk_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_proses_report_it', $data2);
}

public function terimaFormProses1(){
	$id = $this->input->post('id-sc');
	$data = [
		'status_form' => 7,
		'hasil_pemeriksaan' => $this->input->post('hasil-periksa'),
		'tgl_selesai' => Date('Y-m-d'),
		'id_acc' => $this->session->userdata('id_user')
	];

	$data1 = [

			'status' => '0'
	];

	$data2 = [

			'status' => '1'
	];

	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_proses_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_selesai_report_it', $data2);
}



public function tarikForm1($id){
	$data = [
		'status_form' => 6,
		'hasil_pemeriksaan' => '',
		'tgl_selesai' => 0,
		'id_acc' => 0
	];

	$data1 = [

			'status' => '1'
	];

	$data2 = [

			'status' => '0'
	];

	$this->db->where('id1', $id);
	$this->db->update('d_laporan_pemeliharaan', $data);

	$this->db->where('id', $id);
	$this->db->update('d_count_proses_report_it', $data1);

	$this->db->where('id', $id);
	$this->db->update('d_count_selesai_report_it', $data2);
}

/*============================================================================*/
/*========================= Bagian Kepegawaian ===============================*/
/*============================================================================*/

  public function getPersonilByID($st2, $nip){
		$this->db->where('status2', $st2);
		$this->db->where('nip', $nip);
		return $this->db->get('a_personilpn')->row_array();
	}

	public function tampilDataPersonilPN()
	{
		$this->db->select('a_personilpn.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_personilpn.jabatan');

		$this->db->select('a_personilpn.*, ref_panggol.golongan as golongans');
		$this->db->join('ref_panggol', 'ref_panggol.id = a_personilpn.gol');

		$this->db->select('a_personilpn.*, ref_gender.gender as genders');
		$this->db->join('ref_gender', 'ref_gender.id = a_personilpn.gender');

		$this->db->select('a_personilpn.*, ref_status.status as statuss');
		$this->db->join('ref_status', 'ref_status.id = a_personilpn.status1');

		$this->db->select('a_personilpn.*, ref_ijazah.tk_ijazah as ijazahs');
		$this->db->join('ref_ijazah', 'ref_ijazah.id = a_personilpn.tk_ijazah');

		$this->db->order_by
		('a_personilpn.gol ASC , a_personilpn.jabatan ASC , a_personilpn.nip ASC ');
		$this->db->where('a_personilpn.status', 11);

		return  $this->db->get('a_personilpn')->result_array(); //diurutkan berdasarkan Golongan dan senioritas NIP
	}

	public function totalHakim(){
		$this->db->where('status',11);
		$this->db->where('status2', 21);
		$this->db->from("a_personilpn");
	  return $this->db->count_all_results();
	}

	public function totalPegawai(){
		$this->db->where('status',11);
		$this->db->where('status2', 22);
		$this->db->from("a_personilpn");
	  return $this->db->count_all_results();
	}

	public function totalCPNS(){
		$this->db->where('status', 11);
		$this->db->where('status2', 23);
		$this->db->from("a_personilpn");
	  return $this->db->count_all_results();
	}

	public function totalHonorer(){
		$this->db->where('status',11);
		$this->db->where('status2', 24);
		$this->db->from("a_personilpn");
	  return $this->db->count_all_results();
	}

	public function registerASN(){

		$n = $this->input->post('nama1', true);
		$jbt = $this->input->post('jabatan1', true);

		if ( $jbt == 1 ) {
			$kategori = 21;
		}

		elseif ( $jbt == 2) {
			$kategori = 21;
		}

		elseif ( $jbt == 3) {
			$kategori = 21;
		}

		elseif ( $jbt == 25) {
			$kategori = 23;
		}

		else {
			$kategori = 22;
		}

		$data = [
				'nip' => $this->input->post('nip1', true),
				'nama' => $n,
				'gol' => $this->input->post('golongan1', true),
				'tmt1' => $this->input->post('tmt1', true),
				'jabatan' => $jbt,
				'tmt2' => $this->input->post('tmt2', true),
				'masa_tahun' => 0,
				'masa_bulan' => 0,
				'latihan' => $this->input->post('latihan1', true),
				'latihan_tahun' => $this->input->post('latihan_tahun1', true),
				'pendidikan' => $this->input->post('univ1', true),
				'pend_tahun' => $this->input->post('pend_tahun1', true),
				'tk_ijazah' => $this->input->post('ijazah1', true),
				'tempat_lahir' => $this->input->post('tl1', true),
				'tgl_lahir' => $this->input->post('tl2', true),
				'gender' =>	$this->input->post('gender1', true),
				'kgb' => $this->input->post('kgb1', true),
				'kpk' => $this->input->post('kpk1', true),
				'mutasi' => $this->input->post('mutasi2', true),
				'ket' => $this->input->post('mutasi1', true),
				'email' => $this->input->post('email1', true),
				'no_hp' => $this->input->post('no_hp1', true),
				'n_foto' => 'default.jpg',
				'status' => 11,
				'status1' => $this->input->post('status2', true),
				'status2' => $kategori
		];

		$this->db->insert('a_personilpn', $data);
		$this->session->set_flashdata('addpersonil','Data <b>'.$n.'</b> Berhasil Dimasukan!');
	}

	public function hapusPersonilPN1($id)	{
		$this->db->where('nip', $id);
		$this->db->delete('a_personilpn');
	}

	public function registerHonorer(){

		$n = $this->input->post('nama2', true);

		$this->db->select_max('nip','max_nip');
		$this->db->where('status2', 24);
		$getmaxnip = $this->db->get('a_personilpn')->row_array();

		if ( $getmaxnip == 0 ){
			$niip = "202001";
		}
		 else {
			 $nipp = $getmaxnip['max_nip'] + 1;
		 }
		$data = [
				'nip' => $nipp,
				'nama' => $n,
				'gol' => 18,
				'tmt1' => '',
				'jabatan' => $this->input->post('jabatan2', true),
				'tmt2' => '',
				'masa_tahun' => 0,
				'masa_bulan' => 0,
				'latihan' => '',
				'latihan_tahun' => '',
				'pendidikan' => $this->input->post('univ2', true),
				'pend_tahun' => $this->input->post('pend_tahun2', true),
				'tk_ijazah' => $this->input->post('ijazah2', true),
				'tempat_lahir' => $this->input->post('tl3', true),
				'tgl_lahir' => $this->input->post('tl4', true),
				'gender' =>	$this->input->post('gender2', true),
				'kgb' => '',
				'kpk' => '',
				'mutasi' => '',
				'ket' => '',
				'email' => $this->input->post('email1', true),
				'no_hp' => $this->input->post('no_hp1', true),
				'n_foto' => 'default.jpg',
				'status' => 11,
				'status1' => $this->input->post('status3', true),
				'status2' => 24
		];

		$this->db->insert('a_personilpn', $data);
		$this->session->set_flashdata('addpersonil','Data <b>'.$n.'</b> Berhasil Dimasukan!');
	}

	public function GetDuk(){
		$this->db->select('a_personilpn.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_personilpn.jabatan');

		$this->db->select('a_personilpn.*, ref_panggol.golongan as golongans');
		$this->db->join('ref_panggol', 'ref_panggol.id = a_personilpn.gol');

		$this->db->order_by
		('a_personilpn.gol ASC , a_personilpn.jabatan ASC , a_personilpn.nip ASC ');
		$this->db->where('a_personilpn.status', 11);
		$this->db->where_not_in('a_personilpn.status2', 24);
		//$this->db->where_not_in('a_personilpn.status3', 24);

		return  $this->db->get('a_personilpn')->result_array(); //diurutkan berdasarkan Golongan dan senioritas NIP
	}

	public function ubahASN(){
		$n = $this->input->post('nama1',true);
		$nipp = $this->input->post('nip1',true);
		$jbt = $this->input->post('jabatan1', true);

		if ( $jbt == 1 ) {
			$kategori = 21;
		}

		elseif ( $jbt == 2) {
			$kategori = 21;
		}

		elseif ( $jbt == 3) {
			$kategori = 21;
		}

		elseif ( $jbt == 25 ) {
			$kategori = 23;
		}

		else {
			$kategori = 22;
		}

		$data = [
				'nama' => $n,
				'gol' => $this->input->post('golongan1', true),
				'tmt1' => $this->input->post('tmt1', true),
				'jabatan' => $jbt,
				'tmt2' => $this->input->post('tmt2', true),
				'masa_tahun' => 0,
				'masa_bulan' => 0,
				'latihan' => $this->input->post('latihan1', true),
				'latihan_tahun' => $this->input->post('latihan_tahun1', true),
				'pendidikan' => $this->input->post('univ1', true),
				'pend_tahun' => $this->input->post('pend_tahun1', true),
				'tk_ijazah' => $this->input->post('ijazah1', true),
				'tempat_lahir' => $this->input->post('tl1', true),
				'tgl_lahir' => $this->input->post('tl2', true),
				'gender' =>	$this->input->post('gender1', true),
				'kgb' => $this->input->post('kgb1', true),
				'kpk' => $this->input->post('kpk1', true),
				'mutasi' => $this->input->post('mutasi2', true),
				'ket' => $this->input->post('mutasi1', true),
				'email' => $this->input->post('email1', true),
				'no_hp' => $this->input->post('nohp1', true),
				'n_foto' => 'default.jpg',
				'status' => 11,
				'status1' => $this->input->post('status1', true),
				'status2' => $kategori
		];

		$this->db->where('nip', $nipp);
		$this->db->update('a_personilpn', $data);
		$this->session->set_flashdata('ubahpersonil2','Data <b>'.$n.'</b> Berhasil Diperbarui!');
	}

	public function ubahNONASN(){
		$n = $this->input->post('nama1',true);
		$idh = $this->input->post('idh1',true);
		$jbt = $this->input->post('jabatan1',true);

		$data = [
			'nama' => $n,
			'jabatan' => $jbt,
			'tmt2' => $this->input->post('tmt2', true),
			'pendidikan' => $this->input->post('univ1', true),
			'pend_tahun' => $this->input->post('pend_tahun1', true),
			'tk_ijazah' => $this->input->post('ijazah1', true),
			'tempat_lahir' => $this->input->post('tl1', true),
			'tgl_lahir' => $this->input->post('tl2', true),
			'gender' =>	$this->input->post('gender1', true),
			'email' => $this->input->post('email1', true),
			'no_hp' => $this->input->post('nohp1', true),
			'n_foto' => 'default.jpg',
			'status' => 11,
			'status1' => $this->input->post('status1', true)
		];

		$this->db->where('nip', $idh);
		$this->db->update('a_personilpn', $data);
		$this->session->set_flashdata('ubahpersonil2','Data <b>'.$n.'</b> Berhasil Diperbarui!');
	}

	public function addSuratTugas(){

		$data = [
			'jenis_surat' => 1,
			'kode1' => $this->input->post('kode_surat1', true),
			'no_surat' => $this->input->post('no_surat', true),
			'kode2' => $this->input->post('kode_surat2', true),
			'bln' => Date('m'),
			'tahun' => Date('Y'),
			'id_acc' => $this->input->post('id_acc', true),
			'timbang_dasarhukum' => $this->input->post('uraian1', true),
			'id_A' => $this->input->post('pg1', true),
			'id_B' => $this->input->post('pg2', true),
			'id_C' => $this->input->post('pg3', true),
			'id_D' =>	$this->input->post('pg4', true),
			'id_E' => $this->input->post('pg5', true),
			'id_F' => $this->input->post('pg6', true),
			'id_G' => $this->input->post('pg7', true),
			'id_H' => $this->input->post('pg8', true),
			'id_I' => $this->input->post('pg9', true),
			'id_J' => $this->input->post('pg10', true),
			'uraian' => $this->input->post('uraian2', true),
			'tgl_surat' => Date('Y-m-d'),
			'jam1' => '',
			'jam2' => '',
			'tgl_surat2' => '',
			'kode_dipa' => $this->input->post('dipa', true),
			'created_id' => ''

		];
		//BELUM FIX MASIH ERROR

		$this->db->insert('b_surat', $data);
		$this->session->set_flashdata('addsurat2','Surat Tugas Berhasil Dimasukan!');
	}

	public function addSuratIzin1(){

		$data = [
			'jenis_surat' => 2,
			'kode1' => '-',
			'no_surat' => 0,
			'kode2' => '-',
			'bln' => Date('m'),
			'tahun' => Date('Y'),
			'id_acc' => $this->input->post('id_acc', true),
			'timbang_dasarhukum' => '-',
			'id_A' => $this->input->post('pg1', true),
			'id_B' => '',
			'id_C' => '',
			'id_D' =>	'',
			'id_E' => '',
			'id_F' => '',
			'id_G' => '',
			'id_H' => '',
			'id_I' => '',
			'id_J' => '',
			'uraian' => $this->input->post('uraian1', true),
			'tgl_surat' => Date('Y-m-d'),
			'jam1' => $this->input->post('jam1', true),
			'jam2' => $this->input->post('jam2', true),
			'tgl_surat2' => '',
			'kode_dipa' => '',
			'created_id' => ''

		];
		//BELUM FIX MASIH ERROR

		$this->db->insert('b_surat', $data);
		$this->session->set_flashdata('addsurat2','Surat Izin Berhasil Dimasukan!');
	}

	public function addSuratIzin2(){

		$data = [
			'jenis_surat' => 3,
			'kode1' => '-',
			'no_surat' => 0,
			'kode2' => '-',
			'bln' => Date('m'),
			'tahun' => Date('Y'),
			'id_acc' => $this->input->post('id_acc', true),
			'timbang_dasarhukum' => '-',
			'id_A' => $this->input->post('pg1', true),
			'id_B' => '',
			'id_C' => '',
			'id_D' =>	'',
			'id_E' => '',
			'id_F' => '',
			'id_G' => '',
			'id_H' => '',
			'id_I' => '',
			'id_J' => '',
			'uraian' => $this->input->post('uraian1', true),
			'tgl_surat' => Date('Y-m-d'),
			'jam1' => '',
			'jam2' => '',
			'tgl_surat2' => '',
			'kode_dipa' => '',
			'created_id' => ''

		];
		//BELUM FIX MASIH ERROR

		$this->db->insert('b_surat', $data);
		$this->session->set_flashdata('addsurat2','Surat Izin Berhasil Dimasukan!');
	}

















	public function addDataHakim()
	{
		$data = [
				'nip' => $this->input->post('nip', true),
				'nama' => $this->input->post('nama', true),
				'gol' => $this->input->post('gol', true),
				'tmt1' => $this->input->post('tmt1', true),
				'masa_tahun' => $this->input->post('masa_tahun', true),
				'masa_bulan' => $this->input->post('masa_bulan', true),
				'latihan' => $this->input->post('latihan', true),
				'latihan_tahun' => $this->input->post('latihan_tahun', true),
				'pendidikan' => $this->input->post('pendidikan', true),
				'pend_tahun' => $this->input->post('pend_tahun', true),
				'tk_ijazah' => $this->input->post('tk_ijazah', true),
				'tempat_lahir' => $this->input->post('tempat_lahir', true),
				'tgl_lahir' => $this->input->post('tgl_lahir', true),
				'kgb' => $this->input->post('kgb', true),
				'kpk' => $this->input->post('kpk', true),
				'mutasi' => $this->input->post('mutasi', true),
				'ket' => $this->input->post('ket', true),
				'email' => $this->input->post('email', true),
				'no_hp' => $this->input->post('no_hp', true),
				'n_foto' => 'default.jpg',
				'status' => 1
		];

		$this->db->insert('a_hakim', $data);
	}

	public function hapusDataHakim($id)
	{
		$this->db->where('nip', $id);
		$this->db->delete('a_hakim');
	}

	public function ubahDataHakim()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"jabatan" => $this->input->post('jabatan', true),
				"panggol" => $this->input->post('panggol', true),
				"n_foto" => 'default.jpg',
				"cek" => 1,
				"status" => $this->input->post('actived1', true)
		];

		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('a_hakim', $data);

	}

/*============================================================================*/
/*============================ Data Honorer ==================================*/
/*============================================================================*/

	public function getHonorerByID($id){
		return $this->db->get_where('user2', ['nip' => $id])->row_array();
	}

	public function tampilDataHonorer()
	{
		$this->db->select('user2.*, jabatan.jabatan as jabatans');
		$this->db->join('jabatan', 'jabatan.id = user2.jabatan');

		$this->db->select('user2.*, panggol.panggol as panggols');
		$this->db->join('panggol', 'panggol.id = user2.panggol');

		$this->db->select('user2.*, aktivasi.aktivasii as aktivasis');
		$this->db->join('aktivasi', 'aktivasi.id = user2.status');

		$this->db->select('user2.*, kategori.id as kategorii ,kategori.kategori as kategoris');
		$this->db->join('kategori', 'kategori.id = user2.kategori');

		return $this->db->get('user2')->result_array();
	}

	public function addDataHonorer()
	{
		$data = [
				'nip' => $this->input->post('nip', true),
				'nama' => $this->input->post('nama', true),
				'jabatan' => $this->input->post('jabatan', true),
				'panggol' => $this->input->post('panggol', true),
				'n_foto' => 'default.jpg',
				'cek' => 1,
				'status' => 1,
				'kategori' => 3
		];

		$this->db->insert('user2', $data);
	}

	public function hapusDataHonorer($id)
	{
		$this->db->where('nip', $id);
		$this->db->delete('user2');
	}

	public function ubahDataHonorer()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"jabatan" => $this->input->post('jabatan', true),
				"panggol" => $this->input->post('panggol', true),
				"n_foto" => 'default.jpg',
				"cek" => 1,
				"status" => $this->input->post('actived1', true)
		];

		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('user2', $data);

	}
}
