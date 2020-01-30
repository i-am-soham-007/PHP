<?php
	require "db.php";
	extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<center>
	<form method="POST" action="login_insert.php">
		<label for="email">Email ID *</label>
		<input type="email" name="email" id="email" value="" required><br><br>

		<label for="password">Password *</label>
		<input type="password" name="password" id="password" value="" required><br><br>

		<input type="submit" name="login" value="Submit">
		<input type="reset" name="btnReset" value="Reset">
	</form><br><br>


	<a href="add_registration.php">New Resgistration?..</a>
	</center>
</body>
</html>