	<?php
include("../db.php");
	echo "<h1>aa</h1>";
	if(isset($_POST['submit'])){
		echo "aa";
	$Question1 = mysqli_real_escape_string($con, $_POST['Question1']);
	$Question2 = mysqli_real_escape_string($con, $_POST['Question2']);
	$Question3 = mysqli_real_escape_string($con, $_POST['Question3']);
	$Question4 = mysqli_real_escape_string($con, $_POST['Question4']);
	$Question5 = mysqli_real_escape_string($con, $_POST['Question5']);
	$Question6 = mysqli_real_escape_string($con, $_POST['Question6']);
	$insert = mysqli_query($con, "INSERT INTO employee ( EmployeeId, Question1, Question2, Question3, Question4, Question5, Question6) VALUES ('$employeeID','$Question1', '$Question2', '$Question3', '$Question4', '$Question5', '$Question6')");
	}
	
	
	
?>