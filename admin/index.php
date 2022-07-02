<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from dreamguys.co.in/demo/styletory/admin/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->

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

<?php
    require('db.php');
    session_start();
		
    // When form submitted, check and create user session.
    if(isset($_REQUEST['username'])) 
	{
		    $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user exist in the database
        $query= "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
			while ($rows=mysqli_fetch_assoc($result))
			{
					if(password_verify($password,$rows['password']))
					{
                echo "221;";
								session_regenerate_id();
								$_SESSION['username'] = $_POST['username'];
									// Redirect to admin dashboard page
									header("Location:admin-dashboard.php");
					}else{
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>ALERT!</strong> Wrong Password. <strong>TRY AGAIN!</strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>';
      					}
			}
		}else
					{
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>ALERT!</strong> Wrong Username or Password. <strong>TRY AGAIN!</strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>';
					}
           
}
?>



  <body style="background-color: #afbddb">
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
                <h1>Login</h1>
                <p class="account-subtitle">Access to our dashboard</p>

                <!-- Form -->
                <form action="" method="POST">
                  <div class="form-group">
                    <input
                      class="form-control"
                      type="text" name="username" maxlength="40"
                      placeholder="Username"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <input
                      class="form-control"
                      type="password" name="password" maxlength="12"
                      placeholder="Password"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">
                      Login
                    </button>
                  </div>
                </form>
                <!-- /Form -->

                <div class="text-center forgotpass">
                  <a href="forgot-password.php">Forgot Password?</a>
                </div>
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

</html>
