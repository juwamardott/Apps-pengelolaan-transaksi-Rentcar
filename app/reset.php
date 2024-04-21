<?php
session_start();
if(!isset($_SESSION['login'])){
     header('location:login.php');
     exit;
}
require './function.php';

// var_dump($_GET['id']);
resetPesanan();
header('location:admin/index_admin.php');
?>