<?php include('header.php'); ?>
<?php include('sidebar.php');

if($_SESSION['user_role'] == 'Collector' || $_SESSION['user_role'] == 'accountant'  || $_SESSION['user_role'] == 'admin' || $_SESSION['user_role'] == 'sub_admin' || $_SESSION['user_role'] == 'sell')
      {
          error_reporting(0);

?>
<style>
.card-body h1 {
    line-height: 40px;
    font-size: 30px;
    text-transform: uppercase;
    color: #3953a4;
    margin-left: 55px;
    margin-right: 55px;
}
input {
    overflow: visible;
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    min-height: 38px;
    background-clip: padding-box;
}
.dataTables_filter input{
    width:auto;
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example23 .filters td').each( function () {
        var title = $('#example23 thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" />' );
    } );
 
    // DataTable
    var table = $('#example23').DataTable();
 
    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', $('.filters td')[colIdx] ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );
} );
</script>
  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> Vehicle List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"> Vehicle List</li>
                        
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
								
								<form method="POST">
								<div class="row">
								
								  <div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Shop Name</label>
											<input type="text" class="form-control" name="shop_name" >
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Shop Number</label>
											<input type="text" class="form-control" name="shop_number" >
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Floor</label>
											<select name="floor" class="form-control" data-rel="chosen" aria-invalid="false">
												<option value="">Select One</option>
												<option value="upper">upper</option>
												<option value="ground">ground</option>
												<option value="first floor">First Floor</option>
												<option value="second floor">Second Floor</option>
												<option value="third floor">Third Floor</option>
												
											</select>
										</div>
									</div>
										<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Wing</label>
											<select name="wing" class="form-control" data-rel="chosen" aria-invalid="false" >
											 <option value="">Select One</option>
												    <option value="RTU">RTU</option>
												    <option value="108 Wing">108</option>
												    <option   value="a">A</option>
												    <option value="b">B</option>
												    <option value="c">C</option>
												    <option  value="d">D</option>
												    <option  value="e">E</option>
												    <option  value="f">F</option>
												    <option  value="g">G</option>
												    <option  value="h">H</option>
													<option  value="i">I</option>
													<option  value="j">J</option>
												    <option  value="k">K</option>
												    <option  value="l">L</option>
												    <option value="R">R</option>
												    <option value="T">T</option>
												    <option value="u">U</option>
												
												
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Kit Number</label>
											<input type="text" class="form-control" name="kit_no" >
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Vehicle Number</label>
											<input type="text" class="form-control" name="vh_no" >
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Vehicle Name</label>
											<input type="text" class="form-control" name="vh_name" >
										</div>
									</div>
								<div class="col-md-3">
										<div class="form-group">
										<label class="control-label">Vehicle Type</label>
											<select name="category" class="form-control" data-rel="chosen" aria-invalid="false">
												<option value="">Select Category</option>
												<option value="2 Wheeler">2 Wheeler</option>
												<option value="4 Wheeler">4 Wheeler</option>
												
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">To Date</label>
											<input type="date" class="form-control" name="to_date" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">From date</label>
											<input type="date" class="form-control" name="from_date" >
										</div>
									</div>
									
										<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">Payment Type</label>
											<select name="p_mode" class="form-control" data-rel="chosen" aria-invalid="false" >
												<option value="">Select Payment Type</option>
												<option value="Cheque">Cheque</option>
												<option value="Cash">Cash</option>
												<option value="0">Pay Pending</option>
												
												
											</select>
										</div>
									</div>
									
								
									<center><input style="margin-left: 300px;" type="submit" class="btn btn-success" name="submit" value="submit"></center>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Vehicle List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Sr no</th>
													<th>Shop Number</th>
												<th>Shop Name</th>
												<tH>Wing</tH>
												<th>Floor</th>
												<th>Basic Amount</th>
												<th>GST AMount</th>
												<th>SGST Amount</th>
												<th>CGST Amount</th>
												<tH>Total Pass Amount</tH>
												<th>Payment Type</th>
												<th>Kit Number</th>
												<th>GST Number</th>
												<th>Bank Name</th>
												<th>Cheque Number</th>
												<th>Pass Date</th>
												<th>Cheque Date</th>
												<th>vehicle Number</th>
												<th>Vehicle Type</th>
												<th>Payment Pay/Pending</th>
												<th>Action</th>
										
											</tr>
										</thead>
										<thead class="filters">
											<tr>
												<td>Sr no</td>
												<td>Shop Number</td>
												<td>Shop Name</td>
												<td>Wing</td>
												<td>Floor</td>
												<td>Basic Amount</td>
												<td>GST AMount</td>
												<td>SGST Amount</td>
												<td>CGST Amount</td>
												<td>Total Pass Amount</td>
											    <td>Payment Type</td>
											    <td>Kit Number</td>
											    <td>GST Number</td>
											    <td>Bank Name</td>
											    <td>Cheque Number</td>
												<td>Pass Date</td>
												<td>Cheque Date</td>
												<td>Vehicle Number</td>
												<td>Vehicle Type</td>
												<td>Payment Pay/Pending</td>
												<td>Action</td>
										
												
												
											
											</tr>
										</thead>
										<tbody>
