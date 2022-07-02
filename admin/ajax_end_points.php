<?php
require('db.php');
if (isset($_REQUEST['booking_detail'])) {
    $booking   = stripslashes($_REQUEST['booking']);
    $booking  = mysqli_real_escape_string($con, $booking);
    $booking_query = "SELECT booking.status,booking.time_to, booking.time_from, booking.id,booking.total_amount, booking.booking_date, vendor.fullname, services.name
    FROM ((booking
    INNER JOIN vendor ON booking.vendor_id = vendor.id)
    INNER JOIN services ON booking.service_id = services.id) 
    WHERE booking.id = '$booking'
    ";
    $bookings = mysqli_query($con, $booking_query);
    $bookings = mysqli_fetch_array($bookings);
?>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Saloon</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['fullname'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Booking Date</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  date('d M Y', strtotime($bookings['booking_date'])) ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Booking Slot</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  date('H:i A', strtotime($bookings['time_from'])) ?> to <?php echo  date('H:i A', strtotime($bookings['time_to']))  ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Service</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['name'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Amount Spent</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['total_amount'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn 
            <?php
            if ($bookings['status'] == 'approved') {
                echo "bg-success-light";
            } else if ($bookings['status'] == 'pending') {
                echo "bg-primary-light";
            } else {
                echo "bg-danger-light";
            }
            ?>
            
            "><?php echo strtoupper($bookings['status']) ?></a>
        </div>
    </div>
<?php
}

if (isset($_REQUEST['booking_detail_saloon'])) {
    $booking   = stripslashes($_REQUEST['booking']);
    $booking  = mysqli_real_escape_string($con, $booking);
    $booking_query = "SELECT booking.status, booking.time_to, booking.time_from, booking.id,booking.total_amount, booking.booking_date, customer.fullname, services.name
    FROM ((booking
    INNER JOIN customer ON booking.customer_id = customer.id)
    INNER JOIN services ON booking.service_id = services.id) 
    WHERE booking.id = '$booking'
    ";
    $bookings = mysqli_query($con, $booking_query);
    $bookings = mysqli_fetch_array($bookings);
?>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Customer</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['fullname'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Booking Date</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  date('d M Y', strtotime($bookings['booking_date'])) ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Booking Slot</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  date('H:i A', strtotime($bookings['time_from'])) ?> to <?php echo  date('H:i A', strtotime($bookings['time_to']))  ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Service</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['name'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-sm-4" style="padding: 15px"><strong>Amount Spent</strong></div>
        <div class="col-sm-8" style="padding: 15px"><strong><?php echo  $bookings['total_amount'] ?></strong></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn 
            <?php
            if ($bookings['status'] == 'approved') {
                echo "bg-success-light";
            } else if ($bookings['status'] == 'pending') {
                echo "bg-primary-light";
            } else {
                echo "bg-danger-light";
            }
            ?>
            
            "><?php echo strtoupper($bookings['status']) ?></a>
        </div>
    </div>
<?php
}
if (isset($_REQUEST['sales_report_filter'])) {
    $vendor   = stripslashes($_REQUEST['vendor']);
    $date_from   = stripslashes($_REQUEST['date_from']);
    $date_to   = stripslashes($_REQUEST['date_to']);
    $vendor  = mysqli_real_escape_string($con, $vendor);
    $date_from  = mysqli_real_escape_string($con, $date_from);
    $date_to  = mysqli_real_escape_string($con, $date_to);

?>
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
                                $total_customers = 0;
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
                                ?>
                                    <?php
                                    while ($row = mysqli_fetch_array($bookings)) {
                                        $total_customers++;
                                        $total_services[$row['name']] = 1;
                                        $total_revenue += $row['total_amount'];
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
<?php

}
