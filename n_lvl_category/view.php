<!DOCTYPE html>
<html>
<head>
<title>Display N- LEVEL CATEGORY</title>
</head>
<body>
<select name="parent_id">
<option value="">---- SELECT ------</option>

<?php
	$con = mysqli_connect("localhost","root","","test");
	$qq = mysqli_query($con,"SELECT * FROM `n_lvl_category` WHERE parent_id = '0'");
while($fetch = mysqli_fetch_array($qq))
{
	$id = $fetch['id'];
	$pid = $fetch['parent_id'];
	$c = $fetch['c_name'];

	if($pid =='0')
	{
		$c_name = '*'.$c;
		?>
		<option value=" <?php echo $fetch['id']; ?>"> <?php echo $c_name; ?></option>
		<?php
	}


	$q2 =  mysqli_query($con,"SELECT * FROM `n_lvl_category` WHERE parent_id ='$id'");

	while($data = mysqli_fetch_array($q2))
	{
		$pid1 = $data['parent_id'];
		$cname = $data['c_name'];

		if($pid1 > 0)
		{

			$name = "&nbsp;&nbsp;&nbsp;-".$cname;
	?>
			<option value=" <?php echo $fetch['id']; ?>"> <?php echo $name; ?></option>
	<?php
		}	

	}	
}
	?>
</select>
</body>
</html>