<?php
	/*
	*
	*	addProduct.php - The page for a user to add products remotely. The 
	*					 whole point of this system.
	*	Created: 4/6/15
	*	Created by: Dan Salmon
	*
	*/

	session_start();
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
</head>
<body>
	<?php require_once("template/navbar.php"); ?>
	<div class="mainrow">
	<form method="POST" action="addProduct.php" id="frmAddProduct" role="form" class="form-horizontal"> 	
		<div class="form-group">
			<label class="control-label col-sm-2" for="inpProdNum">Product Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inpProdNum" name="inpProdNum" placeholder="1234ABCD">
			</div>
		</div>
		<div class="form-group">
			<label for="inpProject" class="col-sm-2 control-label">Project</label>
			<div class="col-sm-10">
				<select id="inpProject" class='selectpicker'>
					<option>Project 1</option>
					<option>Project 2</option>
				</select>
			</div>

		</div>
		<input class="btn btn-primary" type="submit" form="frmAddProduct" value="Save" />
	</form>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<!-- jQuery must be loaded first for Bootstrap to not complain -->
    <script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>

</body>