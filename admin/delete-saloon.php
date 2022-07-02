<?php
require("db.php");
require("auth_session.php");
$id=$_GET["id"];
                $query = "DELETE FROM vendor WHERE id=$id"; 
                $result = mysqli_query($con,$query);
				if($result)
				{	 
					   echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
						<strong> Account Deleted!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'. mysqli_error($con);		
				}else{ 
						echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong> Could Not Perform the Operation!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
	}
?>
<script type="text/javascript">
    window.location="saloon-details.php";
</script>
