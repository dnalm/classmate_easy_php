<?php
	require("getuser.php");
	require("connect.php");
	require("select_db.php");
?>
<!doctype html>
<html>
<meta charset="utf-8">

<body>
我的言论
<br>
<table>
<?php
//echo $realuser;
$mytextarr=mysql_query("select * from text where user=$realuser",$conn);
while($mytext=mysql_fetch_array($mytextarr))
{
	echo "<tr>"." <td width=\"1000\" style=\"font-size: 20px\">"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$mytext['content']."</td></tr>";
	}

?>
</table>
</body>
</html>