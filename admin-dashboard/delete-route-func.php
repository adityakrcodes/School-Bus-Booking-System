<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $route_id = $_POST["route_id"];
    $sql = "DELETE FROM routes WHERE route_id='$route_id'";
    if ($conn->query($sql) === TRUE) {
        echo "";
        header("Location: routes.php");
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
