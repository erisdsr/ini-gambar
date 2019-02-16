<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}
	
	public function index(){
		$data = array(
			'page' => 'change_password.php',
			'title_page' => 'Ganti Password'
		);

		$this->load->view('includes/template', $data);
	}
	
}
