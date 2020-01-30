<?php

extract($_POST);

$con = mysqli_connect("localhost","root","","test");

$dt = date('Y-m-d');

$q = mysqli_query($con,"SELECT * FROM cash WHERE `op_id` = '$op_id' AND adate = '$dt'");

$cnt = mysqli_num_rows($q);

$fetch = mysqli_fetch_array($q);

if($cnt > 0)
{
	$f1 =$fetch['1_collection'];
	$f2 =$fetch['2_collection'];
	$f3 =$fetch['3_collection'];
	$f4 =$fetch['3_collection'];
	

	if($f1 !='' && $f2 =='')
	{
		$up=mysqli_query($con,"UPDATE cash SET `2_collection`='$c2',`2_time`='14:20' WHERE op_id = '$op_id' AND `1_collection` !='' ");
		echo "<script>alert('run 2 update');</script>";
	}

	if($f1 !='' && $f2 != '' && $f3 == '')
	{
		$up=mysqli_query($con,"UPDATE cash SET `3_collection`='$c3',`3_time`='14:22' WHERE op_id = '$op_id' AND `2_collection` !='' ");
		echo "<script>alert('run 3 update');</script>";
	}
	
	if($f1 !='' && $f2 != '' && $f3 !='')
	{
		echo "<script>alert('run 4 update');</script>";
	$up=mysqli_query($con,"UPDATE cash SET `4_collection`='$c4',`4_time`='14:26' WHERE op_id = '$op_id' AND `3_collection` !='' ");
	
	}

	

}else
{
	$insert = mysqli_query($con,"INSERT INTO cash(`1_collection`,`1_time`,`2_collection`,`3_collection`,`4_collection`,`op_id`,`adate`) VALUES('$c1','14:15','$c2','$c3','$c4','$op_id','$dt')");
}

?>