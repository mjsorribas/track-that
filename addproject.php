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
	        <?php require_once("template/sidebar.php"); ?>
	        <!-- End left sidebar -->
	        <?php
	        if (isset($_GET['mode'])) {
	        	switch ($_GET['mode']) {
	        		case "add":
	        			// User has submitted a new project. Process it.
	        			$qryAddNewProject = "";
	        			
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
				<div id="form-container">
				<?php var_dump($_POST); ?>
					<form id="frmNewProject" class="form-horizontal" role="form" action="addproject.php?mode=add" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="inpName">Name: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inpName" name="inpName" placeholder="CTS Internal - 3 More APs">
							</div>
						    <label class="control-label col-sm-2" for="pwd">Status:</label>
						    <div class="col-sm-10"> 
						      		<input type="radio" id="inpStatus" name="inpStatus" value="active" checked> Active <br />
						      		<input type="radio" id="inpStatus" name="inpStatus" value="inactive"> Inactive
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