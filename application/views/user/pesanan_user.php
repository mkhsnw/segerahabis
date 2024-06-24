<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan User</title>
</head>

<body>
    <div class="flex flex-row w-4/5 items-start gap-8 mx-auto mt-4 overflow-auto">
        <div class="flex col w-3/12 overflow-auto whitespace-nowrap">
            <!-- Profile Card -->
            <div class="bg-white w-full rounded-lg border-2 border-bg-gray-600 shadow-lg py-6 px-4 overflow-auto whitespace-nowrap">
                <div class="flex items-center">
                    <img src="https://cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Foto Profil" class="w-20 h-20 ml-3 bg-gray-300 rounded-full tracking-wide whitespace-nowrap">
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold whitespace-nowrap">Danang</h2>
                    </div>
                </div>

                <hr class="h-px my-5 bg-gray-200 border-1 dark:bg-gray-700">

                <div class="mt-4">
                    <div class="ml-3 mb-2">
                        <div class="flex flex-row w-full items-center gap-2 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <h3 class="text-xl font-bold">Akun Saya</h3>
                        </div>

                        <ul class="ml-9 items-center">
                            <li><a href="#" aria-current="page" class="text-green-600">Profil</a></li>
                            <li><a href="<?php echo site_url('user/address_user'); ?>" class="text-gray-600">Alamat</a></li>
                            <li><a href="<?php echo site_url('user/password_user'); ?>" class="text-gray-600">Ubah Password</a></li>
                        </ul>
                    </div>

                    <div class="ml-3 mb-2">
                        <div class="flex flex-row w-full items-center gap-2 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>

                            <h3 class="text-xl font-bold">Pesanan Saya</h3>
                        </div>
                        <ul class="ml-9 items-center">
                            <li><a href="#" class="text-gray-600">Belum Bayar</a></li>
                            <li><a href="#" class="text-gray-600">Daftar Pesanan</a></li>
                        </ul>
                    </div>

                    <div class="ml-4 mb-2">
                        <div class="flex flex-row w-full items-center gap-3 mb-1">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                            </svg>
                            <a href="#">
                                <h3 class="text-xl font-bold">Keluar</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-col grow bg-white border-2 border-bg-gray-600 rounded-lg shadow-lg mb-4">
            <h2 class="ml-5 mt-4 mb-4 text-2xl font-bold mb-4">Daftar Pesanan</h2>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex flex-row w-full gap-2 justify-between overflow-auto px-4 py-4 items-center">
                <form class="w-1/2">
                    <div class="flex">
                        <div class="relative w-full tracking-wide">
                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-white-200 rounded-lg 
                                        border-1 border border-gray-300 focus:ring-white-200 focus:border-white-500 dark:bg-white-700 dark:border-s-white-700
                                         dark:border-black-600 dark:placeholder-gray-400 dark:text-black dark:focus:border-white" placeholder="Cari ID Order" />
                            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-800 rounded-e-lg 
                                        border border-white-700 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 dark:hover:bg-green-800 
                                        dark:focus:ring-white-800">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="flex flex-row gap-3 items-center h-auto">
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="pesanan" class="w-full text-black text-sm bg-gray-100 border-2 border-bg-black 
                                     hover:bg-gray-200 focus:ring-1 focus:outline-none 
                                      focus:ring-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:hover:bg-gray-200 
                                         dark:focus:ring-white" type="button">
                            Pesanan Baru
                            <div class="w-auto absolute-right">
                                <svg class="w-2.5 h-2.5 ms-2  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </div>
                        </button>
                        <!-- Dropdown kategori -->
                        <div id="pesanan" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 border-2 border-bg-gray-400">
                            <ul class="text-sm text-gray-700 text-black" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Pesanan Baru</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Siap Dikirim</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Pengiriman</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Selesai</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Dibatalkan</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="semuawaktu" class="w-full text-black text-sm bg-gray-100 border-2 border-bg-black 
                                                 hover:bg-gray-200 focus:ring-1 focus:outline-none 
                                                 focus:ring-white font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:hover:bg-gray-200 
                                                dark:focus:ring-white" type="button">
                            Semua Waktu
                            <div class="w-auto absolute-right">
                                <svg class="w-2.5 h-2.5 ms-2  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </div>
                        </button>
                        <!-- Dropdown kategori -->
                        <div id="semuawaktu" class="z-2 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 border-2 border-bg-gray-400">
                            <ul class="text-sm text-gray-700 text-black" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Semua Waktu</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Hari ini</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Minggu ini</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">Bulan ini</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">3 Bulan ini</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">6 Bulan ini</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-green-600 hover:text-white">1 Tahun ini</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-auto rounded-lg px-4">
                <table class="w-full">
                    <thead class="bg-gray-200 w-full">
                        <tr class="">
                            <th class="py-3 px-3 text-left tracking-wide text-black">No</th>
                            <th class="py-3 px-3 text-left tracking-wide text-black">ID ORDER</th>
                            <th class="py-3 px-3 text-left tracking-wide text-black">WAKTU</th>
                            <th class="py-3 px-3 text-left tracking-wide text-black">TOTAL</th>
                            <th class="py-3 px-3 text-left tracking-wide text-black w-60">STATUS</th>
                            <th class="py-3 px-3 text-left tracking-wide text-black">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 border-bg-black">
                            <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.000</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <p class="text-green-600 py-1 w-20 text-center rounded-md bg-green-100 font-lg text-sm">Konfirmasi</p>
                            </td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="konfirmasi" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                    ...
                                </button>


                                <div id="konfirmasi" class="flex z-2 text-center hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-start" aria-labelledby="dropdownDefaultButton">

                                        <li class="block px-2 py-2 text-center">
                                            <a href="<?php echo site_url('seller/seller_aksi_lihat_pesanan'); ?>" class="">
                                                <div class="flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Detail</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="block px-2 py-2 ">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="successButton" data-modal-target="terima-pesanan" data-modal-toggle="terima-pesanan" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-green-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hover:text-green-600 text-gray-700 size-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </span>
                                                    <span>Beli Lagi</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="block px-2 py-2">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-red-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-700 size-5 hover:text-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    <span>Batalkan</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-bg-black">
                            <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <p class="text-gray-600 py-1 w-40 text-center rounded-md bg-gray-200 font-lg text-sm">Menunggu Konfirmasi</p>
                            </td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="aksi3" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                    ...
                                </button>


                                <div id="aksi3" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-center" aria-labelledby="dropdownDefaultButton">

                                        <li class="block px-2 py-2 text-center">
                                            <a href="#" class="">
                                                <div class="flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Pesanan</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b-2 border-bg-black">
                            <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.000</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <p class="text-yellow-600 py-1 w-24 text-center rounded-md bg-yellow-200 font-lg text-sm">Pengiriman</p>
                            </td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="aksi" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                    ...
                                </button>


                                <div id="aksi" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-center" aria-labelledby="dropdownDefaultButton">

                                        <li class="block px-2 py-2 text-center">
                                            <a href="<?php echo site_url('seller/seller_aksi_lihat_pesanan'); ?>" class="">
                                                <div class="flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Pesanan</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="block px-2 py-2 ">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="successButton" data-modal-target="terima-pesanan" data-modal-toggle="terima-pesanan" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-green-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hover:text-green-600 text-gray-700 size-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </span>
                                                    <span>Terima Pesanan</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="block px-2 py-2">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-red-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-700 size-5 hover:text-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    <span>Tolak Pesanan</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b-2 border-bg-black">
                            <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.000</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <p class="text-blue-600 py-1 w-16 text-center rounded-md bg-blue-100 font-lg text-sm">Selesai</p>
                            </td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="aksi" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                    ...
                                </button>


                                <div id="aksi" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-center" aria-labelledby="dropdownDefaultButton">

                                        <li class="block px-2 py-2 text-center">
                                            <a href="<?php echo site_url('seller/seller_aksi_lihat_pesanan'); ?>" class="">
                                                <div class="flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Pesanan</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="block px-2 py-2 ">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="successButton" data-modal-target="terima-pesanan" data-modal-toggle="terima-pesanan" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-green-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hover:text-green-600 text-gray-700 size-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </span>
                                                    <span>Terima Pesanan</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="block px-2 py-2">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-red-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-700 size-5 hover:text-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    <span>Tolak Pesanan</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b-2 border-bg-black">
                            <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.000</td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <p class="text-red-600 py-1 w-20 text-center rounded-md bg-red-100 font-lg text-sm">Dibatalkan</p>
                            </td>
                            <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="aksi" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                    ...
                                </button>


                                <div id="aksi" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-center" aria-labelledby="dropdownDefaultButton">

                                        <li class="block px-2 py-2 text-center">
                                            <a href="<?php echo site_url('seller/seller_aksi_lihat_pesanan'); ?>" class="">
                                                <div class="flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Pesanan</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="block px-2 py-2 ">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="successButton" data-modal-target="terima-pesanan" data-modal-toggle="terima-pesanan" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-green-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hover:text-green-600 text-gray-700 size-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </span>
                                                    <span>Terima Pesanan</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="block px-2 py-2">
                                            <div class="flex justify-center items-center text-center">
                                                <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex block items-center justify-center gap-2 text-center 
                                                                hover:text-red-600 ms-2 text-xs font-small text-gray-700" type="button">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-700 size-5 hover:text-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    <span>Tolak Pesanan</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>






                    </tbody>
                </table>
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
                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 text-black-600 border border-gray-300 bg-green-700 dark:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">10</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>
</body>

</html>