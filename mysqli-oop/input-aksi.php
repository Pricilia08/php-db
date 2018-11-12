<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$host->query("INSERT INTO mahasiswa (nim,nama,alamat)VALUES('$nim','$nama','$alamat')");

header("location:index.php?pesan=input");
?>