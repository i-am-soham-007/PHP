
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


<input type="text" id="one" />
<input type="text" id="two" />
<script type="text/javascript">

$(document).ready(function(){

	$("#one").focus(function(){

		$('#one').keyup(function(e) {
    var v1 = $(this).val();
   var cnt = v1.length;

   if(cnt >0)
   {
   	$("#two").hide();
   	}else{
   	$("#two").show();
   }
	});

	});

});

	
</script>
</body>
</html>