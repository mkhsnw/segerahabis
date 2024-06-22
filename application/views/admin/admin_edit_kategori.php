<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">

  <div class="container mx-auto mt-5">
    <div class="w-3/5 mx-auto bg-white p-8 rounded-lg">
      <h2 class="text-2xl font-bold mb-6">Edit Kategori</h2>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold">Tambah Kategori</label>
          <input type="text" class="w-full mt-1 p-2 border rounded border border-gray-300" placeholder="Ubah Nama Kategori">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2">Gambar Kategori</label>
          <label for="fileUpload" class="w-full border rounded border-gray-300 p-6 flex flex-col items-center cursor-pointer">
            <svg class="mt-10 w-12 h-12 text-gray-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.394 9.553a1 1 0 0 0-1.817.062l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .894-1.447l-2-4A1 1 0 0 0 13.2 13.4l-.53.706-1.276-2.553ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd"/>
            </svg>
            <p class="text-gray-500 mb-10">Edit Gambar Kategori</p>
            <input type="file" class="hidden" id="fileUpload">
          </label>
        </div>

        <div class="flex">
          <a href="<?php echo site_url('user/login_user'); ?>" class="mr-5 text-sm font-medium text-gray-900 dark:green-800 bg-gray-100 border border-green-800 rounded-lg px-14 
                py-3 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-white-200 dark:hover:bg-gray-400 dark:focus:ring-white">Batal</a>
          <a href="<?php echo site_url('user/daftar_user'); ?>" class="text-sm font-medium text-white bg-green-800 border border-green-700 rounded-lg px-14 
                py-3 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-white">+ Tambah Kategori</a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>