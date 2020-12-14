<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'customerdb'; 

	$connection = mysqli_connect('localhost', 'root', '', 'customerdb');

	// Checking the connection
/*	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
		echo 'Error';
	}
	else{
		echo 'Successful';
	} */

?>