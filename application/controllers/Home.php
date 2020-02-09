<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('koperasi_model');
    $this->load->model('store_model');
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['home'] = TRUE;

    $data['koperasi'] = TRUE;
    
    $data['maps'] = $this->koperasi_model->maps()->result();
    $data['koperasi'] = $this->koperasi_model->limit_koperasi()->result();
    $data['product'] = $this->store_model->limit_product()->result();
    $this->load->view('landingpage/template/header_view', $data);
    $this->load->view('landingpage/home_view',$data);
    $this->load->view('landingpage/template/footer_view',$data);
  }



}
