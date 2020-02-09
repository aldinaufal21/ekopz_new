<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// include_once APPPATH.'bri/BRI.php';
//
// use BRI\BRI;

class Koperasi extends CI_Controller{

  public $bri;

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('koperasi_model');
  }

  // public function bri()
  // {
  //   $bri = new BRI('nxXGDT85O0gFuYe2', 'WkW4sSqJ3S3ydyEv5yF9OHQeYiJwoIyy');
  //   echo $bri->cekAkun();
  // }

  function index()
  {
    $data['nama'] = "Koperasi";
    $data['koperasi'] = TRUE;

    $data['koperasi'] = $this->koperasi_model->tampil_koperasi()->result();
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/join_koperasi/koperasi_view');
    $this->load->view('landingpage/template/footer_view');
  }

  function koperasi_single()
  {
    $data['nama'] = "Koperasi";
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/join_koperasi/koperasi_single_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
