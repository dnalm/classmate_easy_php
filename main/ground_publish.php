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

<body>
<p>

<?php
	if(isset($_POST['publish']))
	{
			
			$words=$_POST['words'];
			//echo $_POST['words'].$words;
			if($words=="快来发表些什么吧")
			{
				echo "<script>alert(\"输入不能为空\!\")</script>";
				}
	$inf=mysql_query("select * from userinf where user=$realuser",$conn);
	$inf=mysql_fetch_array($inf);
	$class=$inf['class'];
	$username=$inf['username'];
	$time=time();
	//echo $realuser.$class.$words.$time;
	//mysql_query("insert into text values( '$realuser', '$class', '$words' , '$time' )",$conn);	
	mysql_query("INSERT INTO  `syluclassmates`.`text` (
`user` ,
`name` ,
`class` ,
`content` ,
`time`
)
VALUES (
'$realuser',  '$username',  '$class',  '$words',  '$time'
);",$conn);
	mysql_query("ALTER TABLE  `text` ORDER BY  `time` DESC",$conn);
	//mysql_query("insert into text values('1303050115','13030501','23333','1413850309')",$conn);			
echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_ground.php';"."</script>";
	}
	else
	{
		echo "000";}
	
?>
</p>
</body>
</html>