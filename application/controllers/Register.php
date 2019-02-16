<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('muser');

	}
	
	public function index(){
		$data = array(
			'title_page' => 'Gabung Sebagai Kontributor'
		);

		$this->load->view('register.php', $data);
	}	

	public function insert(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$ulangi_password = md5($this->input->post('ulangi_password'));

		if($ulangi_password == $password){
			if($this->muser->insert($username, $password)){
				$this->session->set_flashdata('info', 'Selamat, Anda berhasil bergabung sebagai kontributor!');
			} else {			
				$this->session->set_flashdata('danger', 'Tidak dapat mendaftar!');
			}
		} else {
			$this->session->set_flashdata('danger', 'Kombinasi password tidak sama!');
		}
		redirect(base_url('register'));
	}
	
}
