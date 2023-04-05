<?php

$host = "localhost";
$username = "root";
$password  = "";
$database = "easyzon";

// Conection making with database

$con = mysqli_connect("$host","$username","$password","$database");

if (!$con) {
    // header("location: ./assest/error/error.php");
    die();
}
else {
    echo("connection done");
}

?>