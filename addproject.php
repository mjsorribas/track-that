<!--
	addproject.php - Add a new project to the system.
	Created On: 2/26/15
	Created by: Dan
-->
<?php 
    require_once('template/security.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Add Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/addproject.css">
</head>
<body>
	<?php 
		require_once("template/navbar.php"); 
		require_once("db/sql.php"); 
	?>
	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	        <?php require_once("template/sidebar.php"); ?>
	        <!-- End left sidebar -->
	        <?php
	        if (isset($_GET['mode'])) {
	        	switch ($_GET['mode']) {
	        		case "add":
	        			// User has submitted a new project. Process it.

	        			// TODO: Santize project name input.
	        			// Create variables for POST data. Will be used later when sanitizing input.
	        			$newProjectName = $_POST['inpName'];
	        			$newProjectStatus = $_POST['inpStatus'];
	        			$newProjectUser = $_SESSION['userID'];
        				$qryCreateNewProject = "INSERT INTO tbl_projects (proj_name,
													proj_status,
													updated_by,
													updated_on) 
												VALUES ('".$newProjectName."',
														".$newProjectStatus.",
														".$newProjectUser.",
														NOW());";
						$rsltCreateNewProject = mysqli_query($conn,$qryCreateNewProject);
						// Create result status variable that defaults to success.
						$insertSuccess = true;

						// Check if there was an error.
						if ($rsltCreateNewProject == false) {
							// We've encountered an error.
							$insertSuccess = false;
						}
	        			break;
	        		case "view":
	        			break;
	        		default: 

	        	} // End switch
	        } // End if
	        ?>
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Add New Project</h1>
				<?php 
					// Check if we've tried to add a new project. If so, check to see how it went.
					// If we did, display an appropriate message.

					if (isset($insertSuccess)) {
						// The user tried to add a new project. Check to see how it went.
						if ($insertSuccess == true) {
							// The project was added successfully. Display a success message.
							?>
							<!-- Alert starts here -->
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> Project was added successfully.
							</div>
							<!-- Alert ends here -->
							<?php
						} else {
							// The project was not addded successfully. Display an error message.
							?>
							<!-- Alert starts here -->
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error</strong> There was a problem creating a new project. Please try again.
							</div>
							<!-- Alert ends here -->
							<?php
							echo $qryCreateNewProject; // DEBUG
						}
					}

				?>
				<div id="form-container">
					<form id="frmNewProject" class="form-horizontal" role="form" action="addproject.php?mode=add" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="inpName">Name: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inpName" name="inpName" placeholder="CTS Internal - 3 More APs">
							</div>
						    <label class="control-label col-sm-2" for="pwd">Status:</label>
						    <div class="col-sm-10"> 
						      		<input type="radio" id="inpStatus" name="inpStatus" value="1" checked> Active <br />
						      		<input type="radio" id="inpStatus" name="inpStatus" value="2"> Inactive
						    </div>
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