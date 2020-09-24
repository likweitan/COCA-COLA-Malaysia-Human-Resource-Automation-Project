<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Manage User</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<!-- pace -->
	<script src="assets/vendor/pace/js/pace.js"></script>

	<!-- Checks to see if username $_SESSION variable is set. If not set, redirects to login page. -->
	<?php
		require "loginheader.php";
		include ('chart.php');
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
											<a href="#" class="list-group-item list-group-item-action active">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
														<div class="notification-date">2 min ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">
															John Abraham</span>is now following you
														<div class="notification-date">2 days ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
														<div class="notification-date">2 min ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action">
												<div class="notification-info">
													<div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
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
											<a href="#" class="connection-item"><img src="assets/images/github.png" alt=""> <span>Github</span></a>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
											<a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt=""> <span>Dribbble</span></a>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
											<a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt=""> <span>Dropbox</span></a>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
											<a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
											<a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt=""><span>Mail chimp</span></a>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
											<a href="#" class="connection-item"><img src="assets/images/slack.png" alt=""> <span>Slack</span></a>
										</div>
									</div>
								</li>
								<li>
									<div class="conntection-footer"><a href="#">More</a></div>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown nav-user">
							<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
							<div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
								<div class="nav-user-info">
									<h5 class="mb-0 text-white nav-user-name">
										John Abraham</h5>
									<span class="status"></span><span class="ml-2">Available</span>
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
								<a class="nav-link deactive" href="#"><i class="fab fa-rocketchat"></i>Messenger</a>
							</li>
							<li class="nav-divider">
								Explore
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="#"><i class="fas fa-bookmark"></i>Saved</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="#"><i class="fas fa-sitemap"></i>Group</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="form.php"><i class="fas fa-bookmark"></i>Document</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="#"><i class="fas fa-calendar-alt"></i>Event</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="games.php"><i class="fas fa-gamepad"></i>Games</a>
							</li>
							<li class="nav-divider">
								Admin
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="manage_user.php"><i class="fas fa-gamepad"></i>Account Management</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="register.php"><i class="fas fa-gamepad"></i>Registration</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="data-tables.php"><i class="fas fa-gamepad"></i>Data Table</a>
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
							<h2 class="pageheader-title">Account Management</h2>
							<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
							<div class="page-breadcrumb">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Account Management</li>
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
					<!-- vehicle detail -->
					<!-- ============================================================== -->
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
							<div class="card-header d-flex">
								<h4 class="card-header-title">Account</h4>
								<div class="toolbar ml-auto">
									<a href="#addEmployeeModal" class="btn btn-success btn-sm " data-toggle="modal">Add</a>
									<a href="JavaScript:void(0);" class="btn btn-danger btn-sm" id="delete_multiple">Delete</a>
								</div>
							</div>
							<div class="card-body">
								<p id="success"></p>
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>
													<span class="custom-checkbox">
														<input type="checkbox" id="selectAll">
														<label for="selectAll"></label>
													</span>
												</th>
												<th>Policy No</th>
												<th>Policy Title</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php
										include "db.php";
										
										$sql = "SELECT * FROM policy";
				$result = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($result)) {
				?>
											<tr id="<?php echo $row["PolicyNo"]; ?>">
												<td>
													<span class="custom-checkbox">
														<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["PolicyNo"]; ?>">
														<label for="checkbox2"></label>
													</span>
												</td>
												<!--<td><?php //echo $row["Email"]; ?></td>-->
												<td><?php echo $row["PolicyNo"]; ?></td>
												<td><?php echo $row["PolicyTitle"]; ?></td>
												<!--Phone-->
												<!--<td><?php //echo $row["PolicyParagraph"]; ?></td><PassKey-->
												<!--<td><?php //echo $row["Role"]; ?></td>role-->
												<td>
													<a href="#editEmployeeModal" class="edit" data-toggle="modal">
														<i class="fas fa-edit update" data-toggle="tooltip" data-id="<?php echo $row["PolicyNo"]; ?>" data-PolicyTitle="<?php echo $row["PolicyTitle"]; ?>" data-password="<?php echo $row["PolicyParagraph"]; ?>" data-role="<?php echo $row["Role"]; ?>" title="Edit"> </i>
													</a>
													<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["PolicyNo"]; ?>" data-toggle="modal">
														<i class="fas fa-trash" data-toggle="tooltip" title="Delete"> </i></a>
												</td>
											</tr>
											<?php
				}
				?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- Add Modal HTML -->
						<div id="addEmployeeModal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="first_time_password.php" id="user_form">
										<div class="modal-header">
											<h4 class="modal-title">Add Policy</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label>Policy No</label>
												<input type="text" id="PolicyNo" name="PolicyNo" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Policy Paragraph</label>
												<input type="text" id="PolicyParagraph" name="PolicyParagraph" class="form-control" required>
											</div>
											<input type="hidden" id="AccountNo" name="AccountNo" class="form-control" value="guest" required>
											<div class="modal-footer">
												<input type="hidden" value="1" name="type">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
												<button type="button" class="btn btn-success" id="btn-add">Add</button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form id="update_form">
									<div class="modal-header">
										<h4 class="modal-title">Edit User</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="id_u" name="id" class="form-control" required>
										<div class="form-group">
											<label>Email</label>
											<input type="text" id="email_u" name="email" class="form-control" required>
										</div>
										<div class="form-group">
											<label>PolicyTitle</label>
											<input type="text" id="PolicyTitle_u" name="PolicyTitle" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" id="password_u" name="password" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Role</label>
											<input type="text" id="role_u" name="role" class="form-control" required>
										</div>
									</div>
									<div class="modal-footer">
										<input type="hidden" value="2" name="type">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<button type="button" class="btn btn-info" id="update">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form>

									<div class="modal-header">
										<h4 class="modal-title">Delete User</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="id_d" name="id" class="form-control">
										<p>Are you sure you want to delete these Records?</p>
										<p class="text-warning"><small>This action cannot be undone.</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<button type="button" class="btn btn-danger" id="delete">Delete</button>
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
			<!-- bar chart  -->
			<!-- ============================================================== -->
			<div class="row">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="card">
						<h5 class="card-header">Form Completion</h5>
						<div class="card-body">
							<canvas id="accountChart"></canvas>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- bar chart  -->
			<!-- ============================================================== -->
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
	<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/vendor/parsley/parsley.js"></script>
	<script src="assets/libs/js/main-js.js"></script>
	<script src="assets/libs/js/signup.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="assets/libs/js/bootstrap.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<!-- Ajax -->
	<script src="assets/libs/js/ajax.js"></script>
	<!-- Chart js -->
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
					data: [<?=$Jan?>, <?=$Feb?>, <?=$Mar?>, <?=$Apr?>, <?=$May?>, <?=$Jun?>, <?=$Jul?>, <?=$Aug?>, <?=$Sept?>, <?= $Oct?>, <?=$Nov?>, <?=$Dec?>],
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
</body>

</html>