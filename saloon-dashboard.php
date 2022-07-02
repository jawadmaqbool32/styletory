<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
$username = $_SESSION['username'];
//   query to show data in the input fields from the database
$query = mysqli_query($con, "SELECT * FROM vendor WHERE username = '" . $_SESSION['username'] . "'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>StyleTory- Vendor Dashboard</title>

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
						<a href="index.php" class="menu-logo">
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
									<a href="#">About Us</a>
								</li>
								<ul class="main-nav">
									<li>
										<a href="#">Services</a>
									</li>
									<ul class="main-nav">
										<li>
											<a href="#">Contact</a>
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
								<a href="login.php">Logout</a>
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
						<a class="nav-link header-login" href="vendor-logout.php">Logout </a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-12 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Saloon Dashboard</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Saloon Dashboard</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						<?php
						if (mysqli_num_rows($query) > 0) {
						?>
							<?php
							$i = 0;
							while ($row = mysqli_fetch_array($query)) {

							?>
								<!-- Profile Sidebar -->
								<div class="profile-sidebar">
									<div class="widget-profile pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
												<img src="<?php echo "admin/upload/" . $row['image']; ?>" onerror="this.src='assets/img/avatar.png'" alt="User Image">
											</a>
											<div class="profile-det-info">
												<?php echo "<h3>" . $_SESSION['username'] . "</h3>" ?>

												<div class="patient-details">
													<h5 class="mb-0">Hair Stylist, Artist, Hair Dresser</h5>
												</div>
											</div>
										</div>
									</div>
							<?php
							}
						}
							?>
							<div class="dashboard-widget">
								<nav class="dashboard-menu">
									<ul>
										<li class="active">
											<a href="saloon-dashboard.php">
												<i class="fas fa-columns"></i>
												<span>Dashboard</span>
											</a>
										</li>
										<li>
											<a href="appointments.php">
												<i class="fas fa-calendar-check"></i>
												<span>Appointments</span>
											</a>
										</li>
										<li>
											<a href="staff-members.php">
												<i class="fa fa-users"></i>
												<span>Staff Members</span>
											</a>
										</li>
										<li>
											<a href="vendor-services.php">
												<i class="fa fa-tasks"></i>
												<span>My Services</span>
											</a>
										</li>
										<li>
											<a href="vendor-fares.php">
												<i class="far fa-money-bill-alt" aria-hidden="true"></i>
												<span>Service Fare</span>
											</a>
										</li>

										<li>
											<a href="schedule-timings.php">
												<i class="fas fa-hourglass-start"></i>
												<span>Schedule Timings</span>
											</a>
										</li>


										<li>
											<a href="saloon-profile-settings.php">
												<i class="fas fa-user-cog"></i>
												<span>Profile Settings</span>
											</a>
										</li>

										<li>
											<a href="saloon-change-password.php">
												<i class="fas fa-lock"></i>
												<span>Change Password</span>
											</a>
										</li>
										<li>
											<a href="vendor-logout.php">
												<i class="fas fa-sign-out-alt"></i>
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
								</div>
								<!-- /Profile Sidebar -->

					</div>

					<div class="col-md-7 col-lg-8 col-xl-9">

						<div class="row">
							<div class="col-md-12">
								<div class="card dash-card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-lg-4">
												<div class="dash-widget dct-border-rht">
													<div class="circle-bar circle-bar1">
														<div class="circle-graph1" data-percent="60">
															<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Total Customers</h6>
														<h3>1500</h3>
														<p class="text-muted">Till Today</p>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-lg-4">
												<div class="dash-widget dct-border-rht">
													<div class="circle-bar circle-bar2">
														<div class="circle-graph2" data-percent="58">
															<img src="assets/img/icon-02.png" class="img-fluid" alt="Customer">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Today Customer</h6>
														<h3>34</h3>
														<p class="text-muted">12, Dec 2021</p>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-lg-4">
												<div class="dash-widget">
													<div class="circle-bar circle-bar3">
														<div class="circle-graph3" data-percent="40">
															<img src="assets/img/icon-03.png" class="img-fluid" alt="Customer">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Appoinments</h6>
														<h3>85</h3>
														<p class="text-muted">15, Dec 2021</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h4 class="mb-4">Client Appoinment</h4>
								<div class="appointment-tab">
									<?php
									if (isset($_REQUEST['cancel'])) {
										// for services_id
										$upload = '';
										$booking = stripslashes($_REQUEST['booking']);
										$booking = mysqli_real_escape_string($con, $booking);

										$update_query = "UPDATE `booking` SET `status` = 'rejected' WHERE `id` = " . $booking;
										$result = mysqli_query($con, $update_query);
										if ($result) {
											echo ' <div class="alert alert-info alert-dismissible fade show" role="alert">
										<strong></strong> Booking Cancelled.

										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
										} else {
											echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
										<strong>Warning!</strong> Try Again.
										<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
									</div>" . mysqli_error($con);
										}
									}




									if (isset($_REQUEST['accept'])) {
										// for services_id
										$upload = '';
										$booking = stripslashes($_REQUEST['booking']);
										$booking = mysqli_real_escape_string($con, $booking);

										$update_query = "UPDATE `booking` SET `status` = 'approved' WHERE `id` = " . $booking;
										$result = mysqli_query($con, $update_query);
										if ($result) {
											echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
										<strong></strong> Booking Approved.

										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
										} else {
											echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
										<strong>Warning!</strong> Try Again.
										<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
									</div>";
										}
									}
									?>

									<!-- Appointment Tab -->
									<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
										<li class="nav-item">
											<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
										</li>
									</ul>
									<!-- /Appointment Tab -->

									<div class="tab-content">

										<!-- Upcoming Appointment Tab -->
										<div class="tab-pane show active" id="upcoming-appointments">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th class="text-center">Client Name</th>
																	<th>Appt Date</th>
																	<th>Purpose</th>
																	<th class="text-center">Staff Member</th>
																	<th class="text-center">Paid Amount</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php

																$vendor_query = mysqli_query($con, "SELECT * FROM `vendor` WHERE `username` = '" . $_SESSION['username'] . "'");
																$vendor = mysqli_fetch_array($vendor_query);
																$booking_query = mysqli_query($con, "SELECT * FROM  `booking`   WHERE `status` = 'pending' AND `vendor_id` = " . $vendor['id']);
																while ($booking =  mysqli_fetch_array($booking_query)) {
																	$service_query = mysqli_query($con, "SELECT * FROM `services` WHERE `id` = '" . $booking['service_id'] . "'");
																	$member_query = mysqli_query($con, "SELECT * FROM `staff_members` WHERE `id` = '" . $booking['member_id'] . "'");
																	$customer_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `id` = '" . $booking['customer_id'] . "'");
																	$service = mysqli_fetch_array($service_query);
																	$member = mysqli_fetch_array($member_query);
																	$customer = mysqli_fetch_array($customer_query);

																?>
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
																				<a href="#"><?php echo $customer['fullname'] ?>
																					<span><?php echo $service['name'] ?></span></a>
																			</h2>
																		</td>
																		<td>
																			<?php echo date('d M Y', strtotime($booking['booking_date'])) ?> <span class="d-block text-info"><?php echo date('h:i A', strtotime($booking['time_from'])) ?></span></td>
																		<td><?php echo $service['name'] ?></td>
																		<td><?php echo $member['name'] ?></td>
																		<td class="text-center"><?php echo $booking['total_amount'] ?></td>
																		<td class="text-right">
																			<div class="table-action">
																				<form action="" method="post">
																					<input type="hidden" name="booking" value="<?php echo $booking['id'] ?>">
																					<!-- <a href="javascript:void(0);" class="btn btn-sm bg-info-light"> -->
																						<!-- <i class="far fa-eye"></i> View -->
																					<!-- </a> -->
																					<button type="submit" name="accept" class="btn btn-sm bg-success-light">
																						<i class="fas fa-check"></i> Accept
																					</button>
																					<button type="submit" name="cancel" class="btn btn-sm bg-danger-light">
																						<i class="fas fa-times"></i> Cancel
																					</button>
																				</form>
																			</div>
																		</td>
																	</tr>
																<?php
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Upcoming Appointment Tab -->

										<!-- Today Appointment Tab -->
										<div class="tab-pane" id="today-appointments">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th class="text-center">Client Name</th>
																	<th>Appt Date</th>
																	<th>Purpose</th>
																	<th class="text-center">Staff Member</th>
																	<th class="text-center">Paid Amount</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php

																$vendor_query = mysqli_query($con, "SELECT * FROM `vendor` WHERE `username` = '" . $_SESSION['username'] . "'");
																$vendor = mysqli_fetch_array($vendor_query);
																$booking_query = mysqli_query($con, "SELECT * FROM  `booking`   WHERE `status` = 'pending' AND `vendor_id` = '" . $vendor['id'] . "' AND  `booking_date` = '" . date('Y-m-d') . "'");
																while ($booking =  mysqli_fetch_array($booking_query)) {
																	$service_query = mysqli_query($con, "SELECT * FROM `services` WHERE `id` = '" . $booking['service_id'] . "'");
																	$member_query = mysqli_query($con, "SELECT * FROM `staff_members` WHERE `id` = '" . $booking['member_id'] . "'");
																	$customer_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `id` = '" . $booking['customer_id'] . "'");
																	$service = mysqli_fetch_array($service_query);
																	$member = mysqli_fetch_array($member_query);
																	$customer = mysqli_fetch_array($customer_query);

																?>
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
																				<a href="#"><?php echo $customer['fullname'] ?>
																					<span><?php echo $service['name'] ?></span></a>
																			</h2>
																		</td>
																		<td>
																			<?php echo date('d M Y', strtotime($booking['booking_date'])) ?> <span class="d-block text-info"><?php echo date('h:i A', strtotime($booking['time_from'])) ?></span></td>
																		<td><?php echo $service['name'] ?></td>
																		<td><?php echo $member['name'] ?></td>
																		<td class="text-center"><?php echo $booking['total_amount'] ?></td>
																		<td class="text-right">
																			<div class="table-action">

																				<form action="" method="post">
																					<input type="hidden" name="booking" value="<?php echo $booking['id'] ?>">
																					<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																						<i class="far fa-eye"></i> View
																					</a>
																					<button type="submit" name="accept" class="btn btn-sm bg-success-light">
																						<i class="fas fa-check"></i> Accept
																					</button>
																					<button type="submit" name="cancel" class="btn btn-sm bg-danger-light">
																						<i class="fas fa-times"></i> Cancel
																					</button>
																				</form>
																			</div>
																		</td>
																	</tr>
																<?php
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Today Appointment Tab -->

									</div>
								</div>
							</div>
						</div>

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

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Circle Progress JS -->
	<script src="assets/js/circle-progress.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

<!-- styletory/doctor-dashboard.php  30 Nov 2021 04:12:09 GMT -->

</html>