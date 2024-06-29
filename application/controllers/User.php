<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('Muser');
        $this->load->library('cart');
        $params = array('server_key' => 'SB-Mid-server-IuU__eOhyKnWulK6BeyzstEt', 'production' => false);
        $this->load->library('midtrans');
        $this->midtrans->config($params);
        $this->load->helper('url');
    }

    public function test()
    {
        $this->load->view('user/cart');
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
        foreach ($data['produk'] as $produk) {
            $sebelumDiskon = $produk->harga;
            $diskon = $produk->diskon;
            $hargaDiskon = $sebelumDiskon - ($sebelumDiskon * $diskon / 100);
            $produk->hargaDiskon = $hargaDiskon;
        }
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/home_after_login', $data);
        $this->load->view('user/footer/footer');
    }

    public function kategori($idKat)
    {
        $data['produk'] = $this->Muser->get_by_id('tbl_produk', array('id_Kategori' => $idKat))->result();
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
        $this->load->view('user/home_after_login', $data);
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


    public function all_product()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/all_product');
        $this->load->view('user/footer/footer');
    }

    public function cart()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $data['cart'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        $data['qtyItem'] = $this->cart->total_items();
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('user/footer/footer');
    }

    public function update_cart()
    {
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');

        log_message('debug', 'Update Cart: Rowid - ' . $rowid . ', Qty - ' . $qty);

        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );

        if ($this->cart->update($data)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function delete_cart($rowId)
    {
        $remove = $this->cart->remove($rowId);
        redirect('user/cart');
    }

    public function checkout()
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $data['cart'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        $data['qtyItem'] = $this->cart->total_items();
        $this->load->helper('toko');
        $data['ongkos'] = 0;
        $grouped_cart = [];

        foreach ($data['cart'] as $val) {
            $grouped_cart[$val['toko']][] = $val;
        }

        $data['grouped_cart'] = $grouped_cart;

        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/checkout', $data);
        $this->load->view('user/footer/footer');
    }

    public function product($idProduk)
    {
        if (empty($this->session->userdata('id_user'))) {
            redirect('user/login');
        }
        $data['user'] = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $data['produk'] = $this->Muser->get_by_id('tbl_produk', array('id_Produk' => $idProduk))->row_object();
        $currentDate = date('Y-m-d');

        $currentDate = date('Y-m-d');
        $tanggalExp = $data['produk']->tanggal_Exp;

        // Menghitung sisa hari antara tanggal sekarang dan tanggal expired
        $datetime1 = new DateTime($currentDate);
        $datetime2 = new DateTime($tanggalExp);
        $interval = $datetime1->diff($datetime2);
        $sisaHari = $interval->format('%r%a');
        $data['produk']->sisaHari = $sisaHari;

        // Menghitung harga setelah diskon
        $sebelumDiskon = $data['produk']->harga;
        $diskon = $data['produk']->diskon;
        $hargaDiskon = $sebelumDiskon - ($sebelumDiskon * $diskon / 100);
        $data['produk']->hargaDiskon = $hargaDiskon;

        $data['toko'] = $this->Muser->getProdukToko($idProduk)->row_object();
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();

        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login', $data);
        $this->load->view('user/product', $data);
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
        $data['kategori'] = $this->Muser->get_all_data('tbl_kategori')->result();
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
        if (empty($this->session->userdata('id_user'))) {
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
        $kota = $this->input->post('city');
        $nohp = $this->input->post('nohp');
        $alamat = $this->input->post('alamat');

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
                'alamat' => $alamat,
                'id_Kota' => $kota,
                'noHP' => $nohp
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
            } else {
                $this->session->set_flashdata('notValid', 'Email atau Password yang anda masukkan salah!');
                $this->load->view('user/login_user');
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
        $config['upload_path'] = './assets/image/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('nomor', 'Nomor HP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/profil_user');
        } else {
            if ($this->upload->do_upload('profile')) {
                $data_file = $this->upload->data();
                $data_edit = array(
                    'username' => $username,
                    'nama_User' => $namalengkap,
                    'email' => $email,
                    'noHP' => $noHP,
                    'foto' => $data_file['file_name']
                );
                $this->Muser->update('tbl_user', $data_edit, 'id_User', $id);
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('user/profil_user');
            } else {
                $data_edit = array(
                    'username' => $username,
                    'nama_User' => $namalengkap,
                    'email' => $email,
                    'noHP' => $noHP
                );
                $this->Muser->update('tbl_user', $data_edit, 'id_User', $id);
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('user/profil_user');
            }
        }
    }

    public function simpan_alamat()
    {
        $alamat = $this->input->post('alamat');
        $id = $this->session->userdata('id_user');

        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('detail', 'Detail Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notValid', 'Data yang anda masukkan tidak valid!');
            $this->load->view('user/address_user');
        } else {
            $data_edit = array(
                'alamat' => $alamat,
            );
            $this->Muser->update('tbl_user', $data_edit, 'id_User', $id);
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
            redirect('user/address_user');
        }
    }

    public function getProvince()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: f78fa597cd709a40f735828c7409c764"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data_json = json_decode($response, true);
        echo "<option value=''>Pilih Provinsi</option>";
        for ($i = 0; $i < count($data_json['rajaongkir']['results']); $i++) {
            echo "<option value='" . $data_json['rajaongkir']['results'][$i]['province_id'] . "'>" . $data_json['rajaongkir']['results'][$i]['province'] . "</option>";
        }
    }

    public function getCity($province)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=" . $province,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: f78fa597cd709a40f735828c7409c764"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        echo "<option value=''>Pilih Kota</option>";
        for ($i = 0; $i < count($data['rajaongkir']['results']); $i++) {
            echo "<option value='" . $data['rajaongkir']['results'][$i]['city_id'] . "'>" . $data['rajaongkir']['results'][$i]['city_name'] . "</option>";
        }
    }

    public function add_cart($idProduk)
    {
        $qty = $this->input->post('qty');
        $dataWhere = array('id_Produk' => $idProduk);
        $produk = $this->Muser->get_by_id('tbl_produk', $dataWhere)->row_object();
        $user = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
        $kota = $this->Muser->get_id_kota_by_toko($produk->id_Toko)->row_object();
        $sebelumDiskon = $produk->harga;
        $diskon = $produk->diskon;
        $hargaDiskon = $sebelumDiskon - ($sebelumDiskon * $diskon / 100);
        $produk->hargaDiskon = $hargaDiskon;
        $this->session->set_userdata('idpenjual', $kota->id_Kota);
        $this->session->set_userdata('tokoProduk', $produk->id_Toko);
        $data = array(
            'id' => $produk->id_Produk,
            'qty' => $qty,
            'price' => $produk->hargaDiskon,
            'name' => $produk->nama_Produk,
            'image' => $produk->foto_Produk,
            'toko' => $produk->id_Toko
        );
        $this->cart->insert($data);
        redirect('user/cart');
    }

    public function update_ongkir()
    {
        $this->load->helper('toko');
        $kurir = $this->input->post('kurir');
        $toko = $this->input->post('toko');
        $origin = $this->session->userdata('idpenjual');
        $total = 0;
        $ongkos = getOngkir($origin, $this->session->userdata('id_kota'), 1000, $kurir);
        $ongkosValue = $ongkos['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
        $this->session->set_userdata('ongkos_' . $toko, $ongkosValue);
        foreach ($this->cart->contents() as $item) {
            $total += $item['subtotal'];
        }
        $totalOngkos = 0;

        $grouped_cart = [];

        foreach ($this->cart->contents() as $val) {
            $grouped_cart[$val['toko']][] = $val;
        }

        foreach ($grouped_cart as $key => $val) {
            $ongkos = $this->session->userdata('ongkos_' . $key);
            $totalOngkos += $ongkos;
        }

        $total = $this->cart->total() + $totalOngkos + 1000 + 2000;

        $data = array(
            'ongkos' => $totalOngkos,
            'total' => $total
        );
        $this->session->set_userdata('total_ongkos', $totalOngkos);
        $this->session->set_userdata('kurir', $kurir);
        echo json_encode($data);
    }

    // public function proses_transaksi(){
    //     $user = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
    //     $kotaAsal = $this->session->userdata('idKotaPenjual');
    //     $kotaTujuan = $this->session->userdata('idKotaPembeli');
    //     $this->load->helper('toko');

    //     $ongkir = getOngkir($kotaAsal, $kotaTujuan, 1000, 'jne');

    //     $ongkir_value = $ongkir['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];

    //     $dataInput = array(
    //         'id_User' => $user->id_User,
    //         'id_toko' => $user->id_Kota,
    //         'tanggal_Order' => date('Y-m-d H:i:s'),
    //         'status_Order' => 'Menunggu Pembayaran',
    //         'kurir' => 'jne',
    //         'ongkir' => $ongkir_value,
    //     );
    //     $this->Muser->insert('tbl_order',$dataInput);
    //     $insert_id = $this->db->insert_id();

    //     $transaction_details = array(
    //         'order_id' => $insert_id,
    //         'gross_amount' => $this->cart->total() + $ongkir_value + 1000 + 2000
    //     );

    //     $item_details = [];
    //     foreach($this->cart->contents() as $item){
    //         $item_details[] = array(
    //             'id' => $item['id'],
    //             'price' => $item['price'],
    //             'quantity' => $item['qty'],
    //             'name' => $item['name']
    //         );
    //     }

    //     $item_details[] = array(
    //         'id' => 'ongkir',
    //         'price' => $ongkir_value,
    //         'quantity' => $item['qty'],
    //         'name' => 'Ongkir'
    //     );

    //     $credit_card['secure'] = true;

    //     $time = time();
    //     $custom_expiry = array(
    //         'start_time' => date("Y-m-d H:i:s O",$time),
    //         'unit' => 'hour',
    //         'duration' => 2
    //     );

    //     $transaction_data = array(
    //         'transaction_details' => $transaction_details,
    //         'item_details' => $item_details,
    //         'customer_details' => array(
    //             'first_name' => $user->nama_User,
    //             'email' => $user->email,
    //             'phone' => $user->noHP
    //         ),
    //         'expiry' => $custom_expiry
    //     );

    //     error_log(json_encode($transaction_data));
    // try {
    //     $snapToken = $this->midtrans->getSnapToken($transaction_data);
    //     if (!$snapToken) {
    //         throw new Exception('Failed to get Snap Token');
    //     }
    // } catch (Exception $e) {
    //     error_log($e->getMessage());
    //     echo json_encode(['error' => 'Failed to get Snap Token']);
    //     return;
    // }
    //     error_log($snapToken);
    //     return $snapToken;
    // }

    public function token()
    {
        try {
            $user = $this->Muser->get_by_id('tbl_user', array('id_User' => $this->session->userdata('id_user')))->row_object();
            $ongkos = $this->session->userdata('total_ongkos');
            $this->load->helper('toko');


            $item_details = [];
            $items_total = 0;

            // Add items from the cart to item details
            foreach ($this->cart->contents() as $item) {
                $item_details[] = array(
                    'id' => $item['id'],
                    'price' => $item['price'],
                    'quantity' => $item['qty'],
                    'name' => $item['name']
                );
                $items_total += $item['price'] * $item['qty'];
            }

            // Add shipping cost as an item detail


            // Add additional costs as item details
            $admin_fee = 1000;
            $application_fee = 2000;

            $item_details[] = array(
                'id' => 'admin_fee',
                'price' => $admin_fee,
                'quantity' => 1,
                'name' => 'Admin Fee'
            );

            $item_details[] = array(
                'id' => 'ongkos',
                'price' => $ongkos,
                'quantity' => 1,
                'name' => 'ongkos'
            );

            $item_details[] = array(
                'id' => 'application_fee',
                'price' => $application_fee,
                'quantity' => 1,
                'name' => 'Application Fee'
            );

            // Calculate the total gross amount
            $gross_amount = $items_total + $admin_fee + $application_fee + $ongkos;

            $transaction_details = array(
                'order_id' => rand(),
                'gross_amount' => $gross_amount // no decimal allowed for credit card
            );

            // Prepare transaction data
            $transaction_data = array(
                'transaction_details' => $transaction_details,
                'item_details' => $item_details,
                'customer_details' => array(
                    'first_name' => $user->nama_User,
                    'email' => $user->email,
                    'phone' => $user->noHP
                ),
            );

            $insert_data = array(
                'id_User' => $user->id_User,
                'id_Toko' => $this->session->userdata('tokoProduk'),
                'tanggal_Order' => date('Y-m-d H:i:s'),
                'status_Order' => 'Menunggu Pembayaran',
                'kurir' => $this->session->userdata('kurir'),
                'ongkir' => $ongkos,
            );
            $this->Muser->insert('tbl_order', $insert_data);

            // Get Midtrans snap token
            $snapToken = $this->midtrans->getSnapToken($transaction_data);
            error_log($snapToken);
            echo $snapToken;
        } catch (Exception $e) {
            error_log('Error: ' . $e->getMessage());
            show_error($e->getMessage(), 500);
        }
    }


    public function finish()
    {
        $result = json_decode($this->input->post('result_data'));
        if ($result->transaction_status == 'settlement') {
            $id = $result->order_id;
            $dataUpdate = array(
                'status_Order' => 'Pembayaran Berhasil',
            );
            $this->Muser->update('tbl_order', $dataUpdate, 'id_Order', $id);
            redirect('user');
        }
    }

    public function landing_user() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/landing/header/header');
        $this->load->view('user/landing/landing_user');
        $this->load->view('user/landing/footer/footer');
    }

    public function toko() {
        // Method untuk menampilkan halaman dashboard beranda
        $this->load->view('user/header/header_after_login');
        $this->load->view('user/toko');
        $this->load->view('user/footer/footer');
    }
}
