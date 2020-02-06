<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model{

  public function cek_akun_user($whereuser)
  {
    return $this->db->get_where('anggota', $whereuser);
  }

  public function cek_akun_koperasi($where)
  {
    return $this->db->get_where('koperasi', $where);
  }

}
