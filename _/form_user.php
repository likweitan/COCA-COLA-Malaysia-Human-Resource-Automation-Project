<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<!-- Checks to see if username $_SESSION variable is set. If not set, redirects to login page. -->
    <?php
		require "loginheader.php";
		include('db.php');
		
		$new_joiner_progress = 10;
		
		$sql = "SELECT * FROM uniform WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$uniform_completed = $count;
		
		if($uniform_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM tag WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$tag_completed = $count;
		
		if($tag_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM vehicle WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$vehicle_completed = $count;
		
		if($vehicle_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM education RIGHT JOIN employee ON education.EmployeeId=employee.EmployeeId WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$job_completed = $count;
		
		if($job_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM medical WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$medical_completed = $count;
		
		if($medical_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM survey WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$survey_completed = $count;
		
		if($survey_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM incometax WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$incometax_completed = $count;
		
		if($incometax_completed){
			$new_joiner_progress = $new_joiner_progress + 10;
		}
	
		$sql = "SELECT * FROM headhunter WHERE AccountNo='".$employeeno."'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
	
		$headhunter_completed = $count;

		
		if($new_joiner_progress > 100){
			$new_joiner_progress = 100;
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
											$fullname=$row['NameCard'];
			$role=$row['Role'];
											echo '<a href="#" class="list-group-item list-group-item-action active">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">';
			echo $fullname;
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
								<?php echo "<a class='nav-link deactive' href='profile.php?id=$employeeno'><i class='fa fa-fw fa-user-circle'></i>Profile</a>";?>
								
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="https://teams.microsoft.com/l/team/"><i class="fab fa-rocketchat"></i>Microsoft Team</a>
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
								<a class="nav-link active" href="form_user.php"><i class="fas fa-file"></i>Document</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<?php
							if($role == 'admin' || $role == 'superuser')
							echo '<li class="nav-divider">
								Manage
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="form_admin.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="information.php"><i class="fas fa-info"></i>Information</a>
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
                            <h2 class="pageheader-title">Document</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Explore</li>
                                        <li class="breadcrumb-item active" aria-current="page">Document</li>
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
                                    <div class="card" id="pro-bars">
                                        <h5 class="card-header">Progress Bars</h5>
                                        <div class="card-body">
                                            <div class="progress mb-3">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?= $new_joiner_progress?>%" aria-valuenow="<?= $new_joiner_progress?>" aria-valuemin="0" aria-valuemax="100"><?= $new_joiner_progress?></div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-md-12">
													<?php
													if($new_joiner_progress < 100)
                                                    echo '<h5>Welcome new joiner!</h5>
                                                    <p>You are required to complete the new joiner form.</p>';
							else
								echo '<h5>Congradulations new joiner!</h5>
                                                    <p>You have completed all the forms.</p>
													<p>Be sure to come back to submit other forms.</p>';
								?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Form</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
												<th scope="col">No</th>
												<th scope="col">Name</th>
                                                <th scope="col">State</th>
												<th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
												<td>1</td>
                                                <td>Uniform New Joiner Form</td>
												
												<?php
														if($uniform_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/uniform_new_joiner.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/uniform_new_joiner.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>2</td>
                                                <td>Employee ID Form</td>
                                                <?php
														if($tag_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/employee_id_form.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/employee_id_form.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>3</td>
                                                <td>Vehicle Sticker Request Form</td>
												<?php
														if($vehicle_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/vehicle_sticker_request.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/vehicle_sticker_request.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>4</td>
                                                <td>Job Application Form</td>
                                                <?php
														if($job_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/job_application_form.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/job_application_form.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>5</td>
                                                <td>Dependent Medical Benefits Enrolment Form</td>
                                                <?php
														if($medical_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/dependent_medical_benefits_enrolment_form.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/dependent_medical_benefits_enrolment_form.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>6</td>
                                                <td>90 Day Touchpoint Form</td>
                                                <?php
														if($survey_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/90_day_touchpoint.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/90_day_touchpoint.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											<tr>
												<td>7</td>
                                                <td>Income Tax Form</td>
                                                <?php
														if($incometax_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/income_tax.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/income_tax.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
											
                                            <tr>
												<td>8</td>
                                                <td>Be a Headhunter Form</td>
												<?php
														if($headhunter_completed)
														{
															echo "<td>";
															echo 'Completed';
															echo '</td>';
															echo "<td><a href=\"form/be_a_headhunter.php?id=$employeeno&action=view\">View</td>";
														}
														else
														{
															echo '<td>';
															echo 'Incompleted';
															echo '</td>';
															echo '<td><a href="form/be_a_headhunter.php?action=insert">Submit</a></td>';
														}
													?>
                                            </tr>
                                            <tr>
												<td>9</td>
                                                <td>ICO Application Form</td>
												<td></td>
												<td><a href="form/ico_application.php?action=insert">Submit</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                        <!-- ============================================================== -->
						<!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Policy</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Modified</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												$sql = "SELECT *,DATE_FORMAT(Mod_Timestamp,GET_FORMAT(DATE,'ISO')) AS ModifyDate FROM policy LEFT JOIN employee ON policy.AccountNo = employee.AccountNo ORDER BY PolicyNo ASC";
				$result = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($result)) {
											?>
                                            <tr>
                                                <td><?php echo $row["PolicyNo"]; ?></td>
                                                <td><?php echo $row["PolicyTitle"]; ?></td>
                                                <td><?php echo $row["ModifyDate"]; ?></td>
												<?php echo "<td><a href=\"policy_display.php?id=$row[PolicyNo]\">View</a></td>";	 ?>
                                            </tr>
											<?php
				}
				?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
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
                                <a href="about.php">About</a>
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
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
	
	<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
	
	<script>
    	var ctx = document.getElementById('accountChart');
    	var accountChart = new Chart(ctx, {
    				type: 'bar',
    				data: {
    					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
    					datasets: [{
    								label: '# of Created Accounts',
    								data: [<?=$Jan?>,<?=$Feb?>,<?=$Mar?>,<?=$Apr?>,<?=$May?>,<?=$Jun?>,<?=$Jul?>,<?=$Aug?>,<?=$Sept?>,<?= $Oct?>,<?=$Nov?>,<?=$Dec?>],
    								backgroundColor: [
    										'rgba(255, 99, 132, 0.2)',
    										'rgba(54, 162, 235, 0.2)',
    					'rgba(255, 206, 86, 0.2)',
    					'rgba(75, 192, 192, 0.2)',
    					'rgba(153, 102, 255, 0.2)',
    					'rgba(255, 159, 64, 0.2)'
    				],
    				borderColor: [
    					'rgba(255, 99, 132, 1)',
    					'rgba(54, 162, 235, 1)',
    					'rgba(255, 206, 86, 1)',
    					'rgba(75, 192, 192, 1)',
    					'rgba(153, 102, 255, 1)',
    					'rgba(255, 159, 64, 1)'
    				],
    				borderWidth: 1
    			}]
    		},
    		options: {
    			scales: {
    				yAxes: [{
    					ticks: {
    						beginAtZero: true
    					}
    				}]
    			}
    		}
    	});
    </script>
	
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