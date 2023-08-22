<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];

mysqli_query($koneksi, "update jabatan set Nama_jabatan='$nama' where Id_jabatan='$id'")  or die(mysqli_error($koneksi));
header("location:jabatan.php");