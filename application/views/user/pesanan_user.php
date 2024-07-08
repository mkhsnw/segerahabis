<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan User</title>
</head>

<body>
    <div class="flex flex-row w-4/5 items-start gap-8 mx-auto mt-4 overflow-auto">
        <?php $this->load->view('user/partial/sidebar'); ?>

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
                        <div id="pesanan" class="z-2  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border-2 border-bg-gray-400">
                            <ul class="text-sm text-gray-700 text-black w-full" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class=" block px-4 py-2 hover:bg-green-600 hover:text-white w-full">Menunggu Konfirmasi</a>
                                </li>
                                <li>
                                    <a href="#" class=" block px-4 py-2 hover:bg-green-600 hover:text-white w-full">Konfirmasi</a>
                                </li>
                                <li>
                                    <a href="#" class=" block px-4 py-2 hover:bg-green-600 hover:text-white w-full">Pengiriman</a>
                                </li>
                                <li>
                                    <a href="#" class=" block px-4 py-2 hover:bg-green-600 hover:text-white w-full">Selesai</a>
                                </li>
                                <li>
                                    <a href="#" class=" block px-4 py-2 hover:bg-green-600 hover:text-white w-full">Dibatalkan</a>
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
                                    <a href="#" class="w-full block px-4 py-2 hover:bg-gray-300 hover:text-black">1 Tahun ini</a>
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
                        <?php $no = 1;
                        foreach ($order as $val) { ?>
                            <tr class="border-b-2 border-bg-black">
                                <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $no; ?></td>
                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->id_Order ?></td>
                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ..."><?php echo $val->tanggal_Order ?></td>
                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Rp. <?php echo $val->total ?></td>
                                <?php if ($val->status_Order == 'Menunggu Pembayaran') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-gray-600 py-1 w-40 text-center rounded-md bg-gray-200 font-lg text-sm">Menunggu Konfirmasi</p>
                                    </td>
                                <?php } ?>
                                <?php if ($val->status_Order == 'Pesanan Baru') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-gray-600 py-1 w-40 text-center rounded-md bg-gray-200 font-lg text-sm">Menunggu Konfirmasi</p>
                                    </td>
                                <?php } ?>
                                <?php if ($val->status_Order == 'Siap Dikirim') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-green-600 py-1 w-20 text-center rounded-md bg-green-100 font-lg text-sm">Konfirmasi</p>
                                    </td>
                                <?php } ?>
                                <?php if ($val->status_Order == 'Pengiriman') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-yellow-600 py-1 w-24 text-center rounded-md bg-yellow-200 font-lg text-sm">Pengiriman</p>
                                    </td>
                                <?php } ?>
                                <?php if ($val->status_Order == 'Selesai') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-blue-600 py-1 w-16 text-center rounded-md bg-blue-100 font-lg text-sm">Selesai</p>
                                    </td>
                                <?php } ?>
                                <?php if ($val->status_Order == 'Dibatalkan') { ?>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                    <p class="text-red-600 py-1 w-16 text-center rounded-md bg-red-100 font-lg text-sm">Dibatalkan</p>
                                    </td>
                                <?php } ?>
                                <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                    <button id="dropdownDefaultButton<?php echo $no ?>" data-dropdown-toggle="test<?php echo $no ?>" class="text-center inline-flex items-center font-lg text-black text-2xl self-center">
                                        ...
                                    </button>


                                    <div id="test<?php echo $no ?>" class="flex z-2 text-center hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto border-2 border-bg-gray-400">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 items-start" aria-labelledby="dropdownDefaultButton<?php echo $no ?>">

                                            <li class="block px-2 py-2 text-center">
                                                <a href="<?php echo site_url('user/user_aksi_lihatpesan/' . $val->id_Order); ?>" class="">
                                                    <div class="flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                        <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Lihat Detail</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php if ($val->status_Order == 'Pengiriman') { ?>
                                                <li class="block px-2 py-2 text-center">
                                                    <a href="<?php echo site_url('user/terima_pesanan/' . $val->id_Order); ?>" class="">
                                                        <div class="flex items-center justify-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-700 hover:text-yellow-400">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            </svg>
                                                            <span class="ms-2 text-xs font-small text-gray-700 hover:text-yellow-400">Terima Pesanan</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>




                                        </ul>
                                    </div>
                                </td>




                            </tr>
                        <?php $no++;
                        } ?>







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