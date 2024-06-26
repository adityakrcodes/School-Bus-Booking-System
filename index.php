<?php

    session_start();

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    
    $conn = new mysqli($server, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // if the user is already logged in, redirect them to the home page
    if (isset($_SESSION["register"]) && $_SESSION["user"] == "parent") {
        include "home-pages/parent-home.php";
    }else if (isset($_SESSION["register"]) && $_SESSION["user"] == "student") {
        include "home-pages/student-home.php";
    }else if (isset($_SESSION["email"]) && $_SESSION["user"] == "driver") {
        include "home-pages/driver-home.php";
    }else if (isset($_SESSION["email"]) && $_SESSION["user"] == "admin") {
        include "home-pages/admin-home.php";
    }else{
        include "index.html";
    }

?>

<!--
Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.

-->