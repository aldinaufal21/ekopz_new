<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    checklogin();
    $this->load->model('header_model');
  }

  function index()
  {
    $data['nama'] = "Dashboard";
    $data['dashboard'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/dashboard_view');
    $this->load->view('admin/template/footer_view');
  }

}
