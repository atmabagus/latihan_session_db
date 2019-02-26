<?php 
//login.php
session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo "<span style='color:red'>",$_SESSION['message']."</span>";
		$_SESSION['message']="";
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
	<form class="tabel" method="POST" action="ceklogin.php">
		<h2 class="Login">Login Here</h2>
		<input type="text" name="username" value="" placeholder="Username" required>

		<input type="password" name="password" value="" placeholder="Password" required>
		<div class="text">
			<p>Forgot <a class="link1" href="register.php">Username / Password?</a></p>
		</div>

		<button type="submit" name="login" class="button">SIGN IN</button>

		<div class="link">
				<a href="register.php" class="have-account">Don't Have An Account? </a>
				<br>
				<a href="register.php" class="Sign-Up">SIGN UP NOW</a>
		
	
			</form>
			
		</body>
</html>