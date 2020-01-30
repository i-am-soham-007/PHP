<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>Citizen Pass Sticker</title>
		<style>

<?php
include('config.php');

?>
<?php
if(isset($_POST['print']))
{
	
	$adate = $_POST['adate'];
	
}

?>

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[] { cursor: pointer; }

*[]:hover, *[]:focus, td:hover *[], td:focus *[], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 4px; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body {
    box-sizing: border-box;
    height: 11.69in;
    margin: 0 auto;
    overflow: hidden;
    width: 8.5in;
    padding-top: 28px;
    padding-left: 25px;
    padding-right: 22px;
}
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 1em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 20px 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */


@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
.col-md-8 {
    width: 80%;
    float: left;	   
}
.row {
    width: 100%;
    float: left;
    
}
.text-center {
    text-align: center;
    padding: 10px;
    font-weight: bolder;
    font-size: 19px;
    background: lightgray;
    border: 1px solid #000;
}
.col-md-2
{
	width:20%;
	float:left;
}
.col-md-10
{
	width:80%;
	float:left;
}
.col-md-8
{
	width:66.66%;
	float:left;
}
.col-md-4
{
	width:33.3%;
	float:left;
}
.col-md-3
{
	width:25%;
	float:left;
}
.sub1 {
    border: 1px solid black;
    border-radius: 10px;
    height: 80.2px;
    padding: 0px;
    background: #ffffff;
    background-image: url(assets/images/logo-grey.png);
    background-size: 106px;
    background-position: center;
    background-repeat: no-repeat;
    width:150px;
}
.logo_l {    
    padding: 10px;
    height: 35px;
}
h3.heading_rec {
    text-align: center;
    font-weight: bold;
    padding-top: 7px;
	color: brown;
	padding-bottom: 8px;
}
.logo_l2 {
    padding-left: 10px;  
}
.hh {    
    height: 50px;
}
strong
{
	font-weight: bold;
}

.col-md-6 {
    width: 50%;
    float:left;
}
.logo_l p {
    text-align: center;
    padding-top: 5px;
    font-weight: bold;
    font-size: 29px;
}


</style>
	</head>
<?php
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

$color = random_color();
    



?>
	<body >
	     <h1>Sheet = </h1>

	         <?php
	         $color = $_POST["color"];
	         //echo"<script>alert('".$total."')</script>";
	         $codesl=mysqli_query($con,"SELECT * FROM `barcode` WHERE print = 0 AND adate = '$adate' ORDER BY id ASC");
	         $line = 0;
	         while($contact=mysqli_fetch_array($codesl))
	         {
	           $img = $contact['card'];
	             ?> 
	             
	           <div class="col-md-2">
	                
	            <div class="sub1"  style="background-color:<?php echo $color; ?>">
							<div class="logo_l">
							    <span style="margin-left: 35px;">RKTM</span>
							    <p><?php echo $contact['card'];   ?></p>
						   <span style="margin-left: 35px;"><?php echo $contact['adate']; ?></span>

							</div>
						
				</div>
				</div>
        	<?php 	
        	}
        	?>
					
					<?php
					//    mysqli_query($con,"UPDATE `barcode` SET `print` = '1' WHERE `adate` = '$adate' "); 
					?>		
					 
	</body>
	
</html>