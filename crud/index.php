<?php
include 'config.php';
error_reporting(0);
	$fnameErr ="";
	$lnameErr ="";
	$emailErr ="";

	$passErr ="";
	$imgErr ="";
	$genderErr="";

extract($_POST);

if(isset($insert))
{
	$img = $_FILES['image']['name'];


	if($fname == '' OR $lname == '' OR $email == '' OR $password == '' OR $gender == '' OR $img == '')
	{
			if(empty($fname)) 
			{ 
				$fnameErr="First Name is Required";
			}

			if(empty($lname)) 
			{ 
				$lnameErr="Last Name is Required";
			}
			if(empty($email)) 
			{ 
				$emailErr="Email is Required";
			}
			if(empty($password)) 
			{ 
				$passErr="Password is Required";
			}
			if(empty($gender))
			{
    			$genderErr = "Gender is required";
 			}
 			if(empty($img))
			{
				$imgErr="File is Required";
			}	
	}

	
		 if (!preg_match("/^[a-zA-Z ]*$/",$fname))
		  {
      		$fnameErr = "Only letters and white space allowed";
    	  }
	
	
		 if (!preg_match("/^[a-zA-Z ]*$/",$lname))
		 {
      		$lnameErr = "Only letters and white space allowed";
    	 }

    	 if ($password != $cpassword)
		  {
      		$passErr = "Password AND Confirm password Are not match ";
    	  }

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
     		 $emailErr = "Invalid email format";
    	}else
    	{

    			$q1=mysqli_query($con,"SELECT * FROM register WHERE email = '$email'");
    			$count = mysqli_num_rows($q1);
    			if($count > 0)
    			{
    				$emailErr = "Email Already Exist";
    			}
    			else{

						$count = 0;
						$error = array();
						$extension = array("jpg","jpeg","png","gif");
						$ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION); 

						if(!in_array($ext,$extension))
						{
							$imgErr="File type must be in jpg, jpeg, png and gif format only";
						}
						else
							{
								move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']);
								$image = $_FILES['image']['name'];
							$ins =mysqli_query($con,"INSERT INTO register(fname,lname,email,password,gender,profile) VALUES('$fname','$lname','$email','$password','$gender','$image')");
							
							if($ins)
							{
								header("location:view.php");
							}

							}

    					
    				}
    	}

} 
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Practical</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
 <style type="text/css">
 #err{
 		color:red;
 	}
 </style>
</head>
<body>


	  <h2> Registration Form</h2>

<form action=""  method="POST" enctype="multipart/form-data">
<p>First Name :</p>
<input type="text" name="fname" id="fname">
<span id="err"><?php echo $fnameErr; ?></span>
<br>

<p>Last Name :</p>
<input type="text" name="lname" id="lname">
<span id="err"><?php echo $lnameErr; ?></span>
<br>

<p>Email :</p>
<input type="text" name="email" id="ename">
<span id="err"><?php echo $emailErr; ?></span>
<br>

<p>Password :</p>
<input type="text" name="password" id="password">
<span id="err"><?php echo $passErr; ?></span>
<br>

<p> Confirm Password :</p>
<input type="text" name="cpassword" id="password">
<span id="err"><?php echo $passErr; ?></span>
<br>

<p>Gender :</p>
<input type="radio" name="gender" value="Male"> MALE
<input type="radio" name="gender" value="Female"> FEMALE
<span id="err"><?php echo $genderErr; ?></span>
<br>

<p>Hobbies :</p>
<input type="checkbox" name="hobby[]" value="gaming">gaming
<input type="checkbox" name="hobby[]" value="reading">reading
<input type="checkbox" name="hobby[]" value="writing">writing
<input type="checkbox" name="hobby[]" value="coding">coding

<br>

<p>Profile :</p>
<input type="file" name="image" >
<span id="err"><?php echo $imgErr; ?></span>

<br>
<br>
<input type="submit" name="insert" id="add" value="Register" onclick="run();">
</form>

</body>
</html>




	    