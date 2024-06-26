<?php

$conn = mysqli_connect('Localhost','root','','db_rentcar');

if(!$conn){
     echo 'Disconnected';
}

define('BASEURL', 'http://localhost/si-rentcar');
date_default_timezone_set('Asia/Jakarta');
function getAll(){
     global $conn;
     $barang = mysqli_query($conn,"SELECT * FROM mobils");
     return $barang;
}

function getAllpesanan(){
     global $conn;
     $pesanan = mysqli_query($conn,"SELECT * FROM transaksis ORDER BY tgl_ambil ASC");
     return $pesanan; 
}


function resetPesanan(){
     global $conn;
     $query = mysqli_query($conn,"TRUNCATE TABLE transaksis");
     return $query;
}

function insertPesanan($data){
     global $conn;
     $nama_penyewa = $data['nama_penyewa'];
     $nama_mobil = $data['nama_mobil'];
     $kode_mobil = $data['kode_mobil'];
     $warna_mobil = $data['warna_mobil'];
     $cc_mobil = $data['cc_mobil'];
     $harga_mobil = $data['harga_mobil'];
     $jam_ambil = $data['jam_ambil'];
     $jam_kembali = $data['jam_kembali'];
     $tgl_ambil = $data['tgl_ambil'];
     $tgl_kembali = $data['tgl_kembali'];
     $lamasewa = findLamaSewa($tgl_ambil, $tgl_kembali);
     $total_sewa = findTotalHargaSewa($lamasewa, $harga_mobil);
     $query = mysqli_query($conn,"INSERT INTO transaksis (nama_penyewa,nama_mobil, kode_mobil,kode_transaksi, warna_mobil, cc_mobil,harga_mobil,jam_ambil, jam_kembali, tgl_ambil, tgl_kembali, total_harga_sewa) VALUES ('$nama_penyewa','$nama_mobil', '$kode_mobil', UUID() , '$warna_mobil', '$cc_mobil', '$harga_mobil', '$jam_ambil','$jam_kembali', '$tgl_ambil', '$tgl_kembali','$total_sewa')");
     
     return $query;
}


function updateMobil($data, $id){
     global $conn;
     $nama_mobil = $data['nama_mobil'];
     $kode_mobil = $data['kode_mobil'];
     $warna_mobil = $data['warna_mobil'];
     $cc_mobil = $data['cc_mobil'];
     $harga_sewa = $data['harga_sewa'];
     $gambar = $data['gambar_mobil'];

     $query = mysqli_query($conn, "UPDATE mobils SET nama_mobil ='$nama_mobil', kode_mobil = '$kode_mobil', warna_mobil = '$warna_mobil', cc_mobil = '$cc_mobil', harga_sewa = '$harga_sewa', gambar_mobil = '$gambar' WHERE kode_mobil ='$id'");
     
     return $query;
     
}

function findCar($kode){
     global $conn;
     $find = mysqli_query($conn,"SELECT * FROM mobils WHERE kode_mobil = '$kode'");
     $finds = mysqli_fetch_assoc($find);
     return $finds;
}

function findLamaSewa($tglAmbil, $tglKembali) {
     // Mengubah string tanggal menjadi objek DateTime
     $tanggalAmbil = new DateTime($tglAmbil);
     $tanggalKembali = new DateTime($tglKembali);
 
     // Menghitung selisih hari antara tanggal ambil dan tanggal kembali
     $selisih = $tanggalAmbil->diff($tanggalKembali);
 
     // Mengembalikan jumlah hari selisih
     return $selisih->days;
 }


function findTotalHargaSewa($lamasewa, $harga){
          $data = $lamasewa * $harga;
          return $data;
    
}


