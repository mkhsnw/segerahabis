<?php

class Madmin extends CI_Model{
    

    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_admin',array('username'=>$u, 'password'=>$p));
        return $q;
    }

    public function daftar($u, $p){
        $this->db->insert('tbl_admin',array('username'=>$u, 'password'=>$p));
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

   /* public function joinToko($idToko){
        //$this->db->query("SELECT tbl_toko.* ,tbl_produk.* FROM tbl_produk JOIN tbl_toko on tbl_produk.id_Toko = tbl_toko.id_Toko WHERE tbl_produk.id_Toko = $idToko");
        $this->db->query("SELECT p.*, t.nama_Toko, t.username,  t.alamat, t.email, t.noHP, t.kota FROM  tbl_produk p JOIN tbl_toko t ON p.id_Toko = t.id_Toko");
        $this->db->get();
    }*/

    public function get_produk_seller($idToko) {
        $this->db->select('tbl_produk.id_Produk, tbl_produk.nama_Produk, tbl_kategori.nama_Kat, tbl_produk.harga, tbl_produk.stock, tbl_produk.diskon, tbl_produk.tanggal_Exp');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_produk.id_Kategori = tbl_kategori.id_Kategori');
        $this->db->where('tbl_produk.id_Toko',$idToko);
        $query = $this->db->get();
        return $query;
    }
    
    
    /*public function get_produk($id_Produk) {
        // Menentukan kolom yang akan dipilih
        $this->db->select('tbl_produk.nama_Produk, tbl_produk.id_Kategori, tbl_produk.stock, tbl_produk.diskon');
        // Menentukan tabel utama
        $this->db->from('tbl_produk');
        // Melakukan join dengan tabel tbl_toko
        $this->db->join('tbl_toko', 'tbl_produk.id_Toko = tbl_toko.id_Toko');
        // Melakukan join dengan tabel tbl_member
        $this->db->join('tbl_member', 'tbl_member.idKonsumen = tbl_toko.id_Konsumen');
        // Menambahkan kondisi berdasarkan id_Produk
        $this->db->where('tbl_produk.id_Produk', $id_Produk);
        // Menjalankan query dan mendapatkan hasil
        $q = $this->db->get();
        return $q->result(); // Mengembalikan hasil sebagai array objek
    }*/

    public function get_produk() {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko', 'tbl_toko.id_Toko = tbl_produk.id_Produk');
        $q = $this->db->get();
        return $q;
    }

    public function getDataProduk($idToko){
        $this->db->select('tbl_kategori.nama_Kat,tbl_produk.*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori','tbl_produk.id_Kategori = tbl_kategori.id_Kategori');
        $this->db->where('tbl_produk.id_Toko', $idToko);
        $q = $this->db->get();
        return $q;
    }
 

}