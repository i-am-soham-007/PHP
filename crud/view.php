<?php
include 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
</head>
<body>

	<a href="index.php">ADD NEW ? </a>
<table border="2">
	<thead>
		<th>NO</th>
		<th>First name</th>
		<th>last name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Profile</th>
		<th>Action</th>
		<th>Action</th>
	</thead>
	<?php 
$q =mysqli_query($con,"SELECT * FROM register ");
$i=0;
while($rows =mysqli_fetch_array($q))
{
	$i++;
	extract($rows);
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $fname; ?></td>
		<td><?php echo $lname; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $gender; ?></td>
		<td>
			<img src="img/<?php echo $profile; ?>" height="60" width="60" ></td>
		<td>
			<form action="edit.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" name="edit" value="Edit">			
		</form>
		</td>
		<td>
			<form action="controller.php" method="POST">

				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" name="delete" value="Delete">			
		</form>
		</td>
	</tr>
<?php } ?>

</table>
</body>
</html>