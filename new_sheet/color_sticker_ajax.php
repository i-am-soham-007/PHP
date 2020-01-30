<?php
//Include database configuration file
include('config.php');

if(isset($_POST["mooonth"]) && !empty($_POST["mooonth"])){
	
  $origDate = $_POST['mooonth'];
 
 $paidblock = date("d-m-y", strtotime($origDate));
 
    $query = mysqli_query($con,"select DISTINCT box_no from color_sticker WHERE adate = '$paidblock' AND  print = '0'   ORDER BY `id` ASC");
 
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);
    
    //Display City list
       if($query > 0){
           	echo '<option value="nothing">Select Sheet Number</option>';
    while($row = mysqli_fetch_array($query)){ 

		echo '<option value="'.$row['box_no'].'">'.$row['box_no'].'</option>';

    }
       }
       
       else{
           
        	echo '<option value="'.$row['code'].'">"Sheet Not Found"</option>';   
       }

}
?>


