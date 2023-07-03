<?php

$hostname = "localhost";
$user = "prob8451_penetastelur";
$database = "";
$password = "polinema@1234";

$koneksi_telur =mysqli_connect($hostname,$user,$password,$database);
	
//cek koneksi
if ($koneksi_telur){
	echo"Koneksi Berhasil !";
} 

	else {
		echo"Koneksi Gagal !";
	}

mysqli_connect_error($koneksi_telur)
?>