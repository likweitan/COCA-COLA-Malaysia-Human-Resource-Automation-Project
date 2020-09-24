<!DOCTYPE html>
<html lang="zh">

<head>
	<?php 
		require "../loginheader.php";
		include ('../db.php');
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>insco</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Izmir css -->
	<link rel="stylesheet" href="../assets/vendor/izmir/css/izmir.min.css">
	<style>
		.inputfile {
			width: 0.1px;
			height: 0.1px;
			opacity: 0;
			overflow: hidden;
			position: absolute;
			z-index: -1;
		}

		.inputfile+label {
			font-size: 1.25em;
			font-weight: 700;
			color: white;
			< !--background-color: black;
			-->display: inline-block;
			cursor: pointer;
			/* "hand" cursor */
		}

		.inputfile:focus+label,
		.inputfile+label:hover {
			color: white;
			background-color: #e6629a;
			outline: 1px dotted #000;
			outline: -webkit-focus-ring-color auto 5px;
		}

	</style>
	<script>
		document.documentElement.className = 'js';

	</script>
</head>

<body>

	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z" />
				<path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z" />
			</symbol>
		</svg>
		<main>
			<header class="codrops-header">
				<div class="codrops-links">
					<a class="codrops-icon codrops-icon--prev" href="../index.php" title="Back"><svg class="icon icon--arrow">
							<use xlink:href="#icon-arrow"></use>
						</svg></a>
					<a class="codrops-icon codrops-icon--drop" href="http://www.htmleaf.com/" title=""><svg class="icon icon--drop">
							<use xlink:href="#icon-drop"></use>
						</svg></a>
				</div>
				<h1 class="codrops-header__title">insco</h1>

				<div class="control__item">
					<form onsubmit="submitForm(event);">
						<input type="file" name="image" id="image-selecter" accept="image/*"><br><br>
						<input class="control__btn" type="submit" name="submit" value="Upload">
					</form>
					<div id="uploading-text" style="display:none;">Uploading...</div>
					<img id="preview">
				</div>

			</header>
			<div class="content content--side">
				<!--<div class="control control--grids">
					<span class="control__title">order layout</span>
					<div class="control__item">
						<input class="control__radio" type="radio" name="grid-type" value="grid--type-a" id="control-grid-a" checked>
						<label class="control__label" for="control-grid-a">By Name</label>
					</div>
					<div class="control__item">
						<input class="control__radio" type="radio" name="grid-type" value="grid--type-b" id="control-grid-b">
						<label class="control__label" for="control-grid-b">By Date</label>
					</div>
					<div class="control__item">
						<input class="control__radio" type="radio" name="grid-type" value="grid--type-c" id="control-grid-c">
						<label class="control__label" for="control-grid-c">grid C</label>
					</div>
				</div>-->
			</div>
			<div class="content content--side content--right">
				<!--<div class="control control--effects">
					<span class="control__title">run effect</span>
					<button class="control__btn" data-fx="Hapi">Hapi</button>
					<button class="control__btn" data-fx="Amun">Amun</button>
					<button class="control__btn" data-fx="Kek">Kek</button>
					<button class="control__btn" data-fx="Isis">Isis</button>
					<button class="control__btn" data-fx="Montu">Montu</button>
					<button class="control__btn" data-fx="Osiris">Osiris</button>
					<button class="control__btn" data-fx="Satet">Satet</button>
					<button class="control__btn" data-fx="Atum">Atum</button>
					<button class="control__btn" data-fx="Ra">Ra</button>
					<button class="control__btn" data-fx="Sobek">Sobek</button>
					<button class="control__btn" data-fx="Ptah">Ptah</button>
					<button class="control__btn" data-fx="Bes">Bes</button>
					<button class="control__btn" data-fx="Seker">Seker</button>
					<button class="control__btn" data-fx="Nut">Nut</button>
					<button class="control__btn" data-fx="Shu">Shu</button>
				</div>-->
			</div>
			<div class="content content--center">
				<div class="grid grid--type-a">
					<div class="grid__sizer"></div>
					<?php
						$dirname = "img/";
						$images = glob("$dirname*.{png,PNG,jpeg,JPEG,jpg,JPG}", GLOB_BRACE);
						$username = $_SESSION['username'];
						
					

						
							
							$sql = "SELECT *,TIMESTAMPDIFF(SECOND,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS SecondDiff,
							TIMESTAMPDIFF(MINUTE,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS MinuteDiff,
							TIMESTAMPDIFF(HOUR,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS HourDiff,
							TIMESTAMPDIFF(DAY,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS DayDiff,
							TIMESTAMPDIFF(MONTH,album.Mod_Timestamp,CURRENT_TIMESTAMP()) AS MonthDiff
							FROM album,employee GROUP BY AlbumId";
					
						$result = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($result)) {
							$currentDiff = $row['SecondDiff'].' seconds ago';
						if($row['SecondDiff'] > 60)
							$currentDiff = $row['MinuteDiff'].' minutes ago';
						if($row['MinuteDiff'] > 60)
							$currentDiff = $row['HourDiff'].' hours ago';
						if($row['HourDiff'] > 24)
							$currentDiff = $row['DayDiff'].' days ago';
						if($row['DayDiff'] > 30)
							$currentDiff = $row['MonthDiff'];
							
							$imageLocation = pathinfo($row['ImageLocation']);
							
							echo '<div class="grid__item">';
							echo '<figure class="c4-izmir c4-image-blur">';
							echo '<a class="grid__link" href="#"><img class="grid__img" src="img/'.$imageLocation['basename'].'" alt="Some image" /></a>';
							echo '<figcaption>
    <div class="c4-reveal-up">
      <h3>
        '.$row['FirstName'].'
      </h3>
    </div>
    <div class="c4-reveal-up">
      <p>
        '.$currentDiff.'
      </p>
    </div>
  </figcaption></figure>';
							echo '</div>';
						
						}
					?>

				</div>

			</div>
		</main>

		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		<!-- Image upload js -->
		<script type="text/javascript">
			var previewImage = document.getElementById("preview"),
				uploadingText = document.getElementById("uploading-text");

			function submitForm(event) {
				// prevent default form submission
				event.preventDefault();
				uploadImage();
			}

			function uploadImage() {
				var imageSelecter = document.getElementById("image-selecter"),
					file = imageSelecter.files[0];
				if (!file)
					return alert("Please select a file");
				// clear the previous image
				previewImage.removeAttribute("src");
				// show uploading text
				uploadingText.style.display = "block";
				// create form data and append the file
				var formData = new FormData();
				formData.append("image", file);
				// do the ajax part
				var ajax = new XMLHttpRequest();
				ajax.onreadystatechange = function() {
					if (this.readyState === 4 && this.status === 200) {

						location.reload();
					}
				}
				ajax.open("POST", "upload.php", true);
				ajax.send(formData); // send the form data
			}

			function uploadError(error) {
				// called on error
				alert(error || 'Something went wrong');
			}

		</script>
	</body>

</html>
