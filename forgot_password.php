<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Concept - Bootstrap 4 Admin Dashboard Template</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<?php
		session_start();
		if (isset($_SESSION['username'])) {
    		header("location:index.php");
		}
	?>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
		}
	</style>
</head>

<body>
	<!-- ============================================================== -->
	<!-- forgot password  -->
	<!-- ============================================================== -->
	<div id="particles-js" class="background"></div>
	<div class="splash-container">
		<div class="card">
			<div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" width=100px alt="logo"><span class="splash-description">Please enter your user information.</span></div>
			<div class="card-body">
				<form action="reset-password.php" method="post">
					<p>Don't worry, we'll send you an email to reset your password.</p>
					<div class="form-group">
						<input class="form-control form-control-lg" type="text" name="myusername" id="myusername" required="" placeholder="IC/Passport No" autocomplete="off" autofocus>
					</div>
					<div class="form-group pt-1"><button name="Submit" id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Reset password</button></div>
				</form>
				<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['error']);
                    }
                	?>
			</div>
			<div class="card-footer text-center">
				<span>Have an account? <a href="login.php">Log In</a></span>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- end forgot password  -->
	<!-- ============================================================== -->
	<!-- Optional JavaScript -->
	<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/vendor/particles/js/particles.js"></script>
	<script src="assets/vendor/particles/js/app.js"></script>
	<script src="assets/vendor/particles/js/particles.min.js"></script>
</body>


</html>