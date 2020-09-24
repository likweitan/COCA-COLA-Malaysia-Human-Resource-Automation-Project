<?php
include("db.php");

// Start the session
session_start();

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];
// Password encryption

$response = '';
$error = "";
$attempts= 0;

function checkAttempts($user) {
	include("db.php");
	$sql = "SELECT Attempts,LastLogin FROM loginattempts WHERE username = '".$user."'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$attempts = $row['Attempts'];
	return $attempts;
}

function addAttempts($user) {
	include("db.php");
	$sql = "SELECT Attempts,LastLogin FROM loginattempts WHERE username = '".$user."'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$attempts = $row['Attempts'];
	if($attempts < 5){
		$sql = "UPDATE Attempts SET Attempts = Attempts + 1 FROM loginattempts WHERE username = '".$user."'";
	}
		
}



if($username == "" && $password == ""){
	$error = "Please fill in your username and password";
	$_SESSION["error"] = $error;
	header("location: login.php");
}
else if($username == ""){
	$error = "Please fill in your username";
	$_SESSION["error"] = $error;
	header("location: login.php");
}
else if($password == ""){
	$error = "Please fill in your password";
	$_SESSION["error"] = $error;
	$_SESSION["tempusername"] = $username;
	header("location: login.php");
}
else
{
	$sql = "SELECT AccountNo,PassKey FROM account WHERE AccountNo = '".$username."' and PassKey = '".$password."'";
	echo $sql;
	$query = mysqli_query($con, $sql);
	echo mysqli_fetch_array($query,MYSQLI_ASSOC);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$account = $row['username'];
	$count = mysqli_num_rows($query);
	


      
      //echo $count;
      // If result matched $myusername and $mypassword, table row must be 1 row
	echo $username;
		
	$sql = "SELECT Attempts,LastLogin FROM account WHERE username = '".$username."'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$attempts = $row['Attempts'];

 if($count == 1) {
 $sql = "INSERT INTO loginattempt (AccountNo, State) VALUES ('$username','success')";
 $query = mysqli_query($con, $sql);
	  $sql = "UPDATE account SET Status='online' WHERE AccountNo ='".$username."'";
 $query = mysqli_query($con, $sql);
 $_SESSION['username'] = $username;

 header("location: index.php");
      }else {
		  $sql = "INSERT INTO loginattempt (AccountNo, State) VALUES ('$username','fail')";
	echo $sql;
	 
	 //checkrestpassword
	 $sql = "SELECT AccountNo,PassKeyTemp FROM passwordresettemp WHERE AccountNo = '".$username."' and PassKeyTemp = '".$password."' and ExpiryDate >= Current_Timestamp() ORDER BY ExpiryDate DESC LIMIT 1";
	//echo $sql;
	$query = mysqli_query($con, $sql);
	//echo mysqli_fetch_array($query,MYSQLI_ASSOC);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	 $count = mysqli_num_rows($query);
	 
	 if($count == 1) {
 $sql = "INSERT INTO loginattempt (AccountNo, State) VALUES ('$username','success')";
 $query = mysqli_query($con, $sql);
	  $sql = "UPDATE account SET Status='online' WHERE AccountNo ='".$username."'";
 $query = mysqli_query($con, $sql);
 $_SESSION['username'] = $username;

 header("location: index.php");
      }else{
	 
	$query = mysqli_query($con, $sql);
		  $error = "Your username or password is invalid".$attempts;
		  $_SESSION["error"] = $error;
		  $_SESSION["tempusername"] = $username;
		  header("location: login.php");
      }
 }
}
?>