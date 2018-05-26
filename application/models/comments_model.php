<?php
class Comments_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_comments($id)
	{
			$this->db->select('comments.id, comments.date, comments.context, users.username');
			$this->db->from('comments');
			$this->db->join('users','users.id = comments.user','Left');
			$this->db->where('comments.post', $id);
			$query=$this->db->get();
            return $query->result_array();
        
	}
	public function get_comments_count($id)
	{
			$this->db->select('count(*) as count');
			$this->db->from('comments');
			$this->db->where('comments.post', $id);
			$query=$this->db->get();
           if ($query->num_rows()>0){
				$row = $query->row();
				return $row->count;
		   }
        
	}
}
?>