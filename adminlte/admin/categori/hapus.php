<?php
include '../../config/koneksi.php';
$ID   = $_GET['id'];

$sql = "DELETE FROM kategori WHERE id = '$ID'";
mysqli_query($koneksi,$sql);
header('location:index.php');
?>
