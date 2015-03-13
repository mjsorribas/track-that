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


	// QUERIES
	$qryGetActiveProjects = "SELECT updated_on, 
											proj_name, 
        									proj_id,
        									(SELECT COUNT(prod_id)
        									FROM tbl_products 
        									WHERE project_id=tbl_projects.proj_id)as productsPerProject
									FROM tbl_projects
									WHERE proj_status = 1";
	$qryGetInactiveProjects = "SELECT updated_on, 
											proj_name, 
        									proj_id,
        									(SELECT COUNT(prod_id)
        									FROM tbl_products 
        									WHERE project_id=tbl_projects.proj_id)as productsPerProject
									FROM tbl_projects
									WHERE proj_status = 2";
	$qryGetAllProjects = "SELECT updated_on, 
											proj_name, 
        									proj_id,
        									(SELECT COUNT(prod_id)
        									FROM tbl_products 
        									WHERE project_id=tbl_projects.proj_id)as productsPerProject,
											tbl_projstatuses.status
									FROM tbl_projects
									INNER JOIN tbl_projstatuses
									ON tbl_projects.proj_status=tbl_projstatuses.id";							
?>