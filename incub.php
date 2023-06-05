<?php
include "connect.php";
$sql = "SELECT * FROM penetastelur ORDER BY NO DESC limit 1";
$query = mysqli_query($connect,$sql);
 
while($data = mysqli_fetch_assoc($query)){
	echo $data3 = $data["incub"];	
}
?>