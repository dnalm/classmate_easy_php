<?php
setcookie("syluclassmates_user",'null');
?>
<!doctype html>
<html>
<head>


		<meta charset="utf-8">
		<title>沈理__同学录</title>
    <style type="text/css">
    body {
	background-image: url();
}
    </style>
</head>
    
    <style type="text/css">
		  div.a
		  {
	position: absolute;
	left: 200px;
	top: 100px;
	font-size: 50px;
		  }
		div.b
		{
			position: absolute;
			left: 800px;
			top: 300px;
			font-size: 20px;
		}
		div.c
		{
	position: absolute;
	left: 143px;
	right: 1200px;
	top: 61px;
	bottom: 1100px;
	font-size: 20px;
	width: 887px;
	height: 601px;
		}
    </style>
    
<body>
<div class="c">
<img src="background.jpg" width="933" height="553"  alt=""/>
</div>
<div class="a">
       &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
           <img src="logo.png" width="329" height="121"  alt=""/>
         <br>
         <img src="home.png" width="632" height="356"  alt=""/>
</div>
         
<div class="b">
			<form action="login.php" method="post">
  				用户名:<br>
	 		  <input type="text" name="user" required />
 			 	<br><br>
	  			密&nbsp;&nbsp;码:<br>
 			 	<input type="password" name="key" required />
 			 	<br><br>
 			 	&nbsp;
  				<a href="register/index.html">
             <font size="+0.5" color="#999999">注册</font></a>
                &nbsp;
                <input type="submit" value="登录" name="sub" />
                
  </form>
        </div>
        
</body>
</html>
