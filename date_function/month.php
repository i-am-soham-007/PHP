<?php


for($i =1; 	$i<=12; $i++)
{
	$ary[] = $i;
$name[] = date('F', mktime(0, 0, 0, $i, 10)); // March


}
$no = $ary[0];
$no1 = $ary[1];
$no2 = $ary[2];
$no3 = $ary[3];
$no4 = $ary[4];
$no5 = $ary[5];
$no6 = $ary[6];
$no7 = $ary[7];
$no8 = $ary[8];
$no9 = $ary[9];
$no10 = $ary[10];
$no11 = $ary[11];


//echo $no;
echo "<br><br>";
print_r($name);
?>