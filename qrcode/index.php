<?php

require_once 'phpqrcode/qrlib.php';

//Simple generate qrcode the following Code

//QRcode::png("This is example of qrcode");


//to Store Qrcode in Images Folder using the following code

/*$path ="images/";
$file = $path.uniqid().".png";

$text ="This is example";

QRcode::png($text,$file);

echo "<img src='".$file."'>";*/

// qrcode store code is over


//to Store Qrcode  AND CHange Size using 'H' , "L" in Images Folder using the following code

$path ="images/";
$file = $path.uniqid().".png";

$text ="Harsh Desai\nharshdesai4am@gmail.com";

QRcode::png($text,$file,"M",7,25);
//Here 2 is a Frame Size of QrCode
// png($text, $file , Ecc_LEVEL,Pixel_Size, Frame_Size);
// H , L ,Q ,M Size

echo "<img src='".$file."'>";

// qrcode store code is over

?>