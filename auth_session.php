<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:customer-login.php");
   exit();
}
?>