<?php
require('db.php');
//include auth_session.php file on all user panel pages
session_start();
// This line is for row query 
$query = mysqli_query($con, "SELECT * FROM customer WHERE username = '" . $_SESSION['username'] . "'");
?>



<!DOCTYPE html>
<html lang="en">
<!-- styletory/patient-dashboard.php  30 Nov 2021 04:12:16 GMT -->

<head>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

  <title>StyleTory- Customer Dashboard</title>

  <!-- Favicons -->
  <link type="image/x-icon" href="assets/img/favicon.ico" rel="icon" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <style>
    .search-bar {
      border: none;
      border-radius: 25px;
      padding: 10px;
      outline: none !important;

    }

    .btn-search {
      border-radius: 50%;
      margin-left: -34px;
    }
  </style>
</head>

<body>
  <!-- Main Wrapper -->
  <?php
  $last_date_of_next = strtotime('last day of next month');
  $last_day = date('d/m/Y', $last_date_of_next);
  date_default_timezone_set("Asia/Karachi");
  ?>
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
              <img src="assets/img/styletory.png" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
              <i class="fas fa-times"></i>
            </a>
          </div>
          <ul class="main-nav">
            <!-- <li class="active">
                <a href="">Home</a>
              </li>
              <ul class="active main-nav">
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
								<a href="login.php">Login / Signup</a>
							</li> -->
          </ul>
        </div>
        <ul class="nav header-navbar-rht">
          <li class="nav-item contact-item">
            <div class="header-contact-img">
              <i class="fa fa-phone"></i>
            </div>
            <div class="header-contact-detail">
              <p class="contact-header">&nbsp; <strong>Click to Call</strong></p>
              <p class="contact-info-header"><a href="tel:+923315999701"> +923315999701</a></p>
            </div>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link header-login" href="customer-login.php">login / Signup </a>
            </li> -->
        </ul>
      </nav>
    </header>
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6 col-6">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Customer Dashboard
                </li>
              </ol>
            </nav>
            <h2 class="breadcrumb-title">Customer Dashboard</h2>
          </div>

          <div class="col-md-6 col-6">
            <div class="d-flex float-right">
              <input type="text" placeholder="Search..." name="" id="search_input" class="search-bar">
              <button class=" btn-search btn btn-warning"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Breadcrumb -->
    <?php
    if (mysqli_num_rows($query) > 0) {
    ?>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <!-- Page Content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- Profile Sidebar -->
              <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                <div class="profile-sidebar">
                  <div class="widget-profile pro-widget-content">
                    <div class="profile-info-widget">
                      <a href="#" class="booking-doc-img">
                        <img src="<?php echo "admin/upload/" . $row["image"]; ?>" onerror="this.src='assets/img/avatar.png'" alt="User Image" />
                      </a>
                      <div class="profile-det-info">
                        <?php echo "<h3>" . $_SESSION['username'] . "</h3>" ?>
                        <div class="patient-details">
                          <h5>
                            <i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38
                            years
                          </h5>
                          <h5 class="mb-0">
                            <i class="fas fa-map-marker-alt"></i> Islamabad, Pakistan
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dashboard-widget">
                    <nav class="dashboard-menu">
                      <ul>
                        <li>
                          <a href="customer-dashboard.php">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                          </a>
                        </li>
                        <li class="active">
                          <a href="booking.php">
                            <i class="fa fa-envelope"></i>
                            <span>Booking</span>
                          </a>
                        </li>
                        <li>
                          <a href="profile-settings.php">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile Settings</span>
                          </a>
                        </li>
                        <li>
                          <a href="change-password.php">
                            <i class="fas fa-lock"></i>
                            <span>Change Password</span>
                          </a>
                        </li>
                        <li>
                          <a href="customer-logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- / Profile Sidebar -->
            <?php
            $i++;
          }
            ?>


            <div class="col-md-6 col-sm-7 col-lg-8 col-xl-9">
              <?php
              if (isset($_REQUEST['add'])) {
              ?>
                <div class="row">
                  <div class="col-md-12">

                    <?php

                    $customer_query = mysqli_query($con, "SELECT * FROM customer WHERE username = '" . $_SESSION['username'] . "'");
                    $customer = mysqli_fetch_array($customer_query)['id'];
                    $staff  = stripslashes($_REQUEST['staff']);
                    $booking_date  = stripslashes($_REQUEST['booking_date']);
                    $vendor  = stripslashes($_REQUEST['vendor']);
                    $service  = stripslashes($_REQUEST['service']);
                    $time_from  = stripslashes($_REQUEST['time_from']);
                    $time_to  = stripslashes($_REQUEST['time_to']);
                    $price  = stripslashes($_REQUEST['price']);
                    $staff = mysqli_real_escape_string($con, $staff);
                    $service = mysqli_real_escape_string($con, $service);
                    $booking_date = mysqli_real_escape_string($con, $booking_date);
                    $vendor = mysqli_real_escape_string($con, $vendor);
                    $time_from = mysqli_real_escape_string($con, $time_from);
                    $time_to = mysqli_real_escape_string($con, $time_to);
                    $price = mysqli_real_escape_string($con, $price);
                    $check_query  = "SELECT * FROM `booking` where `member_id` = '$staff' AND `booking_date` = '$booking_date' AND `time_from` = '$time_from' AND `time_to` = '$time_to'";
                    $check = mysqli_query($con, $check_query);
                    if ($check->num_rows == 0) {
                      $insert_booking = "INSERT INTO `booking` (`vendor_id`, `customer_id`, `member_id`, `service_id`, `booking_date`, `time_from`, `time_to`, `total_amount`) 
                      VALUES('$vendor', '$customer', '$staff', '$service', '$booking_date', '$time_from', '$time_to', '$price')";
                      $insert = mysqli_query($con, $insert_booking);




                      if ($insert) {
                        echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong></strong> Slot Added Successfully. 
    
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

                  </div>
                </div>




              <?php
              }
              ?>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="filter_distance">Search Near by</label>
                        <select class="form-control" name="distance" id="filter_distance">
                          <option value="" selected>Select Distance</option>
                          <option value="5">5 KM</option>
                          <option value="20">20 KM</option>
                          <option value="50">50 KM</option>
                          <option value="400">400 KM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="filter_distance">Search by Day</label>
                        <select class="form-control" name="day" id="filter_day">
                          <option value="" selected>Select Day</option>
                          <option value="sunday">Sunday</option>
                          <option value="monday">Monday</option>
                          <option value="tuesday">Tuesday</option>
                          <option value="wednesday">Wednesday</option>
                          <option value="thursday">Thursday</option>
                          <option value="friday">Friday</option>
                          <option value="saturday">Saturday</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="filter_distance">Search by Service</label>
                        <select class="form-control" name="service" id="filter_service">
                          <option value="" selected>Select Service</option>
                          <?php
                          $services_query = "SELECT * FROM `services`";
                          $services = mysqli_query($con, $services_query);

                          while ($service = mysqli_fetch_array($services)) {

                          ?>
                            <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>
                          <?php
                          }

                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="filter_distance">Price From</label>
                        <input class="form-control" placeholder="from (PKR)..." name="price_from" id="filter_price_from">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="filter_distance">Price To</label>
                        <input class="form-control" placeholder="to (PKR)..." name="price_to" id="filter_price_to">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div style="margin-top: 33px;" class="form-group">
                        <button class="btn btn-primary" type="button" id="btn_apply_filter" value="">Apply Filter</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="booking_wrapper">

                <?php
                $res = mysqli_query($con, "SELECT * FROM `vendor`");
                while ($row = mysqli_fetch_array($res)) {
                  include('./booking_table.php')
                ?>
                  <!-- Doctor Widget -->
              </div>
            <?php
                }
            ?>

            </div>
            <!-- /Doctor Widget
							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>	
							</div>-->
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. </p>
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

                <li><a href="#"><i class="fas fa-angle-double-right"></i> Search for Saloon</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i> Login</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i> Register</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i> Booking</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i> Customer Dashboard</a></li>
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
                <li><a href="#"><i class="fas fa-angle-double-right"></i> Saloon Dashboard</a></li>
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
  <div class="modal fade custom-modal" id="add_booking_modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="add_appointment" onsubmit="" method="post">
            <input type="hidden" name="vendor" id="modal_vendor">
            <div class="hours-info">
              <div class="row form-row hours-cont">
                <div class="col-12 col-md-12">
                  <div class="row form-row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label for="">Date <strong class="text-danger">*</strong></label>
                        <input  class="form-control" value="<?php echo date('Y-m-d') ?>" min="<?= $a_date = date('Y-m-d', time()); ?>" max="<?= $last_day = date('Y-m-d', $last_date_of_next); ?>" type="date" name="booking_date" id="booking_date" required>
                      </div>
                      <div class="form-group">
                        <label for="">Select Services <strong class="text-danger">*</strong></label>
                        <select name="service" id="modal_services" class="form-control" required>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Select Staff Member <strong class="text-danger">*</strong></label>
                        <select name="staff" id="modal_members" class="form-control" required="required">
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Service Info</label>
                        <div class="form-group">
                          <button type="button" id="modal_required_time" class="btn btn-success" disabled></button>
                          <button type="button" id="modal_price" class="btn btn-success" disabled></button>
                          <input required type="hidden" name="price" id="modal_service_price">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">Select Time</label>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">From <strong class="text-danger">*</strong></label>
                              <input required type="time" class="form-control" name="time_from" id="modal_time_from" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">To <strong class="text-danger">*</strong></label>
                              <input required readonly type="time" class="form-control" name="time_to" id="modal_time_to">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <span class="time-message text-danger"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">Time Slots</label>
                        <div id="member_time_slots"></div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-success btn-block" name="add" type="submit">Create Appointment</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>


        </form>
      </div>
    </div>
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

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>


  <script>
    $(document).ready(function() {
      var min = '';
      var max = '';
      var latitude = '';
      var longitude = '';
      $(document).on('click', '.add-booking', function() {
        $('#modal_vendor').val($(this).data('vendor'));
        $.ajax({
          type: "post",
          dataType: "json",
          url: "ajax_end_points.php?get_vendor_info",
          data: {
            vendor: $(this).data('vendor')
          },
          success: function(response) {
            if (response.success) {
              $('#modal_services').empty();
              $('#modal_members').empty();
              $('#modal_services').append(`<option value="" selected>Select Service</option`);
              $('#modal_members').append(`<option value="" selected>Select Member</option`);
              for (let index = 0; index < response.services.length; index++) {
                $('#modal_services').append(`<option value="${response.services[index].id}" data-price="${response.services[index].price}" data-time="${response.services[index].time}">${response.services[index].name}</option>`)
              }
              for (let index = 0; index < response.members.length; index++) {
                $('#modal_members').append(`<option value="${response.members[index].id}" data-speciality="${response.members[index].speciality}">${response.members[index].name}</option>`)
              }
              $('#modal_price').hide();
              $('#modal_required_time').hide();
              $('#modal_required_time').parent('div').siblings().hide();
            }
          }
        })
      })
      $(document).on('change', '#modal_services', function() {
        $('#modal_required_time').show();
        $('#modal_price').show();

        $('#modal_price').text($(this).find('option:selected').data('price') + " (PKR)");
        $('#modal_service_price').val($(this).find('option:selected').data('price'));
        $('#modal_required_time').text($(this).find('option:selected').data('time') + " (min)");
        $('#modal_required_time').parent('div').siblings('label').show();
        calculate_to_time();
        check_availablity();
      })
      $(document).on('change', '#booking_date', function() {
        get_member_schedule();
      })
      $(document).on('change', '#modal_members', function() {
        get_member_schedule();
      })
      $(document).on('click', '.available-time-slot', function() {
        $('#modal_time_from').val($(this).data('from'));
        $('#modal_time_to').val($(this).data('to'));
        min = $(this).data('from');
        max = $(this).data('to');
        calculate_to_time();
        check_availablity();
      })
      $(document).on('change', '#modal_time_from', function() {
        {
          calculate_to_time();
          check_availablity()
        }
      })

      function calculate_to_time() {
        var from = $('#modal_time_from').val();
        var require_time = $('#modal_services').find('option:selected').data('time');
        if (require_time) {
          var time_arr = from.split(':', 3);
          var hours = time_arr[0];
          var minutes = time_arr[1];
          var seconds = '00';
          if (time_arr[2]) {
            seconds = time_arr[2]
          }
          minutes = Number(minutes) + Number(require_time);
          if (minutes >= 60) {
            minutes = (minutes) - Number(60);
            hours = Number(hours) + 1;

          }
          if (hours >= 24) {
            hours = Number(hours) - 24;
          }
          minutes = minutes + '';
          hours = hours + '';
          if (minutes.length == 1) {
            minutes = '0' + minutes;
          }
          if (hours.length == 1) {
            hours = '0' + hours;
          }
          $('#modal_time_to').val(hours + ':' + minutes + ':' + seconds)
        }
      }

      function check_availablity(selector) {
        var input_from = $('#modal_time_from').val();
        var input_to = $('#modal_time_to').val();
        var message = '';

        if (input_from < min) {
          message = 'Appointment not available.'

        }
        if (input_from > max) {
          message = 'Appointment not available.'
        }
        if (input_to < min) {
          message = 'Appointment not available.'

        }
        if (input_to > max) {
          message = 'Appointment not available.'
        }
        $('.time-message').empty();
        if (message) {
          $('.time-message').text(message);
          $('#modal_time_to').val('');
        }

      }

      function get_member_schedule() {
        let member = $('#modal_members').val();
        let date = $('#booking_date').val();
        let vendor = $('#modal_vendor').val();
        $.ajax({
          type: "post",
          url: "ajax_end_points.php?get_member_schedule",
          data: {
            member: member,
            date: date,
            vendor: vendor
          },
          success: function(response) {
            $('#member_time_slots').html(response);
          }
        })
      }
      $(document).on('change', '#filter_distance', function() {
        get_location();
      })

      function get_location() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(show_position)
        } else {
          alert('Geo Location is not supported by browser.');
        }
      }

      function show_position(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
      }


      $(document).on('keyup', '#search_input', function() {
        $.ajax({
          type: "post",
          url: "ajax_end_points.php?booking_search",
          data: {
            key_word: $(this).val(),
          },
          success: function(response) {
            $('#booking_wrapper').html(response);
          }
        })
      })

      $(document).on('click', '#btn_apply_filter', function() {
        var distance = $('#filter_distance').val();
        var day = $('#filter_day').val();
        var service = $('#filter_service').val();
        var price_from = $('#filter_price_from').val();
        var price_to = $('#filter_price_to').val();
        console.log(latitude);
        console.log(longitude);
        $.ajax({
          type: "post",
          url: "ajax_end_points.php?booking_filter",
          data: {
            distance: distance,
            day: day,
            service: service,
            price_from: price_from,
            price_to: price_to,
            latitude: latitude,
            longitude: longitude
          },
          success: function(response) {
            $('#booking_wrapper').html(response);
          }
        })
      });
    })
  </script>

<?php
    } else {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong>Session Expired!</strong> Try Again	
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
 		 </button>
			</div>';
    }
?>
</body>

<!-- styletory/customer-dashboard.php  30 Nov 2021 04:12:16 GMT -->

</html>