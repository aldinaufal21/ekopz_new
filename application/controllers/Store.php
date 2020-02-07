<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('store_model');
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['store'] = TRUE;

    $data['barang'] = $this->store_model->tampil_store()->result();

    $this->load->view('landingpage/template/header_store_view', $data);
    $this->load->view('landingpage/store/store_view', $data);
    $this->load->view('landingpage/template/footer_view');
  }

  function product_single()
  {
    $data['nama'] = "Product Single";
    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/product_single_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
