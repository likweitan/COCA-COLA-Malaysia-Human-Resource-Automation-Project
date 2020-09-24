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
	<!-- JQuery Peeper CSS -->
	<link rel="stylesheet" href="assets/vendor/peeper/css/jquery-peeper.min.css" />
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
                <form  id="login" name="form1" action="loginsystem.php" method="post">
                    <div class="form-group">
						<?php
                    	if(isset($_SESSION["tempusername"])){
							$tempusername = $_SESSION["tempusername"];
                    	}
						else
						{
							$tempusername = "";
						}
                		?>
						<input name="myusername" id="myusername" type="text" class="form-control form-control-lg" placeholder="IC/Passport" maxlength="50" autofocus autocomplete="off" value="<?php echo "$tempusername"?>">
						<span id='login_username_errorloc' class='error'></span>
                    </div>
                    <div class="form-group">
						<input name="mypassword" id="mypassword" type="password" class="form-control form-control-lg" placeholder="Password" maxlength="50" autocomplete="off">
						<span id='login_password_errorloc' class='error'></span>
                    </div>
					
                    <button name="Submit" id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
					<br>
					
					<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['tempusername']);
						unset($_SESSION['error']);
                    }
                	?>
						
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
	<!-- JQuery Peeper CSS -->
    <script src="assets/vendor/peeper/js/jquery-peeper.min.js"></script>
	<script>
		$("#mypassword").peeper({
            mask: false,
            showPasswordCss: 'fa fa-eye',
            showCopyBtn: false
        });
	</script>
</body>
 
</html>