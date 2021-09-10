<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsys_model extends CI_model {

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
	public function getAllUser3()
	{
       return $this->db->get('user3')->result_array();
	}

	public function getAllUser1()
	{
       return $this->db->get('user1')->result_array();
	}

	public function getSystem()
	{
       return $this->db->get('system')->result_array();
	}

	public function getAktivasi()
	{
			return $this->db->get('aktivasi')->result_array();
	}

	public function getJoinData1()
	{
		$this->db->select('user3.*, user2.nama as namas');
		$this->db->join('user2', 'user2.nip = user3.id_nip');

		$this->db->select('user3.*, user1.jenis as jeniss');
		$this->db->join('user1', 'user1.id = user3.jenis_user');
		return $this->db->get('user3')->result_array();
 }

	public function TambahUser()
	{
		$data = [
        'id_nip' => $this->input->post('id_nip', true),
        'password' => $this->input->post('password2', true),
        'jenis_user' => $this->input->post('jenis', true),
				'date_created' => $this->input->post('-', true),
				'status' => $this->input->post('actived1', true)
		];

	$this->db->insert('user3', $data);
	}

public function hapusDataUser($id){
		$this->db->where('id_nip', $id);
		$this->db->delete('user3');
}

public function getUserByID($id){
	$this->db->select('user3.*, user2.nama as namas, user2.jabatan as jabatans, user2.panggol as panggols');
	$this->db->join('user2', 'user2.nip = user3.id_nip');

	$this->db->select('user3.*, user1.jenis as jeniss');
	$this->db->join('user1', 'user1.id = user3.jenis_user');
	return $this->db->get_where('user3', ['id_nip' => $id])->row_array();
}

public function ubahDataUser()
{
	$data = [
			"password" => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
			"jenis_user" => $this->input->post('jenis', true),
			"status" => $this->input->post('actived1', true)
	];

	$this->db->where('id_nip', $this->input->post('nip'));
	$this->db->update('user3', $data);
	
}

public function cariDataUser()
{
  	$keyword = $this->input->post('keyword', true);
		$this->db->like('id_nip', $keyword);
		return $this->db->get('user3')->result_array();
}

}
