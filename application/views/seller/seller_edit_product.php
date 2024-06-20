<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

<div class="container mx-auto mt-10 mb-10">
  <div class="w-3/5 mx-auto bg-white p-8 rounded-lg">
    <h2 class="text-2xl mb-6 font-bold ">Edit Produk</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Nama Produk</label>
        <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded" placeholder="Tuliskan Nama Produk">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Kategori</label>
        <select class="w-full mt-1 p-2 border border-gray-300 rounded">
          <option>Pilih Kategori</option>
          <!-- Add more options here -->
        </select>
      </div>
      <div class="flex mb-4 space-x-4">
        <div class="w-1/2">
          <label class="block text-gray-700  font-bold ">Stok</label>
          <input type="number" class="w-full mt-1 p-2 border border-gray-300 rounded" value="120">
        </div>
        <div class="w-1/2">
          <label class="block text-gray-700  font-bold ">Diskon</label>
          <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded" value="20%">
        </div>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Harga</label>
        <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded" value="Rp32000">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold ">Kadaluwarsa</label>
        <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded"placeholder="Pilih Tanggal Kadaluwarsa" onfocus="(this.type='date')" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Deskripsi Produk</label>
        <textarea class="w-full mt-1 p-2 border focus:ring-white hover:focus:ring-white border-gray-300 rounded h-48" placeholder="Tuliskan Deskripsi Produk Disini"></textarea>
      </div>

      <div class="flex flex-col mx-auto mb-6 w-full ">
        <label class="block text-gray-700 mb-2 font-bold">Foto Produk</label>
        <div class="flex flex-row mx-auto gap-4 items-center w-full">

            <label for="fotoutama" class="flex mx-auto w-40 flex-col border border-gray-300 h-40 rounded-lg p-2 justify-center items-center text-center">
              <div class="flex flex-col items-center justify-center w-full h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <input type="file" id="fotoutama" class="invisible">
                <p class="block text-gray-300">Foto Utama</p>
              </div>
            </label>
            <label for="foto1" class="flex mx-auto w-40 flex-col border border-gray-300 h-40 rounded-lg p-2 justify-center items-center text-center">
              <div class="flex flex-col items-center justify-center w-full h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <input type="file" id="foto1" class="invisible">
                <p class="block text-gray-300">Foto 1</p>
              </div>
            </label>
            <label for="foto2" class="flex mx-auto w-40 flex-col border border-gray-300 h-40 rounded-lg p-2 justify-center items-center text-center">
              <div class="flex flex-col items-center justify-center w-full h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <input type="file" id="foto2" class="invisible">
                <p class="block text-gray-300">Foto 2</p>
              </div>
            </label>

            <label for="foto3" class="flex mx-auto w-40 flex-col border border-gray-300 h-40 rounded-lg p-2 justify-center items-center text-center">
              <div class="flex flex-col items-center justify-center w-full h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <input type="file" id="foto3" class="invisible">
                <p class="block text-gray-300">Foto 3</p>
              </div>
            </label>


          </div>
      </div>

      <div class="flex">
                <a href="<?php echo site_url('user/login_user'); ?>" class="mr-5 text-sm font-medium text-gray-900 dark:green-800 bg-gray-100 border border-green-800 rounded-lg px-14 
                py-3 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-white-200 dark:hover:bg-gray-400 dark:focus:ring-white">Batal</a>
                <a href="<?php echo site_url('user/daftar_user'); ?>" class="text-sm font-medium text-white bg-green-800 border border-green-700 rounded-lg px-14 
                py-3 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-white">Simpan</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>