<?php
	require "db.php";
	extract($_POST);

	if(isset($_POST['addUser']))
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

		$rfirstname = $firstname;
		$rlastname = $lastname;
		$rhobby = $_POST['hobby'];
		$rdob = $dob;
		$remail = $email;
		$rgender = $gender;
		$rpassword = $password;
		$rconfirm = $confirm;
		$rimage = $image;

		if(isset($remail)){
			echo "Email already exist.";
			// header("Location: add_registration");
		}

		$hobby = "";
		foreach ($rhobby as $hobb) 
		{
			$hobby .= $hobb.",";
		}

		if($rpassword == $rconfirm){
			$q = "INSERT INTO `registration_master`(firstname,lastname,dob,gender,hobby,email,password,confirm,image) VALUES('$firstname','$lastname','$dob','$gender','$hobby','$email','$password','$confirm','$image')";
			$sql = mysqli_query($con,$q);

			if($sql>0)
			{
				header("Location: registrations.php");
				echo "Data inserted successfully.";
			}
			else
			{
				echo "Something went wrong";
			}
		}
		else
		{
			echo "Password and confirm password doesn't match!";	
			// header("Location: add_registration.php");
		}
	}
?>