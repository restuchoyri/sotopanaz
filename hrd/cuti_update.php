<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$jenis  = $_POST['jenis'];

mysqli_query($koneksi, "update master_cuti set Jenis_cuti='$jenis' where Id_cuti='$id'")  or die(mysqli_error($koneksi));
header("location:cuti.php");