
<?php
session_start();
 if(!isset($_SESSION['username'])) {
    header("Location: ./../front/register.php");



    exit;
   } 
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: ./../front/register.php");
    }
?>
