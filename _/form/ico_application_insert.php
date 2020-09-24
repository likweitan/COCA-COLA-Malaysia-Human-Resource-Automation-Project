<?php
include ("../db.php");
require "../loginheader.php";

	$positionapply = $_POST['PositionApply'];
	$supervisorname = mysqli_real_escape_string($con, $_POST['SuperiorName']);

if(isset($_POST['submit'])){
	
	$sql = "INSERT INTO ico ( AccountNo, PositionApply, Duration, DateJoin, SuperiorName) VALUES ('$employeeno', '$positionapply', '$Duration', '$DateJoin','$supervisorname')";
	$query = mysqli_query($con, $sql);
	


if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
}
?>