<?php

if(isset($_POST['submit']))
{
$no=0;
extract($_POST);

// ---------------------------first Verify Shop Table using Shop name , Shop number , Floor , Wing Field-----------------------------

if(($shop_name !='' && $vh_no=='' && $vh_name=='' && $category=='')|| ($shop_number!='' && $vh_no=='' && $vh_name=='' && $category=='') || ($floor!='' && $vh_no=='' && $vh_name=='' && $category=='') || ($wing!='' && $vh_no=='' && $vh_name=='' && $category==''))
{
    
//This If Condition for Only shopName Data
    if($shop_name !='' &&  $shop_number =='')
    {
    $result=mysqli_query($con,"select * from shop WHERE sh_name LIKE '%$shop_name%'");
    $shop=mysqli_num_rows($result);
    echo"<script>alert('only shop Name')</script>";
    }
 
  //This If Condition for Only shopnumber Data  
    if($shop_number !=''&&  $shop_name =='')
    {
    $result=mysqli_query($con,"select * from shop WHERE shop_no LIKE '%$shop_number%'");
    $shop=mysqli_num_rows($result);
    echo"<script>alert('only shop Number')</script>";
    }
    
    //This If Condition for Only Floor Wise Data  
    if($floor !='' && $wing =='' && $shop_number ==''&&  $shop_name =='')
    {
    $result=mysqli_query($con,"select * from shop WHERE floor = '$floor'");
    $shop=mysqli_num_rows($result);
    echo"<script>alert('only Floor Data')</script>";
    }
    
  
     //This If Condition for Only Floor Wise AND Wing wise Data  
    if($floor !='' && $wing !='' && $shop_number ==''&&  $shop_name =='')
    {
    $result=mysqli_query($con,"select * from shop WHERE wing= '$wing' AND floor= '$floor'");
    $shop=mysqli_num_rows($result);
    echo"<script>alert('only Floor AND Wing Data')</script>";
    
    }
    
    //This If Condition for Only Wing wise Data  
    if( $wing !='' && $floor =='' && $shop_number ==''&&  $shop_name =='')
    {
    $result=mysqli_query($con,"select * from shop WHERE wing= '$wing'");
    $shop=mysqli_num_rows($result);
    echo"<script>alert('only Wing Data')</script>";

    }
    
 
    
//while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;

$sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid'");

while($contact=mysqli_fetch_array($sh)){

?>
<tr>	
<td class="center"><?php echo $no;?></td>
	<td class="center"><?php echo $rows['sh_name'];?></td>
<td class="center"><?php echo $rows['shop_no'];?></td>
<td class="center"><?php echo $rows['wing'];?></td>
<td class="center"><?php echo $rows['floor'];?></td>
<td class="center"><?php echo $contact['amt'];?></td>
<td class="center"><?php echo $contact['gst_amt'];?></td>
<td class="center"><?php echo $contact['sgst_amt'];?></td>
<td class="center"><?php echo $contact['cgst_amt'];?></td>
<td class="center"><?php echo $contact['total_pass_amt'];?></td>
<td class="center"><?php echo $contact['p_mode'];?></td>
<td class="center"><?php echo $contact['kit_no'];?></td>
<td class="center"><?php echo $contact['gst_no'];?></td>
<td class="center"><?php echo $contact['bank_name'];?></td>
<td class="center"><?php echo $contact['tran_data'];?></td>


<td class="center"><?php echo $contact['pass_date'];?></td>
<td class="center"><?php echo $contact['chequeondate'];?></td>

<td class="center"><?php echo $contact['vehicle_no'];?></td>
<td class="center"><?php echo $contact['vhltype'];?></td>
<td class="center"><?php $tt=$contact['pay_pending'];
if($tt=='1'){ ?>
<span style="color: blue">Payment Done</span>


<?php	}
if($tt=='0'){ ?>
<span style="color: blue">Paymen Pending</span>


<?php	} ?>

</td>
<td class="center"><?php $tt1=$contact['cheque_done'];
if($tt1=='1'){ ?>
<span style="color: blue"> Done</span>


<?php	}
if($tt=='0'){ ?>
<a href="approve.php?id=<?php echo $contact['id']; ?>">Pending</a>


<?php	} ?>

</td>



</tr>
<?php 
    
}}
    
}
// ---------------------------Over Here first Verify Shop Table using Shop name , Shop number , Floor , Wing Field-----------------------------

