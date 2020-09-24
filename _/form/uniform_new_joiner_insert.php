<?php
include ("../db.php");
include "../loginheader.php";

$pants_size = $_POST['PSize'];
$pants_quantity = $_POST['PQuantity'];
$shirt_size = $_POST['SSize'];
$shirt_quantity = $_POST['SQuantity'];

if(isset($_POST['submit']))
{
	$sql = "SELECT * FROM uniform WHERE AccountNo='".$employeeno."'";
	$query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query);
		
	if(!$count)
	{
		$sql = "INSERT INTO uniform (AccountNo,PantsSize,PantsQuantity,ShirtSize,ShirtQuantity ) VALUES ('$employeeno', '$pants_size', '$pants_quantity', '$shirt_size','$shirt_quantity')";
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
	
}	
header("location: uniform_new_joiner.php?action=insert");
?>
