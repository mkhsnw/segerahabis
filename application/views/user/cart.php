<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full">

    <div class="w-4/5 flex flex-col md:items-start mx-auto mb-40">
        <p class="text-black mr-4 md:mr-8 font-bold text-xl mb-2 mt-4">Keranjang</p>
        <div class="flex flex-row gap-3 w-full">
            <div class="flex-col md:items-center mx-auto">
                <?php foreach ($cart as $val) { ?>
                    <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg mb-2">
                        <div class="w-full px-4 py-2">
                            <div class="flex flex-row items-center mb-2 gap-6 px-6 py-3">
                                <a href="<?php echo site_url('user/delete_cart/' . $val['rowid']) ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                        <path fill="red" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <img srcset="<?php echo base_url('assets/foto_produk/'.$val['image']); ?> 2x" class="w-20 h-20 max-w-xl rounded-lg" alt="image description">
                                <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 w-60"><?php echo $val['name'] ?></h5>

                                <div class="max-w-xs mx-auto">
                                    <div class="relative flex items-center max-w-[8rem]">
                                        <button type="button" class="decrement-button bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none" data-rowid="<?php echo $val['rowid']; ?>">
                                            <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="quantity-input-<?php echo $val['rowid']; ?>" data-rowid="<?php echo $val['rowid']; ?>" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full py-2.5" value="<?php echo $val['qty'] ?>" required />
                                        <button type="button" class="increment-button bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none" data-rowid="<?php echo $val['rowid']; ?>">
                                            <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-black mr-4 md:mr-8 font-bold text-lg w-36 text-right">Rp. <?php echo $val['price'] ?></p>
                            </div>
                        </div>
                    </ul>
                <?php } ?>

            </div>
            <div class="w-4/12">
                <ul class="w-full text-sm font-medium text-gray-900 bg-white border-2 border-gray-200 rounded-lg mb-2">
                    <div class="w-full px-8 py-2 flex flex-col">
                        <p class="text-black font-bold text-lg mb-6 mt-4">Ringkasan Belanja</p>

                        <div class="flex flex-row justify-between mb-4 ">
                            <p class="text-black font-md text-md">Total</p>
                            <p class="text-black font-md text-md ">Rp. <?php echo $total ?></p>
                        </div>
                        <p class="border-2 border-t border-bg-black"></p>
                        <a href="<?php echo site_url('user/checkout'); ?>" class="mt-4 mb-4 text-sm text-center font-medium text-white bg-green-800 border border-green-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Beli (<?php echo $qtyItem ?>)</a>
                    </div>
                </ul>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.increment-button').click(function() {
                var rowid = $(this).data('rowid');
                var input = $('#quantity-input-' + rowid);
                var qty = parseInt(input.val()) + 1;
                updateCartItem(rowid, qty);
            });

            $('.decrement-button').click(function() {
                var rowid = $(this).data('rowid');
                var input = $('#quantity-input-' + rowid);
                var qty = parseInt(input.val()) - 1;
                if (qty > 0) {
                    updateCartItem(rowid, qty);
                }
            });

            function updateCartItem(rowid, qty) {
                $.ajax({
                    url: '<?php echo base_url("user/update_cart"); ?>',
                    type: 'POST',
                    data: {
                        rowid: rowid,
                        qty: qty
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.status == 'success') {
                            location.reload(); // Reload the page to reflect updated cart
                        } else {
                            alert('Failed to update cart');
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>