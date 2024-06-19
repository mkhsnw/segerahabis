<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Card and Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex flex-row w-4/5 items-start gap-8 mx-auto mt-4 mb-6">
        <div class="flex col w-3/12 ">
            <!-- Profile Card -->
            <div class="bg-white w-full rounded-lg border-2 border-bg-gray-600 shadow-lg py-6 px-4">
                <div class="flex items-center">
                    <img src="https://cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Foto Profil" class="w-20 h-20 ml-3 bg-gray-300 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold">Danang</h2>
                    </div>
                </div>

                <hr class="h-px my-5 bg-gray-200 border-1 dark:bg-gray-700">

                <div class="mt-4">
                    <div class="ml-3 mb-2">
                        <div class="flex flex-row w-full items-center gap-2 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <h3 class="text-xl font-bold">Akun Saya</h3>
                        </div>

                        <ul class="ml-9 items-center">
                            <li><a href="#" class="text-gray-600">Profil</a></li>
                            <li><a href="#" class="text-gray-600">Alamat</a></li>
                            <li><a href="#" aria-current="page" class="text-green-600">Ubah Password</a></li>
                        </ul>
                    </div>

                    <div class="ml-3 mb-2">
                        <div class="flex flex-row w-full items-center gap-2 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>

                            <h3 class="text-xl font-bold">Pesanan Saya</h3>
                        </div>
                        <ul class="ml-9 items-center">
                            <li><a href="#" class="text-gray-600">Belum Bayar</a></li>
                            <li><a href="#" class="text-gray-600">Daftar Pesanan</a></li>
                        </ul>
                    </div>

                    <div class="ml-4 mb-2">
                        <div class="flex flex-row w-full items-center gap-3 mb-1">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                            </svg>
                            <a href="#">
                                <h3 class="text-xl font-bold">Keluar</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Form -->
        <div class="flex-col grow bg-white border-2 border-bg-gray-600 rounded-lg shadow-lg">

            <h2 class="ml-5 mt-4 mb-4 text-2xl font-bold mb-4">Password Saya</h2>
            <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">

            <form class="w-full">
                <div class="flex-col gap-4 w-4/5">

                    <div class="flex flex-row mx-auto w-full items-center gap-2 py-2">
                        <label class="ml-5 block text-sm font-medium text-gray-700 w-1/2">Password Lama</label>
                        <input type="password" value="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" placeholder="********" required>
                    </div>
                    <div class="flex flex-row mx-auto w-full items-center gap-2 py-2">
                        <label class="ml-5 block text-sm font-medium text-gray-700 w-1/2">Password Baru</label>
                        <input type="password" value="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" placeholder="********" required>
                    </div>
                    <div class="flex flex-row mx-auto w-full items-center gap-2 py-2">
                        <div class="flex flex-col w-1/2">
                            <label class="ml-5 block text-sm font-medium text-gray-700 ">Tulis Ulang</label>
                            <label class="ml-5 block text-sm font-medium text-gray-700 ">Password Baru</label>
                        </div>
                        <input type="password" value="" class="mt-1 ml-5 block w-full border border-gray-300 rounded-md shadow-sm" placeholder="********" required>
                    </div>
                </div>

                <div class="w-96 mb-4">
                <div class="w-full flex justify-end py-4">
                    <button type="submit" class="px-11 py-2 bg-green-600 text-white rounded-md shadow-sm hover:bg-green-800">Simpan</button>
                </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>