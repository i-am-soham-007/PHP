<?php include('header.php'); ?>
<?php include('sidebar.php'); 
error_reporting(0);
?>

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
						       <h1>Visitor's Sheet Generate</h1>
		       
				            <form action = "sticker2w2" class="form-horizontal" method="POST" id="form">
		                              	
											<div class="form-group row">
												<label class="col-md-4 col-form-label">Total No</label>
												<div class="col-md-5">
												    <input class="form-control col-xs-12" name="sheet" id="country" type="text" readonly value="65">
												    
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-4 col-form-label">Vehicle Type </label>
												<div class="col-md-5">
												  <input class="form-control col-xs-12" name="qrcat" id="country" type="text" readonly value="For All Vehicle">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-4 col-form-label">Date</label>
												<div class="col-md-5">
												  <input type="date" class="form-control" id="per" name="date" required="" data-validation-required-message="This field is required">
												</div>
											</div>
											
											
											
													
											<div class="form-group row">
											    <div class="col-md-5">
												<label class="control-label">Sheet No</label>
												<!--<input type="text" id="card_noo" class="form-control" placeholder="Card No" name="card_no" >-->
													<select id="card_noo"  name="box_no"  class="form-control" data-rel="chosen" required>
												<option value="">Sheet Card </option>
												</select>
													</div>
												
												<div id="suggesstion-box"></div>
											</div>
											
											
												<div class="form-group row">
											    <div class="col-md-5">
												<label class="control-label">Choose Color</label>
													<select  name="color"  class="form-control" data-rel="chosen" required>
        												<option value="">--select Color --</option>
                                                    	<option value="#b2dffb">Light Blue</option>
                                                    	<option value="#f65c78">Light Red</option>
                                                    	<option value="#ff7315">Orange</option>
                        
                                                    	<option value="#4dd599">Light Green</option>
                                                    	<option value="#ffe3ed">Rose Pink</option>
                                                    	<option value="#f1fa3c">Yellow</option>
                                                    	<option value="#6b591d">Brown</option>
                                                    	<option value="#979797">Grey Silver</option>
												</select>
													</div>
												</div>
										
			
									
		
		            <div class="form-group row">
		            	<div class="col-md-12">
		            	<center>
		            	<input type="submit" name="submit1" id="submit" class="btn btn-success" value="Generate QR"></center>
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

<script>
   $(document).ready(function(){
    $('#per').on('change',function(){
        var mooonth = $(this).val();
     
        
        	var data = { 'mooonth': mooonth };
        if(mooonth){
            $.ajax({
                type:'POST',
                url:'card_ajex.php',
                data:data,
                success:function(html){
                    $('#card_noo').html(html);
                }
            }); 
        }else{
            $('#card_noo').html('');
        }
    });
    
});

</script>

 <?php include('footer.php'); ?>