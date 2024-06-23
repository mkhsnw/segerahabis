<!-- Gagal Ubah Profil admin -->

<div class="flex justify-center m-5">
    <button id="profilButton" data-modal-target="gagalProfil" data-modal-toggle="gagalProfil" class="block text-white 
                                    bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center" type="button">
        Simpan
    </button>
</div>

<div id="gagalProfil" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!--Gagl hapus -->
        <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
            <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <span class="sr-only">Gagal</span>
            </div>
            <p class="text-lg font-bold text-gray-900">Gagal Mengganti Profil Admin</p>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById('profilButton').click();
    });
</script>








<!-- Gagal Ubah password admin -->
<div class="flex justify-center m-5">
    <button id="passwordButton" data-modal-target="gagalPassword" data-modal-toggle="gagalPassword" class="block text-white 
                                    bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center" type="button">
        Simpan
    </button>
</div>

<div id="gagalPassword" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!--Gagl hapus -->
        <div class="relative px-2 py-6 text-center bg-white rounded-lg shadow">
            <div class="w-12 h-12 rounded-full bg-red-200 p-2 flex items-center justify-center mx-auto mb-3.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <span class="sr-only">Gagal</span>
            </div>
            <p class="text-lg font-bold text-gray-900">Gagal Mengganti Password Admin</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById('passwordButton').click();
    });
</script>