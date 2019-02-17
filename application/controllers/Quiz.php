
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Quiz
 * @property Quiz_model $quiz_model
 */

class Quiz extends CI_Controller {
    private $ftp_config = array(
        'hostname' => 'ftp.tepuntal.com',
        'username' => 'inigambar@tepuntal.com',
        'password' => 'qwerty',
        'debug' => True
    );

	public function __construct() {
		parent::__construct();

		$this->load->model('quiz_model');
		$this->load->library('ftp');

		if ($this->session->username == null) {
		    redirect('login');
        }
	}
	
	public function index(){
		$data = array(
			'page' => 'quiz/index.php',
			'title_page' => 'Kuis',
            'quiz_data' => $this->quiz_model->get_quiz()
		);

		$this->load->view('includes/template', $data);
	}

	public function add() {
	    $answer = $this->input->post('jawaban');

	    $upload_config = array(
	        'allowed_types' => 'png|jpeg|jpg|bmp',
	        'upload_path' => './tmp/',
            'max_size' => '1000',
            'encrypt_name' => True
        );

	    $this->load->library('upload', $upload_config);

	    if ($this->upload->do_upload('soal')) {
	        $photo_data = $this->upload->data();
	        $file_name = $photo_data['file_name'];

	        $file_local = './tmp/'.$file_name;
	        $file_remote = './images/'.$file_name;

	        $this->ftp->connect($this->ftp_config);
	        $this->ftp->upload($file_local, $file_remote, 'auto', 0755);
	        $this->ftp->close();

	        if ($this->quiz_model->add($answer, $file_name)) {
                unlink($file_local);
                $this->session->set_flashdata('info', 'Kuis berhasil ditambahkan');
                redirect('quiz');
            }
        } else {
            $this->session->set_flashdata('danger', 'Kuis gagal ditambahkan');
            redirect('quiz');
        }
    }

    public function delete($file_name) {
        $file_remote = './images/'.$file_name;

        $this->ftp->connect($this->ftp_config);

        if ($this->ftp->delete_file($file_remote)) {
            $this->quiz_model->del_quiz($file_name);
            $this->session->set_flashdata('info', 'Kuis berhasil dihapus');
            redirect('quiz');
        } else {
            $this->session->set_flashdata('danger', 'Kuis gagal dihapus');
            redirect('quiz');
        }

        $this->ftp->close();
    }
}
