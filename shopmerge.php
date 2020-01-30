<?php

include('config.php'); 
$response = array();
$data = json_decode(file_get_contents('php://input'), true);


	$chkma =$_POST['shop_no'];
	
	$toal=$_POST['shno'];
	$floor=$_POST['floor'];
	$wing=$_POST['wing'];
    	
    $ff=explode('-',$chkma);
    
   
    
    	 $first=reset($ff);
    	 $last=end($ff);
    	 

    	 for($first;$first <= $last;$first++){
    	     
    	     mysqli_query($con,"update shopmerge set status='1' where shop_no='$first' ");
    	 }
    	   
    	   $rr=implode("-",$ff);
    	  
    	   
    	//   	mysqli_query($con,"INSERT INTO `shop`(`shop_no`,`shno`,`wing`,`floor`) VALUES ('$rr','$toal','$wing','$floor')");

    	     
    
		   
  
    $response['message'] = "Success";
    $response['status'] = "1";
  
  
  	echo json_encode($response); 
		    
		
    
    	
    	 



?>


