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
	<?php require_once("template/navbar.php"); ?>
	
	<div class="container center_container">
	<!--div class="container center_container col-md-8 col-md-offset-2"-->
		<div id="mainrow" class="row">
			<form method="POST" action="addProduct.php" id="frmAddProduct" role="form" class="form-horizontal"> 	
				<div class="row">
					<div class="form-group col-xs-10 col-lg-5">
						<label class="control-label" for="inpProdNum">Product Number</label>
						<div class="">
							<input type="text" class="form-control" id="inpProdNum" name="inpProdNum" placeholder="1234ABCD">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-xs-10 col-lg-5">
						<label for="inpProject" class="control-label">Project</label>
						<div class="">
							<select id="inpProject" class='selectpicker'>
							<?php
								// Query the db for all active projects.
								$qryGetActiveProejects = "SELECT * FROM tbl_projects WHERE proj_status = 1";
								// Execute query
								$rsltActiveProjects = mysqli_query($conn, $qryGetActiveProjects);

								// Loop through the results
								while($row = mysqli_fetch_array($rsltActiveProjects)) {
								// For each project, do the following
									echo "<option>".$row['proj_name']."</option>\n";
								}

							?>
							</select>
						</div>
					</div>
				</div>
				<div class="row col-xs-offset-2">
					<input class="btn btn-primary" type="submit" form="frmAddProduct" value="Save" />
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<!-- jQuery must be loaded first for Bootstrap to not complain -->
    <script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>

</body>