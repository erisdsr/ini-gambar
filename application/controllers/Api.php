<?php
header("Access-Control-Allow-Origin: *");
/**
 * Created by PhpStorm.
 * User: kudaliar
 * Date: 2/17/19
 * Time: 5:49 PM
 * @property Api_model $api_model
 */
class Api extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('api_model');
    }

    public function index() {
        echo 'API';
    }

    public function quiz() {
        echo json_encode($this->api_model->quiz_rand());
    }

    public function check_answer($id, $answer) {
        $answer = rawurldecode($answer);
        echo json_encode($this->api_model->check_answer($id, $answer) > 0);
    }

    public function get_high_score() {
        echo json_encode($this->api_model->get_high_score());
    }

    public function add_high_score($name, $score) {
        echo json_encode($this->api_model->add_high_score(urldecode($name), $score));
    }
}