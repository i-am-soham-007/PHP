<!DOCTYPE html>
<html>
<head>
	<title>PRINT 3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

*[] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[] { cursor: pointer; }

*[]:hover, *[]:focus, td:hover *[], td:focus *[], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[] { 
	display: inline-block;

 }
 #sp{
 	
 }
 body {
  background: rgb(204,204,204); 
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
<body>
<?php
include('config.php');

error_reporting(0);
if(isset($_POST['print']))
{
	
	$adate = $_POST['adate'];
	
}

?>
</head>
<style>
	.sub1 {
    border: 1px solid black;
    border-radius: 10px;
    height: 80.2px;
    padding: 0px;
    background: #ffffff;
    background-image: url(assets/images/logo-grey.png);
    background-size: 106px;
    background-position: center;
    background-repeat: no-repeat;
    width:150px;
}
.col-md-2
{
	width:20%;
	float:left;
}
</style>
<body >

 <?php
	       
	         $codesl=mysqli_query($con,"SELECT * FROM `barcode` WHERE print = 0 AND adate = '$adate' ORDER BY id ASC");
	         $line = 0;
	         $count =0;
	         while($contact=mysqli_fetch_array($codesl))
	         {
	          $count ++;

	             ?>

<page size="A4">
<div class="col-md-2">

<div class="sub1"  style="background-color:#FC3004;">
<div class="logo_l">
<span style="margin-left: 35px;">RKTM</span>
<p><?php echo $contact['card'];   ?></p>
<span style="margin-left: 35px;" id="sp"><?php echo $contact['adate']; ?></span>

</div>

</div>
</div>	
<?php

if($count ==65)
{
$count =0;
 ?>

</page>

<?php
}

 } ?>
</body>

</html>