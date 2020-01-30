<?php

//$con = mysqli_connect("localhost","root","","test");
include 'config.php';

$r=mysqli_query($con,"select * from barcode ORDER BY id DESC LIMIT 0,1 ");
$rs=mysqli_fetch_array($r); 

if(isset($_POST['submit'])){
	
	$adate = $_POST['adate'];
	$sheet_no = $_POST['sheet_no'];
	
$fetch=mysqli_query($con,"select * from  barcode WHERE adate='$adate'");
$rows=mysqli_num_rows($fetch);
	
	if($rows > 0)
	{
		echo"<script>alert('Already Date Registered')</script>";
		
	}else
	{
	   
   

   $adate = $_POST['adate'];
	$sheet_no = $_POST['sheet_no'];	
	
	//	echo"<script>alert('Already Date Registered')</script>";
	
	$card = $rs['card'];

	function randomPassword()
        {
            $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ123456789";
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

   
for($i=1; $i <= $sheet_no; $i++)
	{
	  	if($card == '')
    	{
    	    $card = '00000';
	      
    	}
	
    $password = randomPassword();
 
       for($j=1;$j<=65;$j++)
        { 
            $card++;
            
            if($card == '05001')
            {
                //echo"<script>alert('$card')</script>";
                $card = '20000';
            }
            
            
            $invID = str_pad($card, 5, '0', STR_PAD_LEFT);
            
            $insert=mysqli_query($con,"INSERT INTO `barcode`(`card`,`status`,`in_status`,`used`,`box_no`,`adate`,`print`) VALUES ('$invID','0','0','0','$password','$adate','0')");
            
        }     
    }   
}
}    

	
?>




<!DOCTYPE html>
<html>
<head>
	<title>SHEET GENERATE</title>
</head>
<body>

	 <form class="form-horizontal" method="POST" id="form">
		            <div class="form-group row">
		            	<label class="col-md-4 col-form-label">Select Date : </label>
		            	<div class="col-md-5">
		            	<input class="form-control col-xs-12" name="adate"  type="date">
		            	</div>
		            </div>
					
					<div class="form-group row">
		            	<label class="col-md-4 col-form-label">Enter Sheet NO:- </label>
	                    <div class="col-md-5">
 		            	<input class="form-control col-xs-12" name="sheet_no" type="text" >
		            </div>
                  </div>
                  
                  

		            <div class="form-group">
		            		<div class="col-md-12">
		            	<center>
		            	<input type="submit" name="submit" id="submit" class="btn btn-success" value="Generate QR"></center>
		            </div>
		            </div>
		        </form>

</body>
</html>