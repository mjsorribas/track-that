<!--
	addproject.php - Add a new project to the system.
	Created On: 2/26/15
	Created by: Dan
-->
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Add Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/addproject.css"
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
	                <li><a href="projects.php">Projects</a></li>
	                <li class="active"><a href="#">Projects>Add <span class="sr-only">(current)</span></a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Add New Project</h1>
				<div id="form-container">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-2" for="inpName">Name: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inpName" placeholder="CTS Internal - 3 More APs">
							</div>
						</div>
						<div class="form-group">
						    <label class="control-label col-sm-2" for="pwd">Status:</label>
						    <div class="col-sm-10"> 
						      		<input type="radio" id="inpStatus" name="inpStatus" value="active" checked> Active <br />
						      		<input type="radio" id="inpStatus" name="inpStatus" value="inactive"> Inactive
						    </div>
						</div>
						<div class="form-group"> 
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">Submit</button>
						    </div>
						</div>
					</form>
				</div>
			</div><!-- End maincontent -->
		</div>
	</div>
	<?php require_once("template/footer.php"); ?>