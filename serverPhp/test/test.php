<?php
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}


	$sql = "select password from puser where name='jwf'";
	echo $sql;
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		//echo "---2---";		
		$row = mysqli_fetch_assoc($result);  
		//var_dump($row);
		echo $row['password'];
		//如果用户名相同情况暂时未考虑
		/*while($row = mysqli_fetch_assoc($result)){  //解析结果集数is array
		//echo $row[''];
		var_dump($row);
		}*/
	}else{
		echo "0结果";
	}
	mysqli_close($conn);

?>
