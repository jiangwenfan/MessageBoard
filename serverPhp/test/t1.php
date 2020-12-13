<?php

$indexFile = "/var/www/9999/MessageBoard/indexFile.txt"; //获取id文件，必须写入绝对路径。


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

echo $arrayLength;
var_dump($indexFileArray);


/*
if(system($cmd)){
	echo "清空成功！";
}else{
	echo "清空失败!";
}*/
//$ile = '/var/www/9999/people.txt';
// Open the file to get existing content
//$current = file_get_contents($file);
// Append a new person to the file
//$current .= "John Smith\n";
// Write the contents back to the file
//file_put_contents($file, $current);
?>

