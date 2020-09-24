<?php
include '../db.php';
require"../loginheader.php";

	$enrolment_type = $_POST['EnrolmentType'];
	$plan = $_POST['Plan'];
	$dependent_coverage = $_POST['Coverage'];
	$dependent_name_1 = $_POST['DependentName1'];
	$dependent_name_2 = $_POST['DependentName2'];
	$dependent_name_3 = $_POST['DependentName3'];
	$dependent_name_4 = $_POST['DependentName4'];
	$dependent_name_5 = $_POST['DependentName5'];
	$dependent_relationship_1 = $_POST['Relationship1'];
	$dependent_relationship_2 = $_POST['Relationship2'];
	$dependent_relationship_3 = $_POST['Relationship3'];
	$dependent_relationship_4 = $_POST['Relationship4'];
	$dependent_relationship_5 = $_POST['Relationship5'];
	$dependent_NRIC1 = $_POST['NRIC1'];
	$dependent_NRIC2 = $_POST['NRIC2'];
	$dependent_NRIC3 = $_POST['NRIC3'];
	$dependent_NRIC4 = $_POST['NRIC4'];
	$dependent_NRIC5 = $_POST['NRIC5'];
	
	$deduction_per_month = $_POST['Deduction'];

if(isset($_POST['submit'])){
	$sql = "INSERT INTO medical (AccountNo, EnrolmentType, Plan, Coverage,  Total	) VALUES (  '$AccountNo','$EnrolmentType', '$Plan', '$Coverage','$Total')";	

	$query = mysqli_query($con, $sql);
	
	$sql = "INSERT INTO medical (DependentName, Relationship, NRIC) 
	VALUES  ('$DependentName1','$Relationship1', '$NRIC1'),
			('$DependentName2','$Relationship2', '$NRIC2'), 
			('$DependentName3','$Relationship3', '$NRIC3'),
			('$DependentName4','$Relationship4', '$NRIC4'),
			('$DependentName5','$Relationship5', '$NRIC5'),
			('$DependentName5','$Relationship6', '$NRIC6')";
			
			
}
?>