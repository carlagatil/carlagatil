<?php 
session_start();
if (isset($_SESSION['login']) == 'loglog'){
}else{
	header('Location: /Grace Inventory/index.php');
}

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
<body>

	<nav class="navbar-default navbar-inverse navbar-fixed-top" style="height: 50px; background-color:whitesmoke;" >
	<div class="container-fluid">
		<div class="navbar-header">
			<font face="Courier" class="nav-text" style="font-size: 40px; font-weight: 500; margin-left: 20px;">GRACE STORE</font>

			<button type="button" class="navbar-toggle" data-target="#navbar" data-toggle="collapse">
				<span class=icon-bar></span>
				<span class=icon-bar></span>
				<span class=icon-bar></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="main.php" class="navtext"><span class="fa fa-institution"></span> HOME</li></a>
					<li ><a href="#" class="navtext"><span class="fa fa-envelope"></span> ABOUT</li></a>
					<li ><a href="index.php" class="navtext"><span class="fa fa-circle-o-notch"></span> Log Out</li></a>
				</ul>
					
		</div>		
	</div>
	</nav>	

		<div class="jumbotron aboutbody">
			<h1 class="categ-header">ABOUT US</h1>
			<p>We are located at Alvaran Property, Brgy.Sampaloc IV, Dasmarinas City, Cavite.
			 	You can contact us on Facebook and Instagram, just click the icon on the lower part of this page<br><br>
			 			Kamsahamnida! </p> <br><br><br><br><br><br><br>
			
		</div>

		<footer class="footerto text-center" id="footer">
		<p>Developed By: Carla Mae Gatil && Shiela Michelle Adao <br><br></p>
			<p>Connect with us on:</p>
			<a href="https://facebook.com/carla.gatil"> <img src="img/fb.png" id="icon" title="Facebook"></a>
			<a href="https://instagram.com/carlymaejepsen"><img src="img/ig.png" id="icon" title="Instagram"></a>
		
			
	</footer>

</body>
</html>