<!--
		projects.php - View all projects 
		Created On: 2/24/15
		Created By: Dan
-->
<?php
	// If there's no view set, which one should we re-direct to?
	$DEFAULT_TAB = "active";
	
	if (!isset($_GET['view'])) {
		// There's no view parameter set in the address. Automatically re-direct to the default
		header('Location: projects.php?view='.$DEFAULT_TAB);
		die();
	}

	// Get the view to determine which tab should be active
	$activeTab = $_GET['view'];
?>
<head>
    <meta charset="UTF-8">
    <title>Inventory System - Projects</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/projects.css">
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

	                <li class="active">
	                	<a href="projects.php">
	                		Projects <span class="sr-only">(current)</span>
	                		<b class="caret"></b>
	                	</a>
	                </li>

	                <li><a href="#">Projects>Add/Remove</a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Projects</h1>

				<!-- Tabs here -->
				<ul class="nav nav-tabs">
					<li role="presentation" 
						<?php echo ($activeTab == "active" ? "class='active'" : "")?>>
						<a href="projects.php?view=active">Active</a>
					</li>
					<li role="presentation" 
						<?php echo ($activeTab == "inactive" ? "class='active'" : "")?>>
						<a href="projects.php?view=inactive">Inactive</a>
					</li>
					<li role="presentation" 
						<?php echo ($activeTab == "all" ? "class='active'" : "")?>>
						<a href="projects.php?view=all">All</a>
					</li>
					<li role="presentation" class="dropdown"> 
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Edit<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation"><a href="#" role="menuitem">Add New</a></li>
							<li role="presentation"><a href="#" role="menuitem">Change Status</a></li>
						</ul>
					</li>
				</ul>
				<!-- End of tabs -->
				<!-- Content of tab here -->
				<?php
					// Display content based on the view selected
					switch($activeTab) {
						case "active":
							?>
							<table id="viewActive" class="table table-striped">
								<tr>
									<th>Added</th>
									<th>Name</th>
									<th>Total Products</th>
								</tr>
								<tr>
									<td>4/12/15</td>
									<td>Region 9 - 2 New Cameras</td>
									<td>12</td>
								</tr>
								<tr>
									<td>8/4/15</td>
									<td>Alliance Insurance - 2 cable drops</td>
									<td>12</td>
								</tr>
							</table>
							<?php
							break;
						case "inactive":
							?>
							<table id="viewInactive" class="table table-striped">
								<tr>
									<th>Added</th>
									<th>Name</th>
									<th>Total Products</th>
								</tr>
								<tr>
									<td>4/11/15</td>
									<td>MNRAA - Move cameras</td>
									<td>12</td>
								</tr>
								<tr>
									<td>8/12/15</td>
									<td>Odin State Bank - New patch panel</td>
									<td>12</td>
								</tr>
							</table>
							<?php
							break;
						case "all":
							?>
							<table id="viewAll" class="table table-striped">
								<tr>
									<th>Added</th>
									<th>Name</th>
									<th>Status</th>
									<th>Total Products</th>
								</tr>
								<tr>
									<td>4/12/15</td>
									<td>Region 9 - 2 New Cameras</td>
									<td>Active</td>
									<td>12</td>
								</tr>
								<tr>
									<td>4/11/15</td>
									<td>MNRAA - Move cameras</td>
									<td>Inactive</td>
									<td>12</td>
								</tr>
								<tr>
									<td>8/12/15</td>
									<td>Odin State Bank - New patch panel</td>
									<td>Inactive</td>
									<td>12</td>
								</tr>
								<tr>
									<td>8/4/15</td>
									<td>Alliance Insurance - 2 cable drops</td>
									<td>Active</td>
									<td>12</td>
								</tr>
							</table>
							<?php
							break;
						default:
							//Something went wrong.
							echo "Something went wrong. Please go back to the home page and start over.";
					}
				?>

			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>