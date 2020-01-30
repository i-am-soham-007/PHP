<!DOCTYPE html>
<html>
<head>
	<title>Add Project</title>
</head>
<body>

<form action="Controller/ProjectController" method="POST" enctype="multipart/form-data">
	Project Name :
	<input type="" name="name" placeholder="Enter projectname" required>
	<br>
	Project Description :
	<textarea name="description" rows="2" required>
	</textarea>
	<br>

	<input type="file" name="image" required>
	<br>
	<br>

	<input type="submit" name="insert" value="Add">

</form>
</body>
</html>