<?php
	require("getuser.php");
	require("connect.php");
	require("select_db.php");
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type='text/css' rel='stylesheet' href='css/in.css'>
</head>
<body>


<?php
	if(isset($_POST['sub'])){
			
	$user=$_POST['user'];$username=$_POST['username'];$key=$_POST['key'];$key2=$_POST['key2'];$sex=$_POST['sex'];$qq=$_POST['qq'];$mail=$_POST['mail'];$hobby="";$phonenum=$_POST['phonenum'];
	//echo $username;
	if($key!=$key2)
	{
		
		echo "<script>alert(\"两次输入的密码不相同\!\")</script>"."";
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='index.html';"."</script>";
		}
	if($user>9999999999||$user<1000000000){
		
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='hello.html';"."</script>";
	
		}
        if($username=="")
        {
        echo "<script>alert(\"姓名不能为空\!\")</script>"."";
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='index.html';"."</script>";
        }
		 if($sex=="")
        {
        echo "<script>alert(\"没有选择性别\!\")</script>"."";
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='index.html';"."</script>";
        }
		$class=substr($user,0,8);
		$outcla;
      $aa= mysql_query("INSERT INTO `syluclassmates`.`userinf` (`user` ,`username` ,`key` ,`class` ,`sex` ,`mail` ,`qq` ,`phonenum` ,`hobby` ,`outcla`)VALUES ('$user','$username','$key','$class','$sex','$mail','$qq','$phonenum', NULL , \"0\");",$conn);
	    echo "<script>alert(\"注册成功,请重新登录\!\")</script>";
		echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='../';"."</script>"; 
	}
?>

</body>
</html>
