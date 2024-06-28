<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Madmin');
        $this->load->model('Muser');
    }

    public function daftar() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/daftar_seller');
    }

    public function index() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/login_seller');
    }

    public function header() {
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        //print_r($this->session->userdata('id_Toko'));exit();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
    }

    public function dashboard_seller() {
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        //print_r($this->session->userdata('id_Toko'));exit();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/dashboard_seller',$data);
    }

    /*
    public function product_seller() {
        $data['user'] = $this->Madmin->joinToko($this->session->userdata('id_Toko'))->result();
        print_r($data['user']);exit();
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();

        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/product_seller',$data);
    }
    */

    public function product_seller() {
        $data['user'] = $this->Madmin->get_by_id('tbl_toko', array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        $data['produk'] = $this->Madmin->getDataProduk($this->session->userdata('id_Toko'))->result();
        $this->load->view('seller/header/header_seller', $data);
        $this->load->view('seller/product_seller', $data);
    }
    
    public function seller_add_product() {
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/seller_add_product',$data);
    }
    
    public function seller_edit_product($id) {
        $dataWhere = array('id_Produk' => $id);
        $data ['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();

        //$data['produk'] =$this->Madmin->get_by_id('tbl_produk',array('id_Produk' =>$this->session->userdata('id_Produk')))->row_object();
      
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/seller_edit_product',$data);
    }

    public function seller_pesanan() {
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/pesanan_seller',$data);
    }

    public function delete($id) {
        $dataWhere = array('id_Produk' => $id);
        $data = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        if ($data) {
            $this->Madmin->delete('tbl_produk', 'id_Produk', $id);
            unlink('./assets/foto_produk/' . $data->foto_Produk); // Periksa apakah file ada sebelum menghapus
            $this->session->set_flashdata('delete_success', 'Data telah berhasil terhapus');
        } else {
            $this->session->set_flashdata('delete_error', 'Data tidak ditemukan');
        }
        
        redirect('seller/product_seller');
    }

    public function seller_aksi_lihat_pesanan() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller');
        $this->load->view('seller/seller_aksi_lihat_pesanan');
    }

    public function pengaturan() {
        //$datawhere = array('id_kategori' => $id);
       // $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $datawhere)->row_object();
        $data['user'] = $this->Madmin->get_by_id('tbl_toko',array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        print_r($data['user']);exit();
        //print_r($this->session->userdata('id_Toko'));exit();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('seller/header/header_seller',$data);
        $this->load->view('seller/pengaturan',$data);
    }
    
    public function kategori()
    {
        $data['user'] = $this->madmin->get_by_id('tbl_toko', array('id_Toko' => $this->session->userdata('id_Toko')))->row_object();
        $this->load->view('seller/header/header_seller', $data);
        $this->load->view('seller/seller_add_product', $data);
        
    }
  
    public function login_seller()
    {
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('email', 'email' , 'required');
        $this->form_validation->set_rules('password', 'password' , 'required');

        $cek = $this->Madmin->get_by_id('tbl_toko', array('email' => $email))->num_rows();
        $result = $this->Madmin->get_by_id('tbl_toko', array('email' => $email, 'password' => $password))->row_object();
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            redirect('seller/login_seller');
        } else {
            if ($cek > 0) {
                    $data_session = array(
                        'id_Toko' => $result->id_Toko,
                        'id_Kota' => $result->idKota,
                        'nama_Toko' => $result->nama_Toko,
                        'email' => $email,
                        'status' => 'login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('seller/dashboard_seller');
                }
        
            }
        }



    public function daftar_seller()
    {
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('username');
        $alamat = $this->input->post('alamat');
        $idKota = null;
        $nama_Toko = $this->input->post('nama_Toko');
        $email = $this->input->post('email');
        $noHP = $this->input->post('noHP');
        $kota = $this->input->post('kota');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
            redirect('seller/daftar_seller');
        } else {
            $dataInput = array(
                'email' => $email,
                'username' => $namaKonsumen,
                'nama_Toko' => $nama_Toko,
                'password' => $password,
                'noHP' => $noHP,
                'alamat' => $alamat,
                'kota' => $kota,
                'id_Kota' => $idKota,
            );
            $this->Madmin->insert('tbl_toko', $dataInput);
            $this->session->set_flashdata('registerSuccess', 'Registrasi berhasil');
            redirect('seller/daftar');
        }
    }

    public function add_produk()
    {
        $idToko = $this->input->post('id_Toko');
        $nama_Produk = $this->input->post('nama_Produk');
        $idkategori = $this->input->post('kategori');
        $stock= $this->input->post('stock');
        $diskon = $this->input->post('diskon');
        $kadaluarsa = $this->input->post('kadaluarsa');
        $harga = $this->input->post('harga');
        $deskripsi=$this->input->post ('deskripsi');
        
        //$this->form_validation->set_rules('nama_Produk','Nama Produk','required');
        
        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        $file_names = ['foto_utama' => '', 'foto_1' => '', 'foto_2' => ''];
    
    foreach ($file_names as $key => &$file_name) {
        if ($this->upload->do_upload($key)) {
            $data_file = $this->upload->data();
            $file_name = $data_file['file_name'];
        } else {
            $file_name = null;
        }
    }

            $dataInput = array(
                'id_Toko' => $this->session->userdata('id_Toko'),
                'id_Kategori' => $idkategori,
                'nama_Produk' => $nama_Produk,
                'tanggal_Exp' => $kadaluarsa,
                'stock' => $stock,
                'diskon' => $diskon,
                'deskripsi' => $deskripsi,
                'harga' => $harga,
                'foto_Produk' => $file_names['foto_utama'],
                'foto_Produk1'=> $file_names['foto_1'],
                'foto_Produk2' => $file_names['foto_2']
            );
            if(empty($dataInput)){
                $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
                redirect('seller/seller_add_product' . $idToko);
            }else{
                $this->Madmin->insert('tbl_produk', $dataInput);
                $this->session->set_flashdata('registerSuccess', 'Registrasi berhasil');
                redirect('seller/product_seller');
            }
        
    }
        
    public function edit_product($idProduk)
{// Assuming you're passing the product ID to identify the product to edit
    $idToko = $this->input->post('id_Toko');
    $nama_Produk = $this->input->post('nama_Produk');
    $idkategori = $this->input->post('kategori');
    $stock = $this->input->post('stock');
    $diskon = $this->input->post('diskon');
    $kadaluarsa = $this->input->post('kadaluarsa');
    $harga = $this->input->post('harga');
    $deskripsi = $this->input->post('deskripsi');
    
    $config['upload_path'] = './assets/foto_produk/';
    $config['allowed_types'] = 'jpg|png|jpeg';

    $this->load->library('upload', $config);
    $file_names = ['foto_utama' => '', 'foto_1' => '', 'foto_2' => ''];
    
    foreach ($file_names as $key => &$file_name) {
        if ($this->upload->do_upload($key)) {
            $data_file = $this->upload->data();
            $file_name = $data_file['file_name'];
        } else {
            $file_name = $this->input->post('existing_' . $key); // Use the existing file name if no new file is uploaded
            // Debugging: print upload errors
            $error = $this->upload->display_errors();
            if ($error) {
                echo "Error uploading $key: $error<br>";
            }
        }
    }

    $dataInput = array(
        'id_Kategori' => $idkategori,
        'nama_Produk' => $nama_Produk,
        'tanggal_Exp' => $kadaluarsa,
        'stock' => $stock,
        'diskon' => $diskon,
        'deskripsi' => $deskripsi,
        'harga' => $harga,
        'foto_Produk' => $file_names['foto_utama'],
        'foto_Produk1' => $file_names['foto_1'],
        'foto_Produk2' => $file_names['foto_2']
    );


    if (empty($dataInput)) {
        $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
        redirect('seller/seller_edit_product/' . $idProduk);
    } else {
        $this->Madmin->update('tbl_produk', $dataInput, 'id_Produk', $idProduk);
        $this->session->set_flashdata('updateSuccess', 'Produk berhasil diperbarui');
        redirect('seller/product_seller');}
    }
        
        

    public function simpan_seller_profile()
    {
        $username = $this->input->post('username');
        $nama_Toko = $this->input->post('nama_Toko');
        $deskripsi = $this->input->post('deskripsi');
        $id = $this->session->userdata('id_Toko');
        $config['upload_path'] = './assets/image/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama_Toko', 'Nama Lengkap', 'required');     
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');     

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('seller/pengaturan');
        } else {
            if ($this->upload->do_upload('profile')) {
                $data_file = $this->upload->data();
                $data_edit = array(
                    'username' => $username,
                    'nama_Toko' => $nama_Toko,
                    'deskripsi' => $deskripsi,
                    'logo_Toko ' => $data_file['file_name']
                );
                $this->Madmin->update('tbl_toko', $data_edit,'id_Toko', $id);
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('seller/pengaturan');
            } else {
                $data_edit = array(
                    'username' => $username,
                    'nama_Toko' => $nama_Toko,
                    'deskripsi' => $deskripsi,
                  
                );
                $this->Madmin->update('tbl_toko', $data_edit,'id_Toko', $id);
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('seller/pengaturan');
            }
        }
    }
    public function logout() {
        log_message('debug', 'User is logging out.');
        $this->session->sess_destroy();
        if ($this->session->userdata('id_Toko') == null) {
            log_message('debug', 'Session destroyed successfully.');
        } else {
            log_message('debug', 'Failed to destroy session.');
        }
        redirect('seller/login');
    }
    
    /*public function logout()
    {
        $this->session->session_destroy();
        redirect('seller/login_seller');
    }*/

    public function simpan_seller_kontak()
    {
        $email = $this->input->post('email');
        $noHP = $this->input->post('noHP');
        $id = $this->session->userdata('id_Toko');

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('noHP', 'npHP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('seller/pengaturan');
        } else {
            $data_edit = array(
                'email' => $email,
            );
            $this->Muser->update('tbl_toko', $data_edit, 'id_Toko', $id);
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
            redirect('seller/pengaturan');
        }
    
    }

    public function save_produk()
    {
        $idToko = $this->input->post('id_toko');
        $idkategori = $this->input->post('kategori');
        $namaProduk = $this->input->post('nama_produk');
        $hargaProduk = $this->input->post('harga');
        $stockProduk = $this->input->post('stock');
        $diskonProduk = $this->input->post('beratProduk');
        $deskripsi = $this->input->post('deskripsi');
        $tanggalExp = $this->input->post('kadaluarsa');
        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('fotoutama')) {
            $data_file = $this->upload->data();
            $data_insert = array(
                'id_Toko' => $idToko,
                'id_Kategori' => $idkategori,
                'nama_Produk' => $namaProduk,
                'foto_Produk' => $data_file['file_name'],
                'harga' => $hargaProduk,
                'stok' => $stockProduk,
                'diskon' => $diskonProduk,
                'deskripsi' => $deskripsi,
            );
            if(empty($data_insert)){
                $this->session->set_flashdata('emptyForm', 'Form tidak boleh kosong');
                redirect('produk/tambah/' . $idToko);
            }else{
                $this->Madmin->insert('tbl_produk', $data_insert);
                $this->session->set_flashdata('save_success', 'Data telah berhasil disimpan');
                redirect('produk/index/' . $idToko);
            }
        } else {
            redirect('produk/tambah/' . $idToko);
        }
    }
}
