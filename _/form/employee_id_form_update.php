<?php
include ("../db.php");
include "../loginheader.php";

$tag_select = $_GET['id'];
$full_name = $_POST['fullname'];
$employee_no = $_POST['employeeno'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$reason = $_POST['reason'];
$humanresource = htmlspecialchars($_POST['humanresource']);

if(isset($_POST['submit']))
{
	$sql = "UPDATE tag SET Reason='".$reason."', HumanResource='".$humanresource."' WHERE TagId=$tag_select";
	$query = mysqli_query($con, $sql);

	if($query)
	{
		$error = "Your data has been updated into the database.";
		$_SESSION["error"] = $error;
	}
	else
	{
	$error = $sql;
	$_SESSION["error"] = $error;
		}
	}
	header("location: employee_id_form.php?id=$tag_select&action=update");

?>