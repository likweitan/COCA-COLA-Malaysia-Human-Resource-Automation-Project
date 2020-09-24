<?php
$servername = "localhost";
$username = "cocacola_group4";
$password = "group4@inti2019";
$dbname = "cocacola_group4";

$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	
?>
