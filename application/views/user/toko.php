<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Product</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    </head>

    <body class="w-full">
        <div class="w-4/5 mx-auto py-10 border-b-2 border-gray-200 mb-6">
            <div class="flex flex-row gap-10">
                <img src="<?php echo base_url('assets/image/card/1.jpg'); ?>" class="w-56 h-56 rounded-full" alt="profiltoko">
                <div class="flex flex-col justify-center w-8/12 font-sans">
                    <h1 class="font-bold text-4xl text-black">Toko Pak Danang</h1>
                    <h1 class="text-gray-600 font-md text-lg mb-4">Ngemplak, Sleman</h1>
                    <h1 class="text-black font-normal text-sm">Berikut ini adalah deskripsi Toko Pak Danang. Berikut ini adalah deskripsi Toko Pak Danang. Berikut ini adalah deskripsi Toko Pak Danang. Berikut ini adalah deskripsi Toko Pak Danang. Berikut ini adalah deskripsi Toko Pak Danang. Berikut ini adalah deskripsi Toko Pak Danang.</h1>
                </div>
            </div>
        </div>

        <div class="w-4/5 flex md:items-start mx-auto tracking-tight">
            <div class="p-4 whitespace-nowrap">
                <p class="text-black mr-4 md:mr-8 font-bold text-lg mb-6 mt-2">Filter</p>
                <form action="" method="">
                    <ul class="w-60 text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <div class="w-full px-4 py-2">
                            <p class="text-black mr-4 md:mr-8 mb-4 mt-4 font-bold text-md">Kategori</p>
                            <div class="flex items-center mb-2">
                                <input id="default-checkbox1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class=" ms-2 text-xs font-small text-gray-700 dark:text-gray-700">Makanan</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-checkbox2" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">Menu</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-checkbox3" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class=" ms-2 text-xs font-small text-gray-700 dark:text-gray-700">Bumbu Masak</label>
                            </div>
                            <div class="flex items-center mb-2 ">
                                <input id="default-checkbox4" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">Minuman Serbuk</label>
                            </div>
                        </div>

                        <div class="w-full px-4 py-2">
                            <p class="border-t border-bg-black"></p>
                            <p class="text-black mr-4 md:mr-8 mb-4 mt-4 font-bold text-md ">Kadaluwarsa</p>
                            <div class="flex items-center mb-2">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">7 Hari lagi</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">14 Hari lagi</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">21 Hari lagi</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">30 Hari lagi</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="default-radio-5" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">60 Hari lagi</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-radio-6" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">90 Hari lagi</label>
                            </div>
                            <button type="submit" class="text-white mb-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-small rounded-lg text-xs  w-14 h-6  text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">
                                Submit
                            </button>
                        </div>
                    </ul>
                </form>
            </div>


            <div class="p-4">
                <div class="flex flex-row justify-end mb-4">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="price" class="md:w-50 md:h-10 text-black bg-gray-200 hover:bg-gray-300 
                    focus:ring-2 focus:outline-gray-200 focus:ring-gray-200 font-normal rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center
                    dark:bg-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-600" type="button">Harga Terendah
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="price" class="z-10 hidden border border-gray-300 bg-white divide-y divide-gray-100 rounded-lg w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border border-bg-gray-300 rounded shadow-s" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:hover:text-black">Harga Terendah</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:hover:text-black">Produk Terlaris</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:hover:text-black">Diskon Terbesar</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col md:items-center w-full">
                    <div class="flex flex-row grid sm:grid-cols-2 md:grid-cols-3 md:flex-row md:items-center md:justify-between gap-5 mb-4 ">
                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produk - Variasi Produk - Sub Varian Produk</h5>
                                </a>
                                <p class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rp. 24.000</p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <p class="mb-0 text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. 30.000</p>
                                    <p class="text-sm font-bold text-red-500">20%</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;">21 Hari lagi | 1rb+ Terjual</h1>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="mt-4 mb-8">
                        <div class="inline-flex space-x-2">
                            <a href="#" class="mt-2 w-8 h-8 flex items-center justify-center text-sm font-medium text-green-600 bg-white rounded-full hover:bg-gray-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-white-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-400 dark:focus:ring-blue-500 dark:focus:text-white">
                                <span>
                                    <svg class="w-3 h-3 text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                    </svg>
                                </span>
                            </a>
                            <a href="#" aria-current="page" class="w-10 h-10 mt-1 flex items-center justify-center text-sm font-medium text-white bg-green-600 rounded-full focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-green-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:text-white">
                                <span>1</span>
                            </a>
                            <a href="#" class="w-12 h-12 flex items-center justify-center text-sm font-medium text-green-600 bg-white rounded-full hover:bg-gray-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-white-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-400 dark:focus:ring-blue-500 dark:focus:text-white">
                                <span>2</span>
                            </a>
                            <a href="#" class="w-12 h-12 flex items-center justify-center text-sm font-medium text-green-600 bg-white rounded-full hover:bg-gray-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-white-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-400 dark:focus:ring-blue-500 dark:focus:text-white">
                                <span>3</span>
                            </a>
                            <a href="#" class="mt-2 w-8 h-8 flex items-center justify-center text-sm font-medium text-green-600 bg-white rounded-full hover:bg-gray-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-white-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-400 dark:focus:ring-blue-500 dark:focus:text-white">
                                <span>
                                    <svg class="w-3 h-3 text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>


                </div>

            </div>



        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>

    </html>
</body>

</html>