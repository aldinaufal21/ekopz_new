<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class koperasi_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function tampil_koperasi()
  {
    return $this->db->get('koperasi');
  }

  public function limit_koperasi()
  {
      $this->db->select('*');
      $this->db->from('koperasi');
      $this->db->limit('4');

      return $this->db->get();
  }

  public function maps()
  {
    return $this->db->get('koperasi');
  }

}
