<?php
include "mysqlMethod.php";
//获取表单信息
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

//测试输出
//echo $name.$password.$email;

//插入mysql
//$name = $name.",";
//$password = $password.",";
//$email = $email.",";

//test input
$sql = "insert into puser values (null,'".$name."',"."'".$password."',"."'".$email."',null);";

echo $sql;
//div的font-size没有生效
$info = '<h3 style="text-align:center;">注册成功!</h3>
<div style="font-szie:60px;">
<a href="./../html/login.html">返回登录</a>
</div>
';

pInsert($sql,$info);


?>
