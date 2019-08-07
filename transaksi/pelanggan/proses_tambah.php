<?php
include '../koneksi.php';
$Nama			 = $_POST['nama_pelanggan'];
$Pekerjaan = $_POST['pekerjaan'];
$Alamat		 = $_POST['alamat'];
$nama = ucfirst($Nama);
$pekerjaan	= ucfirst($Pekerjaan);
$alamat	= ucfirst($Alamat);

$sql	= "INSERT INTO pelanggan (nama_pelanggan, pekerjaan, alamat) VALUES ('$nama','$pekerjaan','$alamat')";
mysqli_query($connect, $sql);
header('location:index.php');
?>

