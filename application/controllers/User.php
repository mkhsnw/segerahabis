<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Muser');

    }

    public function index()
    {
        // Redirect ke dashboard beranda
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();
        $data['produk'] =  $this->Muser->get_all_data('tbl_produk')->result();
        $currentDate = date('Y-m-d');
        foreach ($data['produk'] as $produk) {
            $tanggalExp = $produk->tanggal_Exp; 
            $datetime1 = new DateTime($currentDate);
            $datetime2 = new DateTime($tanggalExp);
            $interval = $datetime1->diff($datetime2);
            $sisaHari = $interval->format('%r%a'); 
            $produk->sisaHari = $sisaHari; 
        };
        // method menghitung harga setelah didiskon
        foreach($data['produk'] as $produk){
            $sebelumDiskon = $produk->harga;
            $diskon = $produk->diskon;
            $hargaDiskon = $sebelumDiskon - ($sebelumDiskon * $diskon / 100);
            $produk->hargaDiskon = $hargaDiskon;
        }
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/home_after_login', $data);
        $this->load->view('user/footer/footer');
    }

    public function kategori($idKat){
        $data['produk'] = $this->Muser->get_by_id('tbl_produk',array('id_Kategori' => $idKat))->result();
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();
        $currentDate = date('Y-m-d');
        foreach ($data['produk'] as $produk) {
            $tanggalExp = $produk->tanggal_Exp;
            $datetime1 = new DateTime($currentDate);
            $datetime2 = new DateTime($tanggalExp);
            $interval = $datetime1->diff($datetime2);
            $sisaHari = $interval->format('%r%a');
            $produk->sisaHari = $sisaHari;
        };
        // method menghitung harga setelah didiskon
        foreach ($data['produk'] as $produk) {
            $sebelumDiskon = $produk->harga;
            $diskon = $produk->diskon;
            $hargaDiskon = $sebelumDiskon - ($sebelumDiskon * $diskon / 100);
            $produk->hargaDiskon = $hargaDiskon;
        }
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/home_by_kategori', $data);
        $this->load->view('user/footer/footer');
    }

    public function login()
    {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/login_user');
    }

    public function daftar()
    {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/daftar_user');
    }

    

    public function footer()
    {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/footer/footer');
    }

    public function home_after_login()
    {
       
    }

    public function all_product()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/all_product');
        $this->load->view('user/footer/footer');
    }

    public function cart()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/cart');
        $this->load->view('user/footer/footer');
    }

    public function checkout()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/checkout');
        $this->load->view('user/footer/footer');
    }

    public function product()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/product');
        $this->load->view('user/footer/footer');
    }

    public function profil_user()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/profil_user', $data);
        $this->load->view('user/footer/footer');
    }

    public function address_user()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/address_user', $data);
        $this->load->view('user/footer/footer');
    }

    public function password_user()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/password_user', $data);
        $this->load->view('user/footer/footer');
    }

    public function pesanan_user()
    {
        if(empty($this->session->userdata('id_user'))){
            redirect('user/login');
        }
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/pesanan_user');
        $this->load->view('user/footer/footer');
    }
    // Tambahkan method lain sesuai kebutuhan seperti login, register, dll.

    public function daftar_user()
    {
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $namalengkap = $this->input->post('namalengkap');
        $password = $this->input->post('password');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $kota = null;

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/daftar_user');
        } else {

            $data = array(
                'email' => $email,
                'username' => $username,
                'nama_User' => $namalengkap,
                'password' => $password,
                'id_kota' => $kota
            );

            $this->Muser->insert('tbl_user', $data);
            redirect('user/login');
        }
    }

    public function login_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $q = $this->Muser->get_by_id('tbl_user', array('email' => $email))->num_rows();
        $result = $this->Muser->get_by_id('tbl_user', array('email' => $email, 'password' => $password))->row_object();

        // print_r(array('1' => $password, '2' => $result->password));exit();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/login_user');
        } else {
            if ($q > 0) {
                $data_session = array(
                    'id_user' => $result->id_User,
                    'email' => $result->email,
                    'username' => $result->username,
                    'nama_User' => $result->nama_User,
                    'id_kota' => $result->id_Kota,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                redirect('user');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user');
    }

    public function simpan_user()
    {
        $username = $this->input->post('username');
        $namalengkap = $this->input->post('namalengkap');
        $email = $this->input->post('email');
        $noHP = $this->input->post('nomor');
        $id = $this->session->userdata('id_user');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('nomor', 'Nomor HP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/profil_user');
        }else{
            $data_edit = array(
                'username' => $username,
                'nama_User' => $namalengkap,
                'email' => $email,
                'noHP' => $noHP
            );
            $this->Muser->update('tbl_user',$data_edit,'id_User',$id);
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
            redirect('user/profil_user');
        }
    }

    public function simpan_alamat(){
        $alamat = $this->input->post('alamat');
        $detail = $this->input->post('detail');
        $id = $this->session->userdata('id_user');

        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('detail', 'Detail Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/address_user');
        }else{
            $data_edit = array(
                'alamat' => $alamat,
            );
            $this->Muser->update('tbl_user',$data_edit,'id_User',$id);
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
            redirect('user/address_user');
        }
    }
}
