<?php
/**
 * Created by PhpStorm.
 * User: kudaliar
 * Date: 2/17/19
 * Time: 5:50 PM
 */
class Api_model extends CI_Model {
    public function quiz_rand() {
        return $this->db->query('SELECT id, image FROM quiz ORDER BY RAND()')->result();
    }

    public function check_answer($id, $answer) {
        return $this->db->get_where('quiz', array('id' => $id, 'answer' => $answer))->num_rows();
    }

    public function get_high_score() {
        return $this->db->query('SELECT * FROM player ORDER BY score DESC, time ASC LIMIT 10')->result();
    }

    public function add_high_score($name, $score, $time) {
        $data = array(
            'id' => time(),
            'name' => $name,
            'score' => $score,
            'time' => $time
        );
        return $this->db->insert('player', $data);
    }
}