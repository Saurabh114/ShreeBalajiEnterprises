<?php

// date_default_timezone_set('Asia/Kolkata');

$servername = 'localhost';
$username = 'barney';
$password = 'patanahi';
$database = 'smipo';

$con = mysqli_connect($servername,$username,$password,$database) or die(mysqli_error());
session_start();
?>
