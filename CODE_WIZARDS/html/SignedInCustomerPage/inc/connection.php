<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'osp_db'; 

	$connection = mysqli_connect('localhost', 'root', '', 'osp_db');

	// Checking the connection
/*	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
		echo 'Error';
	}
	else{
		echo 'Successful';
	} */

?>