function CheckMobil($userbaru){
    $data = getAllpesanan();
     $transaksiBerhasil = false;
     while($userlama = mysqli_fetch_assoc($data)){
     if($userbaru['kode_mobil'] == $userlama['kode_mobil']){
          if($userbaru['tgl_ambil'] == $userlama['tgl_kembali']){
                    if (strtotime($userbaru['jam_ambil']) < strtotime('+2 hours', strtotime($userlama['jam_kembali']))) {
                         echo '<script>alert("Mobil '.$userlama['nama_mobil'].' '.$userlama['warna_mobil'].' belum ready di jam '.$userbaru['jam_ambil'].' Silahkan ambil 2 jam setelah jam '. substr($userlama['jam_kembali'], 0, -3) .'")</script>';
                         return false;
                    }else if(strtotime($userbaru['jam_ambil']) > strtotime('+2 hours', strtotime($userlama['jam_kembali']))){                      
                         insertPesanan($userbaru);
                         $transaksiBerhasil = true; // Set variabel penanda menjadi true
                         header('location:../index.php');
                         break;
                    }
               }else if($userbaru['tgl_kembali'] == $userlama['tgl_ambil']){
                    if (strtotime($userbaru['jam_kembali']) > strtotime('-2 hours', strtotime($userlama['jam_ambil']))) {
                         echo '<script>alert("Mohon Percepat Lagi Jam Pengembalian karena Mobil '.$userlama['nama_mobil'].' akan diambil di '.$userlama['tgl_ambil'].' pada jam '.substr($userlama['jam_ambil'], 0, -3).' oleh penyewa lain")</script>';
                         return false;
                         }                                  
               }else if(($userbaru['tgl_ambil'] >= $userlama['tgl_ambil'] && $userbaru['tgl_ambil'] <= $userlama['tgl_kembali']) ||
               ($userbaru['tgl_kembali'] >= $userlama['tgl_ambil'] && $userbaru['tgl_kembali'] <= $userlama['tgl_kembali'])){
                    echo '<script>alert("Mobil '.$userlama['nama_mobil'].' '.$userlama['warna_mobil'].' sudah disewa pada tanggal '.$userlama['tgl_ambil'].' sampai '. $userlama['tgl_kembali'].'")</script>';
                    return false;
               }else{
                    
               }
          }
     }
     if ($transaksiBerhasil) {
          return true;
          }
          insertPesanan($userbaru);
          header('location:../index.php');
          return true;
}

function insertMobil($data){
     global $conn;
     $nama_mobil = mysqli_real_escape_string($conn, $data['nama_mobil']);
     $kode_mobil = mysqli_real_escape_string($conn, $data['kode_mobil']);
     $warna_mobil = mysqli_real_escape_string($conn, $data['warna_mobil']);
     $cc_mobil = mysqli_real_escape_string($conn, $data['cc_mobil']);
     $harga_mobil = mysqli_real_escape_string($conn, $data['harga_sewa']);
     $gambar = mysqli_real_escape_string($conn, $data['gambar_mobil']);
     $query = "INSERT INTO mobils (nama_mobil, kode_mobil, warna_mobil, cc_mobil, harga_sewa, gambar_mobil) 
               VALUES ('$nama_mobil', '$kode_mobil', '$warna_mobil', '$cc_mobil', '$harga_mobil', '$gambar')";
     $result = mysqli_query($conn, $query);
     return $result;
}


function register($data) {
     global $conn;

     $email = $data['email'];
     $password = $data['password'];

     $userlama = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
     if(mysqli_fetch_assoc($userlama)){
          echo '<script>alert("Email sudah terdaftar, Silahkan gunakan email lain")</script>';
          return false;
     }

     $password =  password_hash($password, PASSWORD_DEFAULT);
     mysqli_query($conn,"INSERT INTO users (email, password) VALUES ('$email','$password')");

     return mysqli_affected_rows($conn);
     
}



function resetStatus(){
     global $conn;
     $query = mysqli_query($conn,"UPDATE mobils SET status = 1");
     return $query;
}

function Available($kode, $param){
     global $conn;
     $query = mysqli_query($conn,"UPDATE mobils SET status = $param WHERE kode_mobil = '$kode'");
     return $query;
}

// function showMobilFree($kode){
//      global $conn;
//      $query = mysqli_query($conn,"SELECT * FROM mobils WHERE kode_mobil = '$kode'");
//      return $query;
// }


function MobilFree($data){
     global $conn;
     $start_date = $data['start_date'];
     $end_date = $data['end_date'];
     $mobilend = getAllpesanan();
     while($mbl = mysqli_fetch_assoc($mobilend)){
          if($start_date == $mbl['tgl_ambil'] || $end_date == $mbl['tgl_kembali']){
               return Available($mbl['kode_mobil'], 0);
          }
          else{
           
          }
         
     }
     
}