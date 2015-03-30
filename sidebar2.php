<html>
	<head>
		<title>Demo</title>
		
		<!--link rel="stylesheet" href="css/bootstrap.min.css" /-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sidebar2.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<?php
			require_once("template/security.php");
			require_once("template/navbar.php");
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="nav-side-menu">
		    	<!--div class="brand">Brand Logo</div-->
			    	<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
			  
			        <div class="menu-list">
			  
			            <ul id="menu-content" class="menu-content collapse out">
			                <li>
			                  <a href="#">
			                  <i class="fa fa-dashboard fa-lg"></i> Overview
			                  </a>
			                </li>

			                <li>
			                	<a href="#">
			                		<i class="fa fa-user fa-lg"></i> Products
			                	</a>
			                </li>

			                <li data-toggle="collapse" data-target="#service" class="collapsed">
			                  <a href="#"><i class="fa fa-globe fa-lg"></i> Projects<span class="arrow"></span></a>
			                </li>  
			                <ul class="sub-menu collapse" id="service">
			                  <li>Overview</li>
			                  <li>Add Project</li>
			                  <li>Edit Project</li>
			                </ul>

			            </ul>
			     	</div>
				</div>
			</div>
		</div>

		<script src="//code.jquery.com/jquery-1.11.1.js"></script> <!-- jQuery must be loaded first for Bootstrap to not complain -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>	
</html>