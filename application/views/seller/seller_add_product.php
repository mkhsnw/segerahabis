<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

<div class="container mx-auto mt-10 mb-10">
  <div class="max-w-lg mx-auto bg-white p-8 rounded-lg">
    <h2 class="text-2xl font-bold mb-6">Tambah Produk</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold">Nama Produk</label>
        <input type="text" class="w-full mt-1 p-2 border rounded" placeholder="Tuliskan Nama Produk">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold">Kategori</label>
        <select class="w-full mt-1 p-2 border rounded">
          <option>Pilih Kategori</option>
          <!-- Add more options here -->
        </select>
      </div>
      <div class="flex mb-4 space-x-4">
        <div class="w-1/2">
          <label class="block text-gray-700 font-bold">Stok</label>
          <input type="number" class="w-full mt-1 p-2 border rounded" value="120">
        </div>
        <div class="w-1/2">
          <label class="block text-gray-700">Diskon</label>
          <input type="text" class="w-full mt-1 p-2 border rounded" value="20%">
        </div>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold">Harga</label>
        <input type="text" class="w-full mt-1 p-2 border rounded" value="Rp32000">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold">Kadaluwarsa</label>
        <input type="text" class="w-full mt-1 p-2 border rounded"placeholder="Pilih Tanggal Kadaluwarsa" onfocus="(this.type='date')" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold">Deskripsi Produk</label>
        <textarea class="w-full h-48 mt-1 p-2 border rounded" placeholder="Tuliskan Deskripsi Produk Disini"></textarea>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 mb-2 font-bold">Foto Produk</label>
        <div class="flex space-x-4">
          <div class="w-1/4 border rounded p-4 text-center relative">
            <label class="block text-gray-700 mb-2">Foto Utama</label>
            <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
            <button type="button" class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Pilih Foto</button>
          </div>
          <div class="w-1/4 border rounded p-4 text-center relative">
            <label class="block text-gray-700 mb-2">Foto 2</label>
            <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
            <button type="button" class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Pilih Foto</button>
          </div>
          <div class="w-1/4 border rounded p-4 text-center relative">
            <label class="block text-gray-700 mb-2">Foto 3</label>
            <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
            <button type="button" class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Pilih Foto</button>
          </div>
          <div class="w-1/4 border rounded p-4 text-center relative">
            <label class="block text-gray-700 mb-2">Foto 4</label>
            <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
            <button type="button" class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Pilih Foto</button>
          </div>
        </div>
      </div>
      <div class="flex">
                <a href="<?php echo site_url('user/login_user'); ?>" class="mr-5 text-sm font-medium text-gray-900 dark:green-800 bg-gray-100 border border-green-800 rounded-lg px-4 py-2 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-white-200 dark:hover:bg-gray-400 dark:focus:ring-white">Batal</a>
                <a href="<?php echo site_url('user/daftar_user'); ?>" class="text-sm font-medium text-white bg-green-800 border border-blue-700 rounded-lg px-4 py-2 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-blue-800">+ Tambah Produk</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>