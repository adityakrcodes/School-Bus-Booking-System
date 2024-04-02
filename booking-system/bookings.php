<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/route.css">
    <title>HOME</title>
</head>
<body>
<?php
    session_start();
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $area = $_SESSION["area"];
    $address = $_SESSION["address"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);
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
                <div class="user-info">
                    <h2>Your Bookings</h2>
                <div class="user-info-container">
                    <div class="admin-info-cont">
                        <div class="route-info">
                        <?php
                            $sql = "SELECT * FROM bookings WHERE email = '$email'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class='route-item'>";
                                    echo "<p>Booking ID: " . $row["booking_id"] . "</p>";
                                    echo "<p>Bus Number: " . $row["bus_number"] . "</p>";
                                    echo "<p>Route ID: " . $row["route_id"] . "</p>";
                                    echo "<p>Date: " . $row["date"] . "</p>";
                                    echo "<p>Time: " . $row["time"] . "</p>";
                                    echo "<p>Origin: " . $row["origin"] . "</p>";
                                    echo "<p>Destination: " . $row["destination"] . "</p>";
                                    echo "<form action='cancel-booking.php' method='post'>";
                                    echo "<input type='hidden' name='booking_id' value='" . $row["booking_id"] . "'>";
                                    echo "<button type='submit' class='btn'>Cancel Booking</button>";
                                    echo "</form>";
                                    echo "</div>";

                                }
                            } else {
                                echo "<p>No bookings found</p>";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="dashboard-item">
                <a href="/">
                    <div class="dashboard-item-icon">
                        <img src="/assets/student-icon-stroke.png" alt="" srcset="">
                    </div>
                    <p>Your dashboard</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="../booking-system/book-bus.php">
                    <div class="dashboard-item-icon">
                        <img src="/assets/book-bus.png" alt="" srcset="">
                    </div>
                    <p>Book Bus</p>
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