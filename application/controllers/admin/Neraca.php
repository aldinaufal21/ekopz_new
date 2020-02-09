<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/neraca_model');
    checklogin();
  }

  function index()
  {
    $data['nama'] = "Neraca";
    $data['neraca'] = TRUE;

    $aktiva = 'aktiva';
    $data['aktiva'] =  $this->neraca_model->tampil_data_aktiva($aktiva)->result();

    $pasiva = 'pasiva';
    $data['pasiva'] =  $this->neraca_model->tampil_data_pasiva($pasiva)->result();

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/neraca/neraca_view',$data);
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
    $tahun = $this->input->post('tahun');
    $jumlah = $this->input->post('jumlah');

    $data = array(
      'id_neraca' => '',
      'id_koperasi' => 1,
      'ap' => $ap,
      'jenis' => $jenis,
      'rincian' => $rincian,
      'tahun'=> $tahun,
      'jumlah' => $jumlah
    );

    $this->neraca_model->input($data);

    $this->index();
  }
  function edit($id){
    $edit['nama'] = "Neraca";
    $edit['edit'] = TRUE;
    $q=$this->neraca_model->getID($id)->row();
    $data['neraca']=$q;
    $this->load->view('admin/template/header_view', $edit);
    $this->load->view('admin/neraca/edit_view',$data);
    $this->load->view('admin/template/footer_view');
  }

  function update($id){
    $data= $this->input->post();
    $q = $this->neraca_model->update_neraca($id,$data);

    if ($q) {
      return $this->index();
    }
    echo "Gagal";
  }

  function delete($id){
    $q = $this->neraca_model->delete_neraca($id);

    if ($q) {
      return redirect(base_url('admin/neraca/index'));
    }
  }
}
