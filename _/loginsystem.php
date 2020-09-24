<?php
include("db.php");

// Start the session
session_start();

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];
// Password encryption


$error = "";


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
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$account = $row['username'];
	$count = mysqli_num_rows($query);
		
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
include("login_success.php");
      }else {
		  $sql = "INSERT INTO loginattempt (AccountNo, State) VALUES ('$username','fail')";
	 
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
include("login_success.php");
      }else{
	 
	$query = mysqli_query($con, $sql);
		  $error = "Your username or password is invalid".$attempts;
		  $_SESSION["error"] = $error;
		  $_SESSION["tempusername"] = $username;
		  include("login_unsuccess.php");
      }
 }
}
?>