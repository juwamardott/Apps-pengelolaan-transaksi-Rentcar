<?php
require './function.php';
$data = findCar($_GET['kode']);
// var_dump($_POST);
$id = $_GET['kode'];
// var_dump($id);
if(isset($_POST['btn-update'])){
     updateMobil($_POST, $id);
     header('location:admin/data_mobil_admin.php');
}
?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header.php') ?>
<div class="container mx-auto pt-28 h-[800px]">
     <h1 class="text-3xl font-semibold mb-8">Form Pesanan Mobil</h1>
     <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4  grid grid-cols-3 gap-5" action="" method="POST">
          <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="namaMobil">
                    Nama Mobil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="namaMobil" type="text" name="nama_mobil" placeholder="Nama Mobil"
                    value="<?=$data['nama_mobil']?>">
          </div>
          <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="kodeMobil">
                    Kode Mobil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="kodeMobil" type="text" name="kode_mobil" placeholder="Kode Mobil"
                    value="<?=$data['kode_mobil']?>">
          </div>
          <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="ccMobil">
                    Warna
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="Warna" type="text" name="warna_mobil" placeholder="Warna Mobil"
                    value="<?=$data['warna_mobil']?>">
          </div>
          <div class=" mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="ccMobil">
                    CC
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="ccMobil" type="text" name="cc_mobil" placeholder="Cc Mobil" value="<?=$data['cc_mobil']?>">
          </div>
          <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="hargaMobil">
                    Harga
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="hargaMobil" type="text" name="harga_sewa" placeholder="Harga Mobil"
                    value="<?=$data['harga_sewa']?>">
          </div>
          <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="hargaMobil">
                    Gambar
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="gambar" type="text" name="gambar_mobil" placeholder="Gambar Mobil"
                    value="<?=$data['gambar_mobil']?>">
          </div>
          <div class="">
               <div class=" mt-8">
                    <button
                         class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                         type="submit" name="btn-update">
                         Update Data
                    </button>
               </div>
          </div>
     </form>
</div>



<?php require_once('../layouts/footer.php') ?>