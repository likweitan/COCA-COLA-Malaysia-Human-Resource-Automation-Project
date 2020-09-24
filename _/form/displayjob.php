<?php
include("db.php");
	$query = mysqli_query($con, "SELECT * FROM employee
	WHERE employee.EmployeeId ='".$_GET['id']."'");
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$FirstName = $rs['FirstName'];
		$LastName = $rs['LastName'];
		$NRIC = $rs['NRIC'];
		$NameCard = $rs['NameCard'];
		$Email = $rs['Email'];
		$Gender = $rs['Gender'];
		$JoinDate = $rs['JoinDate'];
		$BirthDate = $rs['BirthDate'];
		$Department = $rs['Department'];
		$Designation = $rs['Designation'];
		$MaritalStatus = $rs['MaritalStatus'];
		$Religion = $rs['Religion'];
		$Race = $rs['Race'];
		$Nationality = $rs['Nationality'];
		$PhoneNo = $rs['PhoneNo'];
		$HouseNo = $rs['HouseNo'];
		$AddressLine1 = $rs['AddressLine1'];
		$AddressLine2 = $rs['AddressLine2'];
		$City = $rs['City'];
		$PostalCode = $rs['PostalCode'];
		$State = $rs['State'];
		
	}
}	

	$query1 = mysqli_query($con, "SELECT * FROM bank
	INNER JOIN employee ON employee.EmployeeId=bank.EmployeeId
	WHERE employee.EmployeeId ='".$_GET['id']."'");
	$rows1 = mysqli_num_rows($query1);
	if ($rows1==1){
	while($rs1 = mysqli_fetch_array($query1)){
		$BankName = $rs1['BankName'];
		$AccountNo = $rs1['AccountNo'];
	}
}	
	
	$query2 = mysqli_query($con, "SELECT * FROM emergencycontact
	INNER JOIN employee ON employee.EmployeeId=emergencycontact.EmployeeId
	WHERE employee.EmployeeId ='".$_GET['id']."'");
	$rows2 = mysqli_num_rows($query2);
	if ($rows2==1){
	while($rs2 = mysqli_fetch_array($query2)){
		$cFirstName = $rs2['FirstName'];
		$cLastName = $rs2['LastName'];
		$cRelationship = $rs2['Relationship'];
		$cPhoneNo = $rs2['PhoneNo'];
		$cAddress = $rs2['Address'];
	}
}	
	$query3 = mysqli_query($con, "SELECT * FROM family
	INNER JOIN employee ON employee.EmployeeId=family.EmployeeId
	WHERE employee.EmployeeId ='".$_GET['id']."'");
	$rows3 = mysqli_num_rows($query3);
	if ($rows3 > 0){
		$rs3 = mysqli_fetch_array($query3);
		$i=1;
	while($i<=12){
		$i++;
		$FirstName1 = $rs3['FirstName'];
		$LastName1 = $rs3['LastName'];
		$Relationship1 = $rs3['Relationship'];
		$Gender1 = $rs3['Gender'];
		$NRIC1 = $rs3['NRIC'];
		$BirthDate1 = $rs3['BirthDate'];
		$Age1 = $rs3['Age'];
		$Occupation1 = $rs3['Occupation'];
		
		$FirstName2 = $rs3['FirstName'];
		$LastName2 = $rs3['LastName'];
		$Relationship2 = $rs3['Relationship'];
		$Gender2 = $rs3['Gender'];
		$NRIC2 = $rs3['NRIC'];
		$BirthDate2 = $rs3['BirthDate'];
		$Age2 = $rs3['Age'];
		$Occupation2 = $rs3['Occupation'];
		
		$FirstName3 = $rs3['FirstName'];
		$LastName3 = $rs3['LastName'];
		$Relationship3 = $rs3['Relationship'];
		$Gender3 = $rs3['Gender'];
		$NRIC3 = $rs3['NRIC'];
		$BirthDate3 = $rs3['BirthDate'];
		$Age3 = $rs3['Age'];
		$Occupation3 = $rs3['Occupation'];
		
		$FirstName4 = $rs3['FirstName'];
		$LastName4 = $rs3['LastName'];
		$Relationship4 = $rs3['Relationship'];
		$Gender4 = $rs3['Gender'];
		$NRIC4 = $rs3['NRIC'];
		$BirthDate4 = $rs3['BirthDate'];
		$Age4 = $rs3['Age'];
		$Occupation4 = $rs3['Occupation'];
		
		$FirstName5 = $rs3['FirstName'];
		$LastName5 = $rs3['LastName'];
		$Relationship5 = $rs3['Relationship'];
		$Gender5 = $rs3['Gender'];
		$NRIC5 = $rs3['NRIC'];
		$BirthDate5 = $rs3['BirthDate'];
		$Age5 = $rs3['Age'];
		$Occupation5 = $rs3['Occupation'];
		
		$FirstName6 = $rs3['FirstName'];
		$LastName6 = $rs3['LastName'];
		$Relationship6 = $rs3['Relationship'];
		$Gender6 = $rs3['Gender'];
		$NRIC6 = $rs3['NRIC'];
		$BirthDate6 = $rs3['BirthDate'];
		$Age6 = $rs3['Age'];
		$Occupation6 = $rs3['Occupation'];
		
		$FirstName7 = $rs3['FirstName'];
		$LastName7 = $rs3['LastName'];
		$Relationship7 = $rs3['Relationship'];
		$Gender7 = $rs3['Gender'];
		$NRIC7 = $rs3['NRIC'];
		$BirthDate7 = $rs3['BirthDate'];
		$Age7 = $rs3['Age'];
		$Occupation7 = $rs3['Occupation'];
		
		$FirstName8 = $rs3['FirstName'];
		$LastName8 = $rs3['LastName'];
		$Relationship8 = $rs3['Relationship'];
		$Gender8 = $rs3['Gender'];
		$NRIC8 = $rs3['NRIC'];
		$BirthDate8 = $rs3['BirthDate'];
		$Age8 = $rs3['Age'];
		$Occupation8 = $rs3['Occupation'];
		
		$FirstName9 = $rs3['FirstName'];
		$LastName9 = $rs3['LastName'];
		$Relationship9 = $rs3['Relationship'];
		$Gender9 = $rs3['Gender'];
		$NRIC9 = $rs3['NRIC'];
		$BirthDate9 = $rs3['BirthDate'];
		$Age9 = $rs3['Age'];
		$Occupation9 = $rs3['Occupation'];
		
		$FirstName10 = $rs3['FirstName'];
		$LastName10 = $rs3['LastName'];
		$Relationship10 = $rs3['Relationship'];
		$Gender10 = $rs3['Gender'];
		$NRIC10 = $rs3['NRIC'];
		$BirthDate10 = $rs3['BirthDate'];
		$Age10 = $rs3['Age'];
		$Occupation10 = $rs3['Occupation'];
		
		$FirstName11 = $rs3['FirstName'];
		$LastName11 = $rs3['LastName'];
		$Relationship11 = $rs3['Relationship'];
		$Gender11 = $rs3['Gender'];
		$NRIC11 = $rs3['NRIC'];
		$BirthDate11 = $rs3['BirthDate'];
		$Age11 = $rs3['Age'];
		$Occupation11 = $rs3['Occupation'];
		
		$FirstName12 = $rs3['FirstName'];
		$LastName12 = $rs3['LastName'];
		$Relationship12 = $rs3['Relationship'];
		$Gender12 = $rs3['Gender'];
		$NRIC12 = $rs3['NRIC'];
		$BirthDate12 = $rs3['BirthDate'];
		$Age12 = $rs3['Age'];
		$Occupation12 = $rs3['Occupation'];
	}
}	

	$query4 = mysqli_query($con, "SELECT * FROM education
	INNER JOIN employee ON employee.EmployeeId=education.EmployeeId
	WHERE employee.EmployeeId ='".$_GET['id']."'");
	$rows4 = mysqli_num_rows($query4);
	if ($rows4 > 0){
	while($rs4 = mysqli_fetch_array($query4)){
		$InstitutionName1 = $rs4['InstitutionName'];
		$Qualification1 = $rs4['Qualification'];
		$Duration1 = $rs4['Duration'];
		$Club1 = $rs4['Club'];
		
		$InstitutionName2 = $rs4['InstitutionName'];
		$Qualification2 = $rs4['Qualification'];
		$Duration2 = $rs4['Duration'];
		$Club2 = $rs4['Club'];
		
		$InstitutionName3 = $rs4['InstitutionName'];
		$Qualification3 = $rs4['Qualification'];
		$Duration3 = $rs4['Duration'];
		$Club3 = $rs4['Club'];
		
		$InstitutionName4 = $rs4['InstitutionName'];
		$Qualification4 = $rs4['Qualification'];
		$Duration4 = $rs4['Duration'];
		$Club4 = $rs4['Club'];
		
		$InstitutionName5 = $rs4['InstitutionName'];
		$Qualification5 = $rs4['Qualification'];
		$Duration5 = $rs4['Duration'];
		$Club5 = $rs4['Club'];
		
		$InstitutionName6 = $rs4['InstitutionName'];
		$Qualification6 = $rs4['Qualification'];
		$Duration6 = $rs4['Duration'];
		$Club6 = $rs4['Club'];	
	}
}	
	if(isset($_POST['submit'])){
	
	
	
	$EmploymentType1 = mysqli_real_escape_string($con, $_POST['EmploymentType1']);
	$Employer1 = mysqli_real_escape_string($con, $_POST['Employer1']);
	$Position1 = mysqli_real_escape_string($con, $_POST['Position1']);
	$Salary1 = mysqli_real_escape_string($con, $_POST['Salary1']);
	$Reason1 = mysqli_real_escape_string($con, $_POST['Reason1']);
	$DateJoin1 = mysqli_real_escape_string($con, $_POST['DateJoin1']);
	
	$EmploymentType2 = mysqli_real_escape_string($con, $_POST['EmploymentType2']);
	$Employer2 = mysqli_real_escape_string($con, $_POST['Employer2']);
	$Position2 = mysqli_real_escape_string($con, $_POST['Position2']);
	$Salary2 = mysqli_real_escape_string($con, $_POST['Salary2']);
	$Reason2 = mysqli_real_escape_string($con, $_POST['Reason2']);
	$DateJoin2 = mysqli_real_escape_string($con, $_POST['DateJoin2']);
	
	$EmploymentType3 = mysqli_real_escape_string($con, $_POST['EmploymentType3']);
	$Employer3 = mysqli_real_escape_string($con, $_POST['Employer3']);
	$Position3 = mysqli_real_escape_string($con, $_POST['Position3']);
	$Salary3 = mysqli_real_escape_string($con, $_POST['Salary3']);
	$Reason3 = mysqli_real_escape_string($con, $_POST['Reason3']);
	$DateJoin3 = mysqli_real_escape_string($con, $_POST['DateJoin3']);
	
	$EmploymentType4 = mysqli_real_escape_string($con, $_POST['EmploymentType4']);
	$Employer4 = mysqli_real_escape_string($con, $_POST['Employer4']);
	$Position4 = mysqli_real_escape_string($con, $_POST['Position4']);
	$Salary4 = mysqli_real_escape_string($con, $_POST['Salary4']);
	$Reason4 = mysqli_real_escape_string($con, $_POST['Reason4']);
	$DateJoin4 = mysqli_real_escape_string($con, $_POST['DateJoin4']);
	
	$EmploymentType5 = mysqli_real_escape_string($con, $_POST['EmploymentType5']);
	$Employer5 = mysqli_real_escape_string($con, $_POST['Employer5']);
	$Position5 = mysqli_real_escape_string($con, $_POST['Position5']);
	$Salary5 = mysqli_real_escape_string($con, $_POST['Salary5']);
	$Reason5 = mysqli_real_escape_string($con, $_POST['Reason5']);
	$DateJoin5 = mysqli_real_escape_string($con, $_POST['DateJoin5']);
	
	$EmploymentType6 = mysqli_real_escape_string($con, $_POST['EmploymentType6']);
	$Employer6 = mysqli_real_escape_string($con, $_POST['Employer6']);
	$Position6 = mysqli_real_escape_string($con, $_POST['Position6']);
	$Salary6 = mysqli_real_escape_string($con, $_POST['Salary6']);
	$Reason6 = mysqli_real_escape_string($con, $_POST['Reason6']);
	$DateJoin6 = mysqli_real_escape_string($con, $_POST['DateJoin6']);
	
	$insert = mysqli_query($con, "INSERT INTO employmentrecord (EmployeeId, EmploymentType, Employer, Position, Salary, Reason, DateJoin) 
	VALUES ('$EmployeeId','$EmploymentType1' ,'$Employer1', '$Position1', '$Salary1', '$Reason1', '$DateJoin1' ),
		   ('$EmployeeId','$EmploymentType2' ,'$Employer2', '$Position2', '$Salary2', '$Reason2', '$DateJoin2' ),
		   ('$EmployeeId','$EmploymentType3' ,'$Employer3', '$Position3', '$Salary3', '$Reason3', '$DateJoin3' ),
		   ('$EmployeeId','$EmploymentType4' ,'$Employer4', '$Position4', '$Salary4', '$Reason4', '$DateJoin4' ),
		   ('$EmployeeId','$EmploymentType5' ,'$Employer5', '$Position5', '$Salary5', '$Reason5', '$DateJoin5' ),
		   ('$EmployeeId','$EmploymentType6' ,'$Employer6', '$Position6', '$Salary6', '$Reason6', '$DateJoin6' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
	$rFirstName1 = mysqli_real_escape_string($con, $_POST['rFirstName1']);
	$rLastName1 = mysqli_real_escape_string($con, $_POST['rLastName1']);
	$rEmployer1 = mysqli_real_escape_string($con, $_POST['rEmployer1']);
	$rContactNo1 = mysqli_real_escape_string($con, $_POST['rContactNo1']);
	$rRelationship1 = mysqli_real_escape_string($con, $_POST['rRelationship1']);
	
	$rFirstName2 = mysqli_real_escape_string($con, $_POST['rFirstName2']);
	$rLastName2 = mysqli_real_escape_string($con, $_POST['rLastName2']);
	$rEmployer2 = mysqli_real_escape_string($con, $_POST['rEmployer2']);
	$rContactNo2 = mysqli_real_escape_string($con, $_POST['rContactNo2']);
	$rRelationship2 = mysqli_real_escape_string($con, $_POST['rRelationship2']);
	
	$rFirstName3 = mysqli_real_escape_string($con, $_POST['rFirstName3']);
	$rLastName3 = mysqli_real_escape_string($con, $_POST['rLastName3']);
	$rEmployer3 = mysqli_real_escape_string($con, $_POST['rEmployer3']);
	$rContactNo3 = mysqli_real_escape_string($con, $_POST['rContactNo3']);
	$rRelationship3 = mysqli_real_escape_string($con, $_POST['rRelationship3']);
	
	$rFirstName4 = mysqli_real_escape_string($con, $_POST['rFirstName4']);
	$rLastName4 = mysqli_real_escape_string($con, $_POST['rLastName4']);
	$rEmployer4 = mysqli_real_escape_string($con, $_POST['rEmployer4']);
	$rContactNo4 = mysqli_real_escape_string($con, $_POST['rContactNo4']);
	$rRelationship4 = mysqli_real_escape_string($con, $_POST['rRelationship4']);
	
	$rFirstName5 = mysqli_real_escape_string($con, $_POST['rFirstName5']);
	$rLastName5 = mysqli_real_escape_string($con, $_POST['rLastName5']);
	$rEmployer5 = mysqli_real_escape_string($con, $_POST['rEmployer5']);
	$rContactNo5 = mysqli_real_escape_string($con, $_POST['rContactNo5']);
	$rRelationship5 = mysqli_real_escape_string($con, $_POST['rRelationship5']);
	
	$rFirstName6 = mysqli_real_escape_string($con, $_POST['rFirstName6']);
	$rLastName6 = mysqli_real_escape_string($con, $_POST['rLastName6']);
	$rEmployer6 = mysqli_real_escape_string($con, $_POST['rEmployer6']);
	$rContactNo6 = mysqli_real_escape_string($con, $_POST['rContactNo6']);
	$rRelationship6 = mysqli_real_escape_string($con, $_POST['rRelationship6']);
	
	$insert = mysqli_query($con, "INSERT INTO reference (EmployeeId, FirstName, LastName, Employer, ContactNo, Relationship) 
	VALUES ('$EmployeeId','$rFirstName1' ,'$rLastName1', '$rEmployer1', '$rContactNo1', '$rRelationship1' ),
	       ('$EmployeeId','$rFirstName2' ,'$rLastName2', '$rEmployer2', '$rContactNo2', '$rRelationship2' ),
		   ('$EmployeeId','$rFirstName3' ,'$rLastName3', '$rEmployer3', '$rContactNo3', '$rRelationship3' ),
		   ('$EmployeeId','$rFirstName4' ,'$rLastName4', '$rEmployer4', '$rContactNo4', '$rRelationship4' ),
		   ('$EmployeeId','$rFirstName5' ,'$rLastName5', '$rEmployer5', '$rContactNo5', '$rRelationship5' ),
		   ('$EmployeeId','$rFirstName6' ,'$rLastName6', '$rEmployer6', '$rContactNo6', '$rRelationship6' )");
	if($insert){
		echo 'Successfully added new record.';
	} else {
		echo 'Failed to add new record because '.mysqli_error($con);
	}
	
		}
?>





<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php=$_SESSION['username'] ?></span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Job Application Form<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-finance.html">Personal Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Bank Account Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Family / Dependent Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Education Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Employment Record</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Further Information</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">References</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Declaration</a>
                                        </li>                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-c3.html">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-charts.html">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-morris.html">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-sparkline.html">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-gauge.html">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.html">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="multiselect.html">Multiselect</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Pages</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sortable-nestable-lists.html">Sortable/Nestable List</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
            </div>
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Personal Details  -->
        <!-- ============================================================== -->
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Personal Details</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="efName" name="efName" value="<?php echo $FirstName;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="elName" name="elName" placeholder="" value="<?php echo $LastName;?>" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name to be Appeal in Name Card </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eName" name="eName" placeholder="" value="<?php echo $NameCard;?>" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Gender" name="Gender" placeholder="" value="<?php echo $Gender;?>" class="form-control">
                                            </div>
                                        </div>
									
								
								
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">IC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eNRIC" name="eNRIC" placeholder="New" value="<?php echo $NRIC;?>" class="form-control">
												
                                            </div>
										</div>
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  id="eBirthDate" name="eBirthDate" value="<?php echo $BirthDate;?>" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eDepartment"  name="eDepartment" value="<?php echo $Department;?>" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Designation</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eDesignation" name="eDesignation" placeholder="" value="<?php echo $Designation;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">MaritalStatus</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="MaritalStatus" name="MaritalStatus" placeholder="" value="<?php echo $MaritalStatus;?>" class="form-control">
                                            </div>
										</div>
																												
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Marial Date (if any)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eMarialDate" name="eMarialDate" placeholder="DD-MM-YYYY"  placeholder=""  class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Religion </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eReligion" name="eReligion" placeholder="" value="<?php echo $Religion;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Race </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eRace" name="eRace" placeholder="" value="<?php echo $Race;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Nationality </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id= "eNationality"name="eNationality" placeholder="" value="<?php echo $Nationality;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAddressLine1" name="eAddressLine1" placeholder="Address Line 1" value="<?php echo $AddressLine1;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAddressLine2" name="eAddressLine2" placeholder="Address Line 2" value="<?php echo $AddressLine2;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">City </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eCity" name="eCity" placeholder="" value="<?php echo $City;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Postal Code </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="ePostalCode" name="ePostalCode" placeholder="" value="<?php echo $PostalCode;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">State </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text" id="eState" name="eState" placeholder="" value="<?php echo $State;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Email Address </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eEmail" name="eEmail" placeholder="" value="<?php echo $Email;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">House Phone No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" id="eHouseNO" name="eHouseNo" type="text" value="<?php echo $HouseNo;?>" placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Mobile Phone No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" id="ePhoneNO" name="ePhoneNo" type="text"  placeholder="" value="<?php echo $PhoneNo;?>" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Income Tax No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" id="eIncome" type="text"  placeholder=""  class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">EPF No. </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>										
									</div>
									</div>
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BANK ACCOUNT DETAILS</h5>
                                <div class="card-body">
                                    
									
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eBankName" name="eBankName" value="<?php echo $BankName;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Account No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="eAccountNo" name="eAccountNo" value="<?php echo $AccountNo;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
								</div>		
							</div>	
						</div>
    <!-- ============================================================== -->
    <!-- Emergency Contact    -->
    <!-- ============================================================== -->							
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Emergency contact</h5>
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecFirstName" name="ecFirstName" value="<?php echo $cFirstName;?>" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecLastName" name="ecLastName" required=""value="<?php echo $cLastName;?>"  placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecRelationship" name="ecRelationship" required="" value="<?php echo $cRelationship;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Phone No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecPhoneNo" name="ecPhoneNo" required="" value="<?php echo $cPhoneNo;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="ecAddress" name="ecAddress" required="" value="<?php echo $cAddress;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								</div>
							</div>
						</div>

    <!-- ============================================================== -->
    <!-- Famaly Dependent    -->
    <!-- ============================================================== -->							
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                         
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-2" data-toggle="tab" href="#home-justify-2" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-f1" data-toggle="tab" href="#profile-justify-f1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f1" data-toggle="tab" href="#contact-justify-f1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-f2" data-toggle="tab" href="#profile-justify-f2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f2" data-toggle="tab" href="#contact-justify-f2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									 <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-f3" data-toggle="tab" href="#contact-justify-f3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  1  -->
    <!-- ============================================================== -->	
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify-2" role="tabpanel" aria-labelledby="home-tab-justify-2">
                                        <h3>Family / Dependent Details 1</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName7" name="FirstName7" required="" value="<?php echo $FirstName1;?>" placeholder=""  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName7" name="LastName7" required="" value="<?php echo $LastName1;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship7" name="Relationship7" required="" value="<?php echo $Relationship1;?>" placeholder=""  class="form-control">
                                            </div>
                                        </div>
		
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender7" name="Gender7" required="" value="<?php echo $Gender1;?>" placeholder=""  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC7" name="NRIC7" required="" placeholder="" value="<?php echo $NRIC1;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate7" name="BirthDate7" required="" placeholder="" value="<?php echo $BirthDate1;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age7" name="Age7" required="" placeholder="" value="<?php echo $Age1;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation7" name="Occupation7" type="text"  placeholder="" value="<?php echo $Occupation1;?>" class="form-control">
                                            </div>
										</div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  2  -->
    <!-- ============================================================== -->										
                                    <div class="tab-pane fade" id="profile-justify-f1" role="tabpanel" aria-labelledby="profile-tab-justify-f1">
                                        <h3>Family / Dependent Details 2</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName8" name="FirstName8" value="<?php echo $FirstName2;?>" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName8" name="LastName8" required="" value="<?php echo $LastName2;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship8" name="Relationship8" required="" placeholder="" value="<?php echo $Relationship2;?>" class="form-control">
                                            </div>
                                        </div>
		
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender8" name="Gender8" required="" placeholder="" value="<?php echo $Gender2;?>" class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC8" name="NRIC8" required="" placeholder="" value="<?php echo $NRIC2;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate8" name="BirthDate8" required="" placeholder="" value="<?php echo $BirthDate2;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age8" name="Age8" required="" placeholder="" value="<?php echo $Age2;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation8" name="Occupation8" type="text"  placeholder="" value="<?php echo $Occupation2;?>" class="form-control">
                                            </div>
											</div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  3  -->
    <!-- ============================================================== -->											
                                    <div class="tab-pane fade" id="contact-justify-f1" role="tabpanel" aria-labelledby="contact-tab-justify-f1">
                                     <h3>Family / Dependent Details 3</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName9" name="FirstName9" required="" value="<?php echo $FirstName3;?>"  placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName9" name="LastName9" required="" placeholder="" value="<?php echo $LastName3;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship9" name="Relationship9" required="" placeholder="" value="<?php echo $Relationship3;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender9" name="Gender9" required="" placeholder="" value="<?php echo $Gender3;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC9" name="NRIC9" required="" placeholder="" value="<?php echo $NRIC3;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate9" name="BirthDate9" required="" placeholder="" value="<?php echo $BirthDate3;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age9" name="Age9" required="" placeholder="" value="<?php echo $Age3;?>"  class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation9" name="Occupation9" type="text"  placeholder="" value="<?php echo $Occupation3;?>"  class="form-control">
                                            </div>   
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  4  -->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="profile-justify-f2" role="tabpanel" aria-labelledby="profile-tab-justify-f2">
                                    <h3>Family / Dependent Details 4</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName10" name="FirstName10" required="" placeholder="" value="<?php echo $FirstName4;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName10" name="LastName10" required="" placeholder="" value="<?php echo $LastName4;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship10" name="Relationship10" required="" placeholder="" value="<?php echo $Relationship4;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender10" name="Gender10" required="" placeholder="" value="<?php echo $Gender4;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC10" name="NRIC10" required="" placeholder="" value="<?php echo $NRIC4;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate10" name="BirthDate10" required="" placeholder="" value="<?php echo $BirthDate4;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age10" name="Age10" required="" placeholder="" value="<?php echo $Age4;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation10" name="Occupation10" type="text"  placeholder="" value="<?php echo $Occupation4;?>" class="form-control">
                                            </div>     
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  5  -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-f2" role="tabpanel" aria-labelledby="contact-tab-justify-f2">
                                    <h3>Family / Dependent Details 5</h3>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName11" name="FirstName11" required="" placeholder="" value="<?php echo $FirstName5;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName11" name="LastName11" required="" placeholder="" value="<?php echo $LastName5;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship11" name="Relationship11" required="" placeholder="" value="<?php echo $Relationship5;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender11" name="Gender11" required="" placeholder="" value="<?php echo $Gender5;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC11" name="NRIC11" required="" placeholder="" value="<?php echo $NRIC5;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate11" name="BirthDate11" required="" placeholder="" value="<?php echo $BirthDate5;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age11" name="Age11" required="" placeholder="" value="<?php echo $Age5;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation11" name="Occupation11" type="text" value="<?php echo $Occupation5;?>" placeholder="" class="form-control">
                                            </div>       
                                    </div>
									</div>
    <!-- ============================================================== -->
    <!-- Famaly Dependent  6  -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-f3" role="tabpanel" aria-labelledby="contact-tab-justify-f3">
                                     <h3>Family / Dependent Details 6</h3>
													<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="FirstName12" name="FirstName12" required="" placeholder="" value="<?php echo $FirstName6;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="LastName12" name="LastName12" required="" placeholder="" value="<?php echo $LastName6;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship12" name="Relationship12" required="" placeholder="" value="<?php echo $Relationship6;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender12" name="Gender12" required="" placeholder="" value="<?php echo $Gender6;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC12" name="NRIC12" required="" placeholder="" value="<?php echo $NRIC6;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">BirthDate</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="BirthDate12" name="BirthDate12" required="" placeholder="" value="<?php echo $BirthDate6;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age12" name="Age12" required="" placeholder="" value="<?php echo $Age6;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="Occupation12" name="Occupation12" type="text"  placeholder="" value="<?php echo $Occupation6;?>" class="form-control">
                                            </div>       
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
    <!-- ============================================================== -->
    <!-- Other Family Details   -->
    <!-- ============================================================== -->	
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-2" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-3" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">6</a>
                                    </li>                                 
                                </ul>
    <!-- ============================================================== -->
    <!-- Other Family Details  1 -->
    <!-- ============================================================== -->	
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
										<h3>Other Family Details 1</h3>
									   <div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName1" name="FirstName1" value="<?php echo $FirstName7;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName1" name="LastName1" placeholder="" value="<?php echo $LastName7;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship1" name="Relationship1" required="" placeholder="" value="<?php echo $Relationship7;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender1" name="Gender1" required="" placeholder="" value="<?php echo $Gender7;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC1" name="NRIC1" required="" placeholder="" value="<?php echo $NRIC7;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate1" name="BirthDate1" type="text"  placeholder="" value="<?php echo $BirthDate7;?>" class="form-control">
                                            </div>
										</div>	
										
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age1" name="Age1" required="" placeholder="" value="<?php echo $Age7;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation1" name="Occupation1" required="" placeholder="" value="<?php echo $Occupation7;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  2 -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                        <h3>Other Family Details 2</h3>
										<div class="form-group row">
										
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName2" name="FirstName2" placeholder="" value="<?php echo $FirstName8;?>" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName2" name="LastName2" placeholder="" value="<?php echo $FirstName8;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship2" name="Relationship2" required="" placeholder="" value="<?php echo $Relationship8;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender2" name="Gender2" required="" placeholder="" value="<?php echo $Gender8;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC2" name="NRIC2" required="" placeholder="" value="<?php echo $NRIC8;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate2" name="BirthDate2" type="text"  placeholder="" value="<?php echo $BirthDate8;?>" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age2" name="Age2" required="" placeholder="" value="<?php echo $Age8;?>" class="form-control">
                                            </div>
                                        </div>
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation2" name="Occupation2" required="" value="<?php echo $Occupation8;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  3 -->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                                        <h3>Other Family Details 3</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName3" name="FirstName3" value="<?php echo $FirstName9;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName3" name="LastName3" placeholder="" value="<?php echo $LastName9;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship3" name="Relationship3" required="" placeholder="" value="<?php echo $Relationship9;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender3" name="Gender3" required="" placeholder="" value="<?php echo $Gender9;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC3" name="NRIC3" required="" placeholder="" value="<?php echo $NRIC9;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate3" name="BirthDate3" type="text" value="<?php echo $BirthDate9;?>" placeholder="" class="form-control">
                                            </div>
										</div>	
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age3" name="Age3" required="" placeholder="" value="<?php echo $Age9;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation3" name="Occupation3" required="" placeholder="" value="<?php echo $Occupation9;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  4 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab-justify-1">
                                        <h3>Other Family Details 4</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName4" name="FirstName4" value="<?php echo $FirstName10;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName4" name="LastName4" placeholder="" value="<?php echo $LastName10;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship4" name="Relationship4" required="" placeholder="" value="<?php echo $Relationship10;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender4" name="Gender4" required="" placeholder="" value="<?php echo $Gender10;?>"  class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC4" name="NRIC4" required="" placeholder="" value="<?php echo $NRIC10;?>" class="form-control">
                                            </div>
                                        </div>
																											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate4" name="BirthDate4" type="text"  placeholder="" value="<?php echo $BirthDate10;?>" class="form-control">
                                            </div>
										</div>	
										
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age4" name="Age4" required="" value="<?php echo $Age10;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation4" name="Occupation4" required="" value="<?php echo $Occupation10;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>		
    <!-- ============================================================== -->
    <!-- Other Family Details  5 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab-justify-2">
                                        <h3>Other Family Details 5</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName5" name="FirstName5" value="<?php echo $FirstName11;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName5" name="LastName5" placeholder="" value="<?php echo $LastName11;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship5" name="Relationship5" required="" placeholder="" value="<?php echo $Relationship11;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender5" name="Gender5" required="" placeholder="" value="<?php echo $Gender11;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC5" name="NRIC5" required="" placeholder="" value="<?php echo $NRIC11;?>" class="form-control">
                                            </div>
                                        </div>																		
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate5" name="BirthDate5" type="text"  placeholder="" value="<?php echo $BirthDate11;?>" class="form-control">
                                            </div>
										</div>	
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age5" name="Age5" required="" placeholder="" value="<?php echo $Age11;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation5" name="Occupation5" required="" value="<?php echo $Occupation11;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Other Family Details  6 -->
    <!-- ============================================================== -->	
								 <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="contact-tab-justify-3">
                                        <h3>Other Family Details 6</h3>
										<div class="form-group row">
											
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">FirstName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="FirstName6" name="FirstName6" value="<?php echo $FirstName12;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">LastName</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="LastName6" name="LastName6" placeholder="" value="<?php echo $LastName12;?>" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Relationship6" name="Relationship6" required="" placeholder="" value="<?php echo $Relationship12;?>"  class="form-control">
                                            </div>
                                        </div>
										
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Gender</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Gender6" name="Gender6" required="" placeholder="" value="<?php echo $Gender12;?>"  class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="NRIC6" name="NRIC6" required="" value="<?php echo $NRIC12;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" id="BirthDate6" name="BirthDate6" type="text" value="<?php echo $BirthDate12;?>" placeholder="" class="form-control">
                                            </div>
										</div>	
																				
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" id="Age6" name="Age6" required="" placeholder="" value="<?php echo $Age12;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Occupation6" name="Occupation6" required="" value="<?php echo $Occupation12;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
							   </div>
                            </div>
                        </div>			
   

    <!-- ============================================================== -->
    <!-- Education Details    --->
    <!-- ============================================================== -->		
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-1" data-toggle="tab" href="#home-justify-1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-edu-1" data-toggle="tab" href="#profile-justify-edu-1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-1" data-toggle="tab" href="#contact-justify-edu-1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-edu-2" data-toggle="tab" href="#profile-justify-edu-2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-2" data-toggle="tab" href="#contact-justify-edu-2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									 <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-edu-3" data-toggle="tab" href="#contact-justify-edu-3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
    <!-- ============================================================== -->
    <!-- Education Details  1  --->
    <!-- ============================================================== -->		
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify-1" role="tabpanel" aria-labelledby="home-tab-justify-1">
                                       <h3>Education Details 1</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName1" name="InstitutionName1" value="<?php echo $InstitutionName1;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification1" name="Qualification1" value="<?php echo $Qualification1;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration1" name="Duration1" placeholder="" value="<?php echo $Duration1;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club1" name="Club1" placeholder="" value="<?php echo $Club1;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 2   --->
    <!-- ============================================================== -->											
                                    <div class="tab-pane fade" id="profile-justify-edu-1" role="tabpanel" aria-labelledby="profile-tab-justify-edu-1">
                                        <h3>Education Details 2</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName2" name="InstitutionName2" value="<?php echo $InstitutionName2;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification2" name="Qualification2" value="<?php echo $Qualification2;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration2" name="Duration2" placeholder="" value="<?php echo $Duration2;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club2" name="Club2" placeholder="" value="<?php echo $Club2;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 3   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-1" role="tabpanel" aria-labelledby="contact-tab-justify-edu-1">
                                        <h3>Education Details 3</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName3" name="InstitutionName3" value="<?php echo $InstitutionName3;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification3" name="Qualification3" value="<?php echo $Qualification3;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration3" name="Duration3" placeholder="" value="<?php echo $Duration3;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club3" name="Club3" placeholder="" value="<?php echo $Club3;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 4   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="profile-justify-edu-2" role="tabpanel" aria-labelledby="profile-tab-justify-edu-2">
                                        <h3>Education Details 4<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6"> 
                                                <input type="text" required="" id="InstitutionName4" name="InstitutionName4" value="<?php echo $InstitutionName4;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification4" name="Qualification4" value="<?php echo $Qualification4;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration4" name="Duration4" value="<?php echo $Duration4;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club4" name="Club4" value="<?php echo $Club4;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 5   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-2" role="tabpanel" aria-labelledby="contact-tab-justify-edu-2">
                                        <h3>Education Details 5<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName5" name="InstitutionName5" value="<?php echo $InstitutionName5;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification5" name="Qualification5" value="<?php echo $Qualification5;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration5" name="Duration5" placeholder="" value="<?php echo $Duration5;?>" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club5" name="Club5" placeholder="" value="<?php echo $Club5;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Education Details 6   --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-edu-3" role="tabpanel" aria-labelledby="contact-tab-justify-edu-3">
                                        <h3>Education Details 6<h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution <br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="InstitutionName6" name="InstitutionName6" value="<?php echo $InstitutionName6;?>" placeholder="(School/ College/ University / Others)" class="form-control">
                                            </div>
                                        </div>
								
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Qualification6" name="Qualification6" value="<?php echo $Qualification6;?>" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" id="Duration6" name="Duration6" value="<?php echo $Duration6;?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="Club6" name="Club6" placeholder="" value="<?php echo $Club6;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Employment Details (For HR Use Only)</h5>
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Referred by :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position title :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Job grade :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reporting to :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Location base :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Status (P/C) :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Basic Salary :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Transport allowance :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Special allowance :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Remarks (if any) :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>
								</div>
							</div>
						</div>
						
						
						
    <!-- ============================================================== -->
    <!-- Employment Record  --->
    <!-- ============================================================== -->							
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">                           
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-er1" data-toggle="tab" href="#home-justify-er1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-er1" data-toggle="tab" href="#profile-justify-er1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er1" data-toggle="tab" href="#contact-justify-er1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-er2" data-toggle="tab" href="#profile-justify-er2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er2" data-toggle="tab" href="#contact-justify-er2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-er3" data-toggle="tab" href="#contact-justify-er3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent7">
    <!-- ============================================================== -->
    <!-- Employment Record 1 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade show active" id="home-justify-er1" role="tabpanel" aria-labelledby="home-tab-justify-er1">
                                        <h3>Employment Record 1</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType1" name="EmploymentType1" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType1" name="EmploymentType1" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer1" name="Employer1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position1" required="Position1" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary1" required="Salary1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason1" required="Reason1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin1" required="DateJoin1" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 2 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="profile-justify-er1" role="tabpanel" aria-labelledby="profile-tab-justify-er1">
                                         <h3>Employment Record 2</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType2" name="EmploymentType2" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType2" name="EmploymentType2" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer2" name="Employer2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position2" required="Position2" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary2" required="Salary2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason2" required="Reason2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin2" required="DateJoin2" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 3 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-er1" role="tabpanel" aria-labelledby="contact-tab-justify-er1">
                                         <h3>Employment Record 3</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType3" name="EmploymentType3" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType3" name="EmploymentType3" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer3" name="Employer3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position3" required="Position3" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary3" required="Salary3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason3" required="Reason3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin3" required="DateJoin3" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 4 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="profile-justify-er2" role="tabpanel" aria-labelledby="profile-tab-justify-er2">
                                         <h3>Employment Record 4</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType4" name="EmploymentType4" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType4" name="EmploymentType4" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer4" name="Employer4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position4" required="Position4" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary4" required="Salary4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason4" required="Reason4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin4" required="DateJoin4" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 5 --->
    <!-- ============================================================== -->										
                                    <div class="tab-pane fade" id="contact-justify-er2" role="tabpanel" aria-labelledby="contact-tab-justify-er2">
                                         <h3>Employment Record 5</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType5" name="EmploymentType5" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType5" name="EmploymentType5" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer5" name="Employer5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position5" required="Position5" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary5" required="Salary5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason5" required="Reason5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin5" required="DateJoin5" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 6 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="contact-justify-er3" role="tabpanel" aria-labelledby="contact-tab-justify-er3">
                                         <h3>Employment Record 6</h3>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Employment Type</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType6" name="EmploymentType6" value="Present Employment"  class="custom-control-input" ><span class="custom-control-label">Present Employment (most current)</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="EmploymentType6" name="EmploymentType6" value="Previous Employment"  class="custom-control-input" ><span class="custom-control-label">Previous Employment (Including temporary and vacational training)</span>
                                            </label>
                                            
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer6" name="Employer6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Position6" required="Position6" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="Salary6" required="Salary6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Reason6" required="Reason6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="DateJoin6" required="DateJoin6" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">For all sales position only </h5>
								
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Type of licen :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Expired date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
								</div>
							</div>
						</div>

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Further Information</h5>
								
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please elaborate :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please provide details :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
								</div>
							</div>
						</div>
	<!-- ============================================================== -->
    <!-- References--->
    <!-- ============================================================== -->		
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify-r1" data-toggle="tab" href="#home-justify-r1" role="tab" aria-controls="home" aria-selected="true">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-r1" data-toggle="tab" href="#profile-justify-r1" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r1" data-toggle="tab" href="#contact-justify-r1" role="tab" aria-controls="contact" aria-selected="false">3</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justify-r2" data-toggle="tab" href="#profile-justify-r2" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r2" data-toggle="tab" href="#contact-justify-r2" role="tab" aria-controls="contact" aria-selected="false">5</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="contact-tab-justify-r3" data-toggle="tab" href="#contact-justify-r3" role="tab" aria-controls="contact" aria-selected="false">6</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent7">
	<!-- ============================================================== -->
    <!-- References 1--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade show active" id="home-justify-r1" role="tabpanel" aria-labelledby="home-tab-justify-r1">
                                       <h3>References 1</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName1" name="rFirstName1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName1" name="rLastName1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer1" name="rEmployer1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo1" name="rContactNo1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship1" name="rRelationship1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
									
									
	<!-- ============================================================== -->
    <!-- References 2--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="profile-justify-r1" role="tabpanel" aria-labelledby="profile-tab-justify-r1">
                                     <h3>References 2</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName2" name="rFirstName2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName2" name="rLastName2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer2" name="rEmployer2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo2" name="rContactNo2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship2" name="rRelationship2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>   
                                    </div>
	<!-- ============================================================== -->
    <!-- References 3--->
    <!-- ============================================================== -->	
                                    <div class="tab-pane fade" id="contact-justify-r1" role="tabpanel" aria-labelledby="contact-tab-justify-r1">
                                        <h3>References 3</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName3" name="rFirstName3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName3" name="rLastName3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer3" name="rEmployer3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo3" name="rContactNo3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship3" name="rRelationship3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 4--->
    <!-- ============================================================== -->	
									<div class="tab-pane fade" id="profile-justify-r2" role="tabpanel" aria-labelledby="profile-tab-justify-r2">
                                        <h3>References 4</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName4" name="rFirstName4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName4" name="rLastName4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer4" name="rEmployer4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo4" name="rContactNo4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship4" name="rRelationship4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 5--->
    <!-- ============================================================== -->		
									<div class="tab-pane fade" id="contact-justify-r2" role="tabpanel" aria-labelledby="contact-tab-justify-r2">
                                        <h3>References 5</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName5" name="rFirstName5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName5" name="rLastName5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer5" name="rEmployer5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo5" name="rContactNo5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship5" name="rRelationship5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	<!-- ============================================================== -->
    <!-- References 6--->
    <!-- ============================================================== -->	
									<div class="tab-pane fade" id="contact-justify-r3" role="tabpanel" aria-labelledby="contact-tab-justify-r3">
                                        <h3>References 6</h3>
									   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">First Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rFirstName6" name="rFirstName6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Last Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rLastName6" name="rLastName6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rEmployer6" name="rEmployer6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rContactNo6" name="rContactNo6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="rRelationship6" name="rRelationship6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
	
                                </div>
                            </div>
                        </div>


						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Declaration</h5>								
                                <div class="card-body">
								<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If so, please provide their Name, Relationship with you, and their Present jobs, (if known)</label>
                                            
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Please provide the Name of anyone in :<br/> CCBM/ CCRM known to you personally </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please stated the Dates and Position applied for</label>
                                            
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position Applied:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Additional Information</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right"></label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I hereby
										declared that the information given by me in this form is accurate and true to the<br/>
										best of my knowldge and subject to validation By Coca-Cola Bottlers Malaysia Sdn. Bhd. (CCBM) <br/>
										/ Coca-Cola Refreshment Malaysia Sdn. Bhd. (CCRM).</span>
                                                    </label>
													<label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I fully
										understand and accept that if anytime after i am employed and it is found that<br/>
										a false declaration has been made in the form, the company has the right to terminate <br/>
										my employment</span>
                                                    </label>
										</div>
                                        </div>
										</div>
										
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                    </div>
								</div>
							</div>
						</div>																																													
						</form>
			
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>



</body>
 
</html>