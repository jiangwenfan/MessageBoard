<?php
include "connectDatabase.php";
header("Content-Type: text/html;charset=utf-8");
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
//显示所有数据的
function pSelectAll($sql){
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
	$result = mysqli_query($conn,$sql);
	echo "<h1 style='text-align:center;'>id ---- title ---- content</h1>";
	if(mysqli_num_rows($result) > 0){
		//echo "---2---";
		while($row = mysqli_fetch_assoc($result)){
			
			//var_dump($row);
			//加入输出到日志功能，判断是否成功输出
			echo "<h3 style='text-align:center'>".$row['id']." ---- ".$row['title']." ---- ".$row['content']."</h3>";
			//echo "<br>";
		}		
		//if($mysqlPassword){
		//	echo "查询成功!";
		//}
	 }else{
		echo "0结果";
	 }
}
//显示所有数据并生成单选框
function pSelectAllRadio($sql){
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			//echo "mysql is connected! --> ok!";
	}
	$result = mysqli_query($conn,$sql);
	echo "<h1>id ---- title ---- content</h1>";
	if(mysqli_num_rows($result) > 0){
		//echo "---2---";
			$indexFile = "/var/www/9999/MessageBoard/indexFile.txt"; //获取id文件，必须写入绝对路径。
			//写入前,清空文件
			$cmd = "cat /dev/null > ".$indexFile; //失败返回false,成功返回命令的最后一行结果
			//echo $cmd;
			system($cmd,$status); //成功返回0
			//echo $status;
			if(!$status){
				//echo "清空成功!";
			}else{
				echo "清空失败!";
			}
		echo '<form action="./modify.php" method="post">';
		while($row = mysqli_fetch_assoc($result)){
			
			//var_dump($row);
			//加入输出到日志功能，判断是否成功输出
			$indexFile = "/var/www/9999/MessageBoard/indexFile.txt"; //获取id文件，必须写入绝对路径。这个可以删掉,是个局部变量
			$formName = $row['id'];
			/*
			//写入前,清空文件
			$cmd = "cat /dev/null > ".$indexFile; //失败返回false,成功返回命令的最后一行结果
			//echo $cmd;
			system($cmd,$status); //成功返回0
			//echo $status;
			if(!$status){
				echo "清空成功!";
			}else{
				echo "清空失败!";
			}*/
			//echo "formname:".$formName;
			//将获取到的id写入文件
			$indexId = $formName."\n";
			//$indexFile = "/var/www/9999/MessageBoard/indexFile.txt"; //获取id文件，必须写入绝对路径。
			//echo "---".$indexId;
			if(file_put_contents($indexFile,$indexId,FILE_APPEND | LOCK_EX)){
				//echo "写入ok!";
			}else{
				echo "写入失败!";
			}

			$contenta = "<h3>".$row['id']." ---- ".$row['title']." ---- ".$row['content']."</h3>";
			echo '<div><p>'.$contenta.'</p>';
			echo '
				
				通过: <input style="font-size:15px;text-align:center;" type="radio" name='.$formName.' value="1">
				不通过: <input style="font-size:15px;" type="radio" name='.$formName.' value="0">
			</div>
			';
			//echo $contenta;
			//echo "---66";
			//echo "<br>";
		}		
		echo '
			<input style="font-size:15px;" type="submit" value="提交">
		</form>';
		//if($mysqlPassword){
		//	echo "查询成功!";
		//}
	 }else{
		echo "0结果";
	 }
}

//查询用户与密码匹配的
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
function pDrop($sql){
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
	if(mysqli_query($conn,$sql)){
    	echo '<h2 style="text-align:center;">删除成功!</h2>';
	} else {
		echo $sql;
		echo "shanchu错误!";
	}
	//echo '<a href="./../html/main.html">返回主页</a>';
	mysqli_close($conn);
}

//mysql update
function pUpdate($sql){
	
	$conn = mysqli_connect("127.0.0.1","root","admin123K#","ptest");
	if(!conn){
			echo "mysql is not connect! --> error!";
	}else
	{
			echo "mysql is connected! --> ok!";
	}
	if(mysqli_query($conn,$sql)){
    	echo '<h2 style="text-align:center;">修改成功!</h2>';
	} else {
		echo $sql;
		echo "xiugai错误!";
	}
	//echo '<a href="./../html/main.html">返回主页</a>';
	mysqli_close($conn);
}

//test input
//$sql = "insert into ptest2 values (null,'test','123','tem','tem','0','0');";
//pInsert($sql);

//$sql = "select password from puser where name='jwf'";
//$info = "test";
//$loginpassword = "123";
//$s = pSelect($sql,$info,$loginpassword);
//echo "################".$s;
//$sql = "select * from pcontent where backup='1'";
//$sql2 = "select * from pcontent where backup='0'";
//pSelectAllRadio($sql2);
//$sql='update pcontent set backup = "1" where id=1 ;';
//pUpdate($sql);
//$sql = 'delete from pcontent where title="love";';
//pDrop($sql);
?>
