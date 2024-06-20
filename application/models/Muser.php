<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{
    public function register($tabel,$data)
  {
    // insert data
    $this->db->insert($tabel, $data);
  }

  public function cek_login($u,$p){
    $q = $this->db->get_where('tbl_user',array('username'=>$u, 'password'=>$p));
    return $q;
  }
}