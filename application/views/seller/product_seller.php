<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Seller</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>

    </style>
</head>

<body class="bg-gray-100">

    <div class="flex flex-row w-full mx-auto">
        <aside id="default-sidebar" class="flex-col left-0 z-10 xs:invisible md:visible md:w-64 h-screen sticky" aria-label="Sidebar">
            <div class="h-full px-3 py-4 bg-white dark:bg-white border-r-2 border-bg-gray-600 shadow shadow-lg">
                <ul class="space-y-0 font-medium">
                    <li>
                        <a href="<?php echo site_url('seller/dashboard_seller'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>

                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/product_seller'); ?>" aria-current="page" class="flex text-lg font-bold items-center p-2 text-green-700 rounded-lg dark:text-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/seller_pesanan'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/pengaturan'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/logout'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-red-700 
                            dark:hover:bg-red-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="flex flex-col h-screen w-full px-6 py-8 bg-gray-100 overflow-y-auto">
            <p class="text-black font-bold text-3xl mb-8">Produk</p>
            <div class="w-full flex flex-col">
                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white">
                    <div class="w-full p-4 flex flex-col">
                        <div class="flex flex-col w-full">

                            <div class="flex flex-row w-full gap-2 justify-between mb-2 overflow-auto py-2">

                                <form class="w-1/2">
                                    <div class="flex">
                                        <div class="relative w-full tracking-wide">
                                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-white-200 rounded-lg 
                                        border-1 border border-gray-300 focus:ring-white-200 focus:border-white-500 dark:bg-white-700 dark:border-s-white-700
                                         dark:border-black-600 dark:placeholder-gray-400 dark:text-black dark:focus:border-white" placeholder="Cari ID Order" />
                                            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-800 rounded-e-lg 
                                        border border-white-700 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-green-700 
                                        dark:hover:bg-green-800 dark:focus:ring-white-800">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>





                                <div class="flex flex-row gap-3 items-center h-auto">
                                    <div class="flex w-full items-center overflow-auto">
                                        <a href="<?php echo site_url('seller/seller_add_product'); ?>" class="overflow-auto w-full tracking-wide flex items-center gap-2 bg-green-800 border border-green-700 rounded-lg px-3 py-0 
                                            hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">
                                            <p class="text-2xl mb-1 font-bold text-white ">+</p>
                                            <p class="text-sm font-medium text-white tracking-wide">Tambah</p>
                                        </a>
                                    </div>

                                    <div>
                                        <button id="dropdownDefaultButton" data-dropdown-toggle="kategori" class="w-full text-black text-sm bg-gray-100 border-2 border-bg-black 
                                            hover:bg-gray-200 focus:ring-1 focus:outline-none 
                                            focus:ring-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:bg-gray-100 dark:hover:bg-gray-200 
                                            dark:focus:ring-white" type="button">
                                            Kategori
                                            <div class="w-auto absolute-right">
                                                <svg class="w-2.5 h-2.5 ms-2  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </div>
                                        </button>
                                        <!-- Dropdown kategori -->
                                        <div id="kategori" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow  w-auto border-2 border-bg-gray-400">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="default-checkbox1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 
                                                        dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="" class=" ms-2 text-xs font-small text-gray-700 ">Makanan</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="default-checkbox2" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 
                                                        dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 ">Menu</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="default-checkbox3" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 
                                                        dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class=" ms-2 text-xs font-small text-gray-700 ">Bumbu Masak</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="default-checkbox4" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 
                                                        dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 ">Minuman Serbuk</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <button id="dropdownDefaultButton" data-dropdown-toggle="kadaluwarsa_seller" class="w-full text-black text-sm bg-gray-100 border-2 border-bg-black 
                                            hover:bg-gray-200 focus:ring-1 focus:outline-none 
                                            focus:ring-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center " type="button">
                                            Kadaluwarsa
                                            <div class="w-auto absolute-right">
                                                <svg class="w-2.5 h-2.5 ms-2  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </div>
                                        </button>
                                        <!-- Dropdown kategori -->
                                        <div id="kadaluwarsa_seller" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 w-auto border-2 border-bg-gray-400">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller1" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">7 Hari lagi</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller2" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">14 Hari lagi</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller3" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">21 Hari lagi</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller4" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">30 Hari lagi</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller5" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">60 Hari lagi</label>
                                                    </div>
                                                </li>
                                                <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">
                                                    <div class="flex items-center">
                                                        <input id="kadaluwarsa_seller6" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 
                                                        focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                                        <label for="" class="ms-2 text-xs font-small text-gray-700 dark:text-gray-700">90 Hari lagi</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-auto rounded-lg">
                                <table class="w-full">
                                    <thead class="bg-gray-200 w-full">
                                        <tr class="">
                                            <th class="py-3 px-3 text-left tracking-wide">No</th>
                                            <th class="py-3 px-3 text-left tracking-wide">NAMA PRODUK</th>
                                            <th class="py-3 px-3 text-left tracking-wide">KATEGORI</th>
                                            <th class="py-3 px-3 text-left tracking-wide">STOK</th>
                                            <th class="py-3 px-3 text-left tracking-wide">HARGA</th>
                                            <th class="py-3 px-3 text-left tracking-wide">DISKON</th>
                                            <th class="py-3 px-3 text-left tracking-wide">KADALUWARSA</th>
                                            <th class="py-3 px-3 text-left tracking-wide">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($produk as $val) { ?>
                                            <tr class="border-b-2 border-bg-black">
                                                <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $no++ ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->nama_Produk ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->nama_Kat ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->stock ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->harga ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->diskon ?></td>
                                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->tanggal_Exp ?></td>
                                                <td class="px-3 py-5 ">
                                                    <div class="flex flex-row gap-5">
                                                        <a href="<?php echo site_url('seller/seller_edit_product/' . $val->id_Produk); ?>">
                                                            <div class="flex tracking-wide w-full gap-3">
                                                                <div class="flex bg-green-800 gap-1 items-center border border-green-800 rounded-lg px-4 py-2 hover:bg-green-900 
                                                    focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-green-700 dark:hover:bg-green-800 
                                                    dark:focus:ring-green-800">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-white">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                                    </svg>
                                                                    <h1 class="text-sm font-medium text-white">Edit</h1>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!--<div class="flex">
                                                   <a href="" onclick="return confirm('Yakin Akan Hapus Data Ini?')">
                                                    <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="block flex bg-white gap-1 items-center border border-red-800 
                                                    rounded-lg px-4 py-2 hover:bg-red-200 
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
                                                    dark:focus:ring-red-800" type="button" >
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-800">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg></span>
                                                        <span class="text-sm font-medium text-red-800">Hapus</span>
                                                </a>
                                                </div>-->

                                                        <div class="flex">

                                                            <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="block flex bg-white gap-2 items-center border border-red-800 
                                                                    rounded-lg px-3 py-1 hover:bg-red-200 
                                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
                                                                    dark:focus:ring-red-800" type="button">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-800">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                                    </svg></span>
                                                                <span class="text-sm font-medium text-red-800">Hapus</span>
                                                            </button>



                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
                                                        justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                            <div class="relative p-6 w-full max-w-sm h-full md:h-auto">
                                                                
                                                                <div class="relative md:p-6 sm:p-4 border-2 border-gray-300 text-center bg-white rounded-lg shadow dark:bg-gray-800 ">
                                                                    <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                    <p class="text-black font-bold text-lg mb-4">Hapus Produk</p>
                                                                    <p class="mb-4 text-gray-500 dark:text-gray-300">INDOMIE Goreng Jumbo Rasa Odading Mang Oleh</p>
                                                                    <div class="flex justify-center items-center space-x-4">
                                                                        <button data-modal-toggle="deleteModal" type="button" class="py-2 px-5 text-sm font-medium text-black bg-white rounded-lg border 
                                                                    border-gray-600 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 
                                                                    hover:text-black focus:z-10 dark:bg-gray-700 dark:text-black dark:border-gray-500 
                                                                    dark:hover:text-black dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                            Batal
                                                                        </button>
                                                                        <a href="<?php echo site_url('seller/delete/' . $val->id_Produk); ?>">
                                                                            <button id="gagalButton" data-modal-target="gagal" data-modal-toggle="gagal" class="block text-sm font-medium text-white bg-red-800 border rounded-lg px-4 py-2 hover:bg-red-900" type="button">
                                                                                Hapus</button>
                                                                        </a>

                                                                        
                                                                        <!--
                                                                        <div id="gagal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                                                Modal content -
                                                                                <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
                                                                                    <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                                                        </svg>
                                                                                        <span class="sr-only">Gagal</span>
                                                                                    </div>
                                                                                    <p class=" text-lg font-bold text-gray-900">Gagal Menambahkan Produk</p>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>

                            <div class="flex px-2 py-4 justify-between items-center whitespace-nowrap overflow-auto">
                                <div class="flex gap-1">
                                    <h1 class="font-normal text-xs text-gray-500">Menampilkan</h1>
                                    <h1 class="font-semibold text-xs text-black ">1 - 10</h1>
                                    <h1 class="font-normal text-xs text-gray-500">dari</h1>
                                    <h1 class="font-semibold text-xs text-black">96</h1>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="inline-flex -space-x-px text-sm">
                                        <li>
                                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 text-black-600 border border-gray-300 bg-green-700 dark:border-gray-700 dark:bg-green-700 dark:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    </div>






    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>