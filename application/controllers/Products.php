<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index()
	{
		$this->load->model("Brand_model");
		$data['brands']		= $this->Brand_model->getShownBrands();

		$this->load->model("Type_model");
		$data['types']		= $this->Type_model->getTypes();

		$this->load->view('products', $data);
	}

	public function Brand($EncodedBrandName)
	{
		$brandName = urldecode($EncodedBrandName);
		$this->load->model("Brand_model");
		$brand		= $this->Brand_model->getByName($brandName);
		if($brand == NULL)
		{
			$data['brands']			= $this->Brand_model->getTop();
			$data['title']			= "Merek tidak ditemukan";

			$this->load->view('product/ProductHeader', $data);
			$this->load->view('product/emptyType', $data);
			$this->load->view('product/ProductFooter');
		} else {
			$this->load->model("Product_model");

			$data['title']			= $brand->name;
			$data['description']	= $brand->description;
			$data['brand']			= $brand;
			$data['items']			= $this->Product_model->getItemsByBrand($brand->id, 0, 12);
			$data['pages']			= max(1, ceil($this->Product_model->countItemsByBrand($brand->id)/12));

			$this->load->view('product/ProductHeader', $data);
			$this->load->view('product/type', $data);
			$this->load->view('product/ProductFooter');
		}
	}

	public function Item($EncodedProductName)
	{
		$productName	= urldecode($EncodedProductName);
		$this->load->model("Product_model");

		$product				= $this->Product_model->getByName($productName);
		if($product == NULL)
		{
			$this->load->model("Brand_model");
			$data['brands']			= $this->Brand_model->getTop();
			$data['title']			= "Tipe tidak ditemukan";

			$this->load->view('product/ProductHeader', $data);
			$this->load->view('product/emptyProduct', $data);
			$this->load->view('product/ProductFooter');
		} else {
			$data['product']		= $product;
			$data['otherProducts']	= $this->Product_model->getRecommendation($product);
			
			$this->load->view('product/detailProduct', $data);
		}
	}

	public function Types($EncodedTypeName)
	{
		$typeName			= urldecode($EncodedTypeName);
		$this->load->model("Type_model");
		$type			= $this->Type_model->getByName($typeName);

		if($type == NULL)
		{
			$data['types']		= $this->Type_model->getTypes();
			$this->load->view('product/emptyDetailType', $data);
		} else {
			$data['type']			= $type;

			$this->load->model("Brand_model");
			$data['brands']			= $this->Brand_model->getByType($type->id);
			$this->load->view('product/detailType', $data);
		}
	}

	public function GetItemsByBrand()
	{
		// Get page and brand id from the function (sent using get method)
		$page			= $this->input->get('page');
		$brand			= $this->input->get('brand');

		// The limit is set to 12, and the offset is set to 12 times page - 1
		// Example
		// Page 1 meaning that the offset = (1 - 1) * 12 = 0
		// Page 2 meaning that the offset = (2 - 1) * 12 = 12
		$this->load->model("Product_model");
		$result		= $this->Product_model->getItemsByBrand($brand, ($page - 1) * 12, 12);
		// if(!$result){
		// 	header("HTTP/1.1 500 Internal Server Error");
		// } else {
			// Add JSON header
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode($result);
		// }
	}

	public function Search()
	{
		$keyword		= $this->input->get("keyword");
		$brandName		= rawurldecode($this->input->get("brand"));
		
		$this->load->model("Brand_model");
		$brand			= $this->Brand_model->getByName($brandName);
		$brands			= $this->Brand_model->getShownBrands();

		$data['keyword']		= $keyword;
		$data['brands']			= $brands;

		if($brandName == "All"){
			$data['selectedBrand']	= (object) array(
				"id" => 0,
			);
			$selectedBrandId		= 0;
		} else if($brand == NULL)
		{
			$data['selectedBrand']	= $this->Brand_model->getRandom();
			$selectedBrandId		= $data['selectedBrand']->id;
		} else {
			$data['selectedBrand']	= $brand;
			$selectedBrandId		= $brand->id;
		}

		$keywordArray		= explode(" ", $keyword);
		$this->load->model("Product_model");

		$data['search']['products']		= $this->Product_model->searchByKeywordBrand($selectedBrandId, $keywordArray);
		$data['search']['pages']		= max(ceil($this->Product_model->countByKeywordBrand($selectedBrandId, $keywordArray)/12), 1);


		$this->load->view('product/search', $data);
	}

	public function searchByKeywordBrand()
	{
		$brandName			= $this->input->get('brand');
		$this->load->model("Brand_model");
		$brand				= $this->Brand_model->getByName(rawurldecode($brandName));

		$keyword			= rawurldecode($this->input->get('keyword'));
		$page				= $this->input->get('page');
		$offset				= ($page - 1) * 12;
		$limit				= 12;

		$keywordArray		= explode(" ", $keyword);
		$this->load->model("Product_model");

		if($brandName == "All"){
			$data['products']		= $this->Product_model->searchByKeywordBrand(0, $keywordArray, $offset, $limit);
			$data['pages']			= max(ceil($this->Product_model->countByKeywordBrand(0, $keywordArray)/12), 1);
		} else if($brand != NULL) {
			$data['products']		= $this->Product_model->searchByKeywordBrand($brand->id, $keywordArray, $offset, $limit);
			$data['pages']			= max(ceil($this->Product_model->countByKeywordBrand($brand->id, $keywordArray)/12), 1);
		} else {	
			$data['products']		= array();
			$data['pages']			= 1;
		}

		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
	}
}
