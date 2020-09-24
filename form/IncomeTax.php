<?php
include("../db.php");
require"../loginheader.php";
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
	if(isset($_POST['submit'])){
	$AccountNo = $_SESSION['username'];
	$IncomeTaxNo = mysqli_real_escape_string($con, $_POST['IncomeTaxNo']);
	$AmaunTerkumpulC1 = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC1']);
	$AmaunTerkumpulC2i = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC2i']);
	$AmaunTerkumpulC2ii = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC2ii']);
	$AmaunTerkumpulC2iii = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC2iii']);
	$AmaunTerkumpulC2iv = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC2iv']);
	$AmaunTerkumpulC2v = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC2v']);
	$AmaunTerkumpulC3 = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC3']);
	$AmaunTerkumpulC4 = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC4']);
	$AmaunTerkumpulC5 = mysqli_real_escape_string($con, $_POST['AmaunTerkumpulC5']);
	$PotonganTerkumpulD1 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD1']);
	$PotonganTerkumpulD2 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD2']);
	$PotonganTerkumpulD3 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD3']);
	$PotonganTerkumpulD4 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD4']);
	$PotonganTerkumpulD5 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD5']);
	$PotonganTerkumpulD6 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD6']);
	$PotonganTerkumpulD7 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD7']);
	$PotonganTerkumpulD8 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD8']);
	$PotonganTerkumpulD9 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD9']);
	$PotonganTerkumpulD10 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD10']);
	$PotonganTerkumpulD11 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD11']);
	$PotonganTerkumpulD12 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD12']);
	$PotonganTerkumpulD13 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD13']);
	$PotonganTerkumpulD14 = mysqli_real_escape_string($con, $_POST['PotonganTerkumpulD14']);
	$insert = mysqli_query($con, "INSERT INTO incometax ( AccountNo, IncomeTaxNo, AmaunTerkumpulC1, AmaunTerkumpulC2i, AmaunTerkumpulC2ii, AmaunTerkumpulC2iii, AmaunTerkumpulC2iv, AmaunTerkumpulC2v, AmaunTerkumpulC3, AmaunTerkumpulC4, AmaunTerkumpulC5, PotonganTerkumpulD1, PotonganTerkumpulD2, PotonganTerkumpulD3, PotonganTerkumpulD4, PotonganTerkumpulD5, PotonganTerkumpulD6, PotonganTerkumpulD7, PotonganTerkumpulD8, PotonganTerkumpulD9, PotonganTerkumpulD10, PotonganTerkumpulD11, PotonganTerkumpulD12, PotonganTerkumpulD13, PotonganTerkumpulD14) 
	VALUES ('$AccountNo', '$IncomeTaxNo','$AmaunTerkumpulC1', '$AmaunTerkumpulC2i', '$AmaunTerkumpulC2ii', '$AmaunTerkumpulC2iii', '$AmaunTerkumpulC2iv', '$AmaunTerkumpulC2v', '$AmaunTerkumpulC3', '$AmaunTerkumpulC4', '$AmaunTerkumpulC5', '$PotonganTerkumpulD1', '$PotonganTerkumpulD2', '$PotonganTerkumpulD3', '$PotonganTerkumpulD4', '$PotonganTerkumpulD5', '$PotonganTerkumpulD6','$PotonganTerkumpulD7', '$PotonganTerkumpulD8', '$PotonganTerkumpulD9', '$PotonganTerkumpulD10', '$PotonganTerkumpulD11','$PotonganTerkumpulD12', '$PotonganTerkumpulD13', '$PotonganTerkumpulD14')");
	}
	
	
	
?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
                <a class="navbar-brand" href="../index.html">Concept</a>
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
								<a class="nav-link deactive" href="../profile.php"><i class="fa fa-fw fa-user-circle"></i>Profile</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../index.php"><i class="far fa-newspaper"></i>News Feed<span class="badge badge-success">6</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fab fa-rocketchat"></i>Messenger</a>
							</li>
							<li class="nav-divider">
								Explore
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../notification.php"><i class="fas fa-bell"></i>Notifications</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../social/index.php"><i class="fas fa-images"></i>Album</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="../form_user.php"><i class="fas fa-file"></i>Form</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../commingsoon.php"><i class="fas fa-shopping-basket"></i>Redemption</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../games.php"><i class="fas fa-gamepad"></i>Games</a>
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
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            
                
                        <h3 class="text-center"><br></br>LEMBAGA HASIL DALAM NEGERI MALAYSIA	</h3>											
												<p class="text-center"><br>BORANG MAKLUMAT BERKAITAN PENGGAJIAN DENGAN MAJIKAN-MAJIKAN TERDAHULU </br>
												<br>DALAM TAHUN SEMASA BAGI TUJUAN POTONGAN CUKAI BULANAN (PCB)</br>
												<br>(KAEDAH-KAEDAH CUKAI PENDAPATAN (POTONGAN DARIPADA SARAAN) 1994</br>
												<br>BORANG DITETAPKAN DI BAWAH SEKSYEN 152, AKTA CUKAI PENDAPATAN 1967</br></p>
                  
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Income Tax       -->
        <!-- ============================================================== -->
		
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
                <h5 class="card-header">BAHAGIAN A : MAKLUMAT MAJIKAN</h5>
                    <div class="card-body">
						
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A1 Nama Majikan Terdahulu 1</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A2 No. Majikan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A3 Nama Majikan Terdahulu 2</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A4 No. Majikan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                    
                                
					</div>
			</div>
		</div>
		<!-- END OF BAHAGIAN A -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN B        -->
        <!-- ============================================================== -->			
		 
		 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
                <h5 class="card-header">BAHAGIAN B : MAKLUMAT INDIVIDU</h5>
                    <div class="card-body">
						
                                    
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B1 Nama</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B2 No. Pengenalan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B3 No. Pasport</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B4 No. Cukai Pendapatan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="IncomeTaxNo" required=""  data-parsley-length="[5,10]" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                    
                                
					</div>
			</div>
			
		 </div>
		<!-- END OF BAHAGIAN B -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN C        -->
        <!-- ============================================================== -->	
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN C : MAKLUMAT SARAAN, KWSP, ZAKAT DAN PCB <br>(sila nyatakan jumlah keseluruhan daripada majikan-majikan terdahulu)</br> </h5>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">AMAUN TERKUMPUL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">C1 Jumlah saraan kasar bulanan dan saraan tambahan termasuk elaun/perkuisit/ pemberian/<br>manfaat yang dikenakan cukai</br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC1" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">C2 Jumlah elaun/perkuisit/pemberian/manfaat yang dikecualikan cukai</th>
                                                <td></td>                                               
                                            </tr>
                                            <tr>
                                                <th scope="row">&nbsp &nbsp i Elaun perjalanan, kad petrol atau elaun petrol dan fi tol atas urusan rasmi</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2i" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp ii Elaun penjagaan anak</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2ii" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iii Produk yang dikeluarkan oleh perniagaan majikan yang diberi secara percuma atau diberi pada harga 
												<br>&nbsp &nbsp &nbsp &nbsp diskaun</br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iii" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iv Perkuisit dalam bentuk tunai/barangan berkaitan dengan pencapaian perkhidmatan lalu, 
												<br>&nbsp &nbsp &nbsp &nbsp anugerah khidmat cemerlang, anugerah inovasi atau anugerah produktiviti atau perkhidmatan 
												<br>&nbsp &nbsp &nbsp &nbsp lama dengan syarat pekerja tersebut telah berkhidmat lebih daripada 10 tahun.</br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iv" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp v Lain - lain elaun/perkuisit/pemberian/manfaat yang dikecualikan cukai. Sila rujuk nota penerangan 
												<br>&nbsp &nbsp &nbsp &nbsp Borang BE</br>
												</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2v" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										    <tr>
                                                <th scope="row">C3 Jumlah caruman KWSP atau Kumpulan Wang Lain Yang Diluluskan ke atas semua saraan 
												<br>&nbsp &nbsp &nbsp(saraan bulanan dan saraan tambahan) </br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC3" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C4 Jumlah Zakat</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC4" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C5 Jumlah PCB (tidak termasuk CP38)</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC5" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
	
		
		<!-- END OF BAHAGIAN C -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN D        -->
        <!-- ============================================================== -->	 
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN D</h5>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">HAD TAHUNAN</th>
                                                <th scope="col">POTONGAN TERKUMPUL</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">D1 Perbelanjaan rawatan perubatan, keperluan khas dan penjaga 
												<br>&nbsp &nbsp &nbsp untuk ibu bapa (keadaan kesihatan disahkan oleh pengamal </br>
												&nbsp &nbsp &nbsp perubatan)</br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD1" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr> 
											
											<tr>
                                                <th scope="row">D2 Peralatan sokongan asas untuk kegunaan sendiri, suami/isteri, anak  
												<br>&nbsp &nbsp &nbsp  atau ibu bapa yang kurang upaya</br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD2" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>

											<tr>
                                                <th scope="row">D3 Yuran pendidikan (sendiri):   
												<br>&nbsp &nbsp &nbsp  (i) peringkat selain Sarjana dan Doktor Falsafah – bidang  </br>
												&nbsp &nbsp &nbsp undang-undang, perakaunan, kewangan Islam, teknikal, vokasional,   </br>
												&nbsp &nbsp &nbsp industri, saintifik atau teknologi maklumat; atau  </br>
												&nbsp &nbsp &nbsp (ii) peringkat Sarjana dan Doktor Falsafah – sebarang bidang atau  </br>
												&nbsp &nbsp &nbsp kursus pengajian  </br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD3" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D4 Perbelanjaan perubatan bagi penyakit yang sukar diubati atas    
												<br>&nbsp &nbsp &nbsp  diri sendiri, suami/isteri atau anak </br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												<br>TERHAD RM5,000</br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text"  name="PotonganTerkumpulD4" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D5 Pemeriksaan perubatan penuh atas diri sendiri, suami/isteri  
												<br>&nbsp &nbsp &nbsp atau anak </br></th>
												</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text"  required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												<br>TERHAD RM5,000</br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD5" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D6 Pembelian buku/majalah/jurnal/penerbitan ilmiah (selain     
												<br>&nbsp &nbsp &nbsp suratkhabar atau bahan bacaan terlarang) untuk diri sendiri, </br>
												&nbsp &nbsp &nbsp suami/isteri atau anak </br></th>
                                                <td>TERHAD RM1,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD6" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D7 Pembelian komputer peribadi untuk individu (potongan dibenarkan     
												<br>&nbsp &nbsp &nbsp sekali dalam setiap tiga tahun)  </br></th>
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD7" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D8 Tabungan bersih dalam Skim Simpanan Pendidikan Nasional     
												<br>&nbsp &nbsp &nbsp  (jumlah simpanan dalam tahun semasa tolak jumlah pengeluaran </br>
												&nbsp &nbsp &nbsp dalam tahun semasa)  </br></th>
                                                <td>TERHAD RM6,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD8" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D9 Pembelian peralatan sukan untuk aktiviti sukan mengikut Akta      
												<br>&nbsp &nbsp &nbsp Pembangunan Sukan 1997</br></th>
                                                <td>TERHAD RM300</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD9" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D10 Bayaran alimoni kepada bekas isteri</th>     												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD10" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D11 Insurans nyawa </th>    												
                                                <td>TERHAD RM6,000
												<br>(termasuk KWSP)</br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD11" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D12 Insurans pendidikan dan perubatan </th>    												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD12" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D13 Skim Persaraan Swasta dan Anuiti tertunda(Deferred annuity)  </th>   												
                                                <td>TERHAD RM1,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD13" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D14 Faedah pinjaman perumahan (mesti memenuhi syarat-syarat 
												<br>&nbsp &nbsp &nbsp &nbsp kelayakan)</br> </th>    												
                                                <td>TERHAD RM10,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD14" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
		<!-- END OF BAHAGIAN C -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN D        -->
        <!-- ============================================================== -->	
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN E: AKUAN PEKERJA </h5>
                                <div class="card-body">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                                        <label class="form-check-label" for="invalidCheck">
                                                            Saya mengakui bahawa semua maklumat yang dinyatakan dalam borang ini adalah benar, betul dan lengkap. Sekiranya maklumat yang diberikan tidak benar, tindakan mahkamah boleh diambil ke atas saya di bawah perenggan 113(1)(b) Akta Cukai Pendapatan 1967.

                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
												<div class="text">Note:
												<br>1. Borang ini hendaklah diisi oleh pekerja dan satu salinan diserahkan kepada majikan tanpa resit atau dokumen sokongan untuk tujuan</br> 
												&nbsp &nbsp pelarasan pengiraan PCB.</br>
												2. Majikan hendaklah meminta pekerja mengemukakan borang ini sekiranya pekerja pernah bekerja dengan majikan-majikan lain <br>
												&nbsp &nbsp dalam tahun semasa. </br>
												3. Majikan hanya perlu menyimpan borang ini untuk tempoh 7 tahun. Borang ini perlu dikemukakan sekiranya diminta oleh LHDNM.</br>
												<br> </br>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                            </div>
								</div>
		</div>	
		</div>	
		</form>
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
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>