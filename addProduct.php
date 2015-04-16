<?php
/*
*
*	addProduct.php - The page for a user to add products remotely. The 
*					 whole point of this system.
*	Created: 4/6/15
*	Created by: Dan Salmon
*
*/

require_once("template/security.php");
require_once("db/sql.php");
?>
<head>
	<title>Add Product</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="css/addproduct.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
	<?php 
	require_once("template/navbar.php"); 

	// Check if the form has been submitted before. If so, process the submission. 
	$success = null;
	if (isset($_POST['inpProdNum'])) {
		// Form has been submitted. Process the submission.
		$qryAddProduct = "INSERT INTO tbl_products (part_num,
													added_by,
													qty,
													project_id,
													added_on)
						VALUES ('".$_POST['inpProdNum']."',
								'".$_SESSION['userID']."',
								'".$_POST['inpQuantity']."',
								'".$_POST['inpProject']."',
								NOW())";
		// Execute query
		$rsltAddProduct = mysqli_query($conn,$qryAddProduct);

		if ($rsltAddProduct == true) {
			// Query completed successully.
			$success = true;
		} else {
			// Query failed.
			$success = false;
		}

	}
	?>
	
	<div class="container center_container">
	<!--div class="container center_container col-md-8 col-md-offset-2"-->
		<div id="mainrow" class="row">
			<?php 
			if (!$success == null) {
				// The query was attempted.
				if ($success = true) {
					// Query succeeded.
					?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Success!</strong> Product added to project.
					</div>
					<?php
				} else {
					// Query failed.
					?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <strong>Error</strong> There was a problem adding the product to the project.
					</div>
					<?php
				}
			}
			?>
			<form method="POST" action="addProduct.php" id="frmAddProduct" role="form" class="form-horizontal"> 	
				<div class="control-group">
					<label class="control-label" for="inpProdNum">Product Number</label>
					<div class="controls">
						<input type="text" class="form-control" id="inpProdNum" name="inpProdNum" placeholder="1234ABCD">
					</div>
				</div>
				<div class="control-group">
					<label for="inpProject" class="control-label">Project</label>
					<div class="controls">
						<select id="inpProject" name="inpProject" class='selectpicker'>
						<?php
							// Query the db for all active projects.
							$qryGetActiveProejects = "SELECT * FROM tbl_projects WHERE proj_status = 1";
							// Execute query
							$rsltActiveProjects = mysqli_query($conn, $qryGetActiveProjects);

							// Loop through the results
							while($row = mysqli_fetch_array($rsltActiveProjects)) {
							// For each project, do the following
								echo "<option value=".$row['proj_id'].">".$row['proj_name']."</option>\n";
							}
						?>
						</select>
					</div>
				</div>
				<div class="control-group">
						<label for="inpQuantity" class="control-label">Quantity</label>
						<div class="controls">
							<input type="number" step="1" id="inpQuantity" name="inpQuantity" />
						</div>
				</div>
				<div class="form-actions">
					<input class="btn btn-primary" type="submit" form="frmAddProduct" value="Save" />
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<!-- jQuery must be loaded first for Bootstrap to not complain -->
    <script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>
</body>