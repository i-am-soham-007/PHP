<?php
	require "db.php";
	extract($_POST);
	
	$q = "SELECT * FROM registration_master WHERE id = '$id'";
	$sql = mysqli_query($con,$q);
	$result = mysqli_fetch_array($sql);
	// print_r($result['gender']); exit();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="registration_update.php" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $id; ?>">
	
		<label for="firstname">First Name *</label>
		<input type="text" value="<?php echo $result['firstname']; ?>" id="firstname" name="firstname"><br><br>

		<label for="lastname">Last Name *</label>
		<input type="text" value="<?php echo $result['lastname']; ?>" id="lastname" name="lastname"><br><br>

		<label for="dob">Date Of Birth *</label>
		<input type="date" value="<?php echo $result['dob']; ?>" id="dob" name="dob"><br><br>

		<label for="gender">Gender *</label>
		Male<input type="radio" name="gender" id="gender" value="Male" <?php if($result['gender']=="Male"){ echo "checked"; }?>><br>
		Female<input type="radio" name="gender" id="gender" value="Female" <?php if($result['gender']=="Female"){ echo "checked"; }?>><br><br>

		<?php 
		$hobby = $result['hobby'];
		$in = explode(",",$hobby)
		?>
		<label for="hobby">Hobby *</label>
		Reading<input type="checkbox" name="hobby[]" id="hobby" value="Reading" <?php if(in_array("Reading",$in)){ echo "checked"; }?>><br>
		Travelling<input type="checkbox" name="hobby[]" id="hobby" value="Travelling" <?php if(in_array("Travelling",$in)){ echo "checked"; }?>><br>
		Singing<input type="checkbox" name="hobby[]" id="hobby" value="Singing" <?php if(in_array("Singing",$in)){ echo "checked"; }?>><br>
		Dancing<input type="checkbox" name="hobby[]" id="hobby" value="Dancing" <?php if(in_array("Dancing",$in)){ echo "checked"; }?>><br>
		Cooking<input type="checkbox" name="hobby[]" id="hobby" value="Cooking" <?php if(in_array("Cooking",$in)){ echo "checked"; }?>><br><br>

		<label for="email">EmailID *</label>
		<input type="email" value="<?php echo $result['email']; ?>" id="email" name="email"><br><br>

		<label for="password">Password *</label>
		<input type="password" value="<?php echo $result['password']; ?>" id="password" name="password"><br><br>

		<label for="confirm">Confirm Password *</label>
		<input type="password" value="<?php echo $result['confirm']; ?>" id="confirm" name="confirm"><br><br>

            <label for="registration">Image *</label>
            <input type="file" id="registration" name="image" value="<?php echo $_FILES['image']['name']; ?>" >

        
				<button name="editUser" value="Update" type="submit"></i> UPDATE</button>

                <button  type="reset"> CANCEL</button>
	</form>
	</center>
</body>
</html>