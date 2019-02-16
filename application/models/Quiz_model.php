<?php
/**
 * Created by PhpStorm.
 * User: kudaliar
 * Date: 2/16/19
 * Time: 7:21 PM
 */

class Quiz_model extends CI_Model {
    public function add($answer, $image) {
        $data = array(
            'id' => time(),
            'image' => $image,
            'answer' => $answer
        );

        return $this->db->insert('quiz', $data);
    }

    public function get_quiz() {
        return $this->db->get('quiz')->result();
    }

    public function del_quiz($image) {
        return $this->db->delete('quiz', array('image' => $image));
    }
}