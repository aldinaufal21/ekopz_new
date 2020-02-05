<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Koperasi";
    $data['koperasi'] = TRUE;
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/join_koperasi/koperasi_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
