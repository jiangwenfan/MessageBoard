<?php
include "mysqlMethod.php";
//获取表单信息
$formTitle = $_POST['title'];
$formContent = $_POST['content'];

//测试输出
//echo $formTitle.$formContent;


//test input
//默认是0
$sql = "insert into pcontent values(null,'".$formTitle."',"."'".$formContent."','0');";
//echo $sql;
//insert into pcontent values(null,"love","123",null);

//echo $sql;
//div的font-size没有生效
$info = '<h3 style="text-align:center;">留言成功!</h3>
<div style="font-szie:60px;">
<a href="./../html/main.html">返回主页</a>
</div>
';

pInsert($sql,$info);


?>
