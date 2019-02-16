<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class muser extends CI_Model {

	public function insert($username, $password) {
		$object = array(
			'username' => $username, 
			'password' => $password,
			'level' => 1
		);
		$query = $this->db->insert('user', $object);
		return $query;
	}
 
	public function get_data(){
		$query = $this->db->get('user');
		return $query;
	}
 
	public function get_where_id($id){
		$query = $this->db->get_where('user', array('id' => $id));
		return $query;
	}

	public function get_where_contributor(){
		$query = $this->db->query("SELECT * FROM user WHERE level = 1");
		return $query; 
	} 

	public function login($username, $password){
		return $this->db->query("SELECT * FROM user WHERE username ='$username' AND password = '$password'");
	}

	public function update($username, $password){
		$object = array(
			'password' => $password
		);
		$this->db->set($object);
		$this->db->where('username', $username);
		return $this->db->update('user');
	}

	public function delete($id){
		$query = $this->db->delete('user', array('id' => $id));
		return $query;
	}
}
