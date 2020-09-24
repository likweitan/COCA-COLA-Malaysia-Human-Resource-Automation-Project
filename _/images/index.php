<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
	<link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
	<link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
	<link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
	<!-- fakeloader -->
	<link rel="stylesheet" href="assets/vendor/fakeloader/css/fakeLoader.min.css">
	<!-- animate -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- plyr -->
	<link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css">
	<!-- infinite carousel -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/infinite-carousel/css/carousel.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="social/css/normalize.css" />
	<!-- Izmir css -->
	<link rel="stylesheet" href="assets/vendor/izmir/css/izmir.min.css">
	
	<!-- loading -->
	<style type="text/css">
		.loader {
			--size: 32px;
			--duration: 800ms;
			width: 96px;
			height: 64px;
			margin: 50px auto;
			transform-style: preserve-3d;
			transform-origin: 50% 50%;
			transform: rotateX(60deg) rotateZ(45deg) rotateY(0deg) translateZ(0px);
			position: relative;
		}

		.loader .box {
			width: 32px;
			height: 32px;
			transform-style: preserve-3d;
			position: absolute;
			top: 0;
			left: 0;
		}

		.loader .box:nth-child(1) {
			transform: translate(100%, 0);
			animation: box1 800ms linear infinite;
		}

		.loader .box:nth-child(2) {
			transform: translate(0, 100%);
			animation: box2 800ms linear infinite;
		}

		.loader .box:nth-child(3) {
			transform: translate(100%, 100%);
			animation: box3 800ms linear infinite;
		}

		.loader .box:nth-child(4) {
			transform: translate(200%, 0);
			animation: box4 800ms linear infinite;
		}

		.loader .box>div {
			--translateZ: calc(var(--size) / 2);
			--rotateY: 0deg;
			--rotateX: 0deg;
			background: #5c8df6;
			width: 100%;
			height: 100%;
			transform: rotateY(var(--rotateY)) rotateX(var(--rotateX)) translateZ(var(--translateZ));
			position: absolute;
			top: auto;
			right: auto;
			bottom: auto;
			left: auto;
		}

		.loader .box>div:nth-child(1) {
			top: 0;
			left: 0;
		}

		.loader .box>div:nth-child(2) {
			background: #145af2;
			right: 0;
			--rotateY: 90deg;
		}

		.loader .box>div:nth-child(3) {
			background: #447cf5;
			--rotateX: -90deg;
		}

		.loader .box>div:nth-child(4) {
			background: #dbe3f4;
			top: 0;
			left: 0;
			--translateZ: calc(var(--size) * 3 * -1);
		}

		@keyframes box1 {

			0%,
			50% {
				transform: translate(100%, 0);
			}

			100% {
				transform: translate(200%, 0);
			}
		}

		@keyframes box2 {
			0% {
				transform: translate(0, 100%);
			}

			50% {
				transform: translate(0, 0);
			}

			100% {
				transform: translate(100%, 0);
			}
		}

		@keyframes box3 {

			0%,
			50% {
				transform: translate(100%, 100%);
			}

			100% {
				transform: translate(0, 100%);
			}
		}

		@keyframes box4 {
			0% {
				transform: translate(200%, 0);
			}

			50% {
				transform: translate(200%, 100%);
			}

			100% {
				transform: translate(100%, 100%);
			}
		}
	</style>
	<title>Human Resources</title>
	<!-- Checks to see if username $_SESSION variable is set. If not set, redirects to login page. -->
	<?php
		require "loginheader.php";
		include "db.php";
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
		
		$sql = "SELECT * FROM passwordresettemp LEFT JOIN account ON passwordresettemp.AccountNo=account.AccountNo WHERE account.AccountNo='".$account."' and ExpiryDate >= Current_Timestamp() ORDER BY ExpiryDate DESC LIMIT 1";
	$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);	
	$expirydate = $row['ExpiryDate'];
		$count = mysqli_num_rows($result);
		if($count==1){
			//changepass
			//$sql = "UPDATE passwordresettemp SET ExpiryDate=ExpiryDate+86400 WHERE //AccountNo='".$account."'";
			//$result = mysqli_query($con, $sql);
			header("location: settings/password.php");
		}
		//----------------------------
		$sql = "SELECT *,DATEDIFF(Mod_Timestamp,CURRENT_TIMESTAMP()) AS DayDiff FROM point WHERE AccountNo ='". $_SESSION['username']. "' ORDER BY Mod_Timestamp DESC LIMIT 1";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);	
		$count = mysqli_num_rows($result);
		if($count == 0 || $row['DayDiff']<=-1){
			$random = rand(1,10);
			$sql = "INSERT INTO point (AccountNo,Amount) VALUES ('$account','$random')";
			$result = mysqli_query($con, $sql);
		}
		$sql = "SELECT SUM(Amount) AS Total FROM point WHERE AccountNo='".$account."'";
	$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);	
	$point=$row['Total'];
	//$firstName = $row['FirstName'];
	//	$lastName = $row['LastName'];
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
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" style="width:100px;"></a>
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
													<div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
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
							<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
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
								<a class="nav-link deactive" href="profile.php"><i class="fa fa-fw fa-user-circle"></i>Profile</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
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
			<div class="dashboard-ecommerce">
				<div class="container-fluid dashboard-content ">
					<!-- ============================================================== -->
					<!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="page-header">
								<h2 class="pageheader-title">
									<?php 
										$hour = date("A");
