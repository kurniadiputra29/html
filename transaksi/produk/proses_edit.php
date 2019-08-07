<?php
include '../koneksi.php';
$id						= $_POST['id'];
$Nama_produk	= $_POST['nama_produk'];
$Jenis_produk	=	$_POST['jenis_produk'];
$Stock				=	$_POST['stock'];
$Harga_produk	= $_POST['harga'];

$nama_produk	= ucfirst ($Nama_produk) ;
$jenis_produk	=	ucfirst ($Jenis_produk) ;
$stock				=	ucfirst ($Stock) ;
$harga_produk	= ucfirst ($Harga_produk) ;

$sql = "UPDATE produk SET nama_produk = '$nama_produk', jenis_produk = '$jenis_produk', stock = '$stock', harga_barang = '$harga_produk' WHERE kode_produk='$id'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
