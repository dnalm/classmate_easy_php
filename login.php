<?php
	if(isset($_POST['sub'])){
			//echo "用户名：".$_POST['user']."&nbsp;&nbsp;"."<br>密码：".$_POST['key'];
			$user=$_POST['user'];$key=$_POST['key'];
			//echo "用户名：".$user."&nbsp;&nbsp;"."<br>密码：".$key;
			if($key==""||$user=="")
			{echo "<script>alert(\"用户名或密码不能为空\!\")</script>"."";
			echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='index.html';"."</script>";
			}
			require("connect.php");
			require("select_db.php");
//echo $user;
	$inf=mysql_query("select * from userinf where user= $user ",$conn);
	$inf=mysql_fetch_array($inf);
	
	//echo $inf['key'];
	if($key==$inf['key'])
	{
		setcookie("syluclassmates_user", $user);
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main/index.php';"."</script>";
	}
	else
	{echo "<script>alert(\"用户名或密码错误\!\")</script>"."";
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='index.php';"."</script>";
		}
	
							}
	//else
	//echo "22222222";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>

</body>
</html>