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
                    <p class="text-sm font-bold">ID ORDER</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->id_Order; ?></p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">Nama</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->nama_User; ?></p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold">Alamat</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->alamat; ?></p>
                </div>
            </div>
            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">Waktu</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->tanggal_Order; ?></p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">No. HP</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->noHP; ?></p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold">Kurir</p>
                    <p class="text-sm font-normal"><?php echo $dataorder->kurir; ?> - Reguler</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mt-2">
            <table class="w-full">
                <thead class="bg-gray-200 w-full">
                    <tr>
                        <th class="py-3 px-3 text-left tracking-wide">Produk</th>
                        <th class="py-3 px-3 text-left tracking-wide">Jumlah</th>
                        <th class="py-3 px-3 text-left tracking-wide text-right">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b-2 border-bg-black">
                        <td class="flex justify-center items-center whitespace-nowrap max-w-80">
                            <div class="flex flex-row items-center gap-2 justify-center whitespace-nowrap tracking-wide p-3">
                                <img srcset="<?php echo base_url('assets/foto_produk/' . $detailorder->foto_Produk); ?> 2x" class="w-20 h-20 object-cover object-center rounded-lg" alt="image description">
                                <p class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left"><?php echo $detailorder->nama_Produk ?></p>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center"><?php echo $detailorder->jumlah ?></td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right"><?php echo $detailorder->harga ?></td>
                    </tr>
                    <tr class="border-b-2 border-bg-black">
                        <td class="flex whitespace-nowrap max-w-80 text-left text-black text-xl font-bold p-3">Total</td>
                        <td class="px-3 py-3 text-sm font-medium text-gray-600 whitespace-nowrap"></td>
                        <td class="flex whitespace-nowrap max-w-80 text-left text-black text-xl font-bold p-3 text-right"><?php echo $detailorder->total ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php if ($detailorder->status_Order == 'Pesanan Baru') { ?>
            <div class="flex gap-6 mt-4">
                <a href="<?php echo site_url('seller/seller_pesanan'); ?>" class="flex-1 text-center text-sm font-medium text-gray-500 bg-white border border-gray-500 rounded-lg px-4 py-2 focus:ring-4 focus:outline-none focus:ring-gray-100">Tolak Orderan</a>
                <a href="<?php echo site_url('seller/terima_order/' . $dataorder->id_Order); ?>" class="flex-1 text-sm text-center font-medium text-white bg-green-800 border border-blue-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Terima Orderan</a>
            </div>
        <?php } elseif ($detailorder->status_Order == 'Siap Dikirim') { ?>

            <div class="flex mt-6">
                <a href="<?php echo site_url('seller/kirim_order/' . $dataorder->id_Order); ?>" class="flex-1 text-sm text-center font-medium text-white bg-green-800 border rounded-lg px-4 py-2 hover:bg-green-900 ">Kirim Orderan</a>
            </div>
        <?php }  ?>

        <?php if ($detailorder->status_Order == 'Pengiriman') { ?>
            <div class="flex flex-row gap-6 mt-4 w-full justify-between">
                <p class="text-xl font-bold text-black bg-white">Status Pesanan</p>
                <p class="flex text-yellow-600 py-1 w-24 rounded-md bg-yellow-200 text-center justify-center font-lg text-sm">Pengiriman</p>
            </div>
        <?php } ?>
    </div>
</body>

</html>