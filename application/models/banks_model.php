<?php
class Banks_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function get_bank($id)
	{
		if($id != ''){
			$this->db->select('*');
			$this->db->from('banks');
			$this->db->where('id',$id);
			$query =$this->db->get();
			return $query->row_array();
		}
		
	}
}
?>