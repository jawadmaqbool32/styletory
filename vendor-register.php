<!--  -->

<!DOCTYPE html>
<html lang="en">

<!-- styletory/register.php  30 Nov 2019 04:12:20 GMT -->

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>StyleTory - Business Registration</title>
	<!-- Favicons -->
	<link type="image/x-icon" href="assets/img/favicon.ico" rel="icon">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

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



<?php

require('db.php');

// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
	// removes backslashes
	// for full name 
	$fullname = stripslashes($_REQUEST['fullname']);
	//escapes special characters in a string
	$fullname = mysqli_real_escape_string($con, $fullname);
	//for username
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con, $username);
	// for address
	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con, $address);
	// for email 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con, $email);
	// for phoneNo
	$phoneNo = stripslashes($_REQUEST['phoneNo']);
	$phoneNo = mysqli_real_escape_string($con, $phoneNo);
	// for Specialization
	// $specialization = stripslashes($_REQUEST['specialization']);
	// $specialization = mysqli_real_escape_string($con, $specialization);

	$latitude = stripslashes($_REQUEST['latitude']);
	$latitude = mysqli_real_escape_string($con, $latitude);

	$longitude = stripslashes($_REQUEST['longitude']);
	$longitude = mysqli_real_escape_string($con, $longitude);
	// for dateofBirth
	$dob = stripslashes($_REQUEST['dob']);
	$dob = mysqli_real_escape_string($con, $dob);
	// for password 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);
	$password = password_hash($password, PASSWORD_DEFAULT);
	//    for confirm_password
	$confirm_password = stripslashes($_REQUEST['confirm_password']);
	$confirm_password = mysqli_real_escape_string($con, $confirm_password);
	$confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);
	// $create_datetime = date("Y-m-d H:i:s");

	// checking email and username already exists or not 
	$sql = mysqli_query($con, "SELECT * FROM vendor where email='$email'");
	$sql1 = mysqli_query($con, "SELECT * FROM vendor where username='$username'");
	$sql2 = mysqli_query($con, "SELECT * FROM vendor where phoneNo='$phoneNo'");

	if (mysqli_num_rows($sql) > 0) {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong> &#128552; ALERT!</strong> You are not registered because <strong>EMAIL</strong> already exists try another one. 	
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
 		 </button>
			</div>';
	} elseif (mysqli_num_rows($sql1) > 0) {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong>&#128545; ALERT!</strong> You are not registered because <strong>USERNAME</strong> already exists try another one.
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
 		 </button>
			</div>';
	} elseif (mysqli_num_rows($sql2) > 0) {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong>&#128548;ALERT!</strong> You are not registered because <strong>PHONE NUMBER</strong> already exists try another one.
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
 		 </button>
			</div>';
	} else {
		$query = "INSERT INTO  `vendor` (`fullname`, `username`, `address`,`phoneNo`, `email`,`dob`, `password`, `confirm_password`, `longitude`, `latitude`) VALUES ( '$fullname', '$username','$address','$phoneNo','$email','$dob', '$password', '$confirm_password', '$longitude','$latitude')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>&#128525; Success!</strong> You are registered successfully. 
				  <a href="vendor-login.php">LOGIN</a> To Proceed!
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			  <span aria-hidden="true">&times;</span>
 			 </button>
			</div>';
			$otp = rand(100000, 999999);
			$_SESSION['otp'] = $otp;
			$_SESSION['mail'] = $email;
			require "Mail/phpmailer/PHPMailerAutoload.php";
			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';

			$mail->Username = 'mh5436768@gmail.com';
			$mail->Password = 'Terayaarhunmn555';

			$mail->setFrom('mh5436768@gmail.com', 'OTP Verification');
			$mail->addAddress($_POST["email"]);

			$mail->isHTML(true);
			$mail->Subject = "Your verify code";
			$mail->Body = "<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Programming with Lam</b>
                    https://www.youtube.com/channel/UCKRZp3mkvL1CBYKFIlxjDdg";

			if (!$mail->send()) {
?>
				<script>
					alert("<?php echo "Register Failed, Invalid Email " ?>");
				</script>
			<?php
			} else {
			?>
				<script>
					alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
					window.location.replace('verification.php');
				</script>
<?php
			}
		} else {
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
 				 <strong>Warning!</strong> You should check in on some of those fields below.
 				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</div>" . mysqli_error($con);
		}
	}
} else {
}

