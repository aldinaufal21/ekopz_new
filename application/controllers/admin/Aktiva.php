<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktiva extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
  }

  function index()
  {
    $data['nama'] = "Aktiva";
    $data['aktiva'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/aktiva/aktiva_view');
    $this->load->view('admin/template/footer_view');
  }

}
