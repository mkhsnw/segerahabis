<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Seller</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <div class="flex flex-row w-full mx-auto items-start bg-green-100 overflow-auto">
        <aside id="default-sidebar" class="flex-col left-0 z-10 md:w-64 sm:w-20 h-screen" aria-label="Sidebar">
                <div class="h-full px-3 py-4 bg-white dark:bg-white border-r-2 border-bg-gray-600 shadow shadow-lg">
                    <ul class="space-y-0 font-medium">
                        <li>
                            <a href="#" aria-current="page" class="flex text-lg font-bold items-center  p-2 text-green-700 rounded-lg 
                            dark:text-green-700  group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>

                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                            dark:hover:bg-green-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>


                                <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 
                            dark:hover:bg-green-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>


                                <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex text-lg font-bold items-center hover:text-white p-2 text-black rounded-lg dark:text-black hover:bg-green-700 dark:hover:bg-green-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
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
            <p class="text-black font-bold text-xl mb-8">Dashboard</p>

            <div class="flex flex-row w-full gap-8">

                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white tracking-wide">
                    <div class="w-full p-4 flex flex-col">
                        <h1 class="text-black text-base font-medium mb-6">Total Penghasilan</h1>
                        <h1 class="text-black text-4xl font-bold">Rp. 45.000.000</h1>

                        <div class="w-full flex flex-row gap-14 mt-3 items-center">
                            <h1 class="text-gray-400 text-xs font-medium">Perbandingan dengan bulan sebelumnya</h1>
                            
                            <div class="flex flex-row items-center gap-1 px-2 py-1 bg-green-200 items-center rounded-lg self-end">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-900 size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                </svg>
                                <h1 class="text-green-900 font-bold md:text-base">32%</h1>
                            </div>

                        </div>

                    </div>
                </ul>

                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white">
                    <div class="w-full p-4 flex flex-col">
                        <h1 class="text-black text-base font-medium mb-6">Total Pesanan</h1>
                        <h1 class="text-black text-4xl font-bold">1.560</h1>
                        <div class="w-full flex flex-row gap-14 mt-3 items-center">
                            <h1 class="text-gray-400 text-xs font-medium">Perbandingan dengan bulan sebelumnya</h1>
                            <div class="flex flex-row gap-1 px-2 py-1 bg-green-200 items-center rounded-lg self-end">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-900 size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                </svg>
                                <h1 class="text-green-900 font-bold text-base">12%</h1>
                            </div>
                        </div>
                    </div>
                </ul>

                <ul class="w-full text-sm font-medium text-gray-900 bg-white shadow shadow-lg border 
                border-bg-gray-600 rounded-lg dark:bg-white dark:text-white">
                    <div class="w-full p-4 flex flex-col">
                        <h1 class="text-black text-base font-medium mb-6">Total Pembeli</h1>
                        <h1 class="text-black text-4xl font-bold">986</h1>
                        <div class="w-full flex flex-row gap-14 mt-3 items-center">
                            <h1 class="text-gray-400 text-xs font-medium">Perbandingan dengan bulan sebelumnya</h1>
                            <div class="flex flex-row gap-1 px-2 py-1 bg-red-200 items-center rounded-lg self-end">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-red-900 size-6">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>

                                <h1 class="text-red-900 font-bold text-base">12%</h1>
                            </div>
                        </div>
                    </div>
                </ul>

            </div>


        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>