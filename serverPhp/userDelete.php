<?php
//用户删除自己的留言
include "mysqlMethod.php";

//echo "-----";
//获取表单数据
$formTitle = $_POST['title'];
//$formContent = $_POST['content'];

//echo $formTitle;

$sql = 'delete from pcontent where title="'.$formTitle.'";';
//echo $sql;

//pUpdate($sql);

//$sql = 'delete from pcontent where title="love";';
pDrop($sql);

echo '<a href="./../html/main.html">返回主页</a>';




?>
