<?php
include "conn.php";

$sql = "show databases";
$result = mysqli_query($conn,$sql);
echo "test";
if(mysqli_num_rows($result) > 0){
	echo "ni";
	while($row = mysqli_fetch_assoc($result)) {
		echo $row;
    }
}else{
	echo "0 结果";
}

?>
