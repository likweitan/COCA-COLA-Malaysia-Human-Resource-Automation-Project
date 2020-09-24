<?php
include '../db.php';
require"../loginheader.php";

	$enrolment_type = $_POST['EnrolmentType'];
	$plan = $_POST['Plan'];
	$dependent_coverage = $_POST['Coverage'];
	$dependent_name1 = $_POST['DependentName1'];
$dependent_name2 = $_POST['DependentName2'];
$dependent_name3 = $_POST['DependentName3'];
$dependent_name4 = $_POST['DependentName4'];
$dependent_name5 = $_POST['DependentName5'];
$dependent_name6 = $_POST['DependentName6'];
$dependent_relationship1 = $_POST['Relationship1'];
$dependent_relationship2 = $_POST['Relationship2'];
$dependent_relationship3 = $_POST['Relationship3'];
$dependent_relationship4 = $_POST['Relationship4'];
$dependent_relationship5 = $_POST['Relationship5'];
$dependent_relationship6 = $_POST['Relationship6'];
$dependent_NRIC1 = $_POST['NRIC1'];
$dependent_NRIC2 = $_POST['NRIC2'];
$dependent_NRIC3 = $_POST['NRIC3'];
$dependent_NRIC4 = $_POST['NRIC4'];
$dependent_NRIC5 = $_POST['NRIC5'];
$dependent_NRIC6 = $_POST['NRIC6'];

$deduction_per_month = $_POST['Deduction'];

	// File upload path
$targetDir = "../attachment/certificate/";
$fileName = basename($_FILES["spouse"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["spouse"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["spouse"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
			$spousefile = $fileName;
		}
		$error = "There is something wrong, please try again later.";
			$_SESSION["error"] = $error;
	}
}

if(isset($_POST['submit'])){
	$sql = "SELECT * FROM medical WHERE AccountNo='".$account."'";
	$query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query);
		
	if(!$count)
	{
	$sql = "INSERT INTO medical (AccountNo, Bhd, EnrolmentType, Plan, Coverage, Deduction, SpouseMedical, ChildrenMedical) VALUES ('$employeeno',' ','$enrolment_type', '$plan', '$dependent_coverage','$deduction_per_month','$spousefile','$childrenfile')";	
	$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		$medicalid = $row['MedicalId'];
	
	if($query){
		$sql = "SELECT MedicalId from medical WHERE AccountNo=$employeeno";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		$medicalid = $row['MedicalId'];
		

			$sql = "INSERT INTO medicaldependent (MedicalId	,DependentName1,Relationship1,DependentNRIC1,DependentName2,Relationship2,DependentNRIC2,DependentName3,Relationship3,DependentNRIC3,DependentName4,Relationship4,DependentNRIC4,DependentName5,Relationship5,DependentNRIC5,DependentName6,Relationship6,DependentNRIC6) VALUES ('$medicalid','$dependent_name1','$dependent_relationship1','$dependent_NRIC1','$dependent_name2','$dependent_relationship2','$dependent_NRIC2','$dependent_name3','$dependent_relationship3','$dependent_NRIC3','$dependent_name4','$dependent_relationship4','$dependent_NRIC4','$dependent_name5','$dependent_relationship5','$dependent_NRIC5','$dependent_name6','$dependent_relationship6','$dependent_NRIC6')";
			$query = mysqli_query($con, $sql);
	}
		else
		{
			$error = "There is something wrong, please try again later.";
			$_SESSION["error"] = $error;
		}
		$error = $_POST['Relationship2'];
			$_SESSION["error"] = $error;
	}
	else
	{
		$error = "You have already submitted.";
		$_SESSION["error"] = $error;
	}
	header("location: dependent_medical_benefits_enrolment_form.php?action=insert");
}

?>