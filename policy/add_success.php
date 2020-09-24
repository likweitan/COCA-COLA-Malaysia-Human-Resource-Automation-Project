<?php
//including the database connection file
	require '../loginheader.php';
	include_once("../db.php");

if(isset($_POST['Submit'])) {	
	$no = mysqli_real_escape_string($con, $_POST['no']);
	$name = mysqli_real_escape_string($con, $_SESSION['username']);
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
		
	// checking empty fields
	if(empty($title) || empty($paragraph)) {
		
		if(empty($title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($paragraph)) {
			echo "<font color='red'>Paragraph field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$sql = "INSERT INTO policy (PolicyNo,AccountNo,PolicyTitle,PolicyParagraph) VALUES('$no','$name','$title','$paragraph')";
		$result = mysqli_query($con, $sql);
		header("location: ../policy.php");
		echo $sql;
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>