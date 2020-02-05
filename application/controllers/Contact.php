<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "About";
    $data['contact'] = TRUE;
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/contact_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
