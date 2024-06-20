<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Madmin');
        $this->load->model('Muser');
    }

    public function index() {
        // Redirect ke dashboard beranda
        redirect('user/home_before_login');
    }

    public function login() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/login_user');
    }

    public function daftar() {
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

    public function login_user()
    {
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('email', 'email' , 'required');
        $this->form_validation->set_rules('password', 'password' , 'required');
        $cek = $this->Madmin->get_by_id('tbl_user', array('email' => $email))->num_rows();
        $result = $this->Madmin->get_by_id('tbl_user', array('email' => $email))->row_object();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
            redirect('user/login');
        } else {
            if ($cek > 0) {
                if (password_verify($password, $result->password)) {
                    
                }else{
                    $data_session = array(
                        'id_User' => $result->idKonsumen,
                        'id_Kota' => $result->idKota,
                        'User' => $username,
                        'status' => 'login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('user');
                }
            } else {
                echo "Username dan password salah";
            }
        }
    }

    public function daftar_user()
    {
        $password = $this->input->post('password');
        $password_hashing = password_hash($password, PASSWORD_DEFAULT);
        $namaKonsumen = $this->input->post('username');
        $alamat = $this->input->post('alamat');
        $idKota = null;
        $email = $this->input->post('email');
        $noHP = $this->input->post('nohp');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
            redirect('user/daftar');
        } else {
            $dataInput = array(
                'email' => $email,
                'username' => $namaKonsumen,
                'password' => $password_hashing,
                'noHP' => $noHP,
                'nama_User' => $namaKonsumen,
                'alamat' => $alamat,
                'id_Kota' => $idKota,
            );
            $this->Madmin->insert('tbl_user', $dataInput);
            $this->session->set_flashdata('registerSuccess', 'Registrasi berhasil');
            redirect('user');
        }
    }
}