// --------------------------- first Verify Shop_vehicle Table using vehicle_no,vehicle_name, vehicle type , payment mode todate fromdate Field-----------------------------

  if(($vh_no !='' && $shop_name =='' && $shop_number=='' && $floor=='' && $wing=='')
    || ($vh_name!='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' )
    || ($category!='' && $shop_name =='' && $shop_number=='' && $floor=='' && $wing=='')
    || ($p_mode!='' && $shop_name =='' && $shop_number=='' && $floor=='' && $wing=='')
    || ($to_date!='' && $from_date =='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' )
    || ($from_date!='' && $to_date =='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' )
    || ($from_date!='' && $to_date!='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' ))
  {
  
    //This If Condition for Only Vehicle No Data
    if($vh_no !='' &&  $vh_name =='' && $category =='' && $to_date =='' && $from_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vehicle_no LIKE '%$vh_no%'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Number')</script>";
    }
      
      //This If Condition for Only Vehicle Name Data
    if($vh_name !='' &&  $vh_no =='' && $category =='' && $to_date =='' && $from_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vehicle_name LIKE '%$vh_name%'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Name Data')</script>";
    }
     
     
      //This If Condition for Only Vehicle Name Data
    if($category !='' &&  $vh_no =='' && $vh_name =='' && $to_date =='' && $from_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vhltype = '$category'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Type Data')</script>";
    }
    
    
     //This If Condition for Only Todate Data
    if($to_date !='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $from_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where to_date = '$to_date'");
         $shop=mysqli_num_rows($result);
         echo"<script>alert('".$to_date."')</script>";
        echo"<script>alert('only To - Date Data')</script>";
    }
    
     //This If Condition for Only From Data
    if($from_date !='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $to_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where from_date = '$from_date'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only From - Date Data')</script>";
    }
    
      //This If Condition for Todate AND From Date Data
    if($from_date !=''&& $to_date !='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where from_date = '$from_date' AND to_date = '$to_date' ");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('To-Date, From-Date Data')</script>";
    }
    
    
     //This If Condition for Payment Method OR MODE Data
    if($p_mode !='' && $from_date =='' && $to_date =='' && $category=='' &&  $vh_no =='' && $vh_name =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where p_mode ='$p_mode' ");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Payment mode Data')</script>";
    }
      
    
   while($rows=mysqli_fetch_array($result))
{

$passid = $rows['pass_id'];

$no=$no+1;

$sh=mysqli_query($con,"select * from shop where id='$passid'");

while($contact=mysqli_fetch_array($sh)){

?>
<tr>	
<td class="center"><?php echo $no;?></td>
	<td class="center"><?php echo $contact['sh_name'];?></td>
<td class="center"><?php echo $contact['shop_no'];?></td>
<td class="center"><?php echo $contact['wing'];?></td>
<td class="center"><?php echo $contact['floor'];?></td>
<td class="center"><?php echo $rows['amt'];?></td>
<td class="center"><?php echo $rows['gst_amt'];?></td>
<td class="center"><?php echo $rows['sgst_amt'];?></td>
<td class="center"><?php echo $rows['cgst_amt'];?></td>
<td class="center"><?php echo $rows['total_pass_amt'];?></td>
<td class="center"><?php echo $rows['p_mode'];?></td>
<td class="center"><?php echo $rows['kit_no'];?></td>
<td class="center"><?php echo $rows['gst_no'];?></td>
<td class="center"><?php echo $rows['bank_name'];?></td>
<td class="center"><?php echo $rows['tran_data'];?></td>


<td class="center"><?php echo $rows['pass_date'];?></td>
<td class="center"><?php echo $rows['chequeondate'];?></td>

<td class="center"><?php echo $rows['vehicle_no'];?></td>
<td class="center"><?php echo $rows['vhltype'];?></td>
<td class="center"><?php $tt=$rows['pay_pending'];
if($tt=='1'){ ?>
<span style="color: blue">Payment Done</span>


<?php	}
if($tt=='0'){ ?>
<span style="color: blue">Paymen Pending</span>


<?php	} ?>

</td>
<td class="center"><?php $tt1=$rows['cheque_done'];
if($tt1=='1'){ ?>
<span style="color: blue"> Done</span>


<?php	}
if($tt=='0'){ ?>
<a href="approve.php?id=<?php echo $rows['id']; ?>">Pending</a>


<?php	} ?>

</td>

</tr>
<?php 
    
}}

  }
  //--------------------------Over Here Shop_vehicle Table using vehicle_no,vehicle_name, vehicle type , payment mode todate fromdate Field------------------------------
  
  
  //------------------------This If Condition for  FLOOR & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT----------------------------------------
