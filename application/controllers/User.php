<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        // Redirect ke dashboard beranda
        redirect('user/home_before_login');
    }

    public function login_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/login_user');
    }

    public function daftar_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/daftar_user');
    }

    public function home_before_login() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_before_login');
        $this->load->view('user/home_before_login');
        $this->load->view('user/footer/footer');
    }

    public function header_before_login() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_before_login');
    }

    public function footer() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/footer/footer');
    }

    public function home_after_login() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/home_after_login');
        $this->load->view('user/footer/footer');
    }

    public function all_product() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/all_product');
        $this->load->view('user/footer/footer');
    }

    public function cart() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/cart');
        $this->load->view('user/footer/footer');
    }

    public function checkout() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/checkout');
        $this->load->view('user/footer/footer');
    }

    public function product() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/product');
        $this->load->view('user/footer/footer');
    }

    public function profil_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/profil_user');
        $this->load->view('user/footer/footer');
    }

    public function address_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/address_user');
        $this->load->view('user/footer/footer');
    }

    public function password_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/password_user');
        $this->load->view('user/footer/footer');
    }
    // Tambahkan method lain sesuai kebutuhan seperti login, register, dll.

}
