<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class store_model extends CI_Model{

  public function tampil_data($id_koperasi)
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->where('id_koperasi', $id_koperasi);

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
    return $this->db->get('barang');
  }

}