if($floor !='' && $category!='' && $wing =='' && $to_date =='' && $from_date =='' && $p_mode=='')
{
    $result=mysqli_query($con,"select * from shop where floor='$floor'");

$shop=mysqli_num_rows($result);
echo"<script>alert('only floor And VehicleType Data Fetched')</script>";
        
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;

$sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND vhltype='$category'");

while($contact=mysqli_fetch_array($sh)){

?>
<tr>	
<td class="center"><?php echo $no;?></td>
	<td class="center"><?php echo $rows['sh_name'];?></td>
<td class="center"><?php echo $rows['shop_no'];?></td>
<td class="center"><?php echo $rows['wing'];?></td>
<td class="center"><?php echo $rows['floor'];?></td>
<td class="center"><?php echo $contact['amt'];?></td>
<td class="center"><?php echo $contact['gst_amt'];?></td>
<td class="center"><?php echo $contact['sgst_amt'];?></td>
<td class="center"><?php echo $contact['cgst_amt'];?></td>
<td class="center"><?php echo $contact['total_pass_amt'];?></td>
<td class="center"><?php echo $contact['p_mode'];?></td>
<td class="center"><?php echo $contact['kit_no'];?></td>
<td class="center"><?php echo $contact['gst_no'];?></td>
<td class="center"><?php echo $contact['bank_name'];?></td>
<td class="center"><?php echo $contact['tran_data'];?></td>


<td class="center"><?php echo $contact['pass_date'];?></td>
<td class="center"><?php echo $contact['chequeondate'];?></td>

<td class="center"><?php echo $contact['vehicle_no'];?></td>
<td class="center"><?php echo $contact['vhltype'];?></td>
<td class="center"><?php $tt=$contact['pay_pending'];
if($tt=='1'){ ?>
<span style="color: blue">Payment Done</span>


<?php	}
if($tt=='0'){ ?>
<span style="color: blue">Paymen Pending</span>


<?php	} ?>

</td>
<td class="center"><?php $tt1=$contact['cheque_done'];
if($tt1=='1'){ ?>
<span style="color: blue"> Done</span>


<?php	}
if($tt=='0'){ ?>
<a href="approve.php?id=<?php echo $contact['id']; ?>">Pending</a>


<?php	} ?>

</td>



</tr>
<?php 
    
}}
    
}
// Over Here   This If Condition for  FLOOR & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT


 //This If Condition for  WING & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT
if($category!='' && $wing !='' && $floor =='' && $to_date =='' && $from_date =='' && $p_mode=='')
{
    $result=mysqli_query($con,"select * from shop where wing='$wing'");

$shop=mysqli_num_rows($result);
echo"<script>alert('only Wing And VehicleType Data')</script>";
        
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;

$sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND vhltype='$category'");

while($contact=mysqli_fetch_array($sh)){

?>
<tr>	
<td class="center"><?php echo $no;?></td>
	<td class="center"><?php echo $rows['sh_name'];?></td>
<td class="center"><?php echo $rows['shop_no'];?></td>
<td class="center"><?php echo $rows['wing'];?></td>
<td class="center"><?php echo $rows['floor'];?></td>
<td class="center"><?php echo $contact['amt'];?></td>
<td class="center"><?php echo $contact['gst_amt'];?></td>
<td class="center"><?php echo $contact['sgst_amt'];?></td>
<td class="center"><?php echo $contact['cgst_amt'];?></td>
<td class="center"><?php echo $contact['total_pass_amt'];?></td>
<td class="center"><?php echo $contact['p_mode'];?></td>
<td class="center"><?php echo $contact['kit_no'];?></td>
<td class="center"><?php echo $contact['gst_no'];?></td>
<td class="center"><?php echo $contact['bank_name'];?></td>
<td class="center"><?php echo $contact['tran_data'];?></td>


<td class="center"><?php echo $contact['pass_date'];?></td>
<td class="center"><?php echo $contact['chequeondate'];?></td>

<td class="center"><?php echo $contact['vehicle_no'];?></td>
<td class="center"><?php echo $contact['vhltype'];?></td>
<td class="center"><?php $tt=$contact['pay_pending'];
if($tt=='1'){ ?>
<span style="color: blue">Payment Done</span>


<?php	}
if($tt=='0'){ ?>
<span style="color: blue">Paymen Pending</span>


<?php	} ?>

</td>
<td class="center"><?php $tt1=$contact['cheque_done'];
if($tt1=='1'){ ?>
<span style="color: blue"> Done</span>


<?php	}
if($tt=='0'){ ?>
<a href="approve.php?id=<?php echo $contact['id']; ?>">Pending</a>


<?php	} ?>

</td>



</tr>
<?php 
    
}}
    
}
// Over Here   This If Condition for  WING & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT


