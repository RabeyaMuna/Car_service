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

<!--  46:37  -->

<head>
	<meta charset="utf-8">
	<title>Mechanic Appoinment System | Homepage</title>
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
		<?php include('System\header.php'); ?>

		<!--Main Slider-->
		<section class="main-slider">

			<div class="main-slider-carousel owl-carousel owl-theme">

				<div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
					<div class="auto-container">
						<div class="content">
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<h2>Building Your Trust <span>Since 1968.</span></h2>
						</div>
					</div>
				</div>

				<div class="slide" style="background-image:url(images/main-slider/image-2.jpg)">
					<div class="auto-container">
						<div class="content">
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<h2>Building Your Trust <span>Since 1968.</span></h2>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!--End Main Slider-->

		<!--Services Section-->
		<section class="services-section" style="background-image:url(images/resource/image-1.png)">
			<div class="auto-container">

				<!--Upper Section-->
				<div class="upper-section">
					<div class="row clearfix">

						<!--Services Block-->
						<div class="services-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
									<h3><a href="services.html">Full Service</a></h3>
									<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
								</div>
							</div>
						</div>

						<!--Services Block-->
						<div class="services-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
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
									<h3><a href="services.html">AC Repair</a></h3>
									<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
								</div>
							</div>
						</div>

						<!--Services Block-->
						<div class="services-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
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
									<h3><a href="services.html">Oil Change</a></h3>
									<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor </div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!--Lower Section-->
				<div class="lower-section">
					<div class="row clearfix">

						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="images/resource/car.jpg" alt="" />
									<span class="icon"><img src="images/resource/duty.png" alt="" /></span>
								</div>
							</div>
						</div>

						<!--Content Column-->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>Don’t Let Your Truck Leak Oil, Make It Sweat Horse Power!</h2>
								<h3>If It Runs On Diesel…We’ll Fix It!</h3>
								<div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </div>
								<a href="http://localhost/Car_service-main/System/about.php" class="theme-btn btn-style-two">read more</a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!--End Services Section-->

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

		<!--Services Section Two-->
		<section class="services-section-two">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-car"></span>
							</div>
							<h3><a href="services.html">Full Service</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-pressure"></span>
							</div>
							<h3><a href="services.html">Tire Balance</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-plumber"></span>
							</div>
							<h3><a href="services.html">Oil Change</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-tools-2"></span>
							</div>
							<h3><a href="services.html">AC Repair</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-car-repair"></span>
							</div>
							<h3><a href="services.html">Full Service</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-tyre"></span>
							</div>
							<h3><a href="services.html">Tire Balance</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-diesel"></span>
							</div>
							<h3><a href="services.html">Oil Change</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-battery"></span>
							</div>
							<h3><a href="services.html">AC Repair</a></h3>
							<div class="text">This is Photoshop's version of Lorem Ipsukroin gravida nibh</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Services Section Two-->

		<!--Accordian Section-->
		<section class="accordian-section" style="background-image:url(images/resource/image-2.png)">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Accordian Column-->
					<div class="accordian-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<ul class="accordion-box accordion-style-one">

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div> Strong Engines Require Strong Parts.
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
												<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
											</div>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block active-block">
									<div class="acc-btn active">
										<div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div>Working Hard For The Hard Working.
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">
												<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
											</div>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div> Prices Never Lower, Customer Care Never Higher.
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
												<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
											</div>
										</div>
									</div>
								</li>

							</ul>

						</div>
					</div>

					<!--Content Column-->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Don’t Let Your Truck Leak Oil, Make It Sweat Horse Power!</h2>
							<h3>If It Runs On Diesel…We’ll Fix It!</h3>
							<div class="text">This is Photoshop's version velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </div>
							<a href="about.html" class="theme-btn btn-style-three">read more</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Accordian Section-->

		<!--Expert Section-->
		<section class="expert-section" style="background-image:url(images/background/2.png)">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<h2>Our Team of Experts</h2>
					<div class="text">If It Runs On Diesel…We’ll Fix It!</div>
				</div>

				<div class="row clearfix">

					<!--Team Block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h3><a href="team.html">Jacob Reyes</a></h3>
								<div class="designation">Master Technician</div>
								<div class="text">This is Photoshop's version of Lorem]psukroin nibh vel velit auctor aliquet.</div>
								<a href="team.html" class="theme-btn btn-style-two">read more</a>
							</div>
						</div>
					</div>

					<!--Team Block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="images/resource/team-2.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h3><a href="team.html">Jacob Reyes</a></h3>
								<div class="designation">Master Technician</div>
								<div class="text">This is Photoshop's version of Lorem]psukroin nibh vel velit auctor aliquet.</div>
								<a href="team.html" class="theme-btn btn-style-two">read more</a>
							</div>
						</div>
					</div>

					<!--Team Block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="images/resource/team-3.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h3><a href="team.html">Jacob Reyes</a></h3>
								<div class="designation">Master Technician</div>
								<div class="text">This is Photoshop's version of Lorem]psukroin nibh vel velit auctor aliquet.</div>
								<a href="team.html" class="theme-btn btn-style-two">read more</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!--End Expert Section-->

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
		<!--End Clients Section-->

		<!--Main Footer-->
		<?php include('System\fotor.php'); ?>

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

<!--  51:42  -->

</html>