<!-- code for deletion in vendor_services table  -->
<?php
require("db.php");
require("auth_session.php");
$id=$_GET["id"];
                $query = "DELETE FROM vendor_services WHERE vs_id=$id"; 
                $result = mysqli_query($con,$query);
?>
<script type="text/javascript">
    window.location="vendor-fares.php";
    alert("Services Deleted! Click Ok");
</script>
