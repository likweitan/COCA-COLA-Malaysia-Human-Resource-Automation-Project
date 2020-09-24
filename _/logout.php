<?php
	include ('db.php');
	// Start the session
    session_start();

	$username = $_SESSION['username'];
	
	$sql = "UPDATE account SET Status='offline' WHERE AccountNo ='".$username."'";
 	$query = mysqli_query($con, $sql);

	$sql = "UPDATE loginattempt SET End_Timestamp=CURRENT_TIMESTAMP() WHERE AccountNo ='".$username."' ORDER BY End_Timestamp DESC LIMIT 1";
 	$query = mysqli_query($con, $sql);

	// remove all session variables
	session_unset();
	// destroy the session
    session_destroy();
    include("login_unsuccess.php");
?> 