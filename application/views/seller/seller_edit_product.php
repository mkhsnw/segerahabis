<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">

<div class="container mx-auto mt-10 mb-10">
  <div class="w-3/5 mx-auto bg-white p-8 rounded-lg">
    <h2 class="text-2xl mb-6 font-bold ">Edit Produk</h2>
    <form action="<?php echo site_url('seller/edit_product/' . $produk->id_Produk); ?>" method="post" id="profileForm" enctype="multipart/form-data">
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Nama Produk</label>
        <input type="text" name="nama_Produk" class="w-full mt-1 p-2 border border-gray-300 rounded" placeholder="" value="<?php echo $produk->nama_Produk; ?>">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Kategori</label>
        <select name="kategori" class="w-full mt-1 p-2 border border-gray-300 rounded">
          <option value="">Pilih Kategori</option>
          <?php foreach ($kategori as $val) { ?>
                <option value="<?php echo $val->id_Kategori; ?>" <?php echo $val->id_Kategori == $produk->id_Kategori ? 'selected' : ''; ?>><?php echo $val->nama_Kat; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="flex mb-4 space-x-4">
        <div class="w-1/2">
          <label class="block text-gray-700  font-bold ">Stok</label>
          <input type="number" name="stock" class="w-full mt-1 p-2 border border-gray-300 rounded" value="<?php echo $produk->stock; ?>">
        </div>
        <div class="w-1/2">
          <label class="block text-gray-700  font-bold ">Diskon</label>
          <input type="text" name="diskon" class="w-full mt-1 p-2 border border-gray-300 rounded" value="<?php echo $produk->diskon; ?>">
        </div>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Harga</label>
        <input type="text" name="harga" class="w-full mt-1 p-2 border border-gray-300 rounded" value="<?php echo $produk->harga; ?>">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold ">Kadaluwarsa</label>
        <input type="text" name="kadaluarsa" class="w-full mt-1 p-2 border border-gray-300 rounded" value="<?php echo $produk->tanggal_Exp; ?>" placeholder="Pilih Tanggal Kadaluwarsa" onfocus="(this.type='date')" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700  font-bold ">Deskripsi Produk</label>
        <textarea class="w-full mt-1 p-2 border focus:ring-white hover:focus:ring-white border-gray-300 rounded h-48" name="deskripsi" placeholder="Tuliskan Deskripsi Produk Disini"><?php echo $produk->deskripsi; ?></textarea>
      </div>

      <div class="flex flex-col mx-auto mb-6 w-full">
          <label class="block text-gray-700 mb-2 font-bold">Foto Produk</label>
          <div class="w-full flex flex-row items-center gap-4 grid md:grid-cols-4 sm:grid-cols-2 items-start">


            <div class="flex flex-col max-w-sm">
              <img id="foto-utama" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk); ?>" alt="Foto Profil" class="aspect-square max-w-full h-full rounded-xl object-cover object-center bg-gray-100">
              <label for="foto_upload1" class="mt-3 text-center file-label px-2 py-2 border border-gray-300 rounded-lg shadow-sm">
                Pilih Foto Utama
              </label>
              <input id="foto_upload1" name="foto_utama" type="file" class="file-input invisible">
              <input type="hidden" name="existing_foto_utama" value="<?php echo $produk->foto_Produk; ?>">
            </div>

            <div class="flex flex-col max-w-sm">
              <img id="foto2" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk1); ?>" alt="Foto Profil" class="aspect-square max-w-full h-full rounded-xl object-cover object-center bg-gray-100">
              <label for="foto_upload2" class="mt-3 text-center file-label px-2 py-2 border border-gray-300 rounded-lg shadow-sm">
                Pilih Foto 1
              </label>
              <input id="foto_upload2" name="foto_1" type="file" class="file-input invisible">
              <input type="hidden" name="existing_foto_1" value="<?php echo $produk->foto_Produk1; ?>">
            </div>
            <div class="flex flex-col max-w-sm">
              <img id="foto3" src="<?php echo base_url('assets/foto_produk/' . $produk->foto_Produk2); ?>" alt="Foto Profil" class="aspect-square max-w-full h-full rounded-xl object-cover object-center bg-gray-100">
              <label for="foto_upload3" class="mt-3 text-center file-label px-2 py-2 border border-gray-300 rounded-lg shadow-sm">
                Pilih Foto 2
              </label>
              <input id="foto_upload3" name="foto_2" type="file" class="file-input invisible">
              <input type="hidden" name="existing_foto_2" value="<?php echo $produk->foto_Produk2; ?>">
            </div>

          </div>
        </div>


      <div class="flex">
                <a href="<?php echo site_url('seller/product_seller'); ?>" class="mr-5 text-sm font-medium text-gray-900 dark:green-800 bg-gray-100 border border-green-800 rounded-lg px-14 
                py-3 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-white-200 dark:hover:bg-gray-400 dark:focus:ring-white">Batal</a>
                <button type="submit" class="text-sm font-medium text-white bg-green-800 border border-green-700 rounded-lg px-14 py-3 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-white dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-white">Simpan</button>
      </div>
    </form>
  </div>
</div>
<script>
  document.getElementById('foto_upload1').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('foto-utama').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.getElementById('foto_upload2').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('foto2').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});


document.getElementById('foto_upload3').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('foto3').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>
</body>

</html>

