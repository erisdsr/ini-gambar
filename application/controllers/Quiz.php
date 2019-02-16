
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Quiz
 * @property Quiz_model $quiz_model
 */

class Quiz extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('quiz_model');
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
	        'upload_path' => './soal/',
            'max_size' => '2000',
            'encrypt_name' => True
        );

	    $this->load->library('upload', $upload_config);

	    if ($this->upload->do_upload('soal')) {
	        $photo_data = $this->upload->data();

	        $file_name = $photo_data['file_name'];

	        $this->quiz_model->add($answer, $file_name);

	        redirect('quiz');
        } else {
            print_r($this->upload->display_errors());
        }
    }

    public function delete($image) {
	    $image_path = './soal/'.$image;

	    if (unlink($image_path)) {
	        $this->quiz_model->del_quiz($image);
	        redirect('quiz');
        }
    }
}
