<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-row mx-auto sm:w-4/5 mt-4">
        <div class="grid gap-4 sm:w-full">
            <div>
                <img class="aspect-square h-auto max-w-full rounded-lg object-cover object-center" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk) ?>" alt="">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <img class="aspect-square h-auto max-w-full rounded-lg object-cover object-center" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk1) ?>" alt="">
                </div>
                <div>
                    <img class="aspect-square h-auto max-w-full rounded-lg object-cover object-center" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk2) ?>" alt="">

                </div>
            </div>
            <div class="flex mx-auto w-full">
                <div class="max-w-lg">
                    <h1 class="text-xl font-semibold mb-4">Informasi Produk</h1>
                    <p class="text-gray-500 mb-1">Kadaluarsa: <span class="text-gray-700"><?php echo $produk->sisaHari; ?> hari lagi</span></p>
                    <p class="text-gray-500 mb-1">Stok: <span class="text-gray-700"><?php echo $produk->stock ?></span></p>
                    <p class="text-gray-500 mb-4">Dikirim dari: <span class="text-gray-700"><?php echo $toko->alamat ?>, <?php echo $toko->kota ?></span></p>
                    <p class="text-gray-700 leading-relaxed">
                        <?php echo $produk->deskripsi ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full">

            <div class="px-5 w-3/4">
                <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 "><?php echo $produk->nama_Produk; ?></h5>

                </a>
                <div class=" flex items-center space-x-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 " style="font-family: 'Inter', sans-serif;"><?php echo $produk->sisaHari ?> Hari | 1rb+ Terjual</h1>
                </div>
                <div class=" flex items-center space-x-2">
                    <p class="text-sm font-bold tracking-tight text-gray-400  line-through">Rp. <?php echo $produk->harga ?></p>
                    <p class="text-sm font-bold text-red-500"><?php echo $produk->diskon ?>%</p>
                </div>
                <p class=" text-[40px] font-bold tracking-tight text-gray-900  mb-4">Rp. <?php echo $produk->hargaDiskon ?></p>
                <p class=" text-l font-bold tracking-tight text-gray-900 ">Kuantitas</p>
                <form class="" method="post" action="<?php echo site_url('user/add_cart/' . $produk->id_Produk) ?>">
                    <div class="relative flex items-center max-w-[8rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="quantity-input" name="qty" data-input-counter data-input-counter-min="1" data-input-counter-max="100" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5" value="1" required />
                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>

                    <button type="submit" id="addCart" class=" mt-5 text-sm font-medium text-white bg-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center me-2 ">

                        <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        Tambah Ke Keranjang
                    </button>
                </form>
                <hr class=" mt-10 h-px my-5 bg-gray-200 border-0">
                <div class=" flex grid">
                    <a href="<?php echo site_url('user/toko/' . $toko->id_Toko) ?>">
                        <div class="flex">
                            <div class="w-15 h-15 bg-gray-400 rounded-full flex items-center justify-center">
                                <img src="<?php echo base_url('assets/image/profile/toko1.png') ?>" alt="" class="w-20 h-20 rounded-full">
                            </div>
                            <div class="ml-5">
                                <h2 class="text-lg font-bold"><?php echo $toko->nama_Toko ?></h2>
                                <p class="text-sm text-gray-600"><?php $this->load->helper('toko');
                                                                    $city = getDetailCity($toko->id_Kota);
                                                                    echo $city['rajaongkir']['results']['city_name'] . ", " . $city['rajaongkir']['results']['province']; ?></h1>
                                </p>
                            </div>
                        </div>
                </div>
                </a>
                <hr class=" h-px my-5 bg-gray-200 border-0">
            </div>
        </div>
    </div>

    </div>

    <br> </br>
    <div class="w-4/5 mx-auto">
        <hr class="h-px my-8 bg-gray-200 border-0 ">
        <h2 class="mb-6 text-xl text-gray-900 font-bold">Produk Untuk Kamu</h2>
    </div>
    <div class=" grid gap-9 mx-auto sm:w-4/5 mb-10">
        <div class="flex flex-row items-center gap-4 grid lg:grid-cols-4 sm:grid-cols-2 items-start">
            <?php foreach ($produkall as $val) { ?>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  container hover:scale-105 duration-75">
                    <a href="<?php echo site_url('user/product/' . $val->id_Produk) ?>">
                        <img class="aspect-square w-full h-full rounded-t-lg object-cover object-center" src="<?php echo base_url('assets/foto_produk/' . $val->foto_Produk); ?>" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="<?php echo site_url('user/product/' . $val->id_Produk) ?>">
                            <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900  h-10"><?php echo $val->nama_Produk ?></h5>
                        </a>
                        <p class=" text-xl font-bold tracking-tight text-gray-900 ">Rp. <?php echo $val->hargaDiskon ?></p>
                        <div class="flex items-center space-x-2 mb-2">
                            <p class="mb-0 text-sm font-bold tracking-tight text-gray-400  line-through">Rp. <?php echo $val->harga ?></p>
                            <p class="text-sm font-bold text-red-500"><?php echo $val->diskon ?>%</p>
                        </div>
                        <div class="flex items-center space-x-2 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            <h1 class="font-semibold text-xs tracking-tight text-gray-500 " style="font-family: 'Inter', sans-serif;"><?php echo $val->sisaHari ?> Hari lagi | 1rb+ Terjual</h1>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</body>

</html>