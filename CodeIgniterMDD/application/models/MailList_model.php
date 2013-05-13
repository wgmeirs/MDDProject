<?php 

class MailList_model extends CI_Model
{

	public function _construct()
	{
		$this->load->database();	
	}
	
	public function get_maillist()
	{
		$query = $this->db->get('subscribers');
		return $query->result_array();	
	}
	
	
}

?>
