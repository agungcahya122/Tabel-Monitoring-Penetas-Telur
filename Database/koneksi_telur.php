<?php

$hostname = "localhost";
$user = "prob8451_penetastelur";
$database = "prob8451_penetastelur";
$password = "polinema@1234";

$koneksi_telur =mysqli_connect($hostname,$user,$password,$database);
	
//cek koneksi
if ($koneksi_telur){
} 

	else {
		echo"koneksi_telur Gagal !";
	}

mysqli_connect_error($koneksi_telur)
?>