<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	public function __construct() {
		parent::__construct();	
		$this->load->model('muser');	

		if($this->session->username == null){
			redirect(base_url('login'));
		}

	}
	
	public function index(){
		$data = array(
			'page' => 'change_password.php',
			'title_page' => 'Ganti Password'
		);

		$this->load->view('includes/template', $data);
	}	

	public function update(){
		if($this->input->post('password') == $this->input->post('ulangi_password')){
			$this->muser->change_password($this->session->userdata('username'), md5($this->input->post('password')));
			$this->session->set_flashdata('info','Password telah diperbarui!');
			redirect(base_url('change_password'));
		} else {
			$this->session->set_flashdata('danger', 'Kombinasi passowrd tidak sesuai!');
			redirect(base_url('change_password'));
		}
	}
}
