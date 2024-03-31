<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <title>Drivers Dashboard</title>
</head>
<body>
<?php
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
?>
    <header class="nav-header">
        <nav>
            <div class="logo-container">
                <a href="/">
                    <div class="logo">
                        <img src="/assets/bus-logo.png" alt="" srcset="">
                    </div>
                    <p class="logo-text web">
                        School Bus Booking System
                    </p>
                    <p class="logo-text mob">
                        SBBS
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
            <a href="#">
                <img src="/assets/profile.jpg" alt="" srcset="">
            </a>
        </div>
    </header>
    <section id="home-hero">
        <div class="home-hero-container">
            <div class="user-info">
                <h2>Drivers Dashboard</h2>
                <div class="user-info-container">
                    <div class="user-info-item profile-img-cont">
                        <?php 
                            if (isset($_SESSION["profile"])) {
                                $profile = $_SESSION["profile"];
                            }else{
                                $profile = "/assets/profile.jpg";
                            }
                            echo "<img src='$profile' alt='' srcset='' class='profile-img'>";
                        ?>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Name: <span><?php echo $name; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Email: <span><?php echo $email; ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="dashboard-item">
                <a href="./view-bus.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/view-bus.png" alt="" srcset="">
                    </div>
                    <p>View Buses</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="./view-booking.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/view-booking.png" alt="" srcset="">
                    </div>
                    <p>View Bookings</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="../logout.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/logout.svg" alt="" srcset="" class="logout">
                    </div>
                    <p>Logout</p>
                </a>
            </div>
        </div>
    </section>
    <script src="/scripts/script.js"></script>
</body>
</html>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
    }
?>