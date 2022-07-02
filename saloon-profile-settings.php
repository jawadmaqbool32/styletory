<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
  $username=$_SESSION['username'];
//   query to show data in the input fields from the database
  $query = mysqli_query($con,"SELECT * FROM vendor WHERE username = '".$_SESSION['username']."'");
?>

<!DOCTYPE html>
<html lang="en">

	<!-- styletory/doctor-profile-settings.php  30 Nov 2019 04:12:14 GMT -->

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
<style>
		/* Set a style for all buttons */

	button:hover {
	opacity:1;
	}

	/* Float cancel and delete buttons and add an equal width */
	.cancelbtn, .deletebtn {
	float: left;
	width: 50%;
	}

	/* Add a color to the cancel button */
	.cancelbtn {
	background-color: #ccc;
	color: black;
	}

	/* Add a color to the delete button */
	.deletebtn {
	background-color: #f44336;
	}

	/* Add padding and center-align text to the container */
	.container {
	padding: 10px;
	text-align: center;
	overflow:hidden;
	}

	/* The Modal (background) */
	.modal {
	display: none; /* Hidden by default */
	position:fixed; /* Stay in place */
	z-index: 0.999; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow:unset; /*Enable scroll if needed*/
	/* background-color: #474e5d; */
	opacity: 1;
	padding-top: 50px;
	}

	/* Modal Content/Box */
	.modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 2px solid #6BEAC8;
	width: 50%; /* Could be more or less, depending on screen size */
	overflow: hidden;
	}

	/* Style the horizontal ruler */
	hr {
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
	}
	
	/* The Modal Close Button (x) */
	.close {
	position: absolute;
	right: 35px;
	top: 15px;
	font-size: 40px;
	font-weight: bold;
	color: #f1f1f1;
	}

	.close:hover,
	.close:focus {
	color: #f44336;
	cursor: pointer;
	}

	/* Clear floats */
	.clearfix::after {
	content: "";
	clear: both;
	display: table;
	}


