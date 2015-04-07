<?php
	/** 
	* security.php - All of the authentication code to be included in each page.
	* Created on: 3/26/15
	* Created by: Dan Salmon
	*/


	/*
	*	VARIABLES
	*/	

	$maintenanceMode = false; // When enabled, none of the pages require logging in.
	$maintenanceModeUser = 1; // UserID to pretend to be while in maintenance mode (from tbl_users).
	$errorPage = "login.php?code=noauth";

	// Start the session to access the variables.
	session_start();

	if (!$maintenanceMode) { // Maintenance Mode is off: Authentication is required.
		// Check if the user is logged in.
		if ($_SESSION['authenticated'] == true) {
			// User is logged in. We're good.
		} else {
			// User is not logged in. Redirect to the default error page.
			header('Location: '.$errorPage);
		}
	}
?>