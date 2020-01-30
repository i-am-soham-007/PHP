<?php


$con = mysqli_connect("localhost","root","","test");


if(isset($_POST['submit']))
{
	$filename = "in_out.csv";

	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=$filename");
	header("Pragma: no-cache");
	header("Expires: 0");

	$sql = "SELECT * FROM in_out WHERE 1";

	$results = mysqli_query($con,$sql);

	/*try {
	    $stmt = $DB->prepare($sql);
	    $stmt->execute();
	    $results = $stmt->fetchAll();
	} catch (Exception $ex) {
	    printErrorMessage($ex->getMessage());
	}*/

	$content = array();
	$title = array("id","vehicle_type","barcode","amt","vehicle_no","contact_no","email","in_time","out_time","amount","amounta","byus","myby","status","imgin","imgout","n_status","chk_date","day","day_st","invoice_no","in_c","out_c","out_date","shop","qrcode","m","d","h","i","shift","vname","shop_num","coupon","out_type","box_no","p_mode","shift_out");
		foreach ($results as $rs) {
		    $row = array();

		    $row[] = stripslashes($rs["id"]);
		    $row[] = stripslashes($rs["vehicle_type"]);
		    $row[] = stripslashes($rs["barcode"]);
		    $row[] = stripslashes($rs["amt"]);
		    $row[] = stripslashes($rs["vehicle_no"]);
		    $row[] = stripslashes($rs["contact_no"]);
		    $row[] = stripslashes($rs["email"]);
		    $row[] = stripslashes($rs["in_time"]);
		    $row[] = stripslashes($rs["out_time"]);
		    $row[] = stripslashes($rs["amount"]);
		    $row[] = stripslashes($rs["amounta"]);
		    $row[] = stripslashes($rs["byus"]);
		    $row[] = stripslashes($rs["myby"]);
		    $row[] = stripslashes($rs["status"]);
		    $row[] = stripslashes($rs["imgin"]);
		    $row[] = stripslashes($rs["imgout"]);
		    $row[] = stripslashes($rs["n_status"]);
		    $row[] = stripslashes($rs["chk_date"]);
		    $row[] = stripslashes($rs["day"]);
		    $row[] = stripslashes($rs["day_st"]);
		    $row[] = stripslashes($rs["invoice_no"]);
		    $row[] = stripslashes($rs["in_c"]);
		    $row[] = stripslashes($rs["out_c"]);
		    $row[] = stripslashes($rs["out_date"]);
		    $row[] = stripslashes($rs["shop"]);
		    $row[] = stripslashes($rs["qrcode"]);
		    $row[] = stripslashes($rs["m"]);
		    $row[] = stripslashes($rs["d"]);
		    $row[] = stripslashes($rs["h"]);
		    $row[] = stripslashes($rs["i"]);
		    $row[] = stripslashes($rs["shift"]);
		    $row[] = stripslashes($rs["vname"]);
		    $row[] = stripslashes($rs["shop_num"]);
		    $row[] = stripslashes($rs["coupon"]);
		    $row[] = stripslashes($rs["out_type"]);
		    $row[] = stripslashes($rs["box_no"]);
		    $row[] = stripslashes($rs["p_mode"]);
		    $row[] = stripslashes($rs["shift_out"]);

		    $content[] = $row;

		}

		$output = fopen('php://output', 'w');
		fputcsv($output, $title);
		foreach ($content as $con) {
		    fputcsv($output, $con);
		}
}



if(isset($_POST['submit1']))
{
	$filename = "op_allocate.csv";

	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=$filename");
	header("Pragma: no-cache");
	header("Expires: 0");

	$sql = "SELECT * FROM op_allocate WHERE 1";

	$results = mysqli_query($con,$sql);

	/*try {
	    $stmt = $DB->prepare($sql);
	    $stmt->execute();
	    $results = $stmt->fetchAll();
	} catch (Exception $ex) {
	    printErrorMessage($ex->getMessage());
	}*/

	$content = array();
	$title = array("id","box_no","card","op_nm","status","in_status","used","amt","adate","fdate","not_used","shift_stment");
		foreach ($results as $rs) {
		    $row = array();

		    $row[] = stripslashes($rs["id"]);
		    $row[] = stripslashes($rs["box_no"]);
		    $row[] = stripslashes($rs["card"]);
		    $row[] = stripslashes($rs["op_nm"]);
		    $row[] = stripslashes($rs["status"]);
		    $row[] = stripslashes($rs["in_status"]);
		    $row[] = stripslashes($rs["used"]);
		    $row[] = stripslashes($rs["amt"]);
		    $row[] = stripslashes($rs["adate"]);
		    $row[] = stripslashes($rs["fdate"]);
		    $row[] = stripslashes($rs["not_used"]);
		    $row[] = stripslashes($rs["shift_stment"]);
			$content[] = $row;

		}

		$output = fopen('php://output', 'w');
		fputcsv($output, $title);
		foreach ($content as $con) {
		    fputcsv($output, $con);
		}
}


?>	