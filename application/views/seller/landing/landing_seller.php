<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Seller</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .gambar-1 {
            width: 500px;
        }

        .ijo-1 {
            text-align-last: center;
        }
    </style>
</head>

<body class="w-full">

    <div class="overflow-auto flex flex-col w-3/4 mx-auto py-20 px-10 rounded-xl mt-6 gap-6 bg-cover bg-center bg-[url('<?php echo base_url('assets/image/landing/seller/LandingPage_Seller_01.png') ?>')]">
        <h1 class="font-semibold text-6xl text-white tracking-wide" style="width: 800px;">

            Jual Produk Hampir Kadaluwarsa dan Tetap Dapat Untung di Segerahabis!
        </h1>
        <h1 class="font-medium text-xl text-white w-7/12 opacity-80 mb-4">
            Jual Makanan dan Minuman Instan Mendekati Kadaluwarsa dengan Cepat di Segerahabis
        </h1>

        <a href="<?php echo site_url('seller/daftar'); ?>" class="text-sm font-medium text-white bg-yellow-400 rounded-lg px-3 py-2 hover:bg-yellow-500 w-60 text-center">

            Mulai Jualan Sekarang
        </a>
    </div>


    <div class="w-3/4 flex flex-row grid grid-cols-2 gap-4 mx-auto py-20">

        <img class="gambar-1 h-full aspect-auto object-cover object-center bg-gray-500 rounded-xl" src="<?php echo base_url('assets/image/landing/seller/Tantangan.png') ?>" alt="image description">

        <div class="flex flex-col gap-6 py-6">
            <h1 class="font-bold text-black text-3xl w-full">
                Menghadapi Tantangan Produk Mendekati Kadaluwarsa
            </h1>
            <div class="w-10/12 flex flex-col justify-center">
                <div class="flex gap-2 ">
                    <h1 class="font-bold text-sm text-white rounded-full w-6 h-6 text-center bg-green-600">1</h1>
                    <h1 class="font-bold text-sm text-green-600">Stok Berlebih</h1>
                </div>
                <div class="">
                    <h1 class="font-normal text-gray-600 text-sm w-9/12 ml-8 tracking-tight">
                        Kesulitan menjual makanan dan minuman instan yang mendekati tanggal kadaluwarsa.
                    </h1>
                </div>
            </div>
            <div class="w-10/12 flex flex-col justify-center">
                <div class="flex gap-2 ">
                    <h1 class="font-bold text-sm text-white rounded-full w-6 h-6 text-center bg-green-600">2</h1>
                    <h1 class="font-bold text-sm text-green-600">Kerugian Finansial</h1>
                </div>
                <div class="">
                    <h1 class="font-normal text-gray-600 text-sm w-10/12 ml-8 tracking-tight">
                        Potensial kerugian karena produk tidak terjual dan berakhir sebagai sampah.
                    </h1>
                </div>
            </div>
            <div class="w-10/12 flex flex-col justify-center">
                <div class="flex gap-2 ">
                    <h1 class="font-bold text-sm text-white rounded-full w-6 h-6 text-center bg-green-600">3</h1>
                    <h1 class="font-bold text-sm text-green-600">Sampah Makanan</h1>
                </div>
                <div class="">
                    <h1 class="font-normal text-gray-600 text-sm w-10/12 ml-8 tracking-tight">
                        Meningkatnya jumlah sampah makanan yang merugikan lingkungan.
                    </h1>
                </div>
            </div>

        </div>
    </div>


    <div class="w-screen bg-green-50 py-20">
        <div class="mx-auto justify-center text-center" style="width: 600px;">

            <div class="w-full flex mx-auto justify-center gap-2 items-center text-center">
                <h1 class="text-green-600 font-sans font-bold text-3xl tracking-tight">
                    Segerahabis
                </h1>
                <h1 class="text-black font-sans font-bold text-3xl">
                    adalah Solusi Produk
                </h1>
            </div>
            <h1 class="text-black font-sans font-bold text-3xl text-center">
                Mendekati Kadaluwarsa
            </h1>
            <div class="ijo-1 px-4 w-full font-normal text-gray-600 text-sm tracking-tight text-justify mt-6">
                <h1>Segerahabis hadir sebagai solusi inovatif bagi anda yang ingin menjual produk mendekati kadaluwarsa dengan cepat dan efektif. Kami menyediakan platform marketplace yang fokus pada penjualan makanan dan minuman instan dengan harga yang lebih murah, membantu Anda mengurangi kerugian dan menyelamatkan produk Anda.</h1>
            </div>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-20 ">
        <div class="flex mx-auto items-center justify-center gap-3">
            <h1 class="text-black font-sans font-bold text-3xl ">
                Mengapa Harus
            </h1>
            <h1 class="text-green-600 font-sans font-bold text-3xl tracking-tight">
                Segerahabis
            </h1>
        </div>
        <div class="flex flex-row grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 mt-10 gap-2">
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Mengapa_01.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-1/2 text-center leading-none text-base">Harga Kompetitif</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">
                    Tawarkan produk anda dengan harga lebih murah, menarik pembeli yang mencari penawaran terbaik.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Mengapa_02.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Jangkauan Luas</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Tawarkan produk Anda dengan harga lebih murah, menarik pembeli yang mencari penawaran terbaik.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Mengapa_03.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Ramah Lingkungan</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Berkontribusi mengurangi sampah makanan dengan menjual produk yang mendekati kadaluwarsa.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Mengapa_04.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Proses Mudah dan Cepat</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Mulai berjualan dengan mudah melalui platform kami yang user-friendly.</h1>
            </div>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-20">
        <div class="flex mx-auto items-center justify-center gap-2">
            <h1 class="text-black font-sans font-bold text-3xl ">
                Cara Berjualan
            </h1>
            <h1 class="text-black font-sans font-bold text-3xl ">
                di
            </h1>
            <h1 class="text-green-600 font-sans font-bold text-3xl tracking-tight">
                Segerahabis
            </h1>
        </div>
        <div class="flex flex-row grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 mt-10 gap-2">
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl ml-4  aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Berjualan_01.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-1/2 text-center leading-none text-base">Daftar</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">
                    Buat akun di Segerahabis secara gratis dalam beberapa langkah sederhana.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Berjualan_02.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Unggah Produk</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Tambahkan informasi produk Anda, termasuk deskriptif dan harga yang kompetitif.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Berjualan_03.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Kelola Pesanan</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Pantau dan kelola pesanan Anda melalui dashboard kami yang intuitif.</h1>
            </div>
            <div class="flex flex-col items-center">

                <img class="mt-6 w-24 rounded-xl aspect-square object-cover object-center" src="<?php echo base_url('assets/image/landing/seller/Segerahabis_Berjualan_04.png') ?>" alt="image description">

                <h1 class="mt-6 mb-2 font-bold w-3/4 text-center leading-none text-base">Terima Pembayaran</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-xs">Nikmati proses pembayaran yang mudah dan cepat.</h1>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-600 py-20 mb-20">
        <div class="flex flex-col w-3/4 mx-auto justify-center items-center text-center gap-10">
            <h1 class="text-center text-white font-bold text-3xl flex items-center justify-center mx-auto w-5/12">
                Daftar Sekarang dan Mulai Jual Produk Anda!
            </h1>

            <a href="<?php echo site_url('seller/daftar'); ?>" class="text-sm font-medium text-white bg-yellow-400 rounded-lg px-12 py-2 hover:bg-yellow-500 w-60 text-center justify-center">

                Jualan Sekarang
            </a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>