<?php
require("db.php");
require("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
  <title>StyleTory - Sales Report</title>

  <!-- Favicon -->
  <link type="image/x-icon" href="assets/img/favicon.ico" rel="icon" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

  <!-- Feathericon CSS -->
  <link rel="stylesheet" href="assets/css/feathericon.min.css" />

  <link rel="stylesheet" href="assets/plugins/morris/morris.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Header -->
    <div class="header">
      <!-- Logo -->
      <div class="header-left">
        <a href="index.php" class="logo">
          <img src="assets/img/styletory.jpg" alt="Logo" />
        </a>
        <a href="index.php" class="logo logo-small">
          <img src="assets/img/small-logo.jpg" alt="Logo" width="30" height="30" />
        </a>
      </div>
      <!-- /Logo -->

      <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
      </a>

      <div class="top-nav-search">
        <form>
          <input type="text" class="form-control" placeholder="Search here" />
          <button class="btn" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>

      <!-- Mobile Menu Toggle -->
      <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
      </a>
      <!-- /Mobile Menu Toggle -->

      <!-- Header Right Menu -->
      <ul class="nav user-menu">
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle" src="assets/img/admin.jpg" width="31" alt="admin" /></span>
          </a>
          <div class="dropdown-menu">
            <div class="user-header">
              <div class="avatar avatar-sm">
                <img src="assets/img/admin.jpg" alt="User Image" class="avatar-img rounded-circle" />
              </div>
              <div class="user-text">
                <a href="admin-edit-profile.php">
                  <?php echo "<h6>" . $_SESSION['username'] . "</h6>" ?>
                  <p class="text-muted mb-0">Administrator</p>
                </a>
              </div>
            </div>
            <!-- <a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="settings.php">Settings</a>
							<a class="dropdown-item" href="login.php">Logout</a> -->

            <a class="dropdown-item" href="admin-logout.php">Logout</a>
          </div>
        </li>
        <!-- /User Menu -->
      </ul>
      <!-- /Header Right Menu -->
    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="menu-title">
              <span>Main</span>
            </li>
            <li>
              <a href="admin-dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
            </li>
            <li>
              <a href="approvals.php"><i class="fa fa-user-circle"></i> <span>Approvals</span></a>
            </li>
            <li>
              <a href="saloon-details.php"><i class="fa fa-user-secret"></i> <span>Saloons List</span></a>
            </li>
            <li>
              <a href="customer-details.php"><i class="fa fa-user-circle-o"></i> <span>Customers List</span></a>
            </li>
            <li class="active">
              <a href="sales-report.php"><i class="fa fa-money"></i> <span>Sales Report</span></a>
            </li>
            <li>
              <a href="services.php"><i class="fa fa-server"></i> <span>Services</span></a>
            </li>
            <!-- <li>
                <a href="#"><i class="fe fe-layout"></i> <span>Appointments</span></a>
              </li>
              <li>
                <a href="#"><i class="fe fe-users"></i> <span>Specialities</span></a>
              </li>
              
              
							<li> 
								<a href="reviews.php"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
							</li>
							<li> 
								<a href="transactions-list.php"><i class="fe fe-activity"></i> <span>Transactions</span></a>
							</li>
							<li> 
								<a href="settings.php"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="invoice-report.php">Invoice Reports</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="profile.php"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									<li><a href="forgot-password.php"> Forgot Password </a></li>
									<li><a href="lock-screen.php"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404.php">404 Error </a></li>
									<li><a href="error-500.php">500 Error </a></li>
								</ul>
							</li>
							<li> 
								<a href="blank-page.php"><i class="fe fe-file"></i> <span>Blank Page</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.php"><i class="fe fe-vector"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
									<li><a href="form-input-groups.php">Input Groups </a></li>
									<li><a href="form-horizontal.php">Horizontal Form </a></li>
									<li><a href="form-vertical.php"> Vertical Form </a></li>
									<li><a href="form-mask.php"> Form Mask </a></li>
									<li><a href="form-validation.php"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic.php">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row">
            <div class="col-sm-12">
              <?php echo "<h2 class='page-title text-center'>Sales Report</h2>" ?>
              <?php // echo "<h3 class='page-title'>WELCOME ".$_SESSION['username']."</h3>"
              ?>

              <ul class="breadcrumb">
                <li class="breadcrumb-item active">Sales Report</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Apply Filters</h4>
              </div>
              <div class="card-body">
                <form action="sales-report-print.php" method="POST" id="download_form">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Vendor</label>
                        <select class="filter-component form-control" name="vendor" id="vendor_input">
                          <option value="" selected disabled>Select Vendor</option>
                          <?php

                          $vendor_query = "SELECT * FROM `vendor`";

                          $vendors = mysqli_query($con, $vendor_query);
                          if (mysqli_num_rows($vendors) > 0) {
                            while ($row = mysqli_fetch_array($vendors)) {
                          ?>
                              <option value="<?php echo $row['id'] ?>"><?php echo $row['fullname'] ?></option>
                          <?php
                            }
                          }

                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">From</label>
                        <input class="filter-component form-control" value="<?php echo date('Y-m') ?>-01" type="date" name="date_from" id="date_from">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">To</label>
                        <input class="filter-component form-control" value="<?php echo date('Y-m-d') ?>" type="date" name="date_to" id="date_to">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <button type="submit" class="btn btn-warning">Download</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="ajax-wrapper">


        </div>

      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Slimscroll JS -->
  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="assets/plugins/raphael/raphael.min.js"></script>
  <script src="assets/plugins/morris/morris.min.js"></script>
  <script src="assets/js/chart.morris.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
  <script>
    $(document).ready(function() {

      $(document).on('submit', '#download_form', function(e) {
        var vendor = $('#vendor_input').val();
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        if (vendor && date_from && date_to) {
          $(this).submit();
        } else {
          e.preventDefault();
        }
      })

      $(document).on('change', '.filter-component', function() {
        apply_filter();
      });

      function apply_filter() {
        var vendor = $('#vendor_input').val();
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        if (vendor && date_from && date_to)
          $.ajax({
            type: "post",
            url: "ajax_end_points.php?sales_report_filter",
            data: {
              vendor: vendor,
              date_from: date_from,
              date_to: date_to,
            },
            success: function(response) {
              $('.ajax-wrapper').html(response);
            }
          })
      }
    })
  </script>
</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->

</html>