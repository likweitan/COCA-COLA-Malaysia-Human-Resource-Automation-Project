<?php
include("../db.php");
require "../loginheader.php";
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
$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $_SESSION['username']. "'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		
		$AccountNo = $_SESSION['username'];
		$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$fullname=$row['NameCard'];
		$role = $row['Role'];
		$lastlogin = $row['Start_Timestamp'];
	$lastlogout = $row['Mod_Timestamp'];
	$id = $_SESSION['username'];
	$query = mysqli_query($con, "SELECT employee.FirstName, employee.LastName, employee.Department, employee.Designation, employee.JoinDate FROM employee 
	INNER JOIN account on account.AccountNo=employee.AccountNo WHERE account.AccountNo = '$AccountNo'");
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$FirstName = $rs['FirstName'];
		$LastName = $rs['LastName'];
		$FullName= $FirstName.' '.$LastName;
		$Department = $rs['Department'];
		$Designation = $rs['Designation'];
		$JoinDate = $rs['JoinDate'];
	}
}	
	
	if(isset($_POST['submit'])){
	$AccountNo = $_SESSION['username'];
	$Question1 = mysqli_real_escape_string($con, $_POST['Question1']);
	$Question2 = mysqli_real_escape_string($con, $_POST['Question2']);
	$Question3 = mysqli_real_escape_string($con, $_POST['Question3']);
	$Question4 = mysqli_real_escape_string($con, $_POST['Question4']);
	$Question5 = mysqli_real_escape_string($con, $_POST['Question5']);
	$Question6 = mysqli_real_escape_string($con, $_POST['Question6']);
	$insert = mysqli_query($con, "INSERT INTO survey ( AccountNo, Question1, Question2, Question3, Question4, Question5, Question6) VALUES ('$AccountNo','$Question1', '$Question2', '$Question3', '$Question4', '$Question5', '$Question6')");
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
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
               
            </div>
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- SQL CODE         -->
        <!-- ============================================================== -->
		

		
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BY HUMAN RESOURCES 90 DAY TOUCH POINT  -->
        <!-- ============================================================== -->
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
							
                                <h5 class="card-header text-center">FORM TO BE FILLED ON DAY OF JOINING BY NEW EMPLOYEE </h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="FullName"  value="<?php echo $FullName;?>" disabled placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Designation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Designation"  value="<?php echo $Designation;?>" disabled placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="Department"  value="<?php echo $Department;?>" disabled placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Joining </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" disabled value="<?php echo $JoinDate;?>" placeholder="DD/MM/YYYY" class="form-control">
                                            </div>
                                        </div>
										<h4 class="text"></h4>										
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">1. What attracted you to join Coca-Cola? </label>
                                                <input type="text" name="Question1" class="form-control" id="validationCustom01" placeholder="Type Something" value="" required="*">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
												<h6 class="text"> </h6>
                                            </div>
											
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">2. What do you expect from your job? </label>
                                                <input type="text" name="Question2" class="form-control" id="validationCustom01" placeholder="Type Something" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
												<h6 class="text"> </h6>
                                            </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">3. What do you expect from your manager?</label>
                                                <input type="text"  name="Question3" class="form-control" id="validationCustom01" placeholder="Type Something" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
												<h6 class="text"> </h6>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">4. What will you do to ensure that your expectations are met?  </label>
                                                <input type="text"  name="Question4" class="form-control" id="validationCustom01" placeholder="Type Something" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
												<h6 class="text"> </h6>
                                            </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">5. How important is work-life balance to you? </label> 
												<h6 class="text">&nbsp *On a scale of 5, please select the most appropriate answer</h6>
												<label class="custom-control custom-radio">
                                                <input type="radio" name="Question5" value="1. Absolutely Unimportant"  class="custom-control-input" ><span class="custom-control-label">1. Absolutely Unimportant </span>
                                            </label>
												<label class="custom-control custom-radio">
                                                <input type="radio" name="Question5" value="2. Unimportant"  class="custom-control-input" ><span class="custom-control-label">2. Unimportant </span>
                                            </label>	
												<label class="custom-control custom-radio">
                                                <input type="radio" name="Question5" value="3. Neither Important or Unimportant"  class="custom-control-input" ><span class="custom-control-label">3. Neither Important or Unimportant </span>
                                            </label>
												<label class="custom-control custom-radio">
                                                <input type="radio" name="Question5" value="4. Important"  class="custom-control-input" ><span class="custom-control-label">4. Important </span>
                                            </label>
												<label class="custom-control custom-radio">
                                                <input type="radio" name="Question5" value="5. Extremely Important" class="custom-control-input" ><span class="custom-control-label">5. Extremely Important </span>
                                            </label>
												<h6 class="text"> </h6>
                                            </div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">6. Additional comment </label>
                                                <input type="text"  name="Question6" class="form-control" id="validationCustom01" placeholder="Type Something" value="" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
												<h6 class="text"> </h6>
                                            
									<div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                                        <label class="form-check-label" for="invalidCheck">
                                                            This form is for internal use purpose, your information will not be leak out
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
											</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                            </div>	
											
                                    </form>
                                
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
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>