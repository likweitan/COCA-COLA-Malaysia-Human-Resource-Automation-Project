<?php
	include ("../db.php");
	include "../loginheader.php";

	$reason = $_POST['reason'];

	if(isset($_POST['submit']))
	{
			$sql = "INSERT INTO tag (AccountNo, Reason) VALUES ('$employeeno','$reason')";
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
		header("location: employee_id_form.php?action=insert");
?>