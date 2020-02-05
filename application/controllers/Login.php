<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['nama'] = "Login";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/login_view.php');
    $this->load->view('login/footer_view.php');
  }

  function koperasi(){
    $data['nama'] = "Login";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/login_koperasi_view.php');
    $this->load->view('login/footer_view.php');
  }

}
