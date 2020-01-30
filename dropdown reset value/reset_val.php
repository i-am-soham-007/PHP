<?php include('header.php'); ?>
<?php include('sidebar.php'); 
error_reporting(0);
include 'config.php';
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
                    <h3 class="text-themecolor">Sheet For Kit</h3>
                </div>
				
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Sheet For Kit</li>
                        <li class="breadcrumb-item active">Sheet For Kit</li>
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
						       <h1>Sheet For Kit</h1>
		       
				            <form action = "sheet_kit_print1" class="form-horizontal" method="POST">
		                              	
		                     <div class="form-group row">
		                         
		                                        <div class="col-md-6">
												        <label class="control-label">Select Category</label>
													    <select name="cate" id="category" class="form-control" data-rel="chosen" required>
													        <option value="0">Select Category</option>
                                                            <option value="SMF">SMF</option>
                                                            <option value="SMT">SMT</option>
												        </select>
												</div> 
												
												<div class="col-md-6">
												        <label class="control-label">Select Type</label>
													    <select name="kit_rtag" id="type" class="form-control" data-rel="chosen" required>
													        <option value="0">Type</option>
                                                            <option value="kit">Kit No</option>
                                                            <option value="roundtag">Round Tag</option>
												        </select>
												</div>
		                         			
											</div>
											
								<div class="form-group row" id="content">
											    <div class="col-md-3" id="divkit">
												        <label class="control-label">Select Kit No:-</label>
												    	<select name="kit_no1"  id="kitshow" class="form-control" data-rel="chosen" required>
											        	</select>
												</div>
											
							
											    <div class="col-md-3" id="divkit1">
												    <label class="control-label">Select Kit No:-</label>
												    	<select name="kit_no2" id="kitshow1" class="form-control" data-rel="chosen" required>
												        </select>
												        
												</div>
								
								    
								        <div class="col-md-3" id="divrtag">
												        <label class="control-label">Select RoundTag No:-</label>
												    	<select name="rtag1"  id="rtagshow" class="form-control" data-rel="chosen" required>
											        	</select>
												</div>
											
							
										  <div class="col-md-3" id="divrtag1">
												    <label class="control-label">Select RoundTag No:-</label>
												    	<select name="rtag2" id="rtagshow1" class="form-control" data-rel="chosen" required>
												        </select>
												        
												</div>
								</div>			
											
		
		            <div class="form-group row">
		            	<div class="col-md-12">
		            	<center>
		            	<input type="submit" name="submit1" id="submit" class="btn btn-success" value="Generate Sheet For Kit"></center>
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


 <?php include('footer.php'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#type').on('change', function(){
        
       var cat =$('#category').val();
       var type = $(this).val();
       
       $.each($('#content').find($('select')) , function()
       {
           $(this).val("");
       });
       /*if(type == 'kit')
       {
            $('#divkit').show();
            $('#divkit1').show();
       }else{
            $('#divkit').hide();
            $('#divkit1').hide();
       }
       
       if(type == 'roundtag')
       {
            $('#divrtag').show();
            $('#divrtag1').show();
       }else{
            $('#divrtag').hide();
            $('#divrtag1').hide();
       }*/
      $.ajax({
                url: 'kit_tag_fetch.php',
                type: 'POST',
                data: {'cat': cat, 'type': type},
                success: function (html)
                {
                        if(type == 'kit')
                        {
                            alert('Kit Alert');
                            $('#kitshow').html(html);
                            $('#kitshow1').html(html);
                        }
                        
                        if(type == 'roundtag')
                        {
                            alert('Roundtag Alert');
                            $('#rtagshow').html(html);
                            $('#rtagshow1').html(html);
                        }
                }
            });
    });
  
});
</script>
 
 