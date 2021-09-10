<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_ti_model extends CI_model {

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

	public function getAllAktivasi()
	{
			return $this->db->get('ref_aktivasi')->result_array();
	}

	public function getAllBulan()
	{
			return $this->db->get('ref_bulan')->result_array();
	}

	public function getAllJabatan()
	{
       return $this->db->get('ref_jabatan')->result_array();
	}

	public function getAllKategori()
	{
			return $this->db->get('ref_kategori')->result_array();
	}

	public function getAllPanggol()
	{
			 return $this->db->get('ref_panggol')->result_array();
	}

	public function getAllSurat()
	{
			return $this->db->get('ref_surat')->result_array();
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
/*============================= Data Hakim ===================================*/
/*============================================================================*/

	public function getHakimByID($id){
		return $this->db->get_where('a_hakim', ['nip' => $id])->row_array();
	}

	public function tampilDataHakim()
	{
		$this->db->select('a_hakim.*, ref_jabatan.jabatan as jabatans');
		$this->db->join('ref_jabatan', 'ref_jabatan.id = a_hakim.jabatan');

		$this->db->select('a_hakim.*, ref_panggol.panggol as panggols');
		$this->db->join('ref_panggol', 'ref_panggol.id = a_hakim.gol');

		$this->db->select('a_hakim.*, ref_aktivasi.aktivasii as aktivasis');
		$this->db->join('ref_aktivasi', 'ref_aktivasi.id = a_hakim.status');

		return $this->db->get('a_hakim')->result_array();
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
