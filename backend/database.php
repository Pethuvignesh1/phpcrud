<?php
$servername = "testpep.c32exyjbusk5.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "PFuPWrGANwy90cvovImR";
$dbname = "testvk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>