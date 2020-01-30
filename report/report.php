<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
</head>
<body>
<table border="2">
	<thead>
		<th>Sr No.</th>
		<th>Vehicle TYPE</th>
		<th>Operator </th>
		<th>Total Collections</th>
		<th>Total Amount</th>
	</thead>


<h2>REPORT </h2>
<?php
include 'config.php';

extract($_POST);

$count0=1;
$count2=1;
$count3=1;
$count4=1;
$count5=1;

$q=mysqli_query($con,"SELECT DISTINCT(o_id) as oid, count(o_id) AS count,amount FROM `operator` WHERE 
	tdate ='$tdate'  GROUP BY o_id HAVING count > 1");


while($data=mysqli_fetch_array($q))
{
	extract($data);


	$q1 =mysqli_query($con,"SELECT * FROM admin WHERE id='$oid'");

	$fetch = mysqli_fetch_array($q1);

	$vh_type=$fetch['type'];

if($vh_type == '4 Wheeler')
   {
       $v4= $count0++;
    $v4_op = $oid;
    //echo "<script>alert('$v4');</script>";
}
   
   if($vh_type == '2 Wheeler')
   {
       $v2 = $count2++;
       $v2_op = $oid;
      
    //echo "<script>alert('$amount');</script>";
   }
   
   if($vh_type == 'HCV')
   {
       $hcv = $count3++;
       $hcv_op = $oid;
   }

}


$q11 =mysqli_query($con,"SELECT * FROM `operator` WHERE `tdate` = '$tdate'");

While($res=mysqli_fetch_array($q11))
{
 $amt = $res['amount'];
 $new_id = $res['o_id'];

 $q22 = mysqli_query($con,"SELECT * FROM `admin` WHERE id ='$new_id'");
 $data=mysqli_fetch_array($q22);
   
   $vh_type = $data['type'];
   
   if($vh_type == '2 Wheeler')
   {
      $v2_amt[] = $amt;
      

       $v2_sum =array_sum($v2_amt);
   }

   if($vh_type == '4 Wheeler')
   {
      $v4_amt[] = $amt;
      

       $v4_sum =array_sum($v4_amt);
   }

   if($vh_type == 'HCV')
   {
      $hcv_amt[] = $amt;
      

       $hcv_sum =array_sum($hcv_amt);
   }
}
?>
<tr><td>1</td><td>2 WHEELER</td><td><?php echo $v2; ?></td><td><?php echo $v2 * $count; ?></td><td><?php echo $v2_sum; ?></td></tr>
<tr><td>2</td><td>4 WHEELER</td><td><?php echo $v4; ?></td><td><?php echo $v4 * $count; ?></td><td><?php echo $v4_sum; ?></td></tr>
<tr><td>3</td><td>HCV </td><td><?php echo $hcv; ?></td><td><?php echo $hcv * $count; ?></td><td><?php echo $hcv_sum; ?></td></tr>

</table>
</body>
</html>
