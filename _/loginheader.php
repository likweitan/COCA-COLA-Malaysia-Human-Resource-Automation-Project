<?php
session_start();
ob_start();

if (!isset($_SESSION['username'])) {
    include("login_unsuccess.php");
	exit;
}

include('db.php');

$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $_SESSION['username']. "'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

if($row){
	$employeeno = $row['AccountNo'];
	$email = $row['Email'];
	$status = $row['Status'];
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$fullname=$row['NameCard'];
	$role = $row['Role'];
	$mobileno = $row['Phone'];
	$firstlogin = $row['Start_Timestamp'];
	$lastlogin = $row['Mod_Timestamp'];
	$designation = $row['Designation'];
	$department = $row['Department'];
	$gender = $row['Gender'];
	$birthdate = $row['BirthDate'];
	$maritalstatus = $row['MaritalStatus'];
	$religion = $row['Religion'];
	$race = $row['Race'];
	$nationality = $row['Nationality'];
	$houseno = $row['HouseNo'];
	$addressline1 = $row['AddressLine1'];
	$addressline2 = $row['AddressLine2'];
	$city = $row['City'];
	$postcode = $row['PostalCode'];
	$state = $row['State'];
	$incometaxno = $row['IncomeTax'];
	$epfno = $row['EPF'];
}
ob_end_flush();
?>