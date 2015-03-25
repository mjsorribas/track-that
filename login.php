<?php
	/*
	* Login.php - The login page for the whole system. Security.php re-directs here.
	* 
	* Created: 3/25/15
	* Created by: Dan Salmon
	*/

	// REQUIRES
	require_once("db/sql.php");

	// Check for login attempt and process any.
	if (!empty($_POST)) {
		// A login has been attempted.

		// Validate inputEmail. If it passses, it will be equal to the email address.
		// If it fails, it will be eqaul to false.
		$filteredEmail = filter_input(INPUT_POST, 'inputEmail',FILTER_VALIDATE_EMAIL);
		$filteredPass = filter_input(INPUT_POST, 'inputPassword',FILTER_SANITIZE_STRING);

		if (!$filteredEmail == false) {
			// The email has been validated. Continue the checking process.
			
			// Query the database and see what the password hash should be for this user.
			$qryGetPassHash = "SELECT * FROM tbl_users WHERE email='".$filteredEmail."'";
			var_dump($qryGetPassHash);
			// Execute the query.
			$rowGetPassHash = mysqli_fetch_array(mysqli_query($conn,$qryGetPassHash));

			var_dump($rowGetPassHash['pwd_hash']);
			var_dump(md5($filteredPass));
			// Compare what's stored in the database to what was input
			if ($rowGetPassHash['pwd_hash'] == md5($filteredPass)) {
				// User has been authenticated.
				echo "User authenticated.";
			} else {
				// Password failed check.
				echo "Wrong password.";
			}
		} else {
			// Email failed validation
			echo "not an email.";
			// Redirect to login failure page.
		}
	}

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
		        <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      	</form>
    	</div>
	</body>
</html>