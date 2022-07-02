<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'styletory');

 
            $con= new mysqli("localhost","root","","styletory");
            // Check connection
            if ($con === false){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

?>