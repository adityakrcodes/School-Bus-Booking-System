<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <title>Admin Dashboard</title>
</head>
<body>
<?php
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    $students = $result->num_rows;

    $sql = "SELECT * FROM drivers";
    $result = $conn->query($sql);
    $drivers = $result->num_rows;

    $sql = "SELECT * FROM routes";
    $result = $conn->query($sql);
    $routes = $result->num_rows;

    $sql = "SELECT * FROM bus_info";
    $result = $conn->query($sql);
    $buses = $result->num_rows;
    
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
                <a href="./admin-students.php">Students</a>
                <a href="./admin-drivers.php">Drivers</a>
                <a href="./admin-routes.php">Routes</a>
                <a href="./admin-buses.php">Buses</a>
                <a href="./logout.php">Logout</a>
            </div>
            <div class="hamburger">
                <span id="openHam">&#9776;</span>
                <span id="closeHam">&#x2716;</span>
            </div>
        </nav>
    </header>
    <section id="home-hero">
        <div class="home-hero-container">
            <div class="user-info">
                <h2>Admin Dashboard</h2>
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
                <a href="/admin-dashboard/students.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/student-icon-stroke.png" alt="" srcset="">
                    </div>
                    <p>Students - <span><?php echo $students; ?></span></p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="/admin-dashboard/drivers.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/driver-icon-stroke.png" alt="" srcset="">
                    </div>
                    <p>Drivers - <span><?php echo $drivers; ?></span></p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="/admin-dashboard/routes.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/route.png" alt="" srcset="">
                    </div>
                    <p>Routes - <span><?php echo $routes; ?></span></p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="/admin-dashboard/buses.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/view-bus.png" alt="" srcset="">
                    </div>
                    <p>Buses - <span><?php echo $buses; ?></span></p>
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


<!--
Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.

-->
