<?php
$servername = "localhost";
$username   = "root";
$password   = "123";
$dbname     = "transaksi";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());//untuk memunculkan eror
}
$sql1 = "CREATE TABLE pelanggan (
kode_pelanggan INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama_pelanggan VARCHAR(30) NOT NULL,
pekerjaan VARCHAR(50) NOT NULL,
alamat VARCHAR(50) NOT NULL
)";
$sql2 = "CREATE TABLE produk (
kode_produk INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama_produk VARCHAR(30) NOT NULL,
jenis_produk VARCHAR(30) NOT NULL,
stock INT(11) NOT NULL,
harga_barang INT(11)
)";
$sql3 = "CREATE TABLE beli (
kode_konsumen INT(11) NOT NULL,
kode_produk INT(11) NOT NULL,
kode_transaksi INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
jumlah_produk INT(11) NOT NULL,
total_harga INT(11) NOT NULL
)";
$sql4 = "CREATE TABLE transaksi (
kode_transaksi INT(3) NOT NULL,
nama_pelanggan VARCHAR(30) NOT NULL,
jenis_transaksi VARCHAR(30) NOT NULL,
tanggal_transaksi DATE
)";
mysqli_query($connect, $sql1);
mysqli_query($connect, $sql2);
mysqli_query($connect, $sql3);
mysqli_query($connect, $sql4);
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
