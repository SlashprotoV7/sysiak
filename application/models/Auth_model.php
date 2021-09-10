<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model {

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
       return $this->db->get('a_personilpn')->result_array();
	}

	public function getStatus()
	{
			return $this->db->get('ref_status')->result_array();
	}


/*============================================================================*/
/*============================= Data Hakim ===================================*/
/*============================================================================*/


}
