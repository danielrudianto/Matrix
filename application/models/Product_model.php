<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function getAll(){
		$this->db->where('is_delete', 0);
		$query			= $this->db->get('product');
		$result			= $query->result();
		return $result;
	}
	
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

	public function searchByKeywordBrand($brandId, $keywordArray, $offset = 0, $limit = 12)
	{
		$sqlString		= "SELECT product.* FROM product";
		$sqlString			.= " JOIN brand ON product.brand_id = brand.id";
		$sqlString			.= " JOIN type ON product.type_id = type.id";

		if($brandId == 0){
			$sqlString		.= " WHERE (";
		} else {
			$sqlString		.= " WHERE brand_id = $brandId AND (";
		}
		
		
		foreach($keywordArray as $index => $keyword)
		{
			if($index == 0){
				$sqlString .= "product.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			} else {
				$sqlString .= " OR product.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			}

			$sqlString .= " OR product.alias LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString .= " OR product.description LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString	.= "OR brand.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString	.= "OR type.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
		}

		$sqlString .= ") ORDER BY product.name ASC LIMIT $limit OFFSET $offset";
		$query			= $this->db->query($sqlString);
		$result			= $query->result();
		return $result;
	}

	public function countByKeywordBrand($brandId, $keywordArray)
	{
		$sqlString		= "SELECT product.* FROM product";

		$sqlString			.= " JOIN brand ON product.brand_id = brand.id";
		$sqlString			.= " JOIN type ON product.type_id = type.id";

		if($brandId == 0){
			$sqlString		.= " WHERE (";
		} else {
			$sqlString		.= " WHERE brand_id = $brandId AND (";
		}

		foreach($keywordArray as $index => $keyword)
		{
			if($index == 0){
				$sqlString .= "product.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			} else {
				$sqlString .= " OR product.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			}

			$sqlString .= " OR product.alias LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString .= " OR product.description LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString	.= "OR brand.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
			$sqlString	.= "OR type.name LIKE '%" . $this->db->escape_str($keyword) . "%'";
		}
		$sqlString .= ")";

		$query			= $this->db->query($sqlString);
		$result			= $query->num_rows();
		return $result;
	}
}

?>
