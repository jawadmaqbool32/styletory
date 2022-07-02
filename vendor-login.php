<!DOCTYPE html>
<html lang="en">

	<!-- styletory/login.php  30 Nov 2019 04:12:20 GMT -->
<?php
if(isset($_SESSION['username'])) {
    header("Location:saloon-dashboard.php"); // redirects them to homepage
     exit; // for good measure
}
?>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>StyleTory- Business Login</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="assets/img/favicon.ico" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.min.js"></script>
				<script src="assets/js/respond.min.js"></script>
			<![endif]-->

	</head>
	<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
	
    if(isset($_REQUEST['username'])) 
	{
		$username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user exist in the database
        $query= "SELECT * FROM vendor WHERE username = '$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
			while ($rows=mysqli_fetch_assoc($result))
			{
					if(password_verify($password,$rows['password']))
					{
								$_SESSION['username'] = $username;
									// Redirect to vendor dashboard page
									header("Location:saloon-dashboard.php");
								} else{
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>ALERT!</strong> Wrong Username or Password. <strong>TRY AGAIN!</strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>';
      						  }
					}
			}else{
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>ALERT!</strong> Wrong Username or Password. <strong>TRY AGAIN!</strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>';
      						  }
           
    } else {	}
?>
	<body class="account-page">

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
							<!-- <li class="active">
								<a href="index.php">Home</a>
							</li>
							<ul class="main-nav">
								<li>
									<a href="index.php">About Us</a>
								</li>
								<ul class="main-nav">
									<li>
										<a href="index.php">Services</a>
									</li>
									<ul class="main-nav">
										<li>
											<a href="index.php">Contact</a>
										</li> -->
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
							<a class="nav-link header-login" href="vendor-register.php"> Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/vendor-login.png" class="img-fluid" alt="styletory Login">
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h2>Business Login <span class="badge badge-warning">New!</span></h2>
										</div>
										<form  method="post" name="login">
											<div class="form-group form-focus">
												<input type="text" maxlength="20" name="username" class="form-control floating" required >
												<label class="focus-label"><i class="fa fa-user" aria-hidden="true">  Username</label></i>
											</div>
											<div class="form-group form-focus">
												<input type="password" maxlength="12" name="password" class="form-control floating" required>
												<label class="focus-label"><i class="fa fa-lock" aria-hidden="true">
												Password</label></i>
											</div><p></p>
											<div class="text-right">
												<a class="forgot-link" href="vendor-forgot-password.php">Forgot Password?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="save" type="submit">Login
											</button>
											<div class="text-center dont-have">Register as a customer?<a href="customer-login.php"> Customer Login</a></div>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="text-center dont-have">Don’t have an vendor account? <a href="vendor-register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

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
											tempor incididunt
											ut labore et dolore magna aliqua. </p>
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
									<h2 class="footer-title">For Vendors</h2>
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
										<li><a href="#"><i class="fas fa-angle-double-right"></i> Vendor Dashboard</a>
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

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
	</body>

	<!-- styletory/login.php  30 Nov 2019 04:12:20 GMT -->

</html>
