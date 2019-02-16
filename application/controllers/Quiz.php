<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}
	
	public function index(){
		$data = array(
			'page' => 'quiz/index.php',
			'title_page' => 'Kuis'
		);

		echo 'adit';
		//$this->load->view('includes/template', $data);
	}

	public function edit($a){		
		$data = array(
			'page' => 'quiz/index.php',
			'title_page' => 'Kuis'
		);

		$this->load->view('includes/template', $data);
	}
	
}
