<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
        $data['judul'] = 'E-Lakse Login';
				$data['usr'] = $this->Auth_model->getAllPersonilPN();

				$this->form_validation->set_rules('username', '', 'required|trim',
				[
						'required' => 'Kolom USERNAME Tidak Boleh Kosong!'
				]);

				$this->form_validation->set_rules('password', '', 'required|trim|min_length[5]',
				[
						'min_length' => 'Password Tidak Kurang Dari 5 Digit',
						'required' => 'Kolom PASSWORD Tidak Boleh Kosong!'
				]);

				if ( $this->form_validation->run() == FALSE ){
					$this->load->view('templates/login_header', $data);
					$this->load->view('auth/login', $data);
					$this->load->view('templates/login_footer');
				}
				else {
					$this->_login(); //_login(); hanya bisa diakses di Controller Auth saja
					//redirect('home');
				}
	  }

		private function _login()
		{
			 	$username = $this->input->post('username');
				$password = $this->input->post('password');

				$user = $this->db->get_where('a_auth', ['username' => $username])->row_array();

				if($user){
						if($user['status'] == 1){
								//untuk mengecek password di kolom input dng passsword di DB yang sudah di encrypt (password_verify)
								if(password_verify($password, $user['password'])){
									$data = [
											'id_user' => $user['id_user'],
											'username' => $user['username'],
											'jenis_user' => $user['jenis_user'], //jenis_user adalah parameter untuk hak akses user di aplikasi E-Lakse
											'status' => $user['status']
									];

									$this->session->set_userdata($data);
									if ($user['jenis_user'] == 1){
											redirect('admin');

									}
									else if ($user['jenis_user'] == 2){
											redirect('home');
									}
								}
								else{
									$this->session->set_flashdata('login_fail', '<div class="alert alert-danger" role="alert">Passwordnya Salah!</div>');
									redirect('auth');
								}
						}
						else if ($user['status'] == 2){ // user tidak aktif
								$this->session->set_flashdata('login_fail', '<div class="alert alert-danger" role="alert">Akun Anda Telah Dinonaktifkan! <br/> Silahkan Hubungi Admin...</div>');
								redirect('auth');
						}
				}else {
					$this->session->set_flashdata('login_fail', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar!</div>');
					redirect('auth');
				}

		}

		public function lupa_password()
		{

				$data['judul'] = 'Fitur Lupa Password';
				$this->form_validation->set_rules('username1', '', 'required|trim',
				[
						'required' => 'Kolom USERNAME Tidak Boleh Kosong!'
				]);

				$this->form_validation->set_rules('password1', '', 'required|trim|min_length[5]',
				[
						'min_length' => 'Password Tidak Kurang Dari 5 Digit',
						'required' => 'Kolom PASSWORD Tidak Boleh Kosong!'
				]);

				$this->form_validation->set_rules('password2', '', 'required|trim|matches[password1]',
				[
						'min_length' => 'Password Tidak Kurang Dari 5 Digit',
						'required' => 'Kolom PASSWORD Tidak Boleh Kosong!',
						'matches' => 'Password Harus Sama!'
				]);

				if ( $this->form_validation->run() == FALSE ){
					$this->load->view('templates/login_header', $data);
					$this->load->view('auth/lupa_password', $data);
					$this->load->view('templates/login_footer');
				}
				else {

					$data = [
						'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
					];

					$this->db->where('username', $this->input->post('username1'));
					$this->db->update('a_auth', $data);
					$this->session->set_flashdata('reset_pass', '<div class="alert alert-success" role="alert">Password Anda Berhasi Diubah!</div>');
					redirect('auth');
				}
		}

		public function logout()
		{
				$this->session->unset_userdata('id_user');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('jenis_user');
				$this->session->set_flashdata('logout', '<div class="alert alert-success" role="alert"> Anda Berhasi LogOut dari E-Lakse!</div>');
				redirect('auth');
		}
}
