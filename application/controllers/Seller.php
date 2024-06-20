<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function daftar_seller() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/daftar_seller');
    }

    public function login_seller() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/login_seller');
    }

    public function header() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
    }

    public function dashboard_seller() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/dashboard_seller');
    }

    public function product_seller() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/product_seller');
    }

    public function seller_add_product() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/seller_add_product');
    }
    
    public function seller_edit_product() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/seller_edit_product');
    }

    public function seller_pesanan() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/pesanan_seller');
    }

    public function seller_aksi_lihat_pesanan() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/seller_aksi_lihat_pesanan');
    }

    public function pengaturan() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/pengaturan');
    }
    



}