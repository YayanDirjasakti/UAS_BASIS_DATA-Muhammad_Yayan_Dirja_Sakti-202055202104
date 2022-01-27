<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
 if (!empty($nama) || !empty($harga) || !empty($jumlah)) {
// menginput data ke database
mysqli_query($koneksi,"insert into buah values('','$nama','$harga','$jumlah')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>