<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller_aksi_lihat_pesan_setelahterimapesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="w-full">

    <div class="mb-10 bg-white py-8 rounded-lg w-2/5 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Pesanan</h1>
        <div class="flex flex-row w-full gap-24">
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
                <thead class="w-full">
                    <tr class="">
                        <th class="py-3 text-left tracking-wide">Produk</th>
                        <th class="py-3 text-left tracking-wide">Jumlah</th>
                        <th class="py-3 text-left tracking-wide text-right">Harga</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    <tr class="border-b border-bg-black">
                        <td class="flex justify-center items-center whitespace-nowrap max-w-80">
                            <div class="flex flex-row items-center gap-2 justify-center whitespace-nowrap tracking-wide py-3">
                                <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-20 h-20 rounded-lg" alt="image description">
                                <p class="py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left">Indomie Goreng Jumbo Rasa Odading Mang Oleh Menjadi IRON MAN</p>
                            </div>
                        </td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center">5</td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right">1</td>
                    </tr>
                    <tr class="border-b border-bg-black">
                        <td class="flex justify-center items-center whitespace-nowrap max-w-80">
                            <div class="flex flex-row items-center gap-2 justify-center whitespace-nowrap tracking-wide py-3">
                                <img srcset="<?php echo base_url('assets/image/card/1.jpg'); ?> 2x" class="w-20 h-20 rounded-lg" alt="image description">
                                <p class="py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left">Indomie Goreng Jumbo Rasa Odading Mang Oleh Menjadi IRON MAN</p>
                            </div>
                        </td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center">5</td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right">1</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap w-full text-left text-black text-xl font-bold py-3">Total</td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap"></td>
                        <td class="whitespace-nowrap w-full text-black text-xl font-bold py-3 text-right">Rp305.000</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="flex flex-row gap-6 mt-4 w-full justify-between">
            <p class="text-xl font-bold text-black bg-white">Status Pesanan</p>
            <p class="flex text-yellow-600 py-1 w-24 rounded-md bg-yellow-200 text-center justify-center font-lg text-sm">Pengiriman</p>
        </div>
    </div>


</body>

</html>

