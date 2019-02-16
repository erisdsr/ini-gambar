<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}
	
	public function index(){
		$data = array(
			'page' => 'dashboard/index.php',
			'title_page' => 'Dashboard'
		);

		$this->load->view('includes/template', $data);
	}

	public function logout(){		
		unset(
			$_SESSION['id'],
			$_SESSION['username'],
			$_SESSION['level']
		);

		redirect(base_url('login'));
	}
}
