<?php
class Masters_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_masters($id=false)
	{
        if ($id === FALSE)
        {
			$query=$this->db->get('masters');
            return $query->result_array();
        }

        $query = $this->db->get_where('masters', array('id' => $id));
        return $query->row_array();
}
}
?>