<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];

mysqli_query($koneksi, "insert into unit_kerja values (NULL,'$nama')");
header("location:unit_kerja.php");