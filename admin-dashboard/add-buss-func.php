<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $bus_number = $_POST["bus_number"];
    $driver_name = $_POST["driver"];
    $availability = $_POST["availability"];
    $sql = "INSERT INTO bus_info (driver_name, bus_number, availability) VALUES ('$driver_name', '$bus_number', '$availability')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./buses.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>


<!--
Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.

-->
