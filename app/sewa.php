<?php
require './function.php';
$data = findCar($_GET['kode']);
if(isset($_POST['btn-sewa'])){
     sleep(1);
     CheckMobil($_POST);
}
?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header.php') ?>
<div class="container mx-auto pt-28 h-[800px] text-white">
     <h1 class="text-3xl font-semibold mb-8">Form Pesanan Mobil</h1>
     <div class="flex justify-between rounded-md mb-3 px-2 py-2 shadow-md bg-orange-400 text-white">
          <p>Mobil : <?=$data['nama_mobil']?></p>
          <p>Warna : <?=$data['warna_mobil']?></p>
          <p>CC Mobil : <?=$data['cc_mobil']?></p>
          <p>Harga Sewa : <?=$data['harga_sewa']?> / hari</p>
     </div>
     <form class="bg-gradient-to-t from-teal-400 shadow-md rounded px-8 pt-6 pb-8 mb-4  grid grid-cols-3 gap-5"
          action="" method="POST">
          <div class="mb-4">
               <label class="block text-white text-sm font-bold mb-2" for="namaPenyewa">
                    Nama Penyewa
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="namaPenyewa" autofocus type="text" name="nama_penyewa" placeholder="Nama Penyewa" required
                    value="<?= isset($_POST['nama_penyewa']) ? $_POST['nama_penyewa'] : '' ?>">
          </div>
          <div class="mb-4 hidden">
               <label class="block text-white text-sm font-bold mb-2" for="namaMobil">
                    Nama Mobil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="namaMobil" type="text" name="nama_mobil" placeholder="Nama Mobil"
                    value="<?=$data['nama_mobil']?>">
          </div>
          <div class="mb-4 hidden">
               <label class="block text-white text-sm font-bold mb-2" for="kodeMobil">
                    Kode Mobil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="kodeMobil" type="text" name="kode_mobil" placeholder="Kode Mobil"
                    value="<?=$data['kode_mobil']?>">
          </div>
          <div class="mb-4 hidden">
               <label class="block text-white text-sm font-bold mb-2" for="ccMobil">
                    Warna
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="Warna" type="text" name="warna_mobil" placeholder="Warna Mobil"
                    value="<?=$data['warna_mobil']?>">
          </div>
          <div class=" mb-4 hidden">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="ccMobil">
                    CC
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="ccMobil" type="text" name="cc_mobil" placeholder="Cc Mobil" value="<?=$data['cc_mobil']?>">
          </div>
          <div class="mb-4 hidden">
               <label class="block text-white text-sm font-bold mb-2" for="hargaMobil">
                    Harga
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="hargaMobil" type="text" name="harga_mobil" placeholder="Harga Mobil"
                    value="<?=$data['harga_sewa']?>">
          </div>

          <div class="mb-4">
               <label class="block text-white text-sm font-bold mb-2" for="kodeMobil">
                    Tgl Ambil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" id="tgl_ambil" name="tgl_ambil" placeholder="Lama Sewa"
                    value="<?= isset($_POST['tgl_ambil']) ? $_POST['tgl_ambil'] : '' ?>">
          </div>
          <div class="mb-4">
               <label class="block text-white text-sm font-bold mb-2" for="kodeMobil">
                    Tgl Kembali
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" id="tgl_kembali" name="tgl_kembali" placeholder="Lama Sewa"
                    value="<?= isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : '' ?>">
          </div>
          <div class="mb-4">
               <label class="block text-white text-sm font-bold mb-2" for="Lama Sewa">
                    Jam Ambil
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="time" id="jam_ambil" name="jam_ambil" placeholder="Jam Kembali"
                    value="<?= isset($_POST['jam_ambil']) ? $_POST['jam_ambil'] : '' ?>">
          </div>
          <div class="mb-4">
               <label class="block text-white text-sm font-bold mb-2" for="Lama Sewa">
                    Jam Kembali
               </label>
               <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="time" id="jam_kembali" name="jam_kembali" placeholder="Jam Kembali"
                    value="<?= isset($_POST['jam_kembali']) ? $_POST['jam_kembali'] : '' ?>">
          </div>
          <div class="flex gap-5">
               <div class="mt-8">
                    <button
                         class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                         type="submit" id="btn-sewa" name="btn-sewa" onsubmit="return notification();">
                         Sewa Mobil
                    </button>
               </div>
          </div>
     </form>
</div>
<div id="pop-up-transaksi" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
     <div class="bg-white p-8 rounded-lg shadow-lg w-[30%]">
          <div class="flex justify-center items-center mb-4">
               <h2 class="text-2xl font-bold text-teal-700">Processing !!</h2>
          </div>
          <p class="text-lg text-gray-800 text-center">Mohon Tunggu ya Broo...</p>
          <div class="mt-6 flex justify-center animate-spin">
               <img src="<?=BASEURL?>/assets/img/loading.png" alt="Checkmark" class="w-12 h-12 ">
          </div>
     </div>
</div>

<script>
const btn = document.querySelector('#btn-sewa');
const popup = document.querySelector('#pop-up-transaksi');
btn.addEventListener('click', function() {
     popup.style.display = 'flex';
     setTimeout(() => {
          popup.style.display = 'none';
     }, 1000);
});
</script>

<?php require_once('../layouts/footer.php') ?>