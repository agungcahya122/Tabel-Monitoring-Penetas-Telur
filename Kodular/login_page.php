<?php

include 'koneksi_telur.php';
$user = $_POST['user'];
$password = $_POST['password'];

$login = mysqli_query($koneksi_telur,"select * from user where username='$user' and password= '$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password ditemukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	echo "Berhasil Login!";
}
else{

	echo "Username & Password Anda Salah!";
}

?>