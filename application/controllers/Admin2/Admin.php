<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function test() {
        $this->load->view('admin/test');
    }
    public function login() {
        $this->load->view('admin/login_admin');
    }
    public function register() {
        $this->load->view('admin/register_admin');
    }
    public function profil() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_profil');
    }
    public function kategori() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_kategori');
    }
    public function kategori_tambah() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_kategori_tambah');
    }
    public function kategori_edit() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_edit_kategori');
    }
    public function kategori_hapus() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_hapus_kategori');
    }
    public function toko() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_toko');
    }

    public function toko_aksi_lihat_aktif(){
        $this->load->view('admin_toko_aksi_lihat_aktif');
    }

    public function toko_aksi_lihat_nonaktif(){
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin_toko_aksi_lihat_aktif');
    }

    public function toko_aksi_hapus() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin_toko_aksi_hapus');
    }
    public function user() {
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin/admin_user');
    }
    public function user_aksi_lihat_aktif(){
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin_user_lihat_aktif');
    }

    public function user_aksi_lihat_nonaktif(){
        $this->load->view('admin/header/header_admin');
        $this->load->view('admin_user_lihat_aktif');
    }

    public function user_aksi_hapus() {
        $this->load->view('admin_user_aksi_hapus');
    }
}