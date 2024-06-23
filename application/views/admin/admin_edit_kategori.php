<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    tailwind.config= {

      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: {
              "50": "#eff6ff", "100":"#dbeafe", "200":"#bfdbfe", "300":"#93c5fd", "400":"#60a5fa", "500":"#3b82f6", "600":"#2563eb", "700":"#1d4ed8", "800":"#1e40af", "900":"#1e3a8a", "950":"#172554"
            }
          }
        }

        ,
        fontFamily: {
          'body': [ 'Inter',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
            ],
            'sans': [ 'Inter',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
            ]
        }
      }
    }
  </style>
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
              <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.394 9.553a1 1 0 0 0-1.817.062l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .894-1.447l-2-4A1 1 0 0 0 13.2 13.4l-.53.706-1.276-2.553ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd" />
            </svg>
            <p class="text-gray-500 mb-10">Edit Gambar Kategori</p>
            <input type="file" class="hidden" id="fileUpload">
          </label>
        </div>

        <div class="flex">
          <a href="<?php echo site_url('user/login_user'); ?>" class="mr-5 text-sm font-medium text-gray-900 dark:green-800 bg-gray-100 border border-green-800 rounded-lg px-14 
                py-3 hover:bg-gray-200">Batal</a>
          <button id="gagalButton" data-modal-target="gagal" data-modal-toggle="gagal" class="block text-sm font-medium text-white bg-green-800 border 
                border-green-700 rounded-lg px-14 py-3 hover:bg-green-900" type="button">Simpan</button>

          <div id="gagal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
              <!-- Modal content -->
              <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
                <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                  </svg>
                  <span class="sr-only">Gagal</span>
                </div>
                <p class="text-lg font-bold text-gray-900">Gagal Mengedit Kategori</p>
              </div>

            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      document.getElementById('gagalButton').click();
    });
  </script>
</body>

</html>