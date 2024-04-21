<?php 

require './app/function.php';
$data = getAll();

?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<style>
@keyframes marquee {
     0% {
          transform: translate(100%, 0);
     }

     100% {
          transform: translate(-100%, 0);
     }
}

@keyframes marquee1 {
     0% {
          transform: translate(-100%, 0);
     }

     100% {
          transform: translate(100%, 0);
     }
}

.animate-marquee {
     animation: marquee 50s linear infinite;
}

.animate-marquee1 {
     animation: marquee1 20s linear infinite;
}
</style>
<?php require_once('./layouts/header.php'); ?>
<div class="pt-28 p-2 w-[95%] mx-auto grid lg:grid-cols-3 gap-4 sm:grid-cols-1">
     <?php while($row = mysqli_fetch_assoc($data)) :  ?>
     <div class="p-5 pb-20 shadow-lg z-30 overflow-hidden relative bg-white bg-opacity-90 rounded-md group">
          <img src="<?=BASEURL?>/assets/img/<?= $row['gambar_mobil']?>" alt="" class="w-72 mx-auto drop-shadow-2xl">
          <div class="absolute bottom-0 w-full left-0 right-0 mx-auto">
               <a href="<?= BASEURL?>/app/sewa.php?kode=<?= $row['kode_mobil']?>"
                    class="w-[100%] block mx-auto bg-amber-500 text-white text-center p-2 rounded-sm">Book
                    Now
                    !</a>
          </div>
          <div
               class="absolute left-0 group-hover:bottom-10 right-0 mx-auto h-full w-[100%] -bottom-52  bg-gradient-to-t from-black text-center flex items-end justify-center gap-5 py-2 -z-50 uppercase transition-all ease-in-out duration-500">
               <p class="text-lg text-white"><?=$row['nama_mobil']?></p>
               <p class="text-lg text-white"><?=$row['cc_mobil']?></p>
               <p class="text-lg text-white">8 Kursi</p>
          </div>
          <div class="absolute right-0 top-0 bg-orange-600 w-24 h-5 rounded-bl-md text-end text-white">
               <p class="text-sm">RP. <?= number_format($row['harga_sewa'])?></p>
          </div>
     </div>
     <?php endwhile; ?>
</div>

<?php require_once('./layouts/footer.php'); ?>