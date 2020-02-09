<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_model extends CI_Model{

  public function input($data)
  {
    $this->db->insert('anggota', $data);
  }

  public function input_koperasi($data)
  {
    $this->db->insert('koperasi', $data);
  }
}
