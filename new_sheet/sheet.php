<?php
error_reporting(0);
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.card-body h1 {
    line-height: 40px;
    font-size: 27px;
    text-transform: uppercase;
    margin-bottom: 40px;
    color: #3953a4;
    text-align: center;
}
.form-horizontal label {
    margin-bottom: 0px;
    text-align: right;
}
</style>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<body>
 <?php 
 
$r=mysqli_query($con,"select * from color_sticker ORDER BY id DESC LIMIT 0,1 ");
$rs=mysqli_fetch_array($r); 


if(isset($_POST['submit1']))
{
	
	$adate = $_POST['adate'];
	$sheet_no = $_POST['sheet_no'];
	
	$adate = date("d-m-y", strtotime($adate));
	
	$fetch=mysqli_query($con,"select * from  color_sticker WHERE adate='$adate'");
    $rows=mysqli_num_rows($fetch);
	
	if($rows > 0)
	{
		echo"<script>alert('Already Date Registered')</script>";
		
	}else
	{

    $adate = $_POST['adate'];
	$sheet_no = $_POST['sheet_no'];	
	
	//	echo"<script>alert('Already Date Registered')</script>";
	
	$card = $rs['card_ref'];
	$adate = date("d-m-y", strtotime($adate));
	function randomPassword()
        {
            $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ123456789";
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 4; $i++)
            {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
            }
        return implode($pass); //turn the array into a string
        }

   
for($i=1; $i <= $sheet_no; $i++)
{
	  	$password = randomPassword();//box no

    $qry = mysqli_query($con,"SELECT box_no FROM color_sticker WHERE box_no = '$password'");
    
    $fetch = mysqli_fetch_array($qry);

    $box = $fetch['box_no'];


    if($password == $box)

    {
        $i--;
        echo '<script>alert("Box No :- '.$box.' is Already Exist");</script>';
    
    }else
    {

    
        if($card == '')
        {
            //$card = '0000';
             $card = 'B'.'00000';
          
        }

        $overlimit = 'B'.'99999';
         //echo"<script>alert('".$card."')</script>";

        if($card >= $overlimit)
        {
            echo"<script>alert('OVER LIMIT')</script>";
            break;

            exit();
        }else
        {
            for($j=1;$j<=65;$j++)
            { 
                $card++;
                $invID = str_pad($card, 5, '0', STR_PAD_LEFT);
            
                    $insert=mysqli_query($con,"INSERT INTO `color_sticker`(`card_ref`,`status`,`in_status`,`used`,`box_no`,`adate`,`qrcat`,`print`) VALUES ('$invID','0','0','0','$password','$adate','vis','0')");
            
            }   
        }// Else for Over Limit      
    }//else  For No repeat Box _no
} 
    if($insert)
    {
        echo"<script>alert('Sheet Generated')</script>";
        echo "<script>window.location.href = 'sheet.php';</script>";
    }
}

   
  
}    

	

 ?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Sheet Generate</h3>
                </div>
				
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Sheet</li>
                        <li class="breadcrumb-item active">Sheet Generate</li>
                    </ol>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
			
			
		
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
						   <div class="card-body">
						       <h1>Sheet Generate</h1>
		       
				            <form action = "" class="form-horizontal" method="POST" id="form">
		                              	
		                              	 <div class="form-group row">
                    		            	<label class="col-md-4 col-form-label">From number : </label>
                    		            	<div class="col-md-5">
                    		            	<input class="form-control col-xs-12" name="dataContent" id="dataContent" type="text" readonly value="<?php echo $f = ++$rs['card_ref'] ; ?>">
                    		            	</div>
                    		            </div>
		                              	
											<div class="form-group row">
												
											<div class="col-md-6">
												    <label class="control-label">Date</label>
												  <input type="date" class="form-control" id="per" name="adate" required="" data-validation-required-message="This field is required">
												</div>
										
											<div class="col-md-6">
												<label class="control-label">Sheet No</label>
											<input type="text" class ="form-control" name="sheet_no" required="" data-validation-required-message="This field is required">
													</div>
												
												<div id="suggesstion-box"></div>
											</div>
									
		
		            <div class="form-group row">
		            	<div class="col-md-12">
		            	<center>
		            	<input type="submit" name="submit1" id="submit" class="btn btn-success" value="Generate Sheet"></center>
		            </div>
		            </div>
		        </form>
    	</div><!-- .row -->
          </div>

                           
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->



 </body>
 </html>
 
 
 
 