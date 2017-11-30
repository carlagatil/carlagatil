<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory of Sari-Sari Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/cg.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body id="loginbody">
	<nav class="navbar-default navbar-inverse navbar-fixed-top" style="height: 50px; " >
	<div class="container-fluid">
		<div class="navbar-header">
			<font face="Courier" style="font-size: 40px; color: white; font-weight: 500; margin-left: 20px; ">GRACE STORE</font>

		</div>		
	</div>
	</nav>	<br> <br><br>
	<div class="container formbody">
		<img src="img/girlface.png">
		<form action="login_connect.php" method="post">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username" maxlength="30" required="">
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password" maxlength="30" required="">
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login">

		</form>
	</div>

	


</body>
</html>