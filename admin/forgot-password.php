
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
    if(isset($_POST["recover"]))
    {
        $email = $_POST["email"];
        $sql = mysqli_query($con, "SELECT * FROM admin WHERE email='$email'");
       $recipient=$email;
        if(mysqli_num_rows($sql)>0)
        {
            $otp=rand(100000,999999);			
            $_SESSION['email'] = $email;
            $_SESSION['otp'] = $otp;
            $subject = "Email from admin for RECOVER PASSWORD";
            $message = "Hi there hope so you doing good...\nEnter this otp ".$otp." to reset admin password";
            $sender = "From:mh5436768@gmail.com";
            if(mail($recipient,$subject,$message,$sender))
            {
              ?>
              <script>alert("Mail Sent!")</script>
              <script>window.location.href="admin-otp.php"</script>;
            <?php
            }
        }
            else
            {
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>ALERT!</strong> No <strong>EMAIL</strong> exists. 	
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';

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
								<h1>Forgot Password?</h1>
								<p class="account-subtitle">Enter your email to get a password reset link</p>
								
								<!-- Form -->
								<form method="POST" action="" name="myform">
									<div class="form-group">
										<input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" name="recover" type="submit" onclick="return Validate()">Send Mail</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center dont-have">Remember your password? <a href="index.php">Login</a></div>
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
<script>
  	// email validation 
    function Validate()
    {
				var x = document.myform.email.value;
				var atposition = x.indexOf( "@" );
				var dotposition = x.lastIndexOf( "." );
				if ( atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length )
				{
					alert( "Invalid Email Address" );
					return false;
				}
    }
</script>
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>