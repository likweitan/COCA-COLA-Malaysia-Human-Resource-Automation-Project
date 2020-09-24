<?php
include ("../db.php");
	include "../loginheader.php";

$sql = "SELECT * FROM uniform WHERE AccountNo='".$employeeno."'";
	$query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query);
		
	if(!$count)
	{
	$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $employeeno. "'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	$AccountNo = $employeeno;
	$FirstName = $_POST['efName'];
	$LastName = $_POST['elName'];
	$NameCard = $_POST['eName'];
	$Gender = $_POST['eGender'];
	$BirthDate = $_POST['eBirthDate'];
	$Department = $_POST['eDepartment'];
	$Designation = $_POST['eDesignation'];
	$MaritalStatus = $_POST['eMaritalStatus'];
	$Religion = $_POST['eReligion'];
	$Race = $_POST['eRace'];
	$Nationality = $_POST['eNationality'];
	$HouseNo = $_POST['eHouseNo'];
	$AddressLine1 = $_POST['eAddressLine1'];
	$AddressLine2 = $_POST['eAddressLine2'];
	$City = $_POST['eCity'];
	$PostalCode = $_POST['ePostalCode'];
	$State = $_POST['eState'];
	$IncomeTax = $_POST['IncomeTax'];
	$EPF = $_POST['EPF'];
		
	$sql = 'SELECT EmployeeId FROM employee WHERE AccountNo="'.$employeeno.'" ORDER BY AccountNo DESC LIMIT 1';
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
		
	if($row){
		$EmployeeId = $row['EmployeeId'];
	}

if(!$row){
	
	
		
	$insert = mysqli_query($con, "INSERT INTO employee (AccountNo, FirstName, LastName, NameCard,  Gender,  BirthDate, Department, Designation, MaritalStatus, Religion, Race, Nationality,  HouseNo, AddressLine1, AddressLine2, City, PostalCode, State, IncomeTax, EPF) 
	VALUES ('$AccountNo','$FirstName','$LastName' , '$NameCard',  '$Gender',  '$BirthDate', '$Department', '$Designation', '$MaritalStatus', '$Religion', '$Race', '$Nationality',  '$HouseNo', '$AddressLine1', '$AddressLine2', '$City', '$PostalCode', '$State','$IncomeTax', '$EPF' )");
}else{
	$update = mysqli_query($con, "UPDATE employee SET FirstName='$FirstName',LastName='$LastName',NameCard='$NameCard',Gender='$Gender',Department='$Department',Designation='$Designation',MaritalStatus='$MaritalStatus',Religion='$Religion',Race='$Race',Nationality='$Nationality',HouseNo='$HouseNo',AddressLine1='$AddressLine1',AddressLine2='$AddressLine2',City='$City',PostalCode='$PostalCode',State='$State',IncomeTax='$IncomeTax',EPF='$EPF' WHERE EmployeeId=$EmployeeId");
}

	// bank
	$BankName = $_POST['eBankName'];
	$BankAccount = $_POST['eAccountNo'];
	
	// family
	$FirstName1 = $_POST['FirstName1'];
	$LastName1 = $_POST['LastName1'];
	$Gender1 = $_POST['Gender1'];
	$Relationship1 = $_POST['Relationship1'];
	$NRIC1 = $_POST['NRIC1'];
	$BirthDate1 = $_POST['BirthDate1'];
	$Age1 = $_POST['Age1'];
	$Occupation1 = $_POST['Occupation1'];
	
	$FirstName2 = $_POST['FirstName2'];
	$LastName2 = $_POST['LastName2'];
	$Gender2 = $_POST['Gender2'];
	$Relationship2 = $_POST['Relationship2'];
	$NRIC2 = $_POST['NRIC2'];
	$BirthDate2 = $_POST['BirthDate2'];
	$Age2 = $_POST['Age2'];
	$Occupation2 = $_POST['Occupation2'];
	
	$FirstName3 = $_POST['FirstName3'];
	$LastName3 = $_POST['LastName3'];
	$Gender3 = $_POST['Gender3'];
	$Relationship3 = $_POST['Relationship3'];
	$NRIC3 = $_POST['NRIC3'];
	$BirthDate3 = $_POST['BirthDate3'];
	$Age3 = $_POST['Age3'];
	$Occupation3 = $_POST['Occupation3'];
	
	$FirstName4 = $_POST['FirstName4'];
	$LastName4 = $_POST['LastName4'];
	$Gender4 = $_POST['Gender4'];
	$Relationship4 = $_POST['Relationship4'];
	$NRIC4 = $_POST['NRIC4'];
	$BirthDate4 = $_POST['BirthDate4'];
	$Age4 = $_POST['Age4'];
	$Occupation4 = $_POST['Occupation4'];
	
	$FirstName5 = $_POST['FirstName5'];
	$LastName5 = $_POST['LastName5'];
	$Gender5 = $_POST['Gender5'];
	$Relationship5 = $_POST['Relationship5'];
	$NRIC5 = $_POST['NRIC5'];
	$BirthDate5 = $_POST['BirthDate5'];
	$Age5 = $_POST['Age5'];
	$Occupation5 = $_POST['Occupation5'];
	
	$FirstName6 = $_POST['FirstName6'];
	$LastName6 = $_POST['LastName6'];
	$Gender6 = $_POST['Gender6'];
	$Relationship6 = $_POST['Relationship6'];
	$NRIC6 = $_POST['NRIC6'];
	$BirthDate6 = $_POST['BirthDate6'];
	$Age6 = $_POST['Age6'];
	$Occupation6 = $_POST['Occupation6'];

	$FirstName7 = $_POST['FirstName7'];
	$LastName7 = $_POST['LastName7'];
	$Gender7 = $_POST['Gender7'];
	$Relationship7 = $_POST['Relationship7'];
	$NRIC7 = $_POST['NRIC7'];
	$BirthDate7 = $_POST['BirthDate7'];
	$Age7 = $_POST['Age7'];
	$Occupation7 = $_POST['Occupation7'];
	
	$FirstName8 = $_POST['FirstName8'];
	$LastName8 = $_POST['LastName8'];
	$Gender8 = $_POST['Gender8'];
	$Relationship8 = $_POST['Relationship8'];
	$NRIC8 = $_POST['NRIC8'];
	$BirthDate8 = $_POST['BirthDate8'];
	$Age8 = $_POST['Age8'];
	$Occupation8 = $_POST['Occupation8'];
	
	$FirstName9 = $_POST['FirstName9'];
	$LastName9 = $_POST['LastName9'];
	$Gender9 = $_POST['Gender9'];
	$Relationship9 = $_POST['Relationship9'];
	$NRIC9 = $_POST['NRIC9'];
	$BirthDate9 = $_POST['BirthDate9'];
	$Age9 = $_POST['Age9'];
	$Occupation9 = $_POST['Occupation9'];
	
	$FirstName10 = $_POST['FirstName10'];
	$LastName10 = $_POST['LastName10'];
	$Gender10 = $_POST['Gender10'];
	$Relationship10 = $_POST['Relationship10'];
	$NRIC10 = $_POST['NRIC10'];
	$BirthDate10 = $_POST['BirthDate10'];
	$Age10 = $_POST['Age10'];
	$Occupation10 = $_POST['Occupation10'];
	
	$FirstName11 = $_POST['FirstName11'];
	$LastName11 = $_POST['LastName11'];
	$Gender11 = $_POST['Gender11'];
	$Relationship11 = $_POST['Relationship11'];
	$NRIC11 = $_POST['NRIC11'];
	$BirthDate11 = $_POST['BirthDate11'];
	$Age11 = $_POST['Age11'];
	$Occupation11 = $_POST['Occupation11'];
	
	$FirstName12 = $_POST['FirstName12'];
	$LastName12 = $_POST['LastName12'];
	$Gender12 = $_POST['Gender12'];
	$Relationship12 = $_POST['Relationship12'];
	$NRIC12 = $_POST['NRIC12'];
	$BirthDate12 = $_POST['BirthDate12'];
	$Age12 = $_POST['Age1'];
	$Occupation12 = $_POST['Occupation12'];
	
	// emergency contact
	$FirstName = $_POST['ecFirstName'];
	$LastName = $_POST['ecLastName'];
	$Relationship = $_POST['ecRelationship'];
	$Address = $_POST['ecAddress'];
	$PhoneNo = $_POST['ecPhoneNo'];

	// education
	$Qualification1 = $_POST['Qualification1'];
	$InstitutionName1 = $_POST['InstitutionName1'];
	$Duration1 = $_POST['Duration1'];
	$Club1 = $_POST['Club1'];
	
	$Qualification2 = $_POST['Qualification2'];
	$InstitutionName2 = $_POST['InstitutionName2'];
	$Duration2 = $_POST['Duration2'];
	$Club2 = $_POST['Club2'];
	
	$Qualification3 = $_POST['Qualification3'];
	$InstitutionName3 = $_POST['InstitutionName3'];
	$Duration3 = $_POST['Duration3'];
	$Club3 = $_POST['Club3'];
	
	$Qualification4 = $_POST['Qualification4'];
	$InstitutionName4 = $_POST['InstitutionName4'];
	$Duration4 = $_POST['Duration4'];
	$Club4 = $_POST['Club4'];
	
	$Qualification5 = $_POST['Qualification5'];
	$InstitutionName5 = $_POST['InstitutionName5'];
	$Duration5 = $_POST['Duration5'];
	$Club5 = $_POST['Club5'];
	
	$Qualification6 = $_POST['Qualification6'];
	$InstitutionName6 = $_POST['InstitutionName6'];
	$Duration6 = $_POST['Duration6'];
	$Club6 = $_POST['Club6'];

	// employment
	$EmploymentType1 = $_POST['EmploymentType1'];
	$Employer1 = $_POST['Employer1'];
	$Position1 = $_POST['Position1'];
	$Salary1 = $_POST['Salary1'];
	$Reason1 = $_POST['Reason1'];
	$DateJoin1 = $_POST['DateJoin1'];
	
	$EmploymentType2 = $_POST['EmploymentType2'];
	$Employer2 = $_POST['Employer2'];
	$Position2 = $_POST['Position2'];
	$Salary2 = $_POST['Salary2'];
	$Reason2 = $_POST['Reason2'];
	$DateJoin2 = $_POST['DateJoin2'];
	
	$EmploymentType3 = $_POST['EmploymentType3'];
	$Employer3 = $_POST['Employer3'];
	$Position3 = $_POST['Position3'];
	$Salary3 = $_POST['Salary3'];
	$Reason3 = $_POST['Reason3'];
	$DateJoin3 = $_POST['DateJoin3'];
	
	$EmploymentType4 = $_POST['EmploymentType4'];
	$Employer4 = $_POST['Employer4'];
	$Position4 = $_POST['Position4'];
	$Salary4 = $_POST['Salary4'];
	$Reason4 = $_POST['Reason4'];
	$DateJoin4 = $_POST['DateJoin4'];
	
	$EmploymentType5 = $_POST['EmploymentType5'];
	$Employer5 = $_POST['Employer5'];
	$Position5 = $_POST['Position5'];
	$Salary5 = $_POST['Salary5'];
	$Reason5 = $_POST['Reason5'];
	$DateJoin5 = $_POST['DateJoin5'];
	
	$EmploymentType6 = $_POST['EmploymentType6'];
	$Employer6 = $_POST['Employer6'];
	$Position6 = $_POST['Position6'];
	$Salary6 = $_POST['Salary6'];
	$Reason6 = $_POST['Reason6'];
	$DateJoin6 = $_POST['DateJoin6'];

	// reference
	$rFirstName1 = $_POST['rFirstName1'];
	$rLastName1 = $_POST['rLastName1'];
	$rEmployer1 = $_POST['rEmployer1'];
	$rContactNo1 = $_POST['rContactNo1'];
	$rRelationship1 = $_POST['rRelationship1'];
	
	$rFirstName2 = $_POST['rFirstName2'];
	$rLastName2 = $_POST['rLastName2'];
	$rEmployer2 = $_POST['rEmployer2'];
	$rContactNo2 = $_POST['rContactNo2'];
	$rRelationship2 = $_POST['rRelationship2'];
	
	$rFirstName3 = $_POST['rFirstName3'];
	$rLastName3 = $_POST['rLastName3'];
	$rEmployer3 = $_POST['rEmployer3'];
	$rContactNo3 = $_POST['rContactNo3'];
	$rRelationship3 = $_POST['rRelationship3'];
	
	$rFirstName4 = $_POST['rFirstName4'];
	$rLastName4 = $_POST['rLastName4'];
	$rEmployer4 = $_POST['rEmployer4'];
	$rContactNo4 = $_POST['rContactNo4'];
	$rRelationship4 = $_POST['rRelationship4'];
	
	$rFirstName5 = $_POST['rFirstName5'];
	$rLastName5 = $_POST['rLastName5'];
	$rEmployer5 = $_POST['rEmployer5'];
	$rContactNo5 = $_POST['rContactNo5'];
	$rRelationship5 = $_POST['rRelationship5'];
	
	$rFirstName6 = $_POST['rFirstName6'];
	$rLastName6 = $_POST['rLastName6'];
	$rEmployer6 = $_POST['rEmployer6'];
	$rContactNo6 = $_POST['rContactNo6'];
	$rRelationship6 = $_POST['rRelationship6'];
	
	$insert = mysqli_query($con, "INSERT INTO bank (EmployeeId, BankName, BankAccount) 
	VALUES ('$EmployeeId', '$BankName' ,'$BankAccount' )");
	
	$insert = mysqli_query($con, "INSERT INTO family (EmployeeId, FirstName, LastName, Gender, Relationship, NRIC, BirthDate, Age, Occupation) 
	VALUES ('$EmployeeId', '$FirstName7' ,'$LastName7', '$Gender7', '$Relationship7', '$NRIC7', '$BirthDate7', '$Age7','$Occupation7' ),
	       ('$EmployeeId', '$FirstName8' ,'$LastName8', '$Gender8', '$Relationship8', '$NRIC8', '$BirthDate8', '$Age8','$Occupation8' ),
		   ('$EmployeeId', '$FirstName9' ,'$LastName9', '$Gender9', '$Relationship9', '$NRIC9', '$BirthDate9', '$Age9','$Occupation9' ),
		   ('$EmployeeId', '$FirstName10' ,'$LastName10', '$Gender10', '$Relationship10', '$NRIC10', '$BirthDate10', '$Age10','$Occupation10' ),
	       ('$EmployeeId', '$FirstName11' ,'$LastName11', '$Gender11', '$Relationship11', '$NRIC11', '$BirthDate11', '$Age11','$Occupation11' ),
		   ('$EmployeeId', '$FirstName12' ,'$LastName12', '$Gender12', '$Relationship12', '$NRIC12', '$BirthDate12', '$Age12','$Occupation12' ),
		   ('$EmployeeId', '$FirstName1' ,'$LastName1', '$Gender1', '$Relationship1', '$NRIC1', '$BirthDate1', '$Age1','$Occupation1' ),
	       ('$EmployeeId', '$FirstName2' ,'$LastName2', '$Gender2', '$Relationship2', '$NRIC2', '$BirthDate2', '$Age2','$Occupation2' ),
		   ('$EmployeeId', '$FirstName3' ,'$LastName3', '$Gender3', '$Relationship3', '$NRIC3', '$BirthDate3', '$Age3','$Occupation3' ),
		   ('$EmployeeId', '$FirstName4' ,'$LastName4', '$Gender4', '$Relationship4', '$NRIC4', '$BirthDate4', '$Age4','$Occupation4' ),
		   ('$EmployeeId', '$FirstName5' ,'$LastName5', '$Gender5', '$Relationship5', '$NRIC5', '$BirthDate5', '$Age5','$Occupation5' ),
		   ('$EmployeeId', '$FirstName6' ,'$LastName6', '$Gender6', '$Relationship6', '$NRIC6', '$BirthDate6', '$Age6','$Occupation6' )");
	
	$insert = mysqli_query($con, "INSERT INTO emergencycontact (EmployeeId, FirstName, LastName, Relationship, Address, PhoneNo) 
	VALUES ('$EmployeeId','$FirstName' ,'$LastName', '$Relationship', '$Address', '$PhoneNo' )");
	
	
	$insert = mysqli_query($con, "INSERT INTO education (EmployeeId, Qualification, InstitutionName, Duration, Club) 
	VALUES ('$EmployeeId','$Qualification1' ,'$InstitutionName1', '$Duration1', '$Club1' ),
		   ('$EmployeeId','$Qualification2' ,'$InstitutionName2', '$Duration2', '$Club2' ),
		   ('$EmployeeId','$Qualification3' ,'$InstitutionName3', '$Duration3', '$Club3' ),
		   ('$EmployeeId','$Qualification4' ,'$InstitutionName4', '$Duration4', '$Club4' ),
		   ('$EmployeeId','$Qualification5' ,'$InstitutionName5', '$Duration5', '$Club5' ),
		   ('$EmployeeId','$Qualification6' ,'$InstitutionName6', '$Duration6', '$Club6' )");
	
	$insert = mysqli_query($con, "INSERT INTO employmentrecord (EmployeeId, EmploymentType, Employer, Position, Salary, Reason, DateJoin) 
	VALUES ('$EmployeeId','$EmploymentType1' ,'$Employer1', '$Position1', '$Salary1', '$Reason1', '$DateJoin1' ),
		   ('$EmployeeId','$EmploymentType2' ,'$Employer2', '$Position2', '$Salary2', '$Reason2', '$DateJoin2' ),
		   ('$EmployeeId','$EmploymentType3' ,'$Employer3', '$Position3', '$Salary3', '$Reason3', '$DateJoin3' ),
		   ('$EmployeeId','$EmploymentType4' ,'$Employer4', '$Position4', '$Salary4', '$Reason4', '$DateJoin4' ),
		   ('$EmployeeId','$EmploymentType5' ,'$Employer5', '$Position5', '$Salary5', '$Reason5', '$DateJoin5' ),
		   ('$EmployeeId','$EmploymentType6' ,'$Employer6', '$Position6', '$Salary6', '$Reason6', '$DateJoin6' )");
	
	$insert = mysqli_query($con, "INSERT INTO reference (EmployeeId, FirstName, LastName, Employer, ContactNo, Relationship) 
	VALUES ('$EmployeeId','$rFirstName1' ,'$rLastName1', '$rEmployer1', '$rContactNo1', '$rRelationship1' ),
	       ('$EmployeeId','$rFirstName2' ,'$rLastName2', '$rEmployer2', '$rContactNo2', '$rRelationship2' ),
		   ('$EmployeeId','$rFirstName3' ,'$rLastName3', '$rEmployer3', '$rContactNo3', '$rRelationship3' ),
		   ('$EmployeeId','$rFirstName4' ,'$rLastName4', '$rEmployer4', '$rContactNo4', '$rRelationship4' ),
		   ('$EmployeeId','$rFirstName5' ,'$rLastName5', '$rEmployer5', '$rContactNo5', '$rRelationship5' ),
		   ('$EmployeeId','$rFirstName6' ,'$rLastName6', '$rEmployer6', '$rContactNo6', '$rRelationship6' )");
		
	if($insert)
		{
			$error = "Your data has been recorded into the database.";
			$_SESSION["error"] = $error;

		}
		else
		{
			$error = "There is something wrong, please try again later.";
			$_SESSION["error"] = $error;
		}
		
	}else{
	$error = "You have already submitted.";
		$_SESSION["error"] = $error;
}
header("location: job_application_form.php?action=insert");
?>