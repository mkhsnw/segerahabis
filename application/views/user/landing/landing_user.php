<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing User</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>

        .hemat {
            width: 700px;
        }

    </style>
</head>

<body class="w-full">

    <div class="overflow-auto flex flex-col w-3/4 mx-auto py-20 px-10 bg-cover bg-center rounded-xl mt-6 gap-6 bg-[url('<?php echo base_url('assets/image/landing/user/Landingpage_User_Banner_01.png') ?>')]">
        <h1 class="hemat font-semibold text-5xl text-white tracking-wide">

            Hemat dan Selamatkan Makanan dengan Segerahabis!
        </h1>
        <h1 class="font-medium text-xl mb-4 text-white w-7/12 opacity-80 ">
            Marketplace yang Menyediakan Makanan dan Minuman Instan Mendekati Kadaluarsa dengan Harga Terjangkau
        </h1>
        <a href="<?php echo site_url('user/'); ?>" class="text-sm font-medium text-white bg-yellow-400 rounded-lg px-4 py-2 hover:bg-yellow-500 w-60 text-center">
            Belanja Sekarang Lebih Hemat
        </a>
    </div>


    <div class="w-3/4 flex flex-row grid grid-cols-2 gap-4 mx-auto py-20">

        <img class="sm:w-6/12 lg:w-11/12 aspect-video bg-red-900 rounded-xl object-cover object-center" src="<?php echo base_url('assets/image/landing/user/FoodWaste_02.png') ?>" alt="image description">

        <div class="flex flex-col gap-6 py-6">
            <h1 class="font-bold text-black text-4xl w-10/12">
                Jutaan Ton Makanan Terbuang Setiap Tahunnya
            </h1>
            <h1 class="font-normal text-gray-600 text-sm w-10/12">
                Setiap tahunnya, jutaan ton makanan terbuang sia-sia, sementara banyak orang masih berjuang untuk memenuhi kebutuhan sehari-hari. Makanan dan minuman instan yang mendekati kadaluarsa sering kali dibuang meski masih layak konsumsi, menciptakan limbah dan pemborosan.
            </h1>
        </div>
    </div>

    <div class="w-full bg-green-50 py-20">
        <div class="w-3/4 mx-auto justify-center">
            <div class="w-full flex mx-auto justify-center gap-1 items-center text-center">
                <h1 class="text-green-600 font-sans font-bold text-4xl tracking-tight">
                    Segerahabis
                </h1>
                <h1 class="text-black font-sans font-bold text-4xl">
                    Hadir
                </h1>
            </div>
            <h1 class="text-black font-sans font-bold text-4xl text-center justify-center mb-10">Menjadi Solusi</h1>
            <div class="flex flex-row grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 mt-10 gap-2">
                <div class="flex flex-col items-center">

                    <img class="mt-6 w-24 rounded-xl p-1 aspect-square object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Solusi_01.png') ?>" alt="image description">

                    <h1 class="mt-4 mb-2 font-bold w-44 text-center leading-tight">Lebih Hemat Dari Harga Normal</h1>
                    <h1 class="text-center leading-tight w-56 text-gray-600 text-sm">Dapatkan makanan & minuman instan favoritmu dengan harga murah di Segerahabis.</h1>
                </div>
                <div class="flex flex-col items-center">

                    <img class="mt-6 w-24 rounded-xl p-1 aspect-square object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Solusi_02.png') ?>" alt="image description">

                    <h1 class="mt-4 mb-2 font-bold w-48 text-center leading-tight">Produk berkualitas yang masih aman dikonsumsi</h1>
                    <h1 class="text-center leading-tight w-56 text-gray-600 text-sm">Produk Mendekati Kadaluarsa, aman dikonsumsi, dan telah diperiksa dengan cermat.</h1>
                </div>
                <div class="flex flex-col items-center">

                    <img class="mt-6 w-24 rounded-xl p-1 aspect-square object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Solusi_03.png') ?>" alt="image description">

                    <h1 class="mt-4 mb-2 font-bold w-44 text-center leading-tight">Pengurangan limbah makanan</h1>
                    <h1 class="text-center leading-tight w-56 text-gray-600 text-sm">Belanja di Segerahabis bantu lindungi lingkungan dengan mengurangi sampah makanan.</h1>
                </div>
                <div class="flex flex-col items-center">

                    <img class="mt-6 w-24 rounded-xl p-1 aspect-square object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Solusi_04.png') ?>" alt="image description">

                    <h1 class="mt-4 mb-2 font-bold w-48 text-center leading-tight">Pilih beragam makanan dan minuman</h1>
                    <h1 class="text-center leading-tight w-56 text-gray-600 text-sm">Temukan berbagai makanan & minuman instan favoritmu di Segerahabis dengan harga hemat.</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-20 ">
        <div class="flex mx-auto items-center justify-center gap-2">
            <h1 class="text-black font-sans font-bold text-4xl ">
                Cara Belanja
            </h1>
            <h1 class="text-black font-sans font-bold text-4xl ">
                di
            </h1>
            <h1 class="text-green-600 font-sans font-bold text-4xl tracking-tight">
                Segerahabis
            </h1>
        </div>
        <div class="flex flex-row grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 mt-10 gap-2">
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square p-1 object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Belanja_01.png') ?>" alt="image description">

                <h1 class="mt-4 mb-6 font-bold w-32 text-center leading-none">Pilih Produk</h1>
                <h1 class="text-center leading-tight w-10/12 w-56  text-gray-600 text-sm">Jelajahi berbagai pilihan makanan dan minuman instan yang tersedia di website kami.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square p-1 object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Belanja_02.png') ?>" alt="image description">

                <h1 class="mt-4 mb-6 font-bold w-48 text-center leading-none">Tambah ke Keranjang</h1>
                <h1 class="text-center leading-tight w-9/12  w-56 text-gray-600 text-sm">Pilih Produk yang Anda inginkan dan tambahkan ke keranjang belanja.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square p-1 object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Belanja_03.png') ?>" alt="image description">

                <h1 class="mt-4 mb-6 font-bold w-44 text-center leading-none">Checkout dan Bayar</h1>
                <h1 class="text-center leading-tight w-9/12  w-56 text-gray-600 text-sm">Lakukan Proses checkout dan pilih metode pembayaran yang Anda inginkan.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square p-1 object-center" src="<?php echo base_url('assets/image/landing/user/Segerahabis_Belanja_04.png') ?>" alt="image description">

                <h1 class="mt-4 mb-6 font-bold w-32 text-center leading-none">Terima Pesan</h1>
                <h1 class="text-center leading-tight w-10/12 w-56  text-gray-600 text-sm">Pesanan Anda akan dikemas dengan aman dan dikirimkan ke alamat Anda secepat mungkin.</h1>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-600 py-20 mb-20">
        <div class="flex flex-col w-3/4 mx-auto justify-center items-center text-center gap-10">
            <h1 class="text-center text-white font-bold text-4xl flex items-center justify-center mx-auto" style="width: 600px;">
                Belanja Sekarang dan Hemat Lebih Banyak di Segerahabis
            </h1>
            <a href="<?php echo site_url('user/'); ?>" class="text-sm font-medium text-white bg-yellow-400 rounded-lg px-12 py-2 hover:bg-yellow-500 w-60 text-center justify-center">
                Belanja Sekarang
            </a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>