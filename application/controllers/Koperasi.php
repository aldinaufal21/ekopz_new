<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('koperasi_model');
  }

  function index()
  {
    $data['nama'] = "Koperasi";
    $data['koperasi'] = TRUE;

    $data['koperasi'] = $this->koperasi_model->tampil_koperasi()->result();
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/join_koperasi/koperasi_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
