<?php
include '../koneksi.php';
$Nama_produk	= $_POST['nama_produk'];
$Jenis_produk	=	$_POST['jenis_produk'];
$Stock				=	$_POST['stock'];
$Harga_produk	= $_POST['harga'];

$nama_produk	= ucfirst ($Nama_produk) ;
$jenis_produk	=	ucfirst ($Jenis_produk) ;
$stock				=	ucfirst ($Stock) ;
$harga_produk	= ucfirst ($Harga_produk) ;

$sql = "INSERT INTO produk (nama_produk, jenis_produk, stock, harga_barang) VALUES ('$nama_produk','$jenis_produk','$stock','$harga_produk')";
mysqli_query($connect, $sql);
header('location:index.php');
?>
