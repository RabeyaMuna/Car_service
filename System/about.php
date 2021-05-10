<?php
session_start();
$user_id = '';
$is_loggedIn = 0;
$username = '';
if ((isset($_SESSION['user_id']))) {
	$user_id = $_SESSION['user_id'];
}
print($user_id);
if (isset($_SESSION['username'])) {
	$is_loggedIn = 1;
	$username = $_SESSION['username'];
}
$db = mysqli_connect('localhost', 'root', '', 'Car_service');
?>
<!DOCTYPE html>
<html>

<!-- about53:21  -->

<head>
	<meta charset="utf-8">
	<title>Mechanics HTML Template | About Us</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->

		<?php include('header.php'); ?>
		<!--End Main Header -->

		<!--End Main Header -->

		<!--Page Title-->
		<section class="page-title" style="background-image:url(images/background/5.jpg)">
			<div class="auto-container">
				<h1>About Us</h1>
				<div class="text">If It Runs On Diesel…We’ll Fix It!</div>
			</div>
		</section>
		<!--End Page Title-->

		<!--About Section-->
		<section class="about-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Image Column-->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="images/resource/car.jpg" alt="" />
							</div>
						</div>
					</div>

					<!--Content Column-->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Don’t Let Your Truck Leak Oil, Make It Sweat Horse Power!</h2>
							<h3>If It Runs On Diesel…We’ll Fix It!</h3>
							<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non</div>
							
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End About Section-->

		<!-- Map Section -->
		<section class="map-section">
			<div class="image-layer" style="background-image:url(images/background/1.jpg)"></div>
			<div class="auto-container">
				<h2>Your Automotive Repair Experts.<span> Where to find us?</span></h2>
				<div class="map-box">
					<!--Map Canvas-->
					<div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
					</div>
				</div>
			</div>
		</section>
		<!-- End Map Section -->

		<!--Main Footer-->
		<?php include('fotor.php'); ?>

	</div>
	<!--End pagewrapper-->

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery-ui.js"></script>
	<!--Google Map APi Key-->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyBg0VrLjLvDLSQdS7hw6OfZJmvHhtEV_sE"></script>
	<script src="js/map-script.js"></script>
	<!--End Google Map APi-->
	<script src="js/script.js"></script>

</body>

<!-- about53:24  -->

</html>