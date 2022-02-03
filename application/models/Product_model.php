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
		$this->db->select('product.*, brand.name AS brandName, type.name AS typeName');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.id');
		$this->db->join('type', 'product.type_id = type.id');
		$this->db->where("product.name", $name);
		$query			= $this->db->get();
		$result			= $query->row();
		return $result;
	}

	public function getRecommendation($product)
	{
		// Product object => Array of Product Objects;
		$this->db->select('product.*, brand.name AS brandName, type.name AS typeName');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.id');
		$this->db->join('type', 'product.type_id = type.id');
		$this->db->where('product.id !=', $product->id);
		$this->db->where("product.type_id", $product->type_id);
		$this->db->order_by('RAND()');
		$this->db->limit(4);
		
		$query			= $this->db->get();
		$result			= $query->result();
		return $result;
	}
}

?>
