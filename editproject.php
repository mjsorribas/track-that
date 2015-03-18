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
    <link rel="stylesheet" href="css/editproject.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">
</head>
<body>
	<?php 
		require_once("template/navbar.php"); 
		require_once("db/sql.php");
	?>
	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <div class="row">
	    	<!-- Output the template sidebar -->
	        <?php require_once("template/sidebar.php"); ?>

			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Edit Project</h1>
					<!-- If we haven't selected a project yet, display a list of projects to edit. -->
					<select class='selectpicker' onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);">
						<option value="#">Select a Project...</option>
						<?php
							// Query the db for all projects
							// TODO: Maybe - Sort projects by status and show groups with disabled option labels
							$qryGetAllProjects = "SELECT proj_id, proj_name FROM tbl_projects ORDER BY proj_name ASC;";

							// Execute query
							$rsltAllProjects = mysqli_query($conn, $qryGetAllProjects);

							// Loop through the results
							while($row = mysqli_fetch_array($rsltAllProjects)) {
								// For each project, do the following
								echo "<option value=editproject.php?projid=".$row['proj_id'].">".$row['proj_name']."</option>\n";
							}
						?>
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