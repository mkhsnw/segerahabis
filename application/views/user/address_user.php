<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

<body>
    <div class="flex flex-row w-4/5 items-start gap-8 mx-auto mt-4 mb-4">
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
                            <li><a href="#" aria-current="page" class="text-green-600">Alamat</a></li>
                            <li><a href="#" class="text-gray-600">Ubah Password</a></li>
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
        <div class="flex-col grow bg-white border-2 border-bg-black rounded-lg shadow-lg">
            <h2 class="ml-5 mt-7 text-2xl font-bold">Alamat Saya</h2>
            <hr class="mt-4 h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
            <form>
                <div class="flex flex-col gap-6 w-full">
                    <div class="w-full">
                        <label class="ml-5 block text-sm font-bold text-gray-700">Alamat</label>
                        <input type="text" value="55294 Yogyakarta, Indonesia" class="ml-5 mt-1 block w-11/12 border border-gray-300 rounded-md shadow-sm p-2">
                    </div>
                    <div class="w-full">
                        <label class="ml-5 block text-sm font-bold text-gray-700">Detail Alamat</label>
                        <input type="text" value="Samping masjid al-amin" class="ml-5 mt-1 block w-11/12 border border-gray-300 rounded-md shadow-sm p-2">
                    </div>
                </div>
                <div class="flex justify-start">
                    <!-- Modal toggle -->
                    <div class="flex justify-center m-5">
                        <button id="successButton" data-modal-target="successModal" data-modal-toggle="successModal" class="block text-white 
                                    bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center" type="button">
                            Simpan
                        </button>
                    </div>

                    <!-- Main modal -->
                    <div id="successModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative px-2 py-8 text-center bg-white rounded-lg shadow">
                                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="successModal">
                                    <svg aria-hidden="true" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                                    <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Success</span>
                                </div>
                                <p class="mb-4 text-lg font-bold text-gray-900 dark:text-white">Berhasil Mengganti Alamat</p>
                                <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center 
                                            text-white rounded-lg bg-green-600 hover:bg-green-700">
                                    Lanjutkan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('successButton').click();
        });
    </script>
</body>

</html>