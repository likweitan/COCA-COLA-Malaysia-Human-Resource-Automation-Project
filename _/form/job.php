<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	
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
                <a class="navbar-brand" href="../index.php">HR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
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
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
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
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../index.html">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-c3.html">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-charts.html">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-morris.html">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-sparkline.html">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-gauge.html">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.html">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="multiselect.html">Multiselect</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Pages</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sortable-nestable-lists.html">Sortable/Nestable List</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
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
                
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Validations </h2>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
				
                        <!-- ============================================================== -->
                        <!-- Job application form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Job Application form</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									
									
									<div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Coca-Cola Bottle (Malaysia) Sdn. Bhd.</span>
                                            </label>
											<br/>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Coca-Cola Refreshments (Malaysia) Sdn. Bhd.</span>
                                            </label>
											</form>
										</div>
									
			 
								
							</div>
						</div>
					</div>
				
			 
			            <!-- ============================================================== -->
                        <!-- SQL Code     -->
                        <!-- ============================================================== -->
			             
				  
					
                        <!-- ============================================================== -->
                        <!-- Personal details -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Personal Details</h5>
                                <div class="card-body">
                                    
			 
			 
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name to be Appeal in Name Card </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender </label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">IC (NEW/ OLD)</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="New" class="form-control">
												<input required="" type="text"  placeholder="OLD" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4">
                                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>    
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Marital Status :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Marial Date (if any):</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Religion :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Race :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Nationality :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">City :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Postal Code :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">State :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Email Address :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">House Phone No. :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Mobile Phone No. :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Income Tax No. :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">EPF No. :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					
                    
                    
                        <!-- ============================================================== -->
                        <!-- Bank acc -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BANK ACCOUNT DETAILS</h5>
                                <div class="card-body">
                                   
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Bank Account No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									</div>	
								</div>		
							</div>	
						</div>
					
					
					
                        <!-- ============================================================== -->
                        <!-- Family / Dependent details -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Family / Dependent details</h5>
                                <div class="card-body">
                                    
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (1):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Spouse</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
							
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (2):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Child (1)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (3):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Child (2)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (4):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Child (3)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (5):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Child (4)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Full Name as Per NRIC (6):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Child (5)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">NRIC No :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date of Birth:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
									</div>
								</div>
							</div>
						</div>
								
					
					
                        <!-- ============================================================== -->
                        <!-- Emergency contact -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Emergency contact</h5>
                                <div class="card-body">
                                    
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Phone No :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Address :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					
									

									
					
                        <!-- ============================================================== -->
                        <!-- Education details -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Education details</h5>
                                <div class="card-body">
                                    
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Highest Qualification :<br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="(High school/ Diploma/ Degree/ Master/ ...)" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution :<br/></label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="(School/ College/ University / ...)" class="form-control">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					
										
					
                        <!-- ============================================================== -->
                        <!-- Employee details HR used -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Employment Details (For HR Use Only)</h5>
                                <div class="card-body">
                                    
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Referred by :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position title :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Job grade :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Department :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reporting to :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Location base :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Status (P/C) :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Basic Salary :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Transport allowance :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Special allowance :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Remarks (if any) :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>
										
								</div>	
								</div>
								</div>	
								</div>	
								
							
							
                        <!-- ============================================================== -->
                        <!-- Other family details  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Other Family Details </h5>
                                <div class="card-body">
                                    

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (1):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Father</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (2):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Mother</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (3):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Sibling (1)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (4):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Sibling (2)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (5):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Sibling</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
							
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (6):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Sibling (3)</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Gender :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
											</form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Age :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Occupation/ Name of Employer :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input required="" type="text"  placeholder="" class="form-control">
                                            </div>
										</div>	
											
									</div>
								</div>
							</div>
						</div>
					
							
							
                        <!-- ============================================================== -->
                        <!-- Other education details  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Other Family Details </h5>
                                <div class="card-body">
                                    
							
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution (1):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Institution :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">School</span>
                                            </label>
											</form>
										</div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Qualification :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association etc. :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution (2):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Institution :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label"> College</span>
                                            </label>
											</form>
										</div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Qualification :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association etc. :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution (3):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Institution :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">University</span>
                                            </label>
											</form>
										</div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Qualification :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association etc. :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name of Institution (4):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
							
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Institution :</label>
                                            <div class="col-sm-6">
											<form>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">At present</span>
                                            </label>
											</form>
										</div>
										</div>
										
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Duration :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="number" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Qualification :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Membership of club/ Association etc. :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
										
										
										
                        <!-- ============================================================== -->
                        <!-- Employment record  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Employment Record </h5>
								
                                <div class="card-body">
                                    
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"><p> Present Employment (most current)</p></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross):</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"><p>Previous Employment (Including temporary and vacational training)</p></label>
											
										</div>
										
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer (1):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross):</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer (2):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross):</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer (3):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Salary (Gross):</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Reason for leaving :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date Join :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					
									
									
                        <!-- ============================================================== -->
                        <!-- For all salaes position only  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">For all sales position only </h5>
								
                                <div class="card-body">
                                    
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group row">
									<form>
                                            <label class="col-sm-3 col-form-label text-sm-left">Do you have valid licen :</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Type of licen :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Do you possess own transport :</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Expired date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
									</div>
								</div>
							</div>
						</div>
					
									
									
                        <!-- ============================================================== -->
                        <!-- Further information  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Further Information</h5>
								
                                <div class="card-body">
                                    
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
									<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Have you ever been dismissed  <br/>or suspend by any previous employer ?</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please elaborate :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Have you ever been charged or  <br/>convinced in any court of law ? </label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please provide details :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					
									
									
                        <!-- ============================================================== -->
                        <!-- References  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">References</h5>
								
                                <div class="card-body">
                                   
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">List the name, occupation and contact details of two(2) referees (Here or Overseas)<br/>(Your referees should not be members of your immediate family, relatives or friends, it should be of previous immediate superiors.)</label>
                                            
                                        </div>
										
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (1):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left"></label>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name (2):</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Employer :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
									<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Contact No:</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Do we have your consent to <br/>approach them ?</label>
                                            <div class="col-sm-6">
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            
										</div>
										</div>
										
										</div>
									</div>
								</div>
							</div>
						
										
										
                        <!-- ============================================================== -->
                        <!-- Declaration  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Declaration</h5>
								
                                <div class="card-body">
                                   
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Do you have any relative working <br/> with CCBM/ CCRM ?</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If so, please provide their Name, Relationship with you, and their Present jobs, (if known)</label>
                                            
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Name :</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Relationship :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Please provide the Name of <br/> </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Anyone in CCBM/ CCRM known to you personally" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Present Position :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-left">Have you apply to CCBM/ </br>CCRM before ?</label>
                                            <div class="col-sm-6">
											<form>
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Yes</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                            </form>
										</div>
										</div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">If yes, please stated the Dates and Position applied for</label>
                                            
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Date :</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="DD-MM-YYYY" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Position Applied:</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Additional Information</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right"></label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I hereby
										declared that the information given by me in this form is accurate and true to the<br/>
										best of my knowldge and subject to validation By Coca-Cola Bottlers Malaysia Sdn. Bhd. (CCBM) <br/>
										/ Coca-Cola Refreshment Malaysia Sdn. Bhd. (CCRM).</span>
                                                    </label>
													<label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">I fully
										understand and accept that if anytime after i am employed and it is found that<br/>
										a false declaration has been made in the form, the company has the right to terminate <br/>
										my employment</span>
                                                    </label>
										</div>
                                        </div>
										</div>
										</div>
                                        
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" name="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    
           
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
	
	 <!-- DatePicker JavaScript -->
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
	
	
	
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