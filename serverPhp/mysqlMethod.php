<?php
include "connectDatabase.php";
/*
	echo $mysqlHostName;
	echo $mysqlUserName;
	echo $mysqlPassword;
	echo $mysqlDatabaseName;
*/
/**
*
*实现操作mysql的各种方法
*/

//mysql select方法
function pSelect($sql,$mess,$loginPassword){
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
		
	//$sql = "select password from puser where name='jwf'";
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		//echo "---2---";		
		$row = mysqli_fetch_assoc($result);  
		//var_dump($row);
		$mysqlPassword = $row['password'];
		if($mysqlPassword){
			echo "查询成功!";
		}
		//echo $mysqlPassword;	
		if($mysqlPassword == $loginPassword){
			echo $mess; 
			return "0";  //成功返回0
		}else{
			echo "<h2>用户名或密码错误!</h2>";
			echo '<a href="./../html/index.html">重新登录!</a>';
			return "-1";  //失败返回-1
		}

		//如果用户名相同情况暂时未考虑
		/*while($row = mysqli_fetch_assoc($result)){  //解析结果集数is array
		//echo $row[''];
		var_dump($row);
		}*/
	}else{
		echo "0结果";
	}

	mysqli_close($conn);
		
}

//mysql create
function pInsert($sql,$mess){
	//echo $sql;
	//局部变量需要传值
	//echo $mysqlHostName;
	//echo $mysqlUserName;
	//echo $mysqlPassword;
	//echo $mysqlDatabaseName;

	//$conn = mysqli($mysqlHostName,$mysqlUserName,$mysqlPassword,$mysqlDatabaseName);
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
	if(mysqli_query($conn,$sql)){
    	//echo "新记录插入成功";
		echo $mess;
	} else {
		echo "-----------";	
		echo $sql;
		echo "-----------";	
		echo "插入错误!";
    	//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
 
	mysqli_close($conn);
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
//$sql = "insert into ptest2 values (null,'test','123','tem','tem','0','0');";
//pInsert($sql);

//$sql = "select password from puser where name='jwf'";
//$info = "test";
//$loginpassword = "123";
//$s = pSelect($sql,$info,$loginpassword);
//echo "################".$s;
?>
