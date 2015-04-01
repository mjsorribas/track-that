<!--
	exportproducts.php - Export all of the products in a project to a specified format.
	Created On: 3/3/15
	Created by: Dan
-->
<?php 
    require_once('template/security.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Edit Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/exportproducts.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
	<?php require_once("template/navbar.php"); ?>
	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <div class="row">
	    	<!-- Output the template sidebar -->
	        <?php require_once("template/sidebar.php"); ?>

			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Export Products</h1>
				<label>Select Project: </label>
					<select>
						<option value="12345">Jim Barta - 4 New Laptops</option>
						<option value="23456">Region 9 - 2 New Cameras</option>
					</select>

			</div><!-- End maincontent -->
		</div>
	</div>
	<?php require_once("template/footer.php"); ?>