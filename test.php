<?php
$chkma ="101-105";

if (strpos($chkma, '-')) 
	{echo $chkma."-";
}
elseif(strpos($chkma, ','))
{
	echo $chkma.",";}

?>