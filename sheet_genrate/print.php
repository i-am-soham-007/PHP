
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Citizen Pass Sticker</title>
		<style>
		/* reset */
<?php
include('config.php');

error_reporting(0);
?>
<?php
if(isset($_POST['print']))
{
	
	$adate = $_POST['adate'];
	
}

?>
.col-md-2 {
    width: 20%;
    float: left;
    height: 20%;
}
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
	</head>
	<body >
	     <h1>Sheet = <?php  echo   $sh;    ?></h1>

	         <?php
	         $color = $_POST["color"];
	         //echo"<script>alert('".$total."')</script>";
	         $codesl=mysqli_query($con,"SELECT * FROM `barcode` WHERE print = 0 AND adate = '$adate' ORDER BY id ASC");
	         $line = 0;
	         while($contact=mysqli_fetch_array($codesl))
	         {
	           $img = $contact['card'];
	             ?> 
	             
	           <div class="col-md-2">
	                
	            <div class="sub1"  style="background-color:"'.$color.'">
							<div class="logo_l">
							    <span style="margin-left: 35px;">RKTM</span>
							    <p><?php echo $contact['card'];   ?></p>
						   <span style="margin-left: 35px;"><?php echo $contact['adate']; ?></span>

							</div>
						
				</div>
				</div>
        	<?php 	
        	}
        	?>
					
					<?php
					//    mysqli_query($con,"UPDATE `barcode` SET `print` = '1' WHERE `adate` = '$adate' "); 
					?>		
					 
	</body>
	
</html>