<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_bukti extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function penerimaan_kas()
  {
    $data['nama'] = "Cetak Bukti";
    $data['penerimaan_kas'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/cetak_bukti/penerimaan_kas_view');
    $this->load->view('admin/template/footer_view');
  }

  function pengeluaran_kas()
  {
    $data['nama'] = "Cetak Bukti";
    $data['pengeluaran_kas'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/cetak_bukti/pengeluaran_kas_view');
    $this->load->view('admin/template/footer_view');
  }

}
