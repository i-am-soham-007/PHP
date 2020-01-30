<!-- 
This is example of Get Next date (TOMMORROW DATE)
AND Get Previous date (YESTERDAY DATE)
 -->
<?php

$nxt=date('Y-m-d',strtotime("+1 days"));

echo "Tommorrow Date is :- ".$nxt;

echo "<br>";
$prv=date('Y-m-d',strtotime("-1 days"));

echo "Previous Date is :-".$prv;


echo "<br>  strtotime function value ";
echo date('Y-m-d',(strtotime("+1 days")));
?>