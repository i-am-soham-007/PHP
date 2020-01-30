<?php
	require "db.php";
	extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<center>
	<table border="2" id="input_table">
		<form action="add_registration.php" method="POST">
			<input class="btn btn-primary" name="btnAddReg" value="Add+" type="submit">
		</form>
		<thead>
			<th>No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email ID</th>
			<th>Date Of Birth</th>
			<th>Gender</th>
			<th>Image</th>
			<th>Update</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php
				$q = "SELECT * FROM `registration_master` ";
				$sql = mysqli_query($con,$q);
				$i = 0;
				
				while($result = mysqli_fetch_array($sql))
				{
					$i++;
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $result['firstname']; ?></td>
				<td><?php echo $result['lastname']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td><?php echo $result['dob']; ?></td>
				<td><?php echo $result['gender']; ?></td>
				<td><img src="img/<?php echo $result['image'] ;?>" width="80" height="80"></td>
				<td>
					<form action="edit_registration.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
						<input type="submit" name="editUser" value="Edit">
					</form>
				</td>
				<td>
					<form action="delete_registration.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
						<input type="submit" name="deleteUser" onclick="DeleteData();" value="Delete">
					</form>
				</td>
			</tr>
			<?php 
				} 
			?>
		</tbody>
	</table>
	</center>
</body>
</html>
<script>
	function deleteData(id) {
              swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
            	$('form.deleteForm'+id).submit();
                  swal("Successfully Deleted !", {
                    icon: "success",
                  });
                } else {
                  // swal("Your imaginary file is safe!");
                }
              });
	}
</script>