if (($hour == 'AM')) {
	echo 'Good morning, ';
}
							else{
								echo 'Good evening, ';
							}
									?> <?=$fullname?></h2>
								<p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
								<div class="page-breadcrumb">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pageheader  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!--  slides with control  -->
					<!-- ============================================================== -->

					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="container">
								<h1 class="text-center">Human Resource</h1><br>
								<div class="loader">
									<div class="box">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
									<div class="box">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
									<div class="box">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
									<div class="box">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="container">

								<br><br>
								<h3 class="text-center">Total visits to the site <span id="busuanzi_value_site_pv" class="counter "></span></h3><br>
								<h3 class="text-center">Points you have</h3>
								<h1 class="text-center counter"><?=$point?></h1>
								<h3 class="text-center">Come back tomorrow to earn more.</h3>

								<section class="customer-logos slider">
									<?php
						$dirname = "img/";
						$images = glob("$dirname*.{png,PNG,jpeg,JPEG,jpg,JPG}", GLOB_BRACE);
						$username = $_SESSION['username'];
						
					

						
							
							$sql = "SELECT *,TIMESTAMPDIFF(SECOND,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS SecondDiff,
							TIMESTAMPDIFF(MINUTE,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS MinuteDiff,
							TIMESTAMPDIFF(HOUR,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS HourDiff,
							TIMESTAMPDIFF(DAY,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS DayDiff,
							TIMESTAMPDIFF(MONTH,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS MonthDiff
							FROM album,employee GROUP BY AlbumId";
					
						$result = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($result)) {
							$currentDiff = $row['SecondDiff'].' seconds ago';
						if($row['SecondDiff'] > 60)
							$currentDiff = $row['MinuteDiff'].' minutes ago';
						if($row['MinuteDiff'] > 60)
							$currentDiff = $row['HourDiff'].' hours ago';
						if($row['HourDiff'] > 24)
							$currentDiff = $row['DayDiff'].' days ago';
						if($row['DayDiff'] > 30)
							$currentDiff = $row['MonthDiff'];
							
							$imageLocation = pathinfo($row['ImageLocation']);
							
							echo '<div class="slide">';
							
							echo '<a class="grid__link" href="social/index.php"><img style="width:150px;height:100px;object-fit: cover;" class="contain grid__img" src="social/img/'.$imageLocation['basename'].'" /></a>';
							
							echo '</div>';
						
						}
					?>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- ============================================================== -->
				<!--  end slides with indicator  -->
				<!-- ============================================================== -->




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
		<!-- ============================================================== -->
		<!-- end wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- end main wrapper  -->
	<!-- ============================================================== -->
	<!-- Optional JavaScript -->
	<!-- jquery 3.3.1 -->
	<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<!-- bootstap bundle js -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<!-- slimscroll js -->
	<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	<!-- main js -->
	<script src="assets/libs/js/main-js.js"></script>
	<!-- chart chartist js -->
	<script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
	<!-- sparkline js -->
	<script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
	<!-- morris js -->
	<script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
	<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
	<!-- chart c3 js -->
	<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
	<script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
	<script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
	<script src="assets/libs/js/dashboard-ecommerce.js"></script>
	<!-- plyr js -->
	<script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>
	<!-- infinite carousel js -->
	<script src="assets/vendor/infinite-carousel/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>
	<!-- busuanzi -->
	<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
	<!-- counter js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counter-up/js/jquery.counterup.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.counter').counterUp({
				delay: 5,
				time: 3000
			});
		});
	</script>
	<!-- fakeloader -->
	<script src="assets/vendor/fakeloader/js/fakeLoader.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".fakeloader").fakeLoader({
				timeToHide: 1200,
				zIndex: 999, // Default zIndex
				bgColor: "#FFFFFF",
				spinner: "spinner2"
			});
		});
	</script>
	<!-- mansory -->
	<script src="social/js/imagesloaded.pkgd.min.js"></script>
		<script src="social/js/masonry.pkgd.min.js"></script>
		<script src="social/js/anime.min.js"></script>
		<script src="social/js/main.js"></script>
</body>

</html>