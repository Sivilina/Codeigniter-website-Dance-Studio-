<?php
class Posts_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_posts($id=false) {
        if ($id === FALSE)
        {
			$this->db->select('posts.id, posts.date, posts.title,posts.image, posts.context, users.username');
			$this->db->from('posts');
			$this->db->join('users','users.id = posts.user','Left');
			$query=$this->db->get();
            return $query->result_array();
        }

		$this->db->select('posts.id, posts.date, posts.title, posts.image, posts.context, users.username');
		$this->db->from('posts');
		$this->db->join('users','users.id = posts.user','Left');
		$this->db->where('posts.id',$id);
		$query=$this->db->get();
        return $query->row_array();
	}
	
	public function get_search($key) {
		$this->db->select('posts.id, posts.date, posts.title,posts.image, posts.context, users.username');
		$this->db->from('posts');
		$this->db->join('users','users.id = posts.user','Left');
		$this->db->like('posts.title',$key);
		$this->db->or_like('posts.context',$key);
		$query = $this->db->get();
	  return $query->result_array();
	}
}
?>