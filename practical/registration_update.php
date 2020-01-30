<?php
	require "db.php";
	extract($_POST);

	if(isset($_POST['editUser']))
	{

		$hobby = implode(",",$_POST['hobby']);
		$count = 0;
		$error = array();
		$extension = array("jpg","jpeg","png","gif");
	    $ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION); 

		if(!in_array($ext,$extension))
		{
			echo "File type must be in jpg, jpeg, png and gif format only.";
		}

		
		
			move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.basename($_FILES['image']['name']));
		
			$image = $_FILES['image']['name'];
		
		$q = "UPDATE registration_master SET firstname = '$firstname',
											 lastname = '$lastname',
											 dob = '$dob',
											 gender = '$gender',
											 hobby = '$hobby',
											 email = '$email',
											 password = '$password',
											 confirm = '$confirm',
											 image = '$image'
											 WHERE id = '$id'";
		
		$sql = mysqli_query($con,$q);
		if($sql>0)
		{
			header("Location: registrations.php");
			echo "Data updated successfully.";
		}
		else
		{
			echo "Something went wrong.";
		}
	}
?>