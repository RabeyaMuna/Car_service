			<header class="main-header">

				<!-- Header Top -->
				<div class="header-top">
					<div class="auto-container">
						<div class="top-outer clearfix">

							<!--Top Left-->
							<div class="top-left">
								<ul class="links clearfix">
									<li><a href="#"><span class="icon fa fa-phone"></span> Call us 01863621663</a></li>
									<li><a href="#"><span class="icon fa fa-envelope-o"></span>contact@mechanic.com</a></li>
								</ul>
							</div>

							<!--Top Right-->
							<div class="top-right clearfix">
								<ul class="links">
									<li>

										<?php
										if ($is_loggedIn == 0) {
										?>
											<a href="http://localhost/Car_service-main/System/login.php"><i class="fa fa-user"></i> Login</a>
										<?php
										} else {
										?>
											<a href="http://localhost/Car_service-main/System/logout.php">Welcome <?php echo $username ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<i class="fa fa-user">&nbsp;&nbsp;&nbsp;Logout</i>
											</a>
										<?php
										}
										?>
									</li>
								</ul>
								<ul class="social-icon-one">
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-google-plus"></a></li>
								</ul>
							</div>

						</div>

					</div>
				</div>
				<!-- Header Top End -->

				<!--Header-Upper-->
				<div class="header-upper">
					<div class="auto-container">
						<div class="header-upper-inner clearfix">

							<div class="pull-left logo-box">
								<div class="logo"><a href="http://localhost/Car_service-main/Home.php"><img src="images/logo.png" alt="" title=""></a></div>
							</div>

							<div class="nav-outer clearfix">

								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li class="current dropdown"><a href="http://localhost/Car_service-main/Home.php">Home</a></li>
											<li><a href="http://localhost/Car_service-main/System/about.php">About</a></li>
											<li><a href="http://localhost/Car_service-main/System/services.php">Services</a></li>
											<li><a href="http://localhost/Car_service-main/System/register.php">Signup</a></li>
											<li><a href="http://localhost/Car_service-main/System/schedule.php">Schedule</a></li>
											<li><a href="#Contact">Contact US</a></li>

										</ul>
									</div>

								</nav>

							</div>
							<!--Option Box-->
							<div class="btn-box">
								<a href="http://localhost/Car_service-main/System/index.php" class="theme-btn btn-style-one">Make a Appoinment</a>
							</div>
						</div>
					</div>
				</div>
				<!--End Header Upper-->
				<!--Sticky Header-->
				<div class="sticky-header">
					<div class="auto-container clearfix">
						<!--Logo-->
						<div class="logo pull-left">
							<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
						</div>

						<!--Right Col-->
						<div class="right-col pull-right">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
									<ul class="navigation clearfix">
										<li><a href="http://localhost/Car_service-main/System/about.php">About</a></li>
										<li class="current dropdown"><a href="http://localhost/Car_service-main/Home.php">Home</a></li>
										<li><a href="http://localhost/Car_service-main/System/register.php">Signup</a></li>
										<li><a href="http://localhost/Car_service-main/System/schedule.php">Schedule</a></li>
										<li><a href="#Contact">Contact US</a></li>
									</ul>
								</div>
							</nav><!-- Main Menu End-->
						</div>

					</div>
				</div>
				<!--End Sticky Header-->

			</header>
			<!--End Main Header -->