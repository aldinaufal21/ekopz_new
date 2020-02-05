<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/neraca_model');
  }

  function index()
  {
    $data['nama'] = "Neraca";
    $data['neraca'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/neraca/neraca_view');
    $this->load->view('admin/template/footer_view');
  }

  function neraca_lajur(){
    $data['neraca_lajur'] = TRUE;
    $data['neraca'] = TRUE;
    $data['nama'] = "Naraca Lajur";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/neraca/neraca_lajur_view');
    $this->load->view('admin/template/footer_view');
  }

  function form_input()
  {
    $data['nama'] = "Neraca";
    $data['input'] = TRUE;
    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/neraca/input_view');
    $this->load->view('admin/template/footer_view');
  }

  function input_data()
  {
    $ap = $this->input->post('ap');
    $jenis = $this->input->post('jenis');
    $rincian = $this->input->post('rincian');
    $jumlah = $this->input->post('jumlah');

    $data = array(
      'id_neraca' => '',
      'id_koperasi' => 1,
      'ap' => $ap,
      'jenis' => $jenis,
      'rincian' => $rincian,
      'jumlah' => $jumlah
    );

    $this->neraca_model->input($data);

    $this->index();
  }

}
