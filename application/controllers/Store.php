<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['store'] = TRUE;
    $this->load->view('landingpage/template/header_store_view', $data);
    $this->load->view('landingpage/store/store_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
