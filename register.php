<?php 
	session_start();

	if(isset($_SESSION['message'])){
		if($_SESSION['message']!=""){
			echo "<span style='color:red'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Register</title>
 	<link rel="stylesheet" type="text/css" href="new1.css">
 </head>
 <body>

 	<form method="POST" class="form" action="cekregister.php">
 		<h2 class="Register">Register Here</h2>
 		<input type="text" name="Username" placeholder="Username" required>

 		<input type="text" name="Password" placeholder="Password" required id="pass">

 		<button class="button" type="submit" name="register">Register</button>

 		<div class="link">
 			<a href="Login" class="have-account">	Have An Account</a>
 			<br>
 			<a href="Login.php" class="Sign-In">SIGN IN NOW</a>
 		</div>
 	</form>
 </body>
 </html>