<?php
include 'koneksi3.php';
$ID            = $_POST['id'];
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];
$pelajaran     = $_POST['pelajaran'];
$nilai         = $_POST['nilai'];

$sql = "UPDATE nilai SET pelajaran = '$pelajaran', nilai = '$nilai' WHERE id='$ID'";
mysqli_query($connect,$sql);
header('location:index2.php');
?>
