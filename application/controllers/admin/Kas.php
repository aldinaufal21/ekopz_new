<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
  }

  function index()
  {
    $data['kas'] = TRUE;
    $data['nama'] = "kas";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/kas/kas_view');
    $this->load->view('admin/template/footer_view');
  }

  function kas_masuk()
  {
    $data['kas_masuk'] = TRUE;
    $data['kas'] = TRUE;
    $data['nama'] = "kas masuk";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/kas/kas_masuk_view');
    $this->load->view('admin/template/footer_view');
  }

  function kas_keluar()
  {
    $data['kas'] = TRUE;
    $data['kas_keluar'] = TRUE;
    $data['nama'] = "kas keluar";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/kas/kas_keluar_view');
    $this->load->view('admin/template/footer_view');
  }

}
