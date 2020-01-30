<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
include 'config.php';
 $r=mysqli_query($con,"select * from op_allocate_wh ORDER BY id DESC LIMIT 0,1 ");
$rs=mysqli_fetch_array($r); 


if(isset($_POST['submit1']))
{
    $sheet_no = $_POST['sheet_no'];
    $adate = $_POST['adate'];
    $adate = date("d-m-y", strtotime($adate));
    
   // $fetch=mysqli_query($con,"select * from  op_allocate_wh WHERE adate='$adate'");
  //  $rows=mysqli_num_rows($fetch);
    
  //  if($rows > 0)
 //   {
//            echo"<script>alert('Already Date Registered')</script>";
  //  }else
 //   {
            $adate = $_POST['adate'];
            $sheet_no = $_POST['sheet_no']; 
            $card = $rs['card'];
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

            $qry = mysqli_query($con,"SELECT box_no FROM op_allocate_wh WHERE box_no = '$password'");
    
            $fetch = mysqli_fetch_array($qry);

            $box = $fetch['box_no'];


         if($password == $box)
         {
             $i--;
            echo '<script>alert("Box No :- '.$box.' is Already Exist");</script>';
    
        }else
        {
             if($card == 'A99905')
            {
                 //$card = '0000';
                 $card = 'A'.'01000';
                 echo'<script>alert("'.$card.' Run")</script>';
            }
            
            $overlimit = 'A'.'30000';
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
        
                    $insert=mysqli_query($con,"INSERT INTO `op_allocate_wh`(`card`,`status`,`in_status`,`used`,`box_no`,`adate`) VALUES ('$invID','0','0','0','$password','$adate')");
                }   
            }// Else for Over Limit  
        }//else  For No repeat Box _no
    } 
        if($insert)
        {
            echo"<script>alert('Sheet Generated')</script>";
            echo "<script>window.location.href = 'dumy.php';</script>";
        }
   // } // else For No Reapeat Date in Sheet

}    

    

 ?>

<form action = "" class="form-horizontal" method="POST" id="form">

<div class="form-group row">
<label class="col-md-4 col-form-label">From number : </label>
<div class="col-md-5">
<input class="form-control col-xs-12" name="dataContent" id="dataContent" type="text" readonly value="<?php echo $f = ++$rs['card'] ; ?>">
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

</body>
</html>


    	