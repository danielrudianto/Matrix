<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $this->load->model("Product_model");
        $data['items']           = $this->Product_model->getAll();

        $this->load->model("Brand_model");
        $data['brands']          = $this->Brand_model->getShownBrands();
 //seuaikan dengan nama tabel masing-masing

        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('sitemap', $data);
    }
}