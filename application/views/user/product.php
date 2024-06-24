<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex flex-row mx-auto w-4/5 mt-4">
        <div class="grid gap-4 w-40 w-full">
            <div>
                <img class="overflow-hidden relative object-cover object-center aspect-square h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <img class="overflow-hidden relative object-cover object-center aspect-square h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="overflow-hidden relative object-cover object-center aspect-square h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="overflow-hidden relative object-cover object-center aspect-square h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
            </div>
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

        <div class="w-full">
            <div class="flex flex-col p-5 w-3/4">
                <div class="w-full">
                    <h5 class="ml-10 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white w-full flex   ">
                        <?php echo $produk->nama_Produk; ?>
                    </h5>
                </div>
                </a>
                <div class="ml-10 flex items-center space-x-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <h1 class="font-semibold text-xs tracking-tight text-gray-500 dark:text-gray-500" style="font-family: 'Inter', sans-serif;"><?php echo $produk->sisaHari ?> Hari | 1rb+ Terjual</h1>
                </div>
                <div class="ml-10 flex items-center space-x-2 mt-4">
                    <p class="text-sm font-bold tracking-tight text-gray-400 dark:text-gray-400 line-through">Rp. <?php echo $produk->harga ?></p>
                    <p class="text-sm font-bold text-red-500"><?php echo $produk->diskon ?>%</p>
                </div>
                <p class="ml-10 text-[40px] font-bold tracking-tight text-gray-900 dark:text-white mb-4">Rp. <?php echo $produk->hargaDiskon ?></p>
                <p class="ml-10 text-l font-bold tracking-tight text-gray-900 dark:text-white">Kuantitas</p>
                <form class="ml-10">
                    <div class="relative flex items-center max-w-[8rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>
                <a href="<?php echo site_url('user/add_cart/' . $produk->id_Produk) ?>" id="addCart" class="flex flex-row tracking-wide ml-10 mt-5 text-base font-bold text-white 
                bg-green-800 hover:bg-green-800 
                focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-4 text-center inline-flex items-center dark:bg-green-600 
                dark:hover:bg-green-700 dark:focus:ring-green-800 w-6/12 justify-center text-center items-center">
                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="text-medium font-bold">Tambah Ke Keranjang</span>
                </a>
                <hr class="ml-10 mt-10 h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="ml-10 flex grid">
                    <div class="flex">
                        <div class="w-15 h-15 bg-gray-400 rounded-full flex items-center justify-center">
                            <img src="https://cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Foto Profil" class="w-20 h-20 rounded-full">
                        </div>
                        <div class="ml-5 mt-4">
                            <h2 class="text-lg font-bold"><?php echo $toko->nama_Toko ?></h2>
                            <p class="text-sm text-gray-600"><?php echo $toko->alamat ?>, <?php echo $toko->kota ?></p>
                        </div>
                    </div>
                </div>
                <hr class="ml-10 h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
        </div>
    </div>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 mx-auto w-4/5">
    <h2 class="ml-40 mb-6 text-xl text-gray-900 font-extrabold" style="font-family: 'Inter', sans-serif;">Produk Untuk Kamu</h2>
    <div class="grid gap-9 mx-auto sm:w-4/5 mb-10">
        <div class="grid grid-cols-4 gap-9">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="<?php echo base_url('assets/image/card/1.jpg'); ?>" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">Nama Produkssss - Variasi Produk - Sub Varian Produk</h5>
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
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#addCart').click(function() {
                event.preventDefault();
                $.ajax({
                    url: '<?php echo site_url('user/add_cart/' . $val->id_Produk); ?>',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Check if the response indicates success

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error occurred: ' + textStatus);
                    }
                });
            });
        });
    </script>

</body>

</html>