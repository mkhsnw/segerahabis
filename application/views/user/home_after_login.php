<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .product-name {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Jumlah maksimum baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }
    </style>

</head>

<body class="w-full">

    <div class="relative mx-auto sm:w-4/5 mt-4">
        <div class="slide_gambar">
            <div id="gallery" class="relative mx-auto w-full fixed" data-carousel="slide">

                <!-- Carousel wrapper -->
                <div class="relative h-96 w-full overflow-hidden rounded-xl ">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url('assets/image/slider/Segerahabis_Slider_01.png'); ?>" class="absolute block object-cover object-center w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="1">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="<?php echo base_url('assets/image/slider/Segerahabis_Slider_02.png'); ?>" class="absolute block object-cover object-center w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="2">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        <div class=" w-full items-start mt-4 ">
            <h1 class="mb-4 text-sm text-gray-900 uppercase dark:text-gray-500 font-bold text-xl" style="font-family: 'Inter', sans-serif;">Kategori</h1>
            <div class="flex flex-row items-center gap-4 grid md:grid-cols-4 xs:grid-cols-2 w-full">
                <?php
                $no = 1;
                foreach ($kategori as $val) {
                ?>


                    <a href="<?php echo site_url('user/kategori/' . $val->id_Kategori) ?>"><img class="flex relative h-28 object-cover object-center w-full aspect-video rounded-lg hover:scale-105 duration-75" src="<?php echo base_url('assets/image/Kategori/slide'. $no . '.png'); ?>" alt="image description"></a>


                <?php
                $no++; }
                ?>
            </div>
        </div>


        <!-- Produk Terlaris --->
        <div class="mt-4 mb-4">
            <h1 class="mb-4 text-xl text-gray-900 uppercase font-bold" style="font-family: 'Inter', sans-serif;">Semua Produk</h1>
            <div class="flex flex-row items-center gap-4 grid md:grid-cols-4 sm:grid-cols-2 items-start">
                <?php foreach ($produk as $val) { ?>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  container hover:scale-105 duration-75">
                        <a href="<?php echo site_url('user/product/' . $val->id_Produk) ?>">
                            <div class="overflow-hidden relative">
                                <img class="aspect-square w-full h-full rounded-t-lg object-cover object-center" src="<?php echo base_url('assets/foto_produk/' . $val->foto_Produk); ?>" alt="" />
                            </div>
                            <div class="p-5">
                                <div>
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900  flex product-name h-10 text-ellipsis overflow-hidden">
                                        <?php echo $val->nama_Produk ?>
                                    </h5>
                                </div>
                                <p class="text-xl font-bold tracking-tight text-gray-900 ">Rp. <?php echo $val->hargaDiskon ?></p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400  line-through">Rp. <?php echo $val->harga ?></p>
                                    <p class="text-sm font-bold text-red-500"><?php echo $val->diskon ?>%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 " style="font-family: 'Inter', sans-serif;"><?php echo $val->sisaHari ?> Hari Lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="text-center mb-10 mt-10 mx-auto my-4">
            <a href="#" class="text-sm font-medium text-green-600 bg-white border border-green-800 rounded-lg px-4 py-2 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 ">
                Muat Lebih Banyak</a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>