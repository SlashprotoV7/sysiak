<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

			 $this->load->model('Auth_model');
			 $this->load->library('form_validation');
	 }

	public function index()
	{
        $data['judul'] = 'E-Lakse Home';
				$data['user'] = $this->db->get_where('a_auth', ['username' => $this->session->userdata('username')])->row_array();
				$data['user1'] = $this->db->get_where('a_personilpn', ['nip' => $this->session->userdata('id_user')])->row_array();

					/** echo 'Selamat Datang ' . $data['user1']['nama'] . '(' . $data['user']['id_user'] .')' ; */

        $this->load->view('templates/header', $data);
	  		$this->load->view('home', $data);
				$this->load->view('templates/footer');

	}



}
