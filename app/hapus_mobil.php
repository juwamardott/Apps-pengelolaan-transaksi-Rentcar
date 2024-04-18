<?php
require './function.php';

// var_dump($_GET['id']);
$id = $_GET['kode'];
$hapus = mysqli_query($conn,"DELETE FROM mobils WHERE kode_mobil = '$id'");
// tambahStock($_GET['kode']);
header('location:data_mobil.php');
?>