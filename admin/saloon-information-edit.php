<?php
require("db.php");
require("auth_session.php");
?>
<?php

if (isset($_GET['saloon'])) {
    if ($_GET['saloon'] == '') {
        echo ('customer not found');
        return;
    }
} else {
    echo ('customer not found');
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>StyleTory - Edit Saloon Details</title>

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
                        <span class="user-img"><img class="rounded-circle" src="assets/img//admin.jpg" width="31" alt="admin" /></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/admin.jpg" alt="admin" class="avatar-img rounded-circle" />
                            </div>
                            <div class="user-text">
                                <h6>Haseeb</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <!-- <a class="dropdown-item" href="profile.php">My Profile</a>
                							<a class="dropdown-item" href="settings.php">Settings</a>
                							<a class="dropdown-item" href="login.php">Logout</a> -->
                        <!-- <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Settings</a> -->
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
                        <li class="active">
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
                        <!--
        							<li> 
        								<a href="reviews.php"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
        							</li>
        							<li> 
        								<a href="transactions-list.php"><i class="fe fe-activity"></i> <span>Transactions</span></a>
        							</li>
                                    <li>
                                <a href="#"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fe fe-users"></i> <span>Specialities</span></a>
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
                <div class="row">
                    <div class="col-md-12">
                        <!-- Recent Orders -->
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Edit Customer Information</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <!-- /Recent Orders -->
                    </div>
                    <div class="col-md-12">

                        <div class="card card-table">
                            <div class="card-body p-4">
                                <?php
                                if (isset($_REQUEST['update'])) {
                                    $address  = stripslashes($_REQUEST['address']);
                                    $dob  = stripslashes($_REQUEST['dob']);
                                    $email  = stripslashes($_REQUEST['email']);
                                    $phoneNo  = stripslashes($_REQUEST['phoneNo']);
                                    $username  = stripslashes($_REQUEST['username']);
                                    $name  = stripslashes($_REQUEST['name']);
                                    $address = mysqli_real_escape_string($con, $address);
                                    $dob = mysqli_real_escape_string($con, $dob);
                                    $email = mysqli_real_escape_string($con, $email);
                                    $phoneNo = mysqli_real_escape_string($con, $phoneNo);
                                    $username = mysqli_real_escape_string($con, $username);
                                    $name = mysqli_real_escape_string($con, $name);


                                    $check_query  = "SELECT * FROM `vendor` where `email` = '$email' AND `id` !=" . $_GET['saloon'];
                                    $check_query2  = "SELECT * FROM `vendor` where `username` = '$username' AND `id` != " . $_GET['saloon'];
                                    $check = mysqli_query($con, $check_query);
                                    $check2 = mysqli_query($con, $check_query2);
                                    if ($check->num_rows == 0 && $check2->num_rows  == 0) {
                                        $update_query = "UPDATE `vendor` SET 
                                        `fullname`='$name',
                                        `username`='$username',
                                        `address`='$address',
                                        `email`='$email',
                                        `phoneNo`='$phoneNo',
                                        `dob`='$dob' 
                                        WHERE `id` =" . $_GET['saloon'];

                                        $update = mysqli_query($con, $update_query);



                                        if ($update) {
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

                                ?>
                                <?php
                                $amount_spent = 0;
                                $visits = [];
                                $services = [];
                                $vendor_query = "SELECT * FROM `vendor` WHERE `id` =" . $_GET['saloon'];
                                $vendor_result = mysqli_query($con, $vendor_query);
                                $vendor =  mysqli_fetch_array($vendor_result);
                                ?>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                                                <input type="text" required value="<?php echo ucwords($vendor['fullname']) ?>" name="name" id="" class="form-control" placeholder="Name here..." aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Username <span class="text-danger">*</span></label>
                                                <input type="text" required value="<?php echo ($vendor['username']) ?>" name="username" id="" class="form-control" placeholder="Username here..." aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Contact <span class="text-danger">*</span></label>
                                                <input type="text" required value="<?php echo ($vendor['phoneNo']) ?>" name="phoneNo" id="" class="form-control" placeholder="Contact here..." aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" required value="<?php echo ($vendor['email']) ?>" name="email" id="" class="form-control" placeholder="Email here..." aria-describedby="helpId">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Opening Date <span class="text-danger">*</span></label>
                                                <input type="date" required value="<?php echo ($vendor['dob']) ?>" name="dob" id="" class="form-control" placeholder="DOB here..." aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Address <span class="text-danger">*</span></label>
                                                <input type="text" required value="<?php echo ($vendor['address']) ?>" name="address" id="" class="form-control" placeholder="Address here..." aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <button class="btn btn-success" type="submit" name="update">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->

    </div>
    <?php
    include('booking_detail_modal.php')
    ?>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>


    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-booking-detail', function() {
                $.ajax({
                    type: "post",
                    url: "ajax_end_points.php?booking_detail_saloon",
                    data: {
                        booking: $(this).data('booking')
                    },
                    success: function(response) {
                        $('#booking_detail_modal .modal-body').html(response);
                    }
                })
            });
        });
    </script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/form-basic-inputs.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->

</html>