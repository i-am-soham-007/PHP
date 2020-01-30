<?php
	require "config.php";
	extract($_POST);
	
	$q = "SELECT * FROM register WHERE id = '$id'";
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
	
	<form action="controller.php" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $id; ?>">
	
		<label>First Name </label>
		<input type="text" value="<?php echo $result['fname']; ?>" id="fname" name="fname"><br>
		<label>Last Name *</label>
		<input type="text" value="<?php echo $result['lname']; ?>" id="lname" name="lname"><br>

		
		<label for="gender">Gender *</label>
		Male<input type="radio" name="gender"  value="Male" <?php if($result['gender']=="Male"){ echo "checked"; }?>>
		Female<input type="radio" name="gender"  value="Female" <?php if($result['gender']=="Female"){ echo "checked"; }?>><br>

<!-- <?php 
//	$hobby = $result['hobby'];
$in //= //explode(",",$hobby)
?>
<label for="hobby">Hobby *</label>
Reading<input type="checkbox" name="hobby[]" id="hobby" value="Reading" <?php// if(in_array("Reading",$in)){ echo "checked"; }?>><br>
Travelling<input type="checkbox" name="hobby[]" id="hobby" value="Travelling" <?php //if(in_array("Travelling",$in)){ echo "checked"; }?>><br>
Singing<input type="checkbox" name="hobby[]" id="hobby" value="Singing" <?php// if(in_array("Singing",$in)){ echo "checked"; }?>><br>
Dancing<input type="checkbox" name="hobby[]" id="hobby" value="Dancing" <?php// if(in_array("Dancing",$in)){ echo "checked"; }?>><br>
Cooking<input type="checkbox" name="hobby[]" id="hobby" value="Cooking" <?php //if(in_array("Cooking",$in)){ echo "checked"; }?>><br><br> -->

<label for="email">Email  *</label>
<input type="email" value="<?php echo $result['email']; ?>" id="email" name="email"><br>

<label for="password">Password *</label>
<input type="password" value="<?php echo $result['password']; ?>" id="password" name="password"><br>

<!-- <label for="confirm">Confirm Password *</label>
<input type="password" value="<?php //echo $result['confirm']; ?>" id="confirm" name="confirm"><br><br> -->

<label for="registration">Image *</label>
<input type="file" id="registration" name="image" value="<?php echo $result['profile']; ?>"><br>
<br>
<input  type="submit" name="update" value="Update">
<button  type="reset"> CANCEL</button>
</form>

</body>
</html>