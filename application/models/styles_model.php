<?php
class Styles_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function get_styles($id=false)
	{
        if ($id === FALSE)
        {
			$query=$this->db->get('styles');
            return $query->result_array();
        }

        $query = $this->db->get_where('styles', array('id' => $id));
        return $query->row_array();
}
}
?>