<?php
/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
class Simpanan_Model extends CI_Model
{

  public function input($data)
  {
    $this->db->insert('simpanan', $data);
  }

  public function get_wajib_pengguna()
  {
    $this->db->select('id_pengguna');
    $this->db->where('jenis', 'Wajib');
    $this->db->group_by('id_pengguna');
    return $this->db->get('simpanan');
  }

  public function get_wajib_month($id, $bulan, $tahun)
  {
    $q = $this->db
      ->select('jumlah')
      ->where('id_pengguna', $id)
      ->where('jenis', 'Wajib')
      ->where('bulan', $bulan)
      ->where('tahun', $tahun)
      ->get('simpanan');

    if ($q->num_rows() > 0) {
      return $q->result_array()[0];
    }

    return ['jumlah' => 0];
  }
}

 ?>
