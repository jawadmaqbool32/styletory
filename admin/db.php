<?php
// First way started 
// This file has database configurations.
// user is root 
// and password is blind

// define('DB_SERVER','localhost');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','');
// define('DB_NAME','styletory');

// we try to connect to database;

// $conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// checkk connection is made or nnot

// if($conn===false){
//     die('Error:Connecting Database');
// }

// First way ended 

// second way for db connection 
 
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.

    $con = mysqli_connect("localhost","root","","styletory");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 // Second way ended 



?>