<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('daftar_model');
  }

  function index()
  {
    $data['nama'] = "Daftar";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/daftar_view.php');
    $this->load->view('login/footer_view.php');
  }

  function input()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $repeat_password = $this->input->post('repeat_password');

    $data = array(
      'id_anggota' => '',
      'id_koperasi' => '',
      'nama' => $nama,
      'jk' => '',
      'ttl' => '',
      'pekerjaan' => '',
      'alamat' => '',
      'foto' => '',
      'email' => $email,
      'password' => md5($password),
      'status' => 'belum_anggota'
    );

    if ($password != $repeat_password)
    {
      $this->index();
    }
    else
    {
      $this->daftar_model->input($data);

      $dataview['nama'] = "Login";
      $this->load->view('login/header_view.php', $dataview);
      $this->load->view('login/login_view.php');
      $this->load->view('login/footer_view.php');
    }
  }

}
