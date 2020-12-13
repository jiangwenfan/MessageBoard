<?php
include "mysqlMethod.php";
header("Content-Type: text/html;charset=utf-8");
//现主管理员和用户都在同一个表中，只有一个管理员所以直接写死。
//$adminUser = $_POST['username'];
//$adminId = $_POST['id'];
$adminPassword = $_POST['password'];
//echo $adminPassword;

$sql = "select password from puser where name='jwf';";
$info = "ok";
$status = pSelect($sql,$info,$adminPassword);
//echo "#######".$status;
//issues:管理如果密码错误，会直接回到用户登录界面。后期进行分开处理

if($status == 0){
echo '<h1 style="text-align:center;">管理员审核界面</h1>';
//每日一编，防止恋爱。 目前支持6条语句
$index = rand(0,5);  //create rand number 0~5
//echo $index;
$content = array(
"目之所及皆是回忆,心之所想皆是过往,眼之所看皆是遗憾.",
"我感到难过，不是因为你欺骗了我，而是因为我再也不能相信你了",
"不够真诚是危险的，太过真诚是致命的",
"世上存在着不能流泪的悲哀,这种悲哀无法向人解释,即使解释人家也不会理解。它永远一成不变，如无风夜晚的雪花静静的沉积在心底。",
"我控告您无视爱情,一味逃避,唯唯诺诺，我判处您终身孤寂",
"人们总把深情当作舔狗!"
);
echo '<div style="font-size:20px;width:100%;height:80px;">';
//echo '<div style="width:100%;height:80px;background-color:red;">';
echo '<div style="float:right;">';
echo $content[$index];
echo '</div>';
echo '</div>';

//取出数据
$sql2 = "select * from pcontent where backup='0'";
pSelectAllRadio($sql2);

//废弃代码。。
//生成显示数据
//echo '<div style="width:700px;height:100%;borde:4px;">';
//echo '<div style="width:700px;height:100%;borde:4px;background-color:green;">';
 /*
echo '
<form action="" method="post">
	<div> 
		<p>123:</p>	
		通过:<input type="radio" name="st" value="0">
		不通过:<input type="radio" name="st" value="1">
	</div>
</form>
';*/
//echo '</div>';
}
else{
	echo "登录失败!";
}

?>
