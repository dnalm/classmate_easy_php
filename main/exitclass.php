<?php
	require("getuser.php");
	require("connect.php");
	require("select_db.php");
	$inf=mysql_query("select * from userinf where user=$realuser",$conn);
$inf=mysql_fetch_array($inf);
$class=$inf['class'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
	if(isset($_POST['exit']))
	{

		mysql_query("update userinf set outcla=\"0\" where user=$realuser",$conn);
	}
		
		
		
		
?>
<body>
</body>
</html>