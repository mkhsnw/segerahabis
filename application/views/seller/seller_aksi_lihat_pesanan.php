<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="w-full">

    <div class="mb-10 bg-white py-8 rounded-lg w-2/5 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Pesanan</h1>
        <div class="flex flex-row w-full gap-10">
            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">ID ORDER</p>
                    <p class="text-sm font-normal ">#2406190089</p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">Nama</p>
                    <p class="text-sm font-normal ">Ananda Bagus</p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold ">Alamat</p>
                    <p class="text-sm font-normal ">Gentan RT 08 / RW 04, Gentan, Gantiwarno, Klaten, Jawa Tengah, 57455</p>
                </div>
            </div>

            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">Waktu</p>
                    <p class="text-sm font-normal ">Minggu, 19 Juni 2024</p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">No. HP</p>
                    <p class="text-sm font-normal ">0123 4567 8910</p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold ">Kurir</p>
                    <p class="text-sm font-normal ">JNE - Reguler</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full mt-2 ">
            <table class="w-full">
                <thead class="bg-gray-200 w-full">
                    <tr class="">
                        <th class="py-3 px-3 text-left tracking-wide">Produk</th>
                        <th class="py-3 px-3 text-left tracking-wide">Jumlah</th>
                        <th class="py-3 px-3 text-left tracking-wide text-right">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b-2 border-bg-black">
                        <td class="flex justify-center items-center whitespace-nowrap max-w-80">
                            <div class="flex flex-row items-center gap-2 justify-center whitespace-nowrap tracking-wide p-3">
                                <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-20 h-20 rounded-lg" alt="image description">
                                <p class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left">Indomie Goreng Jumbo Rasa Odading Mang Oleh Menjadi IRON MAN</p>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center">5</td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right">1</td>
                    </tr>
                    <tr class="border-b-2 border-bg-black">
                        <td class="flex justify-center items-center whitespace-nowrap max-w-80">
                            <div class="flex flex-row items-center gap-2 justify-center whitespace-nowrap tracking-wide p-3">
                                <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-20 h-20 rounded-lg" alt="image description">
                                <p class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left">Indomie Goreng Jumbo Rasa Odading Mang Oleh Menjadi IRON MAN</p>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center">5</td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right">1</td>
                    </tr>
                    <tr class="border-b-2 border-bg-black">
                        <td class="flex whitespace-nowrap max-w-80 text-left text-black text-xl font-bold p-3">Total</td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap"></td>
                        <td class="flex whitespace-nowrap max-w-80 text-left text-black text-xl font-bold p-3 text-right">Rp305.000</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="flex gap-6 mt-4">
            <a href="<?php echo site_url('user/login_user'); ?>" class="flex-1 text-center text-sm font-medium text-gray-500 bg-white border border-gray-500 rounded-lg px-4 py-2 focus:ring-4 focus:outline-none focus:ring-gray-100">Tolak Orderan</a>
            <a href="<?php echo site_url('user/daftar_user'); ?>" class="flex-1 text-sm text-center font-medium text-white bg-green-800 border border-blue-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Terima Orderan</a>
        </div>
    </div>


</body>

</html>