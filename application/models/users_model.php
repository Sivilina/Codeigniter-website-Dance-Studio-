<?php
class Users_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function get_user($user, $password) {
		if(($user != '') && ($password != '')){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$user);
			$this->db->where('password',$password);
			$query =$this->db->get();
			return $query->row_array();
		}
		
	}
	public function get_user_by_id($id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
}
?>