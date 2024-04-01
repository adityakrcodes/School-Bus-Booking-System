<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/admin.css">
    <link rel="stylesheet" href="/styles/route.css">
    <title>Admin Dashboard | Add Bus</title>
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
            <div class="form-cont" style="margin-top:0;">
                <h1>Add a Bus</h1>
                <form action="add-buss-func.php" method="POST">
                    <label for="bus_number">Bus Number</label>
                    <input type="text" name="bus_number" id="bus_number" required>

                    <?php
                        $sql = "SELECT * FROM drivers";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<label for='driver'>Driver</label>";
                            echo "<select name='driver' id='driver' required>";
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
                            }
                            echo "</select>";
                        } else {
                            echo "No drivers available";
                        }
                    ?>

                    <label for="availability">Availability</label>
                    <select name="availability" id="availability" required>
                        <option value="1">Available</option>
                        <option value="0">Not Available</option>
                    </select>

                    <button type="submit" class="btn">Add Bus</button>
                </form>
            </div>
            <div class="user-info route-btns">
                <a href="buses.php" class="btn">Go Back</a>
                <a href="delete-buss.php" class="btn">Delete a Bus</a>
            </div>
        </div>
    </section>
    <script src="/scripts/script.js"></script>
</body>
</html>