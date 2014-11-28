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
	if(isset($_POST['search']))
	{
			//echo $_POST['searchtext'].$_POST['which'];
			$searchtext=$_POST['searchtext'];$which=$_POST['which'];
			if($searchtext==''){
				echo "<script>alert(\"输入不能为空\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
				}
			if($which=='classmate'){
				if($searchtext==$realuser){
					echo "<script>alert(\"不能搜索自己\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
					}
					
				$stuinf=mysql_query("select * from userinf where user=$searchtext",$conn);
$stuinf=mysql_fetch_array($stuinf);
$stu=$stuinf['username'];
if(!$stu)
{
	echo "<script>alert(\"没有该用户\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
	}
	echo "存在".$searchtext;
	echo "<form action=\"main_myinf.php\"  method=\"post\" >"."<input type=\"hidden\" value=\"$searchtext\" name=\"stu\">"."<input type=\"submit\" value=\"查看\" name=\"stuinf\" >" ;
				}
			else if($which=='class'){
				if($searchtext==$class){
					echo "<script>alert(\"不能搜索自己的班级\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
					}
				if($classinf=mysql_query("select * from userinf where class=$searchtext",$conn)){
					echo "存在班级".$searchtext;
					}
				else{
					echo "<script>alert(\"没有找到该班级\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
					}
					//echo "<br>".$searchtext;
echo "<form action=\"joinin.php\"  method=\"post\" name=\"joinin\">"."<input type=\"hidden\" value=\"$searchtext\" name=\"outcla\">"."<input type=\"submit\" value=\"拜访\" name=\"joinit\" >" ;
/*echo "<script>alert(\"加入班级成功\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";*/

				}
				else{
					
					echo  "<script>alert(\"error\!\")</script>";
				echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_search.php';"."</script>";
					}
			/*$words=$_POST['words'];
			//echo $_POST['words'].$words;
			if($words=="快来发表些什么吧")
			{
				echo "<script>alert(\"输入不能为空\!\")</script>";
				}
echo"<script language=\"javascript\" type=\"text/javascript\"> "."window.location.href='main_ground.php';"."</script>";*/
	}
	else{
		echo "000";}
	
?>
<body>
</body>
</html>