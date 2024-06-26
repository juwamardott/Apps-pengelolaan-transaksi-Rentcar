<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aplikasi Rentcar</title>
     <link rel="stylesheet" href="<?=BASEURL?>/assets/css/output.css">
</head>

<body class="font-hero font-semibold">
     <div class="w-full flex justify-between items-center bg-white fixed border-b-2 border-purple-600 z-[9999]">
          <div class="ml-5">
               <img src="<?= BASEURL;?>/assets/img/logo.png" alt="" class="w-24">
          </div>
          <div class="w-[60%]" id="navbar">
               <ul>
                    <li class="flex justify-around  p-1">
                         <a href="<?= BASEURL?>"
                              class="hover:text-white block hover:bg-purple-800 p-1 rounded-md">Home</a>
                         <!-- <a href="<?= BASEURL?>/app/detail_mobil.php"
                              class="hover:text-white block hover:bg-purple-800 p-1 rounded-md">Detail Mobil</a> -->
                         <a href="<?=BASEURL?>/app/about.php"
                              class="hover:text-white block hover:bg-purple-800 p-1 rounded-md">Tentang
                              Kami</a>
                         <a href="<?= BASEURL?>/app/masukan.php"
                              class="hover:text-white block hover:bg-purple-800 p-1 rounded-md">Beri Masukan Anda</a>
                    </li>
               </ul>
          </div>
          <div class="mr-5 px-1 py-1 bg-purple-600 text-white shadow-lg rounded">
               <a href="<?=BASEURL?>/app/login.php" id="hamburger">LOGIN
               </a>
          </div>
     </div>
     <div class="w-full h-auto bg-gradient-to-tr form from-slate-900 to-purple-900">