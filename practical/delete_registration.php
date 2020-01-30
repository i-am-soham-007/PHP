<?php
	require "db.php";

	extract($_POST);

	if(isset($_POST['deleteUser']))
	{
		$q = "DELETE FROM `registration_master` WHERE id = '$id'";
		$sql = mysqli_query($con,$q);

		if($sql>0)
		{
			header("Location: registrations.php");
			echo "Data deleted successfully.";
		}
		else
		{
			echo "Something went wrong.";
		}
	}

?>