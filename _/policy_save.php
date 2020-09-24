<?php
include 'db.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$account=$_POST['AccountNo'];
		$email=$_POST['PolicyNo'];
		$phone=$_POST['PolicyParagraph'];

			$sql = "INSERT INTO policy (AccountNo, PolicyNo, PolicyParagraph) VALUES ('$account','$email','$phone')";
			
			if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
//--------------------------------------------------------------------------
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$role=$_POST['role'];
		$sql = "UPDATE `account` SET `Email`='$email',`Phone`='$phone',`PassKey`='$password',`Role`='$role' WHERE AccountNo=$id";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
//-----------------------------------------------------------------------------
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `account` WHERE AccountNo =$id";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM account WHERE AccountNo in ($id)";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}

?>