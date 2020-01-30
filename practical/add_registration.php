<?php
	require "db.php";
	extract($_POST);
	$q = "SELECT * FROM `registration_master` ";
	$sql = mysqli_query($con,$q);
	$result = mysqli_fetch_array($sql);
	$firstname = $result['firstname'];
	$lastname = $result['lastname'];
	$email = $result['email'];
	$password = $result['password'];	

	if(isset($_POST['addUser'])){
		if(!preg_match("/^[a-zA-Z\s]+$/", $firstname)){
			$fnameError = "First name must only contain letters.";
		}

		if(!preg_match("/^[a-zA-Z\s]+$/", $lastname)){
			$lnameErrors = "Last name must only contain letters.";
		}

		if(!preg_match('/\A(?=[\x20-\x7E]*?[A-Z])(?=[\x20-\x7E]*?[a-z])(?=[\x20-\x7E]*?[0-9])[\x20-\x7E]{6,}\z/', $password)){
			$passwordError = "Password must be strong.";
		}

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailError = "Invalid email..";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	<!-- <script>
		$(function(){
			$('#dob').datepicker({
				minDate: 0
			})
		});
	</script> -->
</head>
<body>
	<center>
	<form action="registration_insert.php" method="POST" enctype="multipart/form-data">
	
		<label for="firstname">First Name *</label>
		<input type="text" value="" id="firstname" name="firstname" required><br><br>
		<span><?php echo $fnameError; ?></span>

		<label for="lastname">Last Name *</label>
		<input type="text" value="" id="lastname" name="lastname" required><br><br>
		<span><?php echo $lnameErrors; ?></span>

		<label for="dob">Date Of Birth *</label>
		<input type="date" id="dob" name="dob" required><br><br>

		<label for="gender">Gender *</label>
		Male<input type="radio" name="gender" id="gender" value="Male" required><br>
		Female<input type="radio" name="gender" id="gender" value="Female" required><br><br>

		<?php 
		$hobby = $result['hobby'];
		$in = explode(",",$hobby)
		?>
		<label for="hobby">Hobby *</label>
		Reading<input type="checkbox" name="hobby[]" id="hobby" value="Reading" ><br>
		Travelling<input type="checkbox" name="hobby[]" id="hobby" value="Travelling" ><br>
		Singing<input type="checkbox" name="hobby[]" id="hobby" value="Singing" ><br>
		Dancing<input type="checkbox" name="hobby[]" id="hobby" value="Dancing" ><br>
		Cooking<input type="checkbox" name="hobby[]" id="hobby" value="Cooking" ><br><br>

		<label for="email">EmailID *</label>
		<input type="email" value="" id="email" name="email" required><br><br>
		<?php echo $emailError; ?>

		<label for="password">Password *</label>
		<input type="password" value="" id="password" name="password" required><br><br>
		<span><?php echo $passwordError; ?></span>

		<label for="confirm">Confirm Password *</label>
		<input type="password" value="" id="confirm" name="confirm" required><br><br>

		
        <label for="registration">Image *</label>
        <input type="file" id="registration" name="image" required=""><br><br>
        
		<button name="addUser" value="Add User" type="submit"></i> ADD</button>
        <button  type="reset"> CANCEL</button>
	</form>
	</center>
</body>
</html>