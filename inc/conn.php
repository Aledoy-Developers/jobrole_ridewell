<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
// ini_set('display_errors', 1);
ini_set('display_errors', 0);
 

ob_start();

date_default_timezone_set('Africa/Lagos');


if($_SERVER['HTTP_HOST'] == 'ridewellng.com'){
$conn = mysqli_connect('localhost', 'jobrfnso_ridewell', 'I3272FatYW1915J@', 'jobrfnso_ridewell');
}
else{
    $conn = mysqli_connect('localhost', 'ridewell_db', 'I3272FatYW1915J@', 'ridewell_db');
}

if (!$conn) {
echo 'Cannot connect to database server';
exit;
}

?>