<?php
	include("../db.php");
	require "../loginheader.php";
	define ('SITE_ROOT', realpath(dirname(__FILE__)));

	$account = $_SESSION['username'];

	if(isset($_POST['submit'])){

	$firstname = $_POST['FirstName'];
	$lastname = $_POST['LastName'];
	$position = $_POST['PositionApply'];
	$phone = $_POST['PhoneNo'];

$error = '';

		
		
// File upload path
$targetDir = "../attachment/resume/";
$fileName = basename($_FILES["resume"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["resume"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
			$sql = "INSERT INTO headhunter (AccountNo, FirstName, LastName,  PositionApply, PhoneNo, Resume) VALUES ('$employeeno', '$firstname', '$lastname', '$position','$phone','$fileName')";
	$query = mysqli_query($con, $sql);

            if($query){
                $error = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $error = "File upload failed, please try again.";
            } 
        }else{
            $error = "Sorry, there was an error uploading your file.";
        }
    }else{
        $error = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $error = 'Please select a file to upload.';
}
		$_SESSION["error"] = $error;
		header("location: be_a_headhunter.php?action=insert");
}
?>