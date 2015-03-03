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
					<!-- If we haven't selected a project yet, display a list of projects to edit. -->
					<label>Select Project: </label>
					<select>
						<option value="12345">Jim Barta - 4 New Laptops</option>
						<option value="23456">Region 9 - 2 New Cameras</option>
					</select>
					<br />
					<div class="form-container">
						<div class="panel panel-primary">
							<div class="panel-heading">Project Options</div>
							<div class="panel-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label class="control-label col-sm-2" for="inpName">Name: </label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inpName" value="Jim Barta - 4 New Laptops">
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
						</div>
					</div>
			</div><!-- End maincontent -->
		</div>
	</div>
	<?php require_once("template/footer.php"); ?>