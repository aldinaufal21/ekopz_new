<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shu extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
  }

  function index()
  {
    $data['nama'] = "SHU";
    $data['shu'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/shu/shu_view');
    $this->load->view('admin/template/footer_view');
  }

}
