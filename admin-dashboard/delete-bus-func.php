<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // delete bus from bus_info table with bus_number
    $bus_number = $_POST["bus_number"];
    $sql = "DELETE FROM bus_info WHERE bus_number = '$bus_number'";
    if ($conn->query($sql) === TRUE) {
        header("Location: buses.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
