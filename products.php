<!-- 
	products.php - View products added to project. 
    Created on: 2/23/15
    Created by: Dan Salmon
-->

<head>
    <meta charset="UTF-8">
    <title>Inventory System - Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">

</head>
<body>
	<?php 
		require_once("template/navbar.php"); 
		require_once("template/includes.php");
	?>

	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	    	<?php require_once("template/sidebar.php"); ?>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Products</h1>		

				<?php 
					// Establish connection to the DB
					require_once("db/sql.php");


					// Create a prepared statement
					$stmtGetActiveProjects = mysqli_stmt_init($conn);
					if (mysqli_stmt_prepare($stmtGetActiveProjects,$qryGetProjectsByStatus)) {
						$activeStatus = 1;

						// Bind parameters for markers
						mysqli_stmt_bind_param($stmtGetActiveProjects, "s", $activeStatus);

						// Execute query
						mysqli_stmt_execute($stmtGetActiveProjects);

						// Bind result variables
						mysqli_stmt_bind_result($stmtGetActiveProjects, $proj_id, $proj_name);

						// Output a select element
						echo "<select class='selectpicker' onchange='this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);'>\n\t";
						
						echo "<option value=''>Select a Project...</option>";
						// Loop through the query results

						while(mysqli_stmt_fetch($stmtGetActiveProjects)) {
							// Make an option for the select with each row.
							echo "<option value='products.php?projid=".$proj_id."'>".$proj_name."</option>\n";
						}
						// Close the select element
						echo "</select>";


					}

					

					// Check if there's a project selected yet
					if (isset($_GET['projid'])) {
						// A project has been selected. Get SQL data for that project.						
						$projId = $_GET['projid'];

						// Get all columns in tbl_products for this project and sort by prod_id
						$qryGetProductsByProject = "SELECT 
														p.prod_id, 
														p.part_num, 
														p.qty, 
														p.added_on, 
														u.user_name AS added_by_user, 
														j.proj_name 
													FROM `tbl_products` AS p 
													INNER JOIN `tbl_users` AS u ON p.added_by = u.user_id 
													INNER JOIN `tbl_projects` AS j ON p.project_id = j.proj_id 
													WHERE p.project_id = ".$projId."  
													ORDER BY `p`.`prod_id` ASC";
						//Execute query
						$rsltProductsByProject = mysqli_query($conn,$qryGetProductsByProject);

						// Get the first row of the result so we can ouput the project name below.
						$firstRow = mysqli_fetch_assoc($rsltProductsByProject);

						// Reset the result pointer to the first record after reading it. Otherwise, the loop below will skip the first record.
						mysqli_data_seek($rsltProductsByProject, 0);
						?>
						<h2 class="sub-header">
							<?php echo $firstRow['proj_name']."\n"; ?>
							<a href="#">
								<button class="btn btn-primary btnExport">Export</button>
							</a>
						</h2>
						<table class="table table-striped">
							<tr>
								<th>Added</th>
								<th>Product #</th>
								<th>Quantity</th>
								<th>Added By</th>
							</tr>
						<?php
							// Loop through the results
							while($row = mysqli_fetch_array($rsltProductsByProject)) {
								// For each result from the mysql query, make a table row.
								echo "<tr>\n\t";
								echo "<td>".formatTime($row['added_on'])."</td>\n"; 
								echo "<td>".$row['part_num']."</td>\n";
								echo "<td>".$row['qty']."</td>\n";
								echo "<td>".$row['added_by_user']."</td>\n";
								echo "</tr>\n";
							}

							// Free the result set to free up memory.
							mysqli_free_result($rsltProductsByProject);
						?>							
						</table>
						<?php
					} else {
						// No project has been selected. Don't show anything but projects.

					}
					// Close the sql connection after we're done
					mysqli_close($conn);
				?>
			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>