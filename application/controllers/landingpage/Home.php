<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['home'] = TRUE;
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/home_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
