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
    $age = $_SESSION["age"];
    $address = $_SESSION["address"];
    $phone = $_SESSION["phone"];
    $driving_licence = $_SESSION["driving_licence"];

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
                            Age: <span><?php echo $age; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Email: <span><?php echo $email; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Address: <span><?php echo $address; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Phone: <span><?php echo $phone; ?></span>
                        </p>
                    </div>
                    <div class="user-info-item">
                        <p>
                            Driving License: <span><?php echo $driving_licence; ?></span>
                        </p>
                    </div>
                </div>
                <div class="driver-act-btns">
                    <?php 
                        // delete the driver
                        echo "<a href='../delete-driver.php?email=$email' class='delete btn'>Delete your account</a>";
                    ?>                        
                </div>
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
