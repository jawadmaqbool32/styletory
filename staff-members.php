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

    <title>StyleTory</title>

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
                                        <li>
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
                                        <li class="active">
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
                                <h2 class="mb-1 card-title d-flex justify-content-between">
                                    <span> Staff Members </span>
                                    <button type="submit" name="submit" class="btn btn-info mb-1" data-toggle="modal" href="#add_staff_member"><i class="fa fa-plus" aria-hidden="true"></i> Add Staff Member</button>
                                </h2>
                                <?php
                                if (isset($_REQUEST['add'])) {
                                    // for services_id 
                                    $upload = '';
                                    $name  = stripslashes($_REQUEST['name']);
                                    $experience  = stripslashes($_REQUEST['experience']);
                                    $contact  = stripslashes($_REQUEST['contact']);
                                    $speciality  = stripslashes($_REQUEST['speciality']);
                                    //escapes special characters in a string
                                    $name  = mysqli_real_escape_string($con, $name);
                                    $experience  = mysqli_real_escape_string($con, $experience);
                                    $contact  = mysqli_real_escape_string($con, $contact);
                                    $speciality  = mysqli_real_escape_string($con, $speciality);
                                    $vendor_query = "SELECT * FROM vendor  WHERE username = '" . $_SESSION['username'] . "'";
                                    $vendor_result = mysqli_query($con, $vendor_query);
                                    $vendor = mysqli_fetch_array($vendor_result)['id'];

                                    $uploadDir = "_img/profile";
                                    if (!is_dir($uploadDir)) {

                                        if (!mkdir($uploadDir, 0777, true)) {
                                            $message = "Something went wrong..!";
                                        }
                                    }
                                    $originalName = $_FILES["profile_picture"]["name"];
                                    if ($originalName === '') {
                                        $message = "Please select a valid image";
                                        $action = 'change-profile-picture';
                                    } else {
                                        $extension = substr($originalName, strrpos($originalName, ".") + 1);
                                        if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png') {
                                            $profilePic = $_FILES["profile_picture"]["tmp_name"];
                                            $profile_name = date('ymdHsi');
                                            $upload = $uploadDir . "/" . $profile_name . "." . $extension;
                                            if (move_uploaded_file($profilePic, $upload)) {
                                                $message = "Image Uploaded Successfully";
                                            } else {
                                                $message = "Something went wrong. ";
                                            }
                                        } else {
                                            $message = "Invalid Type";
                                        }
                                    }

                                    $query = "INSERT INTO  `staff_members` (`name`, `experience` ,`cell_no`, `vendor_id`, `speciality`, `picture`) VALUES ('$name', '$experience', '$contact', '$vendor', '$speciality', '$upload') ";

                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>&#128525; Success!</strong> Member Added Successfully. 
				  
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





                                if (isset($_REQUEST['update'])) {
                                    // for services_id 
                                    $upload = '';
                                    $member  = stripslashes($_REQUEST['member']);
                                    $name  = stripslashes($_REQUEST['name']);
                                    $experience  = stripslashes($_REQUEST['experience']);
                                    $contact  = stripslashes($_REQUEST['contact']);
                                    $speciality  = stripslashes($_REQUEST['speciality']);
                                    //escapes special characters in a string
                                    $member  = mysqli_real_escape_string($con, $member);
                                    $name  = mysqli_real_escape_string($con, $name);
                                    $experience  = mysqli_real_escape_string($con, $experience);
                                    $contact  = mysqli_real_escape_string($con, $contact);
                                    $speciality  = mysqli_real_escape_string($con, $speciality);

                                    $uploadDir = "_img/profile";
                                    if (!is_dir($uploadDir)) {

                                        if (!mkdir($uploadDir, 0777, true)) {
                                            $message = "Something went wrong..!";
                                        }
                                    }
                                    $originalName = $_FILES["profile_picture"]["name"];
                                    if ($originalName === '') {
                                        $message = "Please select a valid image";
                                        $action = 'change-profile-picture';
                                    } else {
                                        $extension = substr($originalName, strrpos($originalName, ".") + 1);
                                        if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png') {
                                            $profilePic = $_FILES["profile_picture"]["tmp_name"];
                                            $name = date('ymdHsi');
                                            $upload = $uploadDir . "/" . $name . "." . $extension;
                                            if (move_uploaded_file($profilePic, $upload)) {
                                                $message = "Image Uploaded Successfully";
                                            } else {
                                                $message = "Something went wrong. ";
                                            }
                                        } else {
                                            $message = "Invalid Type";
                                        }
                                    }
                                    if ($originalName) {
                                        $query = 'Update staff_members set 
                                        `name` = "' . $name . '",
                                        `cell_no` = "' . $contact . '",
                                        `experience` = "' . $experience . '",
                                        `picture` = "' . $upload . '",
                                        `speciality` = "' . $speciality . '" 
                                        where `id` = "' . $member . '"';
                                    } else {
                                        $query = 'Update staff_members set 
                                    `name` = "' . $name . '",
                                    `cell_no` = "' . $contact . '",
                                    `experience` = "' . $experience . '",
                                    `speciality` = "' . $speciality . '" 
                                    where `id` = "' . $member . '"';
                                    }

                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>&#128525; Success!</strong> Member Updated Successfully. 
				  
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



                                if (isset($_REQUEST['delete'])) {
                                    $member  = stripslashes($_REQUEST['member']);
                                    $member  = mysqli_real_escape_string($con, $member);
                                    $query = "Delete FROM staff_members WHERE `id` = " . $member;
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>&#128525; Success!</strong> Member Deleted Successfully. 
				  
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
                                ?>

                                <div class="appointment-tab">

                                    <div class="tab-content">

                                        <!-- Upcoming Appointment Tab -->
                                        <div class="tab-pane show active" id="upcoming-appointments">
                                            <div class="card card-table mb-0">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">SR#</th>
                                                                    <th class="">Staff Mamber</th>
                                                                    <th>Specialist</th>

                                                                    <th class="text-center">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i = 0;
                                                                $check = mysqli_query($con, "SELECT id into @id FROM vendor WHERE username = '" . $_SESSION['username'] . "'");

                                                                $res = mysqli_query($con, "SELECT * FROM `staff_members` where vendor_Id=@id");
                                                                while ($row = mysqli_fetch_array($res)) {
                                                                    $i++;
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $i ?> </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo $row['picture'] ?>"></a>
                                                                                <a href="#"><?php echo $row['name'] ?>
                                                                                    <span><?php echo $row['cell_no'] ?></span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td><?php
                                                                            $service_query = mysqli_query($con, "SELECT * FROM `services` where `id` = " . $row['speciality']);
                                                                            while ($service = mysqli_fetch_array($service_query)) {
                                                                                echo $service['name'];
                                                                            }
                                                                            ?>
                                                                        </td>

                                                                        <td class="text-center">
                                                                            <div class="table-action">


                                                                                <form action="" action="post">
                                                                                    <button type="button" data-toggle="modal" href="#edit_staff_member" data-member="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-cell_no="<?php echo $row['cell_no'] ?>" data-speciality="<?php echo $row['speciality'] ?>" data-experience="<?php echo $row['experience'] ?>" name="edit" type="submit" class="edit_staff btn btn-sm bg-info-light">
                                                                                        <i class="fas fa-edit"></i> Update
                                                                                    </button>
                                                                                    <input type="hidden" name="member" value="<?php echo $row['id'] ?>">
                                                                                    <button name="delete" type="submit" href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Delete
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
                                                                    <th>Patient Name</th>
                                                                    <th>Appt Date</th>
                                                                    <th>Purpose</th>
                                                                    <th>Type</th>
                                                                    <th class="text-center">Paid Amount</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
                                                                            <a href="#">Maryam Nawaz
                                                                                <span>#PT0006</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">6.00 PM</span>
                                                                    </td>
                                                                    <td>General</td>
                                                                    <td>Old Client</td>
                                                                    <td class="text-center">$300</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
                                                                            <a href="#">Shireen Mazari
                                                                                <span>#PT0006</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">5.00 PM</span>
                                                                    </td>
                                                                    <td>General</td>
                                                                    <td>Old Client</td>
                                                                    <td class="text-center">$100</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
                                                                            <a href="#">Danial Hafeez
                                                                                <span>#PT0007</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">3.00 PM</span>
                                                                    </td>
                                                                    <td>General</td>
                                                                    <td>New Client</td>
                                                                    <td class="text-center">$75</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
                                                                            <a href="#">Zafar Ameen
                                                                                <span>#PT0008</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">1.00 PM</span>
                                                                    </td>
                                                                    <td>General</td>
                                                                    <td>Old Client</td>
                                                                    <td class="text-center">$350</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
                                                                            <a href="#">Ramesh Rana
                                                                                <span>#PT0010</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">10.00
                                                                            AM</span></td>
                                                                    <td>General</td>
                                                                    <td>New Client</td>
                                                                    <td class="text-center">$175</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient11.jpg" alt="User Image"></a>
                                                                            <a href="#">Usama Ali
                                                                                <span>#PT0011</span></a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>14 Nov 2021 <span class="d-block text-info">11.00
                                                                            AM</span></td>
                                                                    <td>General</td>
                                                                    <td>New Client</td>
                                                                    <td class="text-center">$450</td>
                                                                    <td class="text-right">
                                                                        <div class="table-action">
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-times"></i> Cancel
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
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
    <!-- Add service Slot Modal -->
    <div class="modal fade custom-modal" id="add_staff_member">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Staff Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="hours-info">
                            <div class="row form-row hours-cont">
                                <div class="col-12 col-md-12">
                                    <div class="row form-row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group form-focus">
                                                <input type="text" maxlength="40" class="form-control floating" name="name" required>
                                                <label class="focus-label">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="number" maxlength="11" class="form-control floating" name="contact" required>
                                                <label class="focus-label">Contact#</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Experience</label>
                                                <input type="text" maxlength="255" class="form-control floating" name="experience" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="form-group">
                                                <label>Speciality</label>
                                                <select class="form-control" name="speciality" id="">


                                                    <?php

                                                    $vendor_query = "SELECT * FROM vendor  WHERE username = '" . $_SESSION['username'] . "'";
                                                    $vendor_result = mysqli_query($con, $vendor_query);
                                                    $vendor = mysqli_fetch_array($vendor_result);
                                                    $vss = mysqli_query($con, "SELECT * FROM `vendor_services` where `vendors_id`=" . $vendor['id']);
                                                    while ($vs = mysqli_fetch_array($vss)) {
                                                        $service = mysqli_query($con, "SELECT * FROM `services` where `id` = " . $vs['services_id']);
                                                        while ($row = mysqli_fetch_array($service)) {
                                                            echo   '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                        }
                                                    }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="form-group form-focus">
                                                <input type="file" class="" name="profile_picture"> <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" name="add" class="btn btn-info">Add</button>
                            <button type="submit" data-dismiss="modal" class="btn btn-danger">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="edit_staff_member">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Staff Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="member" id="modal_member">
                        <div class="hours-info">
                            <div class="row form-row hours-cont">
                                <div class="col-12 col-md-12">
                                    <div class="row form-row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group form-focus">
                                                <input id="modal_name" type="text" maxlength="40" class="form-control floating" name="name" required>
                                                <label class="focus-label">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="number" id="modal_cell" maxlength="11" class="form-control floating" name="contact" required>
                                                <label class="focus-label">Contact#</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" id="modal_experience" maxlength="255" class="form-control floating" name="experience" required>
                                                <label class="focus-label">Experience</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="form-group">
                                                <label class="">Speciality</label>
                                                <select class="form-control" name="speciality" id="modal_speciality">


                                                    <?php

                                                    $vendor_query = "SELECT * FROM vendor  WHERE username = '" . $_SESSION['username'] . "'";
                                                    $vendor_result = mysqli_query($con, $vendor_query);
                                                    $vendor = mysqli_fetch_array($vendor_result);
                                                    $vss = mysqli_query($con, "SELECT * FROM `vendor_services` where `vendors_id`=" . $vendor['id']);
                                                    while ($vs = mysqli_fetch_array($vss)) {
                                                        $service = mysqli_query($con, "SELECT * FROM `services` where `id` = " . $vs['services_id']);
                                                        while ($row = mysqli_fetch_array($service)) {
                                                            echo   '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                        }
                                                    }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="form-group form-focus">
                                                <input type="file" class="" name="profile_picture"> <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" name="update" class="btn btn-info">Update</button>
                            <button type="submit" data-dismiss="modal" class="btn btn-danger">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Time Slot Modal -->
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

    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit_staff', function() {
                $('#modal_experience').val($(this).data('experience'))
                $('#modal_cell').val($(this).data('cell_no'))
                $('#modal_name').val($(this).data('name'))
                $('#modal_member').val($(this).data('member'))
                var speciality = $(this).data('speciality');
                $('#modal_speciality').find('option').each(function() {
                    if ($(this).val() == speciality) {
                        $(this).prop('selected', true);
                    }
                })
                val($(this).data('speciality'))


            })
        })
    </script>


</body>

<!-- styletory/doctor-dashboard.php  30 Nov 2021 04:12:09 GMT -->

</html>