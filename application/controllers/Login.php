<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
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

  function login_koperasi()
  {
    $kodekoperasi = $this->input->post('kodekoperasi');
    $password = $this->input->post('password');

    $where = array(
      'kodekoperasi' => $kodekoperasi,
      'password' => $password
    );

    $cek = $this->login_model->cek_akun_koperasi($where)->num_rows();
    // $this->output->enable_profiler(true);
    echo $cek;
    if ($cek > 0) {

      $data_session = array(
        'kode' => $kodekoperasi,
        'status' => 'login',
      );

      $this->session->set_userdata($data_session);
      redirect(base_url("admin/dashboard"));
    }
    else{
      $this->koperasi();
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url("login/koperasi"));
  }

}
