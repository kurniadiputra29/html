<?php
include '../koneksi.php';
echo $Kode_konsumen		 = $_POST['kode_konsumen'];
echo$Kode_produk			= $_POST['kode_produk'];
echo$Jumlah_produk		 = $_POST['jumlah_produk'];

$sql1    = "select * from produk where kode_produk=$Kode_produk";
$result1 = mysqli_query($connect,$sql1);
$row1    = mysqli_fetch_assoc($result1);
echo$total	= $row1['harga_barang'] * $Jumlah_produk;

$sql	= "INSERT INTO beli (kode_konsumen, kode_produk, jumlah_produk, total_harga) VALUES ('$Kode_konsumen','$Kode_produk','$Jumlah_produk','$total')";
mysqli_query($connect, $sql);
header('location:index.php');
?>

