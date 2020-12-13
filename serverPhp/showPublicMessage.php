<html>
<head></head>

<body>
	<h1>显示所有公开留言</h1>
<?php
//echo "123";
include "mysqlMethod.php";

//test input
//默认是0,只显示审核通过状态为1的数据
$sql = "select * from pcontent where backup='1'";
pSelectAll($sql);



?>
</body>
</html>

