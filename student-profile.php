<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/home.css">
    <title>HOME</title>
</head>
<body>
<?php
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $area = $_SESSION["area"];
    $address = $_SESSION["address"];
?>
    <header class="nav-header">
        <nav>
            <div class="logo-container">
                <a href="./index.php">
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
                <h2>Student Home</h2>
                <!-- make a user dashboard -->
                <div class="user-info-container">
                    <div class="user-info-item profile-img-cont">
                        <?php 
                            // check if the profile image exists in mysql database and in the session
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
                    <div class="user-info-item">
                        <p>
                            Area: <span><?php echo $area; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Address: <span><?php echo $address; ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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