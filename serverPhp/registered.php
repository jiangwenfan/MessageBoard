<?php
include "mysqlMethod.php";
//获取表单信息
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

//测试输出
//echo $name.$password.$email;

//插入mysql
$name = $name.",";
$password = $password.",";
$email = $email.",";

//test input
$sql = "insert into ptest2 values (null,".$name.$password."'tem','tem','0','0');";
echo $sql;

pInsert($sql);


?>
