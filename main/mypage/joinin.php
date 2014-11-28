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

if(isset($_POST['joinit']))
	{
			$outcla=$_POST['outcla'];
			//echo $outcla;
			 mysql_query("update userinf set `outcla`=$outcla where user=$realuser",$conn);
			//echo $aa;
			echo "<script>alert(\"加入班级成功\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
	}
	else
	{
		echo "0000";}
?>
<body>
</body>
</html>