<!-- 
	products.php - View products added to project. 
    Created on: 2/23/15
    Created by: Dan
-->

<head>
    <meta charset="UTF-8">
    <title>Inventory System - Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">

</head>
<body>
	<?php require_once("template/navbar.php"); ?>

	<div class="container-fluid"> <!-- container-fluid div should wrap everything under the top navbar -->
	    <!-- Start left sidebar -->
	    <div class="row">
	        <div class="sidebar">
	            <ul class="nav nav-sidebar">
	                <li><a href="index.php">Overview</a></li>
	                <li class="active"><a href="products.php">Products <span class="sr-only">(current)</span></a></li>
	                <li><a href="#">Products>Export</a></li>
	                <li><a href="#">Products>View By Project</a></li>
	                <li><a href="#">Projects</a></li>
	                <li><a href="#">Projects>Add/Remove</a></li>
	                <li><a href="#">Projects>Change Status</a></li>
	            </ul>
	        </div>
	        <!-- End left sidebar -->
			<div class="col-md-offset-2 maincontent">
				<!-- Page content goes here -->
				<h1 class="page-header">Products</h1>
				Select Project:
				<select class="selectpicker">
					<option value="0">Jim Barta - 4 New Laptops</option>
					<option value="1">Region 9 - 2 New Cameras</option>
				</select>
				<h2 class="sub-header">
					Region 9 - 2 New Cameras
					<a href="#"><button class="btn btn-primary btnExport">Export</button></a>
				</h2>
				<table class="table table-striped">
					<tr>
						<th>Added</th>
						<th>Product #</th>
						<th>Quantity</th>
						<th>Added By</th>
					</tr>
					<tr>
						<td>2/12/15 5:56pm</td>
						<td>1234566-789</td>
						<td>34</td>
						<td>Ethan</td>
					</tr>
					<tr>
						<td>2/11/15 1:23pm</td>
						<td>1234566-789</td>
						<td>3</td>
						<td>Ethan</td>
					</tr>
					<tr>
						<td>2/11/15 1:22pm</td>
						<td>166-789</td>
						<td>4</td>
						<td>Chad</td>
					</tr>
					<tr>
						<td>2/10/15 9:13am</td>
						<td>1289</td>
						<td>8</td>
						<td>Jeremy</td>
					</tr>
					<tr>
						<td>2/10/15 3:10pm</td>
						<td>ST446AZ00-0</td>
						<td>90</td>
						<td>Chris</td>
					</tr>
				</table>
			</div>
	    </div>
	</div>
	<?php require_once("template/footer.php"); ?>