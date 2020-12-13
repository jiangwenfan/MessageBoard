<?php
//用户修改自己的留言
include "mysqlMethod.php";

//echo "-----";
//获取表单数据
$formTitle = $_POST['title'];
$formContent = $_POST['content'];

//echo $formTitle.$formContent;

$sql = 'update pcontent set content="'.$formContent.'" where title ="'.$formTitle.'";';
//echo $sql;

pUpdate($sql);

echo '<a href="./../html/main.html">返回主页</a>';




?>
