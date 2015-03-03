<!--
	editproject.php - Change the status of projects in the system.
	Created On: 3/3/15
	Created by: Dan
-->
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Edit Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/editproject.css"
</head>
<body>
	<?php require_once("template/navbar.php"); ?>
	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <div class="row">
	    	<!-- Output the template sidebar -->
	        <?php require_once("template/sidebar.php"); ?>
	        
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Edit Project</h1>
				<div id="form-container">

				</div>
			</div><!-- End maincontent -->
		</div>
	</div>
	<?php require_once("template/footer.php"); ?>