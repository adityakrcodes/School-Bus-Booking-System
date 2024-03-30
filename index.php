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
    if (isset($_SESSION["register"])) {
        include "student-home.php";
    }else{
        include "index.html";
    }

?>