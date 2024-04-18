<?php
require './function.php';
$data = getAllpesanan();
$mbl = getAll();
?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header.php') ?>
<div class="mx-auto pt-28 px-4 h-[800px]">
     <div class="flex items-center justify-between my-4 text-white">
          <h1 class="text-3xl font-semibold ">Manajemen Pesanan Mobil</h1>
          <p class="text-sm ml-36 text-gray-500 p-2 border rounded-sm bg-yellow-400">Silahkan Klik <span
                    class="uppercase font-bold text-red-600">Selesai</span>
               pada bagian
               status jika
               Mobil sudah
               di
               kembalikan
          </p>
          <a href="<?=BASEURL?>/app/reset.php" class="text-base block bg-green-400 p-2 rounded-md text-white">Reset</a>
     </div>
     <div class="overflow-x-auto bg-white">
          <table class="min-w-full table-auto text-sm border-separate border">
               <thead class="bg-teal-500 text-white">
                    <tr>
                         <th class="py-2 px-4">Nama Penyewa</th>
                         <th class="py-2 px-4">Nama Mobil</th>
                         <th class="py-2 px-4">Kode Mobil</th>
                         <th class="py-2 px-4">Warna</th>
                         <th class="py-2 px-4">Harga Sewa</th>
                         <th class="py-2 px-4">Jam Ambil</th>
                         <th class="py-2 px-4">Jam Kembali</th>
                         <th class="py-2 px-4">Tgl Ambil</th>
                         <th class="py-2 px-4">Tgl Kembali</th>
                         <th class="py-2 px-4">Total Harga</th>
                         <th class="py-2 px-4">Status</th>
                    </tr>
               </thead>
               <tbody class="text-gray-800 font-semibold">
                    <!-- Contoh data pesanan mobil -->
                    <?php while($row = mysqli_fetch_assoc($data)) :  ?>
                    <tr>
                         <td class="py-2 px-4 border-b border"><?= $row['nama_penyewa']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['nama_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['kode_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['warna_mobil']?></td>
                         <td class="py-2 px-4 border-b border"><?= $row['harga_mobil']?></td>
                         <td class="py-2 px-4 border-b border  text-teal-600 text-base">
                              <?= substr($row['jam_ambil'], 0, -3) ?>
                         </td>
                         <td class="py-2 px-4  border-b border text-red-400 text-base">
                              <?= substr($row['jam_kembali'], 0, -3) ?>
                         </td>
                         <td class="py-2 px-4 border-b border  text-teal-600 text-base"><?= $row['tgl_ambil']?></td>
                         <td class="py-2 px-4 border-b border  text-red-400 text-base"><?= $row['tgl_kembali']?></td>
                         <td class="py-2 px-4 border-b border">
                              <?php echo !empty($row['total_harga_sewa']) ? 'Rp ' . number_format($row['total_harga_sewa']) : 'Rp ' . number_format(250000); ?>
                         </td>
                         <td class="py-2 px-4 border-b border">
                              <a href="<?= BASEURL?>/app/kembali.php?kode=<?=$row['kode_transaksi']?>"
                                   class="block p-1 bg-red-500 text-white rounded-sm">Selesai</a>
                         </td>
                    </tr>
                    <?php endwhile; ?>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
               </tbody>
          </table>
     </div>
</div>
<?php require_once('../layouts/footer.php') ?>