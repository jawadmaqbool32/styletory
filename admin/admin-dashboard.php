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
  <title>StyleTory - Admin Dashboard</title>

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
            <li class="active">
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
            <li>
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
              <?php echo "<h2 class='page-title text-center'>WELCOME ADMIN</h2>" ?>
              <?php // echo "<h3 class='page-title'>WELCOME ".$_SESSION['username']."</h3>"
              ?>

              <ul class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <span class="dash-widget-icon text-primary border-primary">
                    <i class="fe fe-users"></i>
                  </span>
                  <div class="dash-count">
                    <h3>101</h3>
                  </div>
                </div>
                <div class="dash-widget-info">
                  <h6 class="text-muted">Saloons</h6>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary w-25"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <span class="dash-widget-icon text-success">
                    <i class="fe fe-credit-card"></i>
                  </span>
                  <div class="dash-count">
                    <h3>487</h3>
                  </div>
                </div>
                <div class="dash-widget-info">
                  <h6 class="text-muted">Clients</h6>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success w-50"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <span class="dash-widget-icon text-danger border-danger">
                    <i class="fe fe-money"></i>
                  </span>
                  <div class="dash-count">
                    <h3>485</h3>
                  </div>
                </div>
                <div class="dash-widget-info">
                  <h6 class="text-muted">Appointment</h6>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger w-50"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <span class="dash-widget-icon text-warning border-warning">
                    <i class="fe fe-folder"></i>
                  </span>
                  <div class="dash-count">
                    <h3>$62523</h3>
                  </div>
                </div>
                <div class="dash-widget-info">
                  <h6 class="text-muted">Revenue</h6>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning w-50"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex">
            <!-- Recent Orders -->
            <div class="card card-table flex-fill">
              <div class="card-header">
                <h4 class="card-title">Saloon List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>Saloon Name</th>
                        <th>Speciality</th>
                        <th>Earned</th>
                        <th>Reviews</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/1.jpg" alt="User Image" /></a>
                            <a href="#">Depilex</a>
                          </h2>
                        </td>
                        <td>Hair Dresser</td>
                        <td>$3200.00</td>
                        <td>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star-o text-secondary"></i>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/2.jpg" alt="User Image" /></a>
                            <a href="#">Toni And Guy</a>
                          </h2>
                        </td>
                        <td>Makeup Artist</td>
                        <td>$3100.00</td>
                        <td>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star-o text-secondary"></i>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/3.jpg" alt="User Image" /></a>
                            <a href="#">Micheal K Salon</a>
                          </h2>
                        </td>
                        <td>Nails Care</td>
                        <td>$4000.00</td>
                        <td>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star-o text-secondary"></i>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/4.jpg" alt="User Image" /></a>
                            <a href="#">Khawar Riaz Mens Saloon</a>
                          </h2>
                        </td>
                        <td>Skin Care</td>
                        <td>$3200.00</td>
                        <td>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star-o text-secondary"></i>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/5.jpg" alt="User Image" /></a>
                            <a href="">Tariq Amin</a>
                          </h2>
                        </td>
                        <td>Beard Specialists</td>
                        <td>$3500.00</td>
                        <td>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star text-warning"></i>
                          <i class="fe fe-star-o text-secondary"></i>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /Recent Orders -->
          </div>
          <div class="col-md-6 d-flex">
            <!-- Feed Activity -->
            <div class="card card-table flex-fill">
              <div class="card-header">
                <h4 class="card-title">Clients List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>Client Name</th>
                        <th>Phone</th>
                        <th>Last Visit</th>
                        <th>Paid</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image" /></a>
                            <a href="#">Alishba Zaidi</a>
                          </h2>
                        </td>
                        <td>8286329170</td>
                        <td>20 Oct 2019</td>
                        <td class="text-right">$100.00</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image" /></a>
                            <a href="#">Muhammad Wajahat </a>
                          </h2>
                        </td>
                        <td>2077299974</td>
                        <td>22 Oct 2019</td>
                        <td class="text-right">$200.00</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image" /></a>
                            <a href="#">Ali Raza</a>
                          </h2>
                        </td>
                        <td>2607247769</td>
                        <td>21 Oct 2019</td>
                        <td class="text-right">$250.00</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image" /></a>
                            <a href="#"> Zoya Jawad</a>
                          </h2>
                        </td>
                        <td>5043686874</td>
                        <td>21 Sep 2019</td>
                        <td class="text-right">$150.00</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image" /></a>
                            <a href="#">Alina Raza</a>
                          </h2>
                        </td>
                        <td>9548207887</td>
                        <td>18 Sep 2019</td>
                        <td class="text-right">$350.00</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>

                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /Feed Activity -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card card-table">
              <div class="card-header">
                <h4 class="card-title">Appointment List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>Saloons Name</th>
                        <th>Speciality</th>
                        <th>Clients Name</th>
                        <th>Apointment Time</th>
                        <th class="text-right">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/1.jpg" alt="User Image" /></a>
                            <a href="#">Depilex</a>
                          </h2>
                        </td>
                        <td>Hair Dresser</td>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image" /></a>
                            <a href="#">Alishba Zaidi </a>
                          </h2>
                        </td>
                        <td>
                          9 Nov 2019
                          <span class="text-primary d-block">11.00 AM - 11.15 AM</span>
                        </td>

                        <td class="text-right">$200.00</td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/2.jpg" alt="User Image" /></a>
                            <a href="#">Toni And Guy</a>
                          </h2>
                        </td>
                        <td>Hair Cut</td>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image" /></a>
                            <a href="#">Muhammad Wajahat </a>
                          </h2>
                        </td>

                        <td>
                          5 Nov 2019
                          <span class="text-primary d-block">11.00 AM - 11.35 AM</span>
                        </td>

                        <td class="text-right">$300.00</td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/3.jpg" alt="User Image" /></a>
                            <a href="#">Micheal K Salon</a>
                          </h2>
                        </td>
                        <td>Nails Care</td>
                        <td>
                          <h2 class="table-avatar">
                            <a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image" /></a>
                            <a href="#">Ali Raza</a>
                          </h2>
                        </td>
                        <td>
                          11 Nov 2019
                          <span class="text-primary d-block">12.00 PM - 12.15 PM</span>
                        </td>

                        <td class="text-right">$150.00</td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/4.jpg" alt="User Image" /></a>
                            <a href="#">
                              Khawar Riaz Mens Saloon</a>
                          </h2>
                        </td>
                        <td>Skin Care</td>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image" /></a>
                            <a href="#"> Zoya Jawad</a>
                          </h2>
                        </td>
                        <td>
                          7 Nov 2019<span class="text-primary d-block">1.00 PM - 1.20 PM</span>
                        </td>

                        <td class="text-right">$150.00</td>
                      </tr>
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/5.jpg" alt="User Image" /></a>
                            <a href="#">Tariq Amin</a>
                          </h2>
                        </td>
                        <td>Beard Specialists </td>
                        <td>
                          <h2 class="table-avatar">
                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image" /></a>
                            <a href="#">
                              Tariq Amin</a>
                          </h2>
                        </td>

                        <td>
                          15 Nov 2019
                          <span class="text-primary d-block">1.00 PM - 1.15 PM</span>
                        </td>

                        <td class="text-right">$200.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /Recent Orders -->
          </div>
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
</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->

</html>