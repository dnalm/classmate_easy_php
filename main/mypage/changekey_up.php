<?php
	require("getuser.php");
	require("connect.php");
	require("select_db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
	if(isset($_POST['change']))
	{
			//echo $_POST['key'].$_POST['newkey'];
			$key=$_POST['key'];$newkey=$_POST['newkey'];
	$inf=mysql_query("select * from userinf where user=  $realuser",$conn);
	$inf=mysql_fetch_array($inf);
	if($key==$inf['key'])
	{
	mysql_query("update userinf set `key`=$newkey where user=$realuser",$conn);
	
	echo "<script>alert(\"修改成功\!\")</script>";
	}
	else
	{
		echo "<script>alert(\"密码输入错误\!\")</script>";
		}
	echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_changekey.php';"."</script>";
	}
	else{
		echo "0000";
		}
?>
<body>
</body>
</html>