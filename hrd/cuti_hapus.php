<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from master_cuti where Id_cuti='$id'");
header("location:cuti.php");
