<?php
include("../db.php");
require "../loginheader.php";

	$Question1 = $_POST['Question1'];
	$Question2 = $_POST['Question2'];
	$Question3 = $_POST['Question3'];
	$Question4 = $_POST['Question4'];
	$Question5 = $_POST['Question5'];
	$Question6 = $_POST['Question6'];
	
	if(isset($_POST['submit']))
	{
		$sql = "SELECT * FROM survey WHERE AccountNo='".$account."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		
if(!$count)
	{
		$sql = "INSERT INTO survey (AccountNo, Question1, Question2, Question3, Question4, Question5, Question6) VALUES ('$employeeno','$Question1', '$Question2', '$Question3', '$Question4', '$Question5', '$Question6')";
		$query = mysqli_query($con, $sql);
	
		if($query)
		{
			$error = "Your data has been recorded into the database.";
			$_SESSION["error"] = $error;

		}
		else
		{
			$error = "There is something wrong, please try again later.";
			$_SESSION["error"] = $error;
		}
	}
	else
	{
		$error = "You have already submitted.";
		$_SESSION["error"] = $error;
	}
	header("location: 90_day_touchpoint.php?action=insert");
}	
?>
