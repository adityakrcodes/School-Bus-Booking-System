<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <title>HOME</title>
</head>
<body>
<?php
    session_start();
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $area = $_SESSION["area"];
    $address = $_SESSION["address"];
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
            <a href="">
                <img src="/assets/profile.jpg" alt="" srcset="">
            </a>
        </div>
    </header>
    <section id="home-hero">
        <div class="home-hero-container">
            <div class="user-info">
                <h2>
                    Welcome, <?php echo $name; ?>
                </h2>
            </div>
            
            <div class="bus-booking-cont">
                <h2>Book a bus</h2>
                <form action="" method="post">
                </form>
            </div>
        </div>
        <div class="dashboard">
            <div class="dashboard-item">
                <a href="../home-pages/student-home.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/book-bus.png" alt="" srcset="">
                    </div>
                    <p>Your dashboard</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="./view-bus.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/view-bus.png" alt="" srcset="">
                    </div>
                    <p>View Bus</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="./view-booking.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/view-booking.png" alt="" srcset="">
                    </div>
                    <p>View Booking</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="../logout.php">
                    <div class="dashboard-item-icon">
                        <!-- add svg -->
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

    if (!isset($_SESSION["register"])) {
        header("Location: login.php");
    }
?>