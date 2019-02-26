<?php  

	$_SESSION['message'] ="Username dan password tidak sesuai";
	$_SESSION['logged_in'] = false;

	header("location: login.php");