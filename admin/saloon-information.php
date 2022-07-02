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
    <title>StyleTory - Saloon Details</title>

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
                                <h4 class="card-title">Saloon Basic Information</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <!-- /Recent Orders -->
                    </div>
                    <div class="col-md-8">
                        <?php
                        $total_bookings = 0;
                        $revenue = 0;
                        $services = [];
                        $saloon_query = "SELECT * FROM `vendor` WHERE `id` =" . $_GET['saloon'];
                        $saloon_result = mysqli_query($con, $saloon_query);
                        $saloon =  mysqli_fetch_array($saloon_result);
                        ?>
                        <div class="card card-table">
                            <a href="saloon-information-edit.php?saloon=<?php echo $_GET['saloon'] ?>" style="width: 100px; position:absolute; right:10px; top: 10px; z-index:1" class="text-white btn btn-success">Edit</a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Name</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ucwords($saloon['fullname']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Username</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($saloon['username']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Contact</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($saloon['phoneNo']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Email</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($saloon['email']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Opening Date</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($saloon['dob']) ?></strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px 30px "><strong>Address</strong></div>
                                    <div class="col-md-8" style="padding:10px 30px "><strong><?php echo ($saloon['address']) ?></strong></div>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $saloon_ = $_GET['saloon'];
                                            $counter = 0;

                                            $booking_query = "SELECT booking.total_amount,booking.id, booking.booking_date, customer.fullname, services.name
                                FROM ((booking
                                INNER JOIN customer ON booking.customer_id = customer.id)
                                INNER JOIN services ON booking.service_id = services.id) 
                                WHERE `vendor_id` = '$saloon_'
                                AND `status` = 'approved'
                                ";
                                            $bookings = mysqli_query($con, $booking_query);
                                            if (mysqli_num_rows($bookings) > 0) {
                                            ?>
                                                <?php
                                                while ($row = mysqli_fetch_array($bookings)) {
                                                    $counter++;
                                                    $revenue += $row['total_amount'];
                                                    $total_bookings++;
                                                    $services[$row['name']] = 1;
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
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h5 class="card-title">Service
                                    <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" href="#add_modal" class="btn btn-primary">
                                        <i class="fe fe-plus"></i>
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <?php
                                if (isset($_REQUEST['save_services'])) {
                                    $values = json_decode($_REQUEST['values']);
                                    mysqli_query($con, "DELETE FROM `vendor_services` WHERE `vendors_id` = '$saloon_'");
                                    foreach ($values as $value) {
                                        $price = $value->price;
                                        $service = $value->service;
                                        $price  = stripslashes($price);
                                        $service  = stripslashes($service);
                                        $price = mysqli_real_escape_string($con, $price);
                                        $service = mysqli_real_escape_string($con, $service);
                                        $update_query = "INSERT INTO `vendor_services`(`vendors_id`, `services_id`, `price`) VALUES ('$saloon_', '$service', '$price')";
                                        mysqli_query($con, $update_query);
                                    }
                                }
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="service_wrapper">
                                            <?php
                                            $saloon_ = $_GET['saloon'];
                                            $counter = 0;

                                            $vendor_services_query = "SELECT vendor_services.price,vendor_services.vs_id, services.name, services.id as service_id
                                FROM (vendor_services
                                INNER JOIN services ON vendor_services.services_id = services.id) 
                                WHERE `vendors_id` = '$saloon_'
                                ";
                                            $vendor_services = mysqli_query($con, $vendor_services_query);
                                            if (mysqli_num_rows($vendor_services) > 0) {
                                            ?>
                                                <?php
                                                while ($row = mysqli_fetch_array($vendor_services)) {
                                                    $counter++;
                                                ?>
                                                    <tr>
                                                        <input type="hidden" class="price" name="price[]" value="<?php echo $row['price'] ?>">
                                                        <input type="hidden" class="service" name="service[]" value="<?php echo $row['service_id'] ?>">
                                                        <td class="counter"><?php echo $counter ?></td>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><?php echo $row['price'] ?></td>
                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-danger btn-delete-service"><i class="fa fa-times"></i></button>
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
                                        <tfoot>
                                            <form id="services_form" action="" method="POST">
                                                <tr>
                                                    <td class="text-right" colspan="4">
                                                        <input type="hidden" name="values" id="form_values">
                                                        <button type="submit" name="save_services" class="btn btn-success">
                                                            Save Services
                                                        </button>
                                                    </td>
                                            </form>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-table">
                            <div class="card-body">
                                <img style="width: 100%; border-radius: 4px" src="upload/<?php echo ($saloon['image']) ?>" alt="<?php echo ($saloon['fullname']) ?>">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-success">Bookings</h4>
                                <p class="card-text text-success"><?php echo $total_bookings ?><span style="float: right;"><i class="fa fa-check-square"></i></span></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Offered Services</h4>
                                <p class="card-text text-primary"><?php echo sizeof($services) ?><span style="float: right;"><i class="fa fa-server"></i></span></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-info">Revenue</h4>
                                <p class="card-text text-info"><?php echo $revenue ?><span style="float: right;"><i class="fa fa-money"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /Main Wrapper -->
        <div class="modal fade" id="add_modal" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!--	<div class="modal-header">
                                                                            <h5 class="modal-title">Delete</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>-->
                    <div class="modal-body">
                        <div class="form-content p-2">
                            <h4 class="modal-title">Add Service</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Select Service</label>
                                        <select name="" id="service" class="form-control">
                                            <option value="" disabled selected>Select Service</option>
                                            <?php
                                            $services = mysqli_query($con, 'SELECT * FROM `services`');
                                            if (mysqli_num_rows($services) > 0) {
                                            ?>
                                                <?php
                                                $counter = 0;
                                                while ($service = mysqli_fetch_array($services)) {
                                                    $counter++;
                                                ?>
                                                    <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Price</label>
                                        <input class="form-control" type="number" name="price" id="price">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="btn_add_service" class="btn btn-success" name="add" data-dismiss="modal">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
            $(document).on('click', '.btn-delete-service', function() {
                $(this).parents('tr').remove();
                reArrange();
            });

            function reArrange() {
                var count = 0;
                $('.counter').each(function() {
                    count++;
                    $(this).text(count);
                });
            }
            $(document).on('click', '#btn_add_service', function() {
                const service = $('#add_modal #service').val();
                const name = $('#add_modal #service option:selected').text();
                const price = $('#add_modal #price').val();
                $('#service_wrapper').append(

                    `<tr>
                        <input type="hidden" class="price" name="price[]" value="${price}">
                        <input type="hidden" class="service" name="service[]" value="${service}">
                        <td class="counter"></td>
                        <td>${name}</td>
                        <td>${price}</td>
                        <td class="text-right">
                            <button type="button" class="btn btn-danger btn-delete-service"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>`
                )
                reArrange();

            });

            $(document).on('submit', '#services_form', function(e) {
                var parameters = {};
                var count = 0;
                $('#service_wrapper tr').each(function() {
                    if ($(this).find('.price').val() && $(this).find('.service').val()) {
                        parameters[count] = {
                            price: $(this).find('.price').val(),
                            service: $(this).find('.service').val(),
                        }
                        count++;
                    }

                })
                $('#form_values').val(JSON.stringify(parameters));
                if (count > 0) {

                    $(this).submit();
                }
            })
        });
    </script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/form-basic-inputs.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->

</html>