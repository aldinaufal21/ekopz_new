<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setoran extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Simpan Pinjam";
    $data['simpanpinjam'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/simpanpinjam/simpanpinjam_view');
    $this->load->view('admin/template/footer_view');
  }

}
