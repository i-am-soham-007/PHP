<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="print2.php" method="POST">
	select Date:-

	<input type="date" name="adate" required>
<select name="color" required>
	<option value="">--select--</option>
	<option value="#b2dffb">Light Blue</option>
	<option value="#f65c78">Light Red</option>
	<option value="#ff7315">Orange</option>
	<option value="#2e279d">Blue</option>
	<option value="#4dd599">Light Green</option>
	<option value="#ffe3ed">Rose Pink</option>
	<option value="#f1fa3c">Yellow</option>
	<option value="#6b591d">Brown</option>
	<option value="#979797">Grey Silver</option>
</select>
	<br><br><br><br>
	<input type="submit" name="print" value="PRINT">
</form>
</body>
</html>