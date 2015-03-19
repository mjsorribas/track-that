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
		require_once("template/includes.php");
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
					<br />
					<?php 
						// Check if a project has been selected to edit. If not, don't show the form.
						if (isset($_GET['projid'])) {
							// A project has been chosen.
							
							$qryGetProjectInfo = "SELECT 
														proj_id,
														updated_on, 
														tbl_users.user_name as updated_by_user,
														proj_name, 
			        									tbl_projstatuses.status,
			        									(SELECT COUNT(prod_id)
			        									FROM tbl_products 
			        									WHERE project_id=tbl_projects.proj_id)as productsPerProject
												FROM tbl_projects
												INNER JOIN tbl_projstatuses
												ON tbl_projects.proj_status=tbl_projstatuses.id
												INNER JOIN tbl_users
												ON tbl_projects.updated_by=tbl_users.user_id 
												WHERE proj_id=".$_GET['projid'];
							// Execute query
							$rsltProjectInfo = mysqli_query($conn,$qryGetProjectInfo);

							// Assign variable to the one row
							$rowProjectInfo = mysqli_fetch_array($rsltProjectInfo);
							?>
							<table class="table table-striped">
								<tr>
									<th>Last Updated</th>
									<th>Updated By</th>
									<th>Project Name</th>
									<th>Status</th>
									<th>Total Products</th>
								</tr>
								<tr>
								<?php
									echo "<td>".formatTime($rowProjectInfo['updated_on'])."</td>";
									echo "<td>".$rowProjectInfo['updated_by_user']."</td>";
									echo "<td><input class='form-control' type='text' value='".htmlentities($rowProjectInfo['proj_name'])."'/></td>";
									?>
									<td>
										<select id="inpStatus">
											<option value="1" <?php echo $rowProjectInfo['status']=="Active" ? "selected" : ""; ?>>Active</option>
											<option value="2" <?php echo $rowProjectInfo['status']=="Inactive" ? "selected" : ""; ?>>Inactive</option>
										</select>
									</td>
									<?php
									echo "<td><a href=products.php?projid=".$rowProjectInfo['proj_id'].">".$rowProjectInfo['productsPerProject']."</a></td>";
								?>
								</tr>
							</table>
							<?php
						} // End if
					?>
			</div><!-- End maincontent -->
		</div>
	</div>
	<?php require_once("template/footer.php"); ?>