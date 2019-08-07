<?php
include '../koneksi.php';
$ID       = $_POST['id'];
echo$Kode_konsumen		 = $_POST['kode_konsumen'];
echo$Kode_produk			= $_POST['kode_produk'];
echo$Jumlah_produk		 = $_POST['jumlah_produk'];

$sql1    = "select * from produk where kode_produk=$Kode_produk";
$result1 = mysqli_query($connect,$sql1);
$row1    = mysqli_fetch_assoc($result1);
echo$total	= $row1['harga_barang'] * $Jumlah_produk;

$sql = "UPDATE beli SET kode_konsumen = '$Kode_konsumen', kode_produk = '$Kode_produk', jumlah_produk = '$Jumlah_produk', total_harga = '$total' WHERE kode_transaksi='$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
