<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    checklogin();
    $this->load->model('store_model');
  }

  function index()
  {
    $data['nama'] = "Kelola Barang";
    $data['store'] = TRUE;

    $id_koperasi = $_SESSION['id_koperasi'];
    $data['barang'] = $this->store_model->tampil_data($id_koperasi)->result();

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/store/store_view',$data);
    $this->load->view('admin/template/footer_view');
  }

  function form_input()
  {
    $data['nama'] = "form kelola barang";
    $data['store'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/store/form_store_view');
    $this->load->view('admin/template/footer_view');
  }

  function input_data()
  {
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $kategori = $this->input->post('kategori');
    $satuan = $this->input->post('satuan');
    $stok = $this->input->post('stok');
    $harga_beli = $this->input->post('harga_beli');
    $harga_jual = $this->input->post('harga_jual');
    $id_koperasi = $_SESSION['id_koperasi'];

    $data = array(
      'id_barang' => '',
      'id_koperasi' => $id_koperasi,
      'nama_barang' => $nama,
      'deskripsi' => $deskripsi,
      'kategori' => $kategori,
      'satuan' => $satuan,
      'stok' => $stok,
      'harga_beli' => $harga_beli,
      'harga_jual' => $harga_jual,
    );

    if (!empty($_FILES['foto']['name'])) {
      $config['upload_path']          = './assets/admin/upload_barang';
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

    $this->store_model->input_data($data);

    redirect(base_url('admin/store'));
  }

  function form_edit($id_barang)
  {
    $id = array(
      'id_barang' => $id_barang,
    );

    $data['nama'] = "Kelola Barang";
    $data['store'] = TRUE;
    $data['barang'] = $this->store_model->tampil_edit_data($id)->row();

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/store/form_edit_view',$data);
    $this->load->view('admin/template/footer_view');
  }

  function update_data($id_barang)
  {
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $kategori = $this->input->post('kategori');
    $satuan = $this->input->post('satuan');
    $stok = $this->input->post('stok');
    $harga_beli = $this->input->post('harga_beli');
    $harga_jual = $this->input->post('harga_jual');
    $id_koperasi = $_SESSION['id_koperasi'];

    $data = array(
      'id_barang' => $id_barang,
      'id_koperasi' => $id_koperasi,
      'nama_barang' => $nama,
      'deskripsi' => $deskripsi,
      'kategori' => $kategori,
      'satuan' => $satuan,
      'stok' => $stok,
      'harga_beli' => $harga_beli,
      'harga_jual' => $harga_jual,
    );

    $this->store_model->update_data($data, $id_barang);

    redirect(base_url('admin/store'));
  }

  function delete($id)
  {
    $this->store_model->delete_data($id);

    redirect(base_url('admin/store'));
  }

}
