<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

	public function getTypes()
	{
		$this->db->select("id, name");
		$this->db->order_by('name', 'ASC');
		$query			= $this->db->get('type');
		$result			= $query->result();

		$result		= $query->result();
		return $result;
	}

	public function getByName($name)
	{
		$this->db->where('name', $name);
		$query			= $this->db->get('type');
		$result			= $query->row();
		return $result;
	}
}

?>
