<?php
session_start();
$duration = (2 * 60);

if(isset($_SESSION['started']))
{
    // show banner and hide form

    $showform = 0;
    $time = ($duration - (time() - $_SESSION['started']));
    if($time <= 0)
    {
        unset($_SESSION['count']);
        unset($_SESSION['offender']);
        $showform == 1;
    }
}
else
{
  $_SESSION['started'] = time();
}
?>