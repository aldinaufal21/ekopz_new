<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
  }

  function index()
  {
    $data['nama'] = "Store";
    $data['store'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/store/store_view');
    $this->load->view('admin/template/footer_view');
  }

}
