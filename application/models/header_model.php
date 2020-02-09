<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class header_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function datakoperasi($id_koperasi)
  {
    return $this->db->get_where('koperasi', $id_koperasi);
  }

}
