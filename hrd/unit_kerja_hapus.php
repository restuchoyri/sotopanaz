<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from unit_kerja where Id_unit_kerja='$id'");
header("location:unit_kerja.php");
