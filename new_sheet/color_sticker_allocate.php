<?php include('header.php'); ?>
<?php include('sidebar.php'); 
error_reporting(0);

?>
<?php 
if(isset($_POST['submit'])){
	
	$op_nm = $_POST['op_nm'];
	$box_no = $_POST['box_no'];
		$amt = $_POST['amt'];
	
	$resulta=mysqli_query($con,"select * from color_sticker Where box_no = '$box_no'");
	
   	while($contacta=mysqli_fetch_array($resulta))
	{
		
   	   	mysqli_query($con,"UPDATE `color_sticker` SET `amt`='$amt', op_nm = '$op_nm', allocate_st = '1'  WHERE box_no ='$box_no'");


	}
	
	$origDate=date('Y-m-d');
	$sdate = date("d-m-y", strtotime($origDate));
//	$insert=mysqli_query($con,"INSERT INTO `allocate_card_color`(`box_no`,`op_nm`,`adate`,`amt`) VALUES ('$box_no','$op_nm','$adate','$amt')");
	
	$insert
	mysqli_query($con,"UPDATE `color_sticker` SET `status`='1' WHERE box_no='$box_no'");
		
	if($insert)
	{
		echo "<script>window.location.href = 'color_sticker_allocate';</script>";
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
                    <h3 class="text-themecolor">Allocate Brcode Card List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Allocate Brcode</li>
                        <li class="breadcrumb-item active">Allocate Brcode List</li>
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
                                <h4 class="card-title">Allocate Card</h4>
								<?php echo $_GET['msg']; ?>
                                <form class="m-t-40" action="" method="post" enctype="multipart/form-data">
									 <div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Select Operator</label>
												<select class="form-control" name="op_nm">
													<option value="">Select Operator</option>
													<?php
														$result=mysqli_query($con,"select * from admin WHERE user_role='in' AND status='1'  ORDER BY id DESC");
														while($contact=mysqli_fetch_array($result))
														{
													?>
													<option value="<?php echo $contact['id'];?>"><?php echo $contact['user_nm'];?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label">Select Bundled No</label>
												<select class="form-control" name="box_no">
													<option value="">Select Bundled</option>
													<?php
													  	$origDate=date('Y-m-d');
													  	$sdate = date("d-m-y", strtotime($origDate));
														$resulta=mysqli_query($con,"select DISTINCT
														box_no from color_sticker WHERE allocate_st ='0' AND print='1' AND adate = '$sdate' ");
														while($contacta=mysqli_fetch_array($resulta))
														{
													?>
													<option value="<?php echo $contacta['box_no'];?>"><?php echo $contacta['box_no'];?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										
											<div class="col-md-3">
											<div class="form-group">
												<label class="control-label">Select Amount</label>
												<select class="form-control" name="amt" required>
													<option value="">Select Amount</option>
													<option value="0">0</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
													
													
												</select>
											</div>
										</div>
									
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label" style="visibility:hidden;">submit</label>
												<input type="submit" class="btn btn-success form-control" name="submit" value="submit">
											</div>
										</div>
									</div>
                                </form>
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
 <?php include('footer.php'); ?>