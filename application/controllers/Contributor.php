<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contributor extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('muser');

				if($this->session->username == null){
					redirect(base_url('login'));
				}

				if($this->session->level != 0){
					echo "<script>
						alert('Anda tidak mempunyai akses kehalaman ini!');
						location='". base_url('dashboard') ."'
						</script>";
				}

	}
	
	public function index(){
		$data = array(
			'page' => 'contributor/index.php',
			'title_page' => 'Kontributor',
			'get' => $this->muser->get_where_contributor()->result()
		);
		
		$this->load->view('includes/template', $data);
	}

	public function edit(){		
		$data = array(
			'page' => 'contributor/index.php',
			'title_page' => 'Kontributor',
			'get' => $this->muser->get_where_contributor()->result(),
			'edit' => $this->muser->get_where_id($this->uri->segment(3))->row()
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

	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		if(empty($this->input->post('password'))){
			if($this->muser->update($id, $username)){
				$this->session->set_flashdata('info', 'Perubahan data telah disimpan!');				
				redirect(base_url('contributor'));
			} else {
				$this->session->set_flashdata('danger', 'Perubahan data tidak dapat disimpan!');				
				redirect(base_url('contributor/edit/'.$this->uri->segment(3)));
			}
		} else {			
			$password = md5($this->input->post('password'));
			$ulangi_password = md5($this->input->post('ulangi_password'));
			if($password == $ulangi_password){
				if($this->muser->update_all($id, $username, $password)){
					$this->session->set_flashdata('info', 'Perubahan data telah disimpan!');
					redirect(base_url('contributor'));
				} else {
					$this->session->set_flashdata('danger', 'Perubahan data tidak dapat disimpan!');
					redirect(base_url('contributor/edit/'.$this->uri->segment(3)));
				}
			} else {
				$this->session->set_flashdata('danger', 'Kombinasi password tidak sama!');
				redirect(base_url('contributor/edit/'.$this->uri->segment(3)));
			}			
			
		}		
		
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
