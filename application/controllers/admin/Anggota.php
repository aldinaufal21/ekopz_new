<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Anggota extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/anggota_model');
  }

  function index()
  {
    $data['anggota'] = TRUE;
    $data['nama'] = "Anggota";

    $status = 'anggota';
    $data['status'] =  $this->anggota_model->tampil_data($status)->result();

    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/anggota/anggota_view');
    $this->load->view('admin/template/footer_view');
  }

  function form_input()
  {
    $data['nama'] = "Anggota";
    $data['input'] = TRUE;
    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/anggota/input_view');
    $this->load->view('admin/template/footer_view');
  }

  function input_data()
  {
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jk');
    $ttl = $this->input->post('ttl');
    $pekerjaan = $this->input->post('pekerjaan');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $foto = $this->input->post('foto');

    $data = array(
      'id_anggota' => '',
      'id_koperasi' => 1,
      'nama' => $nama,
      'jk' => $jk,
      'ttl' => $ttl,
      'pekerjaan'=> $pekerjaan,
      'alamat' => $alamat,
      'foto' => '',
      'email' => $email,
      'password' => $password,
      'status' => 'anggota'
    );

    if (!empty($_FILES['foto']['name'])) {
      $config['upload_path']          = './assets/admin/upload_anggota';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['encrypt_name']         = TRUE;
      $config['max_size']             = 2000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('foto'))
      {
              print_r($this->upload->display_errors());
      }
      else
      {
              $data['foto'] = $this->upload->data('file_name');
      }
    }

    $this->anggota_model->input($data);

    $this->index();
  }

  function edit($id){
    $edit['nama'] = "Anggota";
    $edit['edit'] = TRUE;
    $q=$this->anggota_model->getID($id)->row();
    $data['anggota']=$q;
    $this->load->view('admin/template/header_view', $edit);
    $this->load->view('admin/anggota/edit_view',$data);
    $this->load->view('admin/template/footer_view');
  }

  function update($id){
    $data= $this->input->post();
    $q = $this->anggota_model->update_anggota($id,$data);

    if ($q) {
      return $this->index();
    }
    echo "Gagal";
  }

  function delete($id){
    $q = $this->anggota_model->delete_anggota($id);

    if ($q) {
      return redirect(base_url('admin/anggota/index'));
    }
  }
}

 ?>
