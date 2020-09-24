<?php
	include("../db.php");
	require "../loginheader.php";

	$account_select = $_GET['id'];
	$question1 = $_POST['Question1'];
	$question2 = $_POST['Question2'];
	$question3 = $_POST['Question3'];
	$question4 = $_POST['Question4'];
	$question5 = $_POST['Question5'];
	$question6 = $_POST['Question6'];
	
	if(isset($_POST['submit']))
	{
			$sql = "UPDATE survey SET Question1='".$question1."', Question2='".$question2."', Question3='".$question3."', Question4='".$question4."', Question5='".$question5."' WHERE 	SurveyId='".$account_select."'";
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
		
header("location: 90_day_touchpoint.php?id=$account_select&action=update");
?>
