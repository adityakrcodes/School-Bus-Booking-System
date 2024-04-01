<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/admin.css">
    <link rel="stylesheet" href="/styles/route.css">
    <title>Admin Dashboard | Drivers</title>
</head>
<body>
<?php
    if (!isset($_SESSION["email"])) {
        session_start();
    }
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
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

    $sql = "SELECT * FROM drivers";
    $result = $conn->query($sql);
    $drivers = $result->num_rows;

    
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
            <div class="user-info route-btns">
                <a href="add-route.php" class="btn">Add Route</a>
                <a href="delete-route.php" class="btn">Delete Route</a>
            </div>
            <div class="user-info">
                <h2>Bus Routes</h2>
                <div class="user-info-container">
                    <div class="admin-info-cont">
                        <div class="route-info">
                            <?php
                                // get all the data from the routes table and show here
                                $sql = "SELECT * FROM routes";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div class='route-item'>";
                                        echo "<p>Route ID: <span>".$row["route_id"]."</span></p>";
                                        echo "<p>Bus Number: <span>".$row["bus_number"]."</span></p>";
                                        echo "<p>Origin: <span>".$row["origin"]."</span></p>";
                                        echo "<p>Destination: <span>".$row["destination"]."</span></p>";
                                        echo "<p>Schedule: <span>".$row["schedule"]."</span></p>";
                                        echo "</div>";
                                    }
                                } else {
                                    echo "<p>No routes available</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/scripts/script.js"></script>
</body>
</html>