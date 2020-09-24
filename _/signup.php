<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
		<?php
		session_start();
		if (isset($_SESSION['username'])) {
    		header("location:index.php");
		}
	?>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div id="particles-js" class="background"></div>
    <form class="splash-container" action="register.php" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Sign Up</h3>
                <p>staff</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="Name" name="Name" required="" placeholder="Name" autocomplete="off">
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="IC" name="IC" required="" placeholder="IC" autocomplete="off">
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="Mobile" name="Mobile" required="" placeholder="Mobile Number" autocomplete="off">
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="Designation" name="Designation" required="" placeholder="Designation" autocomplete="off">
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="Department" name="Department" required="" placeholder="Department" autocomplete="off">
                </div>
				<div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="ID" name="ID"  placeholder="Employment ID" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" id="Email" name="Email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" id="submit" name="submit" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" checked><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
						
                    </label>
						<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['error']);
                    }
                	?>
                </div>

            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
		
    </form>

    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/particles/js/particles.js"></script>
    <script src="assets/vendor/particles/js/app.js"></script>
    <script src="assets/vendor/particles/js/particles.min.js"></script>
</body>

 
</html>