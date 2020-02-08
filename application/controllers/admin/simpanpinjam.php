<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpanpinjam extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/simpanan_model');
  }

  function index()
  {
    $data['nama'] = "Simpan Pinjam";
    $data['simpanpinjam'] = TRUE;

    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/simpanpinjam/simpanpinjam_view');
    $this->load->view('admin/template/footer_view');
  }

  function simpanan()
  {
    $data['simpanan'] = TRUE;
    $data['simpanpinjam'] = TRUE;
    $data['nama'] = "Simpanan";

    $wajib = $this->simpanan_model->get_wajib_pengguna()->result_array();
    $bulan = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    foreach ($wajib as $key => $w) {
      $total = 0;
      for ($i=0; $i < count($bulan); $i++) {
        $qry = $this->simpanan_model->get_wajib_month($w['id_pengguna'], $bulan[$i], '2019');
        $wajib[$key][$bulan[$i]] = $qry;
        $total += $qry['jumlah'];
      }
      $wajib[$key]['total'] = $total;
    }

    $data['wajib'] = $wajib;
    $data['bulan'] = $bulan;

    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/simpanpinjam/simpanan_view');
    $this->load->view('admin/template/footer_view');
  }

  function pinjaman()
  {
    $data['pinjaman'] = TRUE;
    $data['simpanpinjam'] = TRUE;
    $data['nama'] = "Pinjaman";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/simpanpinjam/pinjaman_view');
    $this->load->view('admin/template/footer_view');
  }

  function daftarsetoran()
  {
    $data['daftarsetoran'] = TRUE;
    $data['simpanpinjam'] = TRUE;
    $data['nama'] = "Daftar Setoran";
    $this->load->view('admin/template/header_view',$data);
    $this->load->view('admin/simpanpinjam/daftarsetoran_view');
    $this->load->view('admin/template/footer_view');
  }

  function form_input_simpanan()
  {
    $data['nama'] = "Simpan Pinjam";
    $data['input'] = TRUE;
    $this->load->view('admin/template/header_view', $data);
    $this->load->view('admin/simpanpinjam/input_simpanan_view');
    $this->load->view('admin/template/footer_view');
  }

  function input_data_simpanan()
  {
    $kode_anggota = $this->input->post('id_pengguna');
    $bulan = $this->input->post('bulan');
    $tahun = $this->input->post('tahun');
    $jenis = $this->input->post('jenis');
    $jumlah = $this->input->post('jumlah');

    $data = array(
      'id_simpanan'=>'',
      'sisa_pinjaman'=>'',
      'id_koperasi' =>1,
      'id_pengguna' =>$kode_anggota,
      'jenis' => $jenis,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'jumlah' => $jumlah
    );

    $this->simpanan_model->input($data);

    $this->simpanan();
  }
}
