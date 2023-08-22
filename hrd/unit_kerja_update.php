<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];

mysqli_query($koneksi, "update unit_kerja set Nama_unit_kerja='$nama' where Id_unit_kerja='$id'")  or die(mysqli_error($koneksi));
header("location:unit_kerja.php");