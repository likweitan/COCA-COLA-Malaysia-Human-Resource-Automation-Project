<?php
include("../db.php");
require"../loginheader.php";
$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $_SESSION['username']. "'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		
		$account = $_SESSION['username'];
		$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$fullname=$row['NameCard'];
		$role = $row['Role'];
		$lastlogin = $row['Start_Timestamp'];
	$lastlogout = $row['Mod_Timestamp'];
	
	if(isset($_POST['submit'])){
	$AccountNo = $_SESSION['username'];
	$FirstName = mysqli_real_escape_string($con, $_POST['efName']);
	$LastName = mysqli_real_escape_string($con, $_POST['elName']);
	$NameCard = mysqli_real_escape_string($con, $_POST['eName']);
	$Gender = mysqli_real_escape_string($con, $_POST['eGender']);
	$BirthDate = mysqli_real_escape_string($con,$_POST['eBirthDate']);
	$Department = mysqli_real_escape_string($con, $_POST['eDepartment']);
	$Designation = mysqli_real_escape_string($con, $_POST['eDesignation']);
	$MaritalStatus = mysqli_real_escape_string($con, $_POST['eMaritalStatus']);
	$Religion = mysqli_real_escape_string($con, $_POST['eReligion']);
	$Race = mysqli_real_escape_string($con, $_POST['eRace']);
	$Nationality = mysqli_real_escape_string($con, $_POST['eNationality']);
	
	$HouseNo = mysqli_real_escape_string($con, $_POST['eHouseNo']);
	$AddressLine1 = mysqli_real_escape_string($con, $_POST['eAddressLine1']);
	$AddressLine2 = mysqli_real_escape_string($con, $_POST['eAddressLine2']);
	$City = mysqli_real_escape_string($con, $_POST['eCity']);
	$PostalCode = mysqli_real_escape_string($con, $_POST['ePostalCode']);
	$State = mysqli_real_escape_string($con, $_POST['eState']);
	$IncomeTax = mysqli_real_escape_string($con, $_POST['IncomeTax']);
	$EPF = mysqli_real_escape_string($con, $_POST['EPF']);
	$insert = mysqli_query($con, "INSERT INTO employee (AccountNo, FirstName, LastName, NameCard,  Gender,  BirthDate, Department, Designation, MaritalStatus, Religion, Race, Nationality,  HouseNo, AddressLine1, AddressLine2, City, PostalCode, State, IncomeTax, EPF) 
	VALUES ('$AccountNo','$FirstName','$LastName' , '$NameCard',  '$Gender',  '$BirthDate', '$Department', '$Designation', '$MaritalStatus', '$Religion', '$Race', '$Nationality',  '$HouseNo', '$AddressLine1', '$AddressLine2', '$City', '$PostalCode', '$State','$IncomeTax', '$EPF' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	
	$BankName = mysqli_real_escape_string($con, $_POST['eBankName']);
	$BankAccount = mysqli_real_escape_string($con, $_POST['eAccountNo']);
	$insert = mysqli_query($con, "INSERT INTO bank (AccountNo, BankName, BankAccount) 
	VALUES ('$AccountNo', '$BankName' ,'$BankAccount' )");  
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	$FirstName7 = mysqli_real_escape_string($con, $_POST['FirstName7']);
	$LastName7 = mysqli_real_escape_string($con, $_POST['LastName7']);
	$Gender7 = mysqli_real_escape_string($con, $_POST['Gender7']);
	$Relationship7 = mysqli_real_escape_string($con, $_POST['Relationship7']);
	$NRIC7 = mysqli_real_escape_string($con, $_POST['NRIC7']);
	$BirthDate7 = mysqli_real_escape_string($con, $_POST['BirthDate7']);
	$Age7 = mysqli_real_escape_string($con, $_POST['Age7']);
	$Occupation7 = mysqli_real_escape_string($con, $_POST['Occupation7']);
	
	$FirstName8 = mysqli_real_escape_string($con, $_POST['FirstName8']);
	$LastName8 = mysqli_real_escape_string($con, $_POST['LastName8']);
	$Gender8 = mysqli_real_escape_string($con, $_POST['Gender8']);
	$Relationship8 = mysqli_real_escape_string($con, $_POST['Relationship8']);
	$NRIC8 = mysqli_real_escape_string($con, $_POST['NRIC8']);
	$BirthDate8 = mysqli_real_escape_string($con, $_POST['BirthDate8']);
	$Age8 = mysqli_real_escape_string($con, $_POST['Age8']);
	$Occupation8 = mysqli_real_escape_string($con, $_POST['Occupation8']);
	
	$FirstName9 = mysqli_real_escape_string($con, $_POST['FirstName9']);
	$LastName9 = mysqli_real_escape_string($con, $_POST['LastName9']);
	$Gender9 = mysqli_real_escape_string($con, $_POST['Gender9']);
	$Relationship9 = mysqli_real_escape_string($con, $_POST['Relationship9']);
	$NRIC9 = mysqli_real_escape_string($con, $_POST['NRIC9']);
	$BirthDate9 = mysqli_real_escape_string($con, $_POST['BirthDate9']);
	$Age9 = mysqli_real_escape_string($con, $_POST['Age9']);
	$Occupation9 = mysqli_real_escape_string($con, $_POST['Occupation9']);
	
	$FirstName10 = mysqli_real_escape_string($con, $_POST['FirstName10']);
	$LastName10 = mysqli_real_escape_string($con, $_POST['LastName10']);
	$Gender10 = mysqli_real_escape_string($con, $_POST['Gender10']);
	$Relationship10 = mysqli_real_escape_string($con, $_POST['Relationship10']);
	$NRIC10 = mysqli_real_escape_string($con, $_POST['NRIC10']);
	$BirthDate10 = mysqli_real_escape_string($con, $_POST['BirthDate10']);
	$Age10 = mysqli_real_escape_string($con, $_POST['Age10']);
	$Occupation10 = mysqli_real_escape_string($con, $_POST['Occupation10']);
	
	$FirstName11 = mysqli_real_escape_string($con, $_POST['FirstName11']);
	$LastName11 = mysqli_real_escape_string($con, $_POST['LastName11']);
	$Gender11 = mysqli_real_escape_string($con, $_POST['Gender11']);
	$Relationship11 = mysqli_real_escape_string($con, $_POST['Relationship11']);
	$NRIC11 = mysqli_real_escape_string($con, $_POST['NRIC11']);
	$BirthDate11 = mysqli_real_escape_string($con, $_POST['BirthDate11']);
	$Age11 = mysqli_real_escape_string($con, $_POST['Age11']);
	$Occupation11 = mysqli_real_escape_string($con, $_POST['Occupation11']);
	
	$FirstName12 = mysqli_real_escape_string($con, $_POST['FirstName12']);
	$LastName12 = mysqli_real_escape_string($con, $_POST['LastName12']);
	$Gender12 = mysqli_real_escape_string($con, $_POST['Gender12']);
	$Relationship12 = mysqli_real_escape_string($con, $_POST['Relationship12']);
	$NRIC12 = mysqli_real_escape_string($con, $_POST['NRIC12']);
	$BirthDate12 = mysqli_real_escape_string($con, $_POST['BirthDate12']);
	$Age12 = mysqli_real_escape_string($con, $_POST['Age1']);
	$Occupation12 = mysqli_real_escape_string($con, $_POST['Occupation12']);
	
	$FirstName1 = mysqli_real_escape_string($con, $_POST['FirstName1']);
	$LastName1 = mysqli_real_escape_string($con, $_POST['LastName1']);
	$Gender1 = mysqli_real_escape_string($con, $_POST['Gender1']);
	$Relationship1 = mysqli_real_escape_string($con, $_POST['Relationship1']);
	$NRIC1 = mysqli_real_escape_string($con, $_POST['NRIC1']);
	$BirthDate1 = mysqli_real_escape_string($con, $_POST['BirthDate1']);
	$Age1 = mysqli_real_escape_string($con, $_POST['Age1']);
	$Occupation1 = mysqli_real_escape_string($con, $_POST['Occupation1']);
	
	$FirstName2 = mysqli_real_escape_string($con, $_POST['FirstName2']);
	$LastName2 = mysqli_real_escape_string($con, $_POST['LastName2']);
	$Gender2 = mysqli_real_escape_string($con, $_POST['Gender2']);
	$Relationship2 = mysqli_real_escape_string($con, $_POST['Relationship2']);
	$NRIC2 = mysqli_real_escape_string($con, $_POST['NRIC2']);
	$BirthDate2 = mysqli_real_escape_string($con, $_POST['BirthDate2']);
	$Age2 = mysqli_real_escape_string($con, $_POST['Age2']);
	$Occupation2 = mysqli_real_escape_string($con, $_POST['Occupation2']);
	
	$FirstName3 = mysqli_real_escape_string($con, $_POST['FirstName3']);
	$LastName3 = mysqli_real_escape_string($con, $_POST['LastName3']);
	$Gender3 = mysqli_real_escape_string($con, $_POST['Gender3']);
	$Relationship3 = mysqli_real_escape_string($con, $_POST['Relationship3']);
	$NRIC3 = mysqli_real_escape_string($con, $_POST['NRIC3']);
	$BirthDate3 = mysqli_real_escape_string($con, $_POST['BirthDate3']);
	$Age3 = mysqli_real_escape_string($con, $_POST['Age3']);
	$Occupation3 = mysqli_real_escape_string($con, $_POST['Occupation3']);
	
	$FirstName4 = mysqli_real_escape_string($con, $_POST['FirstName4']);
	$LastName4 = mysqli_real_escape_string($con, $_POST['LastName4']);
	$Gender4 = mysqli_real_escape_string($con, $_POST['Gender4']);
	$Relationship4 = mysqli_real_escape_string($con, $_POST['Relationship4']);
	$NRIC4 = mysqli_real_escape_string($con, $_POST['NRIC4']);
	$BirthDate4 = mysqli_real_escape_string($con, $_POST['BirthDate4']);
	$Age4 = mysqli_real_escape_string($con, $_POST['Age4']);
	$Occupation4 = mysqli_real_escape_string($con, $_POST['Occupation4']);
	
	$FirstName5 = mysqli_real_escape_string($con, $_POST['FirstName5']);
	$LastName5 = mysqli_real_escape_string($con, $_POST['LastName5']);
	$Gender5 = mysqli_real_escape_string($con, $_POST['Gender5']);
	$Relationship5 = mysqli_real_escape_string($con, $_POST['Relationship5']);
	$NRIC5 = mysqli_real_escape_string($con, $_POST['NRIC5']);
	$BirthDate5 = mysqli_real_escape_string($con, $_POST['BirthDate5']);
	$Age5 = mysqli_real_escape_string($con, $_POST['Age5']);
	$Occupation5 = mysqli_real_escape_string($con, $_POST['Occupation5']);
	
	$FirstName6 = mysqli_real_escape_string($con, $_POST['FirstName6']);
	$LastName6 = mysqli_real_escape_string($con, $_POST['LastName6']);
	$Gender6 = mysqli_real_escape_string($con, $_POST['Gender6']);
	$Relationship6 = mysqli_real_escape_string($con, $_POST['Relationship6']);
	$NRIC6 = mysqli_real_escape_string($con, $_POST['NRIC6']);
	$BirthDate6 = mysqli_real_escape_string($con, $_POST['BirthDate6']);
	$Age6 = mysqli_real_escape_string($con, $_POST['Age6']);
	$Occupation6 = mysqli_real_escape_string($con, $_POST['Occupation6']);
	
	$insert = mysqli_query($con, "INSERT INTO family (AccountNo, FirstName, LastName, Gender, Relationship, NRIC, BirthDate, Age, Occupation) 
	VALUES ('$AccountNo', '$FirstName7' ,'$LastName7', '$Gender7', '$Relationship7', '$NRIC7', '$BirthDate7', '$Age7','$Occupation7' ),
	       ('$AccountNo', '$FirstName8' ,'$LastName8', '$Gender8', '$Relationship8', '$NRIC8', '$BirthDate8', '$Age8','$Occupation8' ),
		   ('$AccountNo', '$FirstName9' ,'$LastName9', '$Gender9', '$Relationship9', '$NRIC9', '$BirthDate9', '$Age9','$Occupation9' ),
		   ('$AccountNo', '$FirstName10' ,'$LastName10', '$Gender10', '$Relationship10', '$NRIC10', '$BirthDate10', '$Age10','$Occupation10' ),
	       ('$AccountNo', '$FirstName11' ,'$LastName11', '$Gender11', '$Relationship11', '$NRIC11', '$BirthDate11', '$Age11','$Occupation11' ),
		   ('$AccountNo', '$FirstName12' ,'$LastName12', '$Gender12', '$Relationship12', '$NRIC12', '$BirthDate12', '$Age12','$Occupation12' ),
		   ('$AccountNo', '$FirstName1' ,'$LastName1', '$Gender1', '$Relationship1', '$NRIC1', '$BirthDate1', '$Age1','$Occupation1' ),
	       ('$AccountNo', '$FirstName2' ,'$LastName2', '$Gender2', '$Relationship2', '$NRIC2', '$BirthDate2', '$Age2','$Occupation2' ),
		   ('$AccountNo', '$FirstName3' ,'$LastName3', '$Gender3', '$Relationship3', '$NRIC3', '$BirthDate3', '$Age3','$Occupation3' ),
		   ('$AccountNo', '$FirstName4' ,'$LastName4', '$Gender4', '$Relationship4', '$NRIC4', '$BirthDate4', '$Age4','$Occupation4' ),
		   ('$AccountNo', '$FirstName5' ,'$LastName5', '$Gender5', '$Relationship5', '$NRIC5', '$BirthDate5', '$Age5','$Occupation5' ),
		   ('$AccountNo', '$FirstName6' ,'$LastName6', '$Gender6', '$Relationship6', '$NRIC6', '$BirthDate6', '$Age6','$Occupation6' )");  
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	

	$FirstName = mysqli_real_escape_string($con, $_POST['ecFirstName']);
	$LastName = mysqli_real_escape_string($con, $_POST['ecLastName']);
	$Relationship = mysqli_real_escape_string($con, $_POST['ecRelationship']);
	$Address = mysqli_real_escape_string($con, $_POST['ecAddress']);
	$PhoneNo = mysqli_real_escape_string($con, $_POST['ecPhoneNo']);
	$insert = mysqli_query($con, "INSERT INTO emergencycontact (AccountNo, FirstName, LastName, Relationship, Address, PhoneNo) 
	VALUES ('$AccountNo','$FirstName' ,'$LastName', '$Relationship', '$Address', '$PhoneNo' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	
	$Qualification1 = mysqli_real_escape_string($con, $_POST['Qualification1']);
	$InstitutionName1 = mysqli_real_escape_string($con, $_POST['InstitutionName1']);
	$Duration1 = mysqli_real_escape_string($con, $_POST['Duration1']);
	$Club1 = mysqli_real_escape_string($con, $_POST['Club1']);
	
	$Qualification2 = mysqli_real_escape_string($con, $_POST['Qualification2']);
	$InstitutionName2 = mysqli_real_escape_string($con, $_POST['InstitutionName2']);
	$Duration2 = mysqli_real_escape_string($con, $_POST['Duration2']);
	$Club2 = mysqli_real_escape_string($con, $_POST['Club2']);
	
	$Qualification3 = mysqli_real_escape_string($con, $_POST['Qualification3']);
	$InstitutionName3 = mysqli_real_escape_string($con, $_POST['InstitutionName3']);
	$Duration3 = mysqli_real_escape_string($con, $_POST['Duration3']);
	$Club3 = mysqli_real_escape_string($con, $_POST['Club3']);
	
	$Qualification4 = mysqli_real_escape_string($con, $_POST['Qualification4']);
	$InstitutionName4 = mysqli_real_escape_string($con, $_POST['InstitutionName4']);
	$Duration4 = mysqli_real_escape_string($con, $_POST['Duration4']);
	$Club4 = mysqli_real_escape_string($con, $_POST['Club4']);
	
	$Qualification5 = mysqli_real_escape_string($con, $_POST['Qualification5']);
	$InstitutionName5 = mysqli_real_escape_string($con, $_POST['InstitutionName5']);
	$Duration5 = mysqli_real_escape_string($con, $_POST['Duration5']);
	$Club5 = mysqli_real_escape_string($con, $_POST['Club5']);
	
	$Qualification6 = mysqli_real_escape_string($con, $_POST['Qualification6']);
	$InstitutionName6 = mysqli_real_escape_string($con, $_POST['InstitutionName6']);
	$Duration6 = mysqli_real_escape_string($con, $_POST['Duration6']);
	$Club6 = mysqli_real_escape_string($con, $_POST['Club6']);
	
	$insert = mysqli_query($con, "INSERT INTO education (AccountNo, Qualification, InstitutionName, Duration, Club) 
	VALUES ('$AccountNo','$Qualification1' ,'$InstitutionName1', '$Duration1', '$Club1' ),
		   ('$AccountNo','$Qualification2' ,'$InstitutionName2', '$Duration2', '$Club2' ),
		   ('$AccountNo','$Qualification3' ,'$InstitutionName3', '$Duration3', '$Club3' ),
		   ('$AccountNo','$Qualification4' ,'$InstitutionName4', '$Duration4', '$Club4' ),
		   ('$AccountNo','$Qualification5' ,'$InstitutionName5', '$Duration5', '$Club5' ),
		   ('$AccountNo','$Qualification6' ,'$InstitutionName6', '$Duration6', '$Club6' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	$EmploymentType1 = mysqli_real_escape_string($con, $_POST['EmploymentType1']);
	$Employer1 = mysqli_real_escape_string($con, $_POST['Employer1']);
	$Position1 = mysqli_real_escape_string($con, $_POST['Position1']);
	$Salary1 = mysqli_real_escape_string($con, $_POST['Salary1']);
	$Reason1 = mysqli_real_escape_string($con, $_POST['Reason1']);
	$DateJoin1 = mysqli_real_escape_string($con, $_POST['DateJoin1']);
	
	$EmploymentType2 = mysqli_real_escape_string($con, $_POST['EmploymentType2']);
	$Employer2 = mysqli_real_escape_string($con, $_POST['Employer2']);
	$Position2 = mysqli_real_escape_string($con, $_POST['Position2']);
	$Salary2 = mysqli_real_escape_string($con, $_POST['Salary2']);
	$Reason2 = mysqli_real_escape_string($con, $_POST['Reason2']);
	$DateJoin2 = mysqli_real_escape_string($con, $_POST['DateJoin2']);
	
	$EmploymentType3 = mysqli_real_escape_string($con, $_POST['EmploymentType3']);
	$Employer3 = mysqli_real_escape_string($con, $_POST['Employer3']);
	$Position3 = mysqli_real_escape_string($con, $_POST['Position3']);
	$Salary3 = mysqli_real_escape_string($con, $_POST['Salary3']);
	$Reason3 = mysqli_real_escape_string($con, $_POST['Reason3']);
	$DateJoin3 = mysqli_real_escape_string($con, $_POST['DateJoin3']);
	
	$EmploymentType4 = mysqli_real_escape_string($con, $_POST['EmploymentType4']);
	$Employer4 = mysqli_real_escape_string($con, $_POST['Employer4']);
	$Position4 = mysqli_real_escape_string($con, $_POST['Position4']);
	$Salary4 = mysqli_real_escape_string($con, $_POST['Salary4']);
	$Reason4 = mysqli_real_escape_string($con, $_POST['Reason4']);
	$DateJoin4 = mysqli_real_escape_string($con, $_POST['DateJoin4']);
	
	$EmploymentType5 = mysqli_real_escape_string($con, $_POST['EmploymentType5']);
	$Employer5 = mysqli_real_escape_string($con, $_POST['Employer5']);
	$Position5 = mysqli_real_escape_string($con, $_POST['Position5']);
	$Salary5 = mysqli_real_escape_string($con, $_POST['Salary5']);
	$Reason5 = mysqli_real_escape_string($con, $_POST['Reason5']);
	$DateJoin5 = mysqli_real_escape_string($con, $_POST['DateJoin5']);
	
	$EmploymentType6 = mysqli_real_escape_string($con, $_POST['EmploymentType6']);
	$Employer6 = mysqli_real_escape_string($con, $_POST['Employer6']);
	$Position6 = mysqli_real_escape_string($con, $_POST['Position6']);
	$Salary6 = mysqli_real_escape_string($con, $_POST['Salary6']);
	$Reason6 = mysqli_real_escape_string($con, $_POST['Reason6']);
	$DateJoin6 = mysqli_real_escape_string($con, $_POST['DateJoin6']);
	
	$insert = mysqli_query($con, "INSERT INTO employmentrecord (AccountNo, EmploymentType, Employer, Position, Salary, Reason, DateJoin) 
	VALUES ('$AccountNo','$EmploymentType1' ,'$Employer1', '$Position1', '$Salary1', '$Reason1', '$DateJoin1' ),
		   ('$AccountNo','$EmploymentType2' ,'$Employer2', '$Position2', '$Salary2', '$Reason2', '$DateJoin2' ),
		   ('$AccountNo','$EmploymentType3' ,'$Employer3', '$Position3', '$Salary3', '$Reason3', '$DateJoin3' ),
		   ('$AccountNo','$EmploymentType4' ,'$Employer4', '$Position4', '$Salary4', '$Reason4', '$DateJoin4' ),
		   ('$AccountNo','$EmploymentType5' ,'$Employer5', '$Position5', '$Salary5', '$Reason5', '$DateJoin5' ),
		   ('$AccountNo','$EmploymentType6' ,'$Employer6', '$Position6', '$Salary6', '$Reason6', '$DateJoin6' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	$rFirstName1 = mysqli_real_escape_string($con, $_POST['rFirstName1']);
	$rLastName1 = mysqli_real_escape_string($con, $_POST['rLastName1']);
	$rEmployer1 = mysqli_real_escape_string($con, $_POST['rEmployer1']);
	$rContactNo1 = mysqli_real_escape_string($con, $_POST['rContactNo1']);
	$rRelationship1 = mysqli_real_escape_string($con, $_POST['rRelationship1']);
	
	$rFirstName2 = mysqli_real_escape_string($con, $_POST['rFirstName2']);
	$rLastName2 = mysqli_real_escape_string($con, $_POST['rLastName2']);
	$rEmployer2 = mysqli_real_escape_string($con, $_POST['rEmployer2']);
	$rContactNo2 = mysqli_real_escape_string($con, $_POST['rContactNo2']);
	$rRelationship2 = mysqli_real_escape_string($con, $_POST['rRelationship2']);
	
	$rFirstName3 = mysqli_real_escape_string($con, $_POST['rFirstName3']);
	$rLastName3 = mysqli_real_escape_string($con, $_POST['rLastName3']);
	$rEmployer3 = mysqli_real_escape_string($con, $_POST['rEmployer3']);
	$rContactNo3 = mysqli_real_escape_string($con, $_POST['rContactNo3']);
	$rRelationship3 = mysqli_real_escape_string($con, $_POST['rRelationship3']);
	
	$rFirstName4 = mysqli_real_escape_string($con, $_POST['rFirstName4']);
	$rLastName4 = mysqli_real_escape_string($con, $_POST['rLastName4']);
	$rEmployer4 = mysqli_real_escape_string($con, $_POST['rEmployer4']);
	$rContactNo4 = mysqli_real_escape_string($con, $_POST['rContactNo4']);
	$rRelationship4 = mysqli_real_escape_string($con, $_POST['rRelationship4']);
	
	$rFirstName5 = mysqli_real_escape_string($con, $_POST['rFirstName5']);
	$rLastName5 = mysqli_real_escape_string($con, $_POST['rLastName5']);
	$rEmployer5 = mysqli_real_escape_string($con, $_POST['rEmployer5']);
	$rContactNo5 = mysqli_real_escape_string($con, $_POST['rContactNo5']);
	$rRelationship5 = mysqli_real_escape_string($con, $_POST['rRelationship5']);
	
	$rFirstName6 = mysqli_real_escape_string($con, $_POST['rFirstName6']);
	$rLastName6 = mysqli_real_escape_string($con, $_POST['rLastName6']);
	$rEmployer6 = mysqli_real_escape_string($con, $_POST['rEmployer6']);
	$rContactNo6 = mysqli_real_escape_string($con, $_POST['rContactNo6']);
	$rRelationship6 = mysqli_real_escape_string($con, $_POST['rRelationship6']);
	
	$insert = mysqli_query($con, "INSERT INTO reference (AccountNo, FirstName, LastName, Employer, ContactNo, Relationship) 
	VALUES ('$AccountNo','$rFirstName1' ,'$rLastName1', '$rEmployer1', '$rContactNo1', '$rRelationship1' ),
	       ('$AccountNo','$rFirstName2' ,'$rLastName2', '$rEmployer2', '$rContactNo2', '$rRelationship2' ),
		   ('$AccountNo','$rFirstName3' ,'$rLastName3', '$rEmployer3', '$rContactNo3', '$rRelationship3' ),
		   ('$AccountNo','$rFirstName4' ,'$rLastName4', '$rEmployer4', '$rContactNo4', '$rRelationship4' ),
		   ('$AccountNo','$rFirstName5' ,'$rLastName5', '$rEmployer5', '$rContactNo5', '$rRelationship5' ),
		   ('$AccountNo','$rFirstName6' ,'$rLastName6', '$rEmployer6', '$rContactNo6', '$rRelationship6' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
		}
?>





<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php=$_SESSION['username'] ?></span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
     		<div class="nav-left-sidebar sidebar-dark">
			<div class="menu-list">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="d-xl-none d-lg-none" href="#">Dashboard</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav flex-column">
							<li class="nav-divider">
								Menu
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../profile.php"><i class="fa fa-fw fa-user-circle"></i>Profile</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fab fa-rocketchat"></i>Messenger</a>
							</li>
							<li class="nav-divider">
								Explore
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../notification.php"><i class="fas fa-bell"></i>Notifications</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../social/index.php"><i class="fas fa-images"></i>Album</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="../form_user.php"><i class="fas fa-file"></i>Form</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<?php
							if($role == 'admin'||$role == 'superuser')
							echo '<li class="nav-divider">
								Manage
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="form.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="data-tables.php"><i class="fas fa-info"></i>Information</a>
							</li>'
								?>
							<li class="nav-divider">
								Setting
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../logout.php"><i class="fas fa-power-off mr-2"></i>Logout<span class="badge badge-success">6</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
            </div>
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Personal Details  -->
        <!-- ============================================================== -->
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Personal Details</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="efName" name="efName" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="elName" name="elName" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name to be Appeal in Name Card </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eName" name="eName" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id= "eMale" name="eGender" value="Male" checked="" class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="eFemale" name="eGender" value="Female" checked="" class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" data-date-format="YYYY-MM-DD" id="eBirthDate" name="eBirthDate" placeholder="YYYY-MM-DD" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eDepartment"  name="eDepartment" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Designation</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eDesignation" name="eDesignation" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Marital Status</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="eMaritalStatus" value="Married" checked="" class="custom-control-input" ><span class="custom-control-label">Married</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="eMaritalStatus" value="UnMarried" checked="" class="custom-control-input" ><span class="custom-control-label">UnMarried</span>
                                            </label>
                                            
										</div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Marial Date (if any)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eMarialDate" name="eMarialDate" placeholder="YYYY-MM-DD" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Religion </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eReligion" name="eReligion" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Race </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eRace" name="eRace" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Nationality </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id= "eNationality"name="eNationality" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address Line 1</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAddressLine1" name="eAddressLine1" placeholder="Address Line 1" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address Line 2</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAddressLine2" name="eAddressLine2" placeholder="Address Line 2" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">City </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eCity" name="eCity" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Postal Code </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="ePostalCode" name="ePostalCode" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">State </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eState" name="eState" placeholder="" class="form-control">
                                            </div>
										</div>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">House Phone No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" id="eHouseNO" name="eHouseNo" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Income Tax No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" id="eIncome" type="text" id="IncomeTax" name="IncomeTax" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">EPF No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" id="EPF" name="EPF" class="form-control">
                                            </div>
										</div>										
									</div>
									</div>
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BANK ACCOUNT DETAILS</h5>
                                <div class="card-body">
                                    
									
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eBankName" name="eBankName" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Account No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAccountNo" name="eAccountNo" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
								</div>		
							</div>	
						</div>
    <!-- ============================================================== -->
    <!-- Emergency Contact    -->
    <!-- ============================================================== -->							
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Emergency contact</h5>
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecFirstName" name="ecFirstName" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecLastName" name="ecLastName" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecRelationship" name="ecRelationship" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Phone No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecPhoneNo" name="ecPhoneNo" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecAddress" name="ecAddress" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								</div>
							</div>
						</div>

    <!-- ============================================================== -->
    <!-- Famaly Dependent    -->
    <!-- ============================================================== -->							
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                         
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-2" data-toggle="tab" href="#home-justify-2" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-f1" data-toggle="tab" href="#profile-justify-f1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f1" data-toggle="tab" href="#contact-justify-f1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-f2" data-toggle="tab" href="#profile-justify-f2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f2" data-toggle="tab" href="#contact-justify-f2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									 <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f3" data-toggle="tab" href="#contact-justify-f3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  1  -->
    <!-- ============================================================== -->	
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify-2" role="tabpanel" aria-labelledby="home-tab-justify-2">
                                        <h3>Family / Dependent Details 1</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName7" name="FirstName7" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName7" name="LastName7" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship7" name="Relationship7" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship7" name="Relationship7" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender7" name="Gender7" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender7" name="Gender7" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC7" name="NRIC7" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate7" name="BirthDate7" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age7" name="Age7" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation7" name="Occupation7" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  2  -->
    <!-- ============================================================== -->										
                                    <div class="tab-pane fade" id="profile-justify-f1" role="tabpanel" aria-labelledby="profile-tab-justify-f1">
                                        <h3>Family / Dependent Details 2</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName8" name="FirstName8" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName8" name="LastName8" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship8" name="Relationship8" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship8" name="Relationship8" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender8" name="Gender8" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender8" name="Gender8" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC8" name="NRIC8" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate8" name="BirthDate8" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age8" name="Age8" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation8" name="Occupation8" type="text"  placeholder="" class="form-control">
                                            </div>
											</div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  3  -->
    <!-- ============================================================== -->											
                                    <div class="tab-pane fade" id="contact-justify-f1" role="tabpanel" aria-labelledby="contact-tab-justify-f1">
                                     <h3>Family / Dependent Details 3</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName9" name="FirstName9" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName9" name="LastName9" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship9" name="Relationship9" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship9" name="Relationship9" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender9" name="Gender9" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender9" name="Gender9" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC9" name="NRIC9" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate9" name="BirthDate9" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age9" name="Age9" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation9" name="Occupation9" type="text"  placeholder="" class="form-control">
                                            </div>   
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  4  -->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="profile-justify-f2" role="tabpanel" aria-labelledby="profile-tab-justify-f2">
                                    <h3>Family / Dependent Details 4</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName10" name="FirstName10" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName10" name="LastName10" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship10" name="Relationship10" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship10" name="Relationship10" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender10" name="Gender10" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender10" name="Gender10" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC10" name="NRIC10" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate10" name="BirthDate10" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age10" name="Age10" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation10" name="Occupation10" type="text"  placeholder="" class="form-control">
                                            </div>     
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  5  -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-f2" role="tabpanel" aria-labelledby="contact-tab-justify-f2">
                                    <h3>Family / Dependent Details 5</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName11" name="FirstName11" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName11" name="LastName11" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship11" name="Relationship11" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship11" name="Relationship11" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender11" name="Gender11" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender11" name="Gender11" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC11" name="NRIC11" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate11" name="BirthDate11" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age11" name="Age11" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation11" name="Occupation11" type="text"  placeholder="" class="form-control">
                                            </div>       
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  6  -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-f3" role="tabpanel" aria-labelledby="contact-tab-justify-f3">
                                     <h3>Family / Dependent Details 6</h3>
													<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName12" name="FirstName12" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName12" name="LastName12" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship12" name="Relationship12" value="Spouse" class="custom-control-input" ><span class="custom-control-label">Spouse</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship12" name="Relationship12" value="Child"  class="custom-control-input" ><span class="custom-control-label">Child</span>
                                            </label>                                           
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender12" name="Gender12" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender12" name="Gender12" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC12" name="NRIC12" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate12" name="BirthDate12" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age12" name="Age12" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation12" name="Occupation12" type="text"  placeholder="" class="form-control">
                                            </div>       
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
    <!-- ============================================================== -->
    <!-- Other Family Details   -->
    <!-- ============================================================== -->	
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-2" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-3" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">6</a>
                                    </li>                                 
                                </ul>
    <!-- ============================================================== -->
    <!-- Other Family Details  1 -->
    <!-- ============================================================== -->	
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
										<h3>Other Family Details 1</h3>
									   <div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName1" name="FirstName1" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName1" name="LastName1" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship1" name="Relationship1" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship1" name="Relationship1" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship1" name="Relationship1" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender1" name="Gender1" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender1" name="Gender1" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC1" name="NRIC1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate1" name="BirthDate1" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
										
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age1" name="Age1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation1" name="Occupation1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  2 -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                        <h3>Other Family Details 2</h3>
										<div class="form-group row">
										
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName2" name="FirstName2" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName2" name="LastName2" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship2" name="Relationship2" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship2" name="Relationship2" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship2" name="Relationship2" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender2" name="Gender2" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender2" name="Gender2" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC2" name="NRIC2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate2" name="BirthDate2" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age2" name="Age2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation2" name="Occupation2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  3 -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                                        <h3>Other Family Details 3</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName3" name="FirstName3" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName3" name="LastName3" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship3" name="Relationship3" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship3" name="Relationship3" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship3" name="Relationship3" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender3" name="Gender3" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender3" name="Gender3" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC3" name="NRIC3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate3" name="BirthDate3" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age3" name="Age3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation3" name="Occupation3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  4 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab-justify-1">
                                        <h3>Other Family Details 4</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName4" name="FirstName4" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName4" name="LastName4" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship4" name="Relationship4" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship4" name="Relationship4" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship4" name="Relationship4" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender4" name="Gender4" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender4" name="Gender4" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC4" name="NRIC4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
																											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate4" name="BirthDate4" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
										
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age4" name="Age4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation4" name="Occupation4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>		
    <!-- ============================================================== -->
    <!-- Other Family Details  5 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab-justify-2">
                                        <h3>Other Family Details 5</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName5" name="FirstName5" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName5" name="LastName5" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship5" name="Relationship5" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship5" name="Relationship5" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship5" name="Relationship5" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender5" name="Gender5" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender5" name="Gender5" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC5" name="NRIC5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>																		
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate5" name="BirthDate5" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age5" name="Age5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation5" name="Occupation5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  6 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="contact-tab-justify-3">
                                        <h3>Other Family Details 6</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName6" name="FirstName6" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName6" name="LastName6" placeholder="" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship6" name="Relationship6" value="Father" class="custom-control-input" ><span class="custom-control-label">Father</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship6" name="Relationship6" value="Mother"  class="custom-control-input" ><span class="custom-control-label">Mother</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Relationship6" name="Relationship6" value="Sibling"  class="custom-control-input" ><span class="custom-control-label">Sibling</span>
                                            </label>
										</div>
										</div>
		
								<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender6" name="Gender6" value="Male"  class="custom-control-input" ><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="Gender6" name="Gender6" value="Female"  class="custom-control-input" ><span class="custom-control-label">Female</span>
                                            </label>
                                            
										</div>
										</div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC6" name="NRIC6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate6" name="BirthDate6" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
																				
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age6" name="Age6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation6" name="Occupation6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
							   </div>
                            </div>
                        </div>			
   

    <!-- ============================================================== -->
    <!-- Education Details    --->
    <!-- ============================================================== -->		
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-1" data-toggle="tab" href="#home-justify-1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-edu-1" data-toggle="tab" href="#profile-justify-edu-1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-1" data-toggle="tab" href="#contact-justify-edu-1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-edu-2" data-toggle="tab" href="#profile-justify-edu-2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-2" data-toggle="tab" href="#contact-justify-edu-2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									 <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-3" data-toggle="tab" href="#contact-justify-edu-3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
    <!-- ============================================================== -->
    <!-- Education Details  1  --->
    <!-- ============================================================== -->		
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify-1" role="tabpanel" aria-labelledby="home-tab-justify-1">
                                       <h3>Education Details 1</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName1" name="InstitutionName1" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification1" name="Qualification1" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration1" name="Duration1" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club1" name="Club1" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 2   --->
    <!-- ============================================================== -->											
                                    <div class="tab-pane fade" id="profile-justify-edu-1" role="tabpanel" aria-labelledby="profile-tab-justify-edu-1">
                                        <h3>Education Details 2</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName2" name="InstitutionName2" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification2" name="Qualification2" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration2" name="Duration2" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club2" name="Club2" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 3   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-1" role="tabpanel" aria-labelledby="contact-tab-justify-edu-1">
                                        <h3>Education Details 3</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName3" name="InstitutionName3" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification3" name="Qualification3" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration3" name="Duration3" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club3" name="Club3" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 4   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="profile-justify-edu-2" role="tabpanel" aria-labelledby="profile-tab-justify-edu-2">
                                        <h3>Education Details 4<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName4" name="InstitutionName4" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification4" name="Qualification4" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration4" name="Duration4" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club4" name="Club4" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 5   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-2" role="tabpanel" aria-labelledby="contact-tab-justify-edu-2">
                                        <h3>Education Details 5<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName5" name="InstitutionName5" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification5" name="Qualification5" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration5" name="Duration5" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club5" name="Club5" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 6   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-3" role="tabpanel" aria-labelledby="contact-tab-justify-edu-3">
                                        <h3>Education Details 6<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName6" name="InstitutionName6" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification6" name="Qualification6" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration6" name="Duration6" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club6" name="Club6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						 
						
						
    <!-- ============================================================== -->
    <!-- Employment Record  --->
    <!-- ============================================================== -->							
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">                           
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-er1" data-toggle="tab" href="#home-justify-er1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-er1" data-toggle="tab" href="#profile-justify-er1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er1" data-toggle="tab" href="#contact-justify-er1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-er2" data-toggle="tab" href="#profile-justify-er2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er2" data-toggle="tab" href="#contact-justify-er2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er3" data-toggle="tab" href="#contact-justify-er3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent7">
    <!-- ============================================================== -->
    <!-- Employment Record 1 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade show active" id="home-justify-er1" role="tabpanel" aria-labelledby="home-tab-justify-er1">
                                        <h3>Employment Record 1</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType1" name="EmploymentType1" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType1" name="EmploymentType1" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer1" name="Employer1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position1" required="Position1" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary1" required="Salary1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason1" required="Reason1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin1" required="DateJoin1" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 2 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="profile-justify-er1" role="tabpanel" aria-labelledby="profile-tab-justify-er1">
                                         <h3>Employment Record 2</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType2" name="EmploymentType2" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType2" name="EmploymentType2" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer2" name="Employer2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position2" required="Position2" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary2" required="Salary2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason2" required="Reason2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin2" required="DateJoin2" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 3 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-er1" role="tabpanel" aria-labelledby="contact-tab-justify-er1">
                                         <h3>Employment Record 3</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType3" name="EmploymentType3" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType3" name="EmploymentType3" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer3" name="Employer3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position3" required="Position3" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary3" required="Salary3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason3" required="Reason3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin3" required="DateJoin3" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 4 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="profile-justify-er2" role="tabpanel" aria-labelledby="profile-tab-justify-er2">
                                         <h3>Employment Record 4</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType4" name="EmploymentType4" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType4" name="EmploymentType4" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer4" name="Employer4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position4" required="Position4" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary4" required="Salary4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason4" required="Reason4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin4" required="DateJoin4" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 5 --->
    <!-- ============================================================== -->										
                                    <div class="tab-pane fade" id="contact-justify-er2" role="tabpanel" aria-labelledby="contact-tab-justify-er2">
                                         <h3>Employment Record 5</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType5" name="EmploymentType5" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType5" name="EmploymentType5" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer5" name="Employer5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position5" required="Position5" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary5" required="Salary5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason5" required="Reason5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin5" required="DateJoin5" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 6 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="contact-justify-er3" role="tabpanel" aria-labelledby="contact-tab-justify-er3">
                                         <h3>Employment Record 6</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType6" name="EmploymentType6" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType6" name="EmploymentType6" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer6" name="Employer6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position6" required="Position6" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary6" required="Salary6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason6" required="Reason6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin6" required="DateJoin6" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						

						
	<!-- ============================================================== -->
    <!-- References--->
    <!-- ============================================================== -->		
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-r1" data-toggle="tab" href="#home-justify-r1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-r1" data-toggle="tab" href="#profile-justify-r1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r1" data-toggle="tab" href="#contact-justify-r1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-r2" data-toggle="tab" href="#profile-justify-r2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r2" data-toggle="tab" href="#contact-justify-r2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r3" data-toggle="tab" href="#contact-justify-r3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent7">
	<!-- ============================================================== -->
    <!-- References 1--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade show active" id="home-justify-r1" role="tabpanel" aria-labelledby="home-tab-justify-r1">
                                       <h3>References 1</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName1" name="rFirstName1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName1" name="rLastName1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer1" name="rEmployer1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo1" name="rContactNo1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship1" name="rRelationship1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
									
									
	<!-- ============================================================== -->
    <!-- References 2--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="profile-justify-r1" role="tabpanel" aria-labelledby="profile-tab-justify-r1">
                                     <h3>References 2</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName2" name="rFirstName2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName2" name="rLastName2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer2" name="rEmployer2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo2" name="rContactNo2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship2" name="rRelationship2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>   
                                    </div>
	<!-- ============================================================== -->
    <!-- References 3--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-r1" role="tabpanel" aria-labelledby="contact-tab-justify-r1">
                                        <h3>References 3</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName3" name="rFirstName3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName3" name="rLastName3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer3" name="rEmployer3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo3" name="rContactNo3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship3" name="rRelationship3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 4--->
    <!-- ============================================================== -->	
									<div class="tab-pane fade" id="profile-justify-r2" role="tabpanel" aria-labelledby="profile-tab-justify-r2">
                                        <h3>References 4</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName4" name="rFirstName4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName4" name="rLastName4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer4" name="rEmployer4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo4" name="rContactNo4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship4" name="rRelationship4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 5--->
    <!-- ============================================================== -->		
									<div class="tab-pane fade" id="contact-justify-r2" role="tabpanel" aria-labelledby="contact-tab-justify-r2">
                                        <h3>References 5</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName5" name="rFirstName5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName5" name="rLastName5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer5" name="rEmployer5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo5" name="rContactNo5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship5" name="rRelationship5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 6--->
    <!-- ============================================================== -->	
									<div class="tab-pane fade" id="contact-justify-r3" role="tabpanel" aria-labelledby="contact-tab-justify-r3">
                                        <h3>References 6</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName6" name="rFirstName6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName6" name="rLastName6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer6" name="rEmployer6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo6" name="rContactNo6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship6" name="rRelationship6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	
                                </div>
                            </div>
                        </div>

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Further Information</h5>
								
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please elaborate :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please provide details :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Declaration</h5>								
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If so, please provide their Name, Relationship with you, and their Present jobs, (if known)</label>
                                            
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Please provide the Name of anyone in :<br/> CCBM/ CCRM known to you personally </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please stated the Dates and Position applied for</label>
                                            
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position Applied:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Additional Information</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right"></label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" checked="checked" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I hereby
										declared that the information given by me in this form is accurate and true to the<br/>
										best of my knowldge and subject to validation By Coca-Cola Bottlers Malaysia Sdn. Bhd. (CCBM) <br/>
										/ Coca-Cola Refreshment Malaysia Sdn. Bhd. (CCRM).</span>
                                                    </label>
													<label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" checked="checked" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I fully
										understand and accept that if anytime after i am employed and it is found that<br/>
										a false declaration has been made in the form, the company has the right to terminate <br/>
										my employment</span>
                                                    </label>
										</div>
                                        </div>
										</div>
										
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                    </div>
								</div>
							</div>
						</div>																																													
						</form>
			
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>



</body>
 
</html>