<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'engineer');
 
	// Attempt to connect to MySQL database
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
	// Check connection
	if($db == false){
		die("ERROR: Could not connect because " . mysqli_connect_error());
	}
?>