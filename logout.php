<?php
	// Start the session
	session_start();

	// Unset all the varaibles in the session
	$_SESSION = array();

	// Destroy the session
	session_destroy();
?>