<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="bg-gray-200 p-4 rounded text-xs flex flex-row justify-between mx-auto ">
        <div class="text-center grow">
            <span class="mb-0 text-center items-center">
                Tetap Dapatkan Keuntungan Dengan Jual Produk yang Mendekati Kadaluwarsa
            </span>
        </div>

        <div class="mr-5">
            <a href="#" class="text-black mr-4 md:mr-8">Tentang Segerahabis</a>
            <a href="#" class="text-black">Coba Belanja</a>
        </div>
    </div>

    <!-- -->
    <div class="bg-white border-b-2 border-bg-black p-4 rounded shadow shadow-xs text-xs flex flex-row justify-between mx-auto items-center">
        <div class="text-center grow">
            <span class="mb-0 text-center items-center">
                <a href="<?php echo site_url('seller/dashboard_seller')?>">
                    <img class="w-auto h-8 mr-2" src="<?php echo base_url('assets/image/logo_seller.png'); ?>" alt="logo">
                </a>
            </span>
        </div>

        <div class="mr-5 flex flex-row items-center gap-2">
            <img class="rounded-full w-10 h-10" src="<?php echo base_url('assets/image/profile/' . $user->logo_Toko); ?>" alt="profile">
            <a href="<?php echo site_url('seller/pengaturan'); ?>" class="text-black font-semibold text-base"><?php echo $user->nama_Toko ?></a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>