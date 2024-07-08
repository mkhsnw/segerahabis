<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <style>
    </style>
</head>

<body class=" overflow-y-hidden">
    <div class="flex flex-row w-full mx-auto items-start bg-gray-100">
        <aside id="default-sidebar" class="flex-col left-0 z-10 xs:invisible md:visible md:w-64 h-screen sticky" aria-label="Sidebar">
            <div class="h-full px-3 py-4 bg-white dark:bg-white border-r-2 border-bg-gray-600 shadow shadow-lg">
                <ul class="space-y-0 font-medium">
                    <li>

                        <a href="<?php echo site_url('seller/dashboard_seller'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                        dark:hover:bg-green-700 group">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>

                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/product_seller'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                            dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/seller_pesanan'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                            dark:hover:bg-green-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>


                            <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                        </a>
                    </li>
                    <li>

                        <a href="<?php echo site_url('seller/pengaturan'); ?>" aria-current="page" class="flex text-lg font-bold items-center p-2 text-green-700 rounded-lg dark:text-green-700 group">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('seller/logout'); ?>" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-red-700 
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

        <div class="flex flex-col w-full px-6 py-8 bg-gray-100 overflow-auto" style="height: 85vh;">
            <p class="text-black font-bold text-3xl mb-8">Pengaturan Toko</p>
            <!-- Profile Form -->
            <div class="flex-col grow">
                <div class="flex-col rounded-lg shadow-lg w-full bg-white border-2 border-bg-gray-600 py-6 px-2 mb-6 ">
                    <h2 class="ml-5 text-xl font-bold">Profil Toko</h2>

                    <hr class="mt-4 h-px my-5 bg-gray-200 border-1 dark:bg-gray-700">

                    <form action="<?php echo site_url('seller/simpan_seller_profile'); ?>" method="post" id="profileForm" enctype="multipart/form-data">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col gap-4 w-full">
                                <div class>
                                    <label class="ml-5 block text-sm font-bold text-gray-700">Username</label>
                                    <input type="text" name="username" value="<?php echo $user->username ?>" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2">
                                </div>
                                <div class>
                                    <label class="ml-5 block text-sm font-bold text-gray-700">Nama Toko</label>
                                    <input type="text" name="nama_Toko" value="<?php echo $user->nama_Toko ?>" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2">
                                </div>
                                <div class>
                                    <label class="ml-5 block text-sm font-bold text-gray-700">Deskripsi Toko</label>
                                    <textarea class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2 h-40" value="<?php echo $user->deskripsi ?>" name="deskripsi" placeholder=""><?php echo $user->deskripsi ?></textarea>
                                </div>

                                <div class="flex justify-start ">
                                    <!-- Modal toggle -->
                                    <div class="flex justify-center px-5">
                                        <button type="submit" class="block text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center">Simpan</button>
                                    </div>

                                    <!-- Main modal 
                                    <div id="profilToko" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content 
                                            <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
                                                <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                    </svg>
                                                    <span class="sr-only">Gagal</span>
                                                </div>
                                                <p class=" text-lg font-bold text-gray-900">Gagal Menyimpan Profil Toko</p>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                            <div class="row-span-3 flex justify-center items-center">
                                <div class="flex flex-col items-center">
                                    <img id="profile-picture" src="<?php echo base_url('assets/image/profile/' . $user->logo_Toko) ?>" alt="Foto Profil" class="w-40 h-40 ml-5 bg-gray-300 rounded-full mt-5 mb-4">
                                    <label for="file-upload" class="file-label ml-5 px-10 py-2 border border-gray-300 rounded-md shadow-sm">
                                        Pilih Foto
                                    </label>
                                    <input id="file-upload" name="profile" type="file" class="file-input invisible" />
                                    <p class="ml-5 text-xs font-semibold text-gray-500 text-center">
                                        Ukuran foto: maks. 10 MB<br>Format foto: .JPG, .JPEG, .PNG</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <!-- kontak Form -->
            <div class="flex-col grow bg-white border-2 border-bg-black rounded-lg shadow-lg mb-6">
                <h2 class="ml-5 mt-7 text-xl font-bold">Kontak Toko</h2>
                <hr class="mt-4 h-px my-5 bg-gray-200 border-0">
                <form action="<?php echo site_url('seller/simpan_kontak'); ?>" id="kontakForm" method="post">
                    <div class="flex flex-col gap-6 w-full">
                        <div class="w-full">
                            <label class="ml-5 block text-sm font-bold text-gray-700">Email</label>
                            <input type="text" name="email" value="<?php echo $user->email; ?>" class="ml-5 mt-1 block w-11/12 border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div class="w-full">
                            <label class="ml-5 block text-sm font-bold text-gray-700">No. HP</label>
                            <input type="text" name="noHP" value="<?php echo $user->noHP; ?>" class="ml-5 mt-1 block w-11/12 border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                    </div>
                    <div class="flex justify-start">
                        <!-- Submit button -->
                        <div class="flex justify-center m-5">
                            <button type="submit" class="block text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>


                        <!-- Main modal
                        <div id="kontakToko" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content
                                <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
                                    <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                        </svg>
                                        <span class="sr-only">Gagal</span>
                                    </div>
                                    <p class=" text-lg font-bold text-gray-900">Gagal Menyimpan Kontak Toko</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>

            <!-- kontak Form -->
            <div class="flex-col grow bg-white border-2 border-bg-black rounded-lg shadow-lg">
                <h2 class="ml-5 mt-7 text-xl font-bold">Alamat Toko</h2>
                <hr class="mt-4 h-px my-5 bg-gray-200 border-0">
                <form action="<?php echo site_url('seller/simpan_alamat'); ?>" id="alamatForm" method="post">
                    <div class="flex flex-col gap-6 w-full">
                        <div>
                            <select required id="province" name="province" class="ml-5 bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-11/12 p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black   dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>pilih provinsi</option>
                            </select>
                        </div>
                        <div>
                            <select required id="city" name="city" class="ml-5 bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-11/12 p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black   dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Pilih Kota</option>
                            </select>
                        </div>
                        <div>
                            <label class="ml-5 block text-sm font-bold text-gray-700">Alamat</label>
                            <input type="text" name="alamat" value="<?php echo $user->alamat ?>" class="ml-5 mt-1 block w-11/12 border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                    </div>
                    <div class="flex justify-start">
                        <!-- Modal toggle -->
                        <div class="flex justify-center m-5">
                            <button type="submit" class="block text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>

                        <!-- Main modal 
                        <div id="successModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content 

                                <div class="relative px-2 py-8 text-center bg-white rounded-lg shadow">
                                    <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="successModal" id="closeModalButton">
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
                                    <p class="mb-4 text-lg font-bold text-gray-900 dark:text-white">Berhasil Mengganti Profil</p>
                                    <button data-modal-toggle="successModal" id="continueButton" type="button" class="py-2 px-3 text-sm font-medium text-center 
                                            text-white rounded-lg bg-green-600 hover:bg-green-700">
                                        Lanjutkan
                                    </button>
                                </div>
                            </div>

                        </div>-->
                    </div>
                </form>
            </div>

            <!-- Password -->
            <div class="flex-col grow bg-white border-2 border-bg-gray-600 rounded-lg shadow-lg mt-6">

                <h2 class="ml-5 mt-4 mb-4 text-xl font-bold mb-4">Password Saya</h2>
                <hr class="h-px my-5 bg-gray-200 border-0">

                <form class="w-full">
                    <div class="flex-col gap-4 w-4/5">
                        <div class="flex flex-row mx-auto w-full items-center gap-2 py-2">
                            <label class="ml-5 block text-sm font-medium text-gray-700 w-1/2">Password Baru</label>
                            <input type="password" value="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" placeholder="" required>
                        </div>
                        <div class="flex flex-row mx-auto w-full items-center gap-2 py-2">
                            <div class="flex flex-col w-1/2">
                                <label class="ml-5 block text-sm font-medium text-gray-700 ">Tulis Ulang</label>
                                <label class="ml-5 block text-sm font-medium text-gray-700 ">Password Baru</label>
                            </div>
                            <input type="password" value="" class="mt-1 ml-5 block w-full border border-gray-300 rounded-md shadow-sm" placeholder="" required>
                        </div>
                    </div>

                    <div class="w-full mb-4">
                        <div class="w-full flex ml-5 py-2">
                            <!-- Modal toggle -->
                            <div class="flex justify-center">
                                <button id="successButton" data-modal-target="successModal" data-modal-toggle="successModal" class="block text-white 
                        bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center mr-3" type="button">
                                    Simpan
                                </button>
                            </div>

                            <!-- Main modal -->
                            <div id="passwordToko" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative px-2 py-8 text-center bg-white rounded-lg shadow">
                                        <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="passwordToko">
                                            <svg aria-hidden="true" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="w-12 h-12 rounded-full bg-green-100 p-2 flex items-center justify-center mx-auto mb-3.5">
                                            <svg aria-hidden="true" class="w-8 h-8 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Success</span>
                                        </div>
                                        <p class="mb-4 text-lg font-bold text-gray-900">Berhasil Mengganti Password Toko Anda</p>
                                        <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center 
                                            text-white rounded-lg bg-green-600 hover:bg-green-700">
                                            Lanjutkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="">

        document.getElementById('file-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-picture').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        $(document).ready(function() {
            $('#successButton').click(function() {
                event.preventDefault();
                var formData = new FormData($('#profileForm')[0]);
                $.ajax({
                    url: '<?php echo site_url('seller/pengaturan'); ?>',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Check if the response indicates success

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error occurred: ' + textStatus);
                    }
                });
            });
            $('#closeModalButton, #continueButton').click(function() {
                $('#successModal').addClass('hidden');
                if (this.id == 'continueButton') {
                    window.location.href = '<?php echo site_url('seller/simpan_seller_profile'); ?>';
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('profilButton').click();
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('kontakButton').click();
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('alamatButton').click();
        });
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('passwordButton').click();
        });

    function getProvince() {
        $.ajax({
            url: "<?php echo site_url('user/getProvince'); ?>",
            type: "GET",
            success: function(result) {
                $("#province").html(result);
            }
        })
    }
    $('#province').change(function() {
        $.ajax({
            url: "<?php echo site_url('user/getCity/'); ?>" + $('#province').val(),
            type: "GET",
            success: function(result) {
                $("#city").html(result);
            }
        })
    });

    getProvince();
    </script>

</body>

</html>