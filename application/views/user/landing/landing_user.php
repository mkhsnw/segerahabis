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
</head>

<body class="w-full">
    <div class="overflow-auto flex flex-col w-3/4 mx-auto py-20 px-10 bg-cover bg-center rounded-xl mt-6 gap-6 bg-[url('https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-healthy-fruits-and-vegetables-green-leaves-literary-green-banner-image_172881.jpg')]">
        <h1 class="font-semibold text-6xl text-white w-3/4 tracking-wide">
            Hemat dan Selamatkan Makanan dengan Segerahabis!
        </h1>
        <h1 class="font-medium text-xl mb-4 text-white w-7/12 opacity-80 ">
            Marketplace yang Menyediakan Makanan dan Minuman Instan Mendekati Kadaluarsa dengan Harga Terjangkau
        </h1>
        <a href="<?php echo site_url('user/daftar'); ?>" class="text-sm font-medium text-white bg-green-600 rounded-lg px-4 py-2 hover:bg-green-900 w-60 text-center">
            Belanja Sekarang Lebih Hemat
        </a>
    </div>


    <div class="w-3/4 flex flex-row grid grid-cols-2 gap-4 mx-auto py-20">
        <img class="sm:w-6/12 lg:w-11/12 aspect-video bg-red-900 rounded-xl" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
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
                    <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                    <h1 class="mt-4 mb-2 font-bold w-1/2 text-center leading-tight">Lebih Hemat Dari Harga Normal</h1>
                    <h1 class="text-center leading-tight w-11/12 text-gray-600 text-sm">Dapatkan makanan & minuman instan favoritmu dengan harga murah di Segerahabis.</h1>
                </div>
                <div class="flex flex-col items-center">
                    <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                    <h1 class="mt-4 mb-2 font-bold w-3/4 text-center leading-tight">Produk berkualitas yang masih aman dikonsumsi</h1>
                    <h1 class="text-center leading-tight w-10/12 text-gray-600 text-sm">Produk Mendekati Kadaluarsa, aman dikonsumsi, dan telah diperiksa dengan cermat.</h1>
                </div>
                <div class="flex flex-col items-center">
                    <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                    <h1 class="mt-4 mb-2 font-bold w-1/2 text-center leading-tight">Pengurangan limbah makanan</h1>
                    <h1 class="text-center leading-tight w-11/12 text-gray-600 text-sm">Belanja di Segerahabis bantu lindungi lingkungan dengan mengurangi sampah makanan.</h1>
                </div>
                <div class="flex flex-col items-center">
                    <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                    <h1 class="mt-4 mb-2 font-bold w-3/4 text-center leading-tight">Pilih beragam makanan dan minuman</h1>
                    <h1 class="text-center leading-tight w-11/12 text-gray-600 text-sm">Temukan berbagai makanan & minuman instan favoritmu di Segerahabis dengan harga hemat.</h1>
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
                <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                <h1 class="mt-4 mb-6 font-bold w-1/2 text-center leading-none">Pilih Produk</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-sm">Jelajahi berbagai pilihan makanan dan minuman instan yang tersedia di website kami.</h1>
            </div>
            <div class="flex flex-col items-center">
                <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                <h1 class="mt-4 mb-6 font-bold w-3/4 text-center leading-none">Tambah ke Keranjang</h1>
                <h1 class="text-center leading-tight w-9/12 text-gray-600 text-sm">Pilih Produk yang Anda inginkan dan tambahkan ke keranjang belanja.</h1>
            </div>
            <div class="flex flex-col items-center">
                <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                <h1 class="mt-4 mb-6 font-bold w-3/4 text-center leading-none">Checkout dan Bayar</h1>
                <h1 class="text-center leading-tight w-9/12 text-gray-600 text-sm">Lakukan Proses checkout dan pilih metode pembayaran yang Anda inginkan.</h1>
            </div>
            <div class="flex flex-col items-center">
                <img class="mt-6 w-4/12 rounded-xl aspect-square object-cover object-center" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?cs=srgb&dl=pexels-chanwalrus-958545.jpg&fm=jpg" alt="image description">
                <h1 class="mt-4 mb-6 font-bold w-1/2 text-center leading-none">Terima Pesan</h1>
                <h1 class="text-center leading-tight w-10/12 text-gray-600 text-sm">Pesanan Anda akan dikemas dengan aman dan dikirimkan ke alamat Anda secepat mungkin.</h1>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-600 py-20 mb-20">
        <div class="flex flex-col w-3/4 mx-auto justify-center items-center text-center gap-10">
            <h1 class="text-center text-white font-bold text-4xl flex items-center justify-center mx-auto w-7/12">
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