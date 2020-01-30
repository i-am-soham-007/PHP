<?php
if(isset($_POST['submit']))
{
$check=0;
$num=$_POST['num'];
for($i=2;$i<=($num/2);$i++)
{
if($num%$i==0)
{
$check++;
if($check==1)
{
 break ;
}
}
}
if($check==0)
{
echo "It is a Prime Number";
}
else
{
echo "It is not a Prime Number";
}
}
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Check whether a number prime or not</title>
 </head>
 <body>
 <form name="primenumber" action="" method="post">
 Number :<input type="text" name="num" value="" required><br>
 <input type="submit" value="Submit" name="submit">
 </form>
 </body>
 </html>