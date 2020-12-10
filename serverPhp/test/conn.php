<?php
$servername = "127.0.0.1";
$username = "root";
$password = "admin123K#";

$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
	echo "连接失败!";		
}else{
	echo "连接成功!";
}
?>
