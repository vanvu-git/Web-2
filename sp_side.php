<?php
if(isset($_GET['tl']))
{
    $tl = $_GET['tl'];

    if($tl == "ps") include('ps.php');
    else if($tl == "xb") include('xb.php');
    else if($tl == "nd") include('nd.php');
    else if($tl == "add") include('them.php');
    else include('all.php');

}
else include('all.php');



?>