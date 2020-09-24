    <?php
include("../db.php");
		require "../loginheader.php"; 


	$old_password = $_POST['password0'];
	$new_password = $_POST['password1'];
	$retype_password = $_POST['password2'];
	$username = $_SESSION['username'];
	$error = "";

		if (isset($_POST['password0']))
		{
			$sql = "SELECT PassKeyTemp FROM passwordresettemp WHERE AccountNo = '".$_SESSION['username']."' and ExpiryDate >= Current_Timestamp() ORDER BY ExpiryDate DESC LIMIT 1";
	//echo $sql;
	$query = mysqli_query($con, $sql);
	//echo mysqli_fetch_array($query,MYSQLI_ASSOC);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$oldpassword=$row['PassKeyTemp'];
			
			$sql = "SELECT AccountNo,PassKey FROM account WHERE AccountNo = '".$username."'";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			
			if ($old_password == $row['PassKey'] || $old_password == $oldpassword)
			{	
				if ($new_password == $retype_password)
				{
					$insert = mysqli_query($con, "UPDATE account SET PassKey='".$new_password."' WHERE AccountNo='".$username."'");
					if($insert){
						//changepass
						$sql = "DELETE FROM passwordresettemp WHERE AccountNo='".$username."'";
						$result = mysqli_query($con, $sql);
						
						$error = 'Successfully change password.';
						$_SESSION["error"] = $error;
					} else {
						$error = 'SQL ERROR: Failed to add new record because '.mysqli_error($con);
						$_SESSION["error"] = $error;
					}
					header("location: password.php");
				}
				else
				{
					$error = "The confirm password does not match with new password.";
					$_SESSION["error"] = $error;
					header("location: password.php");
				}
			}
			else
			{
				$error = "Your old password is incorrect";
				$_SESSION["error"] = $error;
				header("location: password.php");
			}
		}
	?>