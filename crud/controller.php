<?php

include 'config.php';

extract($_POST);

if(isset($delete))
{


$delete1 =mysqli_query($con,"DELETE FROM register WHERE id ='$id'");

	if($delete1)
	{
		header("location:view.php");
	}
}


if(isset($update))
	{

		//$hobby = implode(",",$_POST['hobby']);
		$count = 0;
		$error = array();
		$extension = array("jpg","jpeg","png","gif");
	    $ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION); 

		if(!in_array($ext,$extension))
		{
			echo "File type must be in jpg, jpeg, png and gif format only.";
		}

		
		
			move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']);
		
			$image = $_FILES['image']['name'];
		
		$q = "UPDATE register SET fname = '$fname',
											 lname = '$lname',
											 gender = '$gender',
											 email = '$email',
											 password = '$password',
											 profile = '$image'
											 WHERE id = '$id'";
		
		$sql = mysqli_query($con,$q);
		if($sql)
		{
			header("Location: view.php");
			echo "Data updated successfully.";
		}
		else
		{

			echo "Something went wrong.";
		}
	}


	if(isset($login))
	{
		$q=mysqli_query($con,"SELECT * FROM register WHERE email = '$email'");

		$count = mysqli_num_rows($q);

		if($count > 0)
		{
			$q2= mysqli_query($con,"SELECT * FROM register WHERE email = '$email' AND password ='$password'");
			$count2 = mysqli_num_rows($q2);

			if($count2 > 0)
			{
				
				
				echo "<script type='text/javascript'>alert('successfully Login');</script>";
				header("location:home.php");
			}else{
				
				echo "Password Wrong";
				//echo "<script type='text/javascript'>alert('Password Was Wrong Please Try Again');</script>";
			}
		}else{
			
			echo "Email Wrong";
			//echo "<script type='text/javascript'>alert('Email is Wrong Please Try Again');</script>";
			//header("location:login.php");
		}
	}
?>