<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
  }

  function index()
  {
    $data['nama'] = "Cetak Bukti";
    $data['neraca'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/neraca/neraca_lajur_view');
    $this->load->view('admin/template/footer_view');
  }

}
