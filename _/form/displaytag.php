<?php
require "../loginheader.php";
include("../db.php");

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

$EmployeeId=$_GET['id'];
$query = mysqli_query($con, "SELECT * FROM account WHERE AccountNo = $EmployeeId");
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$phone= $rs['Phone'];
	}
	}
	$query = mysqli_query($con, "SELECT * FROM employee WHERE AccountNo = $EmployeeId");
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$name= $rs['NameCard'];
		$department=$rs['Department'];
		$designation=$rs['Designation'];
	}
	}
	
	$query = mysqli_query($con, "SELECT * FROM tag WHERE AccountNo = $EmployeeId");
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$reason=$rs['Reason'];
		$LostDate=$rs['LostDate'];
	}
	}
	
?>


<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee ID Form</title>
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
				<a class="navbar-brand" href="index.php">HR</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto navbar-right-top">
						<li class="nav-item">
						</li>
						<li class="nav-item dropdown notification">
							<a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
							<ul class="dropdown-menu dropdown-menu-right notification-dropdown">
								<li>
									<div class="notification-title"> Notification</div>
									<div class="notification-list">
										<div class="list-group">
											<?php 
											$sql = "SELECT *,TIMESTAMPDIFF(SECOND,Start_Timestamp,CURRENT_TIMESTAMP()) AS SecondDiff,
							TIMESTAMPDIFF(MINUTE,Start_Timestamp,CURRENT_TIMESTAMP()) AS MinuteDiff,
							TIMESTAMPDIFF(HOUR,Start_Timestamp,CURRENT_TIMESTAMP()) AS HourDiff,
							TIMESTAMPDIFF(DAY,Start_Timestamp,CURRENT_TIMESTAMP()) AS DayDiff,
							TIMESTAMPDIFF(MONTH,Start_Timestamp,CURRENT_TIMESTAMP()) AS MonthDiff FROM employee RIGHT JOIN account ON employee.AccountNo=account.AccountNo RIGHT JOIN point ON employee.AccountNo=point.AccountNo WHERE FirstName IS NOT NULL ORDER BY Start_Timestamp DESC";
									$query = mysqli_query($con, $sql);
											if(mysqli_num_rows($query)!=0){
		while($row = mysqli_fetch_array($query)){
			$currentDiff = $row['SecondDiff'].' seconds ago';
						if($row['SecondDiff'] > 60)
							$currentDiff = $row['MinuteDiff'].' minutes ago';
						if($row['MinuteDiff'] > 60)
							$currentDiff = $row['HourDiff'].' hours ago';
						if($row['HourDiff'] > 24)
							$currentDiff = $row['DayDiff'].' days ago';
						if($row['DayDiff'] > 30)
							$currentDiff = $row['MonthDiff'].' months ago';

											echo '<a href="#" class="list-group-item list-group-item-action active">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">';
			
			
			
				echo $fullname;
			echo '</span>has received ';echo $row['Amount'];echo ' points.';
			
														echo '<div class="notification-date">';
			echo $currentDiff;
				echo '</div>
													</div>
												</div>
											</a>';
											}
												} else {
											echo '<h2>No result</h2>';
												}
											?>
										</div>
									</div>
								</li>
								<li>
									<div class="list-footer"> <a href="notification.php">View all notifications</a></div>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown nav-user">
							<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
							<div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
								<div class="nav-user-info">
									<h5 class="mb-0 text-white nav-user-name"><?=$fullname?></h5>
									<span class="status"></span><span class="ml-2"><?php echo date("Y-m-d"); ?></span>
								</div>
								<a class="dropdown-item" href="profile.php"><i class="fas fa-user mr-2"></i>Account</a>
								<a class="dropdown-item" href="setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
								<a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
								<a class="nav-link deactive" href="../form_user.php"><i class="fas fa-file"></i>Form</a>
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
								<a class="nav-link deactive" href="../manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="../form.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../data-tables.php"><i class="fas fa-info"></i>Information</a>
							</li>'
								?>
							<li class="nav-divider">
								Setting
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../logout.php"><i class="fas fa-power-off mr-2"></i>Logout<span class="badge badge-success">6</span></a>
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
                
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
			 		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- SQL CODE         -->
        <!-- ============================================================== -->
		

                    
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->					
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header d-flex">
                                        <h4 class="card-header-title">Employee ID Form</h4>
                                        <div class="toolbar ml-auto">
                                            <button type="button" onclick="printJS('printJS-form', 'html')" class="btn btn-success btn-sm ">Print</button>
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <form method="post" action="#" id="printJS-form" data-parsley-validate="" novalidate="">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control" value="<?=$name?>">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employee/ Passport No. :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="" class="form-control" value="<?=$EmployeeId?>">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="" class="form-control" value="<?=$department?>">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Designation :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="" class="form-control" value="<?=$designation?>">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Resaon :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="" class="form-control" value="<?=$reason?>">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Mobile No. :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control" value="<?=$phone?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Lost Date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control" value="<?=$LostDate?>">
                                            </div>
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
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
	
	<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
		<script src="https://printjs-4de6.kxcdn.com/print.min.css"></script>



</body>
 
</html>