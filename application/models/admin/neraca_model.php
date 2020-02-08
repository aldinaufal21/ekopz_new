<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class neraca_model extends CI_Model{

  public function input($data)
  {
    $this->db->insert('neraca', $data);
  }
  public function tampil_data_aktiva($aktiva)
  {
    $this->db->select('*');
    $this->db->from('neraca');
    $this->db->where('ap',$aktiva);

    $this->db->order_by('Jenis', 'DESC');
      return $this->db->get();
  }
  public function tampil_data_pasiva($pasiva)
  {
    $this->db->select('*');
    $this->db->from('neraca');
    $this->db->where('ap',$pasiva);
    $this->db->order_by('Jenis', 'DESC');
      return $this->db->get();
  }

  public function getId($id)
  {
      return $this->db->get_where('neraca',array('Id_Neraca' => $id ));
  }

  public function update_neraca($id,$data)
  {
      $this->db->where('Id_Neraca',$id);
      $s=$this->db->update('neraca',$data);

      return $s;
  }

  public function delete_neraca($id)
  {
      $this->db->where('Id_Neraca', $id);
      $s=$this->db->delete('neraca');
      return $s;
  }
}
