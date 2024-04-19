<?php
require './function.php';
$mbl = getAll();
?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header.php') ?>
<div class="mx-auto pt-28 px-4 h-[800px]">
     <div class="flex items-center justify-between my-4 text-white">
          <h1 class="text-3xl font-semibold ">Data Mobil</h1>
          <a href="<?=BASEURL?>/app/tambah_mobil.php"
               class="text-base block bg-blue-500 p-2 rounded-md text-white">Tambah
               mobil</a>
     </div>
     <div class="overflow-x-auto bg-white">
          <table class="min-w-full table-auto text-sm border-separate border">
               <thead class="bg-teal-500 text-white">
                    <tr>
                         <th class="py-2 px-4">Nama Mobil</th>
                         <th class="py-2 px-4">Kode</th>
                         <th class="py-2 px-4">Warna</th>
                         <th class="py-2 px-4">CC</th>
                         <th class="py-2 px-4">Harga Sewa</th>
                         <th class="py-2 px-4">Aksi</th>
                    </tr>
               </thead>
               <tbody class="text-gray-800 font-semibold">
                    <!-- Contoh data pesanan mobil -->
                    <?php while($row = mysqli_fetch_assoc($mbl)) :  ?>
                    <tr>
                         <td class="py-2 px-4 border-b border"><?= $row['nama_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['kode_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['warna_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['cc_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['harga_sewa']?></td>
                         <td class="py-2 px-4 border-b border flex justify-evenly">
                              <a href="<?= BASEURL?>/app/edit_mobil.php?kode=<?=$row['kode_mobil']?>"
                                   class="block p-1 bg-yellow-500 text-white rounded-sm">Update</a>
                              <a href="<?= BASEURL?>/app/hapus_mobil.php?kode=<?=$row['kode_mobil']?>"
                                   class="block p-1 bg-red-500 text-white rounded-sm">Hapus</a>
                         </td>
                    </tr>
                    <?php endwhile; ?>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
               </tbody>
          </table>
     </div>
</div>
<?php require_once('../layouts/footer.php') ?>