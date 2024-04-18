<?php
require './function.php';

// var_dump($_GET['id']);
$id = $_GET['kode'];
$hapus = mysqli_query($conn,"DELETE FROM transaksis WHERE kode_transaksi = '$id'");
// tambahStock($_GET['kode']);
header('location:transaksi_mobil.php');
?>