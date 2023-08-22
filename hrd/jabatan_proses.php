<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];

mysqli_query($koneksi, "insert into jabatan values (NULL,'$nama')");
header("location:jabatan.php");