<?php 
include 'koneksi.php';
$nim = $_GET['nim'];
$host->query("DELETE FROM mahasiswa WHERE nim='$nim'");

header("location:index.php?pesan=hapus");
?>