<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Seller</title>
    <style>
        tailwind.config= {

            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff", "100":"#dbeafe", "200":"#bfdbfe", "300":"#93c5fd", "400":"#60a5fa", "500":"#3b82f6", "600":"#2563eb", "700":"#1d4ed8", "800":"#1e40af", "900":"#1e3a8a", "950":"#172554"
                        }
                    }
                }

                ,
                fontFamily: {
                    'body': [ 'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                        ],
                        'sans': [ 'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                        ]
                }
            }
        }

        tailwind.config= {

            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff", "100":"#dbeafe", "200":"#bfdbfe", "300":"#93c5fd", "400":"#60a5fa", "500":"#3b82f6", "600":"#2563eb", "700":"#1d4ed8", "800":"#1e40af", "900":"#1e3a8a", "950":"#172554"
                        }
                    }
                }

                ,
                fontFamily: {
                    'body': [ 'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                        ],
                        'sans': [ 'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                        ]
                }
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-row w-full mx-auto">
        <aside id="default-sidebar" class="flex-col left-0 z-10 xs:invisible md:visible md:w-64 h-screen sticky" aria-label="Sidebar">
            <div class="h-full px-3 py-4 bg-white dark:bg-white border-r-2 border-bg-gray-600 shadow shadow-lg">
                <ul class="space-y-0 font-medium">
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                        dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>

                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                        dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex text-lg font-bold items-center p-2 text-green-700 rounded-lg dark:text-green-700 group">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-red-700 
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

        <div class="flex flex-col h-screen w-full px-6 py-8 bg-gray-100 overflow-auto">
            <p class="text-black font-bold text-xl mb-8">Pesanan</p>
            <div class="w-full flex flex-col">

                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white">

                    <div class="w-full px-4 py-2 flex flex-col">
                        <div class="flex flex-row w-full gap-2 justify-between overflow-auto py-2 items-center">

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


                        <div class="overflow-auto rounded-lg">
                            <table class="w-full">
                                <thead class="bg-gray-200 w-full">
                                    <tr class="">
                                        <th class="py-3 px-3 text-left tracking-wide text-black">No</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">ID ORDER</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">WAKTU</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">NAMA</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">TOTAL</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">STATUS</th>
                                        <th class="py-3 px-3 text-left tracking-wide text-black">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b-2 border-bg-black">
                                        <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">#2406190089</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">19 Juni 2024, 18:30</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Ananda Bagus</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <p class="text-green-600 py-1 w-28 text-center rounded-md bg-green-100 font-lg text-sm">Pesanan Baru</p>
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
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Ananda Bagus</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <p class="text-gray-600 py-1 w-24 text-center rounded-md bg-gray-200 font-lg text-sm">Siap Dikirim</p>
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
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Ananda Bagus</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <p class="text-yellow-600 py-1 w-24 text-center rounded-md bg-yellow-200 font-lg text-sm">Pengiriman</p>
                                        </td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <button id="dropdownDefaultButton" data-dropdown-toggle="aksi2" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                                ...
                                            </button>


                                            <div id="aksi2" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
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
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Ananda Bagus</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <p class="text-blue-600 py-1 w-16 text-center rounded-md bg-blue-100 font-lg text-sm">Selesai</p>
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
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Ananda Bagus</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. 230.00</td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <p class="text-red-600 py-1 w-20 text-center rounded-md bg-red-100 font-lg text-sm">Dibatalkan</p>
                                        </td>
                                        <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                            <button id="dropdownDefaultButton" data-dropdown-toggle="aksi4" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                                ...
                                            </button>


                                            <div id="aksi4" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
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
                                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 text-black-600 border border-gray-300 bg-green-700 dark:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                    </div>

                    <div>
                        <!-- Main modal delete-->
                        <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
                                                        justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-6 w-full max-w-sm h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative md:p-6 sm:p-4 border-2 border-gray-300 text-center bg-white rounded-lg shadow">
                                    <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                                    rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="deleteModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <p class="text-black font-bold text-lg mb-4">Tolak Pesanan</p>
                                    <p class="text-base font-medium text-gray-500">ID Order: #240619089</p>
                                    <p class="text-base font-medium text-gray-500">Waktu: 19 Juni 2024, 18:30</p>
                                    <p class="text-base font-medium text-gray-500">Nama: Ananda Bagus</p>
                                    <p class="text-base font-medium text-gray-500 mb-4">Total: Rp. 230.000</p>
                                    <p class="mb-4 text-gray-500 dark:text-gray-300"></p>
                                    <div class="flex justify-center items-center space-x-4">
                                        <button data-modal-toggle="deleteModal" type="button" class="py-2 px-5 text-sm font-medium text-black bg-white rounded-lg border 
                                                                    border-gray-600 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 
                                                                    hover:text-black focus:z-10 ">
                                            Batal
                                        </button>
                                        <button type="submit" class="py-2 px-5 text-sm font-medium text-center text-white bg-red-600 
                                                                    rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 
                                                                    dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main modal Sukses-->
                    <div id="terima-pesanan" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 
                                                            right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative py-8 px-1 text-center bg-white rounded-lg shadow bg-white border-2 border-gray-300">
                                <div class="w-16 h-16 rounded-full bg-green-100 p-2 flex items-center justify-center mx-auto mb-3.5">
                                    <svg aria-hidden="true" class="w-20 h-20 text-green-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only ">Success</span>
                                </div>
                                <p class="mb-4 text-xl font-bold text-black">Sukses Menerima Pesanan</p>
                                <p class="text-base font-medium text-gray-500">ID Order: #240619089</p>
                                <p class="text-base font-medium text-gray-500">Waktu: 19 Juni 2024, 18:30</p>
                                <p class="text-base font-medium text-gray-500">Nama: Ananda Bagus</p>
                                <p class="text-base font-medium text-gray-500">Total: Rp. 230.000</p>
                                <button data-modal-toggle="successModal" type="button" class="mt-8 py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-800 hover:bg-green-900">
                                    Lanjutkan
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('successButton').click();
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>
</body>

</html>