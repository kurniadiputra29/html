<?php
include '../../config/koneksi.php';
$ID   = $_GET['id'];
$sql1    = "SELECT gambar FROM article where id=$ID";
$result1 = mysqli_query($koneksi,$sql1);
$row1   = mysqli_fetch_assoc($result1);
echo $img = $row1['gambar'];
$gambar = "../../gambar/".$img;

if (!unlink($gambar))
{
	echo ("Error deleting $gambar");
}
else
{
	echo ("Deleted $img SUCCES");
}
$sql = "DELETE FROM article WHERE id = '$ID'";	
mysqli_query($koneksi,$sql);
header('location:index.php');
?>