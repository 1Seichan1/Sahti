<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: ./register.php");



        exit;
       } 
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: ./register.php");
    }
?>
