<?php
	/*
	*
	* export.php - Generates a CSV file from a MySQL query.
	* 
	* Created on: 4/16/15
	* Created by: Dan Salmon
	*
	*/

	// Import the files we need.
	require_once("db/sql.php");
	require_once("template/security.php");

	// Get the ID of the project we're exporting the products of.
	if (isset($_GET['projID'])) {
		$projID = $_GET['projID'];
	} else {
		die("Couldn't locate that project.");
	}

	$qryGetProducts = "SELECT * FROM `tbl_products` WHERE `project_id`=".$projID;
	// DEBUG
	//var_dump($qryGetProducts);

	// Execute query
	$rsltGetProducts = mysqli_query($conn,$qryGetProducts);

	// Create array to hold our CSV headers which will be our sql column names
	$headers = array();
	
	// For every mysql column name, add it to the array
	$finfo = mysqli_fetch_fields($rsltGetProducts);
    foreach ($finfo as $val) {
    	// For each column, do the following.
        $headers[] = $val->name;
    }

    // DEBUG
    //var_dump($headers);

	$fp = fopen('php://output', 'w');
	if ($fp && $rsltGetProducts) {
	    header('Content-Type: text/csv');
	    header('Content-Disposition: attachment; filename="export.csv"');
	    header('Pragma: no-cache');
	    header('Expires: 0');
	    fputcsv($fp, $headers);
	    while ($row = $rsltGetProducts->fetch_array(MYSQLI_NUM)) {
	        fputcsv($fp, array_values($row));
	    }
	    // Free result memory
	    mysqli_free_result($rsltGetProducts);
	    die;
	}
?>