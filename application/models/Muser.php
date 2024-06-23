<?php

class Muser extends CI_Model{

    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_admin',array('userName'=>$u, 'password'=>$p));
        return $q;
    }

    public function daftar($u, $p){
        $this->db->insert('tbl_admin',array('userName'=>$u, 'password'=>$p));
    }

    public function get_all_data($tabel) {
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data){
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id) {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $id, $val){
        $this->db->delete($tabel, array($id => $val));
    }

    public function get_produk(){
        $this->db->select('*'); 
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko','tbl_produk.idToko = tbl_toko.idToko');
        $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');
        $q = $this->db->get();
        return $q;
    }

   

    public function getProdukToko($idProduk){
        $this->db->select('tbl_toko.nama_Toko, tbl_toko.alamat, tbl_toko.kota, tbl_toko.id_Toko');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko', 'tbl_produk.id_Toko = tbl_toko.id_Toko');
        $this->db->where('tbl_produk.id_Produk', $idProduk);
        $query = $this->db->get();
        return $query;
    }

    public function getProdukByToko($idToko){
        $this->db->select('tbl_toko.nama_Toko, tbl_toko.alamat, tbl_toko.kota, tbl_toko.id_Toko, tbl_produk.*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko', 'tbl_produk.id_Toko = tbl_toko.id_Toko');
        $this->db->where('tbl_produk.id_Toko', $idToko);
        $query = $this->db->get();
        return $query;
    }
}