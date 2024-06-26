<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Toko</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <div class="flex flex-row w-full mx-auto items-start bg-gray-100 overflow-auto">
        <aside id="default-sidebar" class="flex-col left-0 z-10 xs:invisible md:visible md:w-64 h-screen sticky" aria-label="Sidebar">
            <div class="h-full px-3 py-4 bg-white dark:bg-white border-r-2 border-bg-gray-600 shadow shadow-lg">
                <ul class="space-y-0 font-medium">
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center text-black p-2 rounded-lg dark:hover:bg-green-700 hover:bg-green-700 hover:text-white group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span class="ms-3">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                            dark:hover:bg-green-700 group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-dark p-2 text-green-700 rounded-lg group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="darkgreen" viewBox="0 0 24 24">
                                <path stroke="darkgreen" stroke-linecap="round" fill-rule="evenodd" d="M5.535 7.677c.313-.98.687-2.023.926-2.677H17.46c.253.63.646 1.64.977 2.61.166.487.312.953.416 1.347.11.42.148.675.148.779 0 .18-.032.355-.09.515-.06.161-.144.3-.243.412-.1.111-.21.192-.324.245a.809.809 0 0 1-.686 0 1.004 1.004 0 0 1-.324-.245c-.1-.112-.183-.25-.242-.412a1.473 1.473 0 0 1-.091-.515 1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.401 1.401 0 0 1 13 9.736a1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.4 1.4 0 0 1 9 9.74v-.008a1 1 0 0 0-2 .003v.008a1.504 1.504 0 0 1-.18.712 1.22 1.22 0 0 1-.146.209l-.007.007a1.01 1.01 0 0 1-.325.248.82.82 0 0 1-.316.08.973.973 0 0 1-.563-.256 1.224 1.224 0 0 1-.102-.103A1.518 1.518 0 0 1 5 9.724v-.006a2.543 2.543 0 0 1 .029-.207c.024-.132.06-.296.11-.49.098-.385.237-.85.395-1.344ZM4 12.112a3.521 3.521 0 0 1-1-2.376c0-.349.098-.8.202-1.208.112-.441.264-.95.428-1.46.327-1.024.715-2.104.958-2.767A1.985 1.985 0 0 1 6.456 3h11.01c.803 0 1.539.481 1.844 1.243.258.641.67 1.697 1.019 2.72a22.3 22.3 0 0 1 .457 1.487c.114.433.214.903.214 1.286 0 .412-.072.821-.214 1.207A3.288 3.288 0 0 1 20 12.16V19a2 2 0 0 1-2 2h-6a1 1 0 0 1-1-1v-4H8v4a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2v-6.888ZM13 15a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2Z" clip-rule="evenodd" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Toko</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-red-700 
                            dark:hover:bg-red-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="flex flex-col h-screen w-full px-6 py-8 bg-gray-100 overflow-auto">
            <p class="text-black font-bold text-xl mb-8">Toko</p>
            <div class="w-full flex flex-col">

                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white">

                    <div class="w-full px-4 py-2 flex flex-col">
                        <div class="flex flex-row w-full gap-2 justify-between overflow-auto py-2 items-center">

                            <form class="w-1/2">
                                <div class="flex">
                                    <div class="relative w-full tracking-wide">
                                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-white-200 rounded-lg 
                                        border-1 border border-gray-300 focus:ring-white-200 focus:border-white-500 dark:bg-white-700 dark:border-s-white-700
                                         dark:border-black-600 dark:placeholder-gray-400 dark:text-black dark:focus:border-white" placeholder="Cari Produk" />
                                        <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-800 rounded-e-lg 
                                        border border-white-700 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 dark:hover:bg-green-800 
                                        dark:focus:ring-white-800">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                            <span class="sr-only">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="w-full">
                            <thead class="bg-gray-200 w-full">
                                <tr class="">
                                    <th class="py-3 px-3 text-left tracking-wide text-black">No</th>
                                    <th class="py-3 px-3 text-left tracking-wide text-black">USERNAME</th>
                                    <th class="py-3 px-3 text-left tracking-wide text-black">NAMA TOKO</th>
                                    <th class="py-3 px-3 text-left tracking-wide text-black">EMAIL</th>
                                    <th class="py-3 px-3 text-left tracking-wide text-black">STATUS</th>
                                    <th class="py-3 px-3 text-left tracking-wide text-black">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b-2 border-bg-black">
                                    <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">1</td>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">pakdanang</td>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Toko pak danang</td>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">pakdanang@mail.com</td>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                                        <p class="text-green-600 py-1 w-20 text-center rounded-md bg-green-100 font-lg text-sm">Aktif</p>
                                    </td>
                                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">


                                        <div class="flex tracking-wide w-full gap-3">
                                            <a href="#">
                                                <div class="flex">
                                                    <button class="block flex bg-white gap-1 items-center border border-slate-400
                                                    rounded-lg px-4 py-2 hover:bg-grey-200 
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-grey-200 
                                                    dark:focus:ring-grey-800" type="button">
                                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="grey" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                                            <path stroke="grey" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                        <span class="text-sm font-medium text-grey-800">Lihat</span>
                                                    </button>
                                                </div>
                                            </a>



                                            <div class="flex">
                                                <button id="NonaktifButton" data-modal-target="nonaktifToko" data-modal-toggle="nonaktifToko" class="block flex bg-white gap-1 items-center border border-red-800 
                                                    rounded-lg px-4 py-2 hover:bg-red-200
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
                                                    dark:focus:ring-red-800" type="button">
                                                    <span class="text-sm font-medium text-red-800">Nonaktifkan</span>
                                                </button>
                                                <div id="nonaktifToko" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
                                                        justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-6 w-full max-w-sm h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative md:p-6 sm:p-4 border-2 border-gray-300 text-center bg-white rounded-lg shadow dark:bg-gray-800 ">
                                                            </button>
                                                            <p class="text-black font-bold text-lg mb-2">Nonaktifkan Toko</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Username: @pakdanang</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Nama Toko: Toko Pak Danang</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Email: pakdanang@email.com</p>
                                                            <p class="text-gray-500 dark:text-gray-300">No HP: 0123 456 789</p>
                                                            <p class="mb-6 text-gray-500 dark:text-gray-300">Kota: Gantiwarno, Klaten</p>

                                                            <div class="flex justify-center items-center space-x-4">
                                                                <button data-modal-toggle="nonaktifToko" type="button" class="py-2 px-9 text-sm font-medium text-black bg-white rounded-lg border 
                                                                    border-gray-600 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 
                                                                    hover:text-black focus:z-10 dark:bg-gray-700 dark:text-black dark:border-gray-500 
                                                                    dark:hover:text-black dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                    Batal
                                                                </button>
                                                                <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 
                                                                    rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 
                                                                    dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                                    Nonaktifkan
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex">
                                                <button id="deleteButton" data-modal-target="deleteToko" data-modal-toggle="deleteToko" class="block flex bg-white gap-1 items-center border border-red-800 
                                                    rounded-lg px-4 py-2 hover:bg-red-200 
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
                                                    dark:focus:ring-red-800" type="button">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-800">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg></span>
                                                    <span class="text-sm font-medium text-red-800">Hapus</span>
                                                </button>
                                                <div id="deleteToko" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
                                                        justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-6 w-full max-w-sm h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative md:p-6 sm:p-4 border-2 border-gray-300 text-center bg-white rounded-lg shadow dark:bg-gray-800 ">
                                                            </button>
                                                            <p class="text-black font-bold text-lg mb-2">Hapus Toko</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Username: @pakdanang</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Nama Toko: Toko Pak Danang</p>
                                                            <p class="text-gray-500 dark:text-gray-300">Email: pakdanang@email.com</p>
                                                            <p class="text-gray-500 dark:text-gray-300">No HP: 0123 456 789</p>
                                                            <p class="mb-6 text-gray-500 dark:text-gray-300">Kota: Gantiwarno, Klaten</p>

                                                            <div class="flex justify-center items-center space-x-4">
                                                                <button data-modal-toggle="deleteToko" type="button" class="py-2 px-9 text-sm font-medium text-black bg-white rounded-lg border 
                                                                    border-gray-600 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 
                                                                    hover:text-black focus:z-10 dark:bg-gray-700 dark:text-black dark:border-gray-500 
                                                                    dark:hover:text-black dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                    Batal
                                                                </button>
                                                                <button type="submit" class="py-2 px-8 text-sm font-medium text-center text-white bg-red-600 
                                                                    rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 
                                                                    dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                                    Hapus
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                </ul>
                </tr>

                <tr class="border-b-2 border-bg-black">
                    <td class="px-5 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">2</td>
                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">paksiregarlaud</td>
                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">Kapal Laud</td>
                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">siregar@mail.com</td>
                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">
                        <p class="text-red-600 py-1 w-20 text-center rounded-md bg-red-100 font-lg text-sm">Nonaktif</p>
                    </td>
                    <td class="px-3 py-5 text-sm font-medium text-gray-600 whitespace-nowrap ...">


                        <div class="flex tracking-wide w-full gap-3">
                            <a href="#">
                                <div class="flex">
                                    <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="block flex bg-white gap-1 items-center border border-slate-400
                                                    rounded-lg px-4 py-2 hover:bg-grey-200 
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-grey-200 
                                                    dark:focus:ring-grey-800" type="button">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="grey" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="grey" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="text-sm font-medium text-grey-800">Lihat</span>
                                    </button>
                                </div>
                            </a>

                            <div class="flex">
                                <button class="flex bg-green-800 gap-1 items-center border border-green-800 rounded-lg px-7 py-2 hover:bg-green-900 
                                                    focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-green-700 dark:hover:bg-green-800 
                                                    dark:focus:ring-green-800" type="button">
                                    <span class="text-sm font-medium text-white">Aktifkan</span>
                                </button>
                            </div>

                            <div class="flex bg">
                                <button id="deleteButton" data-modal-target="deleteToko" data-modal-toggle="deleteToko" class="block flex bg-white gap-1 items-center border border-red-800 
                                                    rounded-lg px-4 py-2 hover:bg-red-200 
                                                    focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-red-200 
                                                    dark:focus:ring-red-800" type="button">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-800">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg></span>
                                    <span class="text-sm font-medium text-red-800">Hapus</span>
                                </button>
                            </div>
                    </td>


                </tr>
                </tbody>
                </table>
            </div>
            <div class="flex px-4 py-4 justify-between items-center whitespace-nowrap overflow-auto">
                <div class="flex gap-1">
                    <h1 class="font-normal text-xs text-gray-500">Menampilkan</h1>
                    <h1 class="font-semibold text-xs text-black ">1 - 10</h1>
                    <h1 class="font-normal text-xs text-gray-500">dari</h1>
                    <h1 class="font-semibold text-xs text-black">96</h1>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm">
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 text-black-600 border border-gray-300 bg-green-700 dark:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </ul>
    </div>

    </div>

    </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('NonaktifButton').click();
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('DeleteButton').click();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>