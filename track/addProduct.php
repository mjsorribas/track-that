<?php
	/*
	*
	*	addProduct.php - The page for a user to add products remotely. The 
	*					 whole point of this system.
	*	Created: 4/6/15
	*	Created by: Dan Salmon
	*
	*/
?>
<head>
	<title>Add Product</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
</head>
<body>

	<form method="POST" action="addProduct.php" id="frmAddProduct" role="form"> 							
		<input name='inpProjId' id='inpProjId' type='hidden' form='frmUpdateProject'/>
		<input class="btn btn-primary" type="submit" form="frmUpdateProject" value="Save" />
	</form>

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<!-- jQuery must be loaded first for Bootstrap to not complain -->
    <script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>

</body>