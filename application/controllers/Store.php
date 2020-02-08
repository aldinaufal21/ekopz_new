<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('store_model');
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['store'] = TRUE;

    $data['barang'] = $this->store_model->tampil_store()->result();

    $this->load->view('landingpage/template/header_store_view', $data);
    $this->load->view('landingpage/store/store_view', $data);
    $this->load->view('landingpage/template/footer_view');
  }

  function product_single($id_barang)
  {
    $data['nama'] = "Product Single";
    $data['product'] = $this->store_model->product_single($id_barang)->row();

    $kategori = $data['product']->kategori;

    $data['related_products'] = $this->store_model->related_products($kategori)->result();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/product_single_view',$data);
    $this->load->view('landingpage/template/footer_view');
  }

  function cart($id_barang)
  {
    userlogin();
    $data['nama'] = "Keranjang";
    // $id_anggota = $_SESSION['id_anggota'];
    // $jumlah = $this->input->post('jumlah');
    // $data = array(
    //   'id_keranjang' => '',
    //   'id_barang' => $id_barang,
    //   'id_anggota' => $id_anggota,
    //   'jumlah' => $jumlah,
    // );
    //
    // $this->store_model->keranjang($data);
    //
    // $data['keranjang'] = $this->store_model->tampil_keranjang($id_anggota)->result();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/cart_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
