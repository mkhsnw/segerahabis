<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="w-full">

    <div class="bg-gray-200 p-4 rounded text-xs flex flex-row md:justify-between mx-auto">
        <div class="text-center grow">
            <span class="mb-0 text-center items-center">
                Diskon 20% untuk Semua Produk Sebelum Waktu Habis! <a href="#" class="text-black font-bold">Beli Sekarang</a>
            </span>
        </div>

        <div class="mr-5">
            <a href="#" class="text-black mr-4 md:mr-8">Tentang Segerahabis</a>
            <a href="#" class="text-black">Buka Toko</a>
        </div>
    </div>

    <div class="w-4/5 mx-auto mt-2">
        <div class="flex md:flex-row md:items-center md:justify-between">
            <div class="mr-4">
                <a href="#">
                    <img class="w-30 h-6 absolute-left transform -translate-y-1/2 mt-7" src="<?php echo base_url('assets/image/logo.png'); ?>" alt="logo">
                </a>
            </div>

            <form class="flex-grow flex-row mx-2 ">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-white-700 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-200 dark:hover:bg-gray-400 dark:focus:ring-white dark:text-black dark:border-gray-300" type="button">
                        Semua Kategori
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-200">
                        <ul class="py-2 text-sm text-white-700 dark:text-black-200" aria-labelledby="dropdown-button">
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:bg-white-600 dark:hover:text-white-800">Makanan</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:bg-white-600 dark:hover:text-white-800">Minuman</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:bg-white-600 dark:hover:text-white-800">Bumbu Masak</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-300 dark:hover:bg-white-600 dark:hover:text-white-800">Minuman Serbuk</button></li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-white-200 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-white-200 focus:border-white-500 dark:bg-white-700 dark:border-s-white-700  dark:border-white-600 dark:placeholder-gray-400 dark:text-black dark:focus:border-white" placeholder="Cari Sekarang Sebelum Kehabisan" required />
                        <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-800 rounded-e-lg border border-white-700 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-white-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            <div class="flex items-center space-x-4 ml-5 absolute-right-5ml-8">

                <div class="flex items-center md:justify-between space-x-4  ml-8">
                    <a href="#" class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-2 w-6 h-6 mx-auto mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <p class="text-black mr-4 md:mr-8 font-lg text-sm">Keranjang</p>
                    </a>
                </div>

                <div class="flex items-center md:justify-between space-x-4">
                    <a href="#" class="flex items-center gap-2 ">
                        <img class="rounded-full w-8 h-8" src="<?php echo base_url('assets/image/Profille/1.jpg'); ?>" alt="profille">
                        <p class="text-black mr-4 md:mr-8 font-lg text-sm">Danang</p>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>