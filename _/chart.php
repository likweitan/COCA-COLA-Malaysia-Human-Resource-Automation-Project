<?php
	include ("db.php");
	
	$account = '';
	$date = '';
	$Jan = 0;
	$Feb = 0;
	$Mar = 0;
	$Apr = 0;
	$May = 0;
	$Jun = 0;
	$Jul = 0;
	$Aug = 0;
	$Sept = 0;
	$Oct = 0;
	$Nov = 0;
	$Dec = 0;
	
	$admin = 0;
	$guest = 0;
	$staff = 0;
	$superuser = 0;

	$online = 0;
	$offline = 0;

	$sql = "SELECT MONTH(Start_Timestamp) As Month, YEAR(Start_Timestamp) As Year, COUNT(AccountNo) As Record FROM account GROUP BY Month";
	$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)){
$Account = $row['Record'];
$Month = $row['Month'];
$Year = $row['Year'];

switch ($Month) {
case "1":
$Jan = $Account;
break;	
case "2":
$Feb = $Account;
break;
case "3":
$Mar = $Account;
break;
case "4":
$Apr = $Account;
break;
case "5":
$May = $Account;
break;
case "6":
$Jun = $Account;
break;
case "7":
$Jul = $Account;
break;
case "8":
$Aug = $Account;
break;
case "9":
$Sept = $Account;
break;
case "10":
$Oct = $Account;
break;
case "11":
$Nov = $Account;
break;
case "12":
$Dec = $Account;
break;
default:
//echo "Your favorite color is neither red, blue, nor green!";
}
		
		

		$Month = $Month.'"a'.$Month.'",';
		$Year = $Year.$Year.',aa';
		$Account = $Account.$Account.',';
	}


$sql = "SELECT *,COUNT(AccountNo) As Record FROM account GROUP BY Role";
	$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)){
$Account = $row['Record'];
$Role = $row['Role'];

switch ($Role) {
case "admin":
$admin = $Account;
break;	
case "guest":
$guest = $Account;
break;
case "staff":
$staff = $Account;
break;
case "superuser":
$superuser = $Account;
break;
default:
//echo "Your favorite color is neither red, blue, nor green!";
}
		
		

		$Role = $Role.'"'.$Role.'",';
		$Year = $Year.$Year.',';
		$Account = $Account.$Account.',';
	}


$Month = trim($Month,',');
$Year = trim($Year,',');
$Account = trim($Account,',');

$sql = "SELECT *,COUNT(AccountNo) As Record FROM account GROUP BY Status";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)){
	$account = $row['Record'];
	$status = $row['Status'];
	
	switch($status){
		case 'online':
			$online = $account;
			break;
		case 'offline':
			$offline = $account;
			break;
	}
	
	
	
}

			//echo "Error: " . $sql . "<br>" . mysqli_error($con);

?>