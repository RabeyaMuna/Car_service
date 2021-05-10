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

<!-- services55:54  -->

<head>
	<meta charset="utf-8">
	<title>Mechanics HTML Template | Services</title>
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
		<section class="page-title" style="background-image:url(images/background/12.jpg)">
			<div class="auto-container">
				<h1>Services</h1>
				<div class="text"> If It Runs On Diesel…We’ll Fix It!</div>
			</div>
		</section>
		<!--End Page Title-->

		<!--Services page Section-->
		<section class="services-page-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Services Block-->
					<div class="services-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="image">
									<img src="images/resource/service-1.jpg" alt="" />
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="icon-box">
												<div class="icon flaticon-funnel"></div>
											</div>
										</div>
									</div>
								</div>
								<h3><a href="#">Full Service</a></h3>
								<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
							</div>
						</div>
					</div>

					<!--Services Block-->
					<div class="services-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="image">
									<img src="images/resource/service-2.jpg" alt="" />
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="icon-box">
												<div class="icon flaticon-funnel"></div>
											</div>
										</div>
									</div>
								</div>
								<h3><a href="#">AC Repair</a></h3>
								<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
							</div>
						</div>
					</div>

					<!--Services Block-->
					<div class="services-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="image">
									<img src="images/resource/service-3.jpg" alt="" />
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="icon-box">
												<div class="icon flaticon-funnel"></div>
											</div>
										</div>
									</div>
								</div>
								<h3><a href="#">Oil Change</a></h3>
								<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Services page Section-->

		<!--Services Section Two-->
		<section class="services-section-two">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-car"></span>
							</div>
							<h3><a href="#">Full Service</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-pressure"></span>
							</div>
							<h3><a href="#">Tire Balance</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-plumber"></span>
							</div>
							<h3><a href="#">Oil Change</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-tools-2"></span>
							</div>
							<h3><a href="#">AC Repair</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-car-repair"></span>
							</div>
							<h3><a href="#">Full Service</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-tyre"></span>
							</div>
							<h3><a href="#">Tire Balance</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-diesel"></span>
							</div>
							<h3><a href="#">Oil Change</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-battery"></span>
							</div>
							<h3><a href="#">AC Repair</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Services Section Two-->

		<!--Clients Section-->
		<section class="clients-section" style="background-image:url(images/background/1.jpg)">
			<div class="auto-container">

				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
						</li>
					</ul>
				</div>

			</div>
		</section>
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

<!-- services56:00  -->

</html>