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
			//echo $_POST['mail'].$_POST['qq'].$_POST['phonenum'].$_POST['hobby'];
			$mail=$_POST['mail'];$qq=$_POST['qq'];$phonenum=$_POST['phonenum'];$hobby=$_POST['hobby'];
		
	

	mysql_query("update userinf set mail=$mail where user=$realuser",$conn);
	mysql_query("update userinf set qq=$qq where user=$realuser",$conn);
	mysql_query("update userinf set phonenum=$phonenum where user=$realuser",$conn);
	mysql_query("update userinf set hobby=$hobby where user=$realuser",$conn);
	echo "<script>alert(\"修改成功\!\")</script>";
	echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_myinf.php';"."</script>";

			
			
			
			
			/*$words=$_POST['words'];
			//echo $_POST['words'].$words;
			if($words=="快来发表些什么吧")
			{
				echo "<script>alert(\"输入不能为空\!\")</script>";
				}
echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_ground.php';"."</script>";*/
	}
	else
	{
		echo "000";}
	
?>
<body>
</body>
</html>