//This If Condition for  FLOOR AND WING & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT
if($category!='' && $wing !='' && $floor !='' && $to_date =='' && $from_date =='' && $p_mode=='')
{
    $result=mysqli_query($con,"select * from shop where floor='$floor' AND wing='$wing'");

$shop=mysqli_num_rows($result);
echo"<script>alert('only Floor , Wing And VehicleType Data')</script>";
        
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;

$sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND vhltype='$category'");

while($contact=mysqli_fetch_array($sh)){

?>
<tr>	
<td class="center"><?php echo $no;?></td>
	<td class="center"><?php echo $rows['sh_name'];?></td>
<td class="center"><?php echo $rows['shop_no'];?></td>
<td class="center"><?php echo $rows['wing'];?></td>
<td class="center"><?php echo $rows['floor'];?></td>
<td class="center"><?php echo $contact['amt'];?></td>
<td class="center"><?php echo $contact['gst_amt'];?></td>
<td class="center"><?php echo $contact['sgst_amt'];?></td>
<td class="center"><?php echo $contact['cgst_amt'];?></td>
<td class="center"><?php echo $contact['total_pass_amt'];?></td>
<td class="center"><?php echo $contact['p_mode'];?></td>
<td class="center"><?php echo $contact['kit_no'];?></td>
<td class="center"><?php echo $contact['gst_no'];?></td>
<td class="center"><?php echo $contact['bank_name'];?></td>
<td class="center"><?php echo $contact['tran_data'];?></td>


<td class="center"><?php echo $contact['pass_date'];?></td>
<td class="center"><?php echo $contact['chequeondate'];?></td>

<td class="center"><?php echo $contact['vehicle_no'];?></td>
<td class="center"><?php echo $contact['vhltype'];?></td>
<td class="center"><?php $tt=$contact['pay_pending'];
if($tt=='1'){ ?>
<span style="color: blue">Payment Done</span>


<?php	}
if($tt=='0'){ ?>
<span style="color: blue">Paymen Pending</span>


<?php	} ?>

</td>
<td class="center"><?php $tt1=$contact['cheque_done'];
if($tt1=='1'){ ?>
<span style="color: blue"> Done</span>


<?php	}
if($tt=='0'){ ?>
<a href="approve.php?id=<?php echo $contact['id']; ?>">Pending</a>


<?php	} ?>

</td>



</tr>
<?php 
    
}}
    
}
// Over Here   This If Condition for  WING & VEHICLE TYPE BOTH FIELD MATCHES THEN GIVEN RESULT

}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<style>
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: relative;}
#country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(){
$('#vhl ,#vh2, #vh3').on('change',function(){
var vhlid = $(this).val();
var data = { 'vhlid': vhlid };
if(vhlid){
$.ajax({
type:'POST',
url:'sm.php',
data:data,
success:function(html){
$('#vhlamt').html(html);
}
}); 
}else{
$('#vhlamt').html('');
}
});

});

$(document).ready(function(){
$("#search-box").keyup(function(){
$.ajax({
type: "POST",
url: "search.php",
data:'keyword='+$(this).val(),
beforeSend: function(){
$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
},
success: function(data){
$("#suggesstion-box").show();
$("#suggesstion-box").html(data);
$("#search-box").css("background","#FFF");
}
});
});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	



</script>	
<!-- ============================================================== -->
<!-- End PAge Content -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->


<?php  }else{
echo "<script>window.location.href = 'logout';</script>"; 
}
include('footer.php'); ?>	