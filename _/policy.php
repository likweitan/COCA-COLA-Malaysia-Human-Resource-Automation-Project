<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guest</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<?php require "loginheader.php";
	include('db.php');
	$sql = "SELECT * FROM account RIGHT JOIN employee ON account.AccountNo=employee.AccountNo WHERE account.AccountNo ='". $_SESSION['username']. "'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		
		$account = $_SESSION['username'];
		$firstname = $row['FirstName'];
		$role = $row['Role'];
		$lastlogin = $row['Mod_Timestamp'];
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
											
											echo '<a href="#" class="list-group-item list-group-item-action active">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">';
			echo $row['FirstName'];
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
							<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
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
								<a class="nav-link deactive" href="profile.php"><i class="fa fa-fw fa-user-circle"></i>Profile</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="commingsoon.php"><i class="fab fa-rocketchat"></i>Messenger</a>
							</li>
							<li class="nav-divider">
								Explore
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="notification.php"><i class="fas fa-bell"></i>Notifications</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="social/index.php"><i class="fas fa-images"></i>Album</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="form_user.php"><i class="fas fa-file"></i>Form</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<?php
							if($role == 'admin')
							echo '<li class="nav-divider">
								Manage
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="form_admin.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="information.php"><i class="fas fa-info"></i>Information</a>
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
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Policy</h2>
                            <p class="pageheader-text">PERSONAL DATA PROTECTION ACT 2010</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['error']);
                    }
                	?>
                                    <!-- ============================================================== -->
                                    <!-- overview -->
                                    <!-- ============================================================== -->
                                    
                                    <!-- ============================================================== -->
                                    <!-- end overview -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
                <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
													<?php
		$no = mysqli_real_escape_string($con, $_GET['id']);
			$sql = "SELECT * FROM policy WHERE PolicyNo =".$no;
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$paragraph = base64_decode($row['PolicyParagraph']);
											$title = $row['PolicyTitle'];?>
													<div class="card">
                                <div class="card-header d-flex">
                                        <h4 class="card-header-title"><?=$title?></h4>
                                    </div>
						<div class="card-body">
							
													<form method="post" action="policy_submit.php">
														<input type="hidden" id="policyno" name="policyno" value="<?=$no?>">
    <textarea name="editor" id="editor" rows="10" cols="80">
    	<?php
		echo $paragraph;
		?>
    </textarea>
														<br><br>
                                                    <p class="text-center">
														<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
                                                    </p>
                                                    <br>
    
</form>
														</div></div></div>
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
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
 	
		<script src="https://cdn.tiny.cloud/1/mkjp9mm0khcfwu7x4lpze6j42r4zg6erkgwp0udhkqebmftn/tinymce/5/tinymce.min.js"></script>
		<script>
tinymce.init({
    selector: "#editor",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
	height: 750,
    toolbar: "fontselect fontsizeselect | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	font_formats: "Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Open Sans=Open Sans,helvetica,sans-serif;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
	fontsize_formats: "8px 10px 11px 12px 14px 18px 24px 36px",
	setup: function (ed) {
                                    ed.on('init', function (e) {
                                    	ed.execCommand("fontName", false, "Verdana");
                                    });
									}
});
</script>
</body>
 
</html>