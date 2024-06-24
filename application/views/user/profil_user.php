<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Card and Form</title>
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
    <div class="flex flex-row w-4/5 items-start gap-8 mx-auto mt-4 overflow-auto">

        <?php $this->load->view('user/partial/sidebar'); ?>

        <!-- Profile Form -->
        <div class="flex-col grow">
            <div class="flex-col rounded-lg shadow-lg w-full border-2 border-bg-gray-600 py-6 px-2 mb-6 ">
                <h2 class="ml-5 text-2xl font-bold">Profil Saya</h2>

                <hr class="mt-4 h-px my-5 bg-gray-200 border-1 dark:bg-gray-700">

                <form action="<?php echo site_url('user/simpan_user'); ?>" method="post" id="profileForm" enctype="multipart/form-data">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col gap-4 w-full">

                            <div class>
                                <label class="ml-5 block text-sm font-bold text-gray-700">Username</label>
                                <input type="text" name="username" value="<?php echo $user->username; ?>" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2">
                            </div>
                            <div class>
                                <label class="ml-5 block text-sm font-bold text-gray-700">Nama Lengkap</label>
                                <input type="text" name="namalengkap" value="<?php echo $user->nama_User; ?>" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2">
                            </div>
                            <div>
                                <label class="ml-5 block text-sm font-bold text-gray-700">E-mail</label>
                                <input type="email" name="email" value="<?php echo $user->email; ?>" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md
                                 shadow-sm p-2">
                            </div>
                            <div>
                                <label class="ml-5 block text-sm font-bold text-gray-700">No. HP</label>
                                <input type="text" value="<?php echo $user->noHP; ?>" name="nomor" class="ml-5 mt-1 block w-10/12 border border-gray-300 rounded-md shadow-sm p-2">
                            </div>
                            <div class="flex justify-start ">
                                <!-- Modal toggle -->
                                <div class="flex justify-center m-5">
                                    <button class="block text-white 
                                    bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-20 py-2.5 text-center" data-modal-toggle="successModal" data-modal-target="successModal" id="successButton" type="submit">
                                        Simpan
                                    </button>
                                </div>
                </form>
                <!-- Main modal -->
               
                    <div id="successModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->

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

                    </div>


            </div>
        </div>

        <div class="row-span-3 flex justify-center items-center">
            <div class="flex flex-col items-center">
                <img id="profile-picture" src="<?php echo base_url('assets/image/profile/'.$user->foto)?>" alt="Foto Profil" class="overflow-hidden relative w-40 h-40 object-cover object-center ml-5 bg-gray-300 rounded-full mt-5 mb-4">
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


    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="">
        $(document).ready(function() {
            $('#successButton').click(function() {
                event.preventDefault();
                var formData = new FormData($('#profileForm')[0]);
                $.ajax({
                    url: '<?php echo site_url('user/simpan_user'); ?>',
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
                    window.location.href = '<?php echo site_url('user/profil_user'); ?>';
                }
            });
        });

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
    </script>
</body>

</html>