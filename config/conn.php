<?php

	//Server: localhost
	//Database: CUBT
	//User: mohit
	//Password: 4h1iwPj70659vfbi

	$host = "localhost"; 
	//database location

	$user = "mohit"; 
	//database username

	$pass = "4h1iwPj70659vfbi"; 
	//database password

	$db_name = "CUBT"; 
	//database name

	//database connection
	$conn = mysqli_connect($host, $user, $pass);

	mysqli_select_db($conn, $db_name);
?>