<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .dropdown-above-slider {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            /* Atur z-index agar dropdown tetap di atas slider */
        }
    </style>
</head>

<body class="w-full">

    <div class="mx-auto mt-2">
    <div class="flex md:flex-row md:items-center md:justify-between w-full">
        <div class="flex flex-row items-center justify-between px-4 w-full">
            <a href="#" class="flex items-center">
                <img class="w-auto h-8 absolute-left transform -translate-y-1/2 mt-7" src="<?php echo base_url('assets/image/logo.png'); ?>" alt="logo">
                <span class="text-sm font-semibold">Admin</span>
            </a>
            <div class="flex items-center md:justify-between space-x-4">
                    <a href="#" class="flex items-center gap-2 ">
                        <img class="rounded-full w-8 h-8" src="<?php echo base_url('assets/image/Profille/1.jpg'); ?>" alt="profille">
                        <p class="text-black mr-4 md:mr-8 font-lg text-sm">Admin slot</p>
                    </a>
                </div>
        </div>
    </div>
    <hr class=" mt-2 bg-gray-100 border-b">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>