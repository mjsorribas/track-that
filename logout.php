<?php
	// Start the session
	session_start();

	// Unset all the varaibles in the session
	$_SESSION = array();

	// Destroy the session
	session_destroy();

	// Redirect to login page
	header('Location: '."login.php");
?>