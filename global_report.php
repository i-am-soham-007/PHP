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
                    <h3 class="text-themecolor"> Global Report </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"> Global Report</li>
                        
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
								
								  <div class="col-md-3" id="divshopname">
										<div class="form-group">
											<label class="control-label">Shop Name</label>
											<input type="text" id="shopname" class="form-control" name="shop_name" >
										</div>
									</div>
									<div class="col-md-3" id="divshopno">
										<div class="form-group">
											<label class="control-label">Shop Number</label>
											<input type="text" id="shopno" class="form-control" name="shop_number" >
										</div>
									</div>

									<div class="col-md-3" id="divfloor">
										<div class="form-group">
											<label class="control-label">Floor</label>
											<select name="floor" id="floor_name" class="form-control" data-rel="chosen" aria-invalid="false">
												<option value="">Select One</option>
												<option value="upper">upper</option>
												<option value="ground">ground</option>
												<option value="first floor">First Floor</option>
												<option value="second floor">Second Floor</option>
												<option value="third floor">Third Floor</option>
												
											</select>
										</div>
									</div>
										<div class="col-md-3" id="divwing">
										<div class="form-group">
											<label class="control-label">Wing</label>
											<select name="wing" class="form-control" id="wing_name" data-rel="chosen" aria-invalid="false" >
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
									<div class="col-md-3" id="divkit">
										<div class="form-group">
											<label class="control-label">Kit Number</label>
											<input type="text" id="kit" class="form-control" name="kit_no" >
										</div>
									</div>
									<div class="col-md-3" id="divvhlno">
										<div class="form-group">
											<label class="control-label">Vehicle Number</label>
											<input type="text" id="vhlno" class="form-control" name="vh_no" >
										</div>
									</div>
									<div class="col-md-3" id="divvhlname">
										<div class="form-group">
											<label class="control-label">Vehicle Name</label>
											<input type="text" id="vhlname" class="form-control" name="vh_name" >
										</div>
									</div>
								<div class="col-md-3" id="divvtpye">
										<div class="form-group">
										<label class="control-label">Vehicle Type</label>
											<select name="category"id="vtype" class="form-control" data-rel="chosen" aria-invalid="false">
												<option value="">Select Category</option>
												<option value="2 Wheeler">2 Wheeler</option>
												<option value="4 Wheeler">4 Wheeler</option>
												
											</select>
										</div>
									</div>
									
									<div class="col-md-6" id="divtdate">
										<div class="form-group">
											<label class="control-label">To Date</label>
											<input type="date" id="tdate" class="form-control" name="to_date" >
										</div>
									</div>
									<div class="col-md-6" id="divfdate">
										<div class="form-group">
											<label class="control-label">From date</label>
											<input type="date" id="fdate" class="form-control" name="from_date" >
										</div>
									</div>
									
										<div class="col-md-12" id="divptype">
										<div class="form-group">
										<label class="control-label">Payment Type</label>
											<select name="p_mode" id="ptype" class="form-control" data-rel="chosen" aria-invalid="false" >
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
                                <h4 class="card-title">Global Report </h4>
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

