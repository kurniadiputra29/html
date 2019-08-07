<?php
include '../koneksi.php';
$kode_pelanggan = $_GET['id'];

$sql = "DELETE FROM produk WHERE kode_produk = '$kode_pelanggan'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
