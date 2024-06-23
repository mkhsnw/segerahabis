<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <div class="w-4/5 flex flex-col md:items-start mx-auto mb-4 overflow-auto tracking-wide">
        <p class="text-black mr-4 md:mr-8 font-bold text-xl mt-4">Pengiriman</p>
        <div class="flex flex-row md:items-start mx-auto mt-2 gap-4">


            <div class="w-8/12 flex-col mx-auto">

                <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-2">
                    <div class="w-full px-4 py-2">

                        <div class="w-full flex flex-row justify-between items-center">
                            <div class="w-full flex flex-col">
                                <p class="text-black font-bold text-lg mb-4">Alamat Pengiriman</p>

                                <div class="flex flex-row items-start mb-2 gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                        <path fill="green" fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="text-black font-bold text-sm"><?php echo $user->nama_User?></p>
                                    <p class="text-black font-small text-sm">|</p>
                                    <p class="text-black font-small text-sm text-gray-600"><?php echo $user->noHP?></p>
                                </div>
                                <p class="text-black font-small text-sm text-gray-600 w-4/5 mb-2">
                                    <?php echo $user->alamat?>
                                </p>
                            </div>
                            <a href="#" class="h-10 w-20 text-sm text-center font-bold text-black bg-gray-300 border border-black-700 rounded-lg px-4 py-2 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-600 dark:bg-green-700 dark:hover:bg-gray-400 dark:focus:ring-gray-600">
                                Ubah</a>
                        </div>
                    </div>
                </ul>
                <?php 
                foreach($grouped_cart as $toko => $items){
                    $produk = $this->Muser->getProdukByToko($toko)->row();
                ?>
                <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-2">
                    <div class="w-full px-4 py-2 ">
                        <div class="w-full flex flex-col mt-1">
                            <div class="w-full flex flex-row gap-2 items-center">
                                <img class="rounded-full w-6 h-6" src="<?php echo base_url('assets/image/Profille/1.jpg'); ?>" alt="profille">
                                <p class="text-black font-bold text-lg"><?php echo $produk->nama_Toko;?></p>
                            </div>
                            <?php foreach($items as $item){?>
                            <div class="w-full flex flex-col">

                                <!-- Per/product -->
                                <div class="w-full flex flex-row gap-2 mt-2">
                                    <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-16 h-16 max-w-xl rounded-lg" alt="image description">
                                    <div class="w-full flex flex-col">
                                        <div class="w-full flex flex-row justify-between">
                                            <div class="w-full flex flex-col">
                                                <p class="text-black font-small sm:text-xs md:text-sm text-gray-900 md:w-full sm:w-1/12"><?php echo $item['name']?></p>
                                                <!-- <p class="text-black font-small sm:text-xs md:text-sm text-gray-900 md:w-full sm:w-1/12">Produk - Subvariasi Produk</p> -->
                                            </div>
                                            <p class="text-black font-bold sm:text-sm md:text-lg w-3/12 max-w-4/12"><?php echo $item['qty']?> x <?php echo $item['price'] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mb-2 w-full">
                                    <div class="flex w-full justify-end">
                                        <button id="dropdownDefaultButton" data-dropdown-toggle="pengiriman1" class="mt-8 w-11/12 text-black text-sm bg-gray-100 border-2 border-bg-black 
                                            hover:bg-gray-200 focus:ring-1 focus:outline-none 
                                            focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-100 dark:hover:bg-gray-200 
                                            dark:focus:ring-white" type="button">
                                            Pilih Pengiriman
                                            <div class="w-1/2 absolute-right">
                                                <svg class="w-2.5 h-2.5 ms-2  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </div>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="pengiriman1" class="z-1  hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 w-6/12">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-2 boroder-gray-300 rounded-lg" aria-labelledby="dropdownDefaultButton">
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">JNT</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">JNE</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">JNY</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">JNA</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </ul>
                <?php } ?>


                
            </div>

            <div class="grow">


                <div class="flex flex-col">
                    <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-2">
                        <div class="w-full px-6 py-2 flex flex-col">
                            <p class="text-black font-bold text-md mb-4 mt-2 font-sans">Metode Pembayaran</p>

                            <div class="flex flex-col items-center w-full">

                                <div class="flex flex-col items-center w-full">

                                    <div class="flex flex-row items-center w-full gap-2 mb-2">
                                        <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-12 h-12 max-w-xl rounded-lg" alt="image description">
                                        <div class="flex flex-row justify-between w-full items-center">
                                            <p class="text-black font-bold text-xs">Mandiri Virtual Account</p>
                                            <input id="mandiri" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                    </div>

                                    <p class="w-full border-b-2 border-bg-black "></p>

                                    <div class="flex flex-row items-center w-full gap-2 mb-2 mt-2">
                                        <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-12 h-12 max-w-xl rounded-lg" alt="image description">
                                        <div class="flex flex-row justify-between w-full items-center">
                                            <p class="text-black font-bold text-xs">BCA Virtual Account</p>
                                            <input id="bca" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                    </div>

                                    <p class="w-full border-b-2 border-bg-black "></p>

                                    <div class="flex flex-row items-center w-full gap-2 mb-2 mt-2 ">
                                        <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-12 h-12 max-w-xl rounded-lg" alt="image description">
                                        <div class="flex flex-row justify-between w-full items-center">
                                            <p class="text-black font-bold text-xs">Gopay</p>
                                            <input id="gopay" type="radio" value="" name="default-radio" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                    </div>

                                </div>

                                <a href="#" class="mt-4 mb-4">
                                    <h1 class="text-green-600 font-bold text-sm">Lihat Semua</h1>
                                </a>

                            </div>

                        </div>
                    </ul>


                    <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-2">
                        <div class="w-full px-8 py-2 flex flex-col">
                            <p class="text-black font-bold text-lg mb-6 mt-4">Ringkasan Belanja</p>

                            <div class="flex flex-row justify-between mb-1 ">
                                <p class="text-gray-600 font-md text-md">Total Harga (<?php echo $qtyItem?>)</p>
                                <p class="text-black font-bold text-md ">Rp. <?php echo $total?></p>
                            </div>
                            <div class="flex flex-row justify-between mb-1 ">
                                <p class="text-gray-600 font-md text-md">Ongkos Kirim</p>
                                <p class="text-black font-bold text-md ">Rp. 15.000</p>
                            </div>
                            <div class="flex flex-row justify-between mb-1 ">
                                <p class="text-gray-600 font-md text-md">Admin Pembayaran</p>
                                <p class="text-black font-bold text-md ">Rp. 1.000</p>
                            </div>
                            <div class="flex flex-row justify-between mb-4 ">
                                <p class="text-gray-600 font-md text-md">Biaya Aplikasi</p>
                                <p class="text-black font-bold text-md ">Rp. 2.000</p>
                            </div>


                            <p class="border-2 border-t border-bg-black"></p>

                            <div class="flex flex-row justify-between mb-2 mt-4 ">
                                <p class="text-gray-600 font-md text-md">Total Pembayaran</p>
                                <p class="text-black font-bold text-md ">Rp. 482.000</p>
                            </div>

                            <a href="#" class="mt-4 mb-4 text-sm text-center font-medium text-white bg-green-600 border border-blue-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-blue-800">
                                Bayar</a>

                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>