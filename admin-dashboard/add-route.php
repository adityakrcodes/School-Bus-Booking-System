<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/admin.css">
    <link rel="stylesheet" href="/styles/route.css">
    <title>Admin Dashboard | Add Routes</title>
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
                <form action="add-route-func.php" method="POST">
                    <label for="bus_number">Bus Number</label>
                    <select name="bus_number" id="bus_number">
                        <?php
                            $sql = "SELECT bus_number, driver_name FROM bus_info";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='".$row["bus_number"]."'>".$row["bus_number"]." - ".$row["driver_name"]."</option>";
                                }
                            } else {
                                echo "<option value='default' selected disabled>No buses available</option>";
                            }
?>
                    </select>

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
                    
                    <label for="schedule">Schedule</label>
                    <input type="time" name="schedule" id="schedule" required>
                    
                    <button type="submit" class="btn">Add Route</button>
                </form>
            </div>
            <div class="user-info route-btns">
                <a href="routes.php" class="btn">Go Back</a>
                <a href="delete-route.php" class="btn">Delete a route</a>
            </div>
        </div>
    </section>
    <script src="/scripts/script.js"></script>
</body>
</html>