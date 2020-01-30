<?php
	require "db.php";
	extract($_POST);

	if(isset($_POST['login']))
	{
		$q = mysqli_query($con,"SELECT * FROM `registration_master` WHERE email = '".$email."' AND password = '".$password."' ");
		$count = mysqli_num_rows($q);

		if($count>0)
		{
			header("Location: registrations.php");
			echo "Login Successfully done.";
		}
		else
		{
			echo "Sorry credentials wrong. Try again later..";
		}
	}
	else{
		
	}
?>