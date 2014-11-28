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

<div class="a">
<form action="ground_publish.php" method="post" >
 
  <textarea name="words" cols="100" rows="7" required  wrap="soft" >快来发表些什么吧</textarea>
  <input type="submit"  value="发表"  name="publish">
</form>

</div>
<table>
<?php
$inf=mysql_query("select * from userinf where user=$realuser",$conn);
$inf=mysql_fetch_array($inf);
$outcla=$inf['outcla'];
$class=$inf['class'];
//echo $class.$outcla;
$myclainfarr=mysql_query("select * from text where class=$class",$conn);
//$myclainf=mysql_fetch_array($myclainfarr);
$outclainfarr=mysql_query("select * from text where class=$outcla",$conn);
//$outclainf=mysql_fetch_array($outclainfarr);\
for($time=0;$time<=6;$time++)
{echo "<tr>"." <td width=\"343\" style=\"font-size: 20px\">"."&nbsp;</td></tr>";
	}
	echo "</table>"."<table>";
$time=0;
for(;$time<=29;)
{
	//echo"7";
	/*
	<tr>
    <td width="343" style="font-size: 20px">学号</td>
    <td width="440" style="font-size: 20px"><?php echo $inf['user']; ?></td>
  </tr>
  1303050115:快来发表些yuuyu吧
  1303050115:快来发表些yuuyu吧
  7 1303050115:快来发表些yuuyu吧
  7 1303050115:快来发表些yuuyu吧8
	*/
	/*if($myclainf=mysql_fetch_array($myclainfarr))
	{
		echo "<tr>"." <td width=\"343\" style=\"font-size: 20px\">".$myclainf['user'].$myclainf['username'].":".$myclainf['content']."</td></tr>";
		$time+=1;
		$nullnum=0;
		}
		else{
			$nullnum+=1;
			}
		
	if($outclainf=mysql_fetch_array($outclainfarr))
	{
		echo "<tr>"." <td width=\"343\" style=\"font-size: 20px\">".$outclainf['user'].$outclainf['username'].":".$outclainf['content']."</td></tr>";
		$time+=1;
		$nullnum=0;
		}
		else{
			$nullnum+=1;
			}
	if($nullnum=2)
	{echo "8";
		break;}
		
		7 1303050115:快来发表些yuuyu吧 :7 1303050115:快23333什么吧 :7 1303050115:快来发表么吧 :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :7 : :
		
		*/
	$myclainf=mysql_fetch_array($myclainfarr);
	echo "<tr>"." <td width=\"1000\" style=\"font-size: 20px\">"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$myclainf['user'].$myclainf['name']."&nbsp;&nbsp;&nbsp;".$myclainf['content']."</td></tr>";
	$outclainf=mysql_fetch_array($outclainfarr);	
	echo "<tr>"." <td width=\"1000\" style=\"font-size: 20px\">"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$outclainf['user'].$outclainf['name']."&nbsp;&nbsp;&nbsp;".$outclainf['content']."</td></tr>";
	$time++;
}

?>
</table>
&nbsp;&nbsp; 
     
</body>
</html>
