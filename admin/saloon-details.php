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
                                <h4 class="card-title">Approvals List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Saloons Name</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $res = mysqli_query($con, "SELECT * FROM `vendor`");
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($res)) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i++ ?>
                                                    </td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo "upload/" . $row["image"]; ?>" onerror="this.src='assets/img/avatar.png'" alt="User Image" /></a>
                                                            <a href=""><?php echo $row["fullname"] ?></a>
                                                        </h2>
                                                    </td>
                                                    <td><?php echo $row["address"] ?></td>

                                                    <td>
                                                        <?php echo $row["phoneNo"] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["email"] ?>
                                                    </td>

                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <!-- <a
                                                        class="btn btn-sm bg-success-light"
                                                        data-toggle="modal"
                                                        href="#edit_specialities_details"
                                                    >
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a> -->
                                                            <a href="saloon-information-edit.php?saloon=<?php echo $row["id"] ?>" class="btn btn-sm bg-primary-light">
                                                                <i class="fe fe-pencil"></i> Edit
                                                            </a>
                                                            <a href="saloon-information.php?saloon=<?php echo $row["id"] ?>" class="btn btn-sm bg-success-light">
                                                                <i class="fe fe-eye"></i> View
                                                            </a>
                                                            <a data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                                <i class="fe fe-trash"></i> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Delete Modal -->
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
                                                                <div class="form-content p-2">
                                                                    <h4 class="modal-title">Delete</h4>
                                                                    <p class="mb-4">Are you sure want to delete?</p>
                                                                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                                    <a href="delete-saloon.php?id=<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-danger"> Delete</button></a>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Delete Modal -->

                                            <?php
                                            }

                                            ?>
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
        <!-- /Main Wrapper -->

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

</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/form-basic-inputs.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->

</html>