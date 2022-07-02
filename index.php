<!DOCTYPE html>
<html lang="en">

	<!-- styletory/  30 Nov 2019 04:11:34 GMT -->

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>StyleTory</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="assets/img/favicon.ico" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="assets/img/styletory.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.php" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="{{route('index')}}">Home</a>
							</li>
							<ul class="main-nav">
								<li>
									<a href="#">About Us</a>
								</li>
								<ul class="main-nav">
									<li>
										<a href="#">Services</a>
									</li>
									<ul class="main-nav">
										<li>
											<a href="#">Contact</a>
										</li>
										<!-- <li class="has-submenu">
								<a href="#">About Us <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
									<li><a href="appointments.php">Appointments</a></li>
									<li><a href="schedule-timings.php">Schedule Timing</a></li>
									<li><a href="my-patients.php">Patients List</a></li>
									<li><a href="patient-profile.php">Patients Profile</a></li>
									<li><a href="chat-doctor.php">Chat</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="doctor-profile-settings.php">Profile Settings</a></li>
									<li><a href="reviews.php">Reviews</a></li>
									<li><a href="doctor-register.php">Doctor Register</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="search.php">Search Doctor</a></li>
									<li><a href="doctor-profile.php">Doctor Profile</a></li>
									<li><a href="booking.php">Booking</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="booking-success.php">Booking Success</a></li>
									<li><a href="patient-dashboard.php">Patient Dashboard</a></li>
									<li><a href="favourites.php">Favourites</a></li>
									<li><a href="chat.php">Chat</a></li>
									<li><a href="profile-settings.php">Profile Settings</a></li>
									<li><a href="change-password.php">Change Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Contact Us <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.php">Voice Call</a></li>
									<li><a href="video-call.php">Video Call</a></li>
									<li><a href="search.php">Search Doctors</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="components.php">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.php">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.php">Invoices</a></li>
											<li><a href="invoice-view.php">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.php">Starter Page</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="forgot-password.php">Forgot Password</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.php" target="_blank">Admin</a>
							</li>
							<li class="login-link">
								<a href="login.php">Login / Signup</a>
							</li> -->
									</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="fas fa-phone-volume "></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +331 5999701</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="#">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->

			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Search Saloon, Make an Appointment</h1>
							<p>Discover the best saloon, parlour & skin care in the city nearest to you.</p>
						</div>

						<!-- Search -->
						<div class="search-box">
							<form action="templateshub.net">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Saloons ">
									<span class="form-text">Ex : Saloon or Skin Care Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i>
									<span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->

					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Saloons and Specialities</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/beauty-saloon.png" class="img-fluid"
											alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Hair Cut</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/dryer.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Hair Stylist</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/makeover.png" class="img-fluid"
											alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Makeup Artist</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/skincare.png" class="img-fluid"
											alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Skin Care</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/fashion.png" class="img-fluid"
											alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Beard Stylist</p>
								</div>
								<!-- /Slider Item -->

							</div>
							<!-- /Slider -->

						</div>
					</div>
				</div>
			</section>
			<!-- Clinic and Specialities -->

			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Saloon</h2>
								<p>Lorem Ipsum is simply dummy text </p>
							</div>
							<div class="about-content">
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ab iusto
									quaerat assumenda vel, accusamus, maiores illum eaque reprehenderit dolorem et
									possimus saepe similique tempora porro explicabo, sunt at voluptatem pariatur.
									Voluptatum.</p>
								<a href="javascript:;">Read More..</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/1.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="#">Depilex Men</a>
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">Hair Stylist, Artist, Hair Dresser</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(1227)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Saddar, Rwp, Pakistan
											</li>
											<li>
												<i class="far fa-clock"></i> Available
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> Rs.700 - $30000
												<i class="fas fa-info-circle" data-toggle="tooltip"
													title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="#" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/2.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="#">Toni and Guy</a>
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">Artists, Trained Stylists</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(335)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> G-6 sector, Islamabad
											</li>
											<li>
												<i class="far fa-clock"></i> Available
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> Rs.850 - $40000
												<i class="fas fa-info-circle" data-toggle="tooltip"
													title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="#" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/3.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="#">Micheal K Salon</a>
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">Nail care to Hair and Skin Care, Grooms</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(27)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Murree Road, Rwp, Pakistan
											</li>
											<li>
												<i class="far fa-clock"></i> Available
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> Rs.500 - Rs.10000
												<i class="fas fa-info-circle" data-toggle="tooltip"
													title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="#" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/4.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="#">Khawar Riaz Men Salon</a>
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">Grooming and Hairstyling</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Bank Road, Lahore, Pakistan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> Rs.430 - Rs6250
												<i class="fas fa-info-circle" data-toggle="tooltip"
													title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="#" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Doctor Widget -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Popular Section -->

			<!-- Availabe Features -->
			<section class="section section-features">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 features-img">
							<img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-7">
							<div class="section-header">
								<h2 class="mt-2">Availabe Features in Saloons</h2>
								<p>It is a long established fact that a reader will be distracted by the readable
									content of a page when looking at its layout. </p>
							</div>
							<div class="features-slider slider">
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/1.jpg" class="img-fluid" alt="Feature">
									<p>Skin Care</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/2.jpg" class="img-fluid" alt="Feature">
									<p>Nails Care</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/3.jpg" class="img-fluid" alt="Feature">
									<p>Hair Dresser</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/4.jpg" class="img-fluid" alt="Feature">
									<p>Facials</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/5.jpg" class="img-fluid" alt="Feature">
									<p>Makeup Artists</p>
								</div>
								<!-- /Slider Item -->

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Availabe Features -->

			<!-- Footer -->
			<footer class="footer">

				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/footer.png	" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Customers</h2>
									<ul>
										<!-- <li><a href="search.php"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.php"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.php"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li> -->

										<li><a href="#"><i class="fas fa-angle-double-right"></i> Search for Saloon</a>
										</li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Customer Dashboard</a>
										</li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Saloons</h2>
									<ul>
										<!-- <li><a href="appointments.php"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.php"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="doctor-register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="doctor-dashboard.php"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li> -->

										<li><a href="#"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Saloon Dashboard</a>
										</li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> Commercial Market, Satellite Town,<br> Rawalpindi, Pakistan</p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+331 5999701
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											styletory@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="container-fluid">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy All Rights Reserved | Styletory</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">

									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<!-- <li><a href="term-condition.php">Terms and Conditions</a></li>
											<li><a href="privacy-policy.php">Policy</a></li> -->
											<li><a href="">Terms and Conditions</a></li>
											<li><a href="">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->

								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>

	<!-- styletory/  30 Nov 2019 04:11:53 GMT -->

</html>
