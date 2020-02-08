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

  function login_user()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $whereuser = array(
      'email' => $email,
      'password' => md5($password)
    );

    $cek = $this->login_model->cek_akun_user($whereuser);
    //$this->output->enable_profiler(true);
    if ($cek->num_rows() > 0) {
      $data_anggota = $cek->row_array();

      $data_session = array(
        'email' => $email,
        'nama' => $data_anggota['nama'],
        'foto' => $data_anggota['foto'],
        'id_anggota' => $data_anggota['id_anggota'],
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('home'));
    }
    else{
      $this->index();
    }
  }

  function login_koperasi()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $where = array(
      'email' => $email,
      'password' => md5($password),
    );

    $cek = $this->login_model->cek_akun_koperasi($where);
    //$this->output->enable_profiler(true);
    if ($cek->num_rows() > 0) {

      $data_kop = $cek->row_array();

      $data_session = array(
        'nama_koperasi' => $data_kop['nama'],
        'tahun_berdiri' => $data_kop['thnBerdiri'],
        'alamat_koperasi' => $data_kop['alamat'],
        'id_koperasi' => $data_kop['id_koperasi'],
        'foto' => $data_kop['foto'],
      );

      $this->session->set_userdata($data_session);
      redirect(base_url("admin/dashboard"));
    }
    else{
      $this->koperasi();
    }
  }

  function logout_koperasi()
  {
    $this->session->sess_destroy('nama');
    $this->session->sess_destroy('thnBerdiri');
    $this->session->sess_destroy('alamat');
    $this->session->sess_destroy('id_koperasi');
    $this->session->sess_destroy('foto');
    redirect(base_url("login/koperasi"));
  }

  function logout_user()
  {
    $this->session->sess_destroy('email');
    $this->session->sess_destroy('id_anggota');
    redirect(base_url("home"));
  }

}
