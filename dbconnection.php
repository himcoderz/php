<?php
	$server      = "localhost";
	$user        = "root";
	$password    = "";
	$database    = "class8db";	
	$conn        = mysqli_connect($server,$user,$password,$database);
	if(!$conn) {
		die("Not connected".mysqli_error($conn));
	}
	// echo "Connected";
?>