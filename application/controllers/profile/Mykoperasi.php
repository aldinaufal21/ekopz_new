
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mykoperasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    userlogin();
  }

  function index()
  {
    $data['nama'] = "Koperasi Saya";
    $data['mykoperasi'] = TRUE;

    $this->load->view('profile/template/header_view', $data);
    $this->load->view('profile/My_koperasi/mykoperasi_view');
    $this->load->view('profile/template/footer_view');
  }

}
