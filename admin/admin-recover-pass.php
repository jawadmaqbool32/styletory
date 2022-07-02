
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
    if(isset($_POST["reset"]))
    {
        //get POST data
		$password = $_POST['password'];    
		//create a session for the data incase error occurs
		$_SESSION['password'] = $password;

		//get user details
		$sql = "SELECT * FROM admin WHERE email = '".$_SESSION['email']."'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();
           
		//check if old password is correct
			//check if new password match retype
				//hash our password
				$password = password_hash($password, PASSWORD_DEFAULT);
				//update the new password
				$sql = "UPDATE admin SET password = '$password' WHERE email = '".$_SESSION['email']."'";
				if($con->query($sql))
				{
						echo '<script>alert("Password Reset!")</script>';
						echo '<script>window.location.href="index.php"</script>';
				}
				else
                {
					echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong> Sorry!</strong> Failed To Update Password. 
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
										<input type="password" maxlength="12" class="form-control floating" name="password" id="password" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; ?>" placeholder="Enter Password" required ><span id="message" style="color:red"> </span>
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" name="reset" type="submit" onclick="return Validate()">Reset Password</button>
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
<script type="text/javascript">
		function Validate() {
				var password = document.getElementById( "password" ).value;
				var pw = document.getElementById( "password" ).value;
				if ( pw == "" )
				{
					document.getElementById( "message" ).innerHTML = "**Fill the password please!**";
					return false;

				}
				if ( pw.length < 8 )
				{
					document.getElementById( "message" ).innerHTML = "**Password length must be atleast 8 characters**";
					return false;
				}

				//maximum length of password validation  
				if ( pw.length > 15 )
				{
					document.getElementById( "message" ).innerHTML = "**Password length must not exceed 15 characters**";
					return false;
				}

		}
</script>
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>