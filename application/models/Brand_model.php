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

	public function getTop()
	{
		$query			= $this->db->query("
			SELECT brand.id, brand.name
			FROM brand
			WHERE brand.is_shown = 1
			ORDER BY brand.name ASC
			LIMIT 4
		");

		$result			= $query->result();
		return $result;
	}

	public function getByName($brandName)
	{
		$this->db->where('name', $brandName);
		$query		= $this->db->get('brand');
		$result		= $query->row();
		return $result;		
	}

	public function getRandom(){
		$this->db->order_by('RAND()');
		$query			= $this->db->get('brand');
		$result			= $query->row();
		return $result;
	}

	public function getByType($typeId)
	{
		$query		= $this->db->query("
			SELECT brand.*
			FROM brand
			JOIN product ON brand.id = product.brand_id
			JOIN type ON product.type_id = type.id
			WHERE type.id = $typeId
			GROUP BY brand.id
		");

		$result			= $query->result();
		return $result;
	}
}

?>
