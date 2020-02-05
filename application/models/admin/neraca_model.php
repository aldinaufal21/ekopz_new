<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class neraca_model extends CI_Model{

  public function input($data)
  {
    $this->db->insert('neraca', $data);
    
  }

}
