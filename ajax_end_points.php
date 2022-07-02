<?php
require('db.php');
if (isset($_REQUEST['get_vendor_info'])) {

  $vendor  = stripslashes($_REQUEST['vendor']);

  $services_arr = [];
  $members_arr = [];

  $vss = mysqli_query($con, "SELECT * FROM `vendor_services` where `vendors_id`=" . $vendor);
  $members = mysqli_query($con, "SELECT * FROM `staff_members` where `vendor_id`=" . $vendor);
  while ($vs = mysqli_fetch_array($vss)) {
    $services = mysqli_query($con, "SELECT * FROM `services` where `id` = " . $vs['services_id']);
    while ($row = mysqli_fetch_array($services)) {
      array_push($services_arr, ['id' => $row['id'], 'name' => $row['name'], 'time' => $vs['time'], 'price' => $vs['price']]);
    }
  }
  while ($row = mysqli_fetch_array($members)) {

    $services = mysqli_query($con, "SELECT * FROM `services` where `id` = " . $row['speciality']);
    $speciality = '';
    while ($member_speciality = mysqli_fetch_array($services)) {
      $speciality =  $member_speciality['name'];
    }
    array_push($members_arr, ['id' => $row['id'], 'speciality' => $speciality, 'name' => $row['name']]);
  }
  echo json_encode(['success' => true, 'members' => $members_arr, 'services' => $services_arr]);
}

if (isset($_REQUEST['get_member_schedule'])) {

  $member  = stripslashes($_REQUEST['member']);
  $date  = stripslashes($_REQUEST['date']);
  $vendor  = stripslashes($_REQUEST['vendor']);

  $day = DateTime::createFromFormat('Y-m-d', $date);
  $day = strtolower($day->format('l'));

  $time_schedule = mysqli_query($con, "SELECT * FROM `time_schedules`  where `day` = '$day' AND `vendor_id` = '$vendor'");

  $schedule = mysqli_fetch_array($time_schedule);




  $appointments = mysqli_query($con, "SELECT * FROM `booking`  WHERE  `booking_date` = '$date' AND `member_id` = '$member' AND `status` = 'approved'");
  if (isset($schedule['from'])) {

    $last_reserved_time = $schedule['from'];
    // $this_reserved_time =  ;
    while ($appointment = mysqli_fetch_array($appointments)) {
      $this_reserved_time = $appointment['time_from'];
      if ($last_reserved_time !== $this_reserved_time) {
?>
        <button type="button" style="margin: 5px;" class="available-time-slot btn btn-info" data-from="<?php echo $last_reserved_time ?>" data-to="<?php echo $this_reserved_time ?>"><?php echo date('h:i A', strtotime($last_reserved_time)) . ' - ' . date('h:i A', strtotime($this_reserved_time)) ?></button>
      <?php
      }
      ?>
      <button type="button" style="margin: 5px;" class="btn btn-light" disabled><?php echo date('h:i A', strtotime($appointment['time_from'])) . ' - ' . date('h:i A', strtotime($appointment['time_to'])) ?></button>
    <?php
      $last_reserved_time = $appointment['time_to'];
    }
    if (strtotime($last_reserved_time) < strtotime($schedule['to'])) {
    ?>
      <button type="button" style="margin: 5px;" class="available-time-slot btn btn-info" data-from="<?php echo $last_reserved_time ?>" data-to="<?php echo $schedule['to'] ?>"><?php echo date('h:i A', strtotime($last_reserved_time)) . ' - ' . date('h:i A', strtotime($schedule['to'])) ?></button>
    <?php
    }
  } else {
    ?>
    <strong class="text-danger">Off Day</strong>
<?php
  }
}