?>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">


	</div>
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
					<a class="nav-link header-login" href="vendor-login.php"> Login </a>
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
					<!-- Register Content -->
					<div class="account-content">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-7 col-lg-6 login-left">
								<img src="assets/img/vendor-register.png" class="img-fluid" alt="Register">
							</div>
							<div class="col-md-12 col-lg-6 login-right">
								<div class="login-header">
									<h2>Register Business <span class="badge badge-warning">Free!</span>
									</h2>
								</div>

								<!-- Register Form -->
								<form action="" name="myform" method="POST">
									<input type="hidden" name="latitude" id="latitude">
									<input type="hidden" name="longitude" id="longitude">
									<div class="form-group form-focus">
										<input type="text" maxlength="40" class="form-control floating" name="fullname" required>
										<label class="focus-label">Saloon Name</label>
									</div>
									<div class="form-group form-focus">
										<input type="text" maxlength="20" class="form-control floating" name="username" id="username" onkeyup="Validate()" required>
										<label class="focus-label">UserName</label>
									</div>
									<div class="form-group">
										<label class="">Select Location</label>
										<div id="map" style="min-height: 400px;" class="col-md-12">

										</div>
									</div>
									<div class="form-group form-focus">
										<input type="text" maxlength="60" class="form-control floating" id="vendor_address" name="address" required>
										<label class="focus-label">Address</label>
									</div>
									<div class="form-group form-focus">
										<input type="email" maxlength="40" class="form-control floating" name="email" required>
										<label class="focus-label">Email</label>
									</div>
									<div class="form-group form-focus">
										<input type="date" class="form-control floating" name="dob" value="2020-01-04" required>
										<label class="focus-label">Opening Date </label>
									</div>
									<!-- <div class="form-group form-focus">
										<label class="focus-label">Specialization</label>
										<select class="form-control floating" name="specialization">
											<option value="Null">-- Select --</option>
											<option value="Hair Cut">Hair Cut</option>
											<option value="Hair Stylist">Hair Stylist</option>
											<option value="Makeup Artist">Makeup Artist</option>
											<option value="Skin Care">Skin Care</option>
											<option value="Beard Specialist">Beard Specialist</option>
											<option value="Nails Care">Nails Care</option>
										</select>
									</div> -->
									<div class="form-group form-focus">
										<input type="text" maxlength="12" pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" class="form-control floating" placeholder="Enter Phone Number like 0331-5999701" name="phoneNo" id="phoneNo" placeholder="Enter in 0000-0000000 format" required>
										<span id="print" style="color:red"> </span>
										<label class="focus-label">Phone Number</label>
									</div>
									<div class="form-group form-focus">
										<input type="password" maxlength="12" class="form-control floating" name="password" id="password" required>
										<span id="message" style="color:red"> </span>
										<label class="focus-label">Create Password</label>
									</div>
									<div class="form-group form-focus">
										<input type="password" maxlength="12" class="form-control floating" name="confirm_password" id="confirmpassword" required>
										<label class="focus-label">Confirm Password</label>
									</div>
									<div class="text-right">
										<a class="forgot-link" href="vendor-login.php">Already have an
											account?</a>
									</div>

									<button class="btn btn-primary btn-block btn-lg login-btn" name="submit" type="submit" onclick="return Validate()">Signup</button>

							</div>

							</form>
							<!-- /Register Form -->

						</div>
					</div>
				</div>
				<!-- /Register Content -->

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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function Validate() {
			var password = document.getElementById("password").value;
			var confirmpassword = document.getElementById("confirmpassword").value;
			var pw = document.getElementById("password").value;
			var phNo = document.getElementById("phoneNo").value;
			if (password != confirmpassword) {
				alert("Try Again! Passwords do not match.");
				return false;
			}
			if (pw == "") {
				document.getElementById("message").innerHTML = "**Fill the password please!**";
				return false;

			}
			if (pw.length < 8) {
				document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters**";
				return false;
			}

			//maximum length of password validation  
			if (pw.length > 15) {
				document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters**";
				return false;
			}
			// validation for phone number 
			if (phNo.length < 11) {
				document.getElementById("print").innerHTML = "**Phone Number must be of 11 characters**";
				return false;
			}

			// for username

			var usernames = document.getElementById("username").value; //get id with value 
			var usernamepattern = /^[a-zA-Z0-9]+$/; //Regular expression
			if (usernamepattern.test(usernames)) {
				document.getElementById("username").style.backgroundColor = 'yellow';
			} else {
				document.getElementById("username").style.backgroundColor = 'red';
				return false;
			}



			// email validation 
			var x = document.myform.email.value;
			var atposition = x.indexOf("@");
			var dotposition = x.lastIndexOf(".");
			if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
				alert("Invalid Email Address");
				return false;
			}
			return true;

		}
	</script>

	<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
	<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
	<script>
		var longitute = -74.5;
		var latitute = 40;
		getLocation();

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(setPosition_);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function setPosition_(position) {
			latitute = position.coords.latitude;
			longitute = position.coords.longitude;
			$('#latitude').val(position.coords.latitude);
			$('#longitude').val(position.coords.longitude);
			loadMaps();
		}

		function setPosition(lat, lon) {
			latitute = lat;
			longitute = lon;
			$('#latitude').val(lat);
			$('#longitude').val(lon);

		}
		var marker;
		loadMaps();

		function loadMaps() {
			mapboxgl.accessToken = 'pk.eyJ1IjoiYXNoaGFyLWFsaTEyNCIsImEiOiJja3hlZHNwd3YwNGt4Mm9ueGFsM3Fza3JpIn0.H1xqzHTj-c7kvbRjSwaU2w';

			const map = new mapboxgl.Map({
				container: 'map', // Container ID
				style: 'mapbox://styles/mapbox/streets-v11', // Map style to use
				center: [longitute, latitute], // starting position
				// Starting position [lng, lat]
				zoom: 12 // Starting zoom level
			});


			const geocoder = new MapboxGeocoder({
				// Initialize the geocoder
				accessToken: mapboxgl.accessToken, // Set the access token
				mapboxgl: mapboxgl, // Set the mapbox-gl instance
				marker: false, // Do not use the default marker style
				placeholder: 'Search for areas', // Placeholder text for the search bar
				proximity: {
					longitude: -122.25948,
					latitude: 37.87221
				} // Coordinates of UC Berkeley
			});

			// Add the geocoder to the map
			map.addControl(geocoder);

			// After the map style has loaded on the page,
			// add a source layer and default styling for a single point
			map.on('load', () => {
				map.addSource('single-point', {
					'type': 'geojson',
					'data': {
						'type': 'FeatureCollection',
						'features': []
					}
				});

				map.addLayer({
					'id': 'point',
					'source': 'single-point',
					'type': 'circle',
					'paint': {
						'circle-radius': 10,
						'circle-color': '#448ee4'
					}
				});

				// Listen for the `result` event from the Geocoder // `result` event is triggered when a user makes a selection
				//  Add a marker at the result's coordinates
				geocoder.on('result', (event) => {
					map.getSource('single-point').setData(event.result.geometry);
				});

				map.on('click', (e) => {
					// document.getElementById('info').innerHTML =
					//     // `e.point` is the x, y coordinates of the `mousemove` event
					//     // relative to the top-left corner of the map.
					//     JSON.stringify(e.point) +
					//     '<br />' +
					//     // `e.lngLat` is the longitude, latitude geographical position of the event.
					//     JSON.stringify(e.lngLat.wrap());
					if (marker) {
						marker.remove();
					}
					marker = new mapboxgl.Marker({
							color: "#0000bf",
							draggable: true
						}).setLngLat(e.lngLat)
						.addTo(map);
					setPosition(JSON.stringify(e.lngLat.lat), JSON.stringify(e.lngLat.lng))
					$.ajax({
						type: "get",
						url: "http://api.tiles.mapbox.com/v4/geocode/mapbox.places/" + JSON.stringify(e.lngLat.lng) + "," + JSON.stringify(e.lngLat.lat) + ".json?access_token=pk.eyJ1IjoiYXNoaGFyLWFsaTEyNCIsImEiOiJja3hlZHNwd3YwNGt4Mm9ueGFsM3Fza3JpIn0.H1xqzHTj-c7kvbRjSwaU2w",
						success: function(response) {
							$('#vendor_address').val(parseReverseGeo(response))
						}
					})

				});
			});
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				let reader = new FileReader();
				reader.onload = function(e) {
					$('.slider-preview-image')
						.removeClass('hidden')
						.attr('src', e.target.result)
						.width(160)
						.height(117)
						.css('borderRadius', '0.275rem');
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

		function parseReverseGeo(geoData) {
			// debugger;
			// var region, countryName, placeName, returnStr;
			// if (geoData.context) {
			// 	$.each(geoData.context, function(i, v) {
			// 		if (v.id.indexOf('region') >= 0) {
			// 			region = v.text;
			// 		}
			// 		if (v.id.indexOf('country') >= 0) {
			// 			countryName = v.text;
			// 		}
			// 	});
			// }
			// if (region && countryName) {
			// 	returnStr = region + ", " + countryName;
			// } else {
			// 	returnStr = geoData.place_name;
			// }
			// return returnStr;
			return geoData.features[0].place_name;
		}
		// TO MAKE THE MAP APPEAR YOU MUST
		// ADD YOUR ACCESS TOKEN FROM
		// https://account.mapbox.com
	</script>


</body>

<!-- styletory/register.php  30 Nov 2019 04:12:20 GMT -->

</html>