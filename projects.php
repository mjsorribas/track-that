<!--
		projects.php - View all projects 
		Created On: 2/24/15
		Created By: Dan
-->
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Projects</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/projects.css">
</head>
<body>
	<?php require_once("template/navbar.php"); ?>

	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	        <div class="sidebar">
	            <ul class="nav nav-sidebar">
	                <li><a href="index.php">Overview</a></li>
	                <li><a href="products.php">Products</a></li>
	                <li><a href="#">Products>Export</a></li>
	                <li><a href="#">Products>View By Project</a></li>
	                <li class="active"><a href="#">Projects <span class="sr-only">(current)</span></a></li>
	                <li><a href="#">Projects>Add/Remove</a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Products</h1>


			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>