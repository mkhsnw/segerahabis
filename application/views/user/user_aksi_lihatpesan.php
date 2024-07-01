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
                    <p class="text-sm font-normal "><?php echo $order->id_Order ?></p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">Nama</p>
                    <p class="text-sm font-normal "><?php echo $order->nama_User ?></p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold ">Alamat</p>
                    <p class="text-sm font-normal "><?php echo $order->alamat ?></p>
                </div>
            </div>

            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">Waktu</p>
                    <p class="text-sm font-normal "><?php echo $order->tanggal_Order ?></p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold ">No. HP</p>
                    <p class="text-sm font-normal "><?php echo $order->noHP ?></p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold ">Kurir</p>
                    <p class="text-sm font-normal "><?php echo $order->kurir ?></p>
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
                                <img src="<?php echo base_url('assets/foto_produk/' . $detailOrder->foto_Produk); ?>" class="w-20 h-20 rounded-lg" alt="image description">
                                <p class="py-3 text-sm font-medium text-gray-600 whitespace-normal tracking-wide w-56 text-left"><?php echo $detailOrder->nama_Produk ?></p>
                            </div>
                        </td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-center"><?php echo $detailOrder->jumlah ?></td>
                        <td class="py-3 text-sm font-medium text-gray-600 whitespace-nowrap text-right"><?php echo $detailOrder->harga ?></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="flex flex-row gap-6 mt-4 w-full justify-between">
            <p class="text-xl font-bold text-black bg-white">Status Pesanan</p>
            <div class="gap-5 flex flex-col">
                <?php if ($order->status_Order == 'Pesanan Baru') { ?>
                    <p class="text-gray-600 py-1 w-40 text-center rounded-md bg-gray-200 font-lg text-sm">Menunggu Konfirmasi</p>
                <?php } ?>
                <?php if ($order->status_Order == 'Siap Dikirim') { ?>
                    <p class="text-green-600 py-1 w-20 text-center rounded-md bg-green-100 font-lg text-sm">Konfirmasi</p>
                <?php } ?>
                <?php if ($order->status_Order == 'Pengiriman') { ?>
                    <p class="text-yellow-600 py-1 w-24 text-center rounded-md bg-yellow-200 font-lg text-sm">Pengiriman</p>
                <?php } ?>
                <?php if ($order->status_Order == 'Selesai') { ?>
                    <p class="text-blue-600 py-1 w-16 text-center rounded-md bg-blue-100 font-lg text-sm">Selesai</p>
                <?php } ?>
                <?php if ($order->status_Order == 'Dibatalkan') { ?>
                    <p class="text-red-600 py-1 w-20 text-center rounded-md bg-red-100 font-lg text-sm">Dibatalkan</p>
                <?php } ?>
            </div>
        </div>
    </div>


</body>

</html>