</style>
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
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Saloon Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Saloon Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
<?php
 if (isset($_REQUEST['submit'])) {
                // $id = stripslashes($_REQUEST['id']);
                $query = "DELETE FROM vendor WHERE username = '".$_SESSION['username']."'"; 
                $result = mysqli_query($con,$query);
				if($result)
				{	 
					   echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
						<strong> Account Deleted!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';		
						echo "<script>window.open('vendor-login.php?deleted=user has been deleted','_self')</script>";				
				}else{
						echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong> Could Not Perform the Operation!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
				}
} 
?>
<?php
if (mysqli_num_rows($query) > 0) {
?>
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
<?php
			$i=0;
			while($row = mysqli_fetch_array($query)) {
				
?>
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="<?php echo "admin/upload/" .$row['image']; ?>" onerror="this.src='assets/img/avatar.png'"
											 alt="User Image">
										</a>
										<div class="profile-det-info">
											<?php  echo "<h3>".$_SESSION['username']."</h3>" ?>
											<div class="patient-details">
												<h5 class="mb-0">Hair Stylist, Artist, Hair Dresser</h5>
											</div>
										</div>
									</div>
								</div>
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
											<li>
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


											<li class="active">
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

<!-- for update  -->
<?php
		if(isset($_REQUEST['update']))
		{
        $fullname = $_POST['fullname'];
        $specialization = $_POST['specialization'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $awards = $_POST['awards'];
        $award_year = $_POST['award_year'];
        $min_price = $_POST['min_price'];
        $max_price = $_POST['max_price'];
        $phoneNo = $_POST['phoneNo'];
        $dob = $_POST['dob'];
			$query1 = "UPDATE vendor SET fullname = '".$fullname."',dob='".$dob."',description='".$description."',specialization='".$specialization."',awards='".$awards."',award_year='".$award_year."',min_price='".$min_price."',max_price='".$max_price."',description='".$description."',address='".$address."',phoneNo='".$phoneNo."' WHERE username = '".$_SESSION['username']."'";
      		$res = mysqli_query($con,$query1);
		if($res)
        {
						echo"<script>window.location.href=\"saloon-profile-settings.php\"</script>";

			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>&#128525; Successfully Updated!</strong>
				  <a href="saloon-profile-settings.php" class="text-primary"> Click Here </a> To See Changes!
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			  <span aria-hidden="true">&times;</span>
 			 </button>
			</div>'	;		
        }
        else
        {
            echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong> Not Updated!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'. mysqli_error($con);
        }  
		}
?>	
 <!-- field updating end  -->

<!-- for image upload -->
<?php
if(isset($_POST['upload']))
{

$image= $_FILES['image']['name'];
$allowed_exttension= array('gif', 'png' , 'jpg' , 'jpeg');
$filename= $_FILES['image']['name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);


if(file_exists("admin/upload/" . $_FILES['image']['name']))
{
    $filename= $_FILES['image']['name'];
   echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>Image Already Exists!</strong>
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			  <span aria-hidden="true">&times;</span>
 			 </button>
			</div>'	;

}
else
{

$sql ="UPDATE vendor SET image = '".$image."' WHERE username = '".$_SESSION['username']."'"; 
$data=mysqli_query($con, $sql);

if ($data) 
{

	 $target_path = "admin/upload/";
  $target_path = $target_path . basename($_FILES['image']['name']);
if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_path)){
echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Successfully Updated !</strong>
				  <a href="saloon-profile-settings.php" class="text-primary"> Click Here </a> To See Changes!
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			  <span aria-hidden="true">&times;</span>
 			 </button>
			</div>'	;
}

  } else 
  {
    echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong>TRY AGAIN !</strong> Couldnot Update.
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			  <span aria-hidden="true">&times;</span>
 			 </button>
			</div>'	;
  }    

}
}
  ?>
  <!-- // for image upload -->
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">		
								 <form action="" method="POST" enctype="multipart/form-data">			
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<img src="<?php echo "admin/upload/" .$row["image"]; ?>"  onerror="this.src='assets/img/avatar.png'"  alt="User Image">	
													</div>
													<div class="upload-img">
														<div>
															<input type="file" class="upload" accept="image/png,image/jpeg" name="image" alt="profile">
															<button type="submit" class="btn btn-primary" name="upload"><span><i class="fa fa-upload" ></i> Upload Profile</span></button>
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max
															size of 2MB</small>
													</div>
												</div>
										</form>
											</div>
								 
										</div>
										<div class="col-md-6">
												<form action="" method="POST"  name="myform">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $row["username"]; ?>" name="username" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" value="<?php echo $row["email"]; ?>" name="email" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Full Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $row["fullname"]; ?>" name="fullname">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text"  maxlength="12" pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" class="form-control" value="<?php echo $row["phoneNo"]; ?>" name="phoneNo" id="phoneNo">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
											<label class="focus-label">Specialization</label>
											<select class="form-control floating" name="specialization">
													<option><?php echo $row["specialization"]; ?></option>
													<option value="Hair Stylist">Hair Stylist</option>
													<option value="Makeup Artist">Makeup Artist</option>
													<option value="Skin Care">Skin Care</option>
													<option value="Beard Specialist">Beard Specialist</option>
													<option value="Nails Care">Nails Care</option>
													<option value="Hair Cut">Hair Cut</option>
												</select>
												</div>
											</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Joining</label>
												<input type="date" class="form-control"  value="<?php echo $row["dob"]; ?>" name="dob">
											</div>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="form-group mb-0">
												<label>Address</label>
												<input type="text" class="form-control" value="<?php echo $row["address"]; ?>" name="address">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->

							<!-- About Me -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">About Me</h4>
									<div class="form-group mb-0">
										<label>Biography</label>
										<textarea class="form-control" rows="5" name="description"><?php echo $row["description"]; ?></textarea>
									</div>
								</div>
							</div>
							<!-- /About Me -->

							<!-- Customer Info -->
							<!-- <div class="card">
								<div class="card-body">
									<h4 class="card-title">Customer Info</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Customer Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Customer Address</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Customer Images</label>
												<form action="#" class="dropzone"></form>
											</div>
											<div class="upload-wrap">
												<div class="upload-images">
													<img src="assets/img/features/3.jpg" alt="Upload Image">
													<a href="javascript:void(0);"
														class="btn btn-icon btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></a>
												</div>
												<div class="upload-images">
													<img src="assets/img/features/2.jpg" alt="Upload Image">
													<a href="javascript:void(0);"
														class="btn btn-icon btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Customer Info -->

							<!-- Contact Details -->
							<!-- <div class="card contact-card">
								<div class="card-body">
									<h4 class="card-title">Contact Details</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Address Line 1</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Address Line 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">City</label>
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">State / Province</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Country</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Postal Code</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Contact Details -->

						<!-- Pricing -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title"> Pricing </h4>
									<div class="awards-info">
											<div class="form-group row">
											<label class="col-form-label col-lg-2">Minumum Price</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Rs.</span> 
													</div>
													<input type="number" class="form-control" name="min_price" value="<?php echo $row["min_price"]; ?>">
													<div class="input-group-append">
														<span class="input-group-text">.00</span>
													</div>
												</div>
											</div>
										    </div>
											<div class="form-group row">
											<label class="col-form-label col-lg-2">Maximum Price</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Rs.</span> 
													</div>
													<input type="number" class="form-control" name="max_price" value="<?php echo $row["max_price"]; ?>">
													<div class="input-group-append">
														<span class="input-group-text">.00</span>
													</div>
												</div>
											</div>
									</div>
								</div>
							</div>
							<!-- /Pricing -->

							<!-- Services and Specialization -->
							<!-- <div class="card services-card">
								<div class="card-body">
									<h4 class="card-title">Services and Specialization</h4>
									<div class="form-group">
										<label>Services</label>
										<input type="text" data-role="tagsinput" class="input-tags form-control"
											placeholder="Enter Services" name="services" value="Hair Dressing"
											id="services">
										<small class="form-text text-muted">Note : Type & Press enter to add new
											services</small>
									</div>
									<div class="form-group mb-0">
										<label>Specialization </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"
											placeholder="Enter Specialization" name="specialist"
											value="Nails Care,Makeup Specialist" id="specialist">
										<small class="form-text text-muted">Note : Type & Press enter to add new
											specialization</small>
									</div>
								</div>
							</div> -->
							<!-- /Services and Specialization -->

							<!-- Experience -->
							<!-- <div class="card">
								<div class="card-body">
									<h4 class="card-title">Experience</h4>
									<div class="experience-info">
										<div class="row form-row experience-cont">
											<div class="col-12 col-md-10 col-lg-11">
												<div class="row form-row">
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Saloon Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>From</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>To</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Designation</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="add-more">
										<a href="javascript:void(0);" class="add-experience"><i
												class="fa fa-plus-circle"></i> Add More</a>
									</div>
								</div>
							</div> -->
							<!-- /Experience -->

							<!-- Awards -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title"> Best Award </h4>
									<div class="awards-info">
										<div class="row form-row awards-cont">
											<div class="col-12 col-md-5">
												<div class="form-group">
													<label>Awards</label>
													<input type="text" class="form-control" value="<?php echo $row["awards"]; ?>" name="awards">
												</div>
											</div>
											<div class="col-12 col-md-5">
												<div class="form-group">
													<label>Year</label>
													<input type="number" class="form-control" value="<?php echo $row["award_year"]; ?>" name="award_year">
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="add-more">
										<a href="javascript:void(0);" class="add-award"><i
												class="fa fa-plus-circle"></i> Add More</a>
									</div> -->
								</div>
							</div>
							<!-- /Awards -->

							<!-- Memberships -->
							<!-- <div class="card">
								<div class="card-body">
									<h4 class="card-title">Memberships</h4>
									<div class="membership-info">
										<div class="row form-row membership-cont">
											<div class="col-12 col-md-10 col-lg-5">
												<div class="form-group">
													<label>Memberships</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="add-more">
										<a href="javascript:void(0);" class="add-membership"><i
												class="fa fa-plus-circle"></i> Add More</a>
									</div>
								</div>
							</div> -->
							<!-- /Memberships -->

							<!-- Registrations -->
							<!-- <div class="card">
								<div class="card-body">
									<h4 class="card-title">Registrations</h4>
									<div class="registrations-info">
										<div class="row form-row reg-cont">
											<div class="col-12 col-md-5">
												<div class="form-group">
													<label>Registrations</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-12 col-md-5">
												<div class="form-group">
													<label>Year</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="add-more">
										<a href="javascript:void(0);" class="add-reg"><i class="fa fa-plus-circle"></i>
											Add More</a>
									</div>
								</div>
							</div> -->
							<!-- /Registrations -->
		<?php
			$i++;
			}
		?>	
							<!-- Modal for UPDATE -->
											<div id="id02" class="modal">
											<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
											<div class="modal-content">
												<div class="container">
												<h2>Update Account</h2>
												<p>Are you sure you want to Update your account?</p>
												<div class="clearfix">
													<form action="" method="POST"> 
													<button type="button" class="btn btn-outline-light" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
													<button type="submit" class="btn btn-outline-success" name="update" onclick="document.getElementById('id02').style.display='none'" class="deletebtn">Update</button>
													</form>
												</div>
												</div>
											</div> 
											</div>
											<!-- // Modal for UPDATE //-->
							</form>
							<div class="submit-section submit-btn-bottom">
								<button type="submit" class="btn btn-primary submit-btn btn-block" name="update" onclick="document.getElementById('id02').style.display='block'">Save Changes</button>
							
											<div class="login-or"> 
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
								<button type="submit" class="btn btn-danger submit-btn btn-block" onclick="document.getElementById('id01').style.display='block'">Delete My Account</button>
							</div>

							<!-- Modal for Delete -->
											<div id="id01" class="modal">
											<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
											<div class="modal-content">
												<div class="container">
												<h2>Delete Account</h2>
												<p><strong> You will be logged out! </strong>Are you sure you want to delete your account?</p>
												<div class="clearfix">
													<form action="" method="POST"> 
													<button type="button" class="btn btn-outline-primary" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
													<button type="submit" class="btn btn-outline-danger" name="submit" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
													</form>
												</div>
												</div>
											</div> 
											</div>
							<!-- // Modal for Delete //-->

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
										<img src="assets/img/footer-logo.png" alt="logo">
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
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.php"><i class="fas fa-angle-double-right"></i> Search for
												Doctors</a></li>
										<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a>
										</li>
										<li><a href="register.php"><i class="fas fa-angle-double-right"></i>
												Register</a></li>
										<li><a href="booking.php"><i class="fas fa-angle-double-right"></i> Booking</a>
										</li>
										<li><a href="patient-dashboard.php"><i class="fas fa-angle-double-right"></i>
												Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.php"><i class="fas fa-angle-double-right"></i>
												Appointments</a></li>
										<li><a href="chat.php"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a>
										</li>
										<li><a href="doctor-register.php"><i class="fas fa-angle-double-right"></i>
												Register</a></li>
										<li><a href="doctor-dashboard.php"><i class="fas fa-angle-double-right"></i>
												Doctor Dashboard</a></li>
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
											<p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
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
										<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">

									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.php">Terms and Conditions</a></li>
											<li><a href="privacy-policy.php">Policy</a></li>
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
		<!-- /Main Wrapper -->
		<script>
		// Get the delete modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
		// End the delete modal

		// Get the update modal
		var modal = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
		// End update modal
		</script>

		<script type="text/javascript">

			function Validate()
			{
				
				var phNo = document.getElementById( "phoneNo" ).value;
				
				if ( phNo.length < 11 )
				{
					document.getElementById( "print" ).innerHTML = "**Phone Number must be of 11 characters**";
					return false;
				}

				// for username
				return true;

			}
		</script>
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Sticky Sidebar JS -->
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
		<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Dropzone JS -->
		<script src="assets/plugins/dropzone/dropzone.min.js"></script>

		<!-- Bootstrap Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

		<!-- Profile Settings JS -->
		<script src="assets/js/profile-settings.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
<?php
}
else
{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<strong>Cannot Update!</strong> Try Again	
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
 		 </button>
			</div>';
}
?>
	</body>

	<!-- styletory/doctor-profile-settings.php  30 Nov 2019 04:12:15 GMT -->

</html>
