
<?php
	session_start();
	session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>StyleTory - Admin Login</title>

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
<?php 
    require('db.php');
    if(isset($_REQUEST['send']))
    {
        if($_SESSION['otp']==$_POST['otp'])
        {
                echo '<script>alert("Successfully Verified!")</script>';
                echo '<script>window.location.href="admin-recover-pass.php"</script>";';
        }else{
                echo '<script>alert(" Wrong OTP!")</script>';
        }
    }

?>	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img
								class="img-fluid"
								src="assets/img/styletory.jpg"
								alt="Logo"
							/>
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Confirm OTP</h1>
								<p class="account-subtitle">Enter OTP from the mail we sent!</p>
								
								<!-- Form -->
								<form method="POST" action="" name="myform">
								<div class="form-group">
                                    <input type="number" maxlength="10" class="form-control floating" name="otp" placeholder="Enter OTP">
                                </div>
								<button class="btn btn-primary btn-block btn-lg login-btn" type="submit"  name="send">Confirm OTP</button>
								</form>
								<!-- /Form -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>