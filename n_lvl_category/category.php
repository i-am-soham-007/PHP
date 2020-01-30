<!DOCTYPE html>
<html>
<head>
	<title>N LEVEL CATEGORY EXAMPLE</title>
</head>
<body>
<?php

$con = mysqli_connect("localhost","root","","test");

 ?>
	<form action="done.php" method="POST">
		<select name="parent_id">
	<option value="">---- SELECT ------</option>

	<?php
	$qq = mysqli_query($con,"SELECT * FROM `n_lvl_category`");
			while($fetch = mysqli_fetch_array($qq))
			{
				$pid = $fetch['parent_id'];
				$c = $fetch['c_name'];
			
			if($pid =='0')
			{

				$c_name = '*'.$c;
				//echo "<script type='text/javascript'>alert('$pid');</script>";
			}else{
				$c_name = "&nbsp;&nbsp;&nbsp;-".$c;
				//echo "<script type='text/javascript'>alert('$pid');</script>";
			}
	?>

<option value=" <?php echo $fetch['id']; ?>"> <?php echo $c_name; ?></option>
	
	<?php } ?>
</select>
		<br>
		Enter Category :-
		<input type="text" name="c_name" >
		<br><br>
		<input type="submit" name="insert" value="Add" >
	</form>
</body>
</html>