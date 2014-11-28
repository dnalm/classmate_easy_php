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
	height: 526px;
		  }
</style>
<body>
<?php


$inf=mysql_query("select * from userinf where user=$realuser",$conn);
$inf=mysql_fetch_array($inf);

?>
<div class="a">
<form action="changeinf_up.php"  method="post">
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
    <td style="font-size: 20px"><?php echo $inf['sex']; ?></td>
  </tr>
  </table>
  <hr>
  <span style="font-size: 20px">
  
  </span>
  <table width="799" height="238" border="0">
  <tr>
    <td width="346" style="font-size: 20px">邮箱</td>
    <td width="443" style="font-size: 20px"><input type="text" name="mail" value="<?php echo $inf['mail']; ?>"></td>
  </tr>
  <tr>
    <td style="font-size: 20px">QQ</td>
    <td style="font-size: 20px"><input type="text" name="qq" value="<?php echo $inf['qq']; ?>"></td>
  </tr>
  <tr>
    <td style="font-size: 20px">电话号码</td>
    <td style="font-size: 20px"><input type="text" name="phonenum" value="<?php echo $inf['phonenum']; ?>"></td>
  </tr>
  <tr>
    <td height="64" style="font-size: 20px">爱好</td>
    <td style="font-size: 20px"><input type="text" name="hobby" value="<?php echo $inf['hobby']; ?>"></td>
  </tr>
  <tr>
  <td height="30">
  <input  type="submit" value="更改"  name="change">
  </td>
  </tr>
</table>
</form>
</div>
</body>
</html>