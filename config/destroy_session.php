
<!-- This script is used in Dashboard.php  -->
<!-- Purpose of this code is logout session also redirect to Login Page For 
        Again Login
-->
<?php
session_start();
session_destroy();
header("Location: ../login.php"); // Redirect to home page or any other page after destroying the session
?>
