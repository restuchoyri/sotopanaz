<?php 
include '../koneksi.php';
$jenis  = $_POST['jenis'];

mysqli_query($koneksi, "insert into master_cuti values (NULL,'$jenis')");
header("location:cuti.php");