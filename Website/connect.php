<?php

$hostname = "localhost";
$username = "prob8451_penetastelur";
$database = "prob8451_penetastelur";
$password = "polinema@1234";


$connect = mysqli_connect($hostname,$username,$password,$database);
	
// cek koneksi
if ($connect){
	//echo"Koneksi Berhasiaaaaal";
} 

	else{

		echo"Koneksi Gagal";
	}
echo mysqli_error($connect)
?>