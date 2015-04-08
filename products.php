<!-- 
	products.php - View products added to project. 
    Created on: 2/23/15
    Created by: Dan Salmon
-->
<?php 
	require_once('template/security.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
	<?php 
		require_once("template/navbar.php"); 
		require_once("template/includes.php");
	?>

	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	    	<?php
	    		$sidebarActivePage = "products";
	    	 	require_once("template/sidebar.php");
				require_once("db/sql.php"); 
			?>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Products</h1>		
				<?php 
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
						// Get the name of the project in case there are no product results
						$qryGetProjectName = "SELECT proj_name
												FROM tbl_projects
												WHERE proj_id =".$projId;
						// Execute project name query
						$rsltProjName = mysqli_query($conn, $qryGetProjectName);

						// Get the project name from the one result
						$projName = mysqli_fetch_assoc($rsltProjName)['proj_name'];

						// Free the result set
						mysqli_free_result($rsltProjName);

						//Execute query
						$rsltProductsByProject = mysqli_query($conn,$qryGetProductsByProject);

						?>
						<h2 class="sub-header">
							<?php echo $projName."\n"; ?>
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
							// Check if there were any results.
							if (mysqli_num_rows($rsltProductsByProject) == 0) {
								// There are no products for this project
								?>
								<tr>
									<td colspan='4'>(No Products)</td>
								</tr>
								<?php
							} else {
								// There is at least one product for this project.
								while($row = mysqli_fetch_array($rsltProductsByProject)) {
									// For each result from the mysql query, make a table row.
									echo "<tr>\n\t";
									echo "<td>".formatTime($row['added_on'])."</td>\n"; 
									echo "<td>".$row['part_num']."</td>\n";
									echo "<td>".$row['qty']."</td>\n";
									echo "<td>".$row['added_by_user']."</td>\n";
									echo "</tr>\n";
								}
							}
							// Free the result set to free up memory.
							mysqli_free_result($rsltProductsByProject);
						?>							
						</table>
						<?php
					}
					// Close the sql connection after we're done
					mysqli_close($conn);
				?>
			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>