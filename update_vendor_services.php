<!-- code for deletion in vendor_services table  -->
<?php
require("db.php");
require("auth_session.php");
 
$vs_id=$_POST["vs_id"];
$price=$_POST["price"];
$time=$_POST["time"];
echo $vs_id;
                $query = "UPDATE vendor_services SET price=$price,time=$time where vs_id=$vs_id"; 
                $result = mysqli_query($con,$query);
 
?>
<script type="text/javascript">
    window.location="vendor-fares.php";
    // alert("Price Updated! Click Ok") ;
</script>
<!-- code for deletion in vendor_services table  -->

 