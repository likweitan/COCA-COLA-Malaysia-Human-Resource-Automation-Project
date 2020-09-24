<?php
include ("../db.php");
include "../loginheader.php";

$account_select = $_GET['id'];
$pants_size = $_POST['PSize'];
$pants_quantity = $_POST['PQuantity'];
$shirt_size = $_POST['SSize'];
$shirt_quantity = $_POST['SQuantity'];

if(isset($_POST['submit']))
{
	$sql = "UPDATE uniform SET PantsSize='".$pants_size."', PantsQuantity='".$pants_quantity."', ShirtSize='".$shirt_size."', ShirtQuantity='".$shirt_quantity."' WHERE UniformId='".$account_select."'";
	$query = mysqli_query($con, $sql);

	if($query)
	{
		$error = "Your data has been updated into the database.";
		$_SESSION["error"] = $error;
	}
	else
	{
	$error = "There is something wrong, please try again later.";
	$_SESSION["error"] = $error;
		}
	}
	header("location: uniform_new_joiner.php?id=$account_select&action=update");

?>