<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>HOME</title>
</head>
<body>
    <header class="nav-header">
        <nav>
            <div class="logo-container">
                <a href="./index.html">
                    <div class="logo">
                        <img src="/assets/bus-logo.png" alt="" srcset="">
                    </div>
                    <p class="logo-text">
                        School Bus Booking System
                    </p>
                </a>
            </div>
            <div class="nav-items" id="nav-items">
                <a href="/" class="active">Home</a>
            </div>
            <div class="hamburger">
                <span id="openHam">&#9776;</span>
                <span id="closeHam">&#x2716;</span>
            </div>
        </nav>
        <div class="profile">
            <a href="">
                <img src="/assets/profile.jpg" alt="" srcset="">
            </a>
        </div>
       </header>

    LOGGED IN as 
    <a href="/logout.php">Logout</a>
</body>
</html>

<?php
    if (!isset($_SESSION["register"])) {
        header("Location: login.php");
    }

    
    
?>