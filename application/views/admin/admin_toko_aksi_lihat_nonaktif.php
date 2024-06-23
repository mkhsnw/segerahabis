<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Lihat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="w-full">

    <div class="mb-10 bg-white py-8 rounded-lg w-2/5 mx-auto">
    <div class="mb-3 flex flex-row w-full">
        <div>
            <img src="https://cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Foto Profil" class="w-20 h-20 bg-gray-300 rounded-full">
        </div>
        <div class="ml-5">
            <h1 class="text-2xl font-bold mt-3">Toko Pak Danang</h1>
            <h1 class="text-sm font-sm mb-4">@pakdanang</h1>
        </div>
    </div>
        <div class="flex flex-row w-full gap-10">
            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">Username</p>
                    <p class="text-sm font-normal">Pakde Danang</p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">Email</p>
                    <p class="text-sm font-normal">danangcakepbetul@mail.com</p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold">Kota</p>
                    <p class="text-sm font-normal">Gantiwaro, Klaten</p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="mb-2 text-sm font-bold">Status</p>
                    <p class="text-red-600 py-1 w-20 text-center rounded-md bg-red-100 font-lg text-sm">Nonaktif</p>
                </div>
            </div>

            <div class="w-1/2">
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">Nama Toko</p>
                    <p class="text-sm font-normal">Toko Pak Danang</p>
                </div>
                <div class="flex flex-col mx-auto py-2">
                    <p class="text-sm font-bold">No HP</p>
                    <p class="text-sm font-normal">0123 4567 8910</p>
                </div>
                <div class="flex flex-col mx-auto py-4">
                    <p class="text-sm font-bold">Alamat</p>
                    <p class="text-sm font-normal">Gentan RT 08 / RW 04, Gentan, Gantiwarno, Klaten, Jawa Tengah, 5745</p>
                </div>
            </div>
        </div>

        <div class="flex justify-between mt-4">
            <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="w-full flex items-center justify-center bg-white border border-red-800 
            rounded-lg px-4 py-2 hover:bg-red-200 mx-2
            focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
            dark:focus:ring-red-800" type="button">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg></span>
                <span class="text-sm font-medium text-red-800">Hapus</span>
            </button>
            
            <button id="activateButton" data-modal-target="activateModal" data-modal-toggle="activateModal" class="w-full flex items-center justify-center bg-green-800 border border-green-800 
            rounded-lg px-4 py-2 hover:bg-green-900 mx-2
            focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-green-700 dark:hover:bg-green-800 
            dark:focus:ring-green-800" type="button">
                <span class="text-sm font-medium text-white">Aktifkan</span>
            </button>

        </div>
    </div>

</body>

</html>
