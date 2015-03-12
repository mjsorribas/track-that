<?php
	// sql.php - Contains all the MySQL settings and some functions.
	// Created by: Dan Salmon
	// Created on: 3/11/15

	// MySQL Settings
	$servername = "localhost";
	$user		= "root"; // WAMP: root
	$password	= ""; 	  // WAMP: (blank)
	$dbname		= "remoteinventory";

	// Create connection
	$conn = mysqli_connect($servername, $user, $password,$dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// We've connected successfully!
?>