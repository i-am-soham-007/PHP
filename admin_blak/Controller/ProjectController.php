<?php

include 'config.php';

extract($_POST);


if(isset($insert))
{

	$qq = mysqli_query($con,"SELECT * FROM project Where name = '$name'");
	$res = mysqli_fetch_array($qq);
	$count = mysqli_num_rows($qq);

	if($count == '0')
	{
			$img = $_FILES['image']['name'];

			move_uploaded_file($_FILES['image']['tmp_name'],"../Images/".$img);

		$q =mysqli_query($con,"INSERT INTO `project`(name,description,image) VALUES('$name','$description','$img')");

			if($q)
			{
				echo '<script>alert("Added Successfully");</script>';

				header("location:../addproject.php?bool='<?php echo $q;?>");
			}else{
				echo '<script>alert("Something  Went Wrong in Add");</script>';
			}

	}else{
			echo '<script>alert("Project Already Added");</script>';
	}
}
?>