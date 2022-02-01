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
			$this->load->view('product/ProductHeader');
			$this->load->view('product/emptyType');
			$this->load->view('product/ProductFooter');
		} else {
			$this->load->view('product/ProductHeader');
			$this->load->view('product/emptyType');
			$this->load->view('product/ProductFooter');
		}
	}
}
