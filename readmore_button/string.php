if (strlen($string) > 25) {
$trimstring = substr($string, 0, 25). ' <a href="#">readmore...</a>';
} else {
$trimstring = $string;
}
echo $trimstring;