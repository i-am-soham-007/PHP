<?php

$con = mysqli_connect("localhost","root","","test");

//extract($_POST);
$parent_id = $_POST['parent_id'];
$category = $_POST['c_name'];
//$parent_id = '0';

if(isset($_POST['insert']))
{
	$q = mysqli_query($con,"INSERT INTO `n_lvl_category`(c_name,parent_id)VALUES ('$category','$parent_id')");

	if($q)
	{
		header("location:view.php");
	}
}
?>
