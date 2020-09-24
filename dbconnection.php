<?php
error_reporting(0);
// Create connection

$server = "	sql306.epizy.com";
$username = "epiz_26803851 ";
$password = "AOFxlTjwu5gR";
$dbname = "epiz_26803851_agribuzz";


$con=mysqli_connect("$server","$username","$password","$dbname");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>