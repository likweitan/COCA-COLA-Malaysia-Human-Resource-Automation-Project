<?php
//including the database connection file
	require '../loginheader.php';
	include_once("../db.php");

if(isset($_POST['update']))
{	
	$account = $_SESSION['username'];
	$no = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_SESSION['username']);
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
	
	
		//updating the table
		$result = mysqli_query($con, "UPDATE policy SET PolicyNo='$no',AccountNo='$account',PolicyTitle='$title',PolicyParagraph='$paragraph' WHERE PolicyNo=$no");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	
}
?>
<?php
//getting id from url
$no = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM policy WHERE PolicyNo=$no");

while($res = mysqli_fetch_array($result))
{
	$id = $res['id'];
	$title = $res['title'];
	$paragraph = $res['paragraph'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="title" value="<?php echo $title;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="paragraph" value="<?php echo $paragraph;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['PolicyNo'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
