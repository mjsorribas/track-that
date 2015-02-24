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

	                <li class="active">
	                	<a href="projects.php">
	                		Projects <span class="sr-only">(current)</span>
	                		<b class="caret"></b>
	                	</a>
	                </li>

	                <li><a href="#">Projects>Add/Remove</a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Projects</h1>

				<!-- Tabs here -->
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a ref="#">Active</a></li>
					<li role="presentation"><a href="#">Inactive</a></li>
					<li role="presentation"><a href="#">All</a></li>
					<li role="presentation" class="dropdown"> 
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Edit<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation"><a href="#" role="menuitem">Add New</a></li>
							<li role="presentation"><a href="#" role="menuitem">Change Status</a></li>
						</ul>
					</li>
				</ul>
			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>