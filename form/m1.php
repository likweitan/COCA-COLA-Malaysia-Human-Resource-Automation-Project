<?php
include '../db.php';
require"../loginheader.php";
$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $_SESSION['username']. "'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		
		$account = $_SESSION['username'];
		$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$fullname=$row['NameCard'];
		$role = $row['Role'];
		$lastlogin = $row['Start_Timestamp'];
	$lastlogout = $row['Mod_Timestamp'];
if(isset($_POST['submit'])){
	
	$AccountNo	= $_GET['id'];
	$EnrolmentType = mysqli_real_escape_string($con, $_POST['EnrolmentType']);
	$Plan = mysqli_real_escape_string($con, $_POST['Plan']);
	$Coverage = mysqli_real_escape_string($con, $_POST['Coverage']);

	$Total = mysqli_real_escape_string($con, $_POST['Total']);
	
	
	
	$insert = mysqli_query($con, "INSERT INTO medical (AccountNo, EnrolmentType, Plan, Coverage,  Total	) VALUES (  '$AccountNo','$EnrolmentType', '$Plan', '$Coverage','$Total')");	


	$DependentName1 = mysqli_real_escape_string($con, $_POST['DependentName1']);
	$Relationship1	 = mysqli_real_escape_string($con, $_POST['Relationship1']);
	$NRIC1 = mysqli_real_escape_string($con, $_POST['NRIC1']);
	
	$DependentName2 = mysqli_real_escape_string($con, $_POST['DependentName2']);
	$Relationship2	 = mysqli_real_escape_string($con, $_POST['Relationship2']);
	$NRIC2 = mysqli_real_escape_string($con, $_POST['NRIC2']);
	
	$DependentName3 = mysqli_real_escape_string($con, $_POST['DependentName3']);
	$Relationship3	 = mysqli_real_escape_string($con, $_POST['Relationship3']);
	$NRIC3 = mysqli_real_escape_string($con, $_POST['NRIC3']);
	
	$DependentName4 = mysqli_real_escape_string($con, $_POST['DependentName4']);
	$Relationship4	 = mysqli_real_escape_string($con, $_POST['Relationship4']);
	$NRIC4 = mysqli_real_escape_string($con, $_POST['NRIC4']);
	
	$DependentName5 = mysqli_real_escape_string($con, $_POST['DependentName5']);
	$Relationship5	 = mysqli_real_escape_string($con, $_POST['Relationship5']);
	$NRIC5 = mysqli_real_escape_string($con, $_POST['NRIC5']);
	
	$DependentName6 = mysqli_real_escape_string($con, $_POST['DependentName6']);
	$Relationship6	 = mysqli_real_escape_string($con, $_POST['Relationship6']);
	$NRIC6 = mysqli_real_escape_string($con, $_POST['NRIC6']);


	$insert = mysqli_query($con, "INSERT INTO medical (DependentName, Relationship, NRIC) 
	VALUES (  '$DependentName1','$Relationship1', '$NRIC1'),
			('$DependentName2','$Relationship2', '$NRIC2'), 
			('$DependentName3','$Relationship3', '$NRIC3'),
			('$DependentName4','$Relationship4', '$NRIC4'),
			('$DependentName5','$Relationship5', '$NRIC5'),
			('$DependentName5','$Relationship6', '$NRIC6')");
			
			
}
?>




<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Validation</title>
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
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
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
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
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
								<a class="nav-link deactive" href="../profile.php"><i class="fa fa-fw fa-user-circle"></i>Profile</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fab fa-rocketchat"></i>Messenger</a>
							</li>
							<li class="nav-divider">
								Explore
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../notification.php"><i class="fas fa-bell"></i>Notifications</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../social/index.php"><i class="fas fa-images"></i>Album</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="../form_user.php"><i class="fas fa-file"></i>Form</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<?php
							if($role == 'admin'||$role == 'superuser')
							echo '<li class="nav-divider">
								Manage
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="form.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="data-tables.php"><i class="fas fa-info"></i>Information</a>
							</li>'
								?>
							<li class="nav-divider">
								Setting
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout<span class="badge badge-success">6</span></a>
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
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Validations </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Dependent Medical Benefits Enrolment Form</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									
									<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left"></label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Bottle (Malaysia) Sdn. Bhd.</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Refreshments (Malaysia) Sdn. Bhd.</span>
                                                    </label>
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>
										
									 <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A. EMPLOYEE DETAILS</label>
									</div>
									
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employee No. :</label>
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
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B. ENROLMENT DETAILS</label>
                                        </div>
										
											<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Enrolment type :</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" name = "EnrolmentType" value= "New Enrolment" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">New Enrolment (First Time Enrolment)</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck2" name="ck2" type="checkbox" name = "EnrolmentType" value = "Update Dependent Coverage" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Update Dependent Coverage <br/>(To change/ add <br/>your existing dependent coverage)</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck3" name="ck3" type="checkbox" name = "EnrolmentType" value = "Termination of Coverage" data-parsley-multiple="groups" value="bar3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Termination of Coverage<br/> (To delete <br/>your existing dependent coverage) </span>
                                                    </label>
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>
											
											
																					<div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
											<div class="card p-0">
											<h5 class="card-header">Dependent coverage</h5>
												<div class="card-body">
												<table class="table table-bordered">
													<thead>
													<tr>
                                                <th scope="col">Plan</th>
                                                <th scope="col">Spouse (only)</th>
                                                <th scope="col">Children (only)</th>
                                                <th scope="col">Spouse + Children</th>
														</tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">A</th>
                                                <td>RM 15.00</td>
                                                <td>RM 15.00</td>
                                                <td>RM 30.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">B</th>
                                                <td>RM 11.95</td>
                                                <td>RM 11.95</td>
                                                <td>RM 23.93</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">C</th>
                                                <td>RM 8.63</td>
                                                <td>RM 8.63</td>
												<td>RM 17.25</td>
                                            </tr>
											<tr>
                                                <th scope="row">D</th>
                                                <td>RM 6.19</td>
                                                <td>RM 6.19</td>
												<td>RM 12.38</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
										
											
									<p> * Plan A (Director), Plan B (Senior Manager), Plan C (Manager, Sr. Exec & Executive)
										& Plan D (Non-Executive)<br/> 
										* the current premium rate(s) shall be applicable until 31 March 2013 & new rate(s) shall
										be revise in every other year <br/>
										* premium shown are calculated based on 30% of actual rate </p>
											
											
											
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Please select dependent coverage:</label>
                                        </div>	
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Plan :</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="Plan" value= "A"class="custom-control-input"><span class="custom-control-label">A</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="plan" value= "B"class="custom-control-input"><span class="custom-control-label">B</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="plan" value ="C"class="custom-control-input"><span class="custom-control-label">C</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="plan" value="D"class="custom-control-input"><span class="custom-control-label">D</span>
                                            </label>
										</div>
                                        </div>
										
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Dependent coverage:</label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="Coverage" value= "Spouse (only)" class="custom-control-input"><span class="custom-control-label">Spouse (only)</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="Coverage" value = "Children (only)" class="custom-control-input"><span class="custom-control-label">Children (only)</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="Coverage" value = "Spouse + Children" class="custom-control-input"><span class="custom-control-label">Spouse + Children</span>
                                            </label>
											<br/>
                                            
										</div>
                                        </div>
										
									
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Please complete the dependent details :</label>
                                        </div>
										
										<!-- ============================================================== -->
    <!-- Dependent Record  --->
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
    <!-- Dependent Record 1 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade show active" id="home-justify-er1" role="tabpanel" aria-labelledby="home-tab-justify-er1">
                                        <h3>Dependent Record 1</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  id="Employer1" name="DependentName1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship1" required="Position1" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC1" required="Salary1" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 2 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="profile-justify-er1" role="tabpanel" aria-labelledby="profile-tab-justify-er1">
                                         <h3>Dependent Record 2</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer2" name="DependentName2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship2" required="Position2" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC2" required="Salary2" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										
                                    </div>
    <!-- ============================================================== -->
    <!-- Employment Record 3 --->
    <!-- ============================================================== -->		
                                    <div class="tab-pane fade" id="contact-justify-er1" role="tabpanel" aria-labelledby="contact-tab-justify-er1">
                                         <h3>Dependent Record 3</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer3" name="DependentName3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship3" required="Position3" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC3" required="Salary3" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 4 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="profile-justify-er2" role="tabpanel" aria-labelledby="profile-tab-justify-er2">
                                         <h3>Depedent Record 4</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer4" name="DependentName4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship4" required="Position4" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC4" required="Salary4" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 5 --->
    <!-- ============================================================== -->										
                                    <div class="tab-pane fade" id="contact-justify-er2" role="tabpanel" aria-labelledby="contact-tab-justify-er2">
                                         <h3>Dependent Record 5</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer5" name="DependentName5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship5" required="Position5" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC5" required="Salary5" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										
                                    </div>
	<!-- ============================================================== -->
    <!-- Employment Record 6 --->
    <!-- ============================================================== -->										
									<div class="tab-pane fade" id="contact-justify-er3" role="tabpanel" aria-labelledby="contact-tab-justify-er3">
                                         <h3>Dependent Record 6</h3>
										
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Dependent Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" id="Employer6" name="DependentName6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship </label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" id="" name="Relationship6" required="Position6" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name="NRIC6" required="Salary6" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										
                                    </div>
                                </div>
                            </div>
                        </div>
										
			
										
										 
                                            <h4>C. ENROLMENT PROCEDURE</h4>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
											<p>i) Spouse Medical Enrolment<br/>
												A legally married spouse, up to aged sixty-five (65)</p>
										</div>
										
										<div class="form-group row">
												<label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
												<div>
                                                <input type="file" >
                                                <label class="col-sm-4 col-lg-3 mb-3 mb-sm-0" for="customFile"></label>
												<p>Please attach a copy of Marriage Certificate for spouse medical enrolment.</p>
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
											<p>ii) Children Medical Enrolment<br/>
												Unmarried children over fifteen (15) days old and up till twenty-three (23) years of age</p>
										</div>
										
										<div class="form-group row">
												<label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
												<div>
                                                <input type="file" >
                                                <label class="col-sm-4 col-lg-3 mb-3 mb-sm-0" for="customFile"></label>
												<p>Please attach a copy of Birth Certificate /NRIC/MyKid for children medical enrolment.</p>
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
											<p>iii) Commencement of Dependent’s Medical Coverage<br/>
												Coverage for enrolled dependent(s) will commence on the month itself for submission of <br/>
												completed Dependent Medical Enrolment Form to HR by the 10th of the month.<br/></br/>
												For submission to HR after 10th of the month, coverage for the enrolled dependent(s)<br/>
												will only commence on the following month.</p>
										</div>
										
										<h4>D. CONSENT STATEMENT – MEDICAL DEPENDENT DEDUCTION FROM SALARY</h4>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Deduction Per month (RM) :</label>
											
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" name= "Total" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right"></label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">i hereby
										authorize the Company to <br/>deduct the stated premium from my salary, <br/>
										such deduction to commence<br/> from the month following the successful <br/>
										enrolment of my dependent(s).</span>
                                                    </label>
										</div>
                                        </div>
										</div>
										
										
										
                                        
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" name = "submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
           
            </div>
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
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>