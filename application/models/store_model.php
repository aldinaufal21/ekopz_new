<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class store_model extends CI_Model{

  public function tampil_data($id_koperasi)
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->where('id_koperasi', $id_koperasi);
    $this->db->order_by('id_barang', 'DESC');

    return $this->db->get();
  }

  public function input_data($data)
  {
    $this->db->insert('barang', $data);
  }

  public function tampil_edit_data($id)
  {
    return $this->db->get_where('barang', $id);
  }

  public function update_data($data, $id)
  {
    $this->db->where('id_barang', $id);
    $this->db->update('barang', $data);
  }

  public function delete_data($id)
  {
    $this->db->where('id_barang', $id);
    $this->db->delete('barang');
  }

  public function tampil_store()
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->order_by('id_barang', 'DESC');

    return $this->db->get();
  }

  public function product_single($id_barang)
  {
    $this->db->select('barang.*, koperasi.foto as foto_koperasi, koperasi.nama as nama_koperasi, koperasi.thnBerdiri as tahun_berdiri, koperasi.alamat as alamat');
    $this->db->from('barang');
    $this->db->join('koperasi', 'barang.id_koperasi = koperasi.id_koperasi');
    $this->db->where('id_barang', $id_barang);
    return $this->db->get();
  }

  public function limit_product()
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->order_by('id_barang', 'DESC');
    $this->db->limit('4');

    return $this->db->get();
  }

  public function related_products($kategori)
  {
    $this->db->where('kategori', $kategori);
    $this->db->order_by('id_barang', 'DESC');
    $this->db->limit('4');
    return $this->db->get('barang');

  }

  // public function keranjang($data)
  // {
  //   $this->db->insert('keranjang', $data);
  // }
  //
  // public function tampil_keranjang($id_anggota)
  // {
  //   return $this->db->query("SELECT barang.foto as foto, barang.harga_jual as harga, keranjang.jumlah as jumlah, keranjang.jumlah*barang.harga_jual as total
  //                   from keranjang join barang on barang.id_barang=keranjang.id_barang where id_anggota = $id_anggota");
  //
  // }

}
