<?php
include '../koneksi.php';
$kode_pelanggan = $_GET['id'];

$sql = "DELETE FROM beli WHERE kode_pelanggan = '$kode_pelanggan'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
