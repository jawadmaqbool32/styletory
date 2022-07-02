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
  <title>StyleTory - Admin Profile</title>

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
              <?php echo "<h2 class='page-title text-center'>EDIT PROFILE</h2>" ?>
              <?php // echo "<h3 class='page-title'>WELCOME ".$_SESSION['username']."</h3>"
              ?>

              <ul class="breadcrumb">
                <li class="breadcrumb-item active">Edit Profile</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
              </div>
              <div class="card-body">
                <?php



























                $query = "select * from `admin` where `username` = \"" . $_SESSION['username'] . "\"";
                $admin = mysqli_query($con, $query);
                $admin = mysqli_fetch_array($admin);

                if (isset($_REQUEST['update'])) {

                  $email  = stripslashes($_REQUEST['email']);
                  $username  = stripslashes($_REQUEST['username']);
                  $fullname  = stripslashes($_REQUEST['fullname']);
                  $id  = stripslashes($_REQUEST['id']);
                  $email = mysqli_real_escape_string($con, $email);
                  $username = mysqli_real_escape_string($con, $username);
                  $fullname = mysqli_real_escape_string($con, $fullname);
                  $id = mysqli_real_escape_string($con, $id);


                  $check_query  = "SELECT * FROM `admin` where `email` = '$email' AND `id` != '$id'";
                  $check_query2  = "SELECT * FROM `admin` where `username` = '$username' AND `id` != '$id'";
                  $check = mysqli_query($con, $check_query);
                  $check2 = mysqli_query($con, $check_query2);
                  if ($check->num_rows == 0 && $check2->num_rows  == 0) {
                    $update_query = "UPDATE `admin` SET  `fullName`='$fullname',`username`='$username',`email`='$email' WHERE `id` = '$id'";

                    $update = mysqli_query($con, $update_query);



                    if ($update) {
                      $_SESSION['username'] = $username;
                      echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong></strong> Profile Updated. 

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                    } else {
                      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Failed to update.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                    }
                  } else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Username or email already registered.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                  }
                }

                if (isset($_REQUEST['change_password'])) {

                  $password  = stripslashes($_REQUEST['password']);
                  $confirm_password  = stripslashes($_REQUEST['confirm_password']);
                  $password = mysqli_real_escape_string($con, $password);
                  $confirm_password = mysqli_real_escape_string($con, $confirm_password);


                  if ($password ==  $confirm_password) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $update_query = "UPDATE `admin` SET  `password` = '$password' WHERE `id` =  " . $admin['id'];
                    $update = mysqli_query($con, $update_query);



                    if ($update) {
                      echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong></strong> Password Changed. 

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                    } else {
                      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Failed to update.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                    }
                  } else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Password Doesn't Match.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                  }
                }

















                ?>
                <form action="" name="myform" method="POST">
                  <div class="form-group form-focus">
                    <label class="focus-label">Full Name</label>
                    <input value="<?php echo $admin['fullName'] ?>" type="text" maxlength="40" class="form-control floating" name="fullname" required>
                    <input value="<?php echo $admin['id'] ?>" type="hidden" maxlength="40" class="form-control floating" name="id" required>
                  </div>
                  <div class="form-group form-focus">
                    <label class="focus-label">Username</label>
                    <input value="<?php echo $admin['username'] ?>" type="text" maxlength="20" class="form-control floating" name="username" id="username" onkeyup="Validate()" required>
                  </div>
                  <div class="form-group form-focus">
                    <label class="focus-label">Email</label>
                    <input value="<?php echo $admin['email'] ?>" type="email" maxlength="40" class="form-control floating" name="email" required>
                  </div>
                  <button class="btn btn-primary btn-block btn-lg login-btn" name="update" type="submit">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Change Password</h4>
              </div>
              <div class="card-body">
                <form action="" name="myform" method="POST">
                  <div class="form-group form-focus">
                    <label class="focus-label">New Password</label>
                    <input type="password" maxlength="12" class="form-control floating" name="password" id="password" required>
                    <span id="message" style="color:red"> </span>
                  </div>
                  <div class="form-group form-focus">
                    <label class="focus-label">Confirm Password</label>
                    <input type="password" maxlength="12" class="form-control floating" name="confirm_password" id="confirmpassword" required>
                  </div>
                  <button class="btn btn-primary btn-block btn-lg login-btn" name="change_password" type="submit">Change Password</button>
                </form>
              </div>
            </div>
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