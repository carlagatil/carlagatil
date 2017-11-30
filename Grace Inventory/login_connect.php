<?php 
session_start();

	$user = $_POST['username'];
	$pass = $_POST ['password'];

	if ($user == "grace" && $pass == "grace" || $user =="Grace" && $pass == "Grace" || $user == "GRACE" && $pass == "GRACE") {
		header('Location: main.php?Successfully Login!');
		
			} else {
				header("Location:index.php?msg='Failed to login!'");
			}
	?>