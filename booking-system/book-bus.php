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
                <div class="user-info">
                    <h2>Book a bus</h2>
                </div>
                <div class="form-cont" style="margin-top: 0;">
                    <form action="book.php" method="post">
                    
                        <div class="book-place">
                            <div class="origin">
                                <label for="origin">Origin</label>
                                <select name="origin" id="origin" required>
                                    <option value="default" selected disabled>Default</option>
                                    <option value="school">School</option>
                                    <option value="manyata">Manyata</option>
                                    <option value="hebbal">Hebbal</option>
                                    <option value="yelahanka">Yelahanka</option>
                                    <option value="jakkur">Jakkur</option>
                                    <option value="kogilu">Kogilu</option>
                                    <option value="kempapura">Kempapura</option>
                                    <option value="nagavara">Nagavara</option>
                                    <option value="hennur">Hennur</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="kammanahalli">Kammanahalli</option>
                                    <option value="banaswadi">Banaswadi</option>
                                    <option value="horamavu">Horamavu</option>
                                    <option value="ramamurthy">Ramamurthy</option>
                                    <option value="kasturi">Kasturi</option>
                                    <option value="kothanur">Kothanur</option>
                                    <option value="kannur">Kannur</option>
                                    <option value="hormavu">Hormavu</option>
                                    <option value="kalkere">Kalkere</option>
                                    <option value="nri">NRI Layout</option>
                                    <option value="hrbr">HRBR Layout</option>
                                    <option value="kammanahalli">Kammanahalli</option>
                                    <option value="kalyan">Kalyan Nagar</option>
                                    <option value="banaswadi">Banaswadi</option>
                                    <option value="horamavu">Horamavu</option>
                                    <option value="ramamurthy">Ramamurthy Nagar</option>
                                    <option value="kasturi">Kasturi Nagar</option>
                                    <option value="kothanur">Kothanur</option>
                                    <option value="hormavu">Hormavu</option>
                                    <option value="kalkere">Kalkere</option>
                                </select>
                            </div>
                            <div class="destination">
                                <label for="destination">Destination</label>
                                <select name="destination" id="destination" required>
                                    <option value="default" selected disabled>Default</option>
                                    <option value="school">School</option>
                                    <option value="manyata">Manyata</option>
                                    <option value="hebbal">Hebbal</option>
                                    <option value="yelahanka">Yelahanka</option>
                                    <option value="jakkur">Jakkur</option>
                                    <option value="kogilu">Kogilu</option>
                                    <option value="kempapura">Kempapura</option>
                                    <option value="nagavara">Nagavara</option>
                                    <option value="hennur">Hennur</option>
                                    <option value="kalyan">Kalyan</option>
                                    <option value="kammanahalli">Kammanahalli</option>
                                    <option value="banaswadi">Banaswadi</option>
                                    <option value="horamavu">Horamavu</option>
                                    <option value="ramamurthy">Ramamurthy</option>
                                    <option value="kasturi">Kasturi</option>
                                    <option value="kothanur">Kothanur</option>
                                    <option value="kannur">Kannur</option>
                                    <option value="hormavu">Hormavu</option>
                                    <option value="kalkere">Kalkere</option>
                                    <option value="nri">NRI Layout</option>
                                    <option value="hrbr">HRBR Layout</option>
                                    <option value="kammanahalli">Kammanahalli</option>
                                    <option value="kalyan">Kalyan Nagar</option>
                                    <option value="banaswadi">Banaswadi</option>
                                    <option value="horamavu">Horamavu</option>
                                    <option value="ramamurthy">Ramamurthy Nagar</option>
                                    <option value="kasturi">Kasturi Nagar</option>
                                    <option value="kothanur">Kothanur</option>
                                    <option value="hormavu">Hormavu</option>
                                    <option value="kalkere">Kalkere</option>
                                </select>
                            </div>
                        </div>
                        <div class="book-place">
                            <div class="date">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date" required>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn">Book</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="dashboard-item">
                <a href="/">
                    <div class="dashboard-item-icon">
                        <img src="/assets/book-bus.png" alt="" srcset="">
                    </div>
                    <p>Your dashboard</p>
                </a>
            </div>
            <div class="dashboard-item">
                <a href="bookings.php">
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

    if (!isset($_SESSION["register"])) {
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
