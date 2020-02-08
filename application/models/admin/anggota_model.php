<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class anggota_model extends CI_Model
{
  public function input($data)
  {
    $this->db->insert('anggota', $data);
  }

  public function tampil_data($status)
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->where('status',$status);
      return $this->db->get();
  }

  public function getId($id)
  {
      return $this->db->get_where('anggota',array('id_anggota' => $id ));
  }

  public function update_anggota($id,$data)
  {
      $this->db->where('id_anggota',$id);
      $s=$this->db->update('anggota',$data);

      return $s;
  }

  public function delete_anggota($id)
  {
      $this->db->where('id_anggota', $id);
      $s=$this->db->delete('anggota');
      return $s;
  }
}

 ?>
