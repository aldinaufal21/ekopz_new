<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Daftar";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/daftar_view.php');
    $this->load->view('login/footer_view.php');
  }

}
