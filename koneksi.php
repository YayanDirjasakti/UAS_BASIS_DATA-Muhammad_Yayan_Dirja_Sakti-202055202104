<?php 
$koneksi = mysqli_connect("localhost","root","","muhammad_yayan_dirja_sakti");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>