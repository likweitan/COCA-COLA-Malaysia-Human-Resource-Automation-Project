<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta name="keywords" content="css3, html5, js, background video, fullscreen video">
  <meta name="description" content="Super easy to implement HTML5 fullscreen background video library in JavaScript.">
    <title>Coca Cola (Malaysia)</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
	
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
  
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
	<style>
	    * {
      margin: 0; padding: 0;
    }

    html, body {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #container {
      overflow: hidden;
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
    }

    #background_video {
      position: absolute;

      top: 50%; left: 50%;
      transform: translate(-50%, -50%);

      object-fit: cover;
      height: 100%; width: 100%;
    }

    #video_cover {
      position: absolute;

      width: 100%; height: 100%;

     
      background-size: cover;
      background-position: center;
    }

    #video_controls {
      position: absolute;
      left: 50%;
      transform: translate(-50%, 0);
    }

    #play img {
      width: 100px;
    }
    #pause img {
      width: 90px;
    }
    #pause {
      display: none;
    }

    @media (min-width: 768px) {
      #video_controls {
        display: none;
      }
    }

    /* Demo page specific styles */

    body {
      text-align: center;
      font-family: 'proxima-nova', Helvetica;
    }

    #container {
      height: 100%;
    }

    #overlay {
      position: absolute;
      top: 0; right: 0; left: 0; bottom: 0;
      background: rgba(0,0,0,0.5);
    }

    #main_content {
      z-index: 2;
      position: relative;
      display: inline-block;

      /* Vertical center */
      top: 50%;
      transform: translateY(-50%);
    }

    #main_content h1 {
      text-transform: uppercase;
      font-weight: 600;
      font-family: 'proxima-nova-condensed', Helvetica;
      color: #fff;
      font-size: 35px;
    }

    #main_content .sub_head {
      color: rgba(255,255,255,0.5);
      font-size: 18px;
    }

    #main_content .info {
      color: rgba(255,255,255,0.5);
      font-size: 12px;
      margin-top: 10px;
    }

    #links {
      margin-top: 50px;
    }

    #links a {
      border: 2px solid rgba(255,255,255,0.20);
      border-radius: 61px;
      font-size: 12px;
      color: #FFFFFF;
      letter-spacing: 1px;
      text-decoration: none;
      text-transform: uppercase;
      padding: 10px 25px;
      display: inline-block;
      margin-right: 15px;
    }

    #footer {
      position: absolute;
      bottom: 0; left: 0; right: 0;
    }
    #footer a {
      color: rgba(255,255,255,0.5);
      text-decoration: none;
      margin: 10px;
      font-size: 12px;
    }
    #footer a:first-child {
      float: left;
    }
    #footer a:last-child {
      float: right;
    }
	
	 <script src="https://use.typekit.net/nlq1kdt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</style>
 
 
		<div id="container">
    <video id="background_video" loop muted>
	<source src="../assets/images/coke.mp4" type="video/mp4"></video>
    <div id="video_cover"></div>
	<section id="main_content">
      <div id="head">
        <h1>Bideo.js</h1>
        <p class="sub_head">A JS library that makes it super easy to add fullscreen background videos.</p>
        <p class="info">(Hold on! The video might take a while to load.)</p>
      </div>

      <div id="links">
        <a href="https://github.com/rishabhp/bideo.js">View on Github</a>
        <a href="http://codetheory.in/html5-fullscreen-background-video/">How it works</a>
      </div>
    </section>
  </div>
		
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
                
                    <div class="card-body">
		
			<video autoplay muted loop id="myVideo">
				<source src="assets/images/coke.mp4" type="video/mp4">
			</video>               
           </div>
		  </div>
		  </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
	<script src="https://cdn.plyr.io/3.5.6/plyr.polyfilled.js"></script>
	 <script src="bideo.js-master/bideo.js"></script>
  <script src="bideo.js-master/main.js"></script>

  <script>
    if (window.location.host.indexOf('github.io') !== -1 && window.location.protocol !== "https:") {
      window.location.protocol = "https";
    }
  </script>
</body>
 
</html>