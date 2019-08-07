<?php
include '../koneksi.php';
$ID       = $_POST['id'];
$Nama          = $_POST['nama_pelanggan'];
$Pekerjaan     = $_POST['pekerjaan'];
$Alamat        = $_POST['alamat'];
$nama 				= ucfirst($Nama);
$pekerjaan	= ucfirst($Pekerjaan);
$alamat	= ucfirst($Alamat);

$sql = "UPDATE pelanggan SET nama_pelanggan = '$nama', pekerjaan = '$pekerjaan', alamat = '$alamat' WHERE kode_pelanggan='$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
