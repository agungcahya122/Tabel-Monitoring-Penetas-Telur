<?php

include("connect.php");
$suhu1 = $_GET["suhu1"]; 
$suhu2 = $_GET["suhu2"]; 
$waktu = $_GET["waktu"];

$sql = "INSERT INTO `penetastelur` (`Suhu 1`, `Suhu 2`) VALUES ('$suhu1', '$suhu2')";
$query = mysqli_query($connect, $sql);

if ($query){

    echo"Berhasil";
}

else {
    echo"Gagal";
}

?>