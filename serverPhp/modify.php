<?php
include "mysqlMethod.php";

//管理员审核留言

//修改调整审核界面的显示格式
//增加modify.php中的接收数据并修改数据功能
//表单名称无法确定，所有同通过写入文件和读取文件的形式获取表单信息

$indexFile = "/var/www/9999/MessageBoard/indexFile.txt"; //获取id文件，必须写入绝对路径。
//读取文件，获得表单字段名
$file = fopen($indexFile, "r") or exit("无法打开文件!");
$i = 0; //索引初始值
// 读取文件每一行，直到文件结尾
while(!feof($file))
{
    //echo fgets($file). "<br>";
	$indexFileArray[$i]=fgets($file); //indexFileArray数组存储读取到的值
	$i++;
}
fclose($file);
$arrayLength = count($indexFileArray); //数组长度. 可用长度-1,最后一个是换行
$length = $arrayLength -1; //真实长度
//echo $length;
//var_dump($indexFileArray);

//取出id值，修改数据
for($x=0;$x<$length;$x++){
	$formId = $indexFileArray[$x];
	//update pcontent set backup="1" where id =2;
	$sql = 'update pcontent set backup = "1" where id='.$formId.';';
	//echo $sql;
	//echo "<br>";
	//$sql='update pcontent set backup = "1" where id=1 ;';
	pUpdate($sql);

}
	echo '<a href="./../html/main.html">返回主页</a>';

//v1.0版本。全部都通过,与选择无关
//$formId = $_POST[''];



?>
