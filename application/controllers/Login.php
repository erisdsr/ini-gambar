<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('muser');

		if($this->session->username != null){
			redirect(base_url('dashboard'));
		}
		
	}
	
	public function index(){
		$data = array(
			'title_page' => 'Login'
		);

		$this->load->view('login.php', $data);
	}

	public function validate(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$login = $this->muser->login($username, $password)->row();

			if($login){
				if($login->username == $username && $login->password == $password){
					
					$data_login = array(
						'id' => $login->id,
						'username' => $login->username,
						'level' => $login->level
					);
					
					$this->session->set_userdata($data_login);
					redirect(base_url('dashboard'));
				} 
				else {
					$this->session->set_flashdata('danger', 'Username dan password yang Anda masukkan tidak sesuai!');
					redirect(base_url('login'));					
				}
			} else {
				$this->session->set_flashdata('danger', 'Username dan password yang Anda masukkan tidak sesuai!');
				redirect(base_url('login'));					
			} 
		}
	}
	
}
