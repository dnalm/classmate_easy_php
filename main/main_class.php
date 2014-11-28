<?php
require("getuser.php");
	require("connect.php");
	require("select_db.php");
?>

<!doctype html><meta charset="utf-8">
<html>
<head>
<style type="text/css">
div.a
{
position: absolute;
left: 119px;
top: 4px;
font-size: 20px;
width: 552px;
height: 110px;
}

</style>
<head>
<body>
<?php
$inf=mysql_query("select * from userinf where user=$realuser",$conn);
$inf=mysql_fetch_array($inf);
$myclass=$inf['class'];
$outcla=$inf['outcla'];
$mystuarr=mysql_query("select * from userinf where class=$myclass",$conn);
echo "<table>";
echo "<tr><td width=\"300\" style=\"font-size: 20px\">";
echo "我的班级".$myclass."</td><tr>";
while($mystu=mysql_fetch_array($mystuarr))
{
echo "<tr><td width=\"30\" style=\"font-size: 20px\">";
echo $mystu['user']."</td>";
echo "<td width=\"70\" style=\"font-size: 20px\">";
echo $mystu['username']."</td></tr>";
	}


echo "<tr><td width=\"300\" style=\"font-size: 20px\">";
echo "我拜访的的班级".$outcla."</td><tr>";
echo "<form action=\"exitclass.php\"  method=\"post\" >"."<input type=\"hidden\" value=\"$outcla\" name=\"stu\">"."<input type=\"submit\" value=\"退出正在访问的班级\" name=\"exit\" >" ;
$outstuarr=mysql_query("select * from userinf where class=$outcla",$conn);	
while($outstu=mysql_fetch_array($outstuarr))
{
echo "<tr><td width=\"30\" style=\"font-size: 20px\">";
echo $outstu['user']."</td>";
echo "<td width=\"70\" style=\"font-size: 20px\">";
echo $outstu['username']."</td><tr>";
	}
	echo "</table>";

//$mystu=mysql_query("select * from userinf where class=$myclass",$conn);
?>
<!--
<div class="a">
<form action="clsss_search.php" method="post" >

<input type="text" name="searchtext">
<input name="which" type="radio" value="class">班级
<input name="which" type="radio" value="classmate" checked="checked">同学
<input type="submit" value="搜索" name="search">
</form>

</div>-->
</body>
</html>
