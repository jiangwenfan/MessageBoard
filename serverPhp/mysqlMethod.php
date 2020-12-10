<?php
include "connectDatabase.php";
	echo $mysqlHostName;
	echo $mysqlUserName;
	echo $mysqlPassword;
	echo $mysqlDatabaseName;
/**
*
*实现操作mysql的各种方法
*/
/*
//mysql select方法
function pSelect($sql){
	
	return string;
}
*/
//mysql create

function pInsert($sql){
	//echo $sql;
	//局部变量需要传值
	//echo $mysqlHostName;
	//echo $mysqlUserName;
	//echo $mysqlPassword;
	//echo $mysqlDatabaseName;

	//$conn = mysqli($mysqlHostName,$mysqlUserName,$mysqlPassword,$mysqlDatabaseName);
	echo "11";
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	//echo "22";
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
	echo $sql;
	if(mysqli_query($conn, $sql)){
    	echo "新记录插入成功";
	} else {
		echo "插入错误!";
    	//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
 
	//mysqli_close($conn);
	//return string;
}

//mysql drop 
//function pDrop($sql){
//	return string;
//}

//mysql update
//function pUpdate($sql){
//	return string;
//}


//test input
$sql = "insert into ptest2 values (null,'test','123','tem','tem','0','0');";
pInsert($sql);

?>
