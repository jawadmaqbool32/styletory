<?php
require("db.php");
require("auth_session.php");
?>
<?php

if (isset($_GET['customer'])) {
    if ($_GET['customer'] == '') {
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
    <title>StyleTory - Customer Details</title>

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
                        <li>
                            <a href="saloon-details.php"><i class="fa fa-user-secret"></i> <span>Saloons List</span></a>
                        </li>
                        <li class="active">
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
                                <h4 class="card-title">Customer Basic Information</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <!-- /Recent Orders -->
                    </div>
                    <div class="col-md-8">
                        <?php
                        $amount_spent = 0;
                        $visits = [];
                        $services = [];
                        $customer_query = "SELECT * FROM `customer` WHERE `id` =" . $_GET['customer'];
                        $customer_result = mysqli_query($con, $customer_query);
                        $customer =  mysqli_fetch_array($customer_result);
                        ?>
                        <div class="card card-table">
                            <a href="customer-information-edit.php?customer=<?php echo $_GET['customer'] ?>" style="width: 100px; position:absolute; right:10px; top: 10px; z-index:1" class="text-white btn btn-success">Edit</a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Name</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ucwords($customer['fullname']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Username</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['username']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Contact</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['phoneNo']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Email</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['email']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Age</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['age']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>DOB</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['dob']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>City</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['city']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Address</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($customer['address']) ?></strong></div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h5 class="card-title">Booking History</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>
                                                <th>Vendor</th>
                                                <th>Date</th>
                                                <th>Requested Service</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $customer_ = $_GET['customer'];
                                            $counter = 0;

                                            $booking_query = "SELECT booking.status, booking.total_amount,booking.id, booking.booking_date, vendor.fullname, services.name
                                FROM ((booking
                                INNER JOIN vendor ON booking.vendor_id = vendor.id)
                                INNER JOIN services ON booking.service_id = services.id) 
                                WHERE `customer_id` = '$customer_'
                                ";
                                            $bookings = mysqli_query($con, $booking_query);
                                            if (mysqli_num_rows($bookings) > 0) {
                                            ?>
                                                <?php
                                                while ($row = mysqli_fetch_array($bookings)) {
                                                    $counter++;
                                                    if ($row['status'] == 'approved') {
                                                        $amount_spent += $row['total_amount'];
                                                        $visits[$row['fullname']] = 1;
                                                        $services[$row['name']] = 1;
                                                    }

                                                ?>
                                                    <tr>
                                                        <td><?php echo $counter ?></td>
                                                        <td><?php echo $row['fullname'] ?></td>
                                                        <td><?php echo date('d-M-Y', strtotime($row['booking_date'])) ?></td>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><?php echo $row['total_amount'] ?></td>
                                                        <td>
                                                            <a data-booking="<?php echo $row['id'] ?>" data-toggle="modal" href="#booking_detail_modal" class="btn btn-sm bg-success-light btn-booking-detail"><i class="fa fa-eye"></i> View Details</a>
                                                        </td>
                                                        <td class="text-center 
                                                        <?php
                                                        if ($row['status'] == 'approved') {
                                                            echo "bg-success-light";
                                                        } else if ($row['status'] == 'pending') {
                                                            echo "bg-primary-light";
                                                        } else {
                                                            echo "bg-danger-light";
                                                        }

                                                        ?>"><?php echo $row['status'] ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="5">No record found</td>
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
                    <div class="col-md-4">
                        <div class="card card-table">
                            <div class="card-body">
                                <img style="width: 100%; border-radius: 4px" src="upload/<?php echo ($customer['image']) ?>" alt="<?php echo ($customer['fullname']) ?>">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-success">Visited Saloons</h4>
                                <p class="card-text text-success"><?php echo sizeof($visits) ?><span style="float: right;"><i class="fa fa-check-square"></i></span></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Used Services</h4>
                                <p class="card-text text-primary"><?php echo sizeof($services) ?><span style="float: right;"><i class="fa fa-server"></i></span></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-info">Spent Amount</h4>
                                <p class="card-text text-info"><?php echo $amount_spent ?><span style="float: right;"><i class="fa fa-money"></i></span></p>
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
                    url: "ajax_end_points.php?booking_detail",
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