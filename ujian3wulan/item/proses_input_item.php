<?php
include '../koneksi.php';
$category = $_POST['category'];
$nama = $_POST['nama'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "INSERT INTO item (category, name, price, status) VALUES ('$category', '$nama', '$price', '$status')";
mysqli_query($connect,$sql);
header('location:index_item.php');
?>
