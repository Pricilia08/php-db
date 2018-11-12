<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query($host,"INSERT INTO mahasiswa (nim,nama,alamat)VALUES('$nim','$nama','$alamat')");

header("location:index.php?pesan=input");
?>