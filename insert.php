<?php
include("html.php");
	if(isset($_POST['submit'])){
	$employeeID	= "1";
	$Question1 = mysqli_real_escape_string($con, $_POST['Question1']);
	$Question2 = mysqli_real_escape_string($con, $_POST['Question2']);
	$Question3 = mysqli_real_escape_string($con, $_POST['Question3']);
	$Question4 = mysqli_real_escape_string($con, $_POST['Question4']);
	$Question6 = mysqli_real_escape_string($con, $_POST['Question6']);
		echo "err";
	$insert = mysqli_query($con, "INSERT INTO survey (EmployeeId, Question1, Question2, Question3, Question4, Question6) VALUES ('$employeeID','$Question1', '$Question2', '$Question3', '$Question4', '$Question6')");
		if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	}
echo "no err";
	
?>	