<?php
	/*
	* Login.php - The login page for the whole system. Security.php re-directs here.
	* 
	* Created: 3/25/15
	* Created by: Dan Salmon
	*/
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
    	
		<!-- Stylesheets -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/login.css">

    	<!-- Scripts -->

	</head>
	<body>
		<!-- 
			Page copied from Bootstrap example (http://getbootstrap.com/examples/signin/)
			licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
		-->
		<div class="container">
	    	<form class="form-signin" action="login.php" method="POST">
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      	</form>
    	</div>
	</body>
</html>