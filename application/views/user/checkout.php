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

        <div class="flex flex-row md:items-start mx-auto mt-2 gap-4 w-full">


            <div class="w-8/12 flex-col mx-auto">

                <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg mb-2">
                    <div class="w-full px-4 py-2">

                        <div class="w-full flex flex-row justify-between items-center">
                            <div class="w-full flex flex-col">
                                <p class="text-black font-bold text-lg mb-4 ">Alamat Pengiriman</p>

                                <div class="flex flex-row items-start mb-2 gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                        <path fill="green" fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="text-black font-bold text-sm"><?php echo $user->nama_User ?></p>
                                    <p class="text-black font-small text-sm">|</p>
                                    <p class="text-black font-small text-sm text-gray-600"><?php echo $user->noHP ?></p>
                                </div>
                                <p class="text-black font-small text-sm text-gray-600 w-4/5 mb-2">
                                    <?php echo $user->alamat ?>
                                </p>
                            </div>
                            <a href="#" class="h-10 w-20 text-sm text-center font-bold text-black bg-gray-300 border border-black-700 rounded-lg px-4 py-2 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-600">
                                Ubah</a>
                        </div>
                    </div>
                </ul>
                <?php
                foreach ($grouped_cart as $toko => $items) {
                    $no = 1;
                    $produk = $this->Muser->getProdukByToko($toko)->row();
                ?>
                    <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg mb-10 mt-2">
                        <div class="w-full px-4 py-2 ">
                            <div class="w-full flex flex-col mt-1">
                                <div class="w-full flex flex-row gap-2 items-center">
                                    <img class="rounded-full w-6 h-6 " src="<?php echo base_url('assets/image/profile/' . $produk->logo_Toko); ?>" alt="profille">
                                    <p class="text-black font-bold text-lg"><?php echo $produk->nama_Toko; ?></p>
                                </div>
                                <?php foreach ($items as $item) { ?>
                                    <div class="w-full flex flex-col">

                                        <!-- Per/product -->
                                        <div class="w-full flex flex-row gap-2 mt-2">
                                            <img srcset="<?php echo base_url('assets/foto_produk/' . $item['image']); ?> 2x" class="object-cover object-center w-16 h-16 rounded-lg" alt="image description">
                                            <div class="w-full flex flex-col">
                                                <div class="w-full flex flex-row justify-between">
                                                    <div class="w-full flex flex-col">
                                                        <p class="text-black font-small sm:text-xs md:text-sm text-gray-900 md:w-full sm:w-1/12"><?php echo $item['name'] ?></p>
                                                        <!-- <p class="text-black font-small sm:text-xs md:text-sm text-gray-900 md:w-full sm:w-1/12">Produk - Subvariasi Produk</p> -->
                                                    </div>
                                                    <p class="text-black font-bold sm:text-sm md:text-lg w-3/12 max-w-4/12"><?php echo $item['qty'] ?> x <?php echo $item['price'] ?></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="flex mb-2 w-full">
                                            <div class="flex w-full justify-end">
                                                <form class="mx-auto w-full" method="post" action="<?php echo site_url('user/proses_transaksi') ?>">
                                                    <select id="kurir_<?php echo $toko ?>" name="kurir_<?php echo $toko ?>" class="kurir w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mt-10">
                                                        <option>Pilih Pengiriman</option>
                                                        <option value="jne">JNE</option>
                                                        <option value="tiki">Tiki</option>
                                                        <option value="pos">Post Indonesia</option>
                                            </div>
                                            </select>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        <?php $no++;
                                } ?>
                        </div>
            </div>
            </ul>
        <?php } ?>



        </div>

        <div class="grow">


            <div class="flex flex-col">
                <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg mb-2">
                    <div class="w-full px-8 py-2 flex flex-col">
                        <p class="text-black font-bold text-lg mb-6 mt-4">Ringkasan Belanja</p>

                        <div class="flex flex-row justify-between mb-1 ">
                            <p class="text-gray-600 font-md text-md">Total Harga (<?php echo $qtyItem ?>)</p>
                            <p class="text-black font-bold text-md ">Rp. <?php echo $total ?></p>
                        </div>
                        <div class="flex flex-row justify-between mb-1 ">
                            <p class="text-gray-600 font-md text-md">Ongkos Kirim</p>
                            <p class="text-black font-bold text-md " id="ongkos">Rp. <?php echo $ongkos; ?></p>
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
                            <p class="text-black font-bold text-md " id="total">Rp. <?php echo $total + $ongkos + 1000 + 2000; ?></p>
                        </div>

                        <button type="button" id="pay-button" class="mt-4 mb-4 text-sm text-center font-medium text-white bg-green-600 border border-green-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Bayar</button>

                    </div>
                </ul>
            </div>
        </div>
    </div>
    <form id="payment-form" method="post" action="<?php echo site_url('user/finish') ?>">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
    </div>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<SB-Mid-client-R6GcZAp2YZd1UyKj>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.kurir').change(function() {
                var kurir = $(this).val();
                var toko = $(this).attr('id').split('_')[1]; // Extract the store ID from the dropdown ID
                $.ajax({
                    url: '<?php echo base_url("user/update_ongkir"); ?>',
                    type: 'POST',
                    data: {
                        kurir: kurir,
                        toko: toko
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log(data);
                        $('#ongkos').text('Rp. ' + data.ongkos);
                        $('#total').text('Rp. ' + data.total);
                    }
                });
            });
        });

        $('#pay-button').click(function(event) {
            event.preventDefault();
            var kurir = $('#kurir').val();
            $(this).attr("disabled", "disabled");
            $.ajax({
                url: '<?= site_url() ?>/user/token',
                cache: false,
                success: function(data) {
                    console.log('token = ' + data);
                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                    }
                    snap.pay(data, {
                        onSuccess: function(result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>