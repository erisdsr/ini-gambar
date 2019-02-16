<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contributor extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('muser');

	}
	
	public function index(){
		$data = array(
			'page' => 'contributor/index.php',
			'title_page' => 'Kontributor',
			'get' => $this->muser->get_where_contributor()->result()
		);
		echo "Eris";
		//$this->load->view('includes/template', $data);
	}

	public function edit($a){		
		$data = array(
			'page' => 'contributor/index.php',
			'title_page' => 'Kontributor',
			'get' => $this->muser->get_where_contributor()->result(),
			'edit' => $this->muser->get_where_id($this->session->id)->row()
		);

		$this->load->view('includes/template', $data);
    }

	public function insert(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$ulangi_password = md5($this->input->post('ulangi_password'));

		if($ulangi_password == $password){
			if($this->muser->insert($username, $password)){
				$this->session->set_flashdata('info', 'Data berhasil ditambahkan!');
			} else {			
				$this->session->set_flashdata('danger', 'Data tidak dapat ditambahkan!');
			}
		} else {
			$this->session->set_flashdata('danger', 'Kombinasi password tidak sama!');
		}
		redirect(base_url('contributor'));
	}


	public function delete(){
		$id = $this->uri->segment(3);
		if($this->muser->delete($id)){
			$this->session->set_flashdata('info','Data berhasil dihapus!');
		} else {
			$this->session->set_flashdata('danger','Data tidak dapat dihapus!');
		}
		redirect(base_url('contributor'));
	}

	
}
