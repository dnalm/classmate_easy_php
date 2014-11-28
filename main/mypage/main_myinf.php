<?php
	require("getuser.php");
	require("connect.php");
	require("select_db.php");
?>
<!doctype html>
<html>
<meta charset="utf-8">
<style type="text/css">
 div.a
		  {
	position: absolute;
	left: 156px;
	top: 5px;
	font-size: 50px;
	width: 913px;
	height: 516px;
		  }
</style>
<body>
<?php


$inf=mysql_query("select * from userinf where user=$realuser",$conn);
$inf=mysql_fetch_array($inf);
if(isset($_POST['stuinf']))
	{
		$user=$_POST['stu'];
		//echo $user;
		$inf=mysql_query("select * from userinf where user=$user",$conn);
$inf=mysql_fetch_array($inf);
		}
?>
<div class="a">
 <table width="799" height="255" border="0">
<tr>
    <td width="343" style="font-size: 20px">学号</td>
    <td width="440" style="font-size: 20px"><?php echo $inf['user']; ?></td>
  </tr>
  <tr>
    <td style="font-size: 20px">姓名</td>
    <td style="font-size: 20px"><?php echo $inf['username']; ?></td>
  </tr>
  <tr>
    <td style="font-size: 20px">班级</td>
    <td style="font-size: 20px"><?php echo $inf['class']; ?></td>
  </tr>
  <tr>
    <td style="font-size: 20px">性别</td>
    <td style="font-size: 20px"><?php /*echo $inf['sex'];*/if($inf['sex']){echo "女";}else{echo "男";} ?></td>
  </tr>
  </table>
  <hr>
  <table width="799" height="255" border="0">
  <tr>
    <td width="346" style="font-size: 20px">邮箱</td>
    <td width="443" style="font-size: 20px"><?php echo $inf['mail']; ?></td>
  </tr>
  <tr>
    <td style="font-size: 20px">QQ</td>
    <td style="font-size: 20px"><?php echo $inf['qq']; ?></td>
  </tr>
  <tr>
    <td style="font-size: 20px">电话号码</td>
    <td style="font-size: 20px"><?php echo $inf['phonenum']; ?></td>
  </tr>
  <tr>
    <td height="64" style="font-size: 20px">爱好</td>
    <td style="font-size: 20px"><?php echo $inf['hobby']; ?></td>
  </tr>
</table>
</div>
</body>
</html>