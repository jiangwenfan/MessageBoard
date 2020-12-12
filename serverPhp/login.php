<?php
include "mysqlMethod.php";

//echo "-----";
//获取表单数据
$loginUser = $_POST['username'];
$loginPassword = $_POST['password'];

//echo $loginUser.$loginPassword;

$sql = "select password from puser where name='".$loginUser."'";

//echo $sql;

$info = '<h3 style="text-align:center;">登录成功!</h3>
<div style="font-szie:60px;">
<a href="./../html/main.html">进入系统</a>
</div>
';


//$sql = "select password from puser where name='jwf'";
//$loginpassword = "123";
pSelect($sql,$info,$loginPassword);
?>
