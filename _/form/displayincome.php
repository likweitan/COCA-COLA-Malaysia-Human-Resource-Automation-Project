<?php
include("../db.php");
require"../loginheader.php";

    $account = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM incometax INNER JOIN account ON account.AccountNo=incometax.AccountNo WHERE account.AccountNo='$account'");
	
	$rows = mysqli_num_rows($query);
	if ($rows==1){
	while($rs = mysqli_fetch_array($query)){
		$role=$rs['Role'];
		$IncomeTaxNo = $rs['IncomeTaxNo'];
		$AmaunTerkumpulC1 = $rs['AmaunTerkumpulC1'];
		$AmaunTerkumpulC2i=  $rs['AmaunTerkumpulC2i'];
		$AmaunTerkumpulC2ii = $rs['AmaunTerkumpulC2ii'];
		$AmaunTerkumpulC2iii = $rs['AmaunTerkumpulC2iii'];
		$AmaunTerkumpulC2iv = $rs['AmaunTerkumpulC2iv'];
		$AmaunTerkumpulC2v = $rs['AmaunTerkumpulC2v'];
		$AmaunTerkumpulC3 = $rs['AmaunTerkumpulC3'];
		$AmaunTerkumpulC4 = $rs['AmaunTerkumpulC4'];
		$AmaunTerkumpulC5 = $rs['AmaunTerkumpulC5'];
		$PotonganTerkumpulD1 = $rs['PotonganTerkumpulD1'];
		$PotonganTerkumpulD2 = $rs['PotonganTerkumpulD2'];
		$PotonganTerkumpulD3 = $rs['PotonganTerkumpulD3'];
		$PotonganTerkumpulD4= $rs['PotonganTerkumpulD4'];
		$PotonganTerkumpulD5 = $rs['PotonganTerkumpulD5'];
		$PotonganTerkumpulD6 = $rs['PotonganTerkumpulD6'];
		$PotonganTerkumpulD7 = $rs['PotonganTerkumpulD7'];
		$PotonganTerkumpulD8 = $rs['PotonganTerkumpulD8'];
		$PotonganTerkumpulD9 = $rs['PotonganTerkumpulD9'];
		$PotonganTerkumpulD10 = $rs['PotonganTerkumpulD10'];
		$PotonganTerkumpulD11 = $rs['PotonganTerkumpulD11'];
		$PotonganTerkumpulD12 = $rs['PotonganTerkumpulD12'];
		$PotonganTerkumpulD13 = $rs['PotonganTerkumpulD13'];
		$PotonganTerkumpulD14 = $rs['PotonganTerkumpulD14'];
	}
}	

	
	
	
?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Borang</title>
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
													<div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
													<div class="notification-list-user-block"><span class="notification-list-user-name">';
			
			
			
				echo $FullName;
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
							<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
							<div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
								<div class="nav-user-info">
									<h5 class="mb-0 text-white nav-user-name"><?=$FullName?></h5>
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
								<a class="nav-link deactive" href="../form_user.php"><i class="fas fa-file"></i>Form</a>
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
								<a class="nav-link deactive" href="../manage_user.php"><i class="fas fa-user-plus"></i>Account</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="../form.php"><i class="fas fa-file-alt"></i>Form & Policy</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../data-tables.php"><i class="fas fa-info"></i>Information</a>
							</li>'
								?>
							<li class="nav-divider">
								Setting
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../setting.php"><i class="fas fa-cog mr-2"></i>Setting</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link deactive" href="../logout.php"><i class="fas fa-power-off mr-2"></i>Logout<span class="badge badge-success">6</span></a>
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
                                                <input type="text" name="IncomeTaxNo" required=""  data-parsley-length="[5,10]" value="<?php echo $IncomeTaxNo;?>" placeholder="" class="form-control">
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
                                                <input type="text" name="AmaunTerkumpulC1" required="" data-parsley-minlength="6" value="<?php echo $AmaunTerkumpulC1;?>" placeholder="RM" class="form-control">
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
                                                <input type="text" name="AmaunTerkumpulC2i" value="<?php echo $AmaunTerkumpulC2i;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp ii Elaun penjagaan anak</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2ii" value="<?php echo $AmaunTerkumpulC2ii;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iii Produk yang dikeluarkan oleh perniagaan majikan yang diberi secara percuma atau diberi pada harga 
												<br>&nbsp &nbsp &nbsp &nbsp diskaun</br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iii" value="<?php echo $AmaunTerkumpulC2iii;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iv Perkuisit dalam bentuk tunai/barangan berkaitan dengan pencapaian perkhidmatan lalu, 
												<br>&nbsp &nbsp &nbsp &nbsp anugerah khidmat cemerlang, anugerah inovasi atau anugerah produktiviti atau perkhidmatan 
												<br>&nbsp &nbsp &nbsp &nbsp lama dengan syarat pekerja tersebut telah berkhidmat lebih daripada 10 tahun.</br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iv" value="<?php echo $AmaunTerkumpulC2iv;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp v Lain - lain elaun/perkuisit/pemberian/manfaat yang dikecualikan cukai. Sila rujuk nota penerangan 
												<br>&nbsp &nbsp &nbsp &nbsp Borang BE</br>
												</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2v" value="<?php echo $AmaunTerkumpulC2v;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>
										   </tr>
										    <tr>
                                                <th scope="row">C3 Jumlah caruman KWSP atau Kumpulan Wang Lain Yang Diluluskan ke atas semua saraan 
												<br>&nbsp &nbsp &nbsp(saraan bulanan dan saraan tambahan) </br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC3" value="<?php echo $AmaunTerkumpulC3;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C4 Jumlah Zakat</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC4" value="<?php echo $AmaunTerkumpulC4;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C5 Jumlah PCB (tidak termasuk CP38)</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC5" value="<?php echo $AmaunTerkumpulC5;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text" name="PotonganTerkumpulD1" value="<?php echo $PotonganTerkumpulD1;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr> 
											
											<tr>
                                                <th scope="row">D2 Peralatan sokongan asas untuk kegunaan sendiri, suami/isteri, anak  
												<br>&nbsp &nbsp &nbsp  atau ibu bapa yang kurang upaya</br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD2" value="<?php echo $PotonganTerkumpulD2;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text" name="PotonganTerkumpulD3" value="<?php echo $PotonganTerkumpulD3;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text"  name="PotonganTerkumpulD4" value="<?php echo $PotonganTerkumpulD4;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text" name="PotonganTerkumpulD5" value="<?php echo $PotonganTerkumpulD5;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text" name="PotonganTerkumpulD6" required="" value="<?php echo $PotonganTerkumpulD6;?>" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D7 Pembelian komputer peribadi untuk individu (potongan dibenarkan     
												<br>&nbsp &nbsp &nbsp sekali dalam setiap tiga tahun)  </br></th>
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD7" value="<?php echo $PotonganTerkumpulD7;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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
                                                <input type="text" name="PotonganTerkumpulD8" value="<?php echo $PotonganTerkumpulD8;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D9 Pembelian peralatan sukan untuk aktiviti sukan mengikut Akta      
												<br>&nbsp &nbsp &nbsp Pembangunan Sukan 1997</br></th>
                                                <td>TERHAD RM300</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD9" value="<?php echo $PotonganTerkumpulD9;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D10 Bayaran alimoni kepada bekas isteri</th>     												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD10" value="<?php echo $PotonganTerkumpulD10;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D11 Insurans nyawa </th>    												
                                                <td>TERHAD RM6,000
												<br>(termasuk KWSP)</br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD11" value="<?php echo $PotonganTerkumpulD11;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D12 Insurans pendidikan dan perubatan </th>    												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD12" value="<?php echo $PotonganTerkumpulD12;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D13 Skim Persaraan Swasta dan Anuiti tertunda(Deferred annuity)  </th>   												
                                                <td>TERHAD RM1,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD13" value="<?php echo $PotonganTerkumpulD13;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D14 Faedah pinjaman perumahan (mesti memenuhi syarat-syarat 
												<br>&nbsp &nbsp &nbsp &nbsp kelayakan)</br> </th>    												
                                                <td>TERHAD RM10,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD14" value="<?php echo $PotonganTerkumpulD14;?>" required="" data-parsley-minlength="6" placeholder="RM" class="form-control">
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