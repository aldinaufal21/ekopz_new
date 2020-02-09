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

  function add_to_cart()
  {
    $id_barang = $_GET['id_barang'];
    $qty = $this->input->post('qty') ? $this->input->post('qty') : 1;
    $data['barang'] = $this->store_model->getBarang($id_barang)->row();
    $data = array(
      'id' => $id_barang,
      'qty' => $qty,
      'price' => $data['barang']->harga_jual,
      'name' => $data['barang']->nama_barang,
    );
    $this->cart->insert($data);
    redirect('/store/cart');
  }

  function kurang_cart()
  {
    $id_barang = $_GET['id_barang'];
    $row_id = $_GET['row_id'];
    $cart = $this->cart->get_item($row_id);
    $qty = $cart["qty"] - 1;
    $data['barang'] = $this->store_model->getBarang($id_barang)->row();
    $data = array(
      'rowid' => $row_id,
      'id' => $id_barang,
      'qty' => $qty,
      'price' => $data['barang']->harga_jual,
      'name' => $data['barang']->nama_barang,
    );

    $this->cart->update($data);
    redirect('/store/cart');
  }

  function cart()
  {
    userlogin();
    $data['nama'] = "Keranjang";
    $id_anggota = $_SESSION['id_anggota'];
    $data['keranjang'] = $this->cart->contents();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/cart_view', $data);
    $this->load->view('landingpage/template/footer_view');
  }

  function hapus_cart()
  {
    $id_barang = $_GET['id_barang'];

    $this->cart->remove($id_barang);
    redirect('/store/cart');
  }

  function checkout()
  {
    $data['nama'] = "Keranjang";

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/checkout_view');
    $this->load->view('landingpage/template/footer_view');
  }

}
