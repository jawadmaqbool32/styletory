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
    <title>StyleTory - Services</title>

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
                        <li>
                            <a href="customer-details.php"><i class="fa fa-user-circle-o"></i> <span>Customers List</span></a>
                        </li>

                        <li>
                            <a href="sales-report.php"><i class="fa fa-money"></i> <span>Sales Report</span></a>
                        </li>
                        <li class="active">
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
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Services
                                    <span style="float:right">
                                        <a data-toggle="modal" href="#add_modal" class="btn btn-primary">
                                            <i class="fe fe-plus"></i> Add
                                        </a>
                                    </span>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php
                                if (isset($_REQUEST['update'])) {
                                    $name  = stripslashes($_REQUEST['name']);
                                    $id  = stripslashes($_REQUEST['service']);
                                    $name = mysqli_real_escape_string($con, $name);
                                    $id = mysqli_real_escape_string($con, $id);


                                    $check_query  = "SELECT * FROM `services` where `name` = '$name' AND `id` !='$id'";
                                    $check = mysqli_query($con, $check_query);
                                    if ($check->num_rows == 0) {
                                        $update_query = "UPDATE `services` SET  `name`='$name' WHERE `id` ='$id'";
                                        $update = mysqli_query($con, $update_query);
                                        if ($update) {
                                            echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong></strong> Service Updated. 

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
<strong>Warning!</strong> Service already exists.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                                    }
                                }



                                if (isset($_REQUEST['delete'])) {
                                    $id  = stripslashes($_REQUEST['service']);



                                    $delete = mysqli_query($con, "DELETE FROM `services` WHERE `id` = '$id'");
                                    if ($delete) {
                                        echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong></strong> Service Deleted. 

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                                    } else {
                                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Failed to Delete.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                                    }
                                }


                                if (isset($_REQUEST['add'])) {
                                    $name  = stripslashes($_REQUEST['name']);
                                    $name = mysqli_real_escape_string($con, $name);


                                    $check_query  = "SELECT * FROM `services` where `name` = '$name'";
                                    $check = mysqli_query($con, $check_query);
                                    if ($check->num_rows == 0) {
                                        $insert_query = "INSERT INTO `services`(`name`) VALUES('$name')";
                                        $insert = mysqli_query($con, $insert_query);
                                        if ($insert) {
                                            echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong></strong> Service Added. 

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                                        } else {
                                            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Failed to Add.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Warning!</strong> Service already exists.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                                    }
                                }


                                ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>
                                                <th>Name</th>
                                                <th>Saloons Offering</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $services = mysqli_query($con, 'SELECT * FROM `services`');
                                            if (mysqli_num_rows($services) > 0) {
                                            ?>
                                                <?php
                                                $counter = 0;
                                                while ($service = mysqli_fetch_array($services)) {
                                                    $counter++;
                                                ?>
                                                    <tr>
                                                        <td><?php echo $counter ?></td>
                                                        <td><?php echo $service['name'] ?></td>
                                                        <td>
                                                            <?php
                                                            $vendors_count = mysqli_query($con, 'SELECT count(*) as total FROM `vendor_services` WHERE `services_id`=' . $service['id']);
                                                            $vendors_count = mysqli_fetch_assoc($vendors_count);
                                                            echo $vendors_count['total'];

                                                            ?>
                                                        </td>
                                                        <td data-service_id="<?php echo $service['id'] ?>" data-service_name="<?php echo $service['name'] ?>">
                                                            <a data-toggle="modal" href="#edit_modal" class="modal-caller btn btn-sm bg-success-light">
                                                                <i class="fe fe-pencil"></i> Edit
                                                            </a>
                                                            <a data-toggle="modal" href="#delete_modal" class="modal-caller btn btn-sm bg-danger-light">
                                                                <i class="fe fe-trash"></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <!-- Delete Modal -->

                                                    <!-- /Edit Modal -->

                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Wrapper -->

            <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!--	<div class="modal-header">
                                                                            <h5 class="modal-title">Delete</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>-->
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="form-content p-2">
                                    <h4 class="modal-title">Delete Service</h4>
                                    <p class="mb-4">Are you sure want to delete the service?</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger" name="delete" data-dismiss="delete">Delete</button>
                                    <input type="hidden" name="service" id="service_id" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Modal -->

            <!-- Edit Modal -->
            <div class="modal fade" id="edit_modal" aria-hidden="true" role="dialog">
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
                                <form action="" method="POST">
                                    <h4 class="modal-title">Edit Service</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Name</label>
                                                <input type="hidden" name="service" id="service_id">
                                                <input value="" type="text" name="name" id="service_name" class="form-control" placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success" name="update" data-dismiss="edit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /Edit Modal -->
            <!-- Add Modal -->
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
                                <form action="" method="POST">
                                    <h4 class="modal-title">Add Service</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Name</label>
                                                <input type="hidden" name="service" id="service_id">
                                                <input value="" type="text" name="name" id="service_name" class="form-control" placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success" name="add" data-dismiss="add">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Modal -->

        </div>

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
                $(document).on('click', '.modal-caller', function() {
                    var service_name = $(this).parents('td').data('service_name');
                    var service_id = $(this).parents('td').data('service_id');
                    $('#delete_modal #service_id').val(service_id);
                    $('#edit_modal #service_id').val(service_id);
                    $('#edit_modal #service_name').val(service_name);
                });
            });
        </script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/form-basic-inputs.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->

</html>