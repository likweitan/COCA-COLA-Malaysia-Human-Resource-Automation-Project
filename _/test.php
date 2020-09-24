<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
        background-color: darkred;
    }
    </style>
	<?php
		session_start();
		if (isset($_SESSION['username'])) {
    		header("location:index.php");
		}
	?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div id="particles-js" class="background"></div>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="/assets/images/logo.png" alt="logo" width=100></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form  id="login" name="form1" action="checklogin.php" method="post">
                    <div class="form-group">
						<input name="myusername" id="myusername" type="text" class="form-control form-control-lg" placeholder="IC/Passport" maxlength="50" autofocus autocomplete="off">
						<span id='login_username_errorloc' class='error'></span>
                    </div>
                    <div class="form-group">
						<input name="mypassword" id="mypassword" type="password" class="form-control form-control-lg" placeholder="Password" maxlength="50" autocomplete="off">
						<span id='login_password_errorloc' class='error'></span>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
					
                    <button name="Submit" id="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="login">Sign in</button>
					<br>
                    <div id="message"></div>
                </form>
            </div>
            <div class="card-footer p-0 text-center">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password.php" class="footer-link">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/assets/vendor/particles/js/particles.js"></script>
    <script src="/assets/vendor/particles/js/app.js"></script>
    <script src="/assets/vendor/particles/js/particles.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/libs/js/jquery-2.2.4.min.js"></script>
	<!-- The AJAX login script -->
    <script src="/assets/libs/js/login.js"></script>
    
</body>
 
</html>