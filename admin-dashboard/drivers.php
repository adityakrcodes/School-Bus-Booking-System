<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/admin.css">
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
            <div class="user-info">
                <h2>Drivers</h2>
                <div class="user-info-container">
                    <div class="user-info-item">
                        <p>
                            Total drivers: <span><?php echo $drivers; ?></span>
                        </p>
                    </div>
                    <div class="admin-info-cont">
                    <?php
                    $sql = "SELECT name, age, address, phone, email, driving_licence, password, timestamp FROM drivers";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='admin-info-card'>";
                            echo "<h2>" . $row["name"] . "</h2>";
                            echo "<p><strong>Age:</strong> " . $row["age"] . "</p>";
                            echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
                            echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
                            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                            echo "<p><strong>Driving Licence:</strong> " . $row["driving_licence"] . "</p>";
                            echo "<p><strong>Creation Time:</strong> " . $row["timestamp"] . "</p>";
                            echo "<br>";
                            echo "<a class='btn' href='./admin-edit-driver.php?email=" . $row["email"] . " '>Edit</a>";
                            echo "</div>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/scripts/script.js"></script>
</body>
</html>