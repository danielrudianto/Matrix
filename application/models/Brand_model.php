<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model {

	public function getShownBrands()
	{
		$query			= $this->db->query("
			SELECT brand.id, brand.name
			FROM brand
			WHERE brand.is_shown = 1
			ORDER BY brand.name ASC
		");

		$result		= $query->result();
		return $result;
	}

	public function getByName($brandName)
	{
		$this->db->where('name', $brandName);
		$query		= $this->db->get('brand');
		$result		= $query->row();
		return $result;		
	}
}

?>
