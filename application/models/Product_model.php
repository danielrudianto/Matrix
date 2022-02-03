<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function getItemsByBrand($brandId, $offset, $limit)
	{
		$this->db->where("brand_id", $brandId);
		$this->db->order_by('name', 'ASC');
		$this->db->limit($limit, $offset);
		$query			= $this->db->get("product");
		$result			= $query->result();
		return $result;
	}

	public function countItemsByBrand($brandId)
	{
		$this->db->where("brand_id", $brandId);
		$query			= $this->db->get('product');
		$result			= $query->num_rows();
		return $result;
	}

	public function getByName($name)
	{
		$this->db->where("name", $name);
		$query			= $this->db->get('product');
		$result			= $query->row();
		return $result;
	}
}

?>
