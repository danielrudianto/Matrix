<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

	public function getTypes()
	{
		$query			= $this->db->query("
			SELECT type.id, type.name
			FROM type
			ORDER BY type.name ASC
		");

		$result		= $query->result();
		return $result;
	}
}

?>
