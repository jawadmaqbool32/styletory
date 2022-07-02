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
  <title>StyleTory - Sales Report</title>

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
  <style>
    body {
      padding: 40px;
      background-color: #fff;
    }

    .image-container {
      overflow: hidden;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 0px auto;
    }

    .card-text {
      font-size: 25px;
      font-weight: bold;
    }
  </style>
</head>

<body class="A4">
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <div class="row" style="margin-top: 20px;">
      <?php
      $vendor   = stripslashes($_REQUEST['vendor']);
      $date_from   = stripslashes($_REQUEST['date_from']);
      $date_to   = stripslashes($_REQUEST['date_to']);
      $vendor  = mysqli_real_escape_string($con, $vendor);
      $date_from  = mysqli_real_escape_string($con, $date_from);
      $date_to  = mysqli_real_escape_string($con, $date_to);
      $vendor_query = "SELECT * FROM  `vendor` WHERE `id` = '$vendor'";
      $vendor_ = mysqli_query($con, $vendor_query);
      $vendor_ = mysqli_fetch_array($vendor_);

      ?>
      <div class="col-sm-2 text-center">
        <div class="image-container">
          <img src="upload/<?php echo $vendor_['image'] ?>" alt="<?php echo $vendor_['fullname'] ?>">
        </div>
      </div>
      <div class="col-sm-8 text-center">
        <h1 style="margin-top: -10px;"><?php echo $vendor_['fullname'] ?></h1>
        <h4 style="margin-bottom: 0px; border-bottom: 2px solid #898989;"><?php echo $vendor_['address'] ?></h4>
        <h6 style="margin-top: 5px;"><?php echo $vendor_['phoneNo'] ?></h6>
      </div>
      <div class="col-sm-2"></div>
    </div>
    <br><br><br>
    <?php
    $total_revenue = 0;
    $total_customers = 0;
    $total_services = [];
    $booking_query = "SELECT booking.total_amount, booking.booking_date, customer.fullname, services.name
                          FROM ((booking
                          INNER JOIN customer ON booking.customer_id = customer.id)
                          INNER JOIN services ON booking.service_id = services.id) 
                          WHERE `vendor_id` = '$vendor'
                          AND `booking_date` >= '$date_from'
                          AND `booking_date` <= '$date_to'
                          AND `status` <= 'approved'
                          ";
    $bookings = mysqli_query($con, $booking_query);
    if (mysqli_num_rows($bookings) > 0) {
      while ($row = mysqli_fetch_array($bookings)) {
        $total_customers++;
        $total_services[$row['name']] = 1;
        $total_revenue += $row['total_amount'];
      }
    }
    ?>
    <div class="row">
      <div class="col-sm-4">
        <div class="card text-start">
          <div class="card-body">
            <h4 class="text-success card-title">Revenue <span style="float:right"><i class="fa fa-money"></i></span></h4>
            <p class="text-success text-right card-text">
              <?php echo $total_revenue ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-start">
          <div class="card-body">
            <h4 class="text-info card-title">Bookings <span style="float:right"><i class="fa fa-users"></i></span></h4>
            <p class="text-info text-right card-text">
              <?php echo $total_customers ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-start">
          <div class="card-body">
            <h4 class="text-primary card-title">Services <span style="float:right"><i class="fa fa-server"></i></span></h4>
            <p class="text-primary text-right card-text">
              <?php echo sizeof($total_services) ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="card card-table flex-fill">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-center mb-0">
                <thead>
                  <tr>
                    <th>SR#</th>
                    <th>Customer Name</th>
                    <th>Date</th>
                    <th>Requested Service</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>


                  <?php

                  $booking_query = "SELECT booking.total_amount, booking.booking_date, customer.fullname, services.name
                                FROM ((booking
                                INNER JOIN customer ON booking.customer_id = customer.id)
                                INNER JOIN services ON booking.service_id = services.id) 
                                WHERE `vendor_id` = '$vendor'
                                AND `booking_date` >= '$date_from'
                                AND `booking_date` <= '$date_to'
                                AND `status` <= 'approved'
                                ";
                  $bookings = mysqli_query($con, $booking_query);
                  if (mysqli_num_rows($bookings) > 0) {
                    while ($row = mysqli_fetch_array($bookings)) {
                      $total_customers++;
                  ?>
                      <tr>
                        <td><?php echo $total_customers ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo date('d-M-Y', strtotime($row['booking_date'])) ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['total_amount'] ?></td>
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
    </div>
  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Slimscroll JS -->
  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="assets/plugins/raphael/raphael.min.js"></script>
  <script src="assets/plugins/morris/morris.min.js"></script>
  <script src="assets/js/chart.morris.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
  <script>
    $(document).ready(function() {
      window.print();
      window.onafterprint = function() {
        history.go(-1);
      };
    })
  </script>
</body>

<!-- Mirrored from dreamguys.co.in/demo/styletory/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->

</html>