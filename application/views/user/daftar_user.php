<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register User</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="bg-white-50 dark:bg-white-50">
        
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mt-12 mb-10 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-43 h-10 mr-2" src="<?php echo base_url('assets/image/logo.png'); ?>" alt="logo">  
            </a>

      <div class="w-full bg-white-50 rounded-lg shadow shadow-lg border-2 md:mt-0 sm:max-w-sm xl:p-0 dark:bg-white dark:border-gray-150">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="leading-tight tracking-tight text-gray-900 dark:text-black text-center">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black text-center mb-1">
                    Daftar
                    </h1>
                    <p class="text-sm">Sudah punya akun Segerahabis? <a href="<?php echo site_url('user/login'); ?>" class="text-green-600">Masuk</a></p>
                  </div>
              
              <form class="space-y-4 md:space-y-6" action="<?php echo site_url("user/daftar_user");?>" method="POST">
                    <div>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-150 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-150 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required="">
                    </div>
                    <div>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-150 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-150 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                    </div>
                    <div>
                        <input type="text" name="namalengkap" id="namalengkap" class="bg-gray-50 border border-gray-150 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-150 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap" required="">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="text" name="nohp" id="nohp" placeholder="Nomor HP" class="bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="text" name="kota" id="kota" placeholder="Kota" class="bg-gray-50 border border-gray-150 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black   dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                  <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Daftar</button>
              </form>
          </div>
      </div>

      
  </div>
</section>
    </body>

    <footer class="text-center text-gray-500 text-xs mt-12 mb-4">
        &copy; 2024 Segerahabis. All rights reserved.
    </footer>
</html>