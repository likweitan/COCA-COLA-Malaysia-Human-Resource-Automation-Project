<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Uniform New Joiner</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<?php
	require("../loginheader.php");
	include("../db.php");
	
	$action = $_GET['action'];
	
	if($action == 'update'){
		$account_select = $_GET['id'];
		$sql = "SELECT * FROM uniform RIGHT JOIN employee ON uniform.AccountNo=employee.AccountNo WHERE UniformId='".$account_select."'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);

		if($row){
			$fullname = $row['NameCard'];
			$employeeno = $row['AccountNo'];
			$designation = $row['Designation'];
	$department = $row['Department'];
			$pantssize = $row['PantsSize'];
	$pantsquantity = $row['PantsQuantity'];
	$shirtsize = $row['ShirtSize'];
	$shirtquantity = $row['ShirtQuantity'];
	$uniformdate = $row['Mod_Timestamp'];
		}
	}
	else if($action == 'view'){
			// Uniform New Joiner
$sql = "SELECT * FROM uniform WHERE AccountNo='".$employeeno."' ORDER BY UniformId DESC LIMIT 1";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

if($row){
	$pantssize = $row['PantsSize'];
	$pantsquantity = $row['PantsQuantity'];
	$shirtsize = $row['ShirtSize'];
	$shirtquantity = $row['ShirtQuantity'];
	$uniformdate = $row['Mod_Timestamp'];
}
	}
	
	if($action == 'insert'){
		$actionphp = "uniform_new_joiner_insert.php";
		$formbutton = 'Submit';
		
	}
	else{
		$actionphp = "uniform_new_joiner_update.php?id=$account_select";
		$formbutton = 'Update';
	}
	?>
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
							TIMESTAMPDIFF(MONTH,Start_Timestamp,CURRENT_TIMESTAMP()) AS MonthDiff FROM employee RIGHT JOIN account ON employee.AccountNo=account.AccountNo WHERE FirstName IS NOT NULL ORDER BY Start_Timestamp DESC";
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
											$name=$row['NameCard'];
											echo '<a href="#" class="list-group-item list-group-item-action active">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">';
			echo $name;
			echo '</span>has join the team.
														<div class="notification-date">';
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
									<h5 class="mb-0 text-white nav-user-name"><?=$firstname?></h5>
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
								<?php echo "<a class='nav-link deactive' href='../profile.php?id=$employeeno'><i class='fa fa-fw fa-user-circle'></i>Profile</a>";?>
								
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="https://teams.microsoft.com/l/team/"><i class="fab fa-rocketchat"></i>Microsoft Team</a>
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
								<a class="nav-link active" href="../form_user.php"><i class="fas fa-file"></i>Document</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<?php
							if($role == 'admin' || $role == 'superuser')
							echo '<li class="nav-divider">
								Manage
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../form_admin.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../information.php"><i class="fas fa-info"></i>Information</a>
							</li>';
							if($role == 'superuser')
							echo '<li class="nav-item ">
								<a class="nav-link deactive" href="https://svr3.internet-webhosting.com:2083/cpsess1885430230/3rdparty/phpMyAdmin/index.php"><i class="fas fa-database"></i>Database</a>
							</li>';
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
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Explore</li>
                                        <li class="breadcrumb-item active" aria-current="page">Document</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
				<div class="row">
        <!-- ============================================================== -->
        <!-- Personal Details  -->
        <!-- ============================================================== -->
			 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Uniform New Joiner</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?=$actionphp?>" method="post"> 
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" value="<?php echo $fullname;?>" disabled class="form-control">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employee/Passport Number </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" value="<?php echo $employeeno;?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" value="<?php echo $department;?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Designation </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" value="<?php echo $designation;?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Mobile Number </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" value="<?php echo $mobileno;?>" disabled class="form-control">
                                            </div>
                                        </div>
                                      
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Pants size </label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="PSize" <?php echo ($pantssize=='S')?'checked':'' ?> value="S"  class="custom-control-input" ><span class="custom-control-label">S</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="PSize" value="M" class="custom-control-input" <?php echo ($pantssize=='M')?'checked':'' ?>><span class="custom-control-label">M</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="PSize" value="L"  class="custom-control-input" <?php echo ($pantssize=='L')?'checked':'' ?>><span class="custom-control-label" >L</span>
                                            </label>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="PSize" value="XL" class="custom-control-input" <?php echo ($pantssize=='XL')?'checked':'' ?>><span class="custom-control-label" >XL</span>
                                            </label>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="PSize" value="XXL"  class="custom-control-input" <?php echo ($pantssize=='XXL')?'checked':'' ?>><span class="custom-control-label" >XXL</span>
                                            </label>
											
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Pants Quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" name="PQuantity" required="" data-parsley-type="alphanum" value="<?php echo $pantsquantity;?>" placeholder="" class="form-control" >
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Shirt size </label>
                                            <div class="col-sm-6">
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="SSize" value="S" class="custom-control-input" <?php echo ($shirtsize=='S')?'checked':'' ?>><span class="custom-control-label">S</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="SSize" value="M" class="custom-control-input" <?php echo ($shirtsize=='M')?'checked':'' ?>><span class="custom-control-label">M</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="SSize" value="L" class="custom-control-input" <?php echo ($shirtsize=='L')?'checked':'' ?>><span class="custom-control-label">L</span>
                                            </label>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="SSize" value="XL" class="custom-control-input" <?php echo ($shirtsize=='XL')?'checked':'' ?>><span class="custom-control-label">XL</span>
                                            </label>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="SSize" value="XXL" class="custom-control-input" <?php echo ($shirtsize=='XXL')?'checked':'' ?>><span class="custom-control-label">XXL</span>
                                            </label>
											
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Shirts Quantity </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" name="SQuantity" value="<?php echo $shirtquantity;?>" required="" data-parsley-type="alphanum" placeholder="" class="form-control">
                                            </div>
											
                                        </div>
										<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['error']);
                    }
                	?>
										<?php if($action != 'view'){
										echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <button class="btn btn-primary" name="submit" type="submit">';
										echo $formbutton;
										echo '</button>
                                            </div>';}
										?>
										</div>
										
									</form>
									
								</div>
							</div>
						</div>
				</div>
			</div>
            <!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<div class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

							© 2019 <a href="https://www.coca-cola.com.my/">The Coca-Cola Company</a>, all rights reserved.
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="text-md-right footer-links d-none d-sm-block">
								<a href="about.php">About</a>
								<!--<a href="javascript: void(0);">Support</a>
								<a href="javascript: void(0);">Contact Us</a>-->
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