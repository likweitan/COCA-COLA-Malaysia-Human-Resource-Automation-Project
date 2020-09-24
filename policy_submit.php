<?php
// Include the database configuration file
require "loginheader.php";
require_once 'db.php';

$account = $_SESSION['username'];
$editorContent = $statusMsg = '';

// If the form is submitted
if(isset($_POST['submit'])){
    // Get editor content
	$account = $_SESSION['username'];
    $editorContent = $_POST['editor'];
	$policyNo = $_POST['policyno'];
    
    // Check whether the editor content is empty
    if(!empty($editorContent)){
        // Insert editor content in the database
        $sql = "UPDATE policy SET PolicyParagraph='$editorContent',AccountNo='$account' WHERE PolicyNo=".$policyNo;
        $insert = mysqli_query($con,$sql);
        // If database insertion is successful
        if($insert){
			header("location: form.php");
			
            $statusMsg = "The editor content has been inserted successfully.";
        }else{
			echo $sql;
			
            $statusMsg = "Some problem occurred, please try again.";
        } 
    }else{
        $statusMsg = 'Please add content in the editor.';
    }
}
?>