if(($shop_name !='' && $vh_no=='' && $vh_name=='' && $category=='' && $p_mode=='' && $kit_no =='')
|| ($shop_number!='' && $vh_no=='' && $vh_name=='' && $category=='' && $p_mode=='' && $kit_no =='') 
|| ($floor!='' && $vh_no=='' && $vh_name=='' && $category=='' && $p_mode=='' && $kit_no =='') 
|| ($wing!='' && $vh_no=='' && $vh_name=='' && $category=='' && $p_mode=='' && $kit_no ==''))
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
    if($floor !='' && $wing !='' && $shop_number ==''&&  $shop_name =='' && $p_mode=='')
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
    || ($kit_no!='' && $vh_name =='' && $vh_no =='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' )
    || ($from_date!='' && $to_date!='' && $shop_name =='' && $shop_number==''&& $floor=='' && $wing=='' ))
  {
  
    //This If Condition for Only Vehicle No Data
    if($vh_no !='' &&  $vh_name =='' && $category =='' && $to_date =='' && $from_date =='' && $p_mode =='' && $kit_no =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vehicle_no LIKE '%$vh_no%'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Number')</script>";
    }
      
      //This If Condition for Only Vehicle Name Data
    if($vh_name !='' &&  $vh_no =='' && $category =='' && $to_date =='' && $from_date =='' && $p_mode =='' && $kit_no =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vehicle_name LIKE '%$vh_name%'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Name Data')</script>";
    }
     
     
      //This If Condition for Only Vehicle Name Data
    if($category !='' &&  $vh_no =='' && $vh_name =='' && $to_date =='' && $from_date =='' && $p_mode =='' && $kit_no =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where vhltype = '$category'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Type Data')</script>";
    }
    
      //This If Condition for Todate AND From Date Data
    if($from_date !=''&& $to_date !='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $p_mode =='' && $kit_no =='')
    {
       
     $result=mysqli_query($con,"select * from shop_vehicle where to_date BETWEEN '$to_date' AND '$from_date'");
         $shop=mysqli_num_rows($result);
         
         //echo"<script>alert('".$shop."')</script>";
        echo"<script>alert('To-Date, From-Date Data')</script>";
    }
    
    
     //This If Condition for Payment Method OR MODE Data
    if($p_mode !='' && $from_date =='' && $to_date =='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $kit_no =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where p_mode ='$p_mode' ");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Payment mode Data')</script>";
    }
     if($p_mode =='0' && $from_date =='' && $to_date =='' && $category=='' &&  $vh_no =='' && $vh_name =='' && $kit_no =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where pay_pending ='$p_mode' ");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Payment Pending mode Data')</script>";
    }
      
       //This If Condition for Only KIT NO DATA
    if($kit_no !='' && $vh_no =='' &&  $vh_name =='' && $category =='' && $to_date =='' && $from_date =='' && $p_mode =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where kit_no='$kit_no'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only KIT NUMBER')</script>";
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
<td class="center"><?php echo $rows['from_date'];?></td>

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
  //--------------------------Over Here If Condition for Only KIT NO DATA------------------------------
  
  
  //------------------------This If Condition for   BOTH TABLE AND GIVEN RESULT----------------------------------------
if(($floor !='' && $category!='' && $wing =='' && $to_date =='' && $from_date =='' && $p_mode==''))
{
    //This if condition for Floor And Vehicle Type  DATA FETCH
    if($floor !='' && $category!='' && $wing =='' && $to_date =='' && $from_date =='' && $p_mode=='')
    {
        $result=mysqli_query($con,"select * from shop where floor='$floor'");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('only floor And VehicleType Data Fetched')</script>";
    }  
    
    //This if Condition For floor And Wing And P Mode  DATA Fetch 
    if($floor !='' && $p_mode!='' && $wing !='' && $to_date =='' && $from_date =='' && $category=='')
    {
        $result=mysqli_query($con,"select * from shop where floor='$floor'");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('Floor , Payment Mode AND Wing Data Fetched')</script>";
    } 
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;
 //This if condition for Floor And Category (OR Vehicle Type)  DATA FETCH
if($category !='')
{
    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND vhltype='$category'");
}

if($p_mode !='')
{
    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode'");
}

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


//This If Condition for  FLOOR AND WING & VEHICLE TYPE FIELD MATCHES THEN GIVEN RESULT
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
// Over Here   This If Condition for FLOOR AND WING & VEHICLE TYPE FIELD MATCHES THEN GIVEN RESULT


  //------------------------This If Condition for   floor ,wing, P_mode( Payment Mode)----------------------------------------
if(($floor !='' && $p_mode!='' && $wing !='' && $to_date =='' && $from_date =='' && $category==''))
{
    
        $result=mysqli_query($con,"select * from shop where floor='$floor' AND wing = '$wing'");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY FLOOR WING P-MODE DATA')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;
 
    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode'");


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
// Over Here   ThisIf Condition for   floor ,wing, P_mode  GIVEN RESULT


  //------------------------This If Condition for  WING AND P-MODE( Payment mode)  ----------------------------------------
if(($p_mode!='' && $wing !='' && $floor =='' && $to_date =='' && $from_date =='' && $category==''))
{
    
        $result=mysqli_query($con,"select * from shop where wing = '$wing'");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY WING AND P-MODE DATA')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;


    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode'");


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
// Over Here   ThisIf Condition for Wing AND P-Mode (Payment Mode) GIVEN RESULT


  //------------------------This If Condition for  FLOOR AND P-MODE( Payment mode)  ----------------------------------------
if(($p_mode!='' && $floor !='' && $wing =='' && $to_date =='' && $from_date =='' && $category==''))
{
    
        $result=mysqli_query($con,"select * from shop where floor = '$floor'");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY Floor AND P-MODE DATA')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;


    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode'");


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
// Over Here   ThisIf Condition for Floor  AND P-Mode (Payment Mode) GIVEN RESULT


 //------------------------This If Condition for  Floor , Vhltype, Wing , P-mode (Payment Mode)  ----------------------------------------
if(($floor !='' && $wing !='' && $category!='' && $p_mode!='' && $to_date =='' && $from_date =='' && $vh_no =='' && $vh_name =='' && $floor ==''))
{
    
        $result=mysqli_query($con,"select * from shop where floor = '$floor' AND wing = '$wing' ");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY Floor , Wing , Vehicle Type , AND P-mode Data')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;


    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode' AND vhltype='$category'");


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
// Over Here   ThisIf Condition for Floor , Vhltype, Wing , P-mode (Payment Mode)  GIVEN RESULT

//This If Condition for vehicle type AND Payment Method OR MODE Data
    if($p_mode !='' && $category!='' && $from_date =='' && $to_date =='' && $vh_no =='' && $vh_name =='' && $wing =='' && $floor =='')
    {
     $result=mysqli_query($con,"select * from shop_vehicle where p_mode ='$p_mode' AND vhltype ='$category'");
         $shop=mysqli_num_rows($result);
        echo"<script>alert('only Vehicle Type AND Payment mode Data')</script>";
    

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
  //--------------------------Over Here vehicle type AND Payment Method OR MODE  Field------------------------------
  
  //------------------------This If Condition for    Wing , vehicle type AND P-mode (Payment Mode)  ----------------------------------------
if(( $wing !='' && $category!='' && $p_mode!='' && $floor =='' && $to_date =='' && $from_date =='' && $vh_no =='' && $vh_name ==''))
{
    
        $result=mysqli_query($con,"select * from shop where wing = '$wing' ");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY Wing , Vehicle Type , AND P-mode Data')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;


    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode' AND vhltype='$category'");


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
// Over Here   ThisIf Condition for Wing , vehicle type AND P-mode (Payment Mode)  GIVEN RESULT

  
  //------------------------This If Condition for    floor, vehicle type AND P-mode (Payment Mode)  ----------------------------------------
if(( $floor !='' && $category!='' && $p_mode!='' && $wing =='' && $to_date =='' && $from_date =='' && $vh_no =='' && $vh_name ==''))
{
    
        $result=mysqli_query($con,"select * from shop where floor = '$floor' ");
        $shop=mysqli_num_rows($result);
        echo"<script>alert('ONLY FLOOR , Vehicle Type , AND P-mode Data')</script>";
  
    //while($rr1=mysqli_fetch_array($result))
while($rows=mysqli_fetch_array($result))
{

$passid = $rows['id'];

$no=$no+1;


    $sh=mysqli_query($con,"select * from shop_vehicle where pass_id='$passid' AND p_mode='$p_mode' AND vhltype='$category'");


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
// Over Here   This If Condition for  floor, vehicle type AND P-mode (Payment Mode) GIVEN RESULT
  

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
<!-- THIS Jquery For hide Show Text Boxes-->
<script>
 $(document).ready(function(){  
     
$('#divshopno').show();
$('#divfloor').show();
$('#divwing').show();
$('#divkit').show();
$('#divvhlno').show();
$('#divvhlname').show();
$('#divvtpye').show();
$('#divtdate').show();
$('#divfdate').show();
$('#divptype').show();
     
  /// This logic for Hide Shop Number vehicle name ,vehicle no , kit_no , floor , wing , pmode,vtype
    $('#shopname').focus(function()
    {   
        var shnm = $("#shopname").val();
                var cnt = shnm.length;
                
                if(cnt =='0')
                {
                    $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                    
                }else{
                    
                       $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }
         $('#shopname').keyup(function(e)
         {
                var shnm = $(this).val();
                var cnt = shnm.length;
            
                if(cnt > 0)
                {
               		   $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }else
                {
                     $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                     
                }
       
        });  
         
    });
// over here This logic for Hide Shop Number,vehicle name ,vehicle no , kit_no , floor , wing , pmode,vtype

  // This logic for Hide Shop Name,vehicle name,vehicle no , kit_no , floor , wing , pmode,vtype
 $('#shopno').focus(function()
    {
       var shno = $("#shopno").val();
                var cnt = shno.length;
                
                if(cnt =='0')
                {
                    $('#divshopname').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                    
                }else{
                    
                       $('#divshopname').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }
         $('#shopno').keyup(function(e)
         {
                var shnm = $(this).val();
                var cnt = shnm.length;
            
                if(cnt > 0)
                {
               		   $('#divshopname').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }else
                {
                     $('#divshopname').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                     
                }
       
        });   
    });
// over here This logic for Hide Shop Name vehicle name ,vehicle no , kit_no , floor , wing , pmode,vtype


/// This logic for Hide Shop Number vehicle name ,vehicle no , kit_no , floor , wing , pmode,vtype
 $('#kit').focus(function()
    {
         var k = $("#kit").val();
                var cnt = k.length;
                
                if(cnt =='0')
                {
                    $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divshopname').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                    
                }else{
                    
                       $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divshopname').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }
         $('#kit').keyup(function(e)
         {
                var k = $(this).val();
                var cnt = k.length;
            
                if(cnt > 0)
                {
               		   $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divshopname').hide();
                       $('#divvhlno').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }else
                {
                     $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divshopname').show();
                     $('#divvhlno').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                     
                }
       
        });  
    });
// over here This logic for Hide Shop Name, shopNO, vehicle name ,vehicle no , floor , wing , pmode,vtype
    
    
    // This logic for Hide Shop Name ,ShopNO,vehicle name ,kit , floor , wing , pmode,vtype
 $('#vhlno').focus(function()
    {
       var vno = $("#vhlno").val();
                var cnt = vno.length;
                
                if(cnt =='0')
                {
                    $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divshopname').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                    
                }else{
                    
                       $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divshopname').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }
         $('#vhlno').keyup(function(e)
         {
                var shnm = $(this).val();
                var cnt = shnm.length;
            
                if(cnt > 0)
                {
               		   $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divshopname').hide();
                       $('#divvhlname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }else
                {
                     $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divshopname').show();
                     $('#divvhlname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                     
                }
       
        });  
    });
// over here This logic for Hide Shop Name ,ShopNO,vehicle name ,kit , floor , wing , pmode,vtype

 // This logic for Hide Shop Name ,ShopNO,vehicle no,kit , floor , wing , pmode,vtype
 $('#vhlname').focus(function()
    {
       
       var shnm = $("#vhlname").val();
                var cnt = shnm.length;
                
                if(cnt =='0')
                {
                    $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divshopname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                    
                }else{
                    
                       $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divshopname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }
         $('#vhlname').keyup(function(e)
         {
                var shnm = $(this).val();
                var cnt = shnm.length;
            
                if(cnt > 0)
                {
               		   $('#divshopno').hide();
                       $('#divfloor').hide();
                       $('#divwing').hide();
                       $('#divkit').hide();
                       $('#divvhlno').hide();
                       $('#divshopname').hide();
                       $('#divvtpye').hide();
                       $('#divtdate').hide();
                       $('#divfdate').hide();
                       $('#divptype').hide();
                }else
                {
                     $('#divshopno').show();
                     $('#divfloor').show();
                     $('#divwing').show();
                     $('#divkit').show();
                     $('#divvhlno').show();
                     $('#divshopname').show();
                     $('#divvtpye').show();
                     $('#divtdate').show();
                     $('#divfdate').show();
                     $('#divptype').show();
                     
                }
       
        });  
    });
// over here This logic for Hide Shop Name ,ShopNO,vehicle name ,kit , floor , wing , pmode,vtype
   
   //This is for HIdden Field on change of Floor event
  $("#floor_name").change(function()
  {
      var v1;
      
      v1= $("#floor_name").val();
      if(v1=='')
      {
            $('#divshopname').show();
            $('#divshopno').show();
            $('#divkit').show();
            $('#divvhlno').show();
            $('#divvhlname').show();
            $('#divtdate').show();
            $('#divfdate').show(); 
            
      }else{
        
            $('#divshopname').hide();
            $('#divshopno').hide();
            $('#divkit').hide();
            $('#divvhlno').hide();
            $('#divvhlname').hide();
            $('#divtdate').hide();
            $('#divfdate').hide();   
      }
       
        
});
//OVER HERE ONCHANGE EVENT OF FLOOR


 //This is for HIdden Field on change of WING event
  $("#wing_name").change(function()
  {
      var v2;
      
      v2= $("#wing_name").val();
      if(v2=='')
      {
            $('#divshopname').show();
            $('#divshopno').show();
            $('#divkit').show();
            $('#divvhlno').show();
            $('#divvhlname').show();
            $('#divtdate').show();
            $('#divfdate').show(); 
            
      }else{
        
            $('#divshopname').hide();
            $('#divshopno').hide();
            $('#divkit').hide();
            $('#divvhlno').hide();
            $('#divvhlname').hide();
            $('#divtdate').hide();
            $('#divfdate').hide();   
      }
       
        
});
//OVER HERE ONCHANGE EVENT OF WING


//This is for HIdden Field on change of Vehicle Type event
  $("#vtype").change(function()
  {
      var v3;
      
      v3= $("#vtype").val();
      if(v3=='')
      {
            $('#divshopname').show();
            $('#divshopno').show();
            $('#divkit').show();
            $('#divvhlno').show();
            $('#divvhlname').show();
            $('#divtdate').show();
            $('#divfdate').show(); 
            
      }else{
        
            $('#divshopname').hide();
            $('#divshopno').hide();
            $('#divkit').hide();
            $('#divvhlno').hide();
            $('#divvhlname').hide();
            $('#divtdate').hide();
            $('#divfdate').hide();   
      }
       
        
});
//OVER HERE ONCHANGE EVENT OF Vehicle Type

//This is for HIdden Field on change of Payment  Type event
  $("#ptype").change(function()
  {
      var v4;
      
      v4= $("#ptype").val();
      if(v4=='')
      {
            $('#divshopname').show();
            $('#divshopno').show();
            $('#divkit').show();
            $('#divvhlno').show();
            $('#divvhlname').show();
            $('#divtdate').show();
            $('#divfdate').show(); 
            
      }else{
        
            $('#divshopname').hide();
            $('#divshopno').hide();
            $('#divkit').hide();
            $('#divvhlno').hide();
            $('#divvhlname').hide();
            $('#divtdate').hide();
            $('#divfdate').hide();   
      }
       
        
});
//OVER HERE ONCHANGE EVENT OF Payment Type


}); 
</script>
<!-- OVER HERE THIS Jquery For hide Show Text Boxes-->
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