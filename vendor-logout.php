<?php
    session_start();
    // Destroy session
    $_SESSION["username"] = "";
    unset($_SESSION['username']);
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: vendor-login.php");
    }
?>