if (isset($_REQUEST['booking_search'])) {
  $key_word = stripslashes($_REQUEST['key_word']);
  $key_word  = mysqli_real_escape_string($con, $key_word);
  if ($key_word) {

    $vendors =  mysqli_query($con, "SELECT * FROM `vendor` WHERE `fullname` LIKE '%$key_word%' OR `address` LIKE '%$key_word%' OR `specialization` LIKE '%$key_word%'");
  } else {
    $vendors =  mysqli_query($con, "SELECT * FROM `vendor`");
  }
  while ($row = mysqli_fetch_array($vendors)) {
    include('./booking_table.php');
    echo '</div>';
  }
}
if (isset($_REQUEST['booking_filter'])) {
  $distance = stripslashes($_REQUEST['distance']);
  $day = stripslashes($_REQUEST['day']);
  $service = stripslashes($_REQUEST['service']);
  $price_from   = stripslashes($_REQUEST['price_from']);
  $price_to   = stripslashes($_REQUEST['price_to']);
  $latitude   = stripslashes($_REQUEST['latitude']);
  $longitude   = stripslashes($_REQUEST['longitude']);


  $distance  = mysqli_real_escape_string($con, $distance);
  $day  = mysqli_real_escape_string($con, $day);
  $service  = mysqli_real_escape_string($con, $service);
  $price_from  = mysqli_real_escape_string($con, $price_from);
  $price_to  = mysqli_real_escape_string($con, $price_to);
  $latitude  = mysqli_real_escape_string($con, $latitude);
  $longitude  = mysqli_real_escape_string($con, $longitude);


  $distance_arr = [];
  $day_arr = [];
  $service_arr = [];
  $price_from_arr = [];
  $price_to_arr = [];

  if ($distance) {
  }
  if ($day) {
    $time_schedules =  mysqli_query($con, "SELECT * FROM `time_schedules` WHERE `day` = '$day'");
    while ($time_schedule = mysqli_fetch_array($time_schedules)) {
      $day_arr[$time_schedule['vendor_id']] = '';
    }
  }
  if ($service) {
    $vendor_services =  mysqli_query($con, "SELECT * FROM `vendor_services` WHERE `services_id` = '$service'");
    while ($vendor_service = mysqli_fetch_array($vendor_services)) {
      $service_arr[$vendor_service['vendors_id']] = '';
    }
  }
  if ($price_from) {
    $vendor_services =  mysqli_query($con, "SELECT * FROM `vendor_services` WHERE `price` >= '$price_from'");
    while ($vendor_service = mysqli_fetch_array($vendor_services)) {
      $price_from_arr[$vendor_service['vendors_id']] = '';
    }
  }
  if ($price_to) {
    $vendor_services =  mysqli_query($con, "SELECT * FROM `vendor_services` WHERE `price` <= '$price_to'");
    while ($vendor_service = mysqli_fetch_array($vendor_services)) {
      $price_to_arr[$vendor_service['vendors_id']] = '';
    }
  }
  $vendors =  mysqli_query($con, "SELECT * FROM `vendor`");
  while ($row = mysqli_fetch_array($vendors)) {
    if ($day) {
      if (!isset($day_arr[$row['id']])) {
        continue;
      }
    }
    if ($service) {
      if (!isset($service_arr[$row['id']])) {
        continue;
      }
    }
    if ($price_from) {
      if (!isset($price_from_arr[$row['id']])) {
        continue;
      }
    }
    if ($price_to) {
      if (!isset($price_to_arr[$row['id']])) {
        continue;
      }
    }
    if ($distance) {
      $condinate_from = new stdClass();
      $condinate_to = new stdClass();
      $condinate_from->latitude = $latitude;
      $condinate_from->longitude = $longitude;
      $condinate_to->latitude = $row['latitude'];
      $condinate_to->longitude = $row['longitude'];
      $vendor_distance = calculate_distance($condinate_from, $condinate_to);
      if ($vendor_distance  > $distance) {
        continue;
      } else {
        $row['distance'] = round($vendor_distance, 2);
      }
    }

    include('./booking_table.php');
    echo '</div>';
  }
}



function calculate_distance($condinate_from, $condinate_to)
{
  $latitude_from = deg2rad($condinate_from->latitude);
  $longitude_from = deg2rad($condinate_from->longitude);
  $latitude_to = deg2rad($condinate_to->latitude);
  $longitude_to = deg2rad($condinate_to->longitude);
  $del_lat = $latitude_from - $latitude_to;
  $del_lon = $longitude_from - $longitude_to;
  $earth_radius =  6371;
  $angle = 2 * asin(sqrt(pow(sin($del_lat / 2), 2) + cos($latitude_from) * cos($latitude_to) * pow(sin($del_lon / 2), 2)));
  return $angle * $earth_radius;
}
