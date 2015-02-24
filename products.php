<!-- 
	products.php - View products added to project. 
    Created on: 2/23/15
    Created by: Dan
-->

<head>
    <meta charset="UTF-8">
    <title>Inventory System - Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
	<?php require_once("template/navbar.php"); ?>

	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	        <div class="sidebar">
	            <ul class="nav nav-sidebar">
	                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
	                <li><a href="#">Products</a></li>
	                <li><a href="#">Products>Export</a></li>
	                <li><a href="#">Products>View By Project</a></li>
	                <li><a href="#">Projects</a></li>
	                <li><a href="#">Projects>Add/Remove</a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->

			</div>
	    </